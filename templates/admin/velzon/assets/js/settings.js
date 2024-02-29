'use strict';

var ExAsUser = (function() {
    var MAIN = 'master/user/';
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);

    var ses = ExAs.uXvbI(all_session);
    var sSion = JSON.parse(ses);
    /**
     * Transaction
     */

    var Transaction = function() {
        inputEmailTrigger();
        settingsTrigger();
        settingsClickTrigger();
    }

    var inputEmailTrigger = function() {
        $(".email").on("input", function() {
            this.value = this.value.replace("@", "");
            this.value = this.value.replace(" ", "");
        })
    }

    var settingsClickTrigger = function() {
        $("#user_settings_btn").on("click", function() {
            $('#password_settings').val('');
            if (sSion['role'] != 'RS003') {
                $('#email_settings').val(sSion['email'].split('@')[0]);
            } else {
                $('.email-settings').hide();
                $('#email_settings').removeAttr('required');
            }
            console.log(sSion);

            ExAl.Modal.Show('#modalSettings');
        });
    }

    var settingsTrigger = function() {
        if (ExAs.Doc.Exist("#form_settings")) {

            ExAs.Validator("#submitSettings", function(isValid) {
                if (isValid == true) {
                    // settingsTrigger();
                    var _input = $("#form_settings").serializeArray();
                    _input.push({ name: "scrty", value: true })

                    $(this).addClass("spinner spinner-white spinner-right disabled");
                    $("#form_settings button").attr("disabled", "disabled");

                    $.ajax({
                        url: e3nCeL0t + MoDaD + MAIN + "settings",
                        method: "POST",
                        data: $.param(_input),
                        success: function(response) {
                            $("#submitSettings").removeClass("spinner spinner-white spinner-right disabled");
                            $("#form_settings button").removeAttr("disabled");

                            if (ExAs.Utils.Json.valid(response)) {
                                var res = JSON.parse(response);
                                // $('#modal_header_settings').html(modal_header);
                                if (res.status) {
                                    ExAl.Toast.Success(res.header, res.message, function(result) {
                                        if (result.isDismissed) {
                                            // loadData();
                                            ExAl.Modal.Close('#modalSettings', true);
                                            $('#form_settings').trigger('reset');
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
                    $("#submitSettings").removeClass("spinner spinner-white spinner-right disabled");
                    $("#form_settings button").removeAttr("disabled");
                }
            });
        }
    }

    return {
        run: function() {
            Transaction();
        },
    }
})();

ExAs.Dom(ExAsUser.run())