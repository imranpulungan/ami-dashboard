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
        <form autocomplete="off" method="post" id="form_tambah" class="needs-validation" novalidate>
            <div class="row g-4 mb-3">
                <div class="col-sm">
                    <div class="d-flex justify-content-sm-first gap-2">
                        <div class="search-box w-25">
                            <input type="text" class="form-control ps-2 pe-2 bg-white" name="kd_pekerjaan" id="kd_pekerjaan" placeholder="Parent Code..." readonly value="<?= uniqIdReal(30); ?>">
                        </div>
                    </div>
                </div>

                <div class="col-sm-auto">
                    <div>
                        <?php if (hasPermission('IN')) : ?>
                            <button type="button" class="btn btn-success" id="submit"><i class="ri-add-line align-bottom me-1"></i> Simpan Pekerjaan</button>
                        <?php endif; ?>
                        <button type="button" class="btn btn-danger btn-label" onclick="ResetForm()">
                            <i class="ri-refresh-line label-icon align-middle fs-16 me-2"></i>
                            Reset
                        </button>
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

                                table tr th,
                                table tr td {
                                    padding: 0 !important;
                                }

                                table tr th.bottoming {
                                    padding: 5px !important;
                                }

                                table tr td.label-left {
                                    padding-left: 10px !important;
                                    width: 15%;
                                }

                                table tr td.label-left-input {
                                    padding: 5px !important;
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
                            </style>
                            <table class="table table-bordered">
                                <tr>
                                    <td class="label-left">No. Equipment</td>
                                    <td>
                                        <label for="name" class="form-label d-none"><?= getLangKey('pekerjaan_no_equipement_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                                        <select class="form-select select2 w-50 border-0 table-input" name="no_equipment" id="no_equipment" required></select>
                                        <div class="invalid-feedback"><?= getLangKey('pekerjaan_no_equipement_add_modal_label_nama_error'); ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-left">Pekerjaan/Trouble</td>
                                    <td>
                                        <label for="name" class="form-label d-none"><?= getLangKey('pekerjaan_pekerjaan_trouble_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                                        <textarea class="form-control border-0 autoresize" name="" id=""></textarea>
                                        <div class="invalid-feedback"><?= getLangKey('pekerjaan_pekerjaan_trouble_add_modal_label_nama_error'); ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-left">Penyebab</td>
                                    <td>
                                        <label for="name" class="form-label d-none"><?= getLangKey('pekerjaan_penyebab_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                                        <textarea class="form-control border-0 autoresize" name="" id=""></textarea>
                                        <div class="invalid-feedback"><?= getLangKey('pekerjaan_penyebab_add_modal_label_nama_error'); ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-left">Pengatasan</td>
                                    <td>
                                        <label for="name" class="form-label d-none"><?= getLangKey('pekerjaan_pengatasan_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                                        <textarea class="form-control border-0 autoresize" name="" id=""></textarea>
                                        <div class="invalid-feedback"><?= getLangKey('pekerjaan_pengatasan_add_modal_label_nama_error'); ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-left">Kategori Pekerjaan</td>
                                    <td class="table-nested">
                                        <table class="table table-borderless mb-0">
                                            <tr>
                                                <td class="w-25">
                                                    <label for="name" class="form-label d-none"><?= getLangKey('pekerjaan_kategori_pekerjaan_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                                                    <select class="form-select border-0 table-input select2" name="kategori_pekerjaan" id="kategori_pekerjaan" required></select>
                                                    <div class="invalid-feedback"><?= getLangKey('pekerjaan_kategori_pekerjaan_add_modal_label_nama_error'); ?></div>

                                                </td>
                                                <td style="padding-left: 10px !important;width:10%;border-left:1px solid var(--vz-border-color);border-right: 1px solid var(--vz-border-color);">Kategori Trouble</td>
                                                <td class="w-25">
                                                    <label for="name" class="form-label d-none"><?= getLangKey('pekerjaan_kategori_trouble_add_modal_label_nama'); ?> <span class="text-danger">*</span></label>
                                                    <select class="form-select border-0 table-input select2" name="kategori_trouble" id="kategori_trouble" disabled></select>
                                                    <div class="invalid-feedback"><?= getLangKey('pekerjaan_kategori_trouble_add_modal_label_nama_error'); ?></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-left">Pelaksana</td>
                                    <td class="table-nested">
                                        <label for="name" class="form-label d-none"><?= getLangKey('pekerjaan_add_modal_label_pelaksana'); ?> <span class="text-danger">*</span></label>
                                        <select class="form-select border-0 table-input select2" multiple="multiple" name="pekerja_pelaksana[]" id="pekerja_pelaksana" required></select>
                                        <div class="invalid-feedback"><?= getLangKey('pekerjaan_add_modal_label_pelaksana_error'); ?></div>
                                        <!-- <table class="table table-borderless mb-0">
                                            <tr>
                                                <td class="" style="width:1%;border-right: 1px solid var(--vz-border-color);">
                                                    <button class="btn btn-secondary btn-sm m-1" type="button"><i class="ri-add-box-line align-middle"></i></button>
                                                </td>
                                                <td style="padding-left: 6px !important">
                                                    alskdjlaskdjlaksj
                                                </td>
                                            </tr>
                                        </table> -->
                                    </td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col-md-4">

                                </div>
                            </div>
                        </div><!-- end card-body -->
                        <div class="dropdown-divider"></div>
                        <div class="card-body pt-1">
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
                            <ul class="nav nav-pills bg-light arrow-navtabs nav-success nav-justified mb-3" role="tablist">
                                <!-- <ul class="nav nav-pills nav-customs nav-danger nav-justified mb-3" role="tablist"> -->
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#jadwal" role="tab" aria-selected="false">
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
                                <div class="tab-pane active" id="jadwal" role="tabpanel">
                                    <div class="mb-3">
                                        <button type="button" class="btn btn-secondary" id="addDynamicJadwal">Add</button>
                                    </div>
                                    <div class="jadwal-dynamic row">
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
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </form>

    </div>
</div>