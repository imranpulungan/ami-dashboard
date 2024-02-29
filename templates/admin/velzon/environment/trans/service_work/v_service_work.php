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
            <!-- <div class="table-responsive"> -->
            <table class="table table-separate table-head-custom table-checkable" id="table">
                <thead>
                    <tr>
                        <th style="width:1%"><?= getLangKey('service_work_col_1'); ?></th>
                        <!-- DISPLAY : FALSE -->
                        <th><?= getLangKey('service_work_col_2'); ?></th>
                        <th><?= getLangKey('service_work_col_3'); ?></th>
                        <th><?= getLangKey('service_work_col_4'); ?></th>
                        <th><?= getLangKey('service_work_col_5'); ?></th>
                        <th><?= getLangKey('service_work_col_6'); ?></th>
                        <th><?= getLangKey('service_work_col_7'); ?></th>
                        <th><?= getLangKey('service_work_col_8'); ?></th>
                        <th><?= getLangKey('service_work_col_9'); ?></th>
                        <th><?= getLangKey('service_work_col_10'); ?></th>
                        <th><?= getLangKey('service_work_col_11'); ?></th>
                        <th><?= getLangKey('service_work_col_12'); ?></th>
                        <th><?= getLangKey('service_work_col_13'); ?></th>
                        <th><?= getLangKey('service_work_col_14'); ?></th>
                        <th><?= getLangKey('service_work_col_15'); ?></th>
                        <th><?= getLangKey('service_work_col_16'); ?></th>
                        <th style="width:16%"><?= getLangKey('service_work_col_17'); ?></th>
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
                        <h5 class="modal-title" id="modalLabel"><?= getLangKey('service_work_add_modal_title'); ?></h5>
                        <button type="button" class="close tutup" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?= getLangKey('service_work_add_modal_label_judul'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_add_modal_label_judul_plc'); ?>" data-error="<?= getLangKey('service_work_add_modal_label_judul_error'); ?>" id="judul" name="judul" />
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_add_modal_label_rkap'); ?> <span class="text-danger">*</span></label>
                            <select class="form-control select2" style="width: 100%" id="rkap" name="rkap" data-error="<?= getLangKey('service_work_add_modal_label_rkap_error'); ?>">
                                <option label="Label"></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_add_modal_label_jenis'); ?> <span class="text-danger">*</span></label>
                            <select class="form-control select2" style="width: 100%" id="jenis" name="jenis" data-error="<?= getLangKey('service_work_add_modal_label_jenis_error'); ?>">
                                <option label="Label"></option>
                                <option value="CAPEX">CAPEX</option>
                                <option value="OPEX">OPEX</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_add_modal_label_status'); ?> <span class="text-danger">*</span></label>
                            <select class="form-control select2" style="width: 100%" id="status" name="status" data-error="<?= getLangKey('service_work_add_modal_label_status_error'); ?>">
                                <option label="Label"></option>
                                <option value="KAK">KAK</option>
                                <option value="Tender Briefing">Tender Briefing</option>
                                <option value="TE">TE</option>
                                <option value="Negosiasi">Negosiasi</option>
                                <option value="Kontrak">Kontrak</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Batal">Batal</option>
                                <option value="Terminasi">Terminasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_add_modal_label_no_kontrak'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_add_modal_label_no_kontrak_plc'); ?>" data-error="<?= getLangKey('service_work_add_modal_label_no_kontrak_error'); ?>" id="no_kontrak" name="no_kontrak" />
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_add_modal_label_nama_penyedia'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_add_modal_label_nama_penyedia_plc'); ?>" data-error="<?= getLangKey('service_work_add_modal_label_nama_penyedia_error'); ?>" id="nama_penyedia" name="nama_penyedia" />
                        </div>
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_add_modal_label_kak_plan'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_add_modal_label_kak_plan_plc'); ?>" data-error="<?= getLangKey('service_work_add_modal_label_kak_plan_error'); ?>" id="kak_plan" name="kak_plan" />
                            </div>
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_add_modal_label_kak_aktual'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_add_modal_label_kak_aktual_plc'); ?>" data-error="<?= getLangKey('service_work_add_modal_label_kak_aktual_error'); ?>" id="kak_aktual" name="kak_aktual" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_add_modal_label_kontrak_mulai'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_add_modal_label_kontrak_mulai_plc'); ?>" data-error="<?= getLangKey('service_work_add_modal_label_kontrak_mulai_error'); ?>" id="kontrak_mulai" name="kontrak_mulai" />
                            </div>
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_add_modal_label_kontrak_selesai'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_add_modal_label_kontrak_selesai_plc'); ?>" data-error="<?= getLangKey('service_work_add_modal_label_kontrak_selesai_error'); ?>" id="kontrak_selesai" name="kontrak_selesai" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_add_modal_label_kerja_mulai'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_add_modal_label_kerja_mulai_plc'); ?>" data-error="<?= getLangKey('service_work_add_modal_label_kerja_mulai_error'); ?>" id="kerja_mulai" name="kerja_mulai" />
                            </div>
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_add_modal_label_kerja_selesai'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_add_modal_label_kerja_selesai_plc'); ?>" data-error="<?= getLangKey('service_work_add_modal_label_kerja_selesai_error'); ?>" id="kerja_selesai" name="kerja_selesai" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_add_modal_label_keterangan'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_add_modal_label_keterangan_plc'); ?>" data-error="<?= getLangKey('service_work_add_modal_label_keterangan_error'); ?>" id="keterangan" name="keterangan" />
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
                        <h5 class="modal-title" id="modalLabel"><?= getLangKey('service_work_edit_modal_title'); ?></h5>
                        <button type="button" class="close tutup" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="kd_service_edit" id="kd_service_edit">
                        <div class="form-group">
                            <label><?= getLangKey('service_work_edit_modal_label_judul'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_edit_modal_label_judul_plc'); ?>" data-error="<?= getLangKey('service_work_edit_modal_label_judul_error'); ?>" id="judul_edit" name="judul_edit" />
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_edit_modal_label_rkap'); ?> <span class="text-danger">*</span></label>
                            <select class="form-control select2" style="width: 100%" id="rkap_edit" name="rkap_edit" data-error="<?= getLangKey('service_work_edit_modal_label_rkap_error'); ?>">
                                <option label="Label"></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_edit_modal_label_jenis'); ?> <span class="text-danger">*</span></label>
                            <select class="form-control select2" style="width: 100%" id="jenis_edit" name="jenis_edit" data-error="<?= getLangKey('service_work_edit_modal_label_jenis_error'); ?>">
                                <option label="Label"></option>
                                <option value="CAPEX">CAPEX</option>
                                <option value="OPEX">OPEX</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_edit_modal_label_status'); ?> <span class="text-danger">*</span></label>
                            <select class="form-control select2" style="width: 100%" id="status_edit" name="status_edit" data-error="<?= getLangKey('service_work_edit_modal_label_status_error'); ?>">
                                <option label="Label"></option>
                                <option value="KAK">KAK</option>
                                <option value="Tender Briefing">Tender Briefing</option>
                                <option value="TE">TE</option>
                                <option value="Negosiasi">Negosiasi</option>
                                <option value="Kontrak">Kontrak</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Batal">Batal</option>
                                <option value="Terminasi">Terminasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_edit_modal_label_no_kontrak'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_edit_modal_label_no_kontrak_plc'); ?>" data-error="<?= getLangKey('service_work_edit_modal_label_no_kontrak_error'); ?>" id="no_kontrak_edit" name="no_kontrak_edit" />
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_edit_modal_label_nama_penyedia'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_edit_modal_label_nama_penyedia_plc'); ?>" data-error="<?= getLangKey('service_work_edit_modal_label_nama_penyedia_error'); ?>" id="nama_penyedia_edit" name="nama_penyedia_edit" />
                        </div>
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_edit_modal_label_kak_plan'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_edit_modal_label_kak_plan_plc'); ?>" data-error="<?= getLangKey('service_work_edit_modal_label_kak_plan_error'); ?>" id="kak_plan_edit" name="kak_plan_edit" />
                            </div>
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_edit_modal_label_kak_aktual'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_edit_modal_label_kak_aktual_plc'); ?>" data-error="<?= getLangKey('service_work_edit_modal_label_kak_aktual_error'); ?>" id="kak_aktual_edit" name="kak_aktual_edit" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_edit_modal_label_kontrak_mulai'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_edit_modal_label_kontrak_mulai_plc'); ?>" data-error="<?= getLangKey('service_work_edit_modal_label_kontrak_mulai_error'); ?>" id="kontrak_mulai_edit" name="kontrak_mulai_edit" />
                            </div>
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_edit_modal_label_kontrak_selesai'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_edit_modal_label_kontrak_selesai_plc'); ?>" data-error="<?= getLangKey('service_work_edit_modal_label_kontrak_selesai_error'); ?>" id="kontrak_selesai_edit" name="kontrak_selesai_edit" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_edit_modal_label_kerja_mulai'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_edit_modal_label_kerja_mulai_plc'); ?>" data-error="<?= getLangKey('service_work_edit_modal_label_kerja_mulai_error'); ?>" id="kerja_mulai_edit" name="kerja_mulai_edit" />
                            </div>
                            <div class="col-xl-6 form-group">
                                <label><?= getLangKey('service_work_edit_modal_label_kerja_selesai'); ?> <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="<?= getLangKey('service_work_edit_modal_label_kerja_selesai_plc'); ?>" data-error="<?= getLangKey('service_work_edit_modal_label_kerja_selesai_error'); ?>" id="kerja_selesai_edit" name="kerja_selesai_edit" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label><?= getLangKey('service_work_edit_modal_label_keterangan'); ?> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="<?= getLangKey('service_work_edit_modal_label_keterangan_plc'); ?>" data-error="<?= getLangKey('service_work_edit_modal_label_keterangan_error'); ?>" id="keterangan_edit" name="keterangan_edit" />
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