<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sistem API-Gateway (ESB API)">
    <meta name="author" content="Alimstudio">
    <meta name="keywords" content="alimstudio.com, api-gateway">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= assetsUri(); ?>images/favicon.ico" />

    <!-- TITLE -->
    <title><?= getlangKey('title') ?></title>

    <script>
        var assets = '<?= assetsUri(); ?>';
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
    </style>
</head>

<body>

    <!-- BACKGROUND-IMAGE -->
    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="index.html" class="d-block">
                                                    <img src="<?= assetsUri(); ?>images/logo-light.png" alt="" height="18">
                                                </a>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="mb-3">
                                                    <i class="ri-double-quotes-l display-4 text-success"></i>
                                                </div>

                                                <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner text-center text-white pb-5">
                                                        <div class="carousel-item active">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary"><?= getLangKey('welcome') ?></h5>
                                            <p class="text-muted"><?= getLangKey('enter') ?></p>
                                        </div>

                                        <div class="mt-4">
                                            <form action="" id="form">

                                                <div class="mb-3">
                                                    <label for="username" class="form-label"><?= getLangKey('username') ?></label>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="<?= getLangKey('username_placeholder') ?>">
                                                </div>

                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="<?= baseUri(MODAD . 'auth/forgot'); ?>" class="text-muted"><?= getLangKey('forget') ?></a>
                                                    </div>
                                                    <label class="form-label" for="password-input"><?= getLangKey('password') ?></label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" class="form-control pe-5" placeholder="<?= getLangKey('password_placeholder') ?>" name="password" id="password">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check"><?= getLangKey('remember'); ?></label>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="button" onclick="login()"><?= getLangKey('login_button'); ?></button>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-14 mb-4 title"><?= getLangKey('sosmed'); ?></h5>
                                                    </div>

                                                    <div>
                                                        <a href="https://facebook.com/jum.aspal" target="blank_">
                                                            <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                        </a>
                                                        <a href="https://www.youtube.com/channel/UC0OmjKjq8OTk7QLOI1Ri3iw" target="blank_">
                                                            <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-youtube-fill fs-16"></i></button>
                                                        </a>
                                                        <a href="https://github.com/alimstudio" target="blank_">
                                                            <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                        </a>
                                                        <a href="https://twitter.com/jum_a_dil" target="blank_">
                                                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                                        </a>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                        <!-- <div class="mt-5 text-center">
                                            <p class="mb-0">Don't have an account ? <a href="auth-signup-cover.html" class="fw-bold text-primary text-decoration-underline"> Signup</a> </p>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

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
                            <p class="mb-0">&copy;
                                <script>
                                    if (new Date().getFullYear() > 2022) {
                                        document.write('2022 - ')
                                    }
                                    document.write(new Date().getFullYear())
                                </script> FHAJ <i class="mdi mdi-heart text-danger"></i> by <a href="https://alimstudio.com" target="blank_" style="color: white; font-weight:bold">Alimstudio</a>
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

    <script src="<?= assetsUri(); ?>libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= assetsUri(); ?>js/jquery.min.js"></script>

    <!-- password-addon init -->
    <script src="<?= assetsUri(); ?>js/pages/password-addon.init.js"></script>

    <script>
        function login() {
            var data = $('#form').serializeArray()
            var BASE = '<?= baseUri(); ?>';
            data.push({
                name: "scrty",
                value: true
            })


            $.ajax({
                url: BASE + "<?= MODAD; ?>auth/authorize",
                data: data,
                method: "POST",
                success: function(response) {
                    var x = JSON.parse(response)
                    if (x.status) {
                        var login_success = '<?= getLangKey('login_success') ?>'
                        Swal.fire({
                            html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>' + login_success + '</h4><p class="text-muted mx-4 mb-0">' + x.message + '</p></div></div>',
                            showCancelButton: !1,
                            showConfirmButton: !1,
                            timer: 2000
                        }).then((result) => {
                            if (result.isDismissed) {
                                window.location = BASE + "admin/dashboard"
                            }
                        })
                    } else {
                        var login_failed = '<?= getLangKey('login_failed') ?>'
                        Swal.fire({
                            html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>' + login_failed + '</h4><p class="text-muted mx-4 mb-0">' + x.message + '</p></div></div>',
                            showCancelButton: !1,
                            showConfirmButton: !1,
                            timer: 3000
                        })
                    }
                }
            });
        }

        $('#form').on('keypress', function(e) {
            if (e.which == 13) {
                login()
            }
        });
    </script>
</body>

</html>