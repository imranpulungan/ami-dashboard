'use strict';

var ExAsUser = (function() {
    var idTable = "#AsTable";
    var MAIN = 'master/asset/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    var tableApi, modal_header;

    var ses = ExAs.uXvbI(all_session);
    var sSion = JSON.parse(ses);
    var i = 0;

    var currentLatitude;
    var currentLongitude;
    var map;

    var tb = new DataTable(idTable, {
        "order": [
            [0, 'asc']
        ],
        scrollY: true,
        autoWidth: false,
        scrollX: true,
        scrollCollapse: false,
        deferRender: true,
        rowId: 'id_user',
        // paging: !0,
        // info: !0,
        "fnInfoCallback": function(oSettings, iStart, iEnd, iMax, iTotal, sPre) {
            if (iTotal != 0) {
                $('#tableInfo').html('Menampilkan Data ' + iStart + " - " + iEnd + " dari " + iTotal + ' Data')
            } else {
                $('#tableInfo').html('Tidak ada Data')
                $('.existPaginate').val(1)
            }
            return iStart + " - " + iEnd + " of " + iTotal;
        },
        select: false,
        // dom: 'frtip',
        columnDefs: [{
                targets: i++,
                width: "1%",
                data: "asset_number",
                render: function(data, type, full, meta) {
                    return data
                }
            },
            {
                targets: i++,
                data: "asset_type_text",
                render: function(data, type, full, meta) {
                    return data
                },
                // searchable: false
            },
            {
                targets: i++,
                data: "asset_plant_location",
                render: function(data, type, full, meta) {
                    return data
                },
                // searchable: false
            },
            {
                targets: i++,
                data: "asset_description",
                render: function(data, type, full, meta) {
                    return data
                }
            },
            {
                targets: i++,
                data: "asset_size",
                render: function(data, type, full, meta) {
                    return data;
                },
            },            
            {
                targets: i++,
                data: "capitalized_on",
                render: function(data, type, full, meta) {
                    return data;
                },
            },
            {
                targets: i++,
                data: "status",
                render: function(data, type, full, meta) {
                    // return data;
                    return print_status_asset(data, full.asset_number)
                },
            },
            {
                targets: i++,
                data: null,
                render: function(data, type, full, meta) {
                    return action_btn(data)
                }
            },
            
        ],
        "language": {
            "emptyTable": '<p style="margin-top: 15px !important">' +
                'Tidak ada data' +
                '</p>'
        },
        drawCallback: function(oSettings) {
            tableApi = this.api()
        },
        ajax: function(oData, oCallback, oSetting) {
            $.ajax({
                url: e3nCeL0t + MoDaD + MAIN + "load",
                method: "POST",
                async: true,
                data: {
                    scrty: true,
                },
                success: function(response) {
                    //     // ExAl.Loading.Table.Hide();
                    var respon = ExAs.uXvbI(response)
                    if (ExAs.Utils.Json.valid(respon)) {
                        var res = JSON.parse(respon)
                            //console.log(res);
                        var no = 1;
                        var newLement = [];

                        if (res.success) {
                            (res.data).forEach(element => {
                                element.number = no++;
                                newLement.push(element)
                            });
                        }

                        oCallback({
                            recordsTotal: (newLement).length,
                            recordsFiltered: (newLement).length,
                            data: newLement
                        })
                    }
                }
            });
        },
    })

    var tableCss = function() {
        $(idTable).attr('style', 'margin:0px !important');
    }

    var hideSearch = function() {
        $(idTable + "_filter").hide();
        $(idTable + "_length").hide();
    }

    var hidePagination = function() {
        $(idTable + "_paginate").hide();
        $(idTable + "_info").hide();
    }

    var select2 = function() {
        $('select.select2').each(function() {
            var label = $(this).closest('div')
            label = label.find('label').text()
            label = label.replace('*', '')
            $(this).select2({
                placeholder: "Silahkan Pilih " + label,
                allowClear: true,
                dropdownParent: $(this).closest('.modal')
            });
        });
    }

    var pagination = function() {
        ExAs.Table.Pagination(tableApi)
    }

    var search = () => {
        /**
         * Init All Environment
         */
        hideSearch();
        hidePagination();
        tableCss();

        pagination();
        select2();

        var search = ExAs.Doc.Select("#tableSearch");
        ExAs.Doc.Listen('keyup', function() {
            if (tb.search() !== this.value) {
                tb.search(this.value, true, false).draw();
            }
            $('.existPaginate').val(1)
        }, search)

        var filter = ExAs.Doc.Select("#tableLength");
        ExAs.Doc.Listen('change', function() {
            tb.page.len($(this).val()).draw();
            var page = tb.page.info();
            if (page.pages == 1) {
                $('.previous').attr('disabled', true);
                $('.next').attr('disabled', true);
                $('.existPaginate').val(1)
            } else {
                $('.previous').attr('disabled', true);
                $('.next').removeAttr('disabled');
            }
        }, filter)
    }

    var print_status_asset = function(value, id_asset = null) {
        if (value == '1') {
            return '<button type="button" class="btn btn-sm rounded-pill btn-success waves-effect waves-light text-center gantiStatus" style="min-width: 100px"' + (id_asset == sSion['token'] ? ' disabled' : '') + '>Aktif</button>';
        } else if (value == '0') {
            return '<button type="button" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light text-center gantiStatus" style="min-width: 100px"' + (id_asset == sSion['token'] ? ' disabled' : '') + '>Nonaktif</button>';
        } else {
            return '<button type="button" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light text-center gantiStatus" style="min-width: 100px"' + (id_asset == sSion['token'] ? ' disabled' : '') + '>Error</button>';
        }
    }
    // baseUri("master/asset/edit/1")
    var action_btn = function(data) {
        return '<div class="btn-group" role="group">' +
            // (ExAs.Permission('VW') ? '<button type="button" class="btn btn-primary btn-icon waves-effect waves-light tombolDetail"><i class="ri-search-line"></i></button>' : '') +
            (ExAs.Permission('UP') ? `<a href="${e3nCeL0t}${MAIN}edit/${data.asset_number}" type="button" class="btn btn-warning btn-icon waves-effect waves-light tombolEdit"><i class="ri-edit-2-fill"></i></button>` : '') +
            (ExAs.Permission('DT') ? '<button type="button" class="btn btn-danger btn-icon waves-effect waves-light tombolDelete"><i class="ri-delete-bin-5-line"></i></button>' : '') +
            '</div>';
    }

    var geoFindMe = () => {
        function success(position) {
            currentLatitude = position.coords.latitude;
            currentLongitude = position.coords.longitude;
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

    /**
     * Getting Data From Database
     */

    var loadData = () => {
        tb.ajax.reload(null, false);
    }

    var loadRole = function() {
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "role",
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
                            select += '<option value=' + item.id_role + '>' + item.nm_role + '</option>';
                        })
                        $('#role').append(select);
                        $('#role_edit').append(select);
                    }
                }
            }
        })
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
                    console.log(res);
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
        // inputEmailTrigger();
        addTrigger();
        importTrigger();
        updateTrigger();
        updateClickTrigger();
        deleteTrigger();
        statusHoverTrigger();
        openQrClickTrigger();
        statusClickTrigger();
    }

    var statusClickTrigger = function() {
        $("table tbody").on("click", ".gantiStatus", function() {
            var drop = tb.row($(this).parents("tr")).data();
            Swal.fire({
                position: 'top',
                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Anda Yakin?</h4><p class="text-muted mx-4 mb-0">' + (drop.status == '1' ? 'Nonaktifkan' : 'Aktifkan') + ' Data Aset #<b>' + drop.asset_number + '</b>?</p></div></div>',
                showCancelButton: 1,
                showConfirmButton: 1,
                allowOutsideClick: !1,
                allowEscapeKey: !1,
                focusConfirm: false,
                buttonsStyling: false,
                confirmButtonClass: "btn btn-primary w-xs me-2 mb-1",
                confirmButtonText: '<i class="' + (drop.status == '1' ? 'ri-user-unfollow-line' : 'ri-user-follow-line') + ' label-icon align-middle fs-16 me-2"></i> Ya, ' + (drop.status == '1' ? 'Nonaktifkan' : 'Aktifkan') + '',
                cancelButtonClass: "btn btn-danger w-xs me-2 mb-1",
                cancelButtonText: '<i class="ri-close-line label-icon align-middle fs-16 me-2"></i> Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "update_status",
                        method: "POST",
                        async: false,
                        data: {
                            id: drop.asset_number,
                            status: drop.status == '1' ? '0': '1',
                            scrty: true
                        },
                        success: function(response) {
                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.status) {
                                    loadData();
                                    ExAl.Toast.Success(res.header, res.message + ': <b>' + drop.asset_number + '</b>');
                                } else {
                                    ExAl.Toast.Failed(res.header, res.message);
                                }
                            }
                        }
                    })
                } else {
                    $(this).replaceWith(print_status_user(drop.status));
                }
            })
        });
    }

    var statusHoverTrigger = function() {
        $("table tbody").on("mouseenter", ".gantiStatus", function() {
            if ($(this).html() == "Aktif") {
                $(this).html('Nonaktifkan').removeClass('btn-success').addClass('btn-warning');
            } else if ($(this).html() == "Nonaktif") {
                $(this).html('Aktifkan').removeClass('btn-danger').addClass('btn-secondary');
            }
        });
        $("table tbody").on("mouseleave", ".gantiStatus", function() {
            if ($(this).html() == "Nonaktifkan") {
                $(this).html('Aktif').removeClass('btn-warning').addClass('btn-success');
            } else if ($(this).html() == "Aktifkan") {
                $(this).html('Nonaktif').removeClass('btn-secondary').addClass('btn-danger');
            }
        });
    }

    var addTrigger = function() {
        if (ExAs.Doc.Exist("#form_tambah")) {

            ExAs.Validator("#submit", function(isValid) {
                var _input = $("#form_tambah").serializeArray();
                _input.push({ name: "scrty", value: true })

                $(this).addClass("spinner spinner-white spinner-right disabled");
                $("#form_tambah button").attr("disabled", "disabled");

                if (isValid == true) {
                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "add",
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

    var importTrigger = function() {
        if (ExAs.Doc.Exist("#form_import")) {
            console.log('test');
            ExAs.Validator("#submitImport", function(isValid) {
                var data = new FormData();

                //Form data
                var form_data = $('#form_import').serializeArray();
                $.each(form_data, function(key, input) {
                    data.append(input.name, input.value);
                });

                //File data
                var file_data = $('input[name="file_csv"]')[0].files;
                for (var i = 0; i < file_data.length; i++) {
                    data.append("file_csv", file_data[i]);
                }

                //Custom data
                data.append('scrty', true);

                // var _input = $("#form_import").serializeArray();
                // _input.push({ name: "scrty", value: true })

                $(this).addClass("spinner spinner-white spinner-right disabled");
                $("#form_import button").attr("disabled", "disabled");

                if (isValid == true) {
                    $('.full-loading').addClass("active");
                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "add_json",
                        method: "POST",
                        data: data,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            $("#submitImport").removeClass("spinner spinner-white spinner-right disabled");
                            $("#form_import button").removeAttr("disabled");

                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.success) {
                                    var teks = '';
                                    var icon = "success";
                                    if (res.data.gagal == "") {
                                        teks = 'Berhasil Menyimpan ' + res.data.berhasil + ' Data';
                                    } else if (res.data.berhasil == 0) {
                                        teks = 'Gagal Menyimpan Data';
                                        icon = "danger";
                                    } else {
                                        teks = 'Berhasil Menyimpan ' + res.data.berhasil + ' Data<br>Gagal Menyimpan data ke ' + res.data.gagal;
                                    }
                                    $('.full-loading').removeClass("active");

                                    ExAl.Toast.Success(res.header, teks, function(result) {
                                        if (result.isDismissed) {
                                            loadData();
                                            ExAl.Modal.Close('#modalImport', true);
                                        }
                                    });
                                    swal
                                        .fire({
                                            text: 'Berhasil Menyimpan Data',
                                            icon: "success",
                                            timer: 3000,
                                            showCancelButton: false,
                                            showConfirmButton: false,
                                        })
                                        .then(function(result) {
                                            if (result.isDismissed) {
                                                loadData();
                                                ExAl.Modal.Close('#modalImport', true);
                                            }
                                        });
                                } else {
                                    $('.full-loading').removeClass("active");
                                    ExAl.Toast.Failed(res.header, res.message);
                                    swal
                                        .fire({
                                            text: _getMessage(res.error, 'Gagal Menyimpan Data'),
                                            icon: "error",
                                            timer: 3000,
                                            showCancelButton: false,
                                            showConfirmButton: false,
                                        })
                                        .then(function() {});
                                }
                            } else {
                                $('.full-loading').removeClass("active");
                            }
                        },
                        error: function(e) {
                            // console.log(e);
                            $("#submitImport").removeClass("spinner spinner-white spinner-right disabled");
                        },
                    });
                } else {
                    $("#submitImport").removeClass("spinner spinner-white spinner-right disabled");
                    $("#form_import button").removeAttr("disabled");
                }
            });
        }
    };

    var updateClickTrigger = function() {
        $("table tbody").on("click", ".tombolEdit", function() {
            loadType();
            loadPlant();
            var drop = tb.row($(this).parents("tr")).data();
            
            $('#edit_asset_number').val(drop.asset_number);
            $('#edit_asset_type').val(drop.asset_type).trigger('change');
            $('#edit_asset_plant').val(drop.asset_plant).trigger('change');
            $('#edit_asset_description').val(drop.asset_description);
            $('#edit_asset_size').val(drop.asset_size);
            $('#edit_asset_acq').val(drop.acq_value);
            $('#edit_asset_capitalized_on').val(drop.capitalized_on);
            $('#edit_asset_useful').val(drop.useful_life);
            $('#edit_asset_accumulated').val(drop.accumulated_depreciation);
            $('#edit_asset_cost_center').val(drop.cost_center);
            $('#edit_asset_coordinate').val(drop.coordinate);
            $('#edit_asset_mapslink').val(drop.maps_link);

            ExAl.Modal.Show('#modalEdit');
        });
    }

    var openQrClickTrigger = function() {
        $("table tbody").on("click", ".tombolOpenQr", function() {
            var drop = tb.row($(this).parents("tr")).data();         
            $('#qrcode-plat-number').html(drop.kd_kendaraan);
            $('#qrcode-canvas-image').attr('src', e3nCeL0t + drop.qr_code);
            $('#qrcode-canvas-image').attr('height', '100%');
            $('#qrcode-canvas-image').attr('width', '100%');

            ExAl.Modal.Show('#modalQRCode');
        });
    }

    var updateTrigger = function() {
        if (ExAs.Doc.Exist("#form_edit")) {

            ExAs.Validator("#submitEdit", function(isValid) {
                if (isValid == true) {
                    // updateTrigger();
                    var _input = $("#form_edit").serializeArray();
                    _input.push({ name: "scrty", value: true })

                    $(this).addClass("spinner spinner-white spinner-right disabled");
                    $("#form_edit button").attr("disabled", "disabled");

                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "edit",
                        method: "POST",
                        data: $.param(_input),
                        success: function(response) {
                            $("#submitEdit").removeClass("spinner spinner-white spinner-right disabled");
                            $("#form_edit button").removeAttr("disabled");

                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                $('#modal_header_edit').html(modal_header);
                                if (res.status) {
                                    ExAl.Toast.Success(res.header, res.message, function(result) {
                                        if (result.isDismissed) {
                                            loadData();
                                            ExAl.Modal.Close('#modalEdit', true);
                                            $('#form_edit').trigger('reset')
                                        }
                                    });
                                } else {
                                    ExAl.Toast.Failed(res.header, res.message);
                                }
                            }
                        },
                        error: function(e) {
                            // console.log(e);
                            $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                        },
                    });
                } else {
                    $("#submitEdit").removeClass("spinner spinner-white spinner-right disabled");
                    $("#form_edit button").removeAttr("disabled");
                }
            });
        }
    }

    var deleteTrigger = function() {
        $("table tbody").on("click", ".tombolDelete", function() {
            var drop = tb.row($(this).parents("tr")).data();
            ExAl.Toast.Delete({}, function(result) {
                if (result) {
                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "delete",
                        method: "POST",
                        async: false,
                        data: {
                            asset_number: drop.asset_number,
                            scrty: true
                        },
                        success: function(response) {
                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.status) {
                                    loadData()
                                    ExAl.Toast.Success(res.header, res.message + ': <b>' + drop.asset_number + '</b>');
                                } else {
                                    ExAl.Toast.Failed(res.header, res.message);
                                }
                            }
                        }
                    })
                }
            })
        });
    }    

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
        console.log(currentLatitude);
        var tileLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
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
        tileLayer = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
            attribution: '&copy; SIT 2024 with &hearts;',
            subdomains:['mt0','mt1','mt2','mt3']
        });
        
        map = L.map('map', {
            zoomControl: true,
            layers: [tileLayer],
            maxZoom: 18,
            minZoom: 6
        }).setView([currentLatitude, currentLongitude], 13);
    
        var results = new L.LayerGroup().addTo(map);
        results.addLayer(initMarker());
    
        $('#modalTambah').on('show.bs.modal', function(){
            setTimeout(function () { map.invalidateSize() }, 800);
        });
    
        L.control.scale().addTo(map);
    
        var searchControl = new L.esri.Controls.Geosearch().addTo(map);
    
        searchControl.on('results', function(data){
            results.clearLayers();
            for (var i = data.results.length - 1; i >= 0; i--) {
                results.addLayer(initMarker(data.results[i].latlng));
            }
        });
    }

    return {
        run: function() {
            search();
            loadRole();
            loadType();
            loadPlant();
            Transaction();
            geoFindMe();
        },
        refresh: function() { loadData() }
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

    var image = document.getElementById('sample_image');
    var cropper;

    $('#asset_image').change(function(event) {
        cropper_ratio_selected = cropper_ratio.product;
        image_width_selected = product_image.width;
        image_height_selected = product_image.height;

        var files = event.target.files;

        var done = function(url) {
            image.src = url;
        };

        if (files && files.length > 0) {
            var reader = new FileReader();
            reader.onload = function(event) {
                done(reader.result);
            };
            reader.readAsDataURL(files[0]);

            cropper = new Cropper(image, {
                aspectRatio: cropper_ratio_selected,
                viewMode: 0,
                preview: '.preview'
            });
        }
    });

    // $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: cropper_ratio_selected,
            viewMode: 0,
            preview: '.preview'
        });
    // }).on('hidden.bs.modal', function() {
    //     cropper.destroy();
    //     cropper = null;
    // });

    // $('#crop').click(function() {
    //     canvas = cropper.getCroppedCanvas({
    //         width: image_width_selected,
    //         height: image_height_selected
    //     });

    //     canvas.toBlob(function(blob) {
    //         url = URL.createObjectURL(blob);
    //         var reader = new FileReader();
    //         reader.readAsDataURL(blob);
    //         reader.onloadend = function() {
    //             var base64data = reader.result;
    //             $modal.modal('hide');
    //             if (cropper_ratio_selected == cropper_ratio.product) {
    //                 $('#img_product_base64').val(base64data);
    //                 $("#img_product").attr("src", base64data)
    //             }
    //         };
    //     });
    // });
})