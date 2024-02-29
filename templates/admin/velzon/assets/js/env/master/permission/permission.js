'use strict';

var ExAsUser = (function() {
    var idTable = "#AsTable";
    var MAIN = 'master/permission/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    var tableApi, modal_header;

    var selfAction, selfMenu, templateHeader, templateBody;

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

    var action_btn = function(status) {
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
                                    item.nm_role,
                                    action_btn(item.status),
                                    item.id,
                                ])
                            } else {
                                tb.rows().every(function(rowIdx, tableLoop, rowLoop) {
                                    var data = this.data();
                                    if (data[3] == item.id) {
                                        if (data[1] !== item.nm_role) {
                                            tb.cell(rowIdx, 1)
                                                .data(item.nm_role)
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
            $('#role_edit').val(drop[3])

            var selfAction = _ajax({
                url: e3nCeL0t + MoDaD + MAIN + "action",
                data: {
                    scrty: true
                }
            }, _getPermission)

            var editSelfAction = _ajax({
                url: e3nCeL0t + MoDaD + MAIN + "action_edit",
                data: {
                    role: drop[3],
                    scrty: true
                }
            }, _getPermission)

            var respon_selfaction = ExAs.uXvbI(selfAction)
            var respon_editSelfaction = ExAs.uXvbI(editSelfAction)
            if (isJson(respon_selfaction)) {
                // console.log(selfAction)
                selfAction = JSON.parse(respon_selfaction)
                editSelfAction = JSON.parse(respon_editSelfaction)
                console.log(selfAction.success, editSelfAction.success)
                    // selfAction = JSON.parse(selfAction)
                    // editSelfAction = JSON.parse(editSelfAction)
                if (selfAction.success && editSelfAction.success) {
                    templateHeader = "<th class='header-hh' style='width:24%;vertical-align: middle;background: #fad000;'>Menu</th>"
                    $.each(selfAction.data, function(index, item) {
                        templateHeader += "<th class='header-hh' style='text-align:center;vertical-align: middle;background: #9b59b6;font-weight: 100;color: white;'>" + item.nm_action + "</th>"
                    })
                    $('#tr-menu-action-edit').html(templateHeader)

                    // Masuk Ke Listing Menu
                    selfMenu = _ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "menu",
                        data: {
                            scrty: true
                        }
                    }, _getPermission)

                    var respon_selfmenu = ExAs.uXvbI(selfMenu)
                    if (ExAs.Utils.Json.valid(respon_selfmenu)) {
                        selfMenu = JSON.parse(respon_selfmenu)
                        if (selfMenu.success) {
                            // templateBody = "";
                            // _recursiveMenu(selfMenu.data, selfAction, extractEditSelfAction);
                            var extractEditSelfAction = editSelfAction.data
                            $.each(selfMenu.data, function(index, item) {
                                templateBody = "<tr>"
                                templateBody += "<td style='color:#f01c00;vertical-align: middle;' class='dashed-right'>" + item.nm_menu + "</td>"
                                $.each(selfAction.data, function(ix, itemx) {
                                    var checked0 = '';
                                    $.each(extractEditSelfAction, function(o, oi) {
                                        if (oi.menu == item.id_menu && oi.action == itemx.id) {
                                            checked0 = 'checked="checked" '
                                            return false
                                        }
                                    });
                                    templateBody += "<td><span class='form-check form-switch form-switch-lg form-switch-danger' style='text-align:center'>" +
                                        "<label>" +
                                        "<input class='form-check-input' type='checkbox' data-menu='menu-edit' " + checked0 + "name='" + item.id_menu + "' value='" + itemx.id + "' style='left:0rem;'>" +
                                        "<span></span>" +
                                        "</label>" +
                                        "</span></td>";
                                })
                                templateBody += "</tr>"

                                if (typeof item.submenu !== "undefined" && (item.submenu).length > 0) {
                                    $.each(item.submenu, function(index1, menu1) {
                                        templateBody += "<tr>"
                                        templateBody += "<td style='text-transform: uppercase;vertical-align: middle;font-weight:500' class='dashed-right'>" + menu1.nm_menu + "</td>"
                                        $.each(selfAction.data, function(ix, itemx) {
                                            var checked1 = '';
                                            $.each(extractEditSelfAction, function(o, oi) {
                                                if (oi.menu == menu1.id_menu && oi.action == itemx.id) {
                                                    checked1 = 'checked="checked"'
                                                    return false
                                                }
                                            });
                                            templateBody += "<td><span class='form-check form-switch form-switch-lg' style='text-align:center'>" +
                                                "<label>" +
                                                "<input class='form-check-input' type='checkbox' data-menu='menu-edit' " + checked1 + " name='" + menu1.id_menu + "' value='" + itemx.id + "' style='left:0rem;'>" +
                                                "<span></span>" +
                                                "</label>" +
                                                "</span></td>";
                                        })
                                        templateBody += "</tr>"

                                        if (typeof menu1.submenu !== "undefined" && (menu1.submenu).length > 0) {
                                            $.each(menu1.submenu, function(index2, menu2) {
                                                templateBody += "<tr>"
                                                templateBody += menu2.icon_menu !== "" ? "<td class='dashed-right'>" + menu2.icon_menu + "<span class='menu-text' style='padding-left:10px'>" + menu2.nm_menu + "</span></td>" : "<td class='dashed-right'><span class='menu-text' style='padding-left:33px'>" + menu2.nm_menu + "</span></td>"
                                                $.each(selfAction.data, function(ix, itemx) {
                                                    var checked2 = '';
                                                    $.each(extractEditSelfAction, function(o, oi) {
                                                        if (oi.menu == menu2.id_menu && oi.action == itemx.id) {
                                                            checked2 = 'checked="checked"'
                                                            return false
                                                        }
                                                    });
                                                    templateBody += "<td><span class='form-check form-switch form-switch-lg form-switch-secondary' style='text-align:center'>" +
                                                        "<label>" +
                                                        "<input class='form-check-input' type='checkbox' data-menu='menu-edit' " + checked2 + " name='" + menu2.id_menu + "' value='" + itemx.id + "' style='left:0rem;'>" +
                                                        "<span></span>" +
                                                        "</label>" +
                                                        "</span></td>";
                                                })
                                                templateBody += "</tr>"

                                                if (typeof menu2.submenu !== "undefined" && (menu2.submenu).length > 0) {
                                                    $.each(menu2.submenu, function(index3, menu3) {
                                                        templateBody += "<tr>"
                                                        templateBody += "<td class='dashed-right'><i class='ri-arrow-right-s-line' style='padding-left:34px;padding-right:15px'><span></span></i>" + menu3.nm_menu + "</td>"
                                                        $.each(selfAction.data, function(ix, itemx) {
                                                            var checked3 = '';
                                                            $.each(extractEditSelfAction, function(o, oi) {
                                                                if (oi.menu == menu3.id_menu && oi.action == itemx.id) {
                                                                    checked3 = 'checked="checked"'
                                                                    return false
                                                                }
                                                            });
                                                            templateBody += "<td><span class='form-check form-switch form-switch-lg form-switch-warning' style='text-align:center'>" +
                                                                "<label>" +
                                                                "<input class='form-check-input' type='checkbox' data-menu='menu-edit' " + checked3 + " name='" + menu3.id_menu + "' value='" + itemx.id + "' style='left:0rem;'>" +
                                                                "<span></span>" +
                                                                "</label>" +
                                                                "</span></td>";
                                                        })
                                                        templateBody += "</tr>"

                                                        if (typeof menu3.submenu !== "undefined" && (menu3.submenu).length > 0) {
                                                            $.each(menu3.submenu, function(index4, menu4) {
                                                                templateBody += "<tr>"
                                                                templateBody += "<td class='dashed-right'><i class='icon-sm fab fa-tiktok' style='padding-left:56px;padding-right:15px'><span></span></i>" + menu4.nm_menu + "</td>"
                                                                $.each(selfAction.data, function(ix, itemx) {
                                                                    var checked4 = '';
                                                                    $.each(extractEditSelfAction, function(o, oi) {
                                                                        if (oi.menu == menu4.id_menu && oi.action == itemx.id) {
                                                                            checked4 = 'checked="checked"'
                                                                            return false
                                                                        }
                                                                    });
                                                                    templateBody += "<td><span class='form-check form-switch form-switch-lg form-switch-dark' style='text-align:center'>" +
                                                                        "<label>" +
                                                                        "<input class='form-check-input' type='checkbox' data-menu='menu-edit' " + checked4 + " name='" + menu4.id_menu + "' value='" + itemx.id + "' style='left:0rem;'>" +
                                                                        "<span></span>" +
                                                                        "</label>" +
                                                                        "</span></td>";
                                                                })
                                                                templateBody += "</tr>"
                                                            })
                                                        }
                                                    })
                                                }
                                            })
                                        }
                                    })
                                }
                            })
                            $('#tr-list-menu-edit').html(templateBody)
                            _buildMenu();

                            $('.permissionDelayEdit').show()
                        }
                    }

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

                var Role = _ajax({
                    url: e3nCeL0t + MoDaD + MAIN + "role",
                    data: {
                        scrty: true
                    }
                }, _getPermission)

                var respon_role = ExAs.uXvbI(Role)
                if (ExAs.Utils.Json.valid(respon_role)) {
                    Role = JSON.parse(respon_role)
                    if (Role.success) {
                        var option
                        $.each(Role.data, function(idx, itemx) {
                            option += "<option value='" + itemx.id + "' style='left:0rem;'>" + itemx.nm_role + "</option>"
                        })
                        $('#role').html(option)
                    }
                }

                selfAction = _ajax({
                    url: e3nCeL0t + MoDaD + MAIN + "action",
                    data: {
                        scrty: true
                    }
                }, _getPermission)

                var respon_selfaction = ExAs.uXvbI(selfAction)
                if (ExAs.Utils.Json.valid(respon_selfaction)) {
                    // console.log(selfAction)
                    selfAction = JSON.parse(respon_selfaction)
                    if (selfAction.success) {
                        templateHeader = "<th class='header-hh' style='width:24%;vertical-align: middle;background: #fad000;'>Menu</th>"
                        $.each(selfAction.data, function(index, item) {
                            templateHeader += "<th class='header-hh' style='text-align:center;vertical-align: middle;background: #9b59b6;font-weight: 100;color: white;'>" + item.nm_action + "</th>"
                        })
                        $('#tr-menu-action').html(templateHeader)

                        // Masuk Ke Listing Menu
                        selfMenu = _ajax({
                            url: e3nCeL0t + MoDaD + MAIN + "menu",
                            data: {
                                scrty: true
                            }
                        }, _getPermission)

                        var respon_selfmenu = ExAs.uXvbI(selfMenu)
                        if (ExAs.Utils.Json.valid(respon_selfmenu)) {
                            selfMenu = JSON.parse(respon_selfmenu)
                            if (selfMenu.success) {
                                // templateBody = "";
                                // _recursiveMenu(selfMenu.data, selfAction);
                                $.each(selfMenu.data, function(index, item) {
                                    templateBody = "<tr>"
                                    templateBody += "<td style='color:#f01c00;vertical-align: middle;' class='dashed-right'>" + item.nm_menu + "</td>"
                                    $.each(selfAction.data, function(ix, itemx) {
                                        templateBody += "<td><span class='form-check form-switch form-switch-lg form-switch-danger' style='text-align:center'>" +
                                            "<label>" +
                                            "<input class='form-check-input' type='checkbox' data-menu='menu' name='" + item.id_menu + "' value='" + itemx.id + "' style='left:0rem;'>" +
                                            "<span></span>" +
                                            "</label>" +
                                            "</span></td>";
                                    })
                                    templateBody += "</tr>"

                                    if (typeof item.submenu !== "undefined" && (item.submenu).length > 0) {
                                        $.each(item.submenu, function(index1, menu1) {
                                            templateBody += "<tr>"
                                            templateBody += "<td style='text-transform: uppercase;vertical-align: middle;font-weight:500' class='dashed-right'>" + menu1.nm_menu + "</td>"
                                            $.each(selfAction.data, function(ix, itemx) {
                                                templateBody += "<td><span class='form-check form-switch form-switch-lg' style='text-align:center'>" +
                                                    "<label>" +
                                                    "<input class='form-check-input' type='checkbox' data-menu='menu' name='" + menu1.id_menu + "' value='" + itemx.id + "' style='left:0rem;'>" +
                                                    "<span></span>" +
                                                    "</label>" +
                                                    "</span></td>";
                                            })
                                            templateBody += "</tr>"

                                            if (typeof menu1.submenu !== "undefined" && (menu1.submenu).length > 0) {
                                                $.each(menu1.submenu, function(index2, menu2) {
                                                    templateBody += "<tr>"
                                                    templateBody += menu2.icon_menu !== "" ? "<td class='dashed-right'>" + menu2.icon_menu + "<span class='menu-text' style='padding-left:10px'>" + menu2.nm_menu + "</span></td>" : "<td class='dashed-right'><span class='menu-text' style='padding-left:33px'>" + menu2.nm_menu + "</span></td>"
                                                    $.each(selfAction.data, function(ix, itemx) {
                                                        templateBody += "<td><span class='form-check form-switch form-switch-lg form-switch-secondary' style='text-align:center'>" +
                                                            "<label>" +
                                                            "<input class='form-check-input' type='checkbox' data-menu='menu' name='" + menu2.id_menu + "' value='" + itemx.id + "' style='left:0rem;'>" +
                                                            "<span></span>" +
                                                            "</label>" +
                                                            "</span></td>";
                                                    })
                                                    templateBody += "</tr>"

                                                    if (typeof menu2.submenu !== "undefined" && (menu2.submenu).length > 0) {
                                                        $.each(menu2.submenu, function(index3, menu3) {
                                                            templateBody += "<tr>"
                                                            templateBody += "<td class='dashed-right'><i class='ri-arrow-right-s-line' style='padding-left:34px;padding-right:15px'><span></span></i>" + menu3.nm_menu + "</td>"
                                                            $.each(selfAction.data, function(ix, itemx) {
                                                                templateBody += "<td><span class='form-check form-switch form-switch-lg form-switch-warning' style='text-align:center'>" +
                                                                    "<label>" +
                                                                    "<input class='form-check-input' type='checkbox' data-menu='menu' name='" + menu3.id_menu + "' value='" + itemx.id + "' style='left:0rem;'>" +
                                                                    "<span></span>" +
                                                                    "</label>" +
                                                                    "</span></td>";
                                                            })
                                                            templateBody += "</tr>"

                                                            if (typeof menu3.submenu !== "undefined" && (menu3.submenu).length > 0) {
                                                                $.each(menu3.submenu, function(index4, menu4) {
                                                                    templateBody += "<tr>"
                                                                    templateBody += "<td class='dashed-right'><i class='icon-sm fab fa-tiktok' style='padding-left:56px;padding-right:15px'><span></span></i>" + menu4.nm_menu + "</td>"
                                                                    $.each(selfAction.data, function(ix, itemx) {
                                                                        templateBody += "<td><span class='form-check form-switch form-switch-lg form-switch-dark' style='text-align:center'>" +
                                                                            "<label>" +
                                                                            "<input class='form-check-input' type='checkbox' data-menu='menu' name='" + menu4.id_menu + "' value='" + itemx.id + "' style='left:0rem;'>" +
                                                                            "<span></span>" +
                                                                            "</label>" +
                                                                            "</span></td>";
                                                                    })
                                                                    templateBody += "</tr>"
                                                                })
                                                            }
                                                        })
                                                    }
                                                })
                                            }
                                        })
                                    }
                                })
                                $('#tr-list-menu').html(templateBody)
                                _buildMenu();

                                $('.permissionDelay').show()
                                $('#modalTambah').modal('show');
                            }
                        }

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
                // loadingHide: options.loading ? $(options.loading).hide() : $('.permissionDelay').hide()
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

    // var _recursiveMenu = function(menu, selfAction, extractEditSelfAction = null) {
    //     $.each(menu, function(index, item) {
    //         templateBody += "<tr>"
    //         templateBody += item.icon_menu !== "" ? "<td class='dashed-right'>" + item.icon_menu + "<span class='menu-text' style='padding-left:10px'>" + item.nm_menu + "</span></td>" : "<td class='dashed-right'><span class='menu-text' style='padding-left:33px'>" + item.nm_menu + "</span></td>"
    //         $.each(selfAction.data, function(ix, itemx) {
    //             var checked = '';
    //             if (extractEditSelfAction !== null) {
    //                 $.each(extractEditSelfAction, function(o, oi) {
    //                     if (oi.menu == item.id_menu && oi.action == itemx.id) {
    //                         checked = 'checked="checked" '
    //                         return false
    //                     }
    //                 });
    //             }
    //             templateBody += "<td><span class='form-check form-switch form-switch-lg form-switch-secondary' style='text-align:center'>" +
    //                 "<label>" +
    //                 "<input class='form-check-input' type='checkbox' data-menu='menu' " + checked + "name='" + item.id_menu + "' value='" + itemx.id + "' style='left:0rem;'>" +
    //                 "<span></span>" +
    //                 "</label>" +
    //                 "</span></td>";
    //         })
    //         templateBody += "</tr>"

    //         if (typeof item.submenu !== "undefined" && (item.submenu).length > 0) {
    //             _recursiveMenu(item.submenu, selfAction, extractEditSelfAction);
    //         }
    //     });
    // }

    var _buildMenu = function() {
        var interval = 2000
        var menu = []
        $("#form_tambah input[type=checkbox]").on('change', function() {
            $("#form_tambah input[type=checkbox]").each(function() {
                if ($(this).is(":checked")) {
                    // console.log($(this).val())
                    var x = {
                        menu: $(this).attr('name'),
                        akses: $(this).val()
                    }

                    menu.push(x)
                }
            })

            if (menu.length > 0) {
                // console.log(menu)
                $('#menu').val(window.JSON.stringify(menu))
                menu = []
            } else {
                $('#menu').val('')
            }
        })

        var menuEdit = []
        $("#form_edit input[type=checkbox]").on('change', function() {
            $("#form_edit input[type=checkbox]").each(function() {
                if ($(this).is(":checked")) {
                    // console.log($(this).val())
                    var x = {
                        menu: $(this).attr('name'),
                        akses: $(this).val()
                    }

                    menuEdit.push(x)
                }
            })

            if (menuEdit.length > 0) {
                // console.log(menuEdit)
                $('#menuEdit').val(window.JSON.stringify(menuEdit))
                menuEdit = []
            } else {
                $('#menuEdit').val('')
            }
        })

        var inter = setInterval(function() {
            $("#form_edit input[type=checkbox]").each(function() {
                if ($(this).is(":checked")) {
                    // console.log($(this).val())
                    var x = {
                        menu: $(this).attr('name'),
                        akses: $(this).val()
                    }

                    menuEdit.push(x)
                }
            })

            if (menuEdit.length > 0) {
                // console.log(menuEdit)
                $('#menuEdit').val(window.JSON.stringify(menuEdit))
                menuEdit = []
            } else {
                $('#menuEdit').val('')
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
        //     selfAction = ''
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