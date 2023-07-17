<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr"
      data-theme="theme-default"
      data-assets-path="assets/"
      data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Cart</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
          rel="stylesheet"/>

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css"/>

    <!-- Vendors CSS -->

    <!-- Page CSS -->

    <!-- Helpers -->

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
</head>



<?php
include 'conn.php';
$data = "SELECT * FROM cart";
$result = mysqli_query($conn , $data);
?>


<body>
<!-- Content -->
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">


        <!-- Layout container -->
        <div class="layout-page">


            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">Cart</h4>

                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">All Products Added</h5>
                            <small class="text-muted float-end">
                                <a href="index.php" class="btn btn-primary">Products</a>
                            </small>
                        </div>

                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">

                                <?php
                                if(mysqli_num_rows($result) > 0){
                                $count=0;
                                while($row = mysqli_fetch_assoc($result)){
                                $count ++;
                                ?>

                                        <tr>
                                            <td><strong><?php echo $count?></strong></td>
                                            <td><a href="showProduct.php?id=<?php echo $row['product_id']?>"><?php echo $row['product_name']?></a></td>
                                            <td><?php echo $row['quantity']?></td>

                                            <td>
                                                <a class="btn btn-icon btn-outline-info" href="editProductOnCart.php?id=<?php echo $row['id']?>">
                                                    <i class="bx bx-edit"></i>
                                                </a>


                                                <a class="btn btn-icon btn-outline-danger" href="actions.php?delete_product=<?php echo $row['id']?>">
                                                    <i class="bx bx-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                }else{?>
                                    <td colspan="4" class="text-center"><strong>لا يوجد منتجات في السلة</strong></td>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Basic Bootstrap Table -->

                    <hr class="my-5"/>

                </div>
                <!-- / Content -->


                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
</body>
</html>
