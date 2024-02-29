<style>
    td:last-child {
        padding: 0 !important;
    }

    #table .input-group>.input-group-append>button:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
</style>

<div class=" container ">
    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-body" style="padding-top:0">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="table">
                <thead>
                    <tr>
                        <th style="width:1%"><?= getLangKey('role_col_1'); ?></th>
                        <th style="width:14%"><?= getLangKey('role_col_2'); ?></th>
                        <th><?= getLangKey('role_col_3'); ?></th>
                        <th style="width:16%"><?= getLangKey('role_col_4'); ?></th>
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
        <div class="modal-dialog" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_tambah" name="Element">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel"><?= getLangKey('role_add_modal_title'); ?></h5>
                        <button type="button" class="close tutup" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?= getLangKey('role_add_modal_label_nm_role'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('role_add_modal_label_nm_role_plc'); ?>" data-error="<?= getLangKey('role_add_modal_label_nm_role_error'); ?>" id="nm_role" name="nm_role" />
                        </div>
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
        <div class="modal-dialog" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_edit" name="Element">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel"><?= getLangKey('role_edit_modal_title'); ?></h5>
                        <button type="button" class="close tutup" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="kd_role_edit" id="kd_role_edit">
                            <label><?= getLangKey('role_edit_modal_label_nm_role'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('role_edit_modal_label_nm_role_plc'); ?>" data-error="<?= getLangKey('role_edit_modal_label_nm_role_error'); ?>" id="nm_role_edit" name="nm_role_edit" />
                        </div>
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