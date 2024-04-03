function login(thos) {
    var data = $('#form').serializeArray()
    var e3nCeL0t = ExAs.uXvbI(uXvbI);
    var MoDaD = ExAs.m0d(m0d);
    data.push({
        name: "scrty",
        value: true
    })

    $(thos).attr('disabled', true)
    $(thos).find('.auth-loading').css('display', 'inline-block')
    var chaptcha = $('#captcha').val()

    if (chaptcha !== '') {
        $.ajax({
            url: e3nCeL0t + MoDaD + "auth/authorize",
            data: data,
            method: "POST",
            success: function(response) {
                var x = JSON.parse(response)
                $(thos).removeAttr('disabled')
                $(thos).find('.auth-loading').css('display', 'none')
                if (x.status) {
                    Swal.fire({
                        html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>' + x.header + '</h4><p class="text-muted mx-4 mb-0">' + x.message + '</p></div></div>',
                        showCancelButton: !1,
                        showConfirmButton: !1,
                        timer: 2000
                    }).then((result) => {
                        if (result.isDismissed) {
                            if (x.latest !== '' && x.latest !== null) {
                                // console.log(x);
                                window.location = e3nCeL0t + x.latest;
                            } else {
                                window.location = e3nCeL0t + "dashboard"
                            }
                        }
                    })
                } else {
                    if (x.attempt == 0) {
                        window.location.href = window.location.href;
                    } else {
                        Swal.fire({
                            html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>' + x.header + '</h4><p class="text-muted mx-4 mb-0">' + x.message + '</p></div></div>',
                            showCancelButton: !1,
                            showConfirmButton: !1,
                            timer: 3000
                        })
                        document.querySelector(".captcha-image").src = 'chaptcha?' + Date.now();
                    }
                }
            }
        });
    } else {
        $(thos).removeAttr('disabled')
        $(thos).find('.auth-loading').css('display', 'none')
        Swal.fire({
            html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Chaptcha Error</h4><p class="text-muted mx-4 mb-0">Silahkan Isi Captcha Terlebih Dahulu</p></div></div>',
            // html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Chaptcha Error</h4><p class="text-muted mx-4 mb-0">Silahkan Ulangi Recaptcha</p></div></div>',
            showCancelButton: !1,
            showConfirmButton: !1,
            timer: 3000
        })
        document.querySelector(".captcha-image").src = 'chaptcha?' + Date.now();
    }
}

$('.refresh-captcha').on('click', function() {
    document.querySelector(".captcha-image").src = 'chaptcha?' + Date.now();
});

$('#form').on('keypress', function(e) {
    if (e.which == 13) {
        login()
    }
});

if (getCookie('mission') == '') {
    document.getElementById('password').addEventListener('keypress', (e) => {
        if (e.getModifierState('CapsLock')) {
            console.log("Caps Lock is on");
        }
    });
} else {
    var cd = getCookie('mission'),
        time = parseInt(cd);

    setInterval(function() {
        if (time == 0) {
            window.location.href = window.location.href;
        } else {
            time = time - 1;
            setCookie('mission', time, time)
            $('.cooldown').html(`${time} seconds`)
        }
    }, 1000)
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}