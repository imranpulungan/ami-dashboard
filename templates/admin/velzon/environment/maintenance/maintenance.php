<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Maintenance | SIKA Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= assetsUri(); ?>images/favicon.ico">

    <!-- Layout config Js -->
    <script src="<?= assetsUri(); ?>js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?= assetsUri(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= assetsUri(); ?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= assetsUri(); ?>css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?= assetsUri(); ?>css/custom.min.css" rel="stylesheet" type="text/css" />
    <script>
        var assets = '<?= assetsUri(); ?>';
    </script>
</head>

<body>
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <style>
            .auth-one-bg {
                background-image: url("<?= assetsUri('images/maintenance-bg.jpg') ?>");
            }
        </style>
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 pt-4">
                            <div class="mb-5 text-white-50">
                                <h1 class="display-5 coming-soon-text">Mohon Maaf</h1>
                                <p class="fs-3 text-white">Aplikasi <b>SIKA Online</b>
                                    Sedang Dalam Proses Maintenance
                                    <!-- Sementara Ditutup Pada Tanggal 22 - 23 April 2023. <br /> Silahkan Mendaftar Kembali Senin, 24 April 2023. -->
                                </p>
                            </div>
                            <div class="row justify-content-center mb-5">
                                <div class="col-xl-4 col-lg-8">
                                    <div>
                                        <!-- <img src="<?= assetsUri(); ?>images/closed.png" alt="" class="img-fluid"> -->
                                        <img src="<?= assetsUri(); ?>images/maintenance2.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    if (new Date().getFullYear() > 2022) {
                                        document.write('2022 - ')
                                    }
                                    document.write(new Date().getFullYear())
                                </script> <strong>FaHaJuDi</strong> by <a href="https://sit.inalum.id" target="blank_" style="color: black; font-weight:bold">Smelter Technology Information Section</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="<?= assetsUri(); ?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= assetsUri(); ?>libs/simplebar/simplebar.min.js"></script>
    <script src="<?= assetsUri(); ?>libs/node-waves/waves.min.js"></script>
    <script src="<?= assetsUri(); ?>libs/feather-icons/feather.min.js"></script>
    <script src="<?= assetsUri(); ?>js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?= assetsUri(); ?>js/plugins.js"></script>

    <!-- particles js -->
    <script src="<?= assetsUri(); ?>libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="<?= assetsUri(); ?>js/pages/particles.app.js"></script>

</body>

</html>