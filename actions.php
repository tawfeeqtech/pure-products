<?php
include "conn.php";
$nameErr = $descriptionErr = $brandErr = $priceErr = "";
$name = $description = $brand = $price = "";

// add new product
if (($_SERVER["REQUEST_METHOD"] === "POST")) {

    if(isset($_POST['add'])){
        if (empty($_POST["name"])) {
            $nameErr = "هذا الحقل مطلوب";
        } elseif (is_numeric($_POST["name"])) {
            $nameErr = "يجب ان يكون الحقل نص";
        } else {
            $name = check_input($_POST["name"]);
        }

        if (empty($_POST["description"])) {
            $descriptionErr = "هذا الحقل مطلوب";
        } elseif (is_numeric($_POST["description"])) {
            $descriptionErr = "يجب ان يكون الحقل نص";
        } else {
            $description = check_input($_POST["description"]);
        }

        if (empty($_POST["brand"])) {
            $brandErr = "هذا الحقل مطلوب";
        } elseif (is_numeric($_POST["brand"])) {
            $brandErr = "يجب ان يكون الحقل رقم";
        } else {
            $brand = check_input($_POST["brand"]);
        }

        if (empty($_POST["price"])) {
            $priceErr = "هذا الحقل مطلوب";
        } elseif (!is_numeric($_POST["price"])) {
            $priceErr = "يجب ان يكون الحقل رقم";
        } else {
            $price = check_input($_POST["price"]);
        }


        if ($name !== '' && $description !== '' && $brand !== '' && $price !== '') {
            $add = "INSERT INTO PRODUCTS(name, description, brand, price) VALUES('$name' , '$description' ,'$brand' , $price)";

            if (mysqli_query($conn, $add)) {
                header("location:index.php");
            }
        }
    }

# Update Quantity from cart table
    if (isset($_POST['update'])) {

        if (!empty($_POST["id"]) && is_numeric($_POST["id"])) {
            $id = check_input($_POST["id"]);
        }

        if (!empty($_POST["quantity"]) && is_numeric($_POST["quantity"])) {
            $quantity = check_input($_POST["quantity"]);
        }

        if ($quantity !== '') {
            $update = "UPDATE cart SET quantity = $quantity where id = $id";
            if (mysqli_query($conn, $update)) {
                header("location:cart.php");
            }
        }else{
            header("location:editProductOnCart.php?id=".$id);
        }
    }

}

if (($_SERVER["REQUEST_METHOD"] === "GET") ) {

    if(isset($_GET['product_id']) && is_numeric($_GET["product_id"])) {
        $product_id = $_GET["product_id"];

        //get product name where id = $product_id
        $data = "SELECT name FROM products where id = $product_id";
        $result = mysqli_query($conn, $data);
        $row= mysqli_fetch_assoc($result);

        $product_name = $row['name'];
        $quantity = 1;

        $add = "INSERT INTO CART(product_id,product_name , quantity) 
                VALUES($product_id , '$product_name' , $quantity)";

        if(mysqli_query($conn ,$add)){
            header("location:cart.php");
        }
    }

    if(isset($_GET['delete_product']) && is_numeric($_GET["delete_product"])) {
        $cart_id = $_GET["delete_product"];

        $delete = "DELETE FROM cart where id = $cart_id";
        if(mysqli_query($conn , $delete)){
            header("location:cart.php");
        }
    }

}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}