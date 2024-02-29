'use strict';

var ExAsReport = (function () {
    var dateInit = function () {
        var weekly = new flatpickr('#dari_weekly', {
            plugins: [new rangePlugin({ input: '#sampai_weekly' })]
        });

        var comp = new flatpickr('#dari_compi', {
            plugins: [new rangePlugin({ input: '#sampai_compi' })]
        });

        $('[data-pickr="flatpickr"]').on('focus', ({ currentTarget }) => $(currentTarget).blur())
        $('[data-pickr="flatpickr"]').prop('readonly', false)

        $('[type="reset"]').on('click', function () {
            // $('span.flatpickr-day').each(function () {
            //     if ($(this).hasClass('selected')) {
            //         $(this).removeClass('selected').removeClass('startRange').removeClass('endRange')
            //     }
            //     if ($(this).hasClass('inRange')) {
            //         $(this).removeClass('inRange')
            //     }
            // })

            $(this).parents('form').find('[data-pickr="flatpickr"]').each(function () {
                this.shouldClear = true;
                if ($(this).attr('id') == 'dari_weekly' || $(this).attr('id') == 'sampai_weekly') {
                    weekly.clear();
                } else {
                    comp.clear();
                }
                this.shouldClear = false;
            })
        })
    }

    var init = function () {
        $('select.select2').each(function () {
            var label = $(this).closest('div')
            label = label.find('label').text()
            label = label.replace('*', '')
            $(this).select2({
                placeholder: "Silahkan Pilih " + label,
                allowClear: true,
                dropdownParent: $(this).closest('div')
            });
        });
    }
    return {
        run: function () {
            dateInit();
            init();
        }
    }
})(jQuery);

ExAs.Dom(ExAsReport.run());