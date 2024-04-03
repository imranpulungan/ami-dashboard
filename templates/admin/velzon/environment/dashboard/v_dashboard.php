<style>
    #DataTables_Table_0_wrapper .dt-buttons {
        display: none;
    }

    #DataTables_Table_0_filter {
        display: none;
    }
</style>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li> -->
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <!-- <h4 class="fs-16 mb-1"><?= getLangKey('greeting'); ?>, <?= getSession('nama') ?>!</h4> -->
                                    <h4 class="fs-16 mb-1">Selamat <?= date('H:i') >= date('H:i', strtotime('06:00')) && date('H:i') <= date('H:i', strtotime('10:00')) ? 'Pagi' : (date('H:i') >= date('H:i', strtotime('10:01')) && date('H:i') <= date('H:i', strtotime('15:00')) ? 'Siang' : (date('H:i') >= date('H:i', strtotime('15:01')) && date('H:i') <= date('H:i', strtotime('18:00')) ? 'Sore' : 'Malam')); ?>, <?= getSession('nama') ?>!</h4>
                                    <p class="text-muted mb-0"><?= getLangKey('sksd') ?></p>
                                </div>
                                <div class="mt-3 mt-lg-0">
                                    <form action="javascript:void(0);">
                                        <div class="row g-3 mb-0 align-items-center">                                           
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div> <!-- end .h-100-->

            </div> <!-- end col -->
        </div>


        <div class="row">
            <div class="col-xl-3 col-md-4">
                <div class="card card-animate bg-info bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-white mb-0">Total Aset Bangunan</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="<?= baseUri('master/asset') ?>" class="text-decoration-underline text-white-50">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                            <div>
                                <h4 class="fs-2 fw-semibold ff-secondary mb-4 text-white"><span id="total_asset_building" class="counter-value" data-target="0">0</span></h4>                                                
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-light rounded fs-3">
                                    <i class="ri-building-line text-white"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4">
                <div class="card card-animate bg-info bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-uppercase text-white fw-medium mb-0">Total Aset Struktur</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="<?= baseUri('master/asset') ?>" class="text-decoration-underline text-white-50">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                            <div>
                                <h4 class="fs-2 fw-semibold ff-secondary mb-4 text-white"><span id="total_asset_structure" class="counter-value" data-target="0">0</span></h4>
                               </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-light rounded fs-3">
                                    <i class="ri-stack-line text-white"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4">
                <div class="card card-animate bg-info bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-white mb-0">Total Aset Mesin</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="<?= baseUri('master/asset') ?>" class="text-decoration-underline text-white-50">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                            <div>
                                <h4 class="fs-2 fw-semibold ff-secondary mb-4 text-white"><span id="total_asset_machinery" class="counter-value" data-target="0">0</span></h4>
                               </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-light rounded fs-3">
                                    <i class="ri-settings-5-line text-white"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4">
                <div class="card card-animate bg-info bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-white mb-0">Total Aset Kendaraan</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="<?= baseUri('master/asset') ?>" class="text-decoration-underline text-white-50">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                            <div>
                                <h4 class="fs-2 fw-semibold ff-secondary mb-4 text-white"><span id="total_asset_vehicle" class="counter-value" data-target="0">0</span></h4>
                               </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-light rounded fs-3">
                                    <i class="ri-car-line text-white"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4">
                <div class="card card-animate bg-info bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-white mb-0">Total Alat & Perlengkapan Aset</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="<?= baseUri('master/asset') ?>" class="text-decoration-underline text-white-50">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                            <div>
                                <h4 class="fs-2 fw-semibold ff-secondary mb-4 text-white"><span id="total_asset_tools_fixture" class="counter-value" data-target="0">0</span></h4>                                                
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-light rounded fs-3">
                                    <i class="ri-tools-fill text-white"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4">
                <div class="card card-animate bg-info bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-white mb-0">Total Aset Sedang dibangun</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="<?= baseUri('master/asset') ?>" class="text-decoration-underline text-white-50">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                            <div>
                                <h4 class="fs-2 fw-semibold ff-secondary mb-4 text-white"><span id="total_asset_auc" class="counter-value" data-target="0">0</span></h4>
                               </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-light rounded fs-3">
                                    <i class="ri-bar-chart-2-line text-white"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4">
                <div class="card card-animate bg-info bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-white mb-0">Total Aset Lahan</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="<?= baseUri('master/asset') ?>" class="text-decoration-underline text-white-50">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                            <div>
                                <h4 class="fs-2 fw-semibold ff-secondary mb-4 text-white"><span id="total_asset_lahan" class="counter-value" data-target="0">0</span></h4>
                               </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-light rounded fs-3">
                                    <i class="ri-search-2-line text-white"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4">
                <div class="card card-animate bg-info bg-gradient bg-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-white mb-0">Total Aset Tidak Beroperasi</p>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="<?= baseUri('master/asset') ?>" class="text-decoration-underline text-white-50">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-end justify-content-between mt-4">
                            <div>
                                <h4 class="fs-2 fw-semibold ff-secondary mb-4 text-white"><span id="total_asset_ano" class="counter-value" data-target="0">0</span></h4>
                               </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-soft-light rounded fs-3">
                                    <i class="ri-shut-down-line text-white"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>