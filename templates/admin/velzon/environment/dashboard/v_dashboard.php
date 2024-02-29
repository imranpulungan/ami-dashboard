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

    </div>
    <!-- container-fluid -->
</div>