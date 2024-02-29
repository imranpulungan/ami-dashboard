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
                        <!-- <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="ri-add-line align-bottom me-1"></i> Tambah <?= $title; ?></button> -->
                        <a href="<?= baseUri(MODAD . 'trans/service/form/add?tag=' . getSession('ALLOWED_ADD', false)); ?>" target="_blank" rel="noopener noreferrer">
                            <button class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Tambah <?= $title; ?></button>
                        </a>
                        <!-- <form action="<?= baseUri(MODAD . 'trans/service/form/add'); ?>" method="POST">
                            <input type="hidden" value="true" name="scrty" />
                            <button type="submit" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Tambah <?= $title; ?></button>
                        </form> -->
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

            table.dataTable>thead .sorting:before,
            table.dataTable>thead .sorting_asc:before,
            table.dataTable>thead .sorting_asc_disabled:before,
            table.dataTable>thead .sorting_desc:before,
            table.dataTable>thead .sorting_desc_disabled:before {
                content: "\f0360";
                position: absolute;
                right: 0.5rem;
                top: 35%;
                font-size: .8rem;
                font-family: "Material Design Icons";
            }

            table.dataTable>thead .table-bottom.sorting:before,
            table.dataTable>thead .table-bottom.sorting_asc:before,
            table.dataTable>thead .table-bottom.sorting_asc_disabled:before,
            table.dataTable>thead .table-bottom.sorting_desc:before,
            table.dataTable>thead .table-bottom.sorting_desc_disabled:before {
                content: "\f0360";
                position: absolute;
                right: 0.5rem;
                top: 22%;
                font-size: .8rem;
                font-family: "Material Design Icons";
            }

            table.dataTable>thead .sorting:after,
            table.dataTable>thead .sorting_asc:after,
            table.dataTable>thead .sorting_asc_disabled:after,
            table.dataTable>thead .sorting_desc:after,
            table.dataTable>thead .sorting_desc_disabled:after {
                content: "\f035d";
                position: absolute;
                right: 0.5rem;
                top: 44%;
                font-size: .8rem;
                font-family: "Material Design Icons";
            }

            table.dataTable>thead .table-bottom.sorting:after,
            table.dataTable>thead .table-bottom.sorting_asc:after,
            table.dataTable>thead .table-bottom.sorting_asc_disabled:after,
            table.dataTable>thead .table-bottom.sorting_desc:after,
            table.dataTable>thead .table-bottom.sorting_desc_disabled:after {
                content: "\f035d";
                position: absolute;
                right: 0.5rem;
                top: 40%;
                font-size: .8rem;
                font-family: "Material Design Icons";
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
                                            <th rowspan="2" style="width:1%"><?= getLangKey('service_col_1'); ?></th>
                                            <th rowspan="2"><?= getLangKey('service_col_2'); ?></th>
                                            <th rowspan="2"><?= getLangKey('service_col_3'); ?></th>
                                            <th rowspan="2"><?= getLangKey('service_col_4'); ?></th>
                                            <th rowspan="2"><?= getLangKey('service_col_5'); ?></th>
                                            <th rowspan="2"><?= getLangKey('service_col_6'); ?></th>
                                            <th rowspan="2"><?= getLangKey('service_col_7'); ?></th>
                                            <th rowspan="2"><?= getLangKey('service_col_8'); ?></th>
                                            <th colspan="2" class="text-center"><?= getLangKey('service_col_9'); ?></th>
                                            <th colspan="2" class="text-center"><?= getLangKey('service_col_10'); ?></th>
                                            <th rowspan="2" style="width:6%"><?= getLangKey('service_col_11'); ?></th>
                                            <th rowspan="2" style="width:6%"><?= getLangKey('service_col_12'); ?></th>
                                            <th rowspan="2" style="width:15%"></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th class="table-bottom">Mulai</th>
                                            <th class="table-bottom">Selesai</th>
                                            <th class="table-bottom">Mulai</th>
                                            <th class="table-bottom">Selesai</th>

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

<!-- Update ke VW  -->
<?php if (hasPermission('IN')) : ?>
    <div class="modal fade" id="modalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-xxl" role="document">
            <div class="modal-content border-0 overflow-hidden">
                <div class="modal-header p-3">
                    <h4 class="card-title mb-0" id="modal_header_detail"><?= getLangKey('service_detail_modal_title'); ?></h4>
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
                                <th style="width:25%">Judul Pekerjaan</th>
                                <td style="width:1px">:</td>
                                <td id="judul_pekerjaan_detail"></td>
                            </tr>
                            <tr>
                                <th>RKAP</th>
                                <td>:</td>
                                <td id="rkap_detail"></td>
                            </tr>
                            <tr>
                                <th>Jenis</th>
                                <td>:</td>
                                <td id="jenis_detail"></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td id="status_detail"></td>
                            </tr>
                            <tr>
                                <th>No. Kontrak</th>
                                <td>:</td>
                                <td id="no_kontrak_detail"></td>
                            </tr>
                            <tr>
                                <th>Nama Penyedia</th>
                                <td>:</td>
                                <td id="penyedia_detail"></td>
                            </tr>
                            <tr>
                                <th>KAK Plan</th>
                                <td>:</td>
                                <td id="kak_plan_detail"></td>
                            </tr>
                            <tr>
                                <th>KAK Actual</th>
                                <td>:</td>
                                <td id="kak_actual_detail"></td>
                            </tr>
                            <tr>
                                <th>Mulai Kontrak</th>
                                <td>:</td>
                                <td id="mulai_kontrak_detail"></td>
                            </tr>
                            <tr>
                                <th>Selesai Kontrak</th>
                                <td>:</td>
                                <td id="selesai_kontrak_detail"></td>
                            </tr>
                            <tr>
                                <th>Mulai Kerja</th>
                                <td>:</td>
                                <td id="mulai_kerja_detail"></td>
                            </tr>
                            <tr>
                                <th>Selesai Kerja</th>
                                <td>:</td>
                                <td id="selesai_kerja_detail"></td>
                            </tr>
                            <tr>
                                <th>Progress</th>
                                <td>:</td>
                                <td id="progress_detail"></td>
                            </tr>
                            <tr>
                                <th>Remark</th>
                                <td>:</td>
                                <td id="remark_detail"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="dropdown-divider"></div>
                <div class="modal-body pb-2 pt-0">
                    <table class="table table-detail table-borderless">
                        <tbody>
                            <tr>
                                <th style="width:25%">Item</th>
                                <td style="width:1px">:</td>
                                <td id="item_detail"><img src="<?= assetsUri('images/loading.gif'); ?>" /></td>
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