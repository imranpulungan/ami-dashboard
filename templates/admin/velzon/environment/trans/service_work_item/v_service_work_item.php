<style>
    td:last-child {
        padding: 0 !important;
    }

    #table .input-group>.input-group-append>button:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
</style>
<script>
    const SERVICE_ID = <?= json_encode($service_id); ?>;
</script>

<div class=" container ">
    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-body" style="padding-top:0">
            <!--begin: Datatable-->
            <!-- <div class="table-responsive"> -->
            <table class="table table-separate table-head-custom table-checkable" id="table">
                <thead>
                    <tr>
                        <th style="width:1%"><?= getLangKey('service_work_item_col_1'); ?></th>
                        <!-- DISPLAY : FALSE -->
                        <th><?= getLangKey('service_work_item_col_2'); ?></th>
                        <th><?= getLangKey('service_work_item_col_3'); ?></th>
                        <th><?= getLangKey('service_work_item_col_4'); ?></th>
                        <th><?= getLangKey('service_work_item_col_5'); ?></th>
                        <th><?= getLangKey('service_work_item_col_6'); ?></th>
                        <th><?= getLangKey('service_work_item_col_7'); ?></th>
                        <th style="width:16%"><?= getLangKey('service_work_item_col_8'); ?></th>
                    </tr>
                </thead>

                <tbody>
                </tbody>

            </table>
            <!-- </div> -->
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
                        <h5 class="modal-title" id="modalLabel"><?= getLangKey('service_work_item_add_modal_title'); ?></h5>
                        <button type="button" class="close tutup" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?= getLangKey('service_work_item_add_modal_label_judul'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_item_add_modal_label_judul_plc'); ?>" data-error="<?= getLangKey('service_work_item_add_modal_label_judul_error'); ?>" id="judul" name="judul" />
                        </div>
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_item_add_modal_label_bobot'); ?> <span class="text-danger">*</span></label>
                                <input type="number" min="0" max="100" class="form-control" placeholder="<?= getLangKey('service_work_item_add_modal_label_bobot_plc'); ?>" data-error="<?= getLangKey('service_work_item_add_modal_label_bobot_error'); ?>" id="bobot" name="bobot" />
                            </div>
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_item_add_modal_label_progress'); ?> <span class="text-danger">*</span></label>
                                <input type="number" min="0" max="100" class="form-control" placeholder="<?= getLangKey('service_work_item_add_modal_label_progress_plc'); ?>" data-error="<?= getLangKey('service_work_item_add_modal_label_progress_error'); ?>" id="progress" name="progress" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_item_add_modal_label_keterangan'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_item_add_modal_label_keterangan_plc'); ?>" data-error="<?= getLangKey('service_work_item_add_modal_label_keterangan_error'); ?>" id="keterangan" name="keterangan" />
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
                        <h5 class="modal-title" id="modalLabel"><?= getLangKey('service_work_item_edit_modal_title'); ?></h5>
                        <button type="button" class="close tutup" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="kd_service_item_edit" id="kd_service_item_edit">
                        <div class="form-group">
                            <label><?= getLangKey('service_work_item_edit_modal_label_judul'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_item_edit_modal_label_judul_plc'); ?>" data-error="<?= getLangKey('service_work_item_edit_modal_label_judul_error'); ?>" id="judul_edit" name="judul_edit" />
                        </div>
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_item_edit_modal_label_bobot'); ?> <span class="text-danger">*</span></label>
                                <input type="number" min="0" max="100" class="form-control" placeholder="<?= getLangKey('service_work_item_edit_modal_label_bobot_plc'); ?>" data-error="<?= getLangKey('service_work_item_edit_modal_label_bobot_error'); ?>" id="bobot_edit" name="bobot_edit" />
                            </div>
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_item_edit_modal_label_progress'); ?> <span class="text-danger">*</span></label>
                                <input type="number" min="0" max="100" class="form-control" placeholder="<?= getLangKey('service_work_item_edit_modal_label_progress_plc'); ?>" data-error="<?= getLangKey('service_work_item_edit_modal_label_progress_error'); ?>" id="progress_edit" name="progress_edit" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_item_edit_modal_label_keterangan'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_item_edit_modal_label_keterangan_plc'); ?>" data-error="<?= getLangKey('service_work_item_edit_modal_label_keterangan_error'); ?>" id="keterangan_edit" name="keterangan_edit" />
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