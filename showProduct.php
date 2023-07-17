<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr"
      data-theme="theme-default"
      data-assets-path="assets/"
      data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>product details</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css"/>

</head>


<?php
include 'conn.php';
$id = $_GET["id"];
$data = "SELECT * FROM products where id = $id";
$result = mysqli_query($conn , $data);
$row = mysqli_fetch_assoc($result);
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
                    <h4 class="fw-bold py-3 mb-4">Product</h4>

                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-center justify-content-between">
                                <h5>Profile Details</h5>
                                <a href="cart.php" class="btn btn-primary">Card</a>
                            </div>
                            <div class="row gy-3">
                                <div class="col-xl-4">
                                    <div class=" fw-semibold">Name</div>
                                    <div class="mt-2">
                                        <span><?php echo $row['name']?></span>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class=" fw-semibold">Brand</div>
                                    <div class="mt-2">
                                        <span class="badge bg-label-primary"><?php echo $row['brand']?></span>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class=" fw-semibold">Price</div>
                                    <div class="mt-2">
                                        <span class="badge bg-dark"><?php echo $row['price']?></span>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="fw-semibold">Description</div>
                                    <div class="mt-2">
                                        <span><?php echo $row['description']?></span>
                                    </div>
                                </div>
                            </div>

                            </div>

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
