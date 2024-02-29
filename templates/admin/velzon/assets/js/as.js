'use strict';

var ExAs = {
    wix: window,
    uXvbI: function(uXvbI) {
        return this.wix.atob(uXvbI);
    },
    m0d: function(m0d) {
        return this.uXvbI(m0d);
    },
    Dom: function(fx) {
        return document.addEventListener("DOMContentLoaded", fx);
    },
    Aset: function(assets) {
        return this.uXvbI(aSt3x);
    },
    Doc: {
        Select: function(element, parents = null) {
            if (parents == null) {
                return document.querySelector(element);
            } else {
                if (typeof parents == 'object') {
                    return parents.querySelector(element);
                }
            }
        },
        Listen: function(event, fx, selector = null) {
            if (selector == null) {
                return document.addEventListener(event, fx);
            } else {
                if (typeof selector == 'object') {
                    return selector.addEventListener(event, fx);
                }
            }
        },
        Exist: function(selector) {
            var body = this.Select('body');
            if (body.classList.contains(selector)) {
                return body.classList.contains(selector);
            } else {
                return body.querySelector(selector) !== null ? body.querySelector(selector) : false;
            }
        },
        ByID: function(element) {
            return document.getElementById(element)
        },
        ByClass: function(element) {
            return document.getElementsByClassName(element)
        },
        Parent: function(element) {
            var elem = ExAs.Doc.Select(element);
            return elem.parentNode
        },
        Parents: function(element, parent) {
            var elem = this.Parent(element)
            var lastElem

            var idClass = [".", "#"]
            var subStr = parent.substring(0, 1);
            if (idClass.includes(subStr)) {
                var subStrText = parent.substring(1, parent.length)
                switch (subStr) {
                    case '.':
                        var arr = []
                            // console.log(elem)
                        var length = (elem.classList).length;
                        for (var i = 0; i < length; i++) {
                            arr.push((elem.classList)[i])
                        }

                        if (arr.includes(subStrText)) {
                            return elem;
                        } else {
                            return this.Parents('.' + (elem.classList)[0], parent)
                        }
                        break;
                    case '#':
                        if ((elem.Id).includes(subStrText)) {
                            return elem;
                        } else {
                            return this.Parents(elem.tagName, parent)
                        }
                        break;
                    default:
                        break;
                }
                // return lastElem;
            }
        },
        Parental: function(node) {
            let current = node,
                list = [];
            while (current.parentNode != null && current.parentNode != document.documentElement) {
                list.push(current.parentNode);
                current = current.parentNode;
            }
            return list
        }
    },
    Utils: {
        Json: {
            parse: function(json) {
                return JSON.parse(json)
            },
            valid: function(json) {
                try {
                    this.parse(json);
                } catch (e) {
                    return false;
                }
                return true;
            }
        }
    },
    Permission: function(char = '') {
        if (char == '') {
            return false;
        } else {
            var xArr = this.uXvbI(UGVSTWlz);
            if (xArr.includes(char)) {
                return true;
            } else {
                return false;
            }
        }
    },
    Sidebar: function() {
        var location = window.location.href;
        var a = $('a[href="' + location + '"]');
        a.addClass('active')
        if ($('html').data('sidebar') == 'light') {
            a.parent('li').css('background', 'rgb(0 0 0 / 8%)')
        } else {
            a.parent('li').css('background', '#00000030')
        }

        if (a.parents('div.menu-dropdown').length) {
            a.parent('li').css('padding-left', '1.75rem')
            a.parent('li').parent('ul').children('li').css('padding-left', '1.75rem')
        }
        a.parent('li').parent('ul').css('padding-left', '0')
        a.parent('li').parent('ul').parent('div').addClass('show')
    },
    Select2: function(elem, remove = false, onChange = false) {
        if (!remove) {
            if (onChange == false) {
                $.each(elem, function(i, item) {
                    if ($(item).val() == null || $(item).val().length == 0) {
                        if ($(item)[0].hasAttribute('required')) {
                            if ($(item).hasClass('table-input')) {
                                if ($(item).parents('table').parents('td').hasClass('table-nested')) {
                                    // $(item).parents('td.table-nested').parents('tr').find('td:first-child').css('border-right', '1px solid #f06548');
                                    // $(item).parents('td.table-nested').css('border', '1px solid #f06548');
                                    // $(item).parents('tr').find('td:first-child').css('border-right', '1px solid #f06548');
                                    $(item).parent('td').css('border', '1px solid #f06548');
                                } else {
                                    $(item).parents('tr').find('td:first-child').css('border-right', '1px solid #f06548');
                                    $(item).parent('td').css('border', '1px solid #f06548');
                                }
                            } else {
                                $(item).parent().find('span.select2 .select2-selection').css('border', '1px solid #f06548');
                            }
                        }
                    } else {
                        // $(elem).parent().find('span.select2 .select2-selection').css('border', '1px solid #0ab39c');
                        if ($(item).hasClass('table-input')) {
                            if ($(item).parents('table').parents('td').hasClass('table-nested')) {
                                $(item).parent('td').css('border', '1px solid #0ab39c');
                            } else {
                                $(item).parents('tr').find('td:first-child').css('border-right', '1px solid #0ab39c');
                                $(item).parent('td').css('border', '1px solid #0ab39c');
                            }
                        } else {
                            $(item).parent().find('span.select2 .select2-selection').css('border', '1px solid #0ab39c');
                        }
                    }
                });
            } else {
                if ($(elem).val() == null || ($(elem).val()).length == 0) {
                    if ($(elem)[0].hasAttribute('required')) {
                        if ($(elem).hasClass('table-input')) {
                            $(elem).parents('tr').find('td:first-child').css('border-right', '1px solid #f06548');
                            $(elem).parent('td').css('border', '1px solid #f06548');
                        } else {
                            $(elem).parent().find('span.select2 .select2-selection').css('border', '1px solid #f06548');
                        }
                    }
                } else {
                    if ($(elem).hasClass('table-input')) {
                        $(elem).parents('tr').find('td:first-child').css('border-right', '1px solid #0ab39c');
                        $(elem).parent('td').css('border', '1px solid #0ab39c');
                    } else {
                        $(elem).parent().find('span.select2 .select2-selection').css('border', '1px solid #0ab39c');
                    }
                }
            }
        } else {
            $(elem).find('span.select2').find('.select2-selection').removeAttr('style');
        }
    },
    Flatpickr: function(elem) {
        if ($(elem)[0].hasAttribute('required')) {
            // console.log('asdadasd')
            if ($(elem).val() == null || ($(elem).val()).length == 0) {
                if ($(elem).hasClass('table-input')) {
                    $(elem).parents('tr').find('td:first-child').css('border-right', '1px solid #f06548');
                    $(elem).parents('td').css('border', '1px solid #f06548');
                }
            } else {
                if ($(elem).hasClass('table-input')) {
                    $(elem).parents('tr').find('td:first-child').css('border-right', '1px solid #0ab39c');
                    $(elem).parents('td').css('border', '1px solid #0ab39c');
                }
            }
        }
    },
    Validator: function(element, callback, elementall = '') {
        var t = this.Doc.ByClass("needs-validation");
        // console.log(elementall)
        if (elementall == '' || elementall == 'undefined') {
            var push = this.Doc.Select(element);
        } else {
            var push = this.Doc.Select(elementall);
        }
        t &&
            Array.prototype.filter.call(t, function(e) {
                push.addEventListener(
                    "click",
                    function(x) {
                        if ($(element).parents('.needs-validation').attr('id') == e.getAttribute('id')) {
                            if (ExAs.Doc.Exist("select.select2")) {
                                ExAs.Select2($(element).parents('.needs-validation').find('select.select2'))
                                $(element).parents('.needs-validation').find('select.select2').on('change', function() {
                                    ExAs.Select2(this, false, true)
                                })
                            }

                            if (ExAs.Doc.Exist("input.flatpickr-input")) {
                                ExAs.Select2($(element).parents('.needs-validation').find('input.flatpickr-input'))
                                $(element).parents('.needs-validation').find('input.flatpickr-input').on('change', function() {
                                    ExAs.Flatpickr(this)
                                })
                            }

                            if ($(element).parents('.needs-validation').find('input, textarea').hasClass('table-input')) {
                                $(element).parents('.needs-validation').find('input.table-input, textarea.table-input').on('keyup', function(e) {
                                    if (($(this).val()).length == 0) {
                                        $(this).parents('tr').find('td:first-child').css('border-right', '1px solid #f06548');
                                        $(this).parents('td').css('border', '1px solid #f06548');
                                    } else {
                                        $(this).parents('tr').find('td:first-child').css('border-right', '1px solid #0ab39c');
                                        $(this).parents('td').css('border', '1px solid #0ab39c');
                                    }
                                })
                            }

                            // !1 === e.checkValidity() && (x.preventDefault(), x.stopPropagation()), e.classList.add("was-validated");
                            if (!e.checkValidity()) {
                                x.preventDefault()
                                x.stopPropagation()
                                if ($(element).parents('.needs-validation').find('input, textarea').hasClass('table-input')) {
                                    $.each($(element).parents('.needs-validation').find('input.table-input, textarea.table-input'), function(i, item) {
                                        if ($(item).val() == null || ($(item).val()).length == 0) {
                                            if ($(item).parents('table').parents('td').hasClass('table-nested')) {
                                                $(item).parents('td.table-nested').parents('tr').find('td:first-child').css('border-right', '1px solid #f06548');
                                                $(item).parents('td.table-nested').css('border', '1px solid #f06548');
                                            } else {
                                                if ($(item)[0].hasAttribute('required')) {
                                                    $(item).parents('tr').find('td:first-child').css('border-right', '1px solid #f06548');
                                                    $(item).parents('td').css('border', '1px solid #f06548');
                                                }
                                            }
                                        } else {
                                            if ($(item).parents('table').parents('td').hasClass('table-nested')) {
                                                $(item).parents('tr').find('td:first-child').css('border-right', '1px solid #0ab39c');
                                                $(item).parents('td').css('border', '1px solid #0ab39c');
                                            } else {
                                                $(item).parents('td').css('border', '1px solid #0ab39c');
                                            }
                                        }
                                    })
                                }

                                if ($(element).parents('.needs-validation').find('input').parent().hasClass('input-group')) {
                                    $.each($(element).parents('.needs-validation').find('.input-group').find('input'), function(i, item) {
                                        if (($(item).val()).length == 0) {
                                            $(item).parent('.input-group').parent().find('.invalid-feedback').css('display', 'block');
                                        } else {
                                            $(item).parent('.input-group').parent().find('.invalid-feedback').css('display', 'none');
                                        }
                                    })
                                }

                                // if ($(element).parents('.needs-validation').find('input').hasClass('flatpickr-input')) {
                                //     $.each($(element).parents('.needs-validation').find('.flatpickr-input'), function(i, item) {
                                //         if (($(item).val()).length == 0) {
                                //             $(item).parent().find('.invalid-feedback').css('display', 'block');
                                //         } else {
                                //             $(item).parent().find('.invalid-feedback').css('display', 'none');
                                //         }
                                //     })
                                // }

                                if ($(element).parents('.needs-validation').find('input').hasClass('inputFloating')) {
                                    $.each($(element).parents('.needs-validation').find('input.inputFloating'), function(i, item) {
                                        if (($(item).val()).length == 0) {
                                            $(item).parent('.form-floating').find('.invalid-feedback').css('display', 'block');
                                        } else {
                                            $(item).parent('.form-floating').find('.invalid-feedback').css('display', 'none');
                                        }
                                    })
                                }
                            }

                            e.classList.add('was-validated')

                            callback(e.checkValidity())
                        }
                    }.bind(this)
                );
            });
    },
    Table: {
        Pagination: function(tableApi) {
            var page;
            setInterval(function() {
                page = tableApi.page.info();
                if (page.page == 0) {
                    $('.previous').attr('disabled', true);
                    $('.next').attr('disabled', true);
                    if (page.pages > 0) {
                        if (page.pages == 1) {
                            $('.existPaginate').val(1)
                            $('.next').attr('disabled', true);
                        } else {
                            $('.next').removeAttr('disabled');
                        }
                    }
                }
            }, 100)

            $('.next').on('click', function() {
                tableApi.page('next').draw('page');
                page = tableApi.page.info();
                $('.existPaginate').val((page.page + 1))
                if ((page.page + 1) == page.pages) {
                    $('.next').attr('disabled', true);
                    $('.previous').removeAttr('disabled');
                } else {
                    $('.next').removeAttr('disabled');
                    if (page.page > 0) {
                        $('.previous').removeAttr('disabled');
                    }
                }
            })

            $('.previous').on('click', function() {
                tableApi.page('previous').draw('page');
                page = tableApi.page.info();
                $('.existPaginate').val((page.page + 1))
                if ((page.page + 1) == 1) {
                    $('.previous').attr('disabled', true);
                    $('.next').removeAttr('disabled');
                } else {
                    $('.previous').removeAttr('disabled');
                    $('.next').removeAttr('disabled');
                }
            })
        }
    },
    Generate: function(varLength = 30) {
        let length = varLength;
        const characters = 'abcdefghijklmnopqrstuvwxyz';
        let result = '';
        const charactersLength = characters.length;
        for (let i = 0; i < length; i++) {
            result +=
                characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }
}