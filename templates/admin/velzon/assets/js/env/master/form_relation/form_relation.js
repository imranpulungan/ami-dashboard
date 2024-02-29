'use strict';

var ExAsUser = (function() {
    var idTable = "#AsTable";
    var MAIN = 'master/form_relation/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    var tableApi, modal_header;
    var checkboxStyle = ['danger', 'secondary', 'warning', 'dark']
    var textStyle = [
        " style='font-weight:600'><span></span></i>",
        " style='font-weight:500'><i class='ri-number-1' style='padding-left:0px;padding-right:15px'><span></span></i>",
        " style='font-weight:400'><i class='ri-number-2' style='padding-left:20px;padding-right:15px'><span></span></i>",
        " style='font-weight:300'><i class='ri-number-3' style='padding-left:40px;padding-right:15px'><span></span></i>"
    ];

    var selfJenis, selfForm_body, templateHeader, templateBody;

    var tb = new DataTable(idTable, {
        "order": [
            [0, 'asc']
        ],
        columnDefs: [{
                targets: [2],
                orderable: false,
            },
            {
                targets: [3],
                visible: false,
                searchable: false
            }
        ],
        "fnInfoCallback": function(oSettings, iStart, iEnd, iMax, iTotal, sPre) {
            $('#tableInfo').html('Data ' + iStart + "-" + iEnd + " Dari " + iTotal + ' Data')
            return iStart + " - " + iEnd + " of " + iTotal;
        },
        drawCallback: function(oSettings) {
            tableApi = this.api()
        }
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

    var action_btn = function() {
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
        ExAl.Loading.Table.Show();
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "load",
            method: "POST",
            async: false,
            data: {
                scrty: true
            },
            success: function(response) {
                ExAl.Loading.Table.Hide();
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    var res = JSON.parse(respon)
                    if (res.success) {
                        var no = 1;
                        var availableData = []
                        var totalDataExist = 0;
                        var deletedData = []
                        tb.rows().every(function(rowIdx, tableLoop, rowLoop) {
                            var data = this.data();
                            availableData.push(data[3])
                        });

                        totalDataExist = availableData.length

                        $.each(res.data, function(i, item) {
                            var isReady = availableData.includes(item.id);
                            if (isReady === false) {
                                totalDataExist++;
                                tb.row.add([
                                    totalDataExist,
                                    item.nm_form_header,
                                    action_btn(),
                                    item.id,
                                ])
                            } else {
                                tb.rows().every(function(rowIdx, tableLoop, rowLoop) {
                                    var data = this.data();
                                    if (data[3] == item.id) {
                                        if (data[1] !== item.nm_form_header) {
                                            tb.cell(rowIdx, 1)
                                                .data(item.nm_form_header)
                                        }

                                        if (data[2] !== action_btn(item.status)) {
                                            tb.cell(rowIdx, 2)
                                                .data(action_btn(item.status))
                                        }
                                    }
                                });
                            }
                            deletedData.push(item.id)
                        })

                        tb.draw(false);

                        $.each(availableData, function(i, item) {
                            var isDeleted = deletedData.includes(availableData[i]);
                            var indexes = availableData.indexOf(availableData[i]);
                            if (isDeleted === false) {
                                tb.rows(function(idx, data, node) {
                                    return data[3] === availableData[i];
                                }).remove().draw(false);
                            }
                        })
                    } else {
                        tb.clear().draw();
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
        addClickTrigger();
        updateTrigger();
        updateClickTrigger();
        deleteTrigger();
        form_headerChangeTrigger();
    }

    var form_headerChangeTrigger = function() {
        $('#form_header').on('change', function() {
            // console.log($(this).val())
            var id = $(this).val();
            _createForm_body(id);
        })
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
            $('#modal_header_edit').html(modal_header + ': <b>' + drop[1] + '</b>');
            $('#form_header_edit').val(drop[3])

            selfJenis = _ajax({
                url: e3nCeL0t + MoDaD + MAIN + "jenis",
                data: {
                    scrty: true
                }
            }, _getPermission)

            var editSelfJenis = _ajax({
                url: e3nCeL0t + MoDaD + MAIN + "jenis_edit",
                data: {
                    form_header: drop[3],
                    scrty: true
                }
            }, _getPermission)

            var respon_selfjenis = ExAs.uXvbI(selfJenis)
            var respon_editSelfjenis = ExAs.uXvbI(editSelfJenis)
            if (isJson(respon_selfjenis)) {
                // console.log(selfJenis)
                selfJenis = JSON.parse(respon_selfjenis)
                editSelfJenis = JSON.parse(respon_editSelfjenis)
                console.log(selfJenis.success, editSelfJenis.success)
                    // selfJenis = JSON.parse(selfJenis)
                    // editSelfJenis = JSON.parse(editSelfJenis)
                if (selfJenis.success && editSelfJenis.success) {
                    templateHeader = "<th class='header-hh' style='width:24%;vertical-align: middle;background: #fad000;'>Form Body</th>"
                    $.each(selfJenis.data, function(index, item) {
                        templateHeader += "<th class='header-hh' style='text-align:center;vertical-align: middle;background: #9b59b6;font-weight: 100;color: white;'>" + item.nm_jenis + "</th>"
                    })
                    $('#tr-form_body-jenis-edit').html(templateHeader)

                    _createForm_body(drop[3], editSelfJenis.data)

                } else {
                    buttonCurse('enable')
                }
            }

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
                            id: drop[3],
                            scrty: true
                        },
                        success: function(response) {
                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.status) {
                                    ExAl.Toast.Success(res.header, res.message + ': <b>' + drop[1] + '</b>');
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

    var addClickTrigger = function() {
        // if (isSelectorExist(".tombolTambah")) {
        $('.tombolTambah').on('click', function(e) {
                e.preventDefault()

                buttonCurse('disable')

                var Form_header = _ajax({
                    url: e3nCeL0t + MoDaD + MAIN + "form_header",
                    data: {
                        scrty: true
                    }
                }, _getPermission)

                var respon_form_header = ExAs.uXvbI(Form_header)
                if (ExAs.Utils.Json.valid(respon_form_header)) {
                    Form_header = JSON.parse(respon_form_header)
                    if (Form_header.success) {
                        var option = '';
                        var temp_id_header;
                        $.each(Form_header.data, function(idx, itemx) {
                            if (option == '') {
                                temp_id_header = itemx.id;
                            }
                            option += "<option value='" + itemx.id + "' style='left:0rem;'>" + itemx.nm_form_header + "</option>"
                        })
                        $('#form_header').html(option)
                    }
                }

                selfJenis = _ajax({
                    url: e3nCeL0t + MoDaD + MAIN + "jenis",
                    data: {
                        scrty: true
                    }
                }, _getPermission)

                var respon_selfjenis = ExAs.uXvbI(selfJenis)
                if (ExAs.Utils.Json.valid(respon_selfjenis)) {
                    // console.log(selfJenis)
                    selfJenis = JSON.parse(respon_selfjenis)
                    if (selfJenis.success) {
                        templateHeader = "<th class='header-hh' style='width:24%;vertical-align: middle;background: #fad000;'>Form Body</th>"
                        $.each(selfJenis.data, function(index, item) {
                            templateHeader += "<th class='header-hh' style='text-align:center;vertical-align: middle;background: #9b59b6;font-weight: 100;color: white;'>" + item.nm_jenis + "</th>"
                        })
                        $('#tr-form_body-jenis').html(templateHeader)

                        _createForm_body(temp_id_header)

                    } else {
                        buttonCurse('enable')
                    }
                }

            })
            // }
    }

    var _ajax = function(options = {}, callback) {
        var _options = {
                url: options.url ? options.url : e3nCeL0t + MoDaD + MAIN,
                data: options.data ? options.data : {},
                // loadingHide: options.loading ? $(options.loading).hide() : $('.form_relationDelay').hide()
            },
            result

        buttonCurse('disable')
        $.ajax({
                url: _options.url,
                data: _options.data,
                async: false,
                method: "POST",
                success: function(response) {
                    buttonCurse('enable')
                        // _options.loadingHide
                    callback(response)
                    result = response
                }
            })
            // console.log(result)
        return result
    }

    // Cek apakah data adalah JSON
    var isJson = function(str) {
        try {
            JSON.parse(str);
        } catch (e) {
            return false;
        }
        return true;
    }

    var _recursiveForm_body = function(form_body, selfJenis, extractEditSelfJenis = null) {
        $.each(form_body, function(index, item) {
            templateBody += "<tr>"
            templateBody += "<td class='dashed-right'" + textStyle[item.level - 1] + (item.nm_form_body).replace('||', ' / ') + "</td>"
            $.each(selfJenis.data, function(ix, itemx) {
                var checked = '';
                if (extractEditSelfJenis !== null) {
                    $.each(extractEditSelfJenis, function(o, oi) {
                        if (oi.form_body == item.id_form_body && oi.jenis_sika == itemx.id) {
                            checked = 'checked="checked" '
                            return false
                        }
                    });
                }
                templateBody += "<td><span class='form-check form-switch form-switch-lg form-switch-" + checkboxStyle[item.level - 1] + "' style='text-align:center'>" +
                    "<label>" +
                    "<input class='form-check-input' type='checkbox' data-form_body='form_body' " + checked + "name='" + item.id_form_body + "' value='" + itemx.id + "' style='left:0rem;'>" +
                    "<span></span>" +
                    "</label>" +
                    "</span></td>";
            })
            templateBody += "</tr>"

            if (typeof item.subform_body !== "undefined" && (item.subform_body).length > 0) {
                _recursiveForm_body(item.subform_body, selfJenis, extractEditSelfJenis);
            }
        });
    }

    var _createForm_body = function(id, extractEditSelfJenis = null) {
        // Masuk Ke Listing Form_body
        selfForm_body = _ajax({
            url: e3nCeL0t + MoDaD + MAIN + "form_body/" + id,
            data: {
                scrty: true
            }
        }, _getPermission)

        var respon_selfform_body = ExAs.uXvbI(selfForm_body)
            // console.log(respon_selfform_body)
        if (ExAs.Utils.Json.valid(respon_selfform_body)) {
            selfForm_body = JSON.parse(respon_selfform_body)
            if (selfForm_body.success) {
                templateBody = "";
                $.each(selfForm_body.data, function(index, item) {
                    console.log(item.id_form_header);
                    templateBody += "<tr>"
                    templateBody += "<td style='text-transform: uppercase;color:#f01c00;vertical-align: middle;font-weight:700' class='dashed-right'>" + item.nm_form_header + "</td>"
                    $.each(selfJenis.data, function(ix, itemx) {
                        templateBody += "<td>" +
                            // "<span class='form-check form-switch form-switch-lg form-switch-danger' style='text-align:center'>" +
                            // "<label>" +
                            // "<input class='form-check-input' type='checkbox' data-form_body='form_body' name='" + item.id_form_header + "' value='" + itemx.id + "' style='left:0rem;'>" +
                            // "<span></span>" +
                            // "</label>" +
                            // "</span>" +
                            "</td>";
                    })
                    templateBody += "</tr>"

                    if (typeof item.subform_body !== "undefined" && (item.subform_body).length > 0) {
                        _recursiveForm_body(item.subform_body, selfJenis, extractEditSelfJenis);
                    }
                })
                if (extractEditSelfJenis == null) {
                    $('#tr-list-form_body').html(templateBody)
                    _buildForm_body();

                    $('.form_relationDelay').show()
                    $('#modalTambah').modal('show');
                } else {
                    $('#tr-list-form_body-edit').html(templateBody)
                    _buildForm_body();

                    $('.form_relationDelayEdit').show()
                }
            }
        }
    }

    var _buildForm_body = function() {
        var interval = 2000
        var form_body = []
        $("#form_tambah input[type=checkbox]").on('change', function() {
            $("#form_tambah input[type=checkbox]").each(function() {
                if ($(this).is(":checked")) {
                    // console.log($(this).val())
                    var x = {
                        form_body: $(this).attr('name'),
                        jenis: $(this).val()
                    }

                    form_body.push(x)
                }
            })

            if (form_body.length > 0) {
                // console.log(form_body)
                $('#form_body').val(window.JSON.stringify(form_body))
                form_body = []
            } else {
                $('#form_body').val('')
            }
        })

        var form_bodyEdit = []
        $("#form_edit input[type=checkbox]").on('change', function() {
            // console.log('checked')
            $("#form_edit input[type=checkbox]").each(function() {
                if ($(this).is(":checked")) {
                    // console.log($(this).val())
                    var x = {
                        form_body: $(this).attr('name'),
                        jenis: $(this).val()
                    }

                    form_bodyEdit.push(x)
                }
            })

            if (form_bodyEdit.length > 0) {
                // console.log(form_bodyEdit)
                $('#form_bodyEdit').val(window.JSON.stringify(form_bodyEdit))
                form_bodyEdit = []
            } else {
                $('#form_bodyEdit').val('')
            }
            // console.log($('#form_bodyEdit').val())
        })

        var inter = setInterval(function() {
            $("#form_edit input[type=checkbox]").each(function() {
                if ($(this).is(":checked")) {
                    // console.log($(this).val())
                    var x = {
                        form_body: $(this).attr('name'),
                        jenis: $(this).val()
                    }

                    form_bodyEdit.push(x)
                }
            })

            if (form_bodyEdit.length > 0) {
                // console.log(form_bodyEdit)
                $('#form_bodyEdit').val(window.JSON.stringify(form_bodyEdit))
                form_bodyEdit = []
            } else {
                $('#form_bodyEdit').val('')
            }

            clearInterval(inter)
        }, interval);
    }

    var closeModal = function() {
        if (isSelectorExist(".modal")) {
            bool = true
            $('.modal').modal('hide');
            // console.log('masuk')
        }
    }

    var buttonCurse = function(type = 'disable') {
        if (type == 'disable') {
            $('button, .btn').attr('disabled', 'true')
        } else {
            $('button, .btn').removeAttr('disabled')
        }
    }

    var _getPermission = function(result) {
        // console.log(result)
        // if(isJson(result)){
        //     act - JSON.parse(result);
        //     selfJenis = ''
        // }
        return result
    }

    return {
        run: function() {
            search();
            loadData();
            Transaction();

            setInterval(loadData, GLOBAL_COOLDOWN)
        },
        refresh: function() { loadData() }
    }
})();

ExAs.Dom(ExAsUser.run())