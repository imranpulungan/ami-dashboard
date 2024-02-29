<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Data Peralatan</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master Data</a></li>
                            <li class="breadcrumb-item active">Data Peralatan</li>
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
                            <option value="10">10</option>
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
                                <table class="table align-middle table-nowrap mb-0" id="AsTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th style="width:1%"><?= getLangKey('peralatan_col_1'); ?></th>
                                            <th><?= getLangKey('peralatan_col_2'); ?></th>
                                            <th><?= getLangKey('peralatan_col_3'); ?></th>
                                            <th><?= getLangKey('peralatan_col_4'); ?></th>
                                            <th><?= getLangKey('peralatan_col_5'); ?></th>
                                            <th><?= getLangKey('peralatan_col_6'); ?></th>
                                            <th style="width:16%"><?= getLangKey('peralatan_col_7'); ?></th>
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
                        <h4 class="card-title mb-0"><?= getLangKey('peralatan_add_modal_title'); ?></h4>
                        <button type="button" class="btn-close tutup"></button>
                    </div>
                    <div class="alert alert-warning rounded-0 mb-0">
                        <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                    </div>
                    <div class="modal-body pb-2">
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('peralatan_add_modal_label_tag_code'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="tag_code_peralatan" name="tag_code_peralatan" placeholder="<?= getLangKey('peralatan_add_modal_label_tag_code_plc'); ?>" required>
                            <div class="invalid-feedback"><?= getLangKey('peralatan_add_modal_label_tag_code_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label><?= getLangKey('peralatan_add_modal_label_jenis'); ?> <span class="text-danger">*</span></label>
                            <input type="text" required class="form-control" placeholder="<?= getLangKey('peralatan_add_modal_label_jenis_plc'); ?>" id="jenis_peralatan" name="jenis_peralatan" />
                            <div class="invalid-feedback"><?= getLangKey('peralatan_add_modal_label_jenis_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label><?= getLangKey('peralatan_add_modal_label_mekanikal'); ?> <span class="text-danger">*</span></label>
                            <input type="text" required class="form-control" placeholder="<?= getLangKey('peralatan_add_modal_label_mekanikal_plc'); ?>" id="mekanikal_peralatan" name="mekanikal_peralatan" />
                            <div class="invalid-feedback"><?= getLangKey('peralatan_add_modal_label_mekanikal_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label><?= getLangKey('peralatan_add_modal_label_elektrikal'); ?> <span class="text-danger">*</span></label>
                            <input type="text" required class="form-control" placeholder="<?= getLangKey('peralatan_add_modal_label_elektrikal_plc'); ?>" id="elektrikal_peralatan" name="elektrikal_peralatan" />
                            <div class="invalid-feedback"><?= getLangKey('peralatan_add_modal_label_elektrikal_error'); ?></div>
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
                        <h4 class="card-title mb-0" id="modal_header_edit"><?= getLangKey('peralatan_edit_modal_title'); ?></h4>
                        <button type="button" class="btn-close tutup"></button>
                    </div>
                    <div class="alert alert-warning rounded-0 mb-0">
                        <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                    </div>
                    <div class="modal-body pb-2">
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('peralatan_edit_modal_label_tag_code'); ?> <span class="text-danger">*</span></label>
                            <input type="hidden" id="kd_peralatan_edit" name="kd_peralatan_edit">
                            <input type="text" class="form-control" id="tag_code_peralatan_edit" name="tag_code_peralatan_edit" placeholder="<?= getLangKey('peralatan_edit_modal_label_tag_code_plc'); ?>" required>
                            <div class="invalid-feedback"><?= getLangKey('peralatan_edit_modal_label_tag_code_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label><?= getLangKey('peralatan_edit_modal_label_jenis'); ?> <span class="text-danger">*</span></label>
                            <input type="text" required class="form-control" placeholder="<?= getLangKey('peralatan_edit_modal_label_jenis_plc'); ?>" id="jenis_peralatan_edit" name="jenis_peralatan_edit" />
                            <div class="invalid-feedback"><?= getLangKey('peralatan_edit_modal_label_jenis_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label><?= getLangKey('peralatan_edit_modal_label_mekanikal'); ?> <span class="text-danger">*</span></label>
                            <input type="text" required class="form-control" placeholder="<?= getLangKey('peralatan_edit_modal_label_mekanikal_plc'); ?>" id="mekanikal_peralatan_edit" name="mekanikal_peralatan_edit" />
                            <div class="invalid-feedback"><?= getLangKey('peralatan_edit_modal_label_mekanikal_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label><?= getLangKey('peralatan_edit_modal_label_elektrikal'); ?> <span class="text-danger">*</span></label>
                            <input type="text" required class="form-control" placeholder="<?= getLangKey('peralatan_edit_modal_label_elektrikal_plc'); ?>" id="elektrikal_peralatan_edit" name="elektrikal_peralatan_edit" />
                            <div class="invalid-feedback"><?= getLangKey('peralatan_edit_modal_label_elektrikal_error'); ?></div>
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