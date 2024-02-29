<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"><?= isset($title) && $title !== '' ? $title : 'Surat Izin Kerja Aman'; ?></h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <?php if (isset($parent) && $parent !== '') : ?>
                                <li class="breadcrumb-item"><span><?= $parent; ?></span></li>
                            <?php endif; ?>
                            <li class="breadcrumb-item active"><span><?= isset($title) && $title !== '' ? $title : 'Surat Izin Kerja Aman'; ?></span></li>
                            <!-- <li class="breadcrumb-item active">Daftar User</li> -->
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
                        <input type="text" class="form-control" id="tableSearch" placeholder="Cari...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-auto">
                <div>
                    <?php if (hasPermission('IN')) : ?>
                        <button class="btn btn-success tombolTambah" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="ri-add-line align-bottom me-1"></i> <?= getLangKey('permission_btn_add'); ?></button>
                    <?php endif; ?>
                    <button type="button" class="btn btn-warning btn-label" onclick="ExAsUser.refresh()">
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

            .form-switch-md.form-check-input {
                left: 0rem !important;
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
                                    <!-- <button type="button" class="btn btn-secondary btn-label rounded-start ms-1">
                                        <i class="ri-filter-line label-icon align-middle fs-16 me-2"></i>
                                        Filter
                                    </button> -->
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
                                    <!-- <button type="button" class="btn btn-secondary rounded-start ms-1">
                                        <i class="ri-filter-line label-icon align-middle fs-16"></i>
                                    </button> -->
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
                                            <th style="width:1%"><?= getLangKey('show_permission_col_1'); ?></th>
                                            <th><?= getLangKey('show_permission_col_2'); ?></th>
                                            <th style="width:12%"><?= getLangKey('show_permission_col_3'); ?></th>
                                            <th><?= getLangKey('hide_permission_col_1'); ?></th>
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
        <div class="modal-dialog modal-fullscreen" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_tambah" class="needs-validation" novalidate>
                <div class="modal-content border-0 overflow-hidden">
                    <div class="modal-header p-3">
                        <h4 class="card-title mb-0"><?= getLangKey('permission_add_modal_title'); ?></h4>
                        <button type="button" class="btn-close tutup"></button>
                    </div>
                    <div class="alert alert-warning rounded-0 mb-0">
                        <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                    </div>
                    <div class="modal-body permissionDelay pb-2">
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('permission_add_modal_label_role'); ?> <span class="text-danger">*</span></label>
                            <select class="form-control select2" placeholder="<?= getLangKey('permission_add_modal_label_role_plc'); ?>" data-error="<?= getLangKey('permission_add_modal_label_role_error'); ?>" id="role" name="role" required>
                            </select>
                            <!-- <input type="text" class="form-control" id="nm_role" name="nm_role" placeholder="<?= getLangKey('permission_add_modal_label_role_plc'); ?>" required> -->
                            <div class="invalid-feedback"><?= getLangKey('permission_add_modal_label_role_error'); ?></div>
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label><?= getLangKey('permission_add_modal_label_role_permission'); ?> <span class="text-danger">*</span></label>
                            <div class="table-responsive" style="height:56vh">
                                <style>
                                    /* .header-hh {
                                        position: sticky;
                                        top: 0;
                                    } */
                                </style>
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <thead style="position: sticky;top: 0;z-index:1">
                                        <tr id="tr-menu-action"></tr>
                                    </thead>
                                    <tbody id="tr-list-menu"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="display: none;">
                        <textarea id="menu" name="menu"></textarea>
                    </div>
                    <div class="dropdown-divider"></div>
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
        <div class="modal-dialog modal-fullscreen" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_edit" class="needs-validation" novalidate>
                <div class="modal-content border-0 overflow-hidden">
                    <div class="modal-header p-3">
                        <h4 class="card-title mb-0" id="modal_header_edit"><?= getLangKey('permission_edit_modal_title'); ?></h4>
                        <button type="button" class="btn-close tutup"></button>
                    </div>
                    <!-- <div class="alert alert-warning rounded-0 mb-0">
                        <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                    </div> -->
                    <div class="modal-body permissionDelayEdit pb-2">
                        <div class="form-group" style="margin-bottom: 0;">
                            <input type="hidden" name="role_edit" id="role_edit">
                            <label><?= getLangKey('permission_edit_modal_label_role_permission'); ?> <span class="text-danger">*</span></label>
                            <div class="table-responsive" style="height:74vh">
                                <!-- <style>
                                    .header-hh {
                                        position: sticky;
                                        top: 0;
                                    }
                                </style> -->
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <thead style="position: sticky;top: 0;z-index:1">
                                        <tr id="tr-menu-action-edit"></tr>
                                    </thead>
                                    <tbody id="tr-list-menu-edit"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="display: none;">
                        <textarea id="menuEdit" name="menuEdit"></textarea>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="modal-footer">
                        <button type="button" class="tutup btn btn-danger font-weight-bold">Batal</button>
                        <button type="button" class="btn btn-primary font-weight-bold" id="submitEdit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>