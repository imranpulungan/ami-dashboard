

<link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
<style>
    .condition li {
        width: 200px;
        float: left;
        margin: 5px
    }

    #map {
        width: 100%;
        height: 300px;
        border: 2px solid lightgray;
    }

    .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }

    .pac-container {
        font-family: Roboto;
    }

    .condition li {
        width: 200px;
        float: left;
        margin: 5px
    }
</style>
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
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalImport"><i class="ri-add-line align-bottom me-1"></i> <?= getLangKey('asset_btn_import'); ?></button>
                    <a href="<?= baseUri('master/asset/add'); ?>" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> <?= getLangKey('asset_btn_add'); ?></a>
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
                                <table class="table align-middle table-nowrap mb-0" style="margin-top: 0px !important;" id="AsTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th><?= getLangKey('show_asset_col_1'); ?></th>
                                            <th><?= getLangKey('show_asset_col_2'); ?></th>
                                            <th><?= getLangKey('show_asset_col_3'); ?></th>
                                            <th><?= getLangKey('show_asset_col_4'); ?></th>                                            
                                            <th><?= getLangKey('show_asset_col_5'); ?></th>                                            
                                            <th><?= getLangKey('show_asset_col_6'); ?></th>                                            
                                            <th><?= getLangKey('show_asset_col_7'); ?></th>                                            
                                            <th><?= getLangKey('show_asset_col_9'); ?></th>                                            
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
    <div class="modal fade" id="modalImport" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form autocomplete="off" method="post" data-type="save" id="form_import" class="needs-validation" novalidate>
                <div class="modal-content border-0 overflow-hidden">
                    <div class="modal-header p-3">
                        <h4 class="card-title mb-0"><?= getLangKey('production_add_modal_title'); ?></h4>
                        <button type="button" class="btn-close tutup"></button>
                    </div>
                    <div class="modal-body pb-2">
                        <div class="row">
                            <div class="mb-3 col-lg-5 col-md-5 col-sm-5">
                                <label for="asset_type">Jenis Aset</label>
                                <ul id="asset_type"></ul>
                            </div>
                            <div class="mb-3 col-lg-7 col-md-7 col-sm-7">
                                <label for="asset_plant">Lokasi Aset</label>
                                <ul id="asset_plant"></ul>
                            </div>
                        </div>
                        <!-- <div class="mb-3">
                            <label><?= getLangKey('asset_add_modal_label_asset_type'); ?> <span class="text-danger">*</span></label>
                            <select class="form-control select2" required style="width: 100%" id="import_asset_type" name="asset_type"></select>
                            <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_type_error'); ?></div>
                        </div>
                        <div class="mb-3">
                            <label><?= getLangKey('asset_add_modal_label_asset_plant'); ?> <span class="text-danger">*</span></label>
                            <select class="form-control select2" required style="width: 100%" id="import_asset_plant" name="asset_plant"></select>
                            <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_plant_error'); ?></div>
                        </div> -->
                        <div class="mb-3">
                            <label for="name" class="form-label"><?= getLangKey('asset_import_modal_label_file_csv'); ?></label>
                            <a href="<?= base_url('asset/sample-asset-import.csv') ?>">Contoh Berkas</a>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input form-control" id="file_csv" name="file_csv" accept=".csv, .txt" data-error="<?= getLangKey('asset_import_modal_label_file_csv_error'); ?>" required />
                                <!-- <label class="custom-file-label text text-muted" for="customFile"><?= getLangKey('asset_import_modal_label_file_csv_plc'); ?></label> -->
                                <div class="invalid-feedback"><?= getLangKey('asset_import_modal_label_file_csv_error'); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="modal-footer">
                        <button type="button" class="tutup btn btn-danger font-weight-bold">Batal</button>
                        <button type="button" class="btn btn-primary font-weight-bold" id="submitImport">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endif; ?>
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"></script>
<script src="https://unpkg.com/dropzone"></script>
<script src="https://unpkg.com/cropperjs"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>