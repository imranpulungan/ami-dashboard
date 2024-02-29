'use strict';

var ExAl = {
    Toast: {
        CLose: function() {
            $('.tutup').on('click', function() {
                Swal.fire({
                    position: 'top',
                    html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/nxaaasqe.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Tutup Modal?</h4><p class="text-muted mx-4 mb-0">Apabila modal ditutup, data yang sudah terisi akan hilang, apakah anda yakin?</p></div></div>',
                    showCancelButton: 1,
                    showConfirmButton: 1,
                    allowOutsideClick: !1,
                    allowEscapeKey: !1,
                    focusConfirm: false,
                    buttonsStyling: false,
                    confirmButtonClass: "btn btn-primary w-xs me-2 mb-1",
                    confirmButtonText: '<i class="ri-logout-box-r-line label-icon align-middle fs-16 me-2"></i> Ya, Tutup Modal',
                    cancelButtonClass: "btn btn-danger w-xs me-2 mb-1",
                    cancelButtonText: '<i class="ri-close-line label-icon align-middle fs-16 me-2"></i> Tidak, Lanjutkan'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var form = $(this).parents('.modal').find('form');
                        form.find('input, select, textarea').val('');
                        form.find('select').val('').trigger('change');
                        form.removeClass('was-validated')
                        ExAs.Select2(form, true)
                        $(this).parents('.modal').modal('hide')
                    }
                })
            });
        },
        Delete: function(option = {}, callback) {
            var a = {
                icon: "https://cdn.lordicon.com/gsqxdxog.json",
                header: "Anda Yakin?",
                body: "Apakah anda yakin ingin menghapus data tersebut?",
                btn: "Ya, Hapus"
            }

            var _ = (e) => Object.prototype.hasOwnProperty.call(a, e),
                p = {},
                X = (e) => {
                    for (const n in a) {
                        if (e[n]) {
                            p[n] = e[n]
                        } else {
                            p[n] = a[n]
                        }
                    }
                    return p
                },
                y = X(option);

            Swal.fire({
                position: 'top',
                html: '<div class="mt-3"><lord-icon src="' + y.icon + '" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>' + y.header + '</h4><p class="text-muted mx-4 mb-0">' + y.body + '</p></div></div>',
                showCancelButton: 1,
                showConfirmButton: 1,
                allowOutsideClick: !1,
                allowEscapeKey: !1,
                focusConfirm: false,
                buttonsStyling: false,
                confirmButtonClass: "btn btn-primary w-xs me-2 mb-1",
                confirmButtonText: '<i class="ri-delete-bin-2-line label-icon align-middle fs-16 me-2"></i> ' + y.btn,
                cancelButtonClass: "btn btn-danger w-xs me-2 mb-1",
                cancelButtonText: '<i class="ri-close-line label-icon align-middle fs-16 me-2"></i> Batal'
            }).then((result) => {
                callback(result.isConfirmed)
            })
        },
        Success: function(header = '', body = '', callback = null) {
            Swal.fire({
                position: 'top',
                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>' + header + '</h4><p class="text-muted mx-4 mb-0">' + body + '</p></div></div>',
                showCancelButton: !1,
                showConfirmButton: !1,
                timer: 3000
            }).then((result) => {
                if (typeof callback === 'function') {
                    callback(result)
                }
            })
        },
        Failed: function(header = '', body = '', callback = null) {
            Swal.fire({
                position: 'top',
                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>' + header + '</h4><p class="text-muted mx-4 mb-0">' + body + '</p></div></div>',
                showCancelButton: !1,
                showConfirmButton: !1,
                timer: 3000
            }).then((result) => {
                if (typeof callback === 'function') {
                    callback(result)
                }
            })
        }
    },
    Modal: {
        Show: function(elem) {
            var form = $(elem).find('form');
            if (form !== 'undefined') {
                ExAs.Select2(form, true)
                form.removeClass('was-validated')
            }

            $(elem).modal('show');
        },
        Close: function(elem, emptyAll = false) {
            var form = $(elem).find('form');
            if (emptyAll) {
                if (form !== 'undefined') {
                    form.find('input, select, textarea').val('');
                    form.find('select').val('').trigger('change');
                }
            }

            ExAs.Select2(form, true)
            form.removeClass('was-validated')
            $(elem).modal('hide');
        }
    },
    Loading: {
        Table: {
            Show: function() {
                // $('.table-progress').show();
                $('.table-progress').css('display', 'flex');
            },
            Hide: function() {
                // $('.table-progress').removeAttr('style');
                $('.table-progress').css('display', 'none');
                // $('.table-progress').hide();
            }
        }
    },
    isRequired: function() {
        // var isRequired = $('input, select, textarea')[0].hasAttribute('required');
        // console.log(isRequired)
        var elem = $('input, select, textarea');
        $.each(elem, function(i, item) {
            var parents = $(item).parent()
            if ($(parents).find('label').length > 0) {
                var star = $(parents).find('label').text(function(index, text) {
                    return text.replace("*", "");
                }).text();
                if ($(item)[0].hasAttribute('required')) {
                    $(parents).find('label').html(star + ' <span class="text-danger">*</span>');
                } else {
                    $(parents).find('label').html(star);
                }
            }
        })
    },
    autoResize: function() {
        var multipleFields = document.querySelectorAll('textarea.autoresize');
        for (var i = 0; i < multipleFields.length; i++) {
            multipleFields[i].addEventListener('input', function() {
                this.style.overflow = "hidden";
                this.style.height = "auto";
                this.style.height = this.scrollHeight + "px";
            }, 0);

            // multipleFields[i].addEventListener('focus', function () {
            //     this.style.overflow = "hidden";
            //     this.style.height = "auto";
            //     this.style.height = this.scrollHeight + "px";
            // }, 0);

            multipleFields[i].addEventListener('keypress', function(event) {
                if (event.keyCode == 13) {
                    event.preventDefault();
                }
            }, 0)
        }
    },
    focusAutoResize: function(elem) {
        var multipleFields = elem.querySelectorAll('textarea.autoresize');
        for (var i = 0; i < multipleFields.length; i++) {
            multipleFields[i].style.overflow = "hidden";
            if ((multipleFields[i].value).length > 0) {
                var scrollHeight = multipleFields[i].scrollHeight;
                multipleFields[i].style.height = scrollHeight + "px";
            }
        }
    },
    run: function() {
        this.Toast.CLose();
    }
}

ExAs.Dom(ExAl.run())
ExAs.Dom(ExAs.Sidebar())
ExAs.Dom(ExAl.isRequired())
ExAs.Dom(ExAl.autoResize());
ExAs.Dom(function() {
    setInterval(function() {
        // Date
        var date = new Date();
        let hari = (date.getDate()) < 10 ? '0' + date.getDate() : date.getDate();
        let bulan = (date.getMonth() + 1) < 10 ? '0' + (date.getMonth() + 1) : (date.getMonth() + 1);
        let tahun = date.getFullYear();
        var month = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]
        var days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]
        var dt = days[date.getDay()] + ', ' + hari + ' ' + month[bulan - 1] + ' ' + tahun
        if ($('#dateGlobal').text() !== dt) {
            $('#dateGlobal').html(dt)
        }

        // Time
        var hours = date.getHours()
        var minutes = date.getMinutes()
        var seconds = date.getSeconds()
        hours = hours < 10 ? '0' + hours : hours;
        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;
        $('#timeGlobal').html(hours + ':' + minutes + ':' + seconds)
    }, 100)
});