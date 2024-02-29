'use strict';

var ExAsUser = (function() {
    var idTable = "#AsTable";
    var MAIN = 'master/menu/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    var tableApi, modal_header;
    var i = 0;
    var json_menu = '';
    var preview_array_menu, modal, selectedClass = 'ri-user-smile-line';

    // var tb = new DataTable(idTable, {
    //     "order": [
    //         [0, 'asc']
    //     ],
    //     scrollY: true,
    //     autoWidth: false,
    //     scrollX: true,
    //     scrollCollapse: false,
    //     deferRender: true,
    //     rowId: 'id_seksi',
    //     // paging: !0,
    //     // info: !0,
    //     "fnInfoCallback": function(oSettings, iStart, iEnd, iMax, iTotal, sPre) {
    //         if (iTotal != 0) {
    //             $('#tableInfo').html('Menampilkan Data ' + iStart + " - " + iEnd + " dari " + iTotal + ' Data')
    //         } else {
    //             $('#tableInfo').html('Tidak ada Data')
    //             $('.existPaginate').val(1)
    //         }
    //         return iStart + " - " + iEnd + " of " + iTotal;
    //     },
    //     select: false,
    //     // dom: 'frtip',
    //     columnDefs: [{
    //             targets: i++,
    //             // orderable: false,
    //             data: "number",
    //             width: "1%",
    //             render: function(data, type, full, meta) {
    //                 return data
    //             }
    //         },
    //         {
    //             targets: i++,
    //             data: "nm_seksi",
    //             render: function(data, type, full, meta) {
    //                 return data
    //             },
    //             // searchable: false
    //         },
    //         {
    //             targets: i++,
    //             data: "alias_seksi",
    //             width: "15%",
    //             render: function(data, type, full, meta) {
    //                 return data
    //             },
    //             // searchable: false
    //         },
    //         {
    //             targets: i++,
    //             data: "id_seksi",
    //             width: "5%",
    //             visible: (ExAs.Permission('VW') ||
    //                     ExAs.Permission('UP') ||
    //                     ExAs.Permission('DT')) ?
    //                 true : false,
    //             render: function(data, type, full, meta) {
    //                 return action_btn()
    //             }
    //         },
    //     ],
    //     "language": {
    //         "emptyTable": '<p style="margin-top: 15px !important">' +
    //             'Tidak ada data' +
    //             '</p>'
    //     },
    //     drawCallback: function(oSettings) {
    //         tableApi = this.api()
    //     },
    //     ajax: function(oData, oCallback, oSetting) {
    //         $.ajax({
    //             url: e3nCeL0t + MoDaD + MAIN + "load",
    //             method: "POST",
    //             async: true,
    //             data: {
    //                 scrty: true,
    //             },
    //             success: function(response) {
    //                 //     // ExAl.Loading.Table.Hide();
    //                 var respon = ExAs.uXvbI(response)
    //                 if (ExAs.Utils.Json.valid(respon)) {
    //                     var res = JSON.parse(respon)
    //                         //console.log(res);
    //                     var no = 1;
    //                     var newLement = [];

    //                     if (res.success) {
    //                         (res.data).forEach(element => {
    //                             element.number = no++;
    //                             newLement.push(element)
    //                         });
    //                     }

    //                     oCallback({
    //                         recordsTotal: (newLement).length,
    //                         recordsFiltered: (newLement).length,
    //                         data: newLement
    //                     })
    //                 }
    //             }
    //         });
    //     },
    // })

    // var tableCss = function() {
    //     $(idTable).attr('style', 'margin:0px !important');
    // }

    // var hideSearch = function() {
    //     $(idTable + "_filter").hide();
    //     $(idTable + "_length").hide();
    // }

    // var hidePagination = function() {
    //     $(idTable + "_paginate").hide();
    //     $(idTable + "_info").hide();
    // }

    // var select2 = function() {
    //     $('select.select2').each(function() {
    //         var label = $(this).closest('div')
    //         label = label.find('label').text()
    //         label = label.replace('*', '')
    //         $(this).select2({
    //             placeholder: "Silahkan Pilih " + label,
    //             allowClear: true,
    //             dropdownParent: $(this).closest('.modal')
    //         });
    //     });
    // }

    // var pagination = function() {
    //     ExAs.Table.Pagination(tableApi)
    // }

    // var search = () => {
    //     /**
    //      * Init All Environment
    //      */
    //     hideSearch();
    //     hidePagination();
    //     tableCss();

    //     pagination();
    //     select2();

    //     var search = ExAs.Doc.Select("#tableSearch");
    //     ExAs.Doc.Listen('keyup', function() {
    //         if (tb.search() !== this.value) {
    //             tb.search(this.value, true, false).draw();
    //         }
    //         $('.existPaginate').val(1)
    //     }, search)

    //     var filter = ExAs.Doc.Select("#tableLength");
    //     ExAs.Doc.Listen('change', function() {
    //         tb.page.len($(this).val()).draw();
    //         var page = tb.page.info();
    //         if (page.pages == 1) {
    //             $('.previous').attr('disabled', true);
    //             $('.next').attr('disabled', true);
    //             $('.existPaginate').val(1)
    //         } else {
    //             $('.previous').attr('disabled', true);
    //             $('.next').removeAttr('disabled');
    //         }
    //     }, filter)
    // }

    var action_btn = function(status = null) {
        return '<div class="btn-group" role="group">' +
            (ExAs.Permission('VW') ? '<button type="button" class="btn btn-sm btn-primary btn-icon waves-effect waves-light tombolDetail"><i class="ri-search-line"></i></button>' : '') +
            (ExAs.Permission('UP') ? '<button type="button" class="btn btn-sm btn-warning btn-icon waves-effect waves-light tombolEdit"><i class="ri-edit-2-fill"></i></button>' : '') +
            (ExAs.Permission('DT') ? '<button type="button" class="btn btn-sm btn-danger btn-icon waves-effect waves-light tombolDelete"><i class="ri-delete-bin-5-line"></i></button>' : '') +
            '</div>';
    }

    /**
     * Getting Data From Database
     */

    var loadData = () => {
        // tb.ajax.reload(null, false);
        $.ajax({
            url: e3nCeL0t + MoDaD + MAIN + "getall",
            method: "POST",
            async: true,
            data: {
                scrty: true,
            },
            success: function(response) {
                //     // ExAl.Loading.Table.Hide();
                var respon = ExAs.uXvbI(response)
                if (ExAs.Utils.Json.valid(respon)) {
                    // var res = JSON.parse(respon)
                    // console.log(res.data[0].submenu);
                    // var menu_drag = '';
                    // $.each(res.data[0].submenu, function(index, item) {
                    //         console.log(item)
                    //         menu_drag += print_menu(item);
                    //     })
                    //     // console.log(menu_drag);
                    // $('#menu_draggable').html(menu_drag);
                }
            }
        });
    }

    var print_menu = function(data) {
        var mn = '';
        mn += '<div class="list-group-item nested-list nested-sortable">';
        if (data.icon_menu != null && data.icon_menu != "") {
            mn += '<i class="' + data.icon_menu.split('"')[1] + ' fs-16 align-middle text-primary me-2"></i> ';
            // mn += data.icon_menu + ' ';
        }
        mn += data.nm_menu;
        mn += action_btn(data.status)
        if (data.submenu != null) {
            $.each(data.submenu, function(index, data2) {
                mn += print_menu(data2);
            })
        }
        mn += '</div>';

        return mn;
    }

    /**
     * Transaction
     */

    var Transaction = function() {
        dragTrigger();
        updateAllTrigger();
        previewClickTrigger();
        iconBtnClickTrigger();
        selectIconTrigger();
        addClickTrigger();
        addTrigger();
        updateTrigger();
        updateClickTrigger();
        deleteTrigger();
        otherTrigger();
    }

    var otherTrigger = function() {
        $("#modalTambah, #modalEdit").on("hidden.bs.modal", function() {
            $('div_status' + modal).empty();
        });

        $("#modalIcon").on("hidden.bs.modal", function() {
            $("#search_icon").val("");
            $('.icon-demo-content').parent().parent().show();
            $(".select_icon").show();
        });

        $("#search_icon").on("input", function() {
            var txt = $(this).val();

            $('.select_icon').each(function() {
                if ($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });

            $('.icon-demo-content').each(function() {
                $(this).parent().parent().show();
                var children = $(this).find("span:visible");
                if (!children.length) {
                    $(this).parent().parent().hide();
                } else {
                    $(this).parent().parent().show();
                }
            });
        })
    }

    var addClickTrigger = function() {
        $('.tombolTambah').on('click', function() {
            modal = 'Tambah';
            $(".iconPreview").removeClass(selectedClass);
            selectedClass = 'ri-user-smile-line';
            $(".iconPreview").addClass(selectedClass);
            $(".iconText").html('Pilih Icon');
            printStatus();
        })
    }

    var printStatus = function(value = '') {
        var status = '<div class="hstack gap-2 flex-wrap">' +
            '<input type="radio" class="btn-check" name="status" id="active" value="A" required' + (value == 'A' ? ' checked' : '') + '>' +
            '<label class="flex-fill btn btn-outline-success mb-0" for="active">Active</label>' +
            '<input type="radio" class="btn-check" name="status" id="non" value="N"' + (value == 'N' ? ' checked' : '') + '>' +
            '<label class="flex-fill btn btn-outline-danger mb-0" for="non">Inactive</label>' +
            '</div>';
        $(".div_status" + modal).html(status);
    }

    var selectIconTrigger = function() {
        $(".select_icon").on("click", function() {
            var selected = ($(this).find(">:first-child")[0].outerHTML).replace("text-white ", "");
            // console.log(selectedClass);
            $("#icon" + modal).val(selected);
            $(".iconPreview").removeClass(selectedClass);
            selectedClass = ($(this).find(">:first-child").attr('class')).replace("text-white ", "")
            $(".iconPreview").addClass(selectedClass);
            $(".iconText").html(selectedClass);
            $('#tutupIcon').click();
        })
    }

    var iconBtnClickTrigger = function() {
        $(".iconBtn").on("click", function() {
            $("#tutupIcon").attr("data-bs-target", "#modal" + modal);
        })
    }

    var createMenuPreview = function(menu1) {
        var menuPreview = '';
        $.each(menu1, function(i, menu2) {
            menuPreview += "<li class='menu-title'><span>" + menu2.nm_menu + "</span></li>";
            if (menu2.submenu.length > 0) {
                $.each(menu2.submenu, function(i2, menu3) {
                    if (menu3.submenu.length > 0) {
                        menuPreview += "<li class='nav-item'>" +
                            "<span class='nav-link menu-link' href='#' data-bs-toggle='collapse' role='button' aria-expanded='false' aria-controls='" + menu3.nm_menu.replace(" ", "") + "'>" +
                            menu3.icon_menu +
                            "<span>" + menu3.nm_menu + "</span>" +
                            "</span>" +
                            "<div class='collapse menu-dropdown show' id=''>" +
                            "<ul class='nav nav-sm flex-column'>";
                        $.each(menu3.submenu, function(i3, menu4) {
                            if (menu4.submenu.length > 0) {
                                menuPreview += "<li class='nav-item'>" +
                                    "<span class='nav-link menu-link' href='#' data-bs-toggle='collapse' role='button' aria-expanded='false' aria-controls=''>" +
                                    menu4.icon_menu +
                                    "<span>" + menu4.nm_menu + "</span>" +
                                    "</span>" +
                                    "<div class='collapse menu-dropdown show' id='" + menu4.nm_menu.replace(" ", "") + "'>" +
                                    "<ul class='nav nav-sm flex-column'>";
                                $.each(menu4.submenu, function(i4, menu5) {
                                    menuPreview += "<li class='nav-item' style='cursor: pointer'>" +
                                        "<span href='#' class='nav-link' style='padding: 0.45rem 1.5rem; font-family: Poppins,sans-serif; font-size: .813rem'>" +
                                        "<i class='ri-subtract-line' style='font-size: .813rem'></i>" +
                                        menu5.nm_menu +
                                        "</span>" +
                                        "</li>"
                                })
                                menuPreview += "</ul></div></li>";
                            } else {
                                menuPreview += "<li class='nav-item' style='cursor: pointer'>" +
                                    "<span href='#' class='nav-link' style='padding: 0.45rem 1.5rem; font-family: Poppins,sans-serif; font-size: .813rem'>" +
                                    "<i class='ri-subtract-line' style='font-size: .813rem'></i>" +
                                    menu4.nm_menu +
                                    "</span></li>";
                            }
                        })
                        menuPreview += "</ul></div></li>";
                    } else {
                        menuPreview += "<li class='nav-item' style='cursor: pointer'>" +
                            "<span class='nav-link menu-link' href='#'>" +
                            menu3.icon_menu +
                            " <span>" +
                            menu3.nm_menu + "</span></span></li>";
                    }
                });
            }
        })
        $(".offcanvas-body #navbar-nav").html(menuPreview)
    }

    var createArrayMenuPreview = function(mn, parent) {
        var result = [];
        $.each(mn.filter(item => item.parent === parent), function(index, elem) {
            if (elem.status === 'A') {
                var x = {
                    nm_menu: elem.nama,
                    icon_menu: elem.ico,
                    // level: elem.depth,
                    // parent: elem.parent,
                    submenu: createArrayMenuPreview(preview_array_menu.filter(item => item.parent === elem.id), elem.id)
                }
                result.push(x);
            }
        });
        return result;
    }

    var previewClickTrigger = function() {
        $('#previewBtn').on('click', function() {
            preview_array_menu = createMenuJSON();
            // console.log(preview_array_menu);
            var previewMenuArray = createArrayMenuPreview(preview_array_menu, 'MN000001');
            createMenuPreview(previewMenuArray);
            // var test = preview_array_menu.filter(item => item.parent === 'MN000001');
            // console.log(test);
            // console.log(previewMenuArray);
        })
    }

    var updateAllTrigger = function() {
        // json_menu = window.JSON.stringify(createMenuJSON());
        $('.simpan').on('click', function() {
            $.ajax({
                url: e3nCeL0t + MoDaD + MAIN + "update_all",
                method: "POST",
                data: {
                    menu: json_menu,
                    scrty: true
                },
                success: function(response) {
                    if (ExAs.Utils.Json.valid(response)) {
                        var res = JSON.parse(response);
                        if (res.status) {
                            ExAl.Toast.Success(res.header, res.message, function(result) {
                                if (result.isDismissed) {
                                    window.location.reload();
                                }
                            });
                        } else {
                            ExAl.Toast.Failed(res.header, res.message);
                        }
                    }
                },
                error: function(e) {
                    // console.log(e);
                    // $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                },
            });
        })
    }

    var createMenuJSON = function() {
        var menuJSON = [{
            nama: 'MAIN MENU',
            id: 'MN000001',
            link: '',
            status: 'A',
            ico: '',
            depth: 0,
            parent: '0',
            urut_global: 1,
            urut: 1
        }];
        var urut_global = 2;
        var urut = {};
        $('.list-group-item .nm_menu').each(function(i, e) {
            var header = $(e).parent().parent().parent().parent();
            var lvl = 1;
            var parent = '';
            if (header.attr('id') === 'menu_draggable') {
                lvl = 1;
                parent = 'MN000001';
            } else {
                parent = header.parent().attr('id');
                // lvl = parseInt((header.find(">:first-child").attr('class')).replace("list-group-item nested-", ""));
                while (header.attr('id') !== 'menu_draggable') {
                    header = header.parent().parent();
                    lvl++;
                }
            }
            if (urut[parent] == null) {
                urut[parent] = 1;
            }
            // console.log(urut[parent]++)
            var x = {
                nama: e.innerHTML,
                id: ExAs.uXvbI($(e).data('id')),
                link: ExAs.uXvbI($(e).data('link')),
                status: ExAs.uXvbI($(e).data('status')),
                ico: ExAs.uXvbI($(e).data('icon')),
                depth: lvl,
                parent: parent,
                urut_global: urut_global++,
                urut: urut[parent]++
            }
            menuJSON.push(x);
            // }
        })
        return menuJSON;
    }

    var dragTrigger = function() {
        $('#menu_draggable').on('change', function() {
            // console.log(createMenuJSON());
            json_menu = window.JSON.stringify(createMenuJSON());
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
                                            // loadData();
                                            window.location.reload();
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
        $(".tombolEdit").on("click", function() {
            modal = 'Edit';
            var id = ExAs.uXvbI($(this).data("id"));
            // console.log(id);
            $.ajax({
                url: e3nCeL0t + MoDaD + MAIN + "getedit",
                method: "POST",
                async: false,
                data: {
                    scrty: true,
                    id: id
                },
                success: function(response) {
                    var respon = ExAs.uXvbI(response)
                        // console.log(respon)
                    if (ExAs.Utils.Json.valid(respon)) {
                        var res = JSON.parse(respon)
                        if (res.success) {
                            // console.log(res)
                            var data = res.data[0];
                            console.log(data)

                            var classIco = '';
                            if (data.icon_menu != '') {
                                classIco = data.icon_menu.split('"')[1]
                                $(".iconPreview").removeClass(selectedClass);
                                selectedClass = classIco;
                                $(".iconPreview").addClass(selectedClass);
                                $(".iconText").html(selectedClass);
                                $("#iconEdit").val(data.icon_menu);
                            } else {
                                $(".iconPreview").removeClass(selectedClass);
                                selectedClass = 'ri-user-smile-line';
                                $(".iconPreview").addClass(selectedClass);
                                $(".iconText").html('Pilih Icon');
                            }
                            // console.log(classIco)

                            $('#id_menu_edit').val(id)
                            $('#nama_edit').val(data.nm_menu)
                            $('#link_edit').val(data.link_menu)
                            printStatus(data.status);
                        }
                    }
                }
            }).done(function() {
                ExAl.Modal.Show('#modalEdit');
            });
            // var drop = tb.row($(this).parents("tr")).data();
            // if (modal_header == '' || typeof modal_header === 'undefined') {
            //     modal_header = $('#modal_header_edit').text();
            // }
            // $('#modal_header_edit').html(modal_header + ': <b>' + drop.alias_seksi + '</b>');
            // $('#id_seksi_edit').val(drop.id_seksi)
            // $('#nama_edit').val(drop.nm_seksi)
            // $('#alias_edit').val(drop.alias_seksi)
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
                                // $('#modal_header_edit').html(modal_header);
                                if (res.status) {
                                    ExAl.Toast.Success(res.header, res.message, function(result) {
                                        if (result.isDismissed) {
                                            // loadData();
                                            window.location.reload();
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
        $(".tombolDelete").on("click", function() {
            var id = ExAs.uXvbI($(this).data("id"));
            ExAl.Toast.Delete({}, function(result) {
                if (result) {
                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "delete",
                        method: "POST",
                        async: false,
                        data: {
                            id: id,
                            scrty: true
                        },
                        success: function(response) {
                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                if (res.status) {
                                    ExAl.Toast.Success(res.header, res.message);
                                } else {
                                    ExAl.Toast.Failed(res.header, res.message);
                                }
                            }
                        }
                    }).done(function() {
                        window.location.reload();
                    })
                }
            })
        });
    }

    return {
        run: function() {
            // search();
            loadData();
            Transaction();

            // setInterval(loadData, GLOBAL_COOLDOWN)
        },
        // refresh: function() { loadData() }
    }
})();

ExAs.Dom(ExAsUser.run())