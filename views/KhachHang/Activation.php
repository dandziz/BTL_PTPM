<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Confirm Email | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../BTL_PTPM/views/Admin/assets/images/favicon.ico">

    <!-- App css -->
    
    <link href="../BTL_PTPM/views/Admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../BTL_PTPM/views/Admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="../BTL_PTPM/views/Admin/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
    <title>Xác thực tài khoản</title>
    <style>
        .bg-success{
            background-color: #07503d !important;
        }
        .bg-success-2{
            background-color: rgba(7, 80, 61, 0.5) !important;
        }
        .bg-success-3{
            background-color: rgba(7, 80, 61, 0.75) !important;
        }
    </style>
</head>

<body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">
                        <!-- Logo -->
                        <div class="card-header pt-4 pb-4 text-center bg-success">
                            <a href="index.html">
                                <span><img src="../BTL_PTPM/images/header/logo.png" alt="" height="18"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center m-auto">
                                <img src="../BTL_PTPM/views/Admin/assets/images/mail_sent.svg" alt="mail sent image" height="64" />
                                <h4 class="text-dark-50 text-center mt-4 fw-bold"><?php echo $title; ?></h4>
                                <p class="text-muted mb-4">
                                    <?php echo $msg; ?>
                                </p>
                            </div>

                            <form action="index.php">
                                <div class="mb-0 text-center">
                                    <button class="btn bg-success text-white" type="submit"><i class="mdi mdi-home me-1"></i> Back to Home</button>
                                </div>
                            </form>

                        </div> <!-- end card-body-->
                    </div>
                    <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2018 - 2021 © Hyper - Coderthemes.com
    </footer>

    <!-- bundle -->
    <script src="../BTL_PTPM/views/Admin/assets/js/vendor.min.js"></script>
    <script src="../BTL_PTPM/views/Admin/assets/js/app.min.js"></script>


</body>

</html>