<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Data <?= $title; ?></h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master Data</a></li>
                            <li class="breadcrumb-item active">Data <?= $title; ?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row g-4 mb-3">
            <div class="col-sm">
                <div class="d-flex justify-content-sm-first gap-2">

                    <div class="">
                        <select class="form-select w-2 ml-2" id="tableLength">
                            <option value="2">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="-1">All</option>
                        </select>
                    </div>

                    <div class="search-box ms-2">
                        <input type="text" class="form-control" id="tableSearch" placeholder="Search...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-auto">
                <div>
                    <?php if (hasPermission('IN')) : ?>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="ri-add-line align-bottom me-1"></i> Tambah <?= $title; ?></button>
                    <?php endif; ?>
                    <button type="button" class="btn btn-warning btn-label" onclick="ExAsFresh.refresh()">
                        <i class="ri-refresh-line label-icon align-middle fs-16 me-2"></i>
                        Refresh
                    </button>
                </div>

            </div>
        </div>

        <style>
            .mr-auto,
            .mx-auto {
                margin-right: auto !important;
            }

            .ml-auto,
            .mx-auto {
                margin-left: auto !important;
            }

            table.dataTable tbody tr>.dtfc-fixed-left,
            table.dataTable tbody tr>.dtfc-fixed-right {
                z-index: 1;
                background-color: white;
                vertical-align: middle;
            }

            table.dataTable tbody tr>td {
                vertical-align: top;
            }

            table.dataTable thead tr>th {
                vertical-align: middle;
            }
        </style>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="align-items-center d-flex">
                            <div class="d-flex" id="tableInfo"></div>

                            <div class="ml-auto d-none d-sm-none d-md-block">
                                <div class="input-group">
                                    <button type="button" class="btn btn-danger btn-label previous">
                                        <i class="ri-arrow-left-s-line label-icon align-middle fs-16 me-2"></i>
                                        Previous
                                    </button>
                                    <input type="number" style="max-width: 50px;text-align:center" value="1" class="form-control existPaginate" readonly placeholder="">
                                    <button type="button" class="btn btn-danger btn-label right next rounded-end">
                                        <i class="ri-arrow-right-s-line label-icon align-middle fs-16 ms-2"></i>
                                        Next
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-label rounded-start ms-1">
                                        <i class="ri-filter-line label-icon align-middle fs-16 me-2"></i>
                                        Filter
                                    </button>
                                </div>
                            </div>
                            <div class="ml-auto d-sm-block d-md-none">
                                <div class="input-group">
                                    <button type="button" class="btn btn-danger previous">
                                        <i class="ri-arrow-left-s-line label-icon align-middle fs-16"></i>
                                    </button>
                                    <input type="number" style="max-width: 50px;text-align:center" value="1" class="form-control existPaginate" readonly placeholder="">
                                    <button type="button" class="btn btn-danger right next rounded-end">
                                        <i class="ri-arrow-right-s-line label-icon align-middle fs-16"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary rounded-start ms-1">
                                        <i class="ri-filter-line label-icon align-middle fs-16"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card header -->
                    <div class="progress table-progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                    </div>

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="table-responsive table-card">
                                <table class="table align-middle mb-0" id="AsTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width:1%"><?= getLangKey('pekerjaan_col_1'); ?></th>
                                            <th><?= getLangKey('pekerjaan_col_2'); ?></th>
                                            <th><?= getLangKey('pekerjaan_col_3'); ?></th>
                                            <th><?= getLangKey('pekerjaan_col_4'); ?></th>
                                            <th><?= getLangKey('pekerjaan_col_5'); ?></th>
                                            <th><?= getLangKey('pekerjaan_col_6'); ?></th>
                                            <th style="width:15%"><?= getLangKey('pekerjaan_col_7'); ?></th>
                                            <th style="width:15%"><?= getLangKey('pekerjaan_col_8'); ?></th>
                                            <th style="width:15%"><?= getLangKey('pekerjaan_col_9'); ?></th>
                                            <th><?= getLangKey('pekerjaan_col_10'); ?></th>
                                            <th style="width:15%"><?= getLangKey('pekerjaan_col_11'); ?></th>
                                            <th style="width:10%"><?= getLangKey('pekerjaan_col_12'); ?></th>
                                            <!-- Hidden -->
                                            <th><?= getLangKey('pekerjaan_col_4'); ?></th>
                                            <th><?= getLangKey('pekerjaan_col_5'); ?></th>
                                            <th><?= getLangKey('pekerjaan_col_6'); ?></th>
                                            <th><?= getLangKey('pekerjaan_col_7'); ?></th>
                                            <th><?= getLangKey('pekerjaan_col_8'); ?></th>
                                            <th><?= getLangKey('pekerjaan_col_9'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

    </div>
</div>

<?php if (hasPermission('IN')) : ?>
    <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_tambah" class="needs-validation" novalidate>
                <div class="modal-content border-0 overflow-hidden">
                    <div class="modal-header p-3">
                        <h4 class="card-title mb-0"><?= getLangKey('pekerjaan_add_modal_title'); ?></h4>
                        <button type="button" class="btn-close tutup"></button>
                    </div>
                    <div class="alert alert-warning rounded-0 mb-0">
                        <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                    </div>
                    <div class="modal-body pb-2">
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('pekerjaan_no_equipement_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                            <select class="form-select select2" name="no_equipment" id="no_equipment" required></select>
                            <div class="invalid-feedback"><?= getLangKey('pekerjaan_no_equipement_add_modal_label_nama_error'); ?></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label"><?= getLangKey('pekerjaan_kategori_pekerjaan_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                                <select class="form-select select2" name="kategori_pekerjaan" id="kategori_pekerjaan" required></select>
                                <div class="invalid-feedback"><?= getLangKey('pekerjaan_kategori_pekerjaan_add_modal_label_nama_error'); ?></div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label"><?= getLangKey('pekerjaan_kategori_trouble_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                                <select class="form-select select2" disabled name="kategori_trouble" id="kategori_trouble"></select>
                                <div class="invalid-feedback"><?= getLangKey('pekerjaan_kategori_trouble_add_modal_label_nama_error'); ?></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('pekerjaan_pekerjaan_trouble_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                            <textarea class="form-control autoresize" id="pekerjaan_trouble" name="pekerjaan_trouble" placeholder="<?= getLangKey('pekerjaan_pekerjaan_trouble_add_modal_label_nama_plc'); ?>"></textarea>
                            <div class="invalid-feedback"><?= getLangKey('pekerjaan_pekerjaan_trouble_add_modal_label_nama_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('pekerjaan_penyebab_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                            <textarea class="form-control autoresize" id="penyebab" name="penyebab" placeholder="<?= getLangKey('pekerjaan_penyebab_add_modal_label_nama_plc'); ?>"></textarea>
                            <div class="invalid-feedback"><?= getLangKey('pekerjaan_penyebab_add_modal_label_nama_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('pekerjaan_pengatasan_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                            <textarea class="form-control autoresize" id="pengatasan" name="pengatasan" placeholder="<?= getLangKey('pekerjaan_pengatasan_add_modal_label_nama_plc'); ?>"></textarea>
                            <div class="invalid-feedback"><?= getLangKey('pekerjaan_pengatasan_add_modal_label_nama_error'); ?></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="tutup btn btn-danger font-weight-bold">Batal</button>
                        <button type="button" class="btn btn-primary font-weight-bold" id="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>

<?php if (hasPermission('UP')) : ?>
    <div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_edit" class="needs-validation" novalidate>
                <div class="modal-content border-0 overflow-hidden">
                    <div class="modal-header p-3">
                        <h4 class="card-title mb-0" id="modal_header_edit"><?= getLangKey('pekerjaan_edit_modal_title'); ?> Task ID</h4>
                        <button type="button" class="btn-close tutup"></button>
                    </div>
                    <div class="alert alert-warning rounded-0 mb-0">
                        <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                    </div>
                    <div class="modal-body pb-2">
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('pekerjaan_no_equipement_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                            <input type="hidden" name="kd_pekerjaan_edit" id="kd_pekerjaan_edit">
                            <select class="form-select select2" name="no_equipment_edit" id="no_equipment_edit" required></select>
                            <div class="invalid-feedback"><?= getLangKey('pekerjaan_no_equipement_add_modal_label_nama_error'); ?></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label"><?= getLangKey('pekerjaan_kategori_pekerjaan_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                                <select class="form-select select2" name="kategori_pekerjaan_edit" id="kategori_pekerjaan_edit" required></select>
                                <div class="invalid-feedback"><?= getLangKey('pekerjaan_kategori_pekerjaan_add_modal_label_nama_error'); ?></div>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label"><?= getLangKey('pekerjaan_kategori_trouble_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                                <select class="form-select select2" disabled name="kategori_trouble_edit" id="kategori_trouble_edit"></select>
                                <div class="invalid-feedback"><?= getLangKey('pekerjaan_kategori_trouble_add_modal_label_nama_error'); ?></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('pekerjaan_pekerjaan_trouble_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                            <textarea class="form-control autoresize" id="pekerjaan_trouble_edit" name="pekerjaan_trouble_edit" placeholder="<?= getLangKey('pekerjaan_pekerjaan_trouble_add_modal_label_nama_plc'); ?>"></textarea>
                            <div class="invalid-feedback"><?= getLangKey('pekerjaan_pekerjaan_trouble_add_modal_label_nama_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('pekerjaan_penyebab_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                            <textarea class="form-control autoresize" id="penyebab_edit" name="penyebab_edit" placeholder="<?= getLangKey('pekerjaan_penyebab_add_modal_label_nama_plc'); ?>"></textarea>
                            <div class="invalid-feedback"><?= getLangKey('pekerjaan_penyebab_add_modal_label_nama_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('pekerjaan_pengatasan_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                            <textarea class="form-control autoresize" id="pengatasan_edit" name="pengatasan_edit" placeholder="<?= getLangKey('pekerjaan_pengatasan_add_modal_label_nama_plc'); ?>"></textarea>
                            <div class="invalid-feedback"><?= getLangKey('pekerjaan_pengatasan_add_modal_label_nama_error'); ?></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="tutup btn btn-danger font-weight-bold">Batal</button>
                        <button type="button" class="btn btn-primary font-weight-bold" id="submitEdit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>

<!-- Update ke VW  -->
<?php if (hasPermission('IN')) : ?>
    <div class="modal fade" id="modalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 overflow-hidden">
                <div class="modal-header p-3">
                    <h4 class="card-title mb-0" id="modal_header_detail"><?= getLangKey('pekerjaan_detail_modal_title'); ?></h4>
                    <button type="button" class="btn-close tutupDetail" disabled data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-0 pt-0 mb-0">
                    <style>
                        .table-detail th:first-child {
                            text-align: right;
                        }

                        .table-detail th:nth-child(2) {
                            width: 1px;
                        }
                    </style>
                    <table class="table table-detail table-borderless pb-0 mb-0">
                        <tbody>
                            <tr>
                                <th style="width:25%">Task ID</th>
                                <td style="width:1px">:</td>
                                <td id="taskid_detail"></td>
                            </tr>
                            <tr>
                                <th>Equipment</th>
                                <td>:</td>
                                <td id="no_equipment_detail"></td>
                            </tr>
                            <tr>
                                <th>Kategori Pekerjaan</th>
                                <td>:</td>
                                <td id="kategori_pekerjaan_detail"></td>
                            </tr>
                            <tr>
                                <th>Kategori Trouble</th>
                                <td>:</td>
                                <td id="kategori_trouble_detail"></td>
                            </tr>
                            <tr>
                                <th>Pekerjaan / Trouble</th>
                                <td>:</td>
                                <td id="pekerjaan_trouble_detail"></td>
                            </tr>
                            <tr>
                                <th>Penyebab</th>
                                <td>:</td>
                                <td id="penyebab_detail"></td>
                            </tr>
                            <tr>
                                <th>Pengatasan</th>
                                <td>:</td>
                                <td id="pengatasan_detail"></td>
                            </tr>
                            <tr>
                                <th>Progress</th>
                                <td>:</td>
                                <td id="progress_detail"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dropdown-divider"></div>
                <div class="modal-body pb-2 pt-0">
                    <table class="table table-detail table-borderless">
                        <tbody>
                            <tr>
                                <th style="width:25%">Pelaksana</th>
                                <td style="width:1px">:</td>
                                <td id="pelaksana_detail"><img src="<?= assetsUri('images/loading.gif'); ?>" /></td>
                            </tr>
                            <tr>
                                <th>Jadwal & Progress</th>
                                <td>:</td>
                                <td id="jadwal_progress_detail"><img src="<?= assetsUri('images/loading.gif'); ?>" /></td>
                            </tr>
                            <tr>
                                <th>Sparepart</th>
                                <td>:</td>
                                <td id="sparepart_detail"><img src="<?= assetsUri('images/loading.gif'); ?>" /></td>
                            </tr>
                            <tr>
                                <th>Recycle Unit</th>
                                <td>:</td>
                                <td id="recycle_unit_detail"><img src="<?= assetsUri('images/loading.gif'); ?>" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger font-weight-bold tutupDetail" disabled data-bs-dismiss="modal" aria-label="Close">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (hasPermission('IN')) : ?>
    <div class="modal fade" id="modalPekerjaan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content border-0 overflow-hidden">
                <div class="modal-body mb-0 p-0">
                    <div class="d-none">
                        <label for="kd_pekerjaan_modal_pekerjan"></label>
                        <input type="hidden" name="kd_pekerjaan_modal_pekerjan" id="kd_pekerjaan_modal_pekerjan" />
                    </div>
                    <style>
                        .nav-customs.nav {
                            padding-left: 0px;
                        }

                        .nav-customs.nav .nav-link {
                            margin-right: 0px;
                            padding: 14px 0px;
                        }

                        .nav-pills .nav-link {
                            padding: 15px 0px;
                            border-radius: 0;
                        }

                        .tab-content .tab-pane {
                            padding: 1rem;
                            padding-top: 0;
                        }

                        .pemberitahuan {
                            padding: 0;
                        }

                        .arrow-navtabs .nav-item .nav-link:before {
                            content: "";
                            position: absolute;
                            border: 10px solid transparent;
                            right: -30px;
                            top: 30%;
                            bottom: auto;
                            left: auto;
                            -webkit-transform: translateX(-50%);
                            transform: translateX(-50%) rotate(-90deg);
                            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
                            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
                        }

                        .arrow-navtabs .nav-item:last-of-type .nav-link:before {
                            content: none;
                        }

                        table.table-pekerjaan thead td,
                        table.table-pekerjaan tbody td {
                            vertical-align: middle !important;
                        }

                        .ribbon-three.ribbon-pekerjaan::after {
                            width: 100%;
                            border-left: 77px solid transparent;
                            border-right: 77px solid transparent;
                            border-top: 12px solid;
                            border-top-color: #405189;
                        }

                        .ribbon-three.ribbon-pengatasan::after {
                            width: 100%;
                            border-left: 50px solid transparent;
                            border-right: 50px solid transparent;
                            border-top: 12px solid;
                            border-top-color: #405189;
                        }

                        .ribbon-three.ribbon-penyebab::after {
                            width: 100%;
                            border-left: 44px solid transparent;
                            border-right: 44px solid transparent;
                            border-top: 12px solid;
                            border-top-color: #405189;
                        }
                    </style>
                    <!-- <div class="card-body"> -->
                    <!-- Nav tabs -->
                    <!-- nav nav-pills arrow-navtabs nav-success bg-light mb-3 -->
                    <ul class="nav nav-pills bg-light arrow-navtabs nav-success nav-justified mb-3" role="tablist">
                        <!-- <ul class="nav nav-pills nav-customs nav-danger nav-justified mb-3" role="tablist"> -->
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#pekerjaan" role="tab" aria-selected="true">
                                Preview Pekerjaan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#pelaksana" role="tab" aria-selected="false">
                                Pelaksana
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#jadwal" role="tab" aria-selected="false">
                                Jadwal & Progress
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#sparepart" role="tab" aria-selected="false">
                                Sparepart
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#recycle" role="tab" aria-selected="false">
                                Recycle Unit
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content text-muted">
                        <div class="tab-pane active m-0 m-md-0" id="pekerjaan" role="tabpanel">
                            <div class="d-flex justify-content-center">
                                <div class="row m-0 m-md-0 col-md-12">
                                    <div class="col-md-4 col-sm-12">
                                        <table class="table table-detail table-borderless pb-0 mb-0">
                                            <tbody>
                                                <tr>
                                                    <th style="width:25%">Task ID</th>
                                                    <td style="width:1px">:</td>
                                                    <td id="taskid_pekerjaan"></td>
                                                </tr>
                                                <tr>
                                                    <th>Equipment</th>
                                                    <td>:</td>
                                                    <td id="no_equipment_pekerjaan"></td>
                                                </tr>
                                                <tr>
                                                    <th>Kategori Pekerjaan</th>
                                                    <td>:</td>
                                                    <td id="kategori_pekerjaan_pekerjaan"></td>
                                                </tr>
                                                <tr>
                                                    <th>Kategori Trouble</th>
                                                    <td>:</td>
                                                    <td id="kategori_trouble_pekerjaan"></td>
                                                </tr>
                                                <tr>
                                                    <th>Pekerjaan / Trouble</th>
                                                    <td>:</td>
                                                    <td id="pekerjaan_trouble_pekerjaan"></td>
                                                </tr>
                                                <tr>
                                                    <th>Penyebab</th>
                                                    <td>:</td>
                                                    <td id="penyebab_pekerjaan"></td>
                                                </tr>
                                                <tr>
                                                    <th>Pengatasan</th>
                                                    <td>:</td>
                                                    <td id="pengatasan_pekerjaan"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="d-block d-md-none mt-4"></div>
                                        <table class="table table-detail table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th style="width:25%">Pelaksana</th>
                                                    <td style="width:1px">:</td>
                                                    <td id="pelaksana_pekerjaan"><img src="<?= assetsUri('images/loading.gif'); ?>" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Jadwal & Progress</th>
                                                    <td>:</td>
                                                    <td id="jadwal_progress_pekerjaan"><img src="<?= assetsUri('images/loading.gif'); ?>" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Sparepart</th>
                                                    <td>:</td>
                                                    <td id="sparepart_pekerjaan"><img src="<?= assetsUri('images/loading.gif'); ?>" /></td>
                                                </tr>
                                                <tr>
                                                    <th>Recycle Unit</th>
                                                    <td>:</td>
                                                    <td id="recycle_unit_pekerjaan"><img src="<?= assetsUri('images/loading.gif'); ?>" /></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pelaksana" role="tabpanel">
                            <div class="d-flex justify-content-center">
                                <div class="row col-md-12">
                                    <div class="pemberitahuan"></div>
                                    <div class="col-md-4">
                                        <form autocomplete="off" method="post" data-type="save" id="form_pelaksana" class="needs-validation" novalidate>
                                            <div class="card-body pb-2">
                                                <div class="mb-3">
                                                    <label for="pekerja_pelaksana" class="form-label"><?= getLangKey('pekerjaan_add_modal_label_pelaksana'); ?> <span class="text-danger">*</span></label>
                                                    <select class="form-select select2" name="pekerja_pelaksana" id="pekerja_pelaksana" required></select>
                                                    <div class="invalid-feedback"><?= getLangKey('pekerjaan_add_modal_label_pelaksana_error'); ?></div>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="reset" class="reset btn btn-danger font-weight-bold">Reset</button>
                                                    <button type="button" class="btn btn-primary font-weight-bold" id="submitPelaksana">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div id="input_pelaksana"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="jadwal" role="tabpanel">
                            <div class="d-flex justify-content-center">
                                <div class="row col-md-12">
                                    <div class="pemberitahuan"></div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="card-body pb-2">
                                            <form autocomplete="off" method="post" data-type="save" id="form_jadwal" class="needs-validation" novalidate>
                                                <div class="mb-3">
                                                    <label for="name" class="form-label"><?= getLangKey('pekerjaan_jadwal_add_modal_label_tgl'); ?> <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="hidden" name="kd_pekerjaan_jadwal" id="kd_pekerjaan_jadwal" value="" />
                                                        <input type="text" required class="form-control flatpickr-input active" data-provider="flatpickr" placeholder="<?= getLangKey('pekerjaan_jadwal_add_modal_label_tgl_plc'); ?>" id="tgl_jadwal" data-date-format="d F Y" />
                                                        <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                            <i class="ri-calendar-2-line"></i>
                                                        </div>
                                                        <div class="invalid-feedback"><?= getLangKey('pekerjaan_jadwal_add_modal_label_tgl_error'); ?></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name" class="form-label"><?= getLangKey('pekerjaan_jadwal_add_modal_label_lapor'); ?> <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control flatpickr-input" data-provider="timepickr" data-minuteIncrement="1" data-time_24hr="true" data-allowInput="true" data-time-basic="true" required id="lapor" name="lapor" placeholder="<?= getLangKey('pekerjaan_jadwal_add_modal_label_lapor_plc'); ?>" />
                                                        <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                            <i class="ri-time-line"></i>
                                                        </div>
                                                        <div class="invalid-feedback"><?= getLangKey('pekerjaan_jadwal_add_modal_label_lapor_error'); ?></div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="name" class="form-label"><?= getLangKey('pekerjaan_jadwal_add_modal_label_jam_mulai'); ?> <span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <input class="form-control flatpickr-input" name="jam_mulai" id="jam_mulai" data-provider="timepickr" data-minuteIncrement="1" data-time_24hr="true" data-allowInput="true" data-time-basic="true" required placeholder="<?= getLangKey('pekerjaan_jadwal_add_modal_label_jam_mulai_plc'); ?>" />
                                                            <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                                <i class="ri-time-line"></i>
                                                            </div>
                                                            <div class="invalid-feedback"><?= getLangKey('pekerjaan_jadwal_add_modal_label_jam_mulai_error'); ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="name" class="form-label"><?= getLangKey('pekerjaan_jadwal_add_modal_label_jam_selesai'); ?> <span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <input class="form-control flatpickr-input" name="jam_selesai" id="jam_selesai" data-provider="timepickr" data-minuteIncrement="1" data-time_24hr="true" data-allowInput="true" data-time-basic="true" required placeholder="<?= getLangKey('pekerjaan_jadwal_add_modal_label_jam_selesai_plc'); ?>" />
                                                            <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                                <i class="ri-time-line"></i>
                                                            </div>
                                                            <div class="invalid-feedback"><?= getLangKey('pekerjaan_jadwal_add_modal_label_jam_selesai_error'); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name" class="form-label"><?= getLangKey('pekerjaan_jadwal_add_modal_label_progress'); ?> <span class="text-danger">*</span></label>
                                                    <input type="number" value="0" min="0" max="100" class="form-control" id="progress" name="progress" placeholder="<?= getLangKey('pekerjaan_jadwal_add_modal_label_progress_plc'); ?>"></textarea>
                                                    <div class="invalid-feedback"><?= getLangKey('pekerjaan_jadwal_add_modal_label_progress_error'); ?></div>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="reset" class="reset btn btn-danger font-weight-bold">Reset</button>
                                                    <button type="button" class="btn btn-primary font-weight-bold" id="submitJadwal">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-body">
                                            <div id="input_jadwal"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="sparepart" role="tabpanel">
                            <div class="d-flex justify-content-center">
                                <div class="row col-md-12">
                                    <div class="pemberitahuan"></div>
                                    <div class="col-md-4">
                                        <form autocomplete="off" method="post" data-type="save" id="form_sparepart" class="needs-validation" novalidate>
                                            <div class="card-body pb-2">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label"><?= getLangKey('pekerjaan_sparepart_add_modal_label_sap_no'); ?> <span class="text-danger">*</span></label>
                                                    <input type="hidden" name="kd_pekerjaan_sparepart" id="kd_pekerjaan_sparepart">
                                                    <select class="form-select select2" name="no_sap" id="no_sap" required></select>
                                                    <div class="invalid-feedback"><?= getLangKey('pekerjaan_sparepart_add_modal_label_sap_no_error'); ?></div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name" class="form-label"><?= getLangKey('pekerjaan_sparepart_add_modal_label_jumlah'); ?> <span class="text-danger">*</span></label>
                                                    <input type="number" value="0" min="0" max="100" required class="form-control" id="jumlah" name="jumlah" placeholder="<?= getLangKey('pekerjaan_sparepart_add_modal_label_jumlah_plc'); ?>"></textarea>
                                                    <div class="invalid-feedback"><?= getLangKey('pekerjaan_sparepart_add_modal_label_jumlah_error'); ?></div>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="button" class="reset btn btn-danger font-weight-bold">Reset</button>
                                                    <button type="button" class="btn btn-primary font-weight-bold" id="submitSparepart">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div id="input_sparepart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="recycle" role="tabpanel">
                            <div class="d-flex justify-content-center">
                                <div class="row col-md-12">
                                    <div class="pemberitahuan"></div>
                                    <div class="col-md-4">
                                        <form autocomplete="off" method="post" data-type="save" id="form_recycle" class="needs-validation" novalidate>
                                            <div class="card-body pb-2">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label"><?= getLangKey('pekerjaan_sparepart_add_modal_label_no_recycle'); ?> <span class="text-danger">*</span></label>
                                                    <input type="hidden" name="kd_pekerjaan_recycle" id="kd_pekerjaan_recycle">
                                                    <select class="form-select select2" name="no_recycle" id="no_recycle" required></select>
                                                    <div class="invalid-feedback"><?= getLangKey('pekerjaan_sparepart_add_modal_label_no_recycle_error'); ?></div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name" class="form-label"><?= getLangKey('pekerjaan_sparepart_add_modal_label_status'); ?> <span class="text-danger">*</span></label>
                                                    <select class="form-select select2" name="status_recycle" id="status_recycle" required>
                                                        <option></option>
                                                        <option value="IU">In Use</option>
                                                        <option value="UR">Under Repair</option>
                                                        <option value="RFU">Ready For Use</option>
                                                    </select>
                                                    <div class="invalid-feedback"><?= getLangKey('pekerjaan_sparepart_add_modal_label_status_error'); ?></div>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="button" class="reset btn btn-danger font-weight-bold">Reset</button>
                                                    <button type="button" class="btn btn-primary font-weight-bold" id="submitRecycle">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div id="input_recycle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger font-weight-bold" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="modal fade" id="modalMore" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0 overflow-hidden">
            <div class="card ribbon-box border shadow-none mb-lg-0">
                <div class="card-body text-muted">
                    <span class="ribbon-three ribbon-three-primary"><span id="ribbon-title">Featured</span></span>
                    <h5 class="fs-14 text-end mb-3">
                        <button type="button" class="btn-close tutupDetail" style="position: relative;top:-3px" data-bs-dismiss="modal" aria-label="Close"></button>
                    </h5>
                    <p class="mb-0" id="moreValue"></p>
                </div>
            </div>
        </div>
    </div>
</div>