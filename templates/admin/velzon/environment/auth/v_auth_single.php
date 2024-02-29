<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Surat Izin Kerja Aman Online">
    <meta name="author" content="Alimstudio">
    <meta name="keywords" content="alimstudio.com, api-gateway">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= assetsUri(); ?>images/favicon.ico" />

    <!-- TITLE -->
    <title><?= getlangKey('title') ?></title>

    <script>
        var aSt3x = '<?= base64_encode(assetsUri()); ?>';
        var uXvbI = '<?php echo base64_encode(baseUri()); ?>'
        var m0d = '<?php echo base64_encode(MODAD); ?>'
    </script>
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

    <link href="<?= assetsUri(); ?>libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <style>
        a,
        button {
            outline: 0 !important;
        }

        .particles-js-canvas-el {
            position: absolute;
            top: 0;
        }

        .auth-one-bg-position {
            height: 100%;
        }

        .auth-page-wrapper .footer {
            z-index: 1;
        }

        .auth-one-bg {
            background-image: url('<?= assetsUri(); ?>images/bg.jpg');
            background-position: unset;
        }

        .auth-one-bg .bg-overlay {
            background: -webkit-gradient(linear, left top, right top, from(#000000), to(#000000));
            background: linear-gradient(to right, #000000, #000000);
            opacity: .6;
        }

        .auth-loading {
            height: 15px;
            width: 15px;
            position: relative;
            top: 2px;
            margin-right: 5px;
            display: none;
        }
    </style>
</head>

<body id="auth-particles">

    <!-- BACKGROUND-IMAGE -->
    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg">
            <div class="bg-overlay"></div>

            <!-- <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div> -->
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="<?= baseUri(); ?>" class="d-inline-block auth-logo">
                                    <img src="<?= assetsUri(); ?>images/inalum-white.png" alt="" height="40">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Surat Izin Kerja Aman Online</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary"><?= getLangKey('welcome') ?></h5>
                                    <p class="text-muted"><?= getLangKey('enter') ?></p>
                                </div>
                                <div class="p-2 mt-4">
                                    <?php
                                    if (!empty($_COOKIE['mission']) && $_COOKIE['mission'] > 0) {
                                    ?>
                                        <div style="text-align:center">3 failed login attempts, you can try again after <span class="cooldown"></span></div>
                                    <?php
                                    } else {
                                    ?>
                                        <form id="form">

                                            <div class="mb-3">
                                                <label for="username" class="form-label"><?= getLangKey('username') ?></label>
                                                <input type="text" autocomplete="off" class="form-control" id="username" name="username" placeholder="<?= getLangKey('username_placeholder') ?>">
                                            </div>

                                            <div class="mb-3">
                                                <div class="float-end">
                                                    <!-- <a href="<?= baseUri(MODAD . 'auth/forgot'); ?>" class="text-muted"><?= getLangKey('forget') ?></a> -->
                                                </div>
                                                <label class="form-label" for="password"><?= getLangKey('password') ?></label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" autocomplete="off" class="form-control pe-5" name="password" placeholder="<?= getLangKey('password_placeholder') ?>" id="password">
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="row align-items-center">
                                                    <div class="col-md-7">
                                                        <img src="<?= baseUri(MODAD . 'auth/chaptcha'); ?>" alt="" class="captcha-image" style="height: 40px">
                                                        <button class="btn btn-sm btn-warning ms-2 btn-sm refresh-captcha" type="button">
                                                            <i class="ri-refresh-line ri-2x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Enter Captcha" />
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="1" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check"><?= getLangKey('remember'); ?></label>
                                        </div> -->

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="button" onclick="login(this)">
                                                    <span class="spinner-grow auth-loading" role="status"></span>
                                                    <?= getLangKey('login_button'); ?>
                                                </button>
                                            </div>

                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <a href="<?= assetsUri('docs/manual.pdf') ?>" target="_blank" type="button" class="btn btn-sm btn-warning text-dark"><i class="ri-book-open-line align-middle me-1"></i>
                                Petunjuk Penggunaan
                            </a>
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
                                    if (new Date().getFullYear() > 2023) {
                                        document.write('2023 - ')
                                    }
                                    document.write(new Date().getFullYear())
                                </script> <a href="https://alimstudio.com" style="color: white;">Smelter Safety & Quality Management System Section</a>
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
    <script src="<?= assetsUri(); ?>js/as.js"></script>
    <script src="<?= assetsUri(); ?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= assetsUri(); ?>libs/simplebar/simplebar.min.js"></script>
    <script src="<?= assetsUri(); ?>libs/node-waves/waves.min.js"></script>
    <script src="<?= assetsUri(); ?>libs/feather-icons/feather.min.js"></script>
    <script src="<?= assetsUri(); ?>js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?= assetsUri(); ?>js/plugins.js"></script>

    <script src="<?= assetsUri(); ?>libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= assetsUri(); ?>js/jquery.min.js"></script>

    <!-- particles app js -->
    <script src="<?= assetsUri(); ?>libs/particles.js/particles.js"></script>
    <script src="<?= assetsUri(); ?>js/pages/particles.app.js"></script>
    <script src="<?= assetsUri(); ?>js/custom.js"></script>
    <!-- password-addon init -->
    <script src="<?= assetsUri(); ?>js/pages/password-addon.init.js"></script>
    <script src="<?= isHasMinify(assetsUri() . 'js/env/auth/' . isMinify('login'), 'js'); ?>"></script>
</body>

</html>