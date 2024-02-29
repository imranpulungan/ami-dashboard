<div class="form-group">
    <input type="text" class="form-control" placeholder="Cari Icon Flaticon" id="searchFlaticon" />
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#searchFlaticon').on('keyup', function(e) {
            e.preventDefault();
            var value = $(this).val().toLowerCase();

            $(".iconFlatName").filter(function() {
                $(this).parents('.chooseThisIcon').addClass('d-none');
                $('.card-body').find('.separator').addClass('d-none');
                // $(this).parents('.sectionSearch').addClass('d-none');
                // $(this).parent('.searchRole').addClass('d-none');
                if ($(this).text().toLowerCase().indexOf(value) > -1) {
                    $(this).parents('.chooseThisIcon').removeClass('d-none');
                    $('.card-body').find('.separator').removeClass('d-none');
                    // $(this).parents('.sectionSearch').removeClass('d-none');
                }
                // $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        $('.chooseThisIcon').on('click', function(event) {
            var $thisIcon = $(this);
            var icon = $thisIcon.find('.iconStartHere');
            var iconHtml = icon.html();
            var iconRemoved = icon.children().removeClass('icon-2x text-dark-50').addClass('menu-icon').parent().html();

            $thisIcon.find('.iconStartHere').html(iconHtml)
            // console.log('HTML', iconHtml)
            // console.log('Removed', iconRemoved)

            $('#icon').val(iconRemoved);
            $('#iconPlace').html(iconHtml);

            $thisIcon.parents('#modalIcon').modal('hide');
        })
    })
</script>
<div class="card-body">
    <div class="row">
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-email-black-circular-button"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-email-black-circular-button</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-map"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-map</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-alert-off"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-alert-off</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-alert"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-alert</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-computer"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-computer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-responsive"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-responsive</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-presentation"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-presentation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-arrows"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-arrows</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-rocket"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-rocket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-reply"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-reply</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-gift"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-gift</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-confetti"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-confetti</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-piggy-bank"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-piggy-bank</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-support"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-support</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-delete"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-delete</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-eye"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-eye</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-multimedia"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-multimedia</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-whatsapp"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-whatsapp</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-multimedia-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-multimedia-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-email"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-email</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-presentation-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-presentation-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-trophy"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-trophy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-psd"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-psd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-layer"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-layer</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-doc"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-doc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-file"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-file</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-network"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-network</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-bus-stop"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-bus-stop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-globe"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-globe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-upload"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-upload</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-squares"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-squares</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-technology"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-technology</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-up-arrow"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-up-arrow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-browser"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-browser</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-speech-bubble"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-speech-bubble</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-coins"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-coins</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-open-box"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-open-box</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-speech-bubble-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-speech-bubble-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-attachment"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-attachment</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-photo-camera"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-photo-camera</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-skype-logo"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-skype-logo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-linkedin-logo"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-linkedin-logo</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-twitter-logo"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-twitter-logo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-facebook-letter-logo"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-facebook-letter-logo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-calendar-with-a-clock-time-tools"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-calendar-with-a-clock-time-tools</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-youtube"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-youtube</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-add-circular-button"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-add-circular-button</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-more-v2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-more-v2</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-search"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-search</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-search-magnifier-interface-symbol"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-search-magnifier-interface-symbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-questions-circular-button"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-questions-circular-button</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-refresh"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-refresh</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-logout"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-logout</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-event-calendar-symbol"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-event-calendar-symbol</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-laptop"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-laptop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-tool"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-tool</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-graphic"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-graphic</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-symbol"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-symbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-graphic-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-graphic-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-clock"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-clock</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-squares-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-squares-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-black"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-black</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-book"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-book</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-cogwheel"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-cogwheel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-exclamation"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-exclamation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-add-label-button"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-add-label-button</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-delete-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-delete-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-more"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-more</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-warning-sign"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-warning-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-calendar"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-calendar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-instagram-logo"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-instagram-logo</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-linkedin"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-linkedin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-facebook-logo-button"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-facebook-logo-button</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-twitter-logo-button"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-twitter-logo-button</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-cancel"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-cancel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-exclamation-square"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-exclamation-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-buildings"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-buildings</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-danger"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-danger</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-technology-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-technology-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-letter-g"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-letter-g</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-circle"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-pin"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-pin</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-close"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-close</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-clock-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-clock-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-apps"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-apps</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-user"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-user</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-menu-button"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-menu-button</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-settings"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-settings</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-home"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-home</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-clock-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-clock-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-lifebuoy"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-lifebuoy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-cogwheel-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-cogwheel-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-paper-plane"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-paper-plane</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-statistics"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-statistics</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-diagram"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-diagram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-line-graph"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-line-graph</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-customer"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-customer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-visible"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-visible</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-shopping-basket"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-shopping-basket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-price-tag"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-price-tag</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-businesswoman"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-businesswoman</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-medal"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-medal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-like"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-like</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-edit"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-edit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-avatar"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-avatar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-download"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-download</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-home-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-home-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-mail"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-mail</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-mail-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-mail-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-warning"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-warning</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-cart"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-cart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-bag"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-bag</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-pie-chart"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-pie-chart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-graph"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-graph</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-chat"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-chat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-envelope"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-envelope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-chat-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-chat-1</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-background"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-background</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-file-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-file-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface-4"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface-4</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-multimedia-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-multimedia-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-list"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-list</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-time"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-time</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-profile"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-profile</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-imac"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-imac</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-medical"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-music"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-music</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-plus"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-plus</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-exclamation-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-exclamation-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-info"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-info</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-menu-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-menu-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-menu-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-menu-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-share"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-share</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface-5"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface-5</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-signs"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-signs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-tabs"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-tabs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-multimedia-4"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-multimedia-4</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-upload-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-upload-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-web"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-web</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-placeholder"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-placeholder</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-placeholder-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-placeholder-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-layers"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-layers</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface-6"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface-6</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface-7"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface-7</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface-8"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface-8</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-tool-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-tool-1</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-settings-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-settings-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-alarm"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-alarm</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-search-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-search-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-time-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-time-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-stopwatch"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-stopwatch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-folder"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-folder</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-folder-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-folder-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-folder-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-folder-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-folder-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-folder-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-file-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-file-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-list-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-list-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-list-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-list-2</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-calendar-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-calendar-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-time-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-time-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface-9"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface-9</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-app"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-app</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-suitcase"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-suitcase</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-grid-menu-v2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-grid-menu-v2</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-more-v6"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-more-v6</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-more-v5"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-more-v5</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-add"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-add</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-multimedia-5"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-multimedia-5</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-more-v4"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-more-v4</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-placeholder-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-placeholder-2</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-map-location"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-map-location</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-users"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-users</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-profile-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-profile-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-lock"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-lock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-sound"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-sound</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-star"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-star</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-placeholder-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-placeholder-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-bell"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-bell</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-paper-plane-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-paper-plane-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-users-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-users-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-more-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-more-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-up-arrow-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-up-arrow-1</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-grid-menu"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-grid-menu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-alarm-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-alarm-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-earth-globe"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-earth-globe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-alert-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-alert-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-internet"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-internet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-user-ok"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-user-ok</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-user-add"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-user-add</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-user-settings"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-user-settings</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-truck"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-truck</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-analytics"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-analytics</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-notes"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-notes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-tea-cup"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-tea-cup</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-exclamation-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-exclamation-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-technology-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-technology-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-location"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-location</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-edit-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-edit-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-home-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-home-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-dashboard"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-dashboard</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-information"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-information</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-light"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-light</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-car"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-car</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-business"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-business</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-squares-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-squares-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-signs-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-signs-1</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-mark"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-mark</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-squares-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-squares-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-comment"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-comment</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-shapes"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-shapes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-clipboard"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-clipboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-squares-4"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-squares-4</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-delete-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-delete-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-bell-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-bell-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-list-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-list-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-infinity"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-infinity</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-chat-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-chat-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-calendar-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-calendar-2</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-signs-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-signs-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-time-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-time-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-calendar-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-calendar-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface-10"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface-10</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-interface-11"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-interface-11</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-folder-4"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-folder-4</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-alert-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-alert-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-cogwheel-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-cogwheel-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-graphic-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-graphic-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-rotate"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-rotate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-feed"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-feed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-safe-shield-protection"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-safe-shield-protection</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-security"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-security</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-download-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-download-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-pie-chart-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-pie-chart-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon-notepad"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon-notepad</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-notification"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-notification</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-settings"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-settings</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-search"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-search</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-delete"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-delete</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-psd"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-psd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-list"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-list</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-box"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-box</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-download"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-download</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-shield"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-shield</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-paperplane"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-paperplane</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-avatar"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-avatar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-bell"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-bell</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-fax"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-fax</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-chart2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-chart2</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-supermarket"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-supermarket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-phone"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-phone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-envelope"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-envelope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-pin"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-pin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-chat"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-chat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-chart"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-chart</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-infographic"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-infographic</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-grids"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-grids</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-menu"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-menu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-plus"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-list-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-list-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-talk"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-talk</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-file"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-file</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-user"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-user</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-line-chart"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-line-chart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-percentage"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-percentage</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-menu-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-menu-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-paper-plane"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-paper-plane</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-menu-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-menu-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-shopping-cart"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-shopping-cart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-pie-chart"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-pie-chart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-box-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-box-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-map"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-map</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-favourite"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-favourite</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-checking"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-checking</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-safe"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-safe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-heart-rate-monitor"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-heart-rate-monitor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-layers"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-layers</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-delivery-package"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-delivery-package</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-sms"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-sms</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-image-file"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-image-file</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-plus-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-plus-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-send"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-send</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-graphic-design"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-graphic-design</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-cup"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-cup</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-website"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-website</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-gift"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-gift</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-chronometer"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-chronometer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-browser"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-browser</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-digital-marketing"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-digital-marketing</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-calendar"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-calendar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-calendar-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-calendar-1</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-rocket"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-rocket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-analytics"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-analytics</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-pie-chart-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-pie-chart-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-pie-chart-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-pie-chart-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-analytics-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-analytics-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-google-drive-file"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-google-drive-file</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-pie-chart-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-pie-chart-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-poll-symbol"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-poll-symbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-gear"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-gear</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-magnifier-tool"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-magnifier-tool</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-add"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-add</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-cube"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-cube</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-gift-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-gift-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-list-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-list-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-shopping-cart-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-shopping-cart-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-calendar-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-calendar-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-laptop"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-laptop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-cube-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-cube-1</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-layers-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-layers-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-chat-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-chat-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-copy"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-copy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-paper"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-paper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-hospital"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-hospital</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-calendar-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-calendar-3</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-speaker"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-speaker</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-pie-chart-4"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-pie-chart-4</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-schedule"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-schedule</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-expand"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-expand</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-menu-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-menu-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-download-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-download-1</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-help"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-help</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-list-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-list-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-notepad"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-notepad</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-graph"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-graph</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-browser-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-browser-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-photograph"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-photograph</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-browser-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-browser-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-hourglass"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-hourglass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-mail"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-mail</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-cardiogram"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-cardiogram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-document"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-document</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-contract"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-contract</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-graph-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-graph-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-graphic"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-graphic</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-position"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-position</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-soft-icons"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-soft-icons</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-circle-vol-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-circle-vol-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-rocket-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-rocket-1</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-lorry"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-lorry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-cd"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-cd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-file-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-file-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-reload"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-reload</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-placeholder"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-placeholder</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-refresh"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-refresh</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-medical-records"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-medical-records</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-rectangular"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-rectangular</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-medical-records-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-medical-records-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-indent-dots"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-indent-dots</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-search-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-search-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-edit"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-edit</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-new-email"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-new-email</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-calendar-4"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-calendar-4</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-console"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-console</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-open-text-book"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-open-text-book</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-download-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-download-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-zig-zag-line-sign"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-zig-zag-line-sign</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-tools-and-utensils"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-tools-and-utensils</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-crisp-icons"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-crisp-icons</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-trash"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-trash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-lock"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-lock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-bell-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-bell-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-setup"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-setup</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-menu-4"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-menu-4</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-architecture-and-city"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-architecture-and-city</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-shelter"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-shelter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-add-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-add-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-checkmark"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-checkmark</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-circular-arrow"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-circular-arrow</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-user-outline-symbol"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-user-outline-symbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-rhombus"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-rhombus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-crisp-icons-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-crisp-icons-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-soft-icons-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-soft-icons-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-hexagonal"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-hexagonal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-time"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-time</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-contrast"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-contrast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-telegram-logo"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-telegram-logo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-hangouts-logo"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-hangouts-logo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-analytics-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-analytics-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-wifi"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-wifi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-protected"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-protected</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-drop"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-drop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-mail-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-mail-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-delivery-truck"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-delivery-truck</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-writing"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-writing</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-calendar-5"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-calendar-5</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-protection"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-protection</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-calendar-6"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-calendar-6</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-calendar-7"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-calendar-7</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-calendar-8"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-calendar-8</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-bell-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-bell-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-hourglass-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-hourglass-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-next"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-next</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-chat-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-chat-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-correct"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-correct</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-photo-camera"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-photo-camera</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-fast-next"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-fast-next</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-fast-back"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-fast-back</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-down"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-down</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-back"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-back</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-up"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-arrow-down"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-arrow-up"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-arrow-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-accept"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-accept</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-sort"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-sort</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-arrow"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-arrow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-back-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-back-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-add-square"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-add-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-quotation-mark"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-quotation-mark</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-clip-symbol"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-clip-symbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-check-mark"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-check-mark</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-folder"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-folder</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-cancel-music"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-cancel-music</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-cross"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-cross</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-pen"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-pen</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-email"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-email</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-graph-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-graph-2</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-open-box"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-open-box</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-files-and-folders"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-files-and-folders</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-ui"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-ui</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-sheet"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-sheet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-dashboard"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-dashboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-user-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-user-1</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-group"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-group</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-black-back-closed-envelope-shape"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-black-back-closed-envelope-shape</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-left-arrow"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-left-arrow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-sort-alphabetically"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-sort-alphabetically</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-sort-down"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-sort-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-rubbish-bin"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-rubbish-bin</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-rubbish-bin-delete-button"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-rubbish-bin-delete-button</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-calendar-9"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-calendar-9</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-tag"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-tag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-refresh-button"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-refresh-button</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-refresh-arrow"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-refresh-arrow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-reload-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-reload-1</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-refresh-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-refresh-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-left-arrow-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-left-arrow-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-reply"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-reply</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-reply-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-reply-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-printer"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-printer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-print"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-print</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-shrink"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-shrink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-resize"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-resize</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-arrow-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-arrow-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-size"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-size</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-arrow-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-arrow-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-cancel"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-cancel</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-exclamation"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-exclamation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-line"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-line</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-warning"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-warning</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-information"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-information</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-layers-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-layers-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-file-2"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-file-2</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-bell-3"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-bell-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-bell-4"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-bell-4</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-bell-5"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-bell-5</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-bell-alarm-symbol"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-bell-alarm-symbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-world"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-world</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-graphic-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-graphic-1</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-send-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-send-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-location"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-location</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-pin-1"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-pin-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-start-up"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-start-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 flaticon2-right-arrow"></i>
                </div>
                <div class="text-muted iconFlatName">flaticon2-right-arrow</div>
            </div>
        </div>
    </div>
</div>