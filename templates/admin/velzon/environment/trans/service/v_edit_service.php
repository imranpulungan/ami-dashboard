<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"><?= $title; ?></h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Transaction</a></li>
                            <li class="breadcrumb-item active"><?= $title; ?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- <form autocomplete="off" method="post" id="form_tambah" class="needs-validation" novalidate> -->
        <div class="row g-4 mb-3">
            <div class="col-sm">
                <div class="d-flex justify-content-sm-first gap-2">
                    <div class="search-box w-25">
                        <input type="text" class="form-control ps-2 pe-2 bg-white" name="kd_service" id="kd_service" placeholder="Parent Code..." readonly value="<?= $kd_service; ?>">
                    </div>
                </div>
            </div>

            <div class="col-sm-auto">
                <div>
                    <?php if (hasPermission('IN')) : ?>
                        <button type="button" class="btn btn-success" id="submit"><i class="ri-add-line align-bottom me-1"></i> Update <?= getLangKey('title') ?></button>
                    <?php endif; ?>
                    <!-- <form action="" method="POST">
                        <input type="hidden" value="true" name="scrty" /> -->
                    <button type="submit" class="btn btn-danger btn-label" onclick="ResetForm()">
                        <i class="ri-refresh-line label-icon align-middle fs-16 me-2"></i>
                        Reset
                    </button>
                    <!-- </form> -->
                    <button type="button" class="btn btn-warning btn-label" onclick="WindowClose()">
                        <i class="ri-logout-box-line label-icon align-middle fs-16 me-2"></i>
                        Tutup
                    </button>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body append-body pb-0">
                        <style>
                            table tr {
                                vertical-align: middle;
                            }

                            /* table tr th,
                            table tr td {
                                padding: 0 !important;
                            }

                            table tr th.bottoming {
                                padding: 5px !important;
                            }
                            */

                            table tr td.label-left {
                                padding-left: 10px !important;
                                width: 10%;
                            }

                            table tr td.label-left-input {
                                padding: 5px !important;
                            }

                            table tr td.no-padding {
                                padding: 0px;
                            }

                            /* .select2.select2-container {
                                    width: 50% !important;
                                } */

                            .invalid-feedback {
                                padding: 5px;
                            }

                            .select2.select2-container.www-50 {
                                width: 50% !important;
                            }

                            .select2-container--default.select2-container--disabled .select2-selection--multiple,
                            .select2-container--default.select2-container--disabled .select2-selection--single {
                                background-color: #f7f7f7;
                                cursor: no-drop;
                            }

                            .select2-container .select2-selection--multiple {
                                border: none !important;
                            }

                            .pl-11 {
                                padding-left: 12px;
                            }
                        </style>
                        <form autocomplete="off" method="post" data-type="save" id="form_tambah" class="needs-validation" novalidate>
                            <table class="table table-bordered">
                                <tr>
                                    <td class="label-left no-padding"><?= getLangKey('service_add_modal_label_judul_pekerjaan'); ?></td>
                                    <td class="no-padding" colspan="3">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_judul_pekerjaan'); ?> <span class="text-danger">*</span></label>
                                        <textarea class="form-control border-0 autoresize table-input pl-11" name="judul" id="judul" required placeholder="<?= getLangKey('service_add_modal_label_judul_pekerjaan_plc'); ?>"></textarea>
                                        <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_judul_pekerjaan_error'); ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-left no-padding"><?= getLangKey('service_add_modal_label_rkap'); ?></td>
                                    <td class="no-padding">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_rkap'); ?> <span class="text-danger">*</span></label>
                                        <select class="form-select select2 border-0 table-input select2-pendek" name="rkap" id="rkap" required>
                                            <option></option>
                                            <?php
                                            $tahun_mulai = 2015;
                                            $tahun_akhir = date('Y');
                                            for ($x = $tahun_akhir; $tahun_mulai <= $tahun_akhir; $tahun_akhir--) {
                                                echo "<option>$tahun_akhir</option>";
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_rkap_error'); ?></div>
                                    </td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="label-left no-padding"><?= getLangKey('service_add_modal_label_jenis'); ?></td>
                                    <td class="no-padding">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_jenis'); ?> <span class="text-danger">*</span></label>
                                        <select class="form-select select2 border-0 table-input select2-pendek" name="jenis" id="jenis" required>
                                            <option value=""></option>
                                            <option value="CAPEX">CAPEX</option>
                                            <option value="OPEX">OPEX</option>
                                        </select>
                                        <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_jenis_error'); ?></div>
                                    </td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="label-left no-padding"><?= getLangKey('service_add_modal_label_status'); ?></td>
                                    <td class="no-padding">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_status'); ?> <span class="text-danger">*</span></label>
                                        <select class="form-select select2 border-0 table-input select2-pendek" name="status" id="status" required>
                                            <option value=""></option>
                                            <option value="KAK">KAK</option>
                                            <option value="Tender Briefing">Tender Briefing</option>
                                            <option value="TE">TE</option>
                                            <option value="Negosiasi">Negosiasi</option>
                                            <option value="Kontrak">Kontrak</option>
                                            <option value="Selesai">Selesai</option>
                                            <option value="Batal">Batal</option>
                                            <option value="Terminasi">Terminasi</option>
                                        </select>
                                        <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_status_error'); ?></div>
                                    </td>
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="label-left no-padding"><?= getLangKey('service_add_modal_label_no_kontrak'); ?></td>
                                    <td class="no-padding" colspan="3">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_no_kontrak'); ?> <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control border-0 pl-11" id="no_kontrak" name="no_kontrak" placeholder="<?= getLangKey('service_add_modal_label_no_kontrak_plc'); ?>" />
                                        <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_no_kontrak_error'); ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-left no-padding"><?= getLangKey('service_add_modal_label_nama_penyedia'); ?></td>
                                    <td class="no-padding" colspan="3">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_nama_penyedia'); ?> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control border-0 pl-11" id="penyedia" name="penyedia" placeholder="<?= getLangKey('service_add_modal_label_nama_penyedia_plc'); ?>" />
                                        <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_nama_penyedia_error'); ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-left no-padding"><?= getLangKey('service_add_modal_label_kak_plan'); ?></td>
                                    <td class="w-25 no-padding">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_kak_plan'); ?> <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" data-provider="flatpickr" class="form-control flatpickr-input active border-0 table-input" placeholder="<?= getLangKey('service_add_modal_label_kak_plan_plc'); ?>" id="kak_plan" data-date-format="d F Y" />
                                            <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                <i class="ri-calendar-2-line"></i>
                                            </div>
                                            <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_kak_plan_error'); ?></div>
                                        </div>
                                    </td>
                                    <td class="no-padding" style="padding-left: 10px !important;width:10%;border-left:1px solid var(--vz-border-color);border-right: 1px solid var(--vz-border-color);"><?= getLangKey('service_add_modal_label_kak_actual'); ?></td>
                                    <td class="w-25 no-padding">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_kak_actual'); ?> <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" data-provider="flatpickr" class="form-control flatpickr-input active border-0 table-input" placeholder="<?= getLangKey('service_add_modal_label_kak_actual_plc'); ?>" id="kak_actual" data-date-format="d F Y" />
                                            <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                <i class="ri-calendar-2-line"></i>
                                            </div>
                                            <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_kak_actual_error'); ?></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-left no-padding"><?= getLangKey('service_add_modal_label_mulai_kontrak'); ?></td>
                                    <td class="w-25 no-padding">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_mulai_kontrak'); ?> <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" data-pickr="flatpickr" class="form-control flatpickr-input active border-0 table-input" placeholder="<?= getLangKey('service_add_modal_label_mulai_kontrak_plc'); ?>" id="mulai_kontrak" data-date-format="d F Y" />
                                            <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                <i class="ri-calendar-2-line"></i>
                                            </div>
                                            <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_mulai_kontrak_error'); ?></div>
                                        </div>
                                    </td>
                                    <td class="no-padding" style="padding-left: 10px !important;width:10%;border-left:1px solid var(--vz-border-color);border-right: 1px solid var(--vz-border-color);"><?= getLangKey('service_add_modal_label_selesai_kontrak'); ?></td>
                                    <td class="w-25 no-padding">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_selesai_kontrak'); ?> <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" data-pickr="flatpickr" class="form-control flatpickr-input active border-0 table-input" placeholder="<?= getLangKey('service_add_modal_label_selesai_kontrak_plc'); ?>" id="selesai_kontrak" data-date-format="d F Y" />
                                            <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                <i class="ri-calendar-2-line"></i>
                                            </div>
                                            <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_selesai_kontrak_error'); ?></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-left no-padding"><?= getLangKey('service_add_modal_label_mulai_kerja'); ?></td>
                                    <td class="w-25 no-padding">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_mulai_kerja'); ?> <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" data-pickr="flatpickr" class="form-control flatpickr-input active border-0 table-input" placeholder="<?= getLangKey('service_add_modal_label_mulai_kerja_plc'); ?>" id="mulai_kerja" data-date-format="d F Y" />
                                            <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                <i class="ri-calendar-2-line"></i>
                                            </div>
                                            <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_mulai_kerja_error'); ?></div>
                                        </div>
                                    </td>
                                    <td class="no-padding" style="padding-left: 10px !important;width:10%;border-left:1px solid var(--vz-border-color);border-right: 1px solid var(--vz-border-color);"><?= getLangKey('service_add_modal_label_selesai_kerja'); ?></td>
                                    <td class="w-25 no-padding">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_selesai_kerja'); ?> <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" data-pickr="flatpickr" class="form-control flatpickr-input active border-0 table-input" placeholder="<?= getLangKey('service_add_modal_label_selesai_kerja_plc'); ?>" id="selesai_kerja" data-date-format="d F Y" />
                                            <div class="input-group-text bg-primary border-primary text-white flatpickr-btn">
                                                <i class="ri-calendar-2-line"></i>
                                            </div>
                                            <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_selesai_kerja_error'); ?></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-left no-padding"><?= getLangKey('service_add_modal_label_keterangan'); ?></td>
                                    <td class="no-padding" colspan="3">
                                        <label for="name" class="form-label d-none"><?= getLangKey('service_add_modal_label_keterangan'); ?> <span class="text-danger">*</span></label>
                                        <textarea class="form-control border-0 autoresize" name="keterangan" id="keterangan" placeholder="<?= getLangKey('service_add_modal_label_keterangan_plc'); ?>"></textarea>
                                        <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_keterangan_error'); ?></div>
                                    </td>
                                </tr>
                            </table>
                            <button type="button d-none" style="display: none;" id="shadowSubmit">Add</button>
                        </form>
                    </div><!-- end card-body -->
                    <div class="dropdown-divider"></div>
                    <div class="card-body pt-1">
                        <div class="row">
                            <div class="col-md-4">
                                <form autocomplete="off" method="post" data-type="save" id="form_item" class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="name" class="form-label"><?= getLangKey('service_add_modal_label_judul_item'); ?> <span class="text-danger">*</span></label>
                                        <input type="hidden" name="kd_item" id="kd_item" value="" />
                                        <textarea class="form-control autoresize" required name="judul_item" id="judul_item" placeholder="<?= getLangKey('service_add_modal_label_judul_item_plc'); ?>"></textarea>
                                        <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_judul_item_error'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label"><?= getLangKey('service_add_modal_label_bobot'); ?> <span class="text-danger">*</span></label>
                                        <input type="number" value="0" min="0" required max="100" class="form-control" id="bobot" name="bobot" placeholder="<?= getLangKey('service_add_modal_label_bobot_plc'); ?>"></textarea>
                                        <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_bobot_error'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label"><?= getLangKey('service_add_modal_label_progress'); ?> <span class="text-danger">*</span></label>
                                        <input type="number" value="0" min="0" required max="100" class="form-control" id="progress" name="progress" placeholder="<?= getLangKey('service_add_modal_label_progress_plc'); ?>"></textarea>
                                        <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_progress_error'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label"><?= getLangKey('service_add_modal_label_keterangan_item'); ?> <span class="text-danger">*</span></label>
                                        <textarea class="form-control autoresize" name="keterangan_item" id="keterangan_item" placeholder="<?= getLangKey('service_add_modal_label_keterangan_item_plc'); ?>"></textarea>
                                        <div class="invalid-feedback"><?= getLangKey('service_add_modal_label_keterangan_item_error'); ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="reset" class="reset btn btn-danger font-weight-bold">Reset</button>
                                        <button type="button" class="btn btn-primary font-weight-bold" id="submitItem">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <div id="input_item"></div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
            <!-- </form> -->

        </div>
    </div>
</div>