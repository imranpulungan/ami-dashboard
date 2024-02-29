

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
        
        <div class="col-xl-12">
            <form autocomplete="off" enctype="multipart/form-data" method="post" data-type="save" id="form_tambah" class="needs-validation" novalidate>                            
                <div class="card">
                    <div class="card-header">
                        <div class="align-items-center d-flex">                            
                            <h4 class="card-title mb-0"><?= getLangKey('asset_add_modal_title'); ?></h4>                            
                        </div>
                        <div class="alert alert-warning rounded mt-2 mb-0">
                            <p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-lg-8 col-md-12 col-sm-12 pb-5">
                                <div class="info-current-location"></div>
                                <div id="map"></div>
                                <input type="hidden" id="asset_coordinate" name="asset_coordinate" class="form-control"/>
                                <input id="old_image" name="old_image" type="hidden"/>
                            </div>                            
                            <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                                <h5>Unggah Gambar Aset</h3>

                                <label for="file_asset" class="d-flex">
                                    <!-- path file: upload/image/ -->
                                    <img role="button" id="img_asset" src="<?= assetsUri(); ?>images/upload.png" alt="Foto Aset" height="300px" class="figure-img img-fluid rounded p-2" style="height:300px; margin:0 auto; border: 2px dashed  black">
                                </label>
                                <div class="form-group">
                                    <input accept="image/*" type="file" name="file_asset" id="file_asset" style="visibility:hidden;">
                                    <input type="hidden" name="img_asset_base64" id="img_asset_base64">                                    
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label><?= getLangKey('asset_add_modal_label_asset_number'); ?> <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" placeholder="<?= getLangKey('asset_add_modal_label_asset_number'); ?>" data-error="<?= getLangKey('asset_add_modal_label_asset_number_error'); ?>" id="asset_number" name="asset_number" />
                                <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_number_error'); ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label><?= getLangKey('asset_add_modal_label_asset_description'); ?> <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" placeholder="<?= getLangKey('asset_add_modal_label_asset_description_plc'); ?>" data-error="<?= getLangKey('asset_add_modal_label_asset_description_error'); ?>" id="asset_description" name="asset_description" />
                                <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_description_error'); ?></div>
                            </div>                             
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label><?= getLangKey('asset_add_modal_label_asset_plant'); ?> <span class="text-danger">*</span></label>
                                <select class="form-control select2" required style="width: 100%" id="asset_plant" name="asset_plant"></select>
                                <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_plant_error'); ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label><?= getLangKey('asset_add_modal_label_asset_type'); ?> <span class="text-danger">*</span></label>
                                <select class="form-control select2" required style="width: 100%" id="asset_type" name="asset_type"></select>
                                <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_type_error'); ?></div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label><?= getLangKey('asset_add_modal_label_asset_size'); ?> <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" placeholder="<?= getLangKey('asset_add_modal_label_asset_size_plc'); ?>" data-error="<?= getLangKey('asset_add_modal_label_asset_size_error'); ?>" id="asset_size" name="asset_size" />
                                <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_size_error'); ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label><?= getLangKey('asset_add_modal_label_asset_acq'); ?> <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" placeholder="<?= getLangKey('asset_add_modal_label_asset_acq_plc'); ?>" data-error="<?= getLangKey('asset_add_modal_label_asset_acq_error'); ?>" id="asset_acq" name="asset_acq" />
                                <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_acq_error'); ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label><?= getLangKey('asset_add_modal_label_asset_capitalized'); ?> <span class="text-danger">*</span></label>
                                <input type="date" required class="form-control" placeholder="<?= getLangKey('asset_add_modal_label_asset_capitalized_plc'); ?>" data-error="<?= getLangKey('asset_add_modal_label_asset_capitalized_error'); ?>" id="asset_capitalized_on" name="asset_capitalized_on" />
                                <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_capitalized_error'); ?></div>
                            </div> 
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label><?= getLangKey('asset_add_modal_label_asset_useful'); ?> <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" placeholder="<?= getLangKey('asset_add_modal_label_asset_useful_plc'); ?>" data-error="<?= getLangKey('asset_add_modal_label_asset_useful_error'); ?>" id="asset_useful" name="asset_useful" />
                                <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_useful_error'); ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label><?= getLangKey('asset_add_modal_label_asset_accumulated'); ?> <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" placeholder="<?= getLangKey('asset_add_modal_label_asset_accumulated_plc'); ?>" data-error="<?= getLangKey('asset_add_modal_label_asset_accumulated_error'); ?>" id="asset_accumulated" name="asset_accumulated" />
                                <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_accumulated_error'); ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label><?= getLangKey('asset_add_modal_label_asset_cost_center'); ?> <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" placeholder="<?= getLangKey('asset_add_modal_label_asset_cost_center_plc'); ?>" data-error="<?= getLangKey('asset_add_modal_label_asset_cost_center_error'); ?>" id="asset_cost_center" name="asset_cost_center" />
                                <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_cost_center_error'); ?></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <label><?= getLangKey('asset_add_modal_label_asset_mapslink'); ?> <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" placeholder="<?= getLangKey('asset_add_modal_label_asset_mapslink_plc'); ?>" data-error="<?= getLangKey('asset_add_modal_label_asset_mapslink_error'); ?>" id="asset_mapslink" name="asset_mapslink" />
                                <div class="invalid-feedback"><?= getLangKey('asset_add_modal_label_asset_mapslink_error'); ?></div>
                            </div>   
                        </div>
                                                    
                    </div><!-- end card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary font-weight-bold" id="submit">Simpan</button>
                    </div>
                </div><!-- end card -->
            </form>                    
        </div><!-- end col -->

    </div>
</div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crop Image Before Upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <div class="row">
                        <input type="hidden" id="img-crop">
                        <img src="" id="sample_image" style="max-height: 300px;" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="crop" class="btn btn-primary">Crop</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"></script>
<script src="https://unpkg.com/dropzone"></script>
<script src="https://unpkg.com/cropperjs"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>