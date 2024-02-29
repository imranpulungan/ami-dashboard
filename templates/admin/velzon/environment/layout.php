<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head id="html_header">

    <meta charset="utf-8" />
    <title><?= isset($title) && $title !== '' ? 'AMI Dashboard - ' . $title : 'AMI Dashboard'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->

    <script>
        var aSt3x = '<?= base64_encode(assetsUri()); ?>';
        var uXvbI = '<?php echo base64_encode(baseUri()); ?>'
        var m0d = '<?php echo base64_encode(MODAD); ?>'
        var GLOBAL_COOLDOWN = 3000;
        var <?= base64_encode('PeRMis'); ?> = '<?= base64_encode(json_encode(getSession('PERMISSION', false))); ?>';
        var all_session = '<?= base64_encode(json_encode(getAllSession())); ?>';
    </script>

    <link rel="shortcut icon" href="<?= assetsUri(); ?>images/favicon.ico">

    <!-- page css -->
    <?php
    if (isset($css) && count($css) > 0) {
        foreach ($css as $scss) {
            echo '<link href="' . assetsUri($scss) . '" rel="stylesheet" type="text/css"/>';
        }
    }
    ?>

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
    <link href="<?= assetsUri(); ?>css/global.css" rel="stylesheet" type="text/css" />

    <link href="<?= assetsUri(); ?>libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="full-loading">
        <div class="loadingio-spinner-double-ring-l7n4deimnn">
            <div class="ldio-4eh2dwxukok">
                <div></div>
                <div></div>
                <div>
                    <div></div>
                </div>
                <div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= loadTemplate('layout/v_navbar'); ?>

        <?= loadTemplate('layout/v_sidebar'); ?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <?= isset($content) && $content !== '' ? loadTemplate($content) : ''; ?>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Smelter Safety & Quality Management System Section.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Developed by <a href="https://sit.inalum.id">FADHIL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <script src="<?= assetsUri(); ?>js/as.js"></script>
    <script src="<?= assetsUri(); ?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= assetsUri(); ?>libs/simplebar/simplebar.min.js"></script>
    <script src="<?= assetsUri(); ?>libs/node-waves/waves.min.js"></script>
    <script src="<?= assetsUri(); ?>libs/feather-icons/feather.min.js"></script>
    <script src="<?= assetsUri(); ?>js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?= assetsUri(); ?>js/plugins.js"></script>
    <script src="<?= assetsUri(); ?>libs/prismjs/prism.js"></script>
    <script src="<?= assetsUri(); ?>libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= assetsUri(); ?>js/jquery.min.js"></script>
    <script src="<?= assetsUri(); ?>js/custom.js"></script>
    <script src="<?= assetsUri(); ?>js/settings.js"></script>

    <!-- page javascript -->
    <?php
    if (isset($javascript) && count($javascript) > 0) {
        foreach ($javascript as $js) {
            if (!empty($js)) {
                echo '<script src="' . assetsUri($js) . '"></script>';
            }
        }
    }
    ?>

    <!-- App js -->
    <script src="<?= assetsUri(); ?>js/app.min.js"></script>
    <?php
    if (isset($java)) {
        $rand = rand(0,9999);
        $javaMinify = isHasMinify(assetsUri() . "js/env/" . $java['path'] . "/" . isMinify($java['file']), 'js');
        // if (file_exists($javaMinify)) {
        echo "<script src='$javaMinify?rand=$rand'></script>";
        // }
    }
    ?>
</body>

</html>