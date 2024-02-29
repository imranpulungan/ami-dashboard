'use strict';

var ExAsUser = (function() {
    const assetNumber = window.location.pathname.split("/").pop();
    var MAIN = 'master/asset/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    var modal_header;

    var ses = ExAs.uXvbI(all_session);
    var sSion = JSON.parse(ses);
    var i = 0;

    var currentLatitude;
    var currentLongitude;

    var geoFindMe = () => {
        function success(position) {
            currentLatitude = position.coords.latitude;
            currentLongitude = position.coords.longitude;
            $("#asset_coordinate").val(`${currentLatitude},${currentLongitude}`);
            $(".info-current-location").html(`<h5 class="text-primary">Latitude: ${currentLatitude} °, Longitude: ${currentLongitude} °</h5>`);

            initMap();
        }
    
        function error() {
            $(".info-current-location").html(`<h5 class="text-danger">"Unable to retrieve your location"</h5>`);
        }

        if (!navigator.geolocation) {
            $(".info-current-location").html(`<h5 class="text-warning">Geolocation is not supported by your browser</h5>`);
        } else {
            $(".info-current-location").html(`<h5 class="text-info">Locating...</h5>`);
            navigator.geolocation.getCurrentPosition(success, error);
        }        
    }
    
    var loadType = function() {
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "category",
            method: "POST",
            async: false,
            data: {
                scrty: true
            },
            success: function(response) {
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon)                    
                    var select = "";
                    if (res.success) {
                        select += "<option></option>";
                        $.each(res.data, function(index, item) {
                            select += '<option value=' + item.category + '>' + item.category + '</option>';
                        })
                        $('#asset_type').append(select);
                        $('#edit_asset_type').append(select);
                        $('#import_asset_type').append(select);
                        
                    }
                }
            }
        })
    }

    var loadPlant = function() {
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "plant",
            method: "POST",
            async: false,
            data: {
                scrty: true
            },
            success: function(response) {
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon)
                    var select = "";
                    $('#asset_plant').html('');
                    // $('#asset_plant_edit').html('');
                    if (res.success) {
                        select += "<option></option>";
                        $.each(res.data, function(index, item) {
                            select += `<option value=${item.id_loc}>${item.location}</option>`;
                        })
                        $('#asset_plant').html(select);
                        $('#edit_asset_plant').html(select);
                        $('#import_asset_plant').html(select);
                    }
                }
            }
        })
    }

    /**
     * Transaction
     */

    var Transaction = function() {
        addTrigger();        
    }

    var addTrigger = function() {
        if (ExAs.Doc.Exist("#form_tambah")) {            
            ExAs.Validator("#submit", function(isValid) {
                var _input = $("#form_tambah").serializeArray();
                _input.push({ name: "scrty", value: true })

                $(this).addClass("spinner spinner-white spinner-right disabled");
                $("#form_tambah button").attr("disabled", "disabled");

                if (isValid == true) {
                    const url = e3nCeL0t + MoDaD + MAIN + (assetNumber == "add" ? "insert" : "update");
                    $.ajax({
                        url: url,
                        method: "POST",
                        data: $.param(_input),
                        success: function(response) {
                            $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                            $("#form_tambah button").removeAttr("disabled");

                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);

                                if (res.status) {
                                    ExAl.Toast.Success(res.header, res.message, function(result) {
                                        if (result.isDismissed) {
                                            loadData();
                                            ExAl.Modal.Close('#modalTambah', true);
                                        }
                                    });
                                } else {
                                    ExAl.Toast.Failed(res.header, res.message);
                                }
                            }
                        },
                        error: function(e) {
                            $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                        },
                    });
                } else {
                    $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                    $("#form_tambah button").removeAttr("disabled");
                }
            });
        }
    };

    var initMarker = function (coordinate = [currentLatitude, currentLongitude]) { //[3.597031, 98.678513]
        var marker = new L.marker(coordinate, {draggable:'true'});
        marker.on('dragend', function(event){
            var marker = event.target;
            var position = marker.getLatLng();
            $("#asset_coordinate").val(`${position.lat},${position.lng}`);
            $(".info-current-location").html(`<h5 class="text-primary">Latitude: ${position.lat} °, Longitude: ${position.lng} °</h5>`);
            marker.setLatLng(new L.LatLng(position.lat, position.lng),{draggable:'true'});
        });
        return marker;
    }

    var initMap = function () {
        var map;
        var tileLayer;
        var resultsLayer;

        tileLayer = new L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; SIT 2024 with &hearts;'
        });
    
        // tileLayer = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        //     attribution: '&copy; SIT 2024 with &hearts;',
        //     subdomains:['mt0','mt1','mt2','mt3']
        // });
    
        // Hybrid
        // tileLayer = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
        //     attribution: '&copy; SIT 2024 with &hearts;',
        //     subdomains:['mt0','mt1','mt2','mt3']
        // });
    
        // Streets
        // tileLayer = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
        //     attribution: '&copy; SIT 2024 with &hearts;',
        //     subdomains:['mt0','mt1','mt2','mt3']
        // });
    
        // Terrain
        tileLayer = new L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
            attribution: '&copy; SIT 2024 with &hearts;',
            subdomains:['mt0','mt1','mt2','mt3']
        });
        
        map = new L.map('map', {
            zoomControl: true,
            layers: [tileLayer],
            maxZoom: 18,
            minZoom: 6
        }).setView([currentLatitude, currentLongitude], 13);
    
        resultsLayer = new L.LayerGroup().addTo(map);
        resultsLayer.addLayer(initMarker());
    
        $('#modalTambah').on('show.bs.modal', function(){
            setTimeout(function () { map.invalidateSize() }, 800);
        });
    
        L.control.scale().addTo(map);
    
        var searchControl = new L.esri.Controls.Geosearch().addTo(map);
    
        searchControl.on('results', function(data){
            resultsLayer.clearLayers();
            for (var i = data.results.length - 1; i >= 0; i--) {
                resultsLayer.addLayer(initMarker(data.results[i].latlng));
            }
        });
    }

    var loadData = function(){                 
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "detail",
            method: "GET",
            data: {
                asset_number: assetNumber,
                scrty: true
            },
            success: function(response) {
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon);
                    const coordinate = res.data.coordinate.split(",");
                    
                    currentLatitude = coordinate[0];
                    currentLongitude = coordinate[1];
                    $("#asset_coordinate").val(`${currentLatitude},${currentLongitude}`);
                    $(".info-current-location").html(`<h5 class="text-primary">Latitude: ${currentLatitude} °, Longitude: ${currentLongitude} °</h5>`);
                    initMap();
                    
                    
                    $("#old_image").val(res.data.asset_image);
                    $("#img_asset").prop("src", `${e3nCeL0t}upload/image/${res.data.asset_image}`);
                    $("#asset_number").val(res.data.asset_number);
                    $("#asset_description").val(res.data.asset_description);
                    $("#asset_plant").val(res.data.asset_plant);
                    $("#asset_type").val(res.data.asset_type);
                    $("#asset_size").val(res.data.asset_size);
                    $("#asset_acq").val(res.data.acq_value);
                    $("#asset_capitalized_on").val(res.data.capitalized_on);
                    $("#asset_useful").val(res.data.useful_life);
                    $("#asset_accumulated").val(res.data.accumulated_depreciation);
                    $("#asset_cost_center").val(res.data.cost_center);
                    $("#asset_mapslink").val(res.data.map_link);
                }
            },
            error: function(e) {
                
            },
        });
    }

    return {
        run: function() {
            if (assetNumber != "add") {
                loadData();                
            } else {
                geoFindMe();
            }
            loadType();
            loadPlant();
            Transaction();
        },
        refresh: function() { 
        }
    }
})();

ExAs.Dom(ExAsUser.run())


jQuery(document).ready(function($){
    var cropper_ratio = {
        product: 1 / 1,
    };

    var product_image = {
        width: 500,
        height: 500
    };

    var cropper_ratio_selected = cropper_ratio.product;
    var image_width_selected = product_image.width;
    var image_height_selected = product_image.height;

    var $modal = $('#modal');
    var image = document.getElementById('sample_image');
    var cropper;

    $('#file_asset').change(function(event) {
        cropper_ratio_selected = cropper_ratio.product;
        image_width_selected = product_image.width;
        image_height_selected = product_image.height;

        var files = event.target.files;

        var done = function(url) {
            image.src = url;
            $modal.modal('show');
        };

        if (files && files.length > 0) {
            var reader = new FileReader();
            reader.onload = function(event) {
                done(reader.result);
            };
            reader.readAsDataURL(files[0]);
        }
    });

    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: cropper_ratio_selected,
            viewMode: 0,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $('#crop').click(function() {
        var canvas = cropper.getCroppedCanvas({
            width: image_width_selected,
            height: image_height_selected
        });

        canvas.toBlob(function(blob) {
            // var url = url.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;
                $modal.modal('hide');
                if (cropper_ratio_selected == cropper_ratio.product) {
                    $('#img_asset_base64').val(base64data);
                    $("#img_asset").attr("src", base64data)
                }
            };
        });
    });
})