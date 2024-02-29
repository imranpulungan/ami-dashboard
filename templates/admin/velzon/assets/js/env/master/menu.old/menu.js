var e3nCeL0t = ExAs.uXvbI(uXvbI);
var MoDaD = ExAs.m0d(m0d);

$(document).ready(function() {
    'use strict';

    var OurMenu = (function() {
        var _addMenu = function() {
            var validation;

            if (isSelectorExist('#form_tambah')) {
                validation = FormValidation.formValidation(
                    document.getElementById("form_tambah"), {
                        fields: {
                            nama: {
                                validators: {
                                    notEmpty: {
                                        message: "Nama Menu harus diisi",
                                    },
                                },
                            },

                            link_menu: {
                                validators: {
                                    notEmpty: {
                                        message: "Link harus diisi, Apabila Sebagai Parent Bisa diisi dengan '#'",
                                    },
                                },
                            }
                        },

                        plugins: {
                            //Learn more: https://formvalidation.io/guide/plugins
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap(),
                            // Validate fields when clicking the Submit button
                            submitButton: new FormValidation.plugins.SubmitButton(),
                            // Submit the form when all fields are valid
                            //defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                        },
                    }
                );

                $("#submit").on("click", function(e) {
                    e.preventDefault();
                    //   console.log("add");

                    var _input = new FormData(document.getElementById("form_tambah"));
                    _input.append('scrty', true);
                    // console.log(_input)

                    $(this).addClass("spinner spinner-white spinner-right disabled");
                    $("button.btn").attr("disabled", "true");
                    $("button.btn").css("cursor", "not-allowed");

                    validation.validate().then(function(status) {
                        // console.log(_input);

                        if (status == "Valid") {
                            $.ajax({
                                url: e3nCeL0t + MoDaD + "master/menu/add",
                                method: "POST",
                                data: _input,
                                contentType: false,
                                cache: false,
                                processData: false,
                                success: function(response) {
                                    // console.log(response);
                                    $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                                    $("button.btn").removeAttr("disabled");
                                    $("button.btn").removeAttr("style");
                                    var res = JSON.parse(response);
                                    if (res.status) {
                                        swal
                                            .fire({
                                                text: res.msg,
                                                icon: "success",
                                                timer: 3000,
                                                showCancelButton: false,
                                                showConfirmButton: false,
                                            })
                                            .then(function(result) {
                                                if (result.isDismissed) {
                                                    window.location.reload();
                                                }
                                            });
                                    } else {
                                        swal
                                            .fire({
                                                text: res.msg,
                                                icon: "error",
                                                timer: 3000,
                                                showCancelButton: false,
                                                showConfirmButton: false,
                                            })
                                            .then(function() {});
                                    }
                                },
                                error: function(e) {
                                    // console.log(e);
                                    $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                                    $("button.btn").removeAttr("disabled");
                                    $("button.btn").removeAttr("style");
                                },
                            });
                        } else {
                            $("#submit").removeClass("spinner spinner-white spinner-right disabled");
                            $("button.btn").removeAttr("disabled");
                            $("button.btn").removeAttr("style");
                        }
                    });
                });
            }
        }

        var _deleteMenu = function() {
            if (isSelectorExist('.dd3-delete-handle')) {
                $(".dd3-delete-handle").on("click", function(e) {
                    e.preventDefault();

                    var listData = e.length ? e : $(e.target),
                        data = listData.parent().data();

                    var id = data.id;
                    var nama = data.nama;

                    if (id !== undefined) {
                        swal.fire({
                            text: "Apakah anda ingin menghapus " + 'menu' + " " + nama + "?",
                            icon: "warning",
                            showCancelButton: true,
                            showConfirmButton: true,
                            confirmButtonText: "Ya",
                            cancelButtonText: "Batal"
                        }).then(function(result) {
                            if (result.isConfirmed) {
                                $.ajax({
                                    url: e3nCeL0t + MoDaD + "master/menu/delete",
                                    method: "POST",
                                    data: {
                                        id: id,
                                        scrty: true
                                    },
                                    success: function(response) {
                                        var res = JSON.parse(response);
                                        if (res.status) {
                                            swal.fire({
                                                text: res.msg,
                                                icon: "success",
                                                timer: 3000,
                                                showCancelButton: false,
                                                showConfirmButton: false
                                            }).then(function(result) {
                                                if (result.isDismissed) {
                                                    window.location.reload();
                                                }
                                            });
                                        } else {
                                            swal.fire({
                                                text: res.msg,
                                                icon: "error",
                                                timer: 3000,
                                                showCancelButton: false,
                                                showConfirmButton: false
                                            }).then(function() {

                                            });
                                        }
                                    },
                                    error: function(e) {}
                                });
                            }
                        });
                    }
                });
            }
        }

        var _saveMenu = function() {
            if (isSelectorExist('#saveChanged')) {
                $("#saveChanged").on("click", function(e) {
                    e.preventDefault();

                    var menu = $('#nestable-output').val();

                    if (menu !== undefined) {
                        swal.fire({
                            text: "Apakah anda ingin mengupdate perubahan menu?",
                            icon: "warning",
                            showCancelButton: true,
                            showConfirmButton: true,
                            confirmButtonText: "Ya",
                            cancelButtonText: "Batal"
                        }).then(function(result) {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: 'Please Wait !',
                                    html: 'Data Saving...', // add html attribute if you want or remove
                                    allowOutsideClick: false,
                                    onBeforeOpen: () => {
                                        Swal.showLoading()
                                    },
                                });

                                $.ajax({
                                    url: e3nCeL0t + MoDaD + "master/menu/update",
                                    method: "POST",
                                    data: {
                                        menu: menu,
                                        scrty: true
                                    },
                                    success: function(response) {
                                        var res = JSON.parse(response);
                                        if (res.status) {
                                            swal.fire({
                                                text: res.msg,
                                                icon: "success",
                                                timer: 3000,
                                                showCancelButton: false,
                                                showConfirmButton: false
                                            }).then(function(result) {
                                                if (result.isDismissed) {
                                                    // window.location.reload();
                                                }
                                            });
                                        } else {
                                            swal.fire({
                                                text: res.msg,
                                                icon: "error",
                                                timer: 3000,
                                                showCancelButton: false,
                                                showConfirmButton: false
                                            }).then(function() {

                                            });
                                        }
                                    },
                                    error: function(e) {}
                                });
                            }
                        });
                    }
                });
            }
        }

        return {
            init: function() {
                _addMenu()
                _saveMenu()
                _deleteMenu()
            }
        }
    })();

    // OurMenu.init();
});

$(document).ready(function() {
    isLoaded = false;
    load_tab($('#svg_icon'));

    $('[data-toggle="tab"]').on('click', function() {
        load_tab($(this));
    });

    function load_tab(data) {
        var $this = data,
            loadurl = $this.data('uri'),
            targ = $this.data('loadid');

        // console.log($this)
        if (!$this.hasClass('active') || !isLoaded) {
            $('#' + targ).html('Loading...');

            var firstLoad = setInterval(function() {
                $.get(e3nCeL0t + MoDaD + 'master/menu/' + loadurl, function(data) {
                    $('#' + targ).html(data);

                    if (!isLoaded) {
                        isLoaded = true;
                    }

                    clearInterval(firstLoad);
                });
            }, 2000);
        }
    }

    $('.reset').on('click', function() {
        $('input, textarea').val('');
        $('#iconPlace').html('');
    })
});

$(document).ready(function() {
    var isChanged = false;
    var isSubmitted = false;
    var _tempDataBeforeSubmitted;
    var create_netstable = function(netstable) {
        // console.log(netstable);
        var template = "";
        $.each(netstable, function(a, itema) {
            template += "<li class='menu-section header-ssm' style='margin-top:0px'>" +
                "<h4 class='menu-text'>" + itema.nama + "</h4>" +
                "</li>";

            if ((itema.children).length > 0) {
                $.each(itema.children, function(b, itemb) {
                    template += "<li class='menu-section' style='margin-top:0px'>" +
                        "<h4 class='menu-text' style='color:white'>" + itemb.nama + "</h4>" +
                        "<i class='menu-icon ki ki-bold-more-hor icon-md'></i>" +
                        "</li>";

                    if ((itemb.children).length > 0) {
                        $.each(itemb.children, function(c, itemc) {
                            template += "<li ";
                            template += (itemc.children).length > 0 ? "class='menu-item menu-item-submenu  menu-item-open' aria-haspopup='true' data-menu-toggle='hover'>" : "class='menu-item'  aria-haspopup='true'>";
                            template += (itemc.children).length > 0 ? "<a href='javascript:;' class='menu-link menu-toggle' style='background-color: #1e1e2d;'>" : "<a href='" + itemc.link + "' class='menu-link'>";
                            template += itemc.ico +
                                "<span class='menu-text'>" +
                                itemc.nama +
                                "</span>";
                            template += (itemc.children).length > 0 ? "<i class='menu-arrow'></i>" : "";
                            template += "</a>";
                            // console.log(itemc.children)
                            if ((itemc.children).length > 0) {
                                template += "<div class='menu-submenu '>" +
                                    "<i class='menu-arrow'></i>" +
                                    "<ul class='menu-subnav'>";
                                $.each(itemc.children, function(d, itemd) {
                                    template += d === 0 ? "<li class='menu-item  menu-item-parent' aria-haspopup='true'><span class='menu-link'><span class='menu-text'>" + itemd.nama + "</span></span></li>" : "";
                                    if ((itemd.children).length > 0) {
                                        template += "<li class='menu-item  menu-item-submenu menu-item-open' aria-haspopup='true' data-menu-toggle='hover'>" +
                                            "<a href='javascript:;' class='menu-link menu-toggle' style='background-color: #1e1e2d;'>" +
                                            "<i class='menu-bullet menu-bullet-line'>" +
                                            "<span></span>" +
                                            "</i>" +
                                            "<span class='menu-text'>" + itemd.nama + "</span><i class='menu-arrow'></i>" +
                                            "</a>";

                                        template += "<div class='menu-submenu menu-submenu-submenu'>" +
                                            "<i class='menu-arrow'></i>" +
                                            "<ul class='menu-subnav'>";
                                        $.each(itemd.children, function(e, iteme) {
                                            template += "<li class='menu-item ' aria-haspopup='true'>" +
                                                "<a href='" + iteme.link + "' class='menu-link'>" +
                                                "<i class='menu-bullet menu-bullet-dot'>" +
                                                "<span></span>" +
                                                "</i>" +
                                                "<span class='menu-text'>" + iteme.nama + "</span>" +
                                                "</a>" +
                                                "</li>";
                                        })
                                        template += "</ul></div>";
                                        template += "</li>";
                                    } else {
                                        template += "<li class='menu-item ' aria-haspopup='true' >" +
                                            "<a  href='" + itemd.link + "' class='menu-link '>" +
                                            "<i class='menu-bullet menu-bullet-line'>" +
                                            "<span></span>" +
                                            "</i>" +
                                            "<span class='menu-text'>" + itemd.nama + "</span>" +
                                            "</a>" +
                                            "</li>";
                                    }

                                })
                                template += "</ul></div>";
                            }

                            template += "</li>";
                        })
                    }
                })
            }
            $('#menuPlaceDynamic').html(template);
        })
    }

    var updateOutput = function(e) {
        var list = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            // console.log(list.nestable('serialize'))
            var ser = list.nestable('serialize');
            // console.log(ser)
            var stringify = window.JSON.stringify(list.nestable('serialize'));
            create_netstable(ser);
            // var textarea = $('#nestable-output').val();


            // _tempDataBeforeSubmitted = textarea;
            // console.log('pertama', textarea)
            // // console.log('kedua', stringify)

            // if (stringify === _tempDataBeforeSubmitted) {
            // 	console.log('true');
            // }

            // if (stringify !== textarea && textarea !== '') {
            // 	$('#saveChanges').removeClass('d-none');
            // } else {
            // 	$('#saveChanges').addClass('d-none');
            // }
            output.val(stringify); //, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    // activate Nestable for list 1
    $('#nestable').nestable({
            group: 1
        })
        .on('change', updateOutput);

    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));

    $('#nestable-menu').on('click', function(e) {
        e.preventDefault();
        var target = $(this),
            action = target.attr('data-action');
        // console.log(this)
        target.html('');
        if (action === 'expand') {
            $('.dd').nestable('expandAll');
            target.attr('data-action', 'collapse');
            target.html('<i class="fa fa-minus-square"></i> Collapse');
        } else {
            // tutup
            $('.dd').nestable('collapseAll');
            target.attr('data-action', 'expand');
            target.html('<i class="fa fa-plus-square"></i> Expand');
        }
    });

    // const replaceTab = (str, numSpaces = 4) => str.replaceAll('\t', ' '.repeat(numSpaces));

    $('.dd3-edit-handle').on('click', function(e) {
        var listData = e.length ? e : $(e.target),
            data = listData.parent().data();
        // console.log(data);
        $('#idmenu').val(data.id);
        $('#nama').val(data.nama);
        $('#link_menu').val(data.link);
        $('#iconPlace').html(data.ico);
        var ico = data.ico;
        // var str = replaceTab(ico.replace(/\n|\r\n|\r/g, ''));
        $('#icon').val(ico);
        data.status == 'N' ? $('#status').removeAttr('checked') : $('#status').attr('checked', true);
        $('#status').val(data.status);
    })

    $('#status').on('change', function(e) {
        return $(this).val() === 'A' ? $(this).val('N') : $(this).val('A');
    })
});