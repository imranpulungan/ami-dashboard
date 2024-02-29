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

            .modal-xxl {
                width: 1440px;
            }

            table td.pointer-pekerjaan {
                cursor: pointer;
            }

            table td.pointer-pekerjaan:hover {
                background-color: #364574;
                color: white;
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
                                            <!-- 0 No -->
                                            <th style="width:1%"><?= getLangKey('schedule_col_1'); ?></th>
                                            <!-- 1 kd planned -->
                                            <th><?= getLangKey('schedule_col_planned'); ?></th>
                                            <!-- 2 kd grup kerja -->
                                            <th><?= getLangKey('schedule_col_2'); ?></th>
                                            <!-- 3 nama grup kerja -->
                                            <th><?= getLangKey('schedule_col_2'); ?></th>
                                            <!-- 4 nama pekerjaan -->
                                            <th><?= getLangKey('schedule_col_3'); ?></th>
                                            <!-- 5 kd status Schedule -->
                                            <th><?= getLangKey('schedule_col_4'); ?></th>
                                            <!-- 6 status Schedule -->
                                            <th><?= getLangKey('schedule_col_4'); ?></th>
                                            <!-- 7 Mo No -->
                                            <th><?= getLangKey('schedule_col_5'); ?></th>
                                            <!-- 8 RSV No -->
                                            <th><?= getLangKey('schedule_col_6'); ?></th>
                                            <!-- 9 Shortage -->
                                            <th><?= getLangKey('schedule_col_7'); ?></th>
                                            <!-- 10 tgl Mulai -->
                                            <th><?= getLangKey('schedule_col_8'); ?></th>
                                            <!-- 11 tgl selesai -->
                                            <th><?= getLangKey('schedule_col_9'); ?></th>
                                            <!-- 12 kd Pekerjaan -->
                                            <th><?= getLangKey('schedule_col_10'); ?></th>
                                            <!-- 13 task id -->
                                            <th style="width:6%"><?= getLangKey('schedule_col_10'); ?></th>
                                            <!-- 14 action -->
                                            <th style="width:8%"></th>
                                            <th>tgl mulai</th>
                                            <th>tgl selesai</th>
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
        <div class="modal-dialog modal-xl" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_tambah" class="needs-validation" novalidate>
                <div class="modal-content border-0 overflow-hidden">
                    <div class="modal-header p-3">
                        <h4 class="card-title mb-0"><?= getLangKey('schedule_add_modal_title'); ?></h4>
                        <button type="button" class="btn-close tutup"></button>
                    </div>
                    <div class="alert alert-warning rounded-0 mb-0">
                        <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                    </div>
                    <div class="modal-body pb-2">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_nama_pekerjaan'); ?> <span class="text-danger">*</span></label>
                                    <textarea class="form-control autoresize" required id="nama" name="nama" placeholder="<?= getLangKey('schedule_add_modal_label_nama_pekerjaan_plc'); ?>"></textarea>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_nama_pekerjaan_error'); ?></div>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_group_kerja'); ?> <span class="text-danger">*</span></label>
                                    <select class="form-select select2" name="kd_group_kerja" id="kd_group_kerja" required></select>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_group_kerja_error'); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_tgl_mulai'); ?> <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" data-pickr="flatpickr" required class="form-control flatpickr-input active" placeholder="<?= getLangKey('schedule_add_modal_label_tgl_mulai_plc'); ?>" id="tgl_mulai" data-date-format="d F Y" />
                                                <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                    <i class="ri-calendar-2-line"></i>
                                                </div>
                                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_tgl_mulai_error'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_tgl_selesai'); ?> <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" data-pickr="flatpickr" required class="form-control flatpickr-input active" placeholder="<?= getLangKey('schedule_add_modal_label_tgl_selesai_plc'); ?>" id="tgl_selesai" data-date-format="d F Y" />
                                                <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                    <i class="ri-calendar-2-line"></i>
                                                </div>
                                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_tgl_selesai_error'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_status'); ?> <span class="text-danger">*</span></label>
                                    <select class="form-select select2" name="status" id="status" required>
                                        <option></option>
                                        <option value="Cleaning">Cleaning</option>
                                        <option value="Weekly Inspection">Weekly Inspection</option>
                                        <option value="Monthly Inspection">Monthly Inspection</option>
                                        <option value="Yearly Inspection">Yearly Inspection</option>
                                        <option value="Replacement">Replacement</option>
                                        <option value="Overhaul">Overhaul</option>
                                    </select>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_status_error'); ?></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_mo_no'); ?> <span class="text-danger">*</span></label>
                                    <input class="form-control" type="number" name="mo_no" id="mo_no" placeholder="<?= getLangKey('schedule_add_modal_label_mo_no_plc'); ?>" />
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_mo_no_error'); ?></div>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_rsv_no'); ?> <span class="text-danger">*</span></label>
                                    <input class="form-control" type="number" name="rsv_no" id="rsv_no" placeholder="<?= getLangKey('schedule_add_modal_label_rsv_no_plc'); ?>" />
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_rsv_no_error'); ?></div>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_shortage'); ?> <span class="text-danger">*</span></label>
                                    <select class="form-select select2" name="shortage" id="shortage" required>
                                        <option></option>
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                    </select>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_shortage_error'); ?></div>
                                </div>
                                <div class="dropdown-divider mb-4 mt-4"></div>
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_data_pekerjaan'); ?> <span class="text-danger">*</span></label>
                                    <select class="form-select select2" name="kd_pekerjaan" id="kd_pekerjaan"></select>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_data_pekerjaan_error'); ?></div>
                                </div>
                            </div>
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
        <div class="modal-dialog modal-xl" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_edit" class="needs-validation" novalidate>
                <div class="modal-content border-0 overflow-hidden">
                    <div class="modal-header p-3">
                        <h4 class="card-title mb-0" id="modal_header_edit"><?= getLangKey('schedule_edit_modal_title'); ?></h4>
                        <button type="button" class="btn-close tutup"></button>
                    </div>
                    <div class="alert alert-warning rounded-0 mb-0">
                        <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                        <input type="hidden" name="kd_planned_edit" id="kd_planned_edit" />
                    </div>
                    <div class="modal-body pb-2">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_nama_pekerjaan'); ?> <span class="text-danger">*</span></label>
                                    <textarea class="form-control autoresize" required id="nama_edit" name="nama_edit" placeholder="<?= getLangKey('schedule_add_modal_label_nama_pekerjaan_plc'); ?>"></textarea>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_nama_pekerjaan_error'); ?></div>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_group_kerja'); ?> <span class="text-danger">*</span></label>
                                    <select class="form-select select2" name="kd_group_kerja_edit" id="kd_group_kerja_edit" required></select>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_group_kerja_error'); ?></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_tgl_mulai'); ?> <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" data-pickr="flatpickr" data-selector="mulai" required class="form-control flatpickr-input active" placeholder="<?= getLangKey('schedule_add_modal_label_tgl_mulai_plc'); ?>" id="tgl_mulai_edit" data-date-format="d F Y" />
                                                <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                    <i class="ri-calendar-2-line"></i>
                                                </div>
                                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_tgl_mulai_error'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_tgl_selesai'); ?> <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" data-pickr="flatpickr" data-selector="selesai" required class="form-control flatpickr-input active" placeholder="<?= getLangKey('schedule_add_modal_label_tgl_selesai_plc'); ?>" id="tgl_selesai_edit" data-date-format="d F Y" />
                                                <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                    <i class="ri-calendar-2-line"></i>
                                                </div>
                                                <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_tgl_selesai_error'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_status'); ?> <span class="text-danger">*</span></label>
                                    <select class="form-select select2" name="status_edit" id="status_edit" required>
                                        <option></option>
                                        <option value="Cleaning">Cleaning</option>
                                        <option value="Weekly Inspection">Weekly Inspection</option>
                                        <option value="Monthly Inspection">Monthly Inspection</option>
                                        <option value="Yearly Inspection">Yearly Inspection</option>
                                        <option value="Replacement">Replacement</option>
                                        <option value="Overhaul">Overhaul</option>
                                    </select>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_status_error'); ?></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_mo_no'); ?> <span class="text-danger">*</span></label>
                                    <input class="form-control" type="number" name="mo_no_edit" id="mo_no_edit" placeholder="<?= getLangKey('schedule_add_modal_label_mo_no_plc'); ?>" />
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_mo_no_error'); ?></div>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_rsv_no'); ?> <span class="text-danger">*</span></label>
                                    <input class="form-control" type="number" name="rsv_no_edit" id="rsv_no_edit" placeholder="<?= getLangKey('schedule_add_modal_label_rsv_no_plc'); ?>" />
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_rsv_no_error'); ?></div>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_shortage'); ?> <span class="text-danger">*</span></label>
                                    <select class="form-select select2" name="shortage_edit" id="shortage_edit" required>
                                        <option></option>
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                    </select>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_shortage_error'); ?></div>
                                </div>
                                <div class="dropdown-divider mb-4 mt-4"></div>
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?= getLangKey('schedule_add_modal_label_data_pekerjaan'); ?> <span class="text-danger">*</span></label>
                                    <select class="form-select select2" name="kd_pekerjaan_edit" id="kd_pekerjaan_edit"></select>
                                    <div class="invalid-feedback"><?= getLangKey('schedule_add_modal_label_data_pekerjaan_error'); ?></div>
                                </div>
                            </div>
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