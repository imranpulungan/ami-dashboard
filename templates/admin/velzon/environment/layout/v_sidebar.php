<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="<?= baseUri(MODAD . 'dashboard'); ?>" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?= assetsUri(); ?>images/inalum-white-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?= assetsUri(); ?>images/inalum-white.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="<?= baseUri(MODAD . 'dashboard'); ?>" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?= assetsUri(); ?>images/inalum-white-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?= assetsUri(); ?>images/inalum-white.png" alt="" height="27">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <?php
                if (!function_exists('generateMenu')) {
                    function generateMenu()
                    {
                        if (isHasMenu()) {
                            $menu = getSession('MENU', false);
                            foreach ($menu as $menu1) {
                                if (!$menu1->parent == '0') {
                                    echo "<li class='menu-title'><span>$menu1->nm_menu</span></li>";
                                }

                                if (isset($menu1->submenu)) {
                                    foreach ($menu1->submenu as $menu2) {
                                        echo "<li class='menu-title'><span>$menu2->nm_menu</span></li>";

                                        if (isset($menu2->submenu)) {
                                            foreach ($menu2->submenu as $menu3) {
                                                if (isset($menu3->submenu)) {
                                                    // <i class='ri-dashboard-2-line'></i>
                                                    echo "<li class='nav-item'>
                                                        <a class='nav-link menu-link' href='#" . (implode('', explode(' ', $menu3->nm_menu))) . "' data-bs-toggle='collapse' role='button' aria-expanded='false' aria-controls='" . (implode('', explode(' ', $menu3->nm_menu))) . "'>
                                                        $menu3->icon_menu
                                                        <span>$menu3->nm_menu</span>
                                                        </a>
                                                        <div class='collapse menu-dropdown' id='" . (implode('', explode(' ', $menu3->nm_menu))) . "'>
                                                            <ul class='nav nav-sm flex-column'>";

                                                    foreach ($menu3->submenu as $menu4) {
                                                        if (isset($menu4->submenu)) {
                                                            echo "<li class='nav-item'>
                                                                <a class='nav-link menu-link' href='#" . (implode('', explode(' ', $menu4->nm_menu))) . "' data-bs-toggle='collapse' role='button' aria-expanded='false' aria-controls='" . (implode('', explode(' ', $menu4->nm_menu))) . "'>
                                                                $menu4->icon_menu
                                                                <span>$menu4->nm_menu</span>
                                                                </a>
                                                                <div class='collapse menu-dropdown' id='" . (implode('', explode(' ', $menu4->nm_menu))) . "'>
                                                                    <ul class='nav nav-sm flex-column'>";
                                                            foreach ($menu4->submenu as $menu5) {
                                                                echo "<li class='nav-item'>
                                                                    <a href='" . baseUri($menu5->link_menu) . "' class='nav-link'>
                                                                    $menu5->nm_menu
                                                                    </a>
                                                                </li>";
                                                            }
                                                            echo "</ul></div></li>";
                                                        } else {
                                                            echo "<li class='nav-item'>
                                                                <a href='" . baseUri($menu4->link_menu) . "' class='nav-link'>
                                                                $menu4->nm_menu
                                                                </a>
                                                            </li>";
                                                        }
                                                    }
                                                    echo "</ul></div></li>";
                                                } else {
                                                    echo "<li class='nav-item'>
                                                        <a class='nav-link menu-link' href='" . baseUri($menu3->link_menu) . "'>
                                                            $menu3->icon_menu <span>$menu3->nm_menu</span>
                                                        </a>
                                                    </li>";
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }

                generateMenu();
                ?>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>