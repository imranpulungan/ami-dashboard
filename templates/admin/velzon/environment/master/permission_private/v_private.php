<style>
    #table td:last-child {
        padding: 0 !important;
    }

    #table .input-group>.input-group-append>button:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    #role_name {
        font-weight: bold;
    }
</style>
<link rel="stylesheet" href="<?= assetsUri('css/permission.css') ?>">
<div class=" container ">
    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-body" style="padding-top:0">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="table">
                <thead>
                    <tr>
                        <th style="width:24px"><?= getLangKey('permission_private_col_1'); ?></th>
                        <th style="width:10%"><?= getLangKey('permission_private_col_2'); ?></th>
                        <th><?= getLangKey('permission_private_col_3'); ?></th>
                        <th style="width:15%"><?= getLangKey('permission_private_col_4'); ?></th>
                    </tr>
                </thead>

                <tbody>
                </tbody>

            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
</div>

<?php if (hasPermission('IN')) : ?>
    <div class="modal fade" id="modalTambah" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-xxl" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_tambah" name="Element">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel"><?= getLangKey('permission_private_add_modal_title'); ?></h5>
                        <button type="button" class="close tutup" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body permissionDelay">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label><?= getLangKey('permission_private_add_modal_label_user'); ?> <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <select class="form-control" placeholder="<?= getLangKey('permission_private_add_modal_label_user_plc'); ?>" data-error="<?= getLangKey('permission_private_add_modal_label_user_error'); ?>" id="user" name="user">
                                        </select>
                                        <div class="input-group-append">
                                            <button type="button" id="default_permission" class="btn btn-warning">Load Default Permission</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label><?= getLangKey('permission_private_add_modal_label_permission'); ?> <span class="text-danger">*</span></label>
                            <div class="table-responsive" style="height:60vh">
                                <style>
                                    .header-hh {
                                        position: sticky;
                                        top: 0;
                                    }
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold tutup">Batal</button>
                        <button type="button" class="btn btn-primary font-weight-bold" id="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>

<?php if (hasPermission('UP')) : ?>
    <div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-xxl" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_edit" name="Element">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel"><?= getLangKey('permission_private_edit_modal_title'); ?> : <span id="user_name"></span></h5>
                        <button type="button" class="close tutup" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body permissionDelayEdit">
                        <div class="form-group" style="margin-bottom: 0;">
                            <input type="hidden" name="user_edit" id="user_edit">
                            <label><?= getLangKey('permission_private_edit_modal_label_permission'); ?> <span class="text-danger">*</span></label>
                            <div class="table-responsive" style="height:60vh">
                                <style>
                                    .header-hh {
                                        position: sticky;
                                        top: 0;
                                    }
                                </style>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold tutup">Batal</button>
                        <button type="button" class="btn btn-primary font-weight-bold" id="submitEdit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>