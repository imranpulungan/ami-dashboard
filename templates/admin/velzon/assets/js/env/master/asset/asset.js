'use strict';

var copyToClipboard = (copyText = "") => {    
    navigator.clipboard.writeText(copyText);
    alert(copyText);
}

var ExAsUser = (function() {
    var idTable = "#AsTable";
    var MAIN = 'master/asset/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    var tableApi, modal_header;

    var ses = ExAs.uXvbI(all_session);
    var sSion = JSON.parse(ses);
    var i = 0;

    var limit = 10;

    var tb = new DataTable(idTable, {
        dom : "Bfrtip",
        processing: true,
        serverSide: true,
        paging: true,
        info: true,
        "order": [
            [0, 'asc']
        ],
        scrollY: true,
        autoWidth: false,
        // scrollX: true,
        // scrollCollapse: false,
        // deferRender: true,
        rowId: 'asset_number',
        // // info: !0,
        pagingType: 'simple_numbers',
        "fnInfoCallback": function(oSettings, iStart, iEnd, iMax, iTotal, sPre) {
            if (iTotal != 0) {
                $('#tableInfo').html('Menampilkan Data ' + iStart + " - " + iEnd + " dari " + iTotal + ' Data')
            } else {
                $('#tableInfo').html('Tidak ada Data')
                // $('.existPaginate').val(1)
            }
            return iStart + " - " + iEnd + " of " + iTotal;
        },
        columns: [{
                targets: i++,
                width: "1%",
                data: "asset_number"
            },
            {
                targets: i++,
                data: "asset_type_text"
                // searchable: false
            },
            {
                targets: i++,
                data: "asset_plant_location"
                // searchable: false
            },
            {
                targets: i++,
                data: "asset_description"
            },
            {
                targets: i++,
                data: "asset_size"
            },            
            {
                targets: i++,
                data: "capitalized_on"
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
        drawCallback: function () {
            var table = this.api();
            var pageInfo = table.page.info();
        },        
        ajax: function(oData, oCallback, oSetting) {
            console.log(oData);
            $.ajax({
                url: e3nCeL0t + MoDaD + MAIN + "load",
                method: "POST",
                async: true,
                data: {
                    scrty: true,
                    start: oData.start,
                    limit: oData.search.value != '' ? 1 : limit,
                    keyword: oData.search.value
                },
                success: function(response) {
                        ExAl.Loading.Table.Hide();
                    var respon = ExAs.uXvbI(response)
                    if (ExAs.Utils.Json.valid(respon)) {
                        var res = JSON.parse(respon)
                            console.log({res});
                        var no = 1;
                        var newLement = [];

                        if (res.success) {
                            (res.data.data).forEach(element => {
                                element.number = no++;
                                newLement.push(element)
                            });
                        }                        

                        oCallback({
                            recordsTotal: res.data?.recordsTotal ?? 0,
                            recordsFiltered: res.data?.recordsFiltered ?? 0,
                            data: res.data?.data ?? []
                        })
                    }
                }
            });
        },
    })

    var tableCss = function() {
        $(idTable).attr('style', 'margin:0px !important');
        $('.paging_simple_numbers').addClass('p-3');            
    }

    var hideSearch = function() {
        $(".dt-search").addClass("d-none");
    }

    var search = () => {
        /**
         * Init All Environment
         */
        hideSearch();
        tableCss();

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
            (ExAs.Permission('UP') ? `<a href="${e3nCeL0t}${MAIN}edit/${data.asset_number}" type="button" class="btn btn-warning btn-icon waves-effect waves-light"><i class="ri-edit-2-fill"></i></a>` : '') +
            (ExAs.Permission('DT') ? '<button type="button" class="btn btn-danger btn-icon waves-effect waves-light tombolDelete"><i class="ri-delete-bin-5-line"></i></button>' : '') +
            '</div>';
    }
    /**
     * Getting Data From Database
     */

    var loadData = () => {
        tb.ajax.reload(null, false);
    }
    /**
     * Transaction
     */

    var Transaction = function() {
        // inputEmailTrigger();
        importTrigger();
        deleteTrigger();
        statusHoverTrigger();
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
                        url: e3nCeL0t + MoDaD + MAIN + "insert_json",
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

    return {
        run: function() {
            search();
            tableCss();
            Transaction();
        },
        refresh: function() { loadData() }
    }
})();

ExAs.Dom(ExAsUser.run())