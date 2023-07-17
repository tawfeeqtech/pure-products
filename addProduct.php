<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr"
      data-theme="theme-default"
      data-assets-path="assets/"
      data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Add Product</title>

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
    <link rel="stylesheet" href="assets/css/demo.css"/>

</head>


<?php include 'actions.php';?>

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

                <div class="container-fluid flex-grow-1 container-p-y">
                    <div class="layout-demo-info">
                        <h4 class="fw-bold py-3 mb-4">Add Product</h4>
                    </div>
                    <div class="layout-demo-placeholder">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0"></h5>

                                        <small class="text-muted float-end">

                                            <a href="index.php" class="btn btn-info">Back</a>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                            <div class="mb-3 row">
                                                <label for="name" class="col-md-2 col-form-label">Name</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" value="<?php echo $name;?>" name="name" type="text"  id="name">
                                                    <div class="error">
                                                        <?php echo $nameErr;?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="description" class="col-md-2 col-form-label">Description</label>
                                                <div class="col-md-10">
                                                    <textarea id="description" class="form-control" name="description" type="text"  ><?php echo $description;?></textarea>
                                                    <div class="error">
                                                        <?php echo $descriptionErr;?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="brand" class="col-md-2 col-form-label">Brand</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" value="<?php echo $brand;?>" name="brand" type="text"  id="brand">
                                                    <div class="error">
                                                        <?php echo $brandErr;?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="price" class="col-md-2 col-form-label">Price</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" value="<?php echo $price;?>" name="price" type="text"  id="price">
                                                    <div class="error">
                                                        <?php echo $priceErr;?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="col-md-3">
                                                    <input class="form-control btn btn-primary" type="submit" value="add" name="add">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Basic Bootstrap Table -->

                    <!--/ Basic Bootstrap Table -->


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
<!-- / Layout wrapper -->
<!-- / Content -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Page JS -->

</body>
</html>
