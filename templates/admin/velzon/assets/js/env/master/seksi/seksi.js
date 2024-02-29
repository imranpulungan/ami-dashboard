'use strict';

var ExAsUser = (function() {
    var idTable = "#AsTable";
    var MAIN = 'master/seksi/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    var tableApi, modal_header;
    var i = 0;

    var tb = new DataTable(idTable, {
        "order": [
            [0, 'asc']
        ],
        scrollY: true,
        autoWidth: false,
        scrollX: true,
        scrollCollapse: false,
        deferRender: true,
        rowId: 'id_seksi',
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
                // orderable: false,
                data: "number",
                width: "1%",
                render: function(data, type, full, meta) {
                    return data
                }
            },
            {
                targets: i++,
                data: "nm_seksi",
                render: function(data, type, full, meta) {
                    return data
                },
                // searchable: false
            },
            {
                targets: i++,
                data: "alias_seksi",
                width: "15%",
                render: function(data, type, full, meta) {
                    return data
                },
                // searchable: false
            },
            {
                targets: i++,
                data: "id_seksi",
                width: "5%",
                visible: (ExAs.Permission('VW') ||
                        ExAs.Permission('UP') ||
                        ExAs.Permission('DT')) ?
                    true : false,
                render: function(data, type, full, meta) {
                    return action_btn()
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

    var action_btn = function(status = null) {
        return '<div class="btn-group" role="group">' +
            (ExAs.Permission('VW') ? '<button type="button" class="btn btn-primary btn-icon waves-effect waves-light tombolDetail"><i class="ri-search-line"></i></button>' : '') +
            (ExAs.Permission('UP') ? '<button type="button" class="btn btn-warning btn-icon waves-effect waves-light tombolEdit"><i class="ri-edit-2-fill"></i></button>' : '') +
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
        addTrigger();
        updateTrigger();
        updateClickTrigger();
        deleteTrigger();
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
                                if (res.success) {
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
                                                ExAl.Modal.Close('#modalTambah', true);
                                            }
                                        });
                                } else {
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
                            }
                        },
                        error: function(e) {
                            // console.log(e);
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

    var updateClickTrigger = function() {
        $("table tbody").on("click", ".tombolEdit", function() {
            var drop = tb.row($(this).parents("tr")).data();
            if (modal_header == '' || typeof modal_header === 'undefined') {
                modal_header = $('#modal_header_edit').text();
            }
            $('#modal_header_edit').html(modal_header + ': <b>' + drop.alias_seksi + '</b>');
            $('#id_seksi_edit').val(drop.id_seksi)
            $('#nama_edit').val(drop.nm_seksi)
            $('#alias_edit').val(drop.alias_seksi)
            ExAl.Modal.Show('#modalEdit');
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
                            id: drop.id_seksi,
                            scrty: true
                        },
                        success: function(response) {
                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.status) {
                                    ExAl.Toast.Success(res.header, res.message + ': <b>' + drop.nm_seksi + '</b>');
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
            // loadData();
            Transaction();

            setInterval(loadData, GLOBAL_COOLDOWN)
        },
        refresh: function() { loadData() }
    }
})();

ExAs.Dom(ExAsUser.run())