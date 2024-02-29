<div class="form-group">
    <input type="text" class="form-control" placeholder="Cari Icon Line Awesome" id="searchLineIcon" />
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#searchLineIcon').on('keyup', function(e) {
            e.preventDefault();
            var value = $(this).val().toLowerCase();

            $(".iconLAName").filter(function() {
                $(this).parents('.chooseThisIcon').addClass('d-none');

                if ($(this).text().toLowerCase().indexOf(value) > -1) {
                    $(this).parents('.chooseThisIcon').removeClass('d-none');
                }
            });
        });

        $('.chooseThisIcon').on('click', function(event) {
            var $thisIcon = $(this);
            var icon = $thisIcon.find('.iconStartHere');
            var iconHtml = icon.html();
            var iconRemoved = icon.children().removeClass('icon-xl').addClass('menu-icon').parent().html();

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
                    <i class="icon-xl la la-500px"></i>
                </div>
                <div class="text-muted iconLAName">la-500px</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-accessible-icon"></i>
                </div>
                <div class="text-muted iconLAName">fab la-accessible-icon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-accusoft"></i>
                </div>
                <div class="text-muted iconLAName">fab la-accusoft</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-acquisitions-incorporated"></i>
                </div>
                <div class="text-muted iconLAName">fab la-acquisitions-incorporated</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ad"></i>
                </div>
                <div class="text-muted iconLAName">la-ad</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-address-book"></i>
                </div>
                <div class="text-muted iconLAName">la-address-book</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-address-card"></i>
                </div>
                <div class="text-muted iconLAName">la-address-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-adjust"></i>
                </div>
                <div class="text-muted iconLAName">la-adjust</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-adn"></i>
                </div>
                <div class="text-muted iconLAName">fab la-adn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-adobe"></i>
                </div>
                <div class="text-muted iconLAName">fab la-adobe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-adversal"></i>
                </div>
                <div class="text-muted iconLAName">fab la-adversal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-affiliatetheme"></i>
                </div>
                <div class="text-muted iconLAName">fab la-affiliatetheme</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-air-freshener"></i>
                </div>
                <div class="text-muted iconLAName">la-air-freshener</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-airbnb"></i>
                </div>
                <div class="text-muted iconLAName">fab la-airbnb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-algolia"></i>
                </div>
                <div class="text-muted iconLAName">fab la-algolia</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-align-center"></i>
                </div>
                <div class="text-muted iconLAName">la-align-center</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-align-justify"></i>
                </div>
                <div class="text-muted iconLAName">la-align-justify</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-align-left"></i>
                </div>
                <div class="text-muted iconLAName">la-align-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-align-right"></i>
                </div>
                <div class="text-muted iconLAName">la-align-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-alipay"></i>
                </div>
                <div class="text-muted iconLAName">fab la-alipay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-allergies"></i>
                </div>
                <div class="text-muted iconLAName">la-allergies</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-amazon"></i>
                </div>
                <div class="text-muted iconLAName">fab la-amazon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-amazon-pay"></i>
                </div>
                <div class="text-muted iconLAName">fab la-amazon-pay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ambulance"></i>
                </div>
                <div class="text-muted iconLAName">la-ambulance</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-american-sign-language-interpreting"></i>
                </div>
                <div class="text-muted iconLAName">la-american-sign-language-interpreting</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-amilia"></i>
                </div>
                <div class="text-muted iconLAName">fab la-amilia</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-anchor"></i>
                </div>
                <div class="text-muted iconLAName">la-anchor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-android"></i>
                </div>
                <div class="text-muted iconLAName">fab la-android</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-angellist"></i>
                </div>
                <div class="text-muted iconLAName">fab la-angellist</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-angle-double-down"></i>
                </div>
                <div class="text-muted iconLAName">la-angle-double-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-angle-double-left"></i>
                </div>
                <div class="text-muted iconLAName">la-angle-double-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-angle-double-right"></i>
                </div>
                <div class="text-muted iconLAName">la-angle-double-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-angle-double-up"></i>
                </div>
                <div class="text-muted iconLAName">la-angle-double-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-angle-down"></i>
                </div>
                <div class="text-muted iconLAName">la-angle-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-angle-left"></i>
                </div>
                <div class="text-muted iconLAName">la-angle-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-angle-right"></i>
                </div>
                <div class="text-muted iconLAName">la-angle-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-angle-up"></i>
                </div>
                <div class="text-muted iconLAName">la-angle-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-angry"></i>
                </div>
                <div class="text-muted iconLAName">la-angry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-angrycreative"></i>
                </div>
                <div class="text-muted iconLAName">fab la-angrycreative</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-angular"></i>
                </div>
                <div class="text-muted iconLAName">fab la-angular</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ankh"></i>
                </div>
                <div class="text-muted iconLAName">la-ankh</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-app-store"></i>
                </div>
                <div class="text-muted iconLAName">fab la-app-store</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-app-store-ios"></i>
                </div>
                <div class="text-muted iconLAName">fab la-app-store-ios</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-apper"></i>
                </div>
                <div class="text-muted iconLAName">fab la-apper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-apple"></i>
                </div>
                <div class="text-muted iconLAName">fab la-apple</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-apple-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-apple-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-apple-pay"></i>
                </div>
                <div class="text-muted iconLAName">fab la-apple-pay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-archive"></i>
                </div>
                <div class="text-muted iconLAName">la-archive</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-archway"></i>
                </div>
                <div class="text-muted iconLAName">la-archway</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-alt-circle-down"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-alt-circle-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-alt-circle-left"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-alt-circle-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-alt-circle-right"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-alt-circle-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-alt-circle-up"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-alt-circle-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-circle-down"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-circle-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-circle-left"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-circle-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-circle-right"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-circle-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-circle-up"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-circle-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-down"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-left"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-right"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-up"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrows-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-arrows-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrows-alt-h"></i>
                </div>
                <div class="text-muted iconLAName">la-arrows-alt-h</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrows-alt-v"></i>
                </div>
                <div class="text-muted iconLAName">la-arrows-alt-v</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-artstation"></i>
                </div>
                <div class="text-muted iconLAName">fab la-artstation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-assistive-listening-systems"></i>
                </div>
                <div class="text-muted iconLAName">la-assistive-listening-systems</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-asterisk"></i>
                </div>
                <div class="text-muted iconLAName">la-asterisk</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-asymmetrik"></i>
                </div>
                <div class="text-muted iconLAName">fab la-asymmetrik</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-at"></i>
                </div>
                <div class="text-muted iconLAName">la-at</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-atlas"></i>
                </div>
                <div class="text-muted iconLAName">la-atlas</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-atlassian"></i>
                </div>
                <div class="text-muted iconLAName">fab la-atlassian</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-atom"></i>
                </div>
                <div class="text-muted iconLAName">la-atom</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-audible"></i>
                </div>
                <div class="text-muted iconLAName">fab la-audible</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-audio-description"></i>
                </div>
                <div class="text-muted iconLAName">la-audio-description</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-autoprefixer"></i>
                </div>
                <div class="text-muted iconLAName">fab la-autoprefixer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-avianex"></i>
                </div>
                <div class="text-muted iconLAName">fab la-avianex</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-aviato"></i>
                </div>
                <div class="text-muted iconLAName">fab la-aviato</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-award"></i>
                </div>
                <div class="text-muted iconLAName">la-award</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-aws"></i>
                </div>
                <div class="text-muted iconLAName">fab la-aws</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-baby"></i>
                </div>
                <div class="text-muted iconLAName">la-baby</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-baby-carriage"></i>
                </div>
                <div class="text-muted iconLAName">la-baby-carriage</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-backspace"></i>
                </div>
                <div class="text-muted iconLAName">la-backspace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-backward"></i>
                </div>
                <div class="text-muted iconLAName">la-backward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bacon"></i>
                </div>
                <div class="text-muted iconLAName">la-bacon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-balance-scale"></i>
                </div>
                <div class="text-muted iconLAName">la-balance-scale</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-balance-scale-left"></i>
                </div>
                <div class="text-muted iconLAName">la-balance-scale-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-balance-scale-right"></i>
                </div>
                <div class="text-muted iconLAName">la-balance-scale-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ban"></i>
                </div>
                <div class="text-muted iconLAName">la-ban</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-band-aid"></i>
                </div>
                <div class="text-muted iconLAName">la-band-aid</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-bandcamp"></i>
                </div>
                <div class="text-muted iconLAName">fab la-bandcamp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-barcode"></i>
                </div>
                <div class="text-muted iconLAName">la-barcode</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bars"></i>
                </div>
                <div class="text-muted iconLAName">la-bars</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-baseball-ball"></i>
                </div>
                <div class="text-muted iconLAName">la-baseball-ball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-basketball-ball"></i>
                </div>
                <div class="text-muted iconLAName">la-basketball-ball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bath"></i>
                </div>
                <div class="text-muted iconLAName">la-bath</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-battery-empty"></i>
                </div>
                <div class="text-muted iconLAName">la-battery-empty</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-battery-full"></i>
                </div>
                <div class="text-muted iconLAName">la-battery-full</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-battery-half"></i>
                </div>
                <div class="text-muted iconLAName">la-battery-half</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-battery-quarter"></i>
                </div>
                <div class="text-muted iconLAName">la-battery-quarter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-battery-three-quarters"></i>
                </div>
                <div class="text-muted iconLAName">la-battery-three-quarters</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-battle-net"></i>
                </div>
                <div class="text-muted iconLAName">fab la-battle-net</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bed"></i>
                </div>
                <div class="text-muted iconLAName">la-bed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-beer"></i>
                </div>
                <div class="text-muted iconLAName">la-beer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-behance"></i>
                </div>
                <div class="text-muted iconLAName">fab la-behance</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-behance-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-behance-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bell"></i>
                </div>
                <div class="text-muted iconLAName">la-bell</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bell-slash"></i>
                </div>
                <div class="text-muted iconLAName">la-bell-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bezier-curve"></i>
                </div>
                <div class="text-muted iconLAName">la-bezier-curve</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bible"></i>
                </div>
                <div class="text-muted iconLAName">la-bible</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bicycle"></i>
                </div>
                <div class="text-muted iconLAName">la-bicycle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-biking"></i>
                </div>
                <div class="text-muted iconLAName">la-biking</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-bimobject"></i>
                </div>
                <div class="text-muted iconLAName">fab la-bimobject</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-binoculars"></i>
                </div>
                <div class="text-muted iconLAName">la-binoculars</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-biohazard"></i>
                </div>
                <div class="text-muted iconLAName">la-biohazard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-birthday-cake"></i>
                </div>
                <div class="text-muted iconLAName">la-birthday-cake</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-bitbucket"></i>
                </div>
                <div class="text-muted iconLAName">fab la-bitbucket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-bitcoin"></i>
                </div>
                <div class="text-muted iconLAName">fab la-bitcoin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-bity"></i>
                </div>
                <div class="text-muted iconLAName">fab la-bity</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-black-tie"></i>
                </div>
                <div class="text-muted iconLAName">fab la-black-tie</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-blackberry"></i>
                </div>
                <div class="text-muted iconLAName">fab la-blackberry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-blender"></i>
                </div>
                <div class="text-muted iconLAName">la-blender</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-blender-phone"></i>
                </div>
                <div class="text-muted iconLAName">la-blender-phone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-blind"></i>
                </div>
                <div class="text-muted iconLAName">la-blind</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-blog"></i>
                </div>
                <div class="text-muted iconLAName">la-blog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-blogger"></i>
                </div>
                <div class="text-muted iconLAName">fab la-blogger</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-blogger-b"></i>
                </div>
                <div class="text-muted iconLAName">fab la-blogger-b</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-bluetooth"></i>
                </div>
                <div class="text-muted iconLAName">fab la-bluetooth</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-bluetooth-b"></i>
                </div>
                <div class="text-muted iconLAName">fab la-bluetooth-b</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bold"></i>
                </div>
                <div class="text-muted iconLAName">la-bold</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bolt"></i>
                </div>
                <div class="text-muted iconLAName">la-bolt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bomb"></i>
                </div>
                <div class="text-muted iconLAName">la-bomb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bone"></i>
                </div>
                <div class="text-muted iconLAName">la-bone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bong"></i>
                </div>
                <div class="text-muted iconLAName">la-bong</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-book"></i>
                </div>
                <div class="text-muted iconLAName">la-book</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-book-dead"></i>
                </div>
                <div class="text-muted iconLAName">la-book-dead</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-book-medical"></i>
                </div>
                <div class="text-muted iconLAName">la-book-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-book-open"></i>
                </div>
                <div class="text-muted iconLAName">la-book-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-book-reader"></i>
                </div>
                <div class="text-muted iconLAName">la-book-reader</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bookmark"></i>
                </div>
                <div class="text-muted iconLAName">la-bookmark</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-bootstrap"></i>
                </div>
                <div class="text-muted iconLAName">fab la-bootstrap</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-border-all"></i>
                </div>
                <div class="text-muted iconLAName">la-border-all</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-border-none"></i>
                </div>
                <div class="text-muted iconLAName">la-border-none</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-border-style"></i>
                </div>
                <div class="text-muted iconLAName">la-border-style</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bowling-ball"></i>
                </div>
                <div class="text-muted iconLAName">la-bowling-ball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-box"></i>
                </div>
                <div class="text-muted iconLAName">la-box</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-box-open"></i>
                </div>
                <div class="text-muted iconLAName">la-box-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-boxes"></i>
                </div>
                <div class="text-muted iconLAName">la-boxes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-braille"></i>
                </div>
                <div class="text-muted iconLAName">la-braille</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-brain"></i>
                </div>
                <div class="text-muted iconLAName">la-brain</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bread-slice"></i>
                </div>
                <div class="text-muted iconLAName">la-bread-slice</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-briefcase"></i>
                </div>
                <div class="text-muted iconLAName">la-briefcase</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-briefcase-medical"></i>
                </div>
                <div class="text-muted iconLAName">la-briefcase-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-broadcast-tower"></i>
                </div>
                <div class="text-muted iconLAName">la-broadcast-tower</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-broom"></i>
                </div>
                <div class="text-muted iconLAName">la-broom</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-brush"></i>
                </div>
                <div class="text-muted iconLAName">la-brush</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-btc"></i>
                </div>
                <div class="text-muted iconLAName">fab la-btc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-buffer"></i>
                </div>
                <div class="text-muted iconLAName">fab la-buffer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bug"></i>
                </div>
                <div class="text-muted iconLAName">la-bug</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-building"></i>
                </div>
                <div class="text-muted iconLAName">la-building</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bullhorn"></i>
                </div>
                <div class="text-muted iconLAName">la-bullhorn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bullseye"></i>
                </div>
                <div class="text-muted iconLAName">la-bullseye</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-burn"></i>
                </div>
                <div class="text-muted iconLAName">la-burn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-buromobelexperte"></i>
                </div>
                <div class="text-muted iconLAName">fab la-buromobelexperte</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bus"></i>
                </div>
                <div class="text-muted iconLAName">la-bus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bus-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-bus-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-business-time"></i>
                </div>
                <div class="text-muted iconLAName">la-business-time</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-buy-n-large"></i>
                </div>
                <div class="text-muted iconLAName">fab la-buy-n-large</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-buysellads"></i>
                </div>
                <div class="text-muted iconLAName">fab la-buysellads</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calculator"></i>
                </div>
                <div class="text-muted iconLAName">la-calculator</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-check"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-day"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-day</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-minus"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-plus"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-times"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-times</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-week"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-week</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-camera"></i>
                </div>
                <div class="text-muted iconLAName">la-camera</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-camera-retro"></i>
                </div>
                <div class="text-muted iconLAName">la-camera-retro</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-campground"></i>
                </div>
                <div class="text-muted iconLAName">la-campground</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-canadian-maple-leaf"></i>
                </div>
                <div class="text-muted iconLAName">fab la-canadian-maple-leaf</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-candy-cane"></i>
                </div>
                <div class="text-muted iconLAName">la-candy-cane</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cannabis"></i>
                </div>
                <div class="text-muted iconLAName">la-cannabis</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-capsules"></i>
                </div>
                <div class="text-muted iconLAName">la-capsules</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-car"></i>
                </div>
                <div class="text-muted iconLAName">la-car</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-car-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-car-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-car-battery"></i>
                </div>
                <div class="text-muted iconLAName">la-car-battery</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-car-crash"></i>
                </div>
                <div class="text-muted iconLAName">la-car-crash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-car-side"></i>
                </div>
                <div class="text-muted iconLAName">la-car-side</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-down"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-left"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-right"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-square-down"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-square-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-square-left"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-square-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-square-right"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-square-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-square-up"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-square-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-up"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-carrot"></i>
                </div>
                <div class="text-muted iconLAName">la-carrot</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cart-arrow-down"></i>
                </div>
                <div class="text-muted iconLAName">la-cart-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cart-plus"></i>
                </div>
                <div class="text-muted iconLAName">la-cart-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cash-register"></i>
                </div>
                <div class="text-muted iconLAName">la-cash-register</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cat"></i>
                </div>
                <div class="text-muted iconLAName">la-cat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cc-amazon-pay"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cc-amazon-pay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cc-amex"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cc-amex</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cc-apple-pay"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cc-apple-pay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cc-diners-club"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cc-diners-club</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cc-discover"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cc-discover</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cc-jcb"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cc-jcb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cc-mastercard"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cc-mastercard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cc-paypal"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cc-paypal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cc-stripe"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cc-stripe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cc-visa"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cc-visa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-centercode"></i>
                </div>
                <div class="text-muted iconLAName">fab la-centercode</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-centos"></i>
                </div>
                <div class="text-muted iconLAName">fab la-centos</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-certificate"></i>
                </div>
                <div class="text-muted iconLAName">la-certificate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chair"></i>
                </div>
                <div class="text-muted iconLAName">la-chair</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chalkboard"></i>
                </div>
                <div class="text-muted iconLAName">la-chalkboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chalkboard-teacher"></i>
                </div>
                <div class="text-muted iconLAName">la-chalkboard-teacher</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-charging-station"></i>
                </div>
                <div class="text-muted iconLAName">la-charging-station</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chart-area"></i>
                </div>
                <div class="text-muted iconLAName">la-chart-area</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chart-bar"></i>
                </div>
                <div class="text-muted iconLAName">la-chart-bar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chart-line"></i>
                </div>
                <div class="text-muted iconLAName">la-chart-line</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chart-pie"></i>
                </div>
                <div class="text-muted iconLAName">la-chart-pie</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-check"></i>
                </div>
                <div class="text-muted iconLAName">la-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-check-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-check-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-check-double"></i>
                </div>
                <div class="text-muted iconLAName">la-check-double</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-check-square"></i>
                </div>
                <div class="text-muted iconLAName">la-check-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cheese"></i>
                </div>
                <div class="text-muted iconLAName">la-cheese</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chess"></i>
                </div>
                <div class="text-muted iconLAName">la-chess</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chess-bishop"></i>
                </div>
                <div class="text-muted iconLAName">la-chess-bishop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chess-board"></i>
                </div>
                <div class="text-muted iconLAName">la-chess-board</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chess-king"></i>
                </div>
                <div class="text-muted iconLAName">la-chess-king</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chess-knight"></i>
                </div>
                <div class="text-muted iconLAName">la-chess-knight</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chess-pawn"></i>
                </div>
                <div class="text-muted iconLAName">la-chess-pawn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chess-queen"></i>
                </div>
                <div class="text-muted iconLAName">la-chess-queen</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chess-rook"></i>
                </div>
                <div class="text-muted iconLAName">la-chess-rook</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chevron-circle-down"></i>
                </div>
                <div class="text-muted iconLAName">la-chevron-circle-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chevron-circle-left"></i>
                </div>
                <div class="text-muted iconLAName">la-chevron-circle-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chevron-circle-right"></i>
                </div>
                <div class="text-muted iconLAName">la-chevron-circle-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chevron-circle-up"></i>
                </div>
                <div class="text-muted iconLAName">la-chevron-circle-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chevron-down"></i>
                </div>
                <div class="text-muted iconLAName">la-chevron-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chevron-left"></i>
                </div>
                <div class="text-muted iconLAName">la-chevron-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chevron-right"></i>
                </div>
                <div class="text-muted iconLAName">la-chevron-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chevron-up"></i>
                </div>
                <div class="text-muted iconLAName">la-chevron-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-child"></i>
                </div>
                <div class="text-muted iconLAName">la-child</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-chrome"></i>
                </div>
                <div class="text-muted iconLAName">fab la-chrome</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-chromecast"></i>
                </div>
                <div class="text-muted iconLAName">fab la-chromecast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-church"></i>
                </div>
                <div class="text-muted iconLAName">la-church</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-circle-notch"></i>
                </div>
                <div class="text-muted iconLAName">la-circle-notch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-city"></i>
                </div>
                <div class="text-muted iconLAName">la-city</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-clinic-medical"></i>
                </div>
                <div class="text-muted iconLAName">la-clinic-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-clipboard"></i>
                </div>
                <div class="text-muted iconLAName">la-clipboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-clipboard-check"></i>
                </div>
                <div class="text-muted iconLAName">la-clipboard-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-clipboard-list"></i>
                </div>
                <div class="text-muted iconLAName">la-clipboard-list</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-clock"></i>
                </div>
                <div class="text-muted iconLAName">la-clock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-clone"></i>
                </div>
                <div class="text-muted iconLAName">la-clone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-closed-captioning"></i>
                </div>
                <div class="text-muted iconLAName">la-closed-captioning</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud-download-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud-download-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud-meatball"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud-meatball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud-moon"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud-moon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud-moon-rain"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud-moon-rain</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud-rain"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud-rain</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud-showers-heavy"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud-showers-heavy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud-sun"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud-sun</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud-sun-rain"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud-sun-rain</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud-upload-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud-upload-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cloudscale"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cloudscale</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cloudsmith"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cloudsmith</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cloudversify"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cloudversify</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cocktail"></i>
                </div>
                <div class="text-muted iconLAName">la-cocktail</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-code"></i>
                </div>
                <div class="text-muted iconLAName">la-code</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-code-branch"></i>
                </div>
                <div class="text-muted iconLAName">la-code-branch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-codepen"></i>
                </div>
                <div class="text-muted iconLAName">fab la-codepen</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-codiepie"></i>
                </div>
                <div class="text-muted iconLAName">fab la-codiepie</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-coffee"></i>
                </div>
                <div class="text-muted iconLAName">la-coffee</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cog"></i>
                </div>
                <div class="text-muted iconLAName">la-cog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cogs"></i>
                </div>
                <div class="text-muted iconLAName">la-cogs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-coins"></i>
                </div>
                <div class="text-muted iconLAName">la-coins</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-columns"></i>
                </div>
                <div class="text-muted iconLAName">la-columns</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-comment"></i>
                </div>
                <div class="text-muted iconLAName">la-comment</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-comment-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-comment-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-comment-dollar"></i>
                </div>
                <div class="text-muted iconLAName">la-comment-dollar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-comment-dots"></i>
                </div>
                <div class="text-muted iconLAName">la-comment-dots</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-comment-medical"></i>
                </div>
                <div class="text-muted iconLAName">la-comment-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-comment-slash"></i>
                </div>
                <div class="text-muted iconLAName">la-comment-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-comments"></i>
                </div>
                <div class="text-muted iconLAName">la-comments</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-comments-dollar"></i>
                </div>
                <div class="text-muted iconLAName">la-comments-dollar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-compact-disc"></i>
                </div>
                <div class="text-muted iconLAName">la-compact-disc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-compass"></i>
                </div>
                <div class="text-muted iconLAName">la-compass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-compress"></i>
                </div>
                <div class="text-muted iconLAName">la-compress</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-compress-arrows-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-compress-arrows-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-concierge-bell"></i>
                </div>
                <div class="text-muted iconLAName">la-concierge-bell</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-confluence"></i>
                </div>
                <div class="text-muted iconLAName">fab la-confluence</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-connectdevelop"></i>
                </div>
                <div class="text-muted iconLAName">fab la-connectdevelop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-contao"></i>
                </div>
                <div class="text-muted iconLAName">fab la-contao</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cookie"></i>
                </div>
                <div class="text-muted iconLAName">la-cookie</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cookie-bite"></i>
                </div>
                <div class="text-muted iconLAName">la-cookie-bite</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-copy"></i>
                </div>
                <div class="text-muted iconLAName">la-copy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-copyright"></i>
                </div>
                <div class="text-muted iconLAName">la-copyright</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cotton-bureau"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cotton-bureau</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-couch"></i>
                </div>
                <div class="text-muted iconLAName">la-couch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cpanel"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cpanel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-by"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-by</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-nc"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-nc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-nc-eu"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-nc-eu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-nc-jp"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-nc-jp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-nd"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-nd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-pd"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-pd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-pd-alt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-pd-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-remix"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-remix</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-sa"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-sa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-sampling"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-sampling</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-sampling-plus"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-sampling-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-share"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-share</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-creative-commons-zero"></i>
                </div>
                <div class="text-muted iconLAName">fab la-creative-commons-zero</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-credit-card"></i>
                </div>
                <div class="text-muted iconLAName">la-credit-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-critical-role"></i>
                </div>
                <div class="text-muted iconLAName">fab la-critical-role</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-crop"></i>
                </div>
                <div class="text-muted iconLAName">la-crop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-crop-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-crop-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cross"></i>
                </div>
                <div class="text-muted iconLAName">la-cross</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-crosshairs"></i>
                </div>
                <div class="text-muted iconLAName">la-crosshairs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-crow"></i>
                </div>
                <div class="text-muted iconLAName">la-crow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-crown"></i>
                </div>
                <div class="text-muted iconLAName">la-crown</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-crutch"></i>
                </div>
                <div class="text-muted iconLAName">la-crutch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-css3"></i>
                </div>
                <div class="text-muted iconLAName">fab la-css3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-css3-alt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-css3-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cube"></i>
                </div>
                <div class="text-muted iconLAName">la-cube</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cubes"></i>
                </div>
                <div class="text-muted iconLAName">la-cubes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cut"></i>
                </div>
                <div class="text-muted iconLAName">la-cut</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-cuttlefish"></i>
                </div>
                <div class="text-muted iconLAName">fab la-cuttlefish</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-d-and-d"></i>
                </div>
                <div class="text-muted iconLAName">fab la-d-and-d</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-d-and-d-beyond"></i>
                </div>
                <div class="text-muted iconLAName">fab la-d-and-d-beyond</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-dashcube"></i>
                </div>
                <div class="text-muted iconLAName">fab la-dashcube</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-database"></i>
                </div>
                <div class="text-muted iconLAName">la-database</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-deaf"></i>
                </div>
                <div class="text-muted iconLAName">la-deaf</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-delicious"></i>
                </div>
                <div class="text-muted iconLAName">fab la-delicious</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-democrat"></i>
                </div>
                <div class="text-muted iconLAName">la-democrat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-deploydog"></i>
                </div>
                <div class="text-muted iconLAName">fab la-deploydog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-deskpro"></i>
                </div>
                <div class="text-muted iconLAName">fab la-deskpro</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-desktop"></i>
                </div>
                <div class="text-muted iconLAName">la-desktop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-dev"></i>
                </div>
                <div class="text-muted iconLAName">fab la-dev</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-deviantart"></i>
                </div>
                <div class="text-muted iconLAName">fab la-deviantart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dharmachakra"></i>
                </div>
                <div class="text-muted iconLAName">la-dharmachakra</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-dhl"></i>
                </div>
                <div class="text-muted iconLAName">fab la-dhl</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-diagnoses"></i>
                </div>
                <div class="text-muted iconLAName">la-diagnoses</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-diaspora"></i>
                </div>
                <div class="text-muted iconLAName">fab la-diaspora</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dice"></i>
                </div>
                <div class="text-muted iconLAName">la-dice</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dice-d20"></i>
                </div>
                <div class="text-muted iconLAName">la-dice-d20</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dice-d6"></i>
                </div>
                <div class="text-muted iconLAName">la-dice-d6</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dice-five"></i>
                </div>
                <div class="text-muted iconLAName">la-dice-five</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dice-four"></i>
                </div>
                <div class="text-muted iconLAName">la-dice-four</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dice-one"></i>
                </div>
                <div class="text-muted iconLAName">la-dice-one</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dice-six"></i>
                </div>
                <div class="text-muted iconLAName">la-dice-six</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dice-three"></i>
                </div>
                <div class="text-muted iconLAName">la-dice-three</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dice-two"></i>
                </div>
                <div class="text-muted iconLAName">la-dice-two</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-digg"></i>
                </div>
                <div class="text-muted iconLAName">fab la-digg</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-digital-ocean"></i>
                </div>
                <div class="text-muted iconLAName">fab la-digital-ocean</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-digital-tachograph"></i>
                </div>
                <div class="text-muted iconLAName">la-digital-tachograph</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-directions"></i>
                </div>
                <div class="text-muted iconLAName">la-directions</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-discord"></i>
                </div>
                <div class="text-muted iconLAName">fab la-discord</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-discourse"></i>
                </div>
                <div class="text-muted iconLAName">fab la-discourse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-divide"></i>
                </div>
                <div class="text-muted iconLAName">la-divide</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dizzy"></i>
                </div>
                <div class="text-muted iconLAName">la-dizzy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dna"></i>
                </div>
                <div class="text-muted iconLAName">la-dna</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-dochub"></i>
                </div>
                <div class="text-muted iconLAName">fab la-dochub</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-docker"></i>
                </div>
                <div class="text-muted iconLAName">fab la-docker</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dog"></i>
                </div>
                <div class="text-muted iconLAName">la-dog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dollar-sign"></i>
                </div>
                <div class="text-muted iconLAName">la-dollar-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dolly"></i>
                </div>
                <div class="text-muted iconLAName">la-dolly</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dolly-flatbed"></i>
                </div>
                <div class="text-muted iconLAName">la-dolly-flatbed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-donate"></i>
                </div>
                <div class="text-muted iconLAName">la-donate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-door-closed"></i>
                </div>
                <div class="text-muted iconLAName">la-door-closed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-door-open"></i>
                </div>
                <div class="text-muted iconLAName">la-door-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dot-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-dot-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dove"></i>
                </div>
                <div class="text-muted iconLAName">la-dove</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-download"></i>
                </div>
                <div class="text-muted iconLAName">la-download</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-draft2digital"></i>
                </div>
                <div class="text-muted iconLAName">fab la-draft2digital</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-drafting-compass"></i>
                </div>
                <div class="text-muted iconLAName">la-drafting-compass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dragon"></i>
                </div>
                <div class="text-muted iconLAName">la-dragon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-draw-polygon"></i>
                </div>
                <div class="text-muted iconLAName">la-draw-polygon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-dribbble"></i>
                </div>
                <div class="text-muted iconLAName">fab la-dribbble</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-dribbble-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-dribbble-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-dropbox"></i>
                </div>
                <div class="text-muted iconLAName">fab la-dropbox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-drum"></i>
                </div>
                <div class="text-muted iconLAName">la-drum</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-drum-steelpan"></i>
                </div>
                <div class="text-muted iconLAName">la-drum-steelpan</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-drumstick-bite"></i>
                </div>
                <div class="text-muted iconLAName">la-drumstick-bite</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-drupal"></i>
                </div>
                <div class="text-muted iconLAName">fab la-drupal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dumbbell"></i>
                </div>
                <div class="text-muted iconLAName">la-dumbbell</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dumpster"></i>
                </div>
                <div class="text-muted iconLAName">la-dumpster</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dumpster-fire"></i>
                </div>
                <div class="text-muted iconLAName">la-dumpster-fire</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dungeon"></i>
                </div>
                <div class="text-muted iconLAName">la-dungeon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-dyalog"></i>
                </div>
                <div class="text-muted iconLAName">fab la-dyalog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-earlybirds"></i>
                </div>
                <div class="text-muted iconLAName">fab la-earlybirds</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-ebay"></i>
                </div>
                <div class="text-muted iconLAName">fab la-ebay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-edge"></i>
                </div>
                <div class="text-muted iconLAName">fab la-edge</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-edit"></i>
                </div>
                <div class="text-muted iconLAName">la-edit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-egg"></i>
                </div>
                <div class="text-muted iconLAName">la-egg</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-eject"></i>
                </div>
                <div class="text-muted iconLAName">la-eject</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-elementor"></i>
                </div>
                <div class="text-muted iconLAName">fab la-elementor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ellipsis-h"></i>
                </div>
                <div class="text-muted iconLAName">la-ellipsis-h</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ellipsis-v"></i>
                </div>
                <div class="text-muted iconLAName">la-ellipsis-v</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-ello"></i>
                </div>
                <div class="text-muted iconLAName">fab la-ello</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-ember"></i>
                </div>
                <div class="text-muted iconLAName">fab la-ember</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-empire"></i>
                </div>
                <div class="text-muted iconLAName">fab la-empire</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-envelope"></i>
                </div>
                <div class="text-muted iconLAName">la-envelope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-envelope-open"></i>
                </div>
                <div class="text-muted iconLAName">la-envelope-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-envelope-open-text"></i>
                </div>
                <div class="text-muted iconLAName">la-envelope-open-text</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-envelope-square"></i>
                </div>
                <div class="text-muted iconLAName">la-envelope-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-envira"></i>
                </div>
                <div class="text-muted iconLAName">fab la-envira</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-equals"></i>
                </div>
                <div class="text-muted iconLAName">la-equals</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-eraser"></i>
                </div>
                <div class="text-muted iconLAName">la-eraser</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-erlang"></i>
                </div>
                <div class="text-muted iconLAName">fab la-erlang</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-ethereum"></i>
                </div>
                <div class="text-muted iconLAName">fab la-ethereum</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ethernet"></i>
                </div>
                <div class="text-muted iconLAName">la-ethernet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-etsy"></i>
                </div>
                <div class="text-muted iconLAName">fab la-etsy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-euro-sign"></i>
                </div>
                <div class="text-muted iconLAName">la-euro-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-evernote"></i>
                </div>
                <div class="text-muted iconLAName">fab la-evernote</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-exchange-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-exchange-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-exclamation"></i>
                </div>
                <div class="text-muted iconLAName">la-exclamation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-exclamation-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-exclamation-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-exclamation-triangle"></i>
                </div>
                <div class="text-muted iconLAName">la-exclamation-triangle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-expand"></i>
                </div>
                <div class="text-muted iconLAName">la-expand</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-expand-arrows-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-expand-arrows-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-expeditedssl"></i>
                </div>
                <div class="text-muted iconLAName">fab la-expeditedssl</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-external-link-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-external-link-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-external-link-square-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-external-link-square-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-eye"></i>
                </div>
                <div class="text-muted iconLAName">la-eye</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-eye-dropper"></i>
                </div>
                <div class="text-muted iconLAName">la-eye-dropper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-eye-slash"></i>
                </div>
                <div class="text-muted iconLAName">la-eye-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-facebook"></i>
                </div>
                <div class="text-muted iconLAName">fab la-facebook</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-facebook-f"></i>
                </div>
                <div class="text-muted iconLAName">fab la-facebook-f</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-facebook-messenger"></i>
                </div>
                <div class="text-muted iconLAName">fab la-facebook-messenger</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-facebook-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-facebook-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fan"></i>
                </div>
                <div class="text-muted iconLAName">la-fan</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-fantasy-flight-games"></i>
                </div>
                <div class="text-muted iconLAName">fab la-fantasy-flight-games</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fast-backward"></i>
                </div>
                <div class="text-muted iconLAName">la-fast-backward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fast-forward"></i>
                </div>
                <div class="text-muted iconLAName">la-fast-forward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fax"></i>
                </div>
                <div class="text-muted iconLAName">la-fax</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-feather"></i>
                </div>
                <div class="text-muted iconLAName">la-feather</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-feather-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-feather-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-fedex"></i>
                </div>
                <div class="text-muted iconLAName">fab la-fedex</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-fedora"></i>
                </div>
                <div class="text-muted iconLAName">fab la-fedora</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-female"></i>
                </div>
                <div class="text-muted iconLAName">la-female</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fighter-jet"></i>
                </div>
                <div class="text-muted iconLAName">la-fighter-jet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-figma"></i>
                </div>
                <div class="text-muted iconLAName">fab la-figma</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file"></i>
                </div>
                <div class="text-muted iconLAName">la-file</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-file-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-archive"></i>
                </div>
                <div class="text-muted iconLAName">la-file-archive</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-audio"></i>
                </div>
                <div class="text-muted iconLAName">la-file-audio</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-code"></i>
                </div>
                <div class="text-muted iconLAName">la-file-code</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-contract"></i>
                </div>
                <div class="text-muted iconLAName">la-file-contract</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-csv"></i>
                </div>
                <div class="text-muted iconLAName">la-file-csv</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-download"></i>
                </div>
                <div class="text-muted iconLAName">la-file-download</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-excel"></i>
                </div>
                <div class="text-muted iconLAName">la-file-excel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-export"></i>
                </div>
                <div class="text-muted iconLAName">la-file-export</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-image"></i>
                </div>
                <div class="text-muted iconLAName">la-file-image</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-import"></i>
                </div>
                <div class="text-muted iconLAName">la-file-import</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-invoice"></i>
                </div>
                <div class="text-muted iconLAName">la-file-invoice</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-invoice-dollar"></i>
                </div>
                <div class="text-muted iconLAName">la-file-invoice-dollar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-medical"></i>
                </div>
                <div class="text-muted iconLAName">la-file-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-medical-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-file-medical-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-pdf"></i>
                </div>
                <div class="text-muted iconLAName">la-file-pdf</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-powerpoint"></i>
                </div>
                <div class="text-muted iconLAName">la-file-powerpoint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-prescription"></i>
                </div>
                <div class="text-muted iconLAName">la-file-prescription</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-signature"></i>
                </div>
                <div class="text-muted iconLAName">la-file-signature</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-upload"></i>
                </div>
                <div class="text-muted iconLAName">la-file-upload</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-video"></i>
                </div>
                <div class="text-muted iconLAName">la-file-video</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-word"></i>
                </div>
                <div class="text-muted iconLAName">la-file-word</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fill"></i>
                </div>
                <div class="text-muted iconLAName">la-fill</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fill-drip"></i>
                </div>
                <div class="text-muted iconLAName">la-fill-drip</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-film"></i>
                </div>
                <div class="text-muted iconLAName">la-film</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-filter"></i>
                </div>
                <div class="text-muted iconLAName">la-filter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fingerprint"></i>
                </div>
                <div class="text-muted iconLAName">la-fingerprint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fire"></i>
                </div>
                <div class="text-muted iconLAName">la-fire</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fire-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-fire-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fire-extinguisher"></i>
                </div>
                <div class="text-muted iconLAName">la-fire-extinguisher</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-firefox"></i>
                </div>
                <div class="text-muted iconLAName">fab la-firefox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-first-aid"></i>
                </div>
                <div class="text-muted iconLAName">la-first-aid</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-first-order"></i>
                </div>
                <div class="text-muted iconLAName">fab la-first-order</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-first-order-alt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-first-order-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-firstdraft"></i>
                </div>
                <div class="text-muted iconLAName">fab la-firstdraft</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fish"></i>
                </div>
                <div class="text-muted iconLAName">la-fish</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fist-raised"></i>
                </div>
                <div class="text-muted iconLAName">la-fist-raised</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-flag"></i>
                </div>
                <div class="text-muted iconLAName">la-flag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-flag-checkered"></i>
                </div>
                <div class="text-muted iconLAName">la-flag-checkered</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-flag-usa"></i>
                </div>
                <div class="text-muted iconLAName">la-flag-usa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-flask"></i>
                </div>
                <div class="text-muted iconLAName">la-flask</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-flickr"></i>
                </div>
                <div class="text-muted iconLAName">fab la-flickr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-flipboard"></i>
                </div>
                <div class="text-muted iconLAName">fab la-flipboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-flushed"></i>
                </div>
                <div class="text-muted iconLAName">la-flushed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-fly"></i>
                </div>
                <div class="text-muted iconLAName">fab la-fly</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-folder"></i>
                </div>
                <div class="text-muted iconLAName">la-folder</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-folder-minus"></i>
                </div>
                <div class="text-muted iconLAName">la-folder-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-folder-open"></i>
                </div>
                <div class="text-muted iconLAName">la-folder-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-folder-plus"></i>
                </div>
                <div class="text-muted iconLAName">la-folder-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-font"></i>
                </div>
                <div class="text-muted iconLAName">la-font</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-font-awesome"></i>
                </div>
                <div class="text-muted iconLAName">fab la-font-awesome</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-font-awesome-alt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-font-awesome-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-font-awesome-flag"></i>
                </div>
                <div class="text-muted iconLAName">fab la-font-awesome-flag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-font-awesome-logo-full"></i>
                </div>
                <div class="text-muted iconLAName">fab la-font-awesome-logo-full</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-fonticons"></i>
                </div>
                <div class="text-muted iconLAName">fab la-fonticons</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-fonticons-fi"></i>
                </div>
                <div class="text-muted iconLAName">fab la-fonticons-fi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-football-ball"></i>
                </div>
                <div class="text-muted iconLAName">la-football-ball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-fort-awesome"></i>
                </div>
                <div class="text-muted iconLAName">fab la-fort-awesome</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-fort-awesome-alt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-fort-awesome-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-forumbee"></i>
                </div>
                <div class="text-muted iconLAName">fab la-forumbee</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-forward"></i>
                </div>
                <div class="text-muted iconLAName">la-forward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-foursquare"></i>
                </div>
                <div class="text-muted iconLAName">fab la-foursquare</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-free-code-camp"></i>
                </div>
                <div class="text-muted iconLAName">fab la-free-code-camp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-freebsd"></i>
                </div>
                <div class="text-muted iconLAName">fab la-freebsd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-frog"></i>
                </div>
                <div class="text-muted iconLAName">la-frog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-frown"></i>
                </div>
                <div class="text-muted iconLAName">la-frown</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-frown-open"></i>
                </div>
                <div class="text-muted iconLAName">la-frown-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-fulcrum"></i>
                </div>
                <div class="text-muted iconLAName">fab la-fulcrum</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-funnel-dollar"></i>
                </div>
                <div class="text-muted iconLAName">la-funnel-dollar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-futbol"></i>
                </div>
                <div class="text-muted iconLAName">la-futbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-galactic-republic"></i>
                </div>
                <div class="text-muted iconLAName">fab la-galactic-republic</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-galactic-senate"></i>
                </div>
                <div class="text-muted iconLAName">fab la-galactic-senate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-gamepad"></i>
                </div>
                <div class="text-muted iconLAName">la-gamepad</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-gas-pump"></i>
                </div>
                <div class="text-muted iconLAName">la-gas-pump</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-gavel"></i>
                </div>
                <div class="text-muted iconLAName">la-gavel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-gem"></i>
                </div>
                <div class="text-muted iconLAName">la-gem</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-genderless"></i>
                </div>
                <div class="text-muted iconLAName">la-genderless</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-get-pocket"></i>
                </div>
                <div class="text-muted iconLAName">fab la-get-pocket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-gg"></i>
                </div>
                <div class="text-muted iconLAName">fab la-gg</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-gg-circle"></i>
                </div>
                <div class="text-muted iconLAName">fab la-gg-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ghost"></i>
                </div>
                <div class="text-muted iconLAName">la-ghost</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-gift"></i>
                </div>
                <div class="text-muted iconLAName">la-gift</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-gifts"></i>
                </div>
                <div class="text-muted iconLAName">la-gifts</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-git"></i>
                </div>
                <div class="text-muted iconLAName">fab la-git</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-git-alt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-git-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-git-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-git-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-github"></i>
                </div>
                <div class="text-muted iconLAName">fab la-github</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-github-alt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-github-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-github-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-github-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-gitkraken"></i>
                </div>
                <div class="text-muted iconLAName">fab la-gitkraken</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-gitlab"></i>
                </div>
                <div class="text-muted iconLAName">fab la-gitlab</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-gitter"></i>
                </div>
                <div class="text-muted iconLAName">fab la-gitter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-glass-cheers"></i>
                </div>
                <div class="text-muted iconLAName">la-glass-cheers</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-glass-martini"></i>
                </div>
                <div class="text-muted iconLAName">la-glass-martini</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-glass-martini-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-glass-martini-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-glass-whiskey"></i>
                </div>
                <div class="text-muted iconLAName">la-glass-whiskey</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-glasses"></i>
                </div>
                <div class="text-muted iconLAName">la-glasses</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-glide"></i>
                </div>
                <div class="text-muted iconLAName">fab la-glide</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-glide-g"></i>
                </div>
                <div class="text-muted iconLAName">fab la-glide-g</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-globe"></i>
                </div>
                <div class="text-muted iconLAName">la-globe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-globe-africa"></i>
                </div>
                <div class="text-muted iconLAName">la-globe-africa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-globe-americas"></i>
                </div>
                <div class="text-muted iconLAName">la-globe-americas</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-globe-asia"></i>
                </div>
                <div class="text-muted iconLAName">la-globe-asia</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-globe-europe"></i>
                </div>
                <div class="text-muted iconLAName">la-globe-europe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-gofore"></i>
                </div>
                <div class="text-muted iconLAName">fab la-gofore</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-golf-ball"></i>
                </div>
                <div class="text-muted iconLAName">la-golf-ball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-goodreads"></i>
                </div>
                <div class="text-muted iconLAName">fab la-goodreads</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-goodreads-g"></i>
                </div>
                <div class="text-muted iconLAName">fab la-goodreads-g</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-google"></i>
                </div>
                <div class="text-muted iconLAName">fab la-google</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-google-drive"></i>
                </div>
                <div class="text-muted iconLAName">fab la-google-drive</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-google-play"></i>
                </div>
                <div class="text-muted iconLAName">fab la-google-play</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-google-plus"></i>
                </div>
                <div class="text-muted iconLAName">fab la-google-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-google-plus-g"></i>
                </div>
                <div class="text-muted iconLAName">fab la-google-plus-g</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-google-plus-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-google-plus-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-google-wallet"></i>
                </div>
                <div class="text-muted iconLAName">fab la-google-wallet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-gopuram"></i>
                </div>
                <div class="text-muted iconLAName">la-gopuram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-graduation-cap"></i>
                </div>
                <div class="text-muted iconLAName">la-graduation-cap</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-gratipay"></i>
                </div>
                <div class="text-muted iconLAName">fab la-gratipay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-grav"></i>
                </div>
                <div class="text-muted iconLAName">fab la-grav</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-greater-than"></i>
                </div>
                <div class="text-muted iconLAName">la-greater-than</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-greater-than-equal"></i>
                </div>
                <div class="text-muted iconLAName">la-greater-than-equal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grimace"></i>
                </div>
                <div class="text-muted iconLAName">la-grimace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin"></i>
                </div>
                <div class="text-muted iconLAName">la-grin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-beam"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-beam-sweat"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-beam-sweat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-hearts"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-hearts</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-squint"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-squint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-squint-tears"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-squint-tears</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-stars"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-stars</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-tears"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-tears</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-tongue"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-tongue</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-tongue-squint"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-tongue-squint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-tongue-wink"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-tongue-wink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grin-wink"></i>
                </div>
                <div class="text-muted iconLAName">la-grin-wink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grip-horizontal"></i>
                </div>
                <div class="text-muted iconLAName">la-grip-horizontal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grip-lines"></i>
                </div>
                <div class="text-muted iconLAName">la-grip-lines</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grip-lines-vertical"></i>
                </div>
                <div class="text-muted iconLAName">la-grip-lines-vertical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-grip-vertical"></i>
                </div>
                <div class="text-muted iconLAName">la-grip-vertical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-gripfire"></i>
                </div>
                <div class="text-muted iconLAName">fab la-gripfire</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-grunt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-grunt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-guitar"></i>
                </div>
                <div class="text-muted iconLAName">la-guitar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-gulp"></i>
                </div>
                <div class="text-muted iconLAName">fab la-gulp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-h-square"></i>
                </div>
                <div class="text-muted iconLAName">la-h-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-hacker-news"></i>
                </div>
                <div class="text-muted iconLAName">fab la-hacker-news</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-hacker-news-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-hacker-news-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-hackerrank"></i>
                </div>
                <div class="text-muted iconLAName">fab la-hackerrank</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hamburger"></i>
                </div>
                <div class="text-muted iconLAName">la-hamburger</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hammer"></i>
                </div>
                <div class="text-muted iconLAName">la-hammer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hamsa"></i>
                </div>
                <div class="text-muted iconLAName">la-hamsa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-holding"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-holding</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-holding-heart"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-holding-heart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-holding-usd"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-holding-usd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-lizard"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-lizard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-middle-finger"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-middle-finger</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-paper"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-paper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-peace"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-peace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-point-down"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-point-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-point-left"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-point-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-point-right"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-point-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-point-up"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-point-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-pointer"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-pointer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-rock"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-rock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-scissors"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-scissors</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-spock"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-spock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hands"></i>
                </div>
                <div class="text-muted iconLAName">la-hands</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hands-helping"></i>
                </div>
                <div class="text-muted iconLAName">la-hands-helping</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-handshake"></i>
                </div>
                <div class="text-muted iconLAName">la-handshake</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hanukiah"></i>
                </div>
                <div class="text-muted iconLAName">la-hanukiah</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hard-hat"></i>
                </div>
                <div class="text-muted iconLAName">la-hard-hat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hashtag"></i>
                </div>
                <div class="text-muted iconLAName">la-hashtag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hat-cowboy"></i>
                </div>
                <div class="text-muted iconLAName">la-hat-cowboy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hat-cowboy-side"></i>
                </div>
                <div class="text-muted iconLAName">la-hat-cowboy-side</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hat-wizard"></i>
                </div>
                <div class="text-muted iconLAName">la-hat-wizard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-haykal"></i>
                </div>
                <div class="text-muted iconLAName">la-haykal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hdd"></i>
                </div>
                <div class="text-muted iconLAName">la-hdd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-heading"></i>
                </div>
                <div class="text-muted iconLAName">la-heading</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-headphones"></i>
                </div>
                <div class="text-muted iconLAName">la-headphones</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-headphones-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-headphones-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-headset"></i>
                </div>
                <div class="text-muted iconLAName">la-headset</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-heart"></i>
                </div>
                <div class="text-muted iconLAName">la-heart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-heart-broken"></i>
                </div>
                <div class="text-muted iconLAName">la-heart-broken</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-heartbeat"></i>
                </div>
                <div class="text-muted iconLAName">la-heartbeat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-helicopter"></i>
                </div>
                <div class="text-muted iconLAName">la-helicopter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-highlighter"></i>
                </div>
                <div class="text-muted iconLAName">la-highlighter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hiking"></i>
                </div>
                <div class="text-muted iconLAName">la-hiking</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hippo"></i>
                </div>
                <div class="text-muted iconLAName">la-hippo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-hips"></i>
                </div>
                <div class="text-muted iconLAName">fab la-hips</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-hire-a-helper"></i>
                </div>
                <div class="text-muted iconLAName">fab la-hire-a-helper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-history"></i>
                </div>
                <div class="text-muted iconLAName">la-history</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hockey-puck"></i>
                </div>
                <div class="text-muted iconLAName">la-hockey-puck</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-holly-berry"></i>
                </div>
                <div class="text-muted iconLAName">la-holly-berry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-home"></i>
                </div>
                <div class="text-muted iconLAName">la-home</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-hooli"></i>
                </div>
                <div class="text-muted iconLAName">fab la-hooli</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-hornbill"></i>
                </div>
                <div class="text-muted iconLAName">fab la-hornbill</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-horse"></i>
                </div>
                <div class="text-muted iconLAName">la-horse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-horse-head"></i>
                </div>
                <div class="text-muted iconLAName">la-horse-head</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hospital"></i>
                </div>
                <div class="text-muted iconLAName">la-hospital</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hospital-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-hospital-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hospital-symbol"></i>
                </div>
                <div class="text-muted iconLAName">la-hospital-symbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hot-tub"></i>
                </div>
                <div class="text-muted iconLAName">la-hot-tub</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hotdog"></i>
                </div>
                <div class="text-muted iconLAName">la-hotdog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hotel"></i>
                </div>
                <div class="text-muted iconLAName">la-hotel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-hotjar"></i>
                </div>
                <div class="text-muted iconLAName">fab la-hotjar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hourglass"></i>
                </div>
                <div class="text-muted iconLAName">la-hourglass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hourglass-end"></i>
                </div>
                <div class="text-muted iconLAName">la-hourglass-end</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hourglass-half"></i>
                </div>
                <div class="text-muted iconLAName">la-hourglass-half</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hourglass-start"></i>
                </div>
                <div class="text-muted iconLAName">la-hourglass-start</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-house-damage"></i>
                </div>
                <div class="text-muted iconLAName">la-house-damage</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-houzz"></i>
                </div>
                <div class="text-muted iconLAName">fab la-houzz</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hryvnia"></i>
                </div>
                <div class="text-muted iconLAName">la-hryvnia</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-html5"></i>
                </div>
                <div class="text-muted iconLAName">fab la-html5</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-hubspot"></i>
                </div>
                <div class="text-muted iconLAName">fab la-hubspot</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-i-cursor"></i>
                </div>
                <div class="text-muted iconLAName">la-i-cursor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ice-cream"></i>
                </div>
                <div class="text-muted iconLAName">la-ice-cream</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-icicles"></i>
                </div>
                <div class="text-muted iconLAName">la-icicles</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-icons"></i>
                </div>
                <div class="text-muted iconLAName">la-icons</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-id-badge"></i>
                </div>
                <div class="text-muted iconLAName">la-id-badge</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-id-card"></i>
                </div>
                <div class="text-muted iconLAName">la-id-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-id-card-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-id-card-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-igloo"></i>
                </div>
                <div class="text-muted iconLAName">la-igloo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-image"></i>
                </div>
                <div class="text-muted iconLAName">la-image</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-images"></i>
                </div>
                <div class="text-muted iconLAName">la-images</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-imdb"></i>
                </div>
                <div class="text-muted iconLAName">fab la-imdb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-inbox"></i>
                </div>
                <div class="text-muted iconLAName">la-inbox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-indent"></i>
                </div>
                <div class="text-muted iconLAName">la-indent</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-industry"></i>
                </div>
                <div class="text-muted iconLAName">la-industry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-infinity"></i>
                </div>
                <div class="text-muted iconLAName">la-infinity</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-info"></i>
                </div>
                <div class="text-muted iconLAName">la-info</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-info-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-info-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-instagram"></i>
                </div>
                <div class="text-muted iconLAName">fab la-instagram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-intercom"></i>
                </div>
                <div class="text-muted iconLAName">fab la-intercom</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-internet-explorer"></i>
                </div>
                <div class="text-muted iconLAName">fab la-internet-explorer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-invision"></i>
                </div>
                <div class="text-muted iconLAName">fab la-invision</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-ioxhost"></i>
                </div>
                <div class="text-muted iconLAName">fab la-ioxhost</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-italic"></i>
                </div>
                <div class="text-muted iconLAName">la-italic</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-itch-io"></i>
                </div>
                <div class="text-muted iconLAName">fab la-itch-io</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-itunes"></i>
                </div>
                <div class="text-muted iconLAName">fab la-itunes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-itunes-note"></i>
                </div>
                <div class="text-muted iconLAName">fab la-itunes-note</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-java"></i>
                </div>
                <div class="text-muted iconLAName">fab la-java</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-jedi"></i>
                </div>
                <div class="text-muted iconLAName">la-jedi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-jedi-order"></i>
                </div>
                <div class="text-muted iconLAName">fab la-jedi-order</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-jenkins"></i>
                </div>
                <div class="text-muted iconLAName">fab la-jenkins</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-jira"></i>
                </div>
                <div class="text-muted iconLAName">fab la-jira</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-joget"></i>
                </div>
                <div class="text-muted iconLAName">fab la-joget</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-joint"></i>
                </div>
                <div class="text-muted iconLAName">la-joint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-joomla"></i>
                </div>
                <div class="text-muted iconLAName">fab la-joomla</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-journal-whills"></i>
                </div>
                <div class="text-muted iconLAName">la-journal-whills</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-js"></i>
                </div>
                <div class="text-muted iconLAName">fab la-js</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-js-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-js-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-jsfiddle"></i>
                </div>
                <div class="text-muted iconLAName">fab la-jsfiddle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-kaaba"></i>
                </div>
                <div class="text-muted iconLAName">la-kaaba</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-kaggle"></i>
                </div>
                <div class="text-muted iconLAName">fab la-kaggle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-key"></i>
                </div>
                <div class="text-muted iconLAName">la-key</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-keybase"></i>
                </div>
                <div class="text-muted iconLAName">fab la-keybase</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-keyboard"></i>
                </div>
                <div class="text-muted iconLAName">la-keyboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-keycdn"></i>
                </div>
                <div class="text-muted iconLAName">fab la-keycdn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-khanda"></i>
                </div>
                <div class="text-muted iconLAName">la-khanda</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-kickstarter"></i>
                </div>
                <div class="text-muted iconLAName">fab la-kickstarter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-kickstarter-k"></i>
                </div>
                <div class="text-muted iconLAName">fab la-kickstarter-k</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-kiss"></i>
                </div>
                <div class="text-muted iconLAName">la-kiss</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-kiss-beam"></i>
                </div>
                <div class="text-muted iconLAName">la-kiss-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-kiss-wink-heart"></i>
                </div>
                <div class="text-muted iconLAName">la-kiss-wink-heart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-kiwi-bird"></i>
                </div>
                <div class="text-muted iconLAName">la-kiwi-bird</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-korvue"></i>
                </div>
                <div class="text-muted iconLAName">fab la-korvue</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-landmark"></i>
                </div>
                <div class="text-muted iconLAName">la-landmark</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-language"></i>
                </div>
                <div class="text-muted iconLAName">la-language</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-laptop"></i>
                </div>
                <div class="text-muted iconLAName">la-laptop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-laptop-code"></i>
                </div>
                <div class="text-muted iconLAName">la-laptop-code</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-laptop-medical"></i>
                </div>
                <div class="text-muted iconLAName">la-laptop-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-laravel"></i>
                </div>
                <div class="text-muted iconLAName">fab la-laravel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-lastfm"></i>
                </div>
                <div class="text-muted iconLAName">fab la-lastfm</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-lastfm-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-lastfm-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-laugh"></i>
                </div>
                <div class="text-muted iconLAName">la-laugh</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-laugh-beam"></i>
                </div>
                <div class="text-muted iconLAName">la-laugh-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-laugh-squint"></i>
                </div>
                <div class="text-muted iconLAName">la-laugh-squint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-laugh-wink"></i>
                </div>
                <div class="text-muted iconLAName">la-laugh-wink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-layer-group"></i>
                </div>
                <div class="text-muted iconLAName">la-layer-group</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-leaf"></i>
                </div>
                <div class="text-muted iconLAName">la-leaf</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-leanpub"></i>
                </div>
                <div class="text-muted iconLAName">fab la-leanpub</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-lemon"></i>
                </div>
                <div class="text-muted iconLAName">la-lemon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-less"></i>
                </div>
                <div class="text-muted iconLAName">fab la-less</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-less-than"></i>
                </div>
                <div class="text-muted iconLAName">la-less-than</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-less-than-equal"></i>
                </div>
                <div class="text-muted iconLAName">la-less-than-equal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-level-down-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-level-down-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-level-up-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-level-up-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-life-ring"></i>
                </div>
                <div class="text-muted iconLAName">la-life-ring</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-lightbulb"></i>
                </div>
                <div class="text-muted iconLAName">la-lightbulb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-line"></i>
                </div>
                <div class="text-muted iconLAName">fab la-line</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-link"></i>
                </div>
                <div class="text-muted iconLAName">la-link</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-linkedin"></i>
                </div>
                <div class="text-muted iconLAName">fab la-linkedin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-linkedin-in"></i>
                </div>
                <div class="text-muted iconLAName">fab la-linkedin-in</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-linode"></i>
                </div>
                <div class="text-muted iconLAName">fab la-linode</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-linux"></i>
                </div>
                <div class="text-muted iconLAName">fab la-linux</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-lira-sign"></i>
                </div>
                <div class="text-muted iconLAName">la-lira-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-list"></i>
                </div>
                <div class="text-muted iconLAName">la-list</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-list-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-list-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-list-ol"></i>
                </div>
                <div class="text-muted iconLAName">la-list-ol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-list-ul"></i>
                </div>
                <div class="text-muted iconLAName">la-list-ul</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-location-arrow"></i>
                </div>
                <div class="text-muted iconLAName">la-location-arrow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-lock"></i>
                </div>
                <div class="text-muted iconLAName">la-lock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-lock-open"></i>
                </div>
                <div class="text-muted iconLAName">la-lock-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-long-arrow-alt-down"></i>
                </div>
                <div class="text-muted iconLAName">la-long-arrow-alt-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-long-arrow-alt-left"></i>
                </div>
                <div class="text-muted iconLAName">la-long-arrow-alt-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-long-arrow-alt-right"></i>
                </div>
                <div class="text-muted iconLAName">la-long-arrow-alt-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-long-arrow-alt-up"></i>
                </div>
                <div class="text-muted iconLAName">la-long-arrow-alt-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-low-vision"></i>
                </div>
                <div class="text-muted iconLAName">la-low-vision</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-luggage-cart"></i>
                </div>
                <div class="text-muted iconLAName">la-luggage-cart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-lyft"></i>
                </div>
                <div class="text-muted iconLAName">fab la-lyft</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-magento"></i>
                </div>
                <div class="text-muted iconLAName">fab la-magento</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-magic"></i>
                </div>
                <div class="text-muted iconLAName">la-magic</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-magnet"></i>
                </div>
                <div class="text-muted iconLAName">la-magnet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mail-bulk"></i>
                </div>
                <div class="text-muted iconLAName">la-mail-bulk</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-mailchimp"></i>
                </div>
                <div class="text-muted iconLAName">fab la-mailchimp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-male"></i>
                </div>
                <div class="text-muted iconLAName">la-male</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-mandalorian"></i>
                </div>
                <div class="text-muted iconLAName">fab la-mandalorian</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-map"></i>
                </div>
                <div class="text-muted iconLAName">la-map</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-map-marked"></i>
                </div>
                <div class="text-muted iconLAName">la-map-marked</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-map-marked-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-map-marked-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-map-marker"></i>
                </div>
                <div class="text-muted iconLAName">la-map-marker</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-map-marker-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-map-marker-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-map-pin"></i>
                </div>
                <div class="text-muted iconLAName">la-map-pin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-map-signs"></i>
                </div>
                <div class="text-muted iconLAName">la-map-signs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-markdown"></i>
                </div>
                <div class="text-muted iconLAName">fab la-markdown</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-marker"></i>
                </div>
                <div class="text-muted iconLAName">la-marker</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mars"></i>
                </div>
                <div class="text-muted iconLAName">la-mars</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mars-double"></i>
                </div>
                <div class="text-muted iconLAName">la-mars-double</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mars-stroke"></i>
                </div>
                <div class="text-muted iconLAName">la-mars-stroke</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mars-stroke-h"></i>
                </div>
                <div class="text-muted iconLAName">la-mars-stroke-h</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mars-stroke-v"></i>
                </div>
                <div class="text-muted iconLAName">la-mars-stroke-v</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mask"></i>
                </div>
                <div class="text-muted iconLAName">la-mask</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-mastodon"></i>
                </div>
                <div class="text-muted iconLAName">fab la-mastodon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-maxcdn"></i>
                </div>
                <div class="text-muted iconLAName">fab la-maxcdn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-mdb"></i>
                </div>
                <div class="text-muted iconLAName">fab la-mdb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-medal"></i>
                </div>
                <div class="text-muted iconLAName">la-medal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-medapps"></i>
                </div>
                <div class="text-muted iconLAName">fab la-medapps</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-medium"></i>
                </div>
                <div class="text-muted iconLAName">fab la-medium</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-medium-m"></i>
                </div>
                <div class="text-muted iconLAName">fab la-medium-m</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-medkit"></i>
                </div>
                <div class="text-muted iconLAName">la-medkit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-medrt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-medrt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-meetup"></i>
                </div>
                <div class="text-muted iconLAName">fab la-meetup</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-megaport"></i>
                </div>
                <div class="text-muted iconLAName">fab la-megaport</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-meh"></i>
                </div>
                <div class="text-muted iconLAName">la-meh</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-meh-blank"></i>
                </div>
                <div class="text-muted iconLAName">la-meh-blank</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-meh-rolling-eyes"></i>
                </div>
                <div class="text-muted iconLAName">la-meh-rolling-eyes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-memory"></i>
                </div>
                <div class="text-muted iconLAName">la-memory</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-mendeley"></i>
                </div>
                <div class="text-muted iconLAName">fab la-mendeley</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-menorah"></i>
                </div>
                <div class="text-muted iconLAName">la-menorah</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mercury"></i>
                </div>
                <div class="text-muted iconLAName">la-mercury</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-meteor"></i>
                </div>
                <div class="text-muted iconLAName">la-meteor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-microchip"></i>
                </div>
                <div class="text-muted iconLAName">la-microchip</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-microphone"></i>
                </div>
                <div class="text-muted iconLAName">la-microphone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-microphone-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-microphone-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-microphone-alt-slash"></i>
                </div>
                <div class="text-muted iconLAName">la-microphone-alt-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-microphone-slash"></i>
                </div>
                <div class="text-muted iconLAName">la-microphone-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-microscope"></i>
                </div>
                <div class="text-muted iconLAName">la-microscope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-microsoft"></i>
                </div>
                <div class="text-muted iconLAName">fab la-microsoft</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-minus"></i>
                </div>
                <div class="text-muted iconLAName">la-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-minus-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-minus-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-minus-square"></i>
                </div>
                <div class="text-muted iconLAName">la-minus-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mitten"></i>
                </div>
                <div class="text-muted iconLAName">la-mitten</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-mix"></i>
                </div>
                <div class="text-muted iconLAName">fab la-mix</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-mixcloud"></i>
                </div>
                <div class="text-muted iconLAName">fab la-mixcloud</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-mizuni"></i>
                </div>
                <div class="text-muted iconLAName">fab la-mizuni</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mobile"></i>
                </div>
                <div class="text-muted iconLAName">la-mobile</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mobile-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-mobile-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-modx"></i>
                </div>
                <div class="text-muted iconLAName">fab la-modx</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-monero"></i>
                </div>
                <div class="text-muted iconLAName">fab la-monero</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-money-bill"></i>
                </div>
                <div class="text-muted iconLAName">la-money-bill</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-money-bill-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-money-bill-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-money-bill-wave"></i>
                </div>
                <div class="text-muted iconLAName">la-money-bill-wave</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-money-bill-wave-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-money-bill-wave-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-money-check"></i>
                </div>
                <div class="text-muted iconLAName">la-money-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-money-check-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-money-check-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-monument"></i>
                </div>
                <div class="text-muted iconLAName">la-monument</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-moon"></i>
                </div>
                <div class="text-muted iconLAName">la-moon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mortar-pestle"></i>
                </div>
                <div class="text-muted iconLAName">la-mortar-pestle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mosque"></i>
                </div>
                <div class="text-muted iconLAName">la-mosque</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-motorcycle"></i>
                </div>
                <div class="text-muted iconLAName">la-motorcycle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mountain"></i>
                </div>
                <div class="text-muted iconLAName">la-mountain</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mouse"></i>
                </div>
                <div class="text-muted iconLAName">la-mouse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mouse-pointer"></i>
                </div>
                <div class="text-muted iconLAName">la-mouse-pointer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mug-hot"></i>
                </div>
                <div class="text-muted iconLAName">la-mug-hot</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-music"></i>
                </div>
                <div class="text-muted iconLAName">la-music</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-napster"></i>
                </div>
                <div class="text-muted iconLAName">fab la-napster</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-neos"></i>
                </div>
                <div class="text-muted iconLAName">fab la-neos</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-network-wired"></i>
                </div>
                <div class="text-muted iconLAName">la-network-wired</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-neuter"></i>
                </div>
                <div class="text-muted iconLAName">la-neuter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-newspaper"></i>
                </div>
                <div class="text-muted iconLAName">la-newspaper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-nimblr"></i>
                </div>
                <div class="text-muted iconLAName">fab la-nimblr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-node"></i>
                </div>
                <div class="text-muted iconLAName">fab la-node</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-node-js"></i>
                </div>
                <div class="text-muted iconLAName">fab la-node-js</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-not-equal"></i>
                </div>
                <div class="text-muted iconLAName">la-not-equal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-notes-medical"></i>
                </div>
                <div class="text-muted iconLAName">la-notes-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-npm"></i>
                </div>
                <div class="text-muted iconLAName">fab la-npm</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-ns8"></i>
                </div>
                <div class="text-muted iconLAName">fab la-ns8</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-nutritionix"></i>
                </div>
                <div class="text-muted iconLAName">fab la-nutritionix</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-object-group"></i>
                </div>
                <div class="text-muted iconLAName">la-object-group</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-object-ungroup"></i>
                </div>
                <div class="text-muted iconLAName">la-object-ungroup</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-odnoklassniki"></i>
                </div>
                <div class="text-muted iconLAName">fab la-odnoklassniki</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-odnoklassniki-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-odnoklassniki-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-oil-can"></i>
                </div>
                <div class="text-muted iconLAName">la-oil-can</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-old-republic"></i>
                </div>
                <div class="text-muted iconLAName">fab la-old-republic</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-om"></i>
                </div>
                <div class="text-muted iconLAName">la-om</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-opencart"></i>
                </div>
                <div class="text-muted iconLAName">fab la-opencart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-openid"></i>
                </div>
                <div class="text-muted iconLAName">fab la-openid</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-opera"></i>
                </div>
                <div class="text-muted iconLAName">fab la-opera</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-optin-monster"></i>
                </div>
                <div class="text-muted iconLAName">fab la-optin-monster</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-orcid"></i>
                </div>
                <div class="text-muted iconLAName">fab la-orcid</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-osi"></i>
                </div>
                <div class="text-muted iconLAName">fab la-osi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-otter"></i>
                </div>
                <div class="text-muted iconLAName">la-otter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-outdent"></i>
                </div>
                <div class="text-muted iconLAName">la-outdent</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-page4"></i>
                </div>
                <div class="text-muted iconLAName">fab la-page4</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-pagelines"></i>
                </div>
                <div class="text-muted iconLAName">fab la-pagelines</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pager"></i>
                </div>
                <div class="text-muted iconLAName">la-pager</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-paint-brush"></i>
                </div>
                <div class="text-muted iconLAName">la-paint-brush</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-paint-roller"></i>
                </div>
                <div class="text-muted iconLAName">la-paint-roller</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-palette"></i>
                </div>
                <div class="text-muted iconLAName">la-palette</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-palfed"></i>
                </div>
                <div class="text-muted iconLAName">fab la-palfed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pallet"></i>
                </div>
                <div class="text-muted iconLAName">la-pallet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-paper-plane"></i>
                </div>
                <div class="text-muted iconLAName">la-paper-plane</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-paperclip"></i>
                </div>
                <div class="text-muted iconLAName">la-paperclip</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-parachute-box"></i>
                </div>
                <div class="text-muted iconLAName">la-parachute-box</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-paragraph"></i>
                </div>
                <div class="text-muted iconLAName">la-paragraph</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-parking"></i>
                </div>
                <div class="text-muted iconLAName">la-parking</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-passport"></i>
                </div>
                <div class="text-muted iconLAName">la-passport</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pastafarianism"></i>
                </div>
                <div class="text-muted iconLAName">la-pastafarianism</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-paste"></i>
                </div>
                <div class="text-muted iconLAName">la-paste</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-patreon"></i>
                </div>
                <div class="text-muted iconLAName">fab la-patreon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pause"></i>
                </div>
                <div class="text-muted iconLAName">la-pause</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pause-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-pause-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-paw"></i>
                </div>
                <div class="text-muted iconLAName">la-paw</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-paypal"></i>
                </div>
                <div class="text-muted iconLAName">fab la-paypal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-peace"></i>
                </div>
                <div class="text-muted iconLAName">la-peace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pen"></i>
                </div>
                <div class="text-muted iconLAName">la-pen</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pen-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-pen-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pen-fancy"></i>
                </div>
                <div class="text-muted iconLAName">la-pen-fancy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pen-nib"></i>
                </div>
                <div class="text-muted iconLAName">la-pen-nib</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pen-square"></i>
                </div>
                <div class="text-muted iconLAName">la-pen-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pencil-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-pencil-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pencil-ruler"></i>
                </div>
                <div class="text-muted iconLAName">la-pencil-ruler</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-penny-arcade"></i>
                </div>
                <div class="text-muted iconLAName">fab la-penny-arcade</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-people-carry"></i>
                </div>
                <div class="text-muted iconLAName">la-people-carry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pepper-hot"></i>
                </div>
                <div class="text-muted iconLAName">la-pepper-hot</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-percent"></i>
                </div>
                <div class="text-muted iconLAName">la-percent</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-percentage"></i>
                </div>
                <div class="text-muted iconLAName">la-percentage</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-periscope"></i>
                </div>
                <div class="text-muted iconLAName">fab la-periscope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-person-booth"></i>
                </div>
                <div class="text-muted iconLAName">la-person-booth</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-phabricator"></i>
                </div>
                <div class="text-muted iconLAName">fab la-phabricator</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-phoenix-framework"></i>
                </div>
                <div class="text-muted iconLAName">fab la-phoenix-framework</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-phoenix-squadron"></i>
                </div>
                <div class="text-muted iconLAName">fab la-phoenix-squadron</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-phone"></i>
                </div>
                <div class="text-muted iconLAName">la-phone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-phone-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-phone-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-phone-slash"></i>
                </div>
                <div class="text-muted iconLAName">la-phone-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-phone-square"></i>
                </div>
                <div class="text-muted iconLAName">la-phone-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-phone-square-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-phone-square-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-phone-volume"></i>
                </div>
                <div class="text-muted iconLAName">la-phone-volume</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-photo-video"></i>
                </div>
                <div class="text-muted iconLAName">la-photo-video</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-php"></i>
                </div>
                <div class="text-muted iconLAName">fab la-php</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-pied-piper"></i>
                </div>
                <div class="text-muted iconLAName">fab la-pied-piper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-pied-piper-alt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-pied-piper-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-pied-piper-hat"></i>
                </div>
                <div class="text-muted iconLAName">fab la-pied-piper-hat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-pied-piper-pp"></i>
                </div>
                <div class="text-muted iconLAName">fab la-pied-piper-pp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-piggy-bank"></i>
                </div>
                <div class="text-muted iconLAName">la-piggy-bank</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pills"></i>
                </div>
                <div class="text-muted iconLAName">la-pills</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-pinterest"></i>
                </div>
                <div class="text-muted iconLAName">fab la-pinterest</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-pinterest-p"></i>
                </div>
                <div class="text-muted iconLAName">fab la-pinterest-p</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-pinterest-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-pinterest-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pizza-slice"></i>
                </div>
                <div class="text-muted iconLAName">la-pizza-slice</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-place-of-worship"></i>
                </div>
                <div class="text-muted iconLAName">la-place-of-worship</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-plane"></i>
                </div>
                <div class="text-muted iconLAName">la-plane</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-plane-arrival"></i>
                </div>
                <div class="text-muted iconLAName">la-plane-arrival</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-plane-departure"></i>
                </div>
                <div class="text-muted iconLAName">la-plane-departure</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-play"></i>
                </div>
                <div class="text-muted iconLAName">la-play</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-play-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-play-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-playstation"></i>
                </div>
                <div class="text-muted iconLAName">fab la-playstation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-plug"></i>
                </div>
                <div class="text-muted iconLAName">la-plug</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-plus"></i>
                </div>
                <div class="text-muted iconLAName">la-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-plus-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-plus-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-plus-square"></i>
                </div>
                <div class="text-muted iconLAName">la-plus-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-podcast"></i>
                </div>
                <div class="text-muted iconLAName">la-podcast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-poll"></i>
                </div>
                <div class="text-muted iconLAName">la-poll</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-poll-h"></i>
                </div>
                <div class="text-muted iconLAName">la-poll-h</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-poo"></i>
                </div>
                <div class="text-muted iconLAName">la-poo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-poo-storm"></i>
                </div>
                <div class="text-muted iconLAName">la-poo-storm</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-poop"></i>
                </div>
                <div class="text-muted iconLAName">la-poop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-portrait"></i>
                </div>
                <div class="text-muted iconLAName">la-portrait</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pound-sign"></i>
                </div>
                <div class="text-muted iconLAName">la-pound-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-power-off"></i>
                </div>
                <div class="text-muted iconLAName">la-power-off</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pray"></i>
                </div>
                <div class="text-muted iconLAName">la-pray</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-praying-hands"></i>
                </div>
                <div class="text-muted iconLAName">la-praying-hands</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-prescription"></i>
                </div>
                <div class="text-muted iconLAName">la-prescription</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-prescription-bottle"></i>
                </div>
                <div class="text-muted iconLAName">la-prescription-bottle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-prescription-bottle-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-prescription-bottle-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-print"></i>
                </div>
                <div class="text-muted iconLAName">la-print</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-procedures"></i>
                </div>
                <div class="text-muted iconLAName">la-procedures</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-product-hunt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-product-hunt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-project-diagram"></i>
                </div>
                <div class="text-muted iconLAName">la-project-diagram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-pushed"></i>
                </div>
                <div class="text-muted iconLAName">fab la-pushed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-puzzle-piece"></i>
                </div>
                <div class="text-muted iconLAName">la-puzzle-piece</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-python"></i>
                </div>
                <div class="text-muted iconLAName">fab la-python</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-qq"></i>
                </div>
                <div class="text-muted iconLAName">fab la-qq</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-qrcode"></i>
                </div>
                <div class="text-muted iconLAName">la-qrcode</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-question"></i>
                </div>
                <div class="text-muted iconLAName">la-question</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-question-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-question-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-quidditch"></i>
                </div>
                <div class="text-muted iconLAName">la-quidditch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-quinscape"></i>
                </div>
                <div class="text-muted iconLAName">fab la-quinscape</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-quora"></i>
                </div>
                <div class="text-muted iconLAName">fab la-quora</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-quote-left"></i>
                </div>
                <div class="text-muted iconLAName">la-quote-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-quote-right"></i>
                </div>
                <div class="text-muted iconLAName">la-quote-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-quran"></i>
                </div>
                <div class="text-muted iconLAName">la-quran</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-r-project"></i>
                </div>
                <div class="text-muted iconLAName">fab la-r-project</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-radiation"></i>
                </div>
                <div class="text-muted iconLAName">la-radiation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-radiation-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-radiation-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-rainbow"></i>
                </div>
                <div class="text-muted iconLAName">la-rainbow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-random"></i>
                </div>
                <div class="text-muted iconLAName">la-random</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-raspberry-pi"></i>
                </div>
                <div class="text-muted iconLAName">fab la-raspberry-pi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-ravelry"></i>
                </div>
                <div class="text-muted iconLAName">fab la-ravelry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-react"></i>
                </div>
                <div class="text-muted iconLAName">fab la-react</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-reacteurope"></i>
                </div>
                <div class="text-muted iconLAName">fab la-reacteurope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-readme"></i>
                </div>
                <div class="text-muted iconLAName">fab la-readme</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-rebel"></i>
                </div>
                <div class="text-muted iconLAName">fab la-rebel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-receipt"></i>
                </div>
                <div class="text-muted iconLAName">la-receipt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-record-vinyl"></i>
                </div>
                <div class="text-muted iconLAName">la-record-vinyl</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-recycle"></i>
                </div>
                <div class="text-muted iconLAName">la-recycle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-red-river"></i>
                </div>
                <div class="text-muted iconLAName">fab la-red-river</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-reddit"></i>
                </div>
                <div class="text-muted iconLAName">fab la-reddit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-reddit-alien"></i>
                </div>
                <div class="text-muted iconLAName">fab la-reddit-alien</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-reddit-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-reddit-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-redhat"></i>
                </div>
                <div class="text-muted iconLAName">fab la-redhat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-redo"></i>
                </div>
                <div class="text-muted iconLAName">la-redo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-redo-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-redo-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-registered"></i>
                </div>
                <div class="text-muted iconLAName">la-registered</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-remove-format"></i>
                </div>
                <div class="text-muted iconLAName">la-remove-format</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-renren"></i>
                </div>
                <div class="text-muted iconLAName">fab la-renren</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-reply"></i>
                </div>
                <div class="text-muted iconLAName">la-reply</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-reply-all"></i>
                </div>
                <div class="text-muted iconLAName">la-reply-all</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-replyd"></i>
                </div>
                <div class="text-muted iconLAName">fab la-replyd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-republican"></i>
                </div>
                <div class="text-muted iconLAName">la-republican</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-researchgate"></i>
                </div>
                <div class="text-muted iconLAName">fab la-researchgate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-resolving"></i>
                </div>
                <div class="text-muted iconLAName">fab la-resolving</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-restroom"></i>
                </div>
                <div class="text-muted iconLAName">la-restroom</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-retweet"></i>
                </div>
                <div class="text-muted iconLAName">la-retweet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-rev"></i>
                </div>
                <div class="text-muted iconLAName">fab la-rev</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ribbon"></i>
                </div>
                <div class="text-muted iconLAName">la-ribbon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ring"></i>
                </div>
                <div class="text-muted iconLAName">la-ring</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-road"></i>
                </div>
                <div class="text-muted iconLAName">la-road</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-robot"></i>
                </div>
                <div class="text-muted iconLAName">la-robot</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-rocket"></i>
                </div>
                <div class="text-muted iconLAName">la-rocket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-rocketchat"></i>
                </div>
                <div class="text-muted iconLAName">fab la-rocketchat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-rockrms"></i>
                </div>
                <div class="text-muted iconLAName">fab la-rockrms</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-route"></i>
                </div>
                <div class="text-muted iconLAName">la-route</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-rss"></i>
                </div>
                <div class="text-muted iconLAName">la-rss</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-rss-square"></i>
                </div>
                <div class="text-muted iconLAName">la-rss-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ruble-sign"></i>
                </div>
                <div class="text-muted iconLAName">la-ruble-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ruler"></i>
                </div>
                <div class="text-muted iconLAName">la-ruler</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ruler-combined"></i>
                </div>
                <div class="text-muted iconLAName">la-ruler-combined</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ruler-horizontal"></i>
                </div>
                <div class="text-muted iconLAName">la-ruler-horizontal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ruler-vertical"></i>
                </div>
                <div class="text-muted iconLAName">la-ruler-vertical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-running"></i>
                </div>
                <div class="text-muted iconLAName">la-running</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-rupee-sign"></i>
                </div>
                <div class="text-muted iconLAName">la-rupee-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sad-cry"></i>
                </div>
                <div class="text-muted iconLAName">la-sad-cry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sad-tear"></i>
                </div>
                <div class="text-muted iconLAName">la-sad-tear</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-safari"></i>
                </div>
                <div class="text-muted iconLAName">fab la-safari</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-salesforce"></i>
                </div>
                <div class="text-muted iconLAName">fab la-salesforce</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-sass"></i>
                </div>
                <div class="text-muted iconLAName">fab la-sass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-satellite"></i>
                </div>
                <div class="text-muted iconLAName">la-satellite</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-satellite-dish"></i>
                </div>
                <div class="text-muted iconLAName">la-satellite-dish</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-save"></i>
                </div>
                <div class="text-muted iconLAName">la-save</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-schlix"></i>
                </div>
                <div class="text-muted iconLAName">fab la-schlix</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-school"></i>
                </div>
                <div class="text-muted iconLAName">la-school</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-screwdriver"></i>
                </div>
                <div class="text-muted iconLAName">la-screwdriver</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-scribd"></i>
                </div>
                <div class="text-muted iconLAName">fab la-scribd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-scroll"></i>
                </div>
                <div class="text-muted iconLAName">la-scroll</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sd-card"></i>
                </div>
                <div class="text-muted iconLAName">la-sd-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-search"></i>
                </div>
                <div class="text-muted iconLAName">la-search</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-search-dollar"></i>
                </div>
                <div class="text-muted iconLAName">la-search-dollar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-search-location"></i>
                </div>
                <div class="text-muted iconLAName">la-search-location</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-search-minus"></i>
                </div>
                <div class="text-muted iconLAName">la-search-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-search-plus"></i>
                </div>
                <div class="text-muted iconLAName">la-search-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-searchengin"></i>
                </div>
                <div class="text-muted iconLAName">fab la-searchengin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-seedling"></i>
                </div>
                <div class="text-muted iconLAName">la-seedling</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-sellcast"></i>
                </div>
                <div class="text-muted iconLAName">fab la-sellcast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-sellsy"></i>
                </div>
                <div class="text-muted iconLAName">fab la-sellsy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-server"></i>
                </div>
                <div class="text-muted iconLAName">la-server</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-servicestack"></i>
                </div>
                <div class="text-muted iconLAName">fab la-servicestack</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shapes"></i>
                </div>
                <div class="text-muted iconLAName">la-shapes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-share"></i>
                </div>
                <div class="text-muted iconLAName">la-share</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-share-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-share-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-share-alt-square"></i>
                </div>
                <div class="text-muted iconLAName">la-share-alt-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-share-square"></i>
                </div>
                <div class="text-muted iconLAName">la-share-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shekel-sign"></i>
                </div>
                <div class="text-muted iconLAName">la-shekel-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shield-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-shield-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ship"></i>
                </div>
                <div class="text-muted iconLAName">la-ship</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shipping-fast"></i>
                </div>
                <div class="text-muted iconLAName">la-shipping-fast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-shirtsinbulk"></i>
                </div>
                <div class="text-muted iconLAName">fab la-shirtsinbulk</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shoe-prints"></i>
                </div>
                <div class="text-muted iconLAName">la-shoe-prints</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shopping-bag"></i>
                </div>
                <div class="text-muted iconLAName">la-shopping-bag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shopping-basket"></i>
                </div>
                <div class="text-muted iconLAName">la-shopping-basket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shopping-cart"></i>
                </div>
                <div class="text-muted iconLAName">la-shopping-cart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-shopware"></i>
                </div>
                <div class="text-muted iconLAName">fab la-shopware</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shower"></i>
                </div>
                <div class="text-muted iconLAName">la-shower</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shuttle-van"></i>
                </div>
                <div class="text-muted iconLAName">la-shuttle-van</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sign"></i>
                </div>
                <div class="text-muted iconLAName">la-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sign-in-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-sign-in-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sign-language"></i>
                </div>
                <div class="text-muted iconLAName">la-sign-language</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sign-out-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-sign-out-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-signal"></i>
                </div>
                <div class="text-muted iconLAName">la-signal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-signature"></i>
                </div>
                <div class="text-muted iconLAName">la-signature</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sim-card"></i>
                </div>
                <div class="text-muted iconLAName">la-sim-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-simplybuilt"></i>
                </div>
                <div class="text-muted iconLAName">fab la-simplybuilt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-sistrix"></i>
                </div>
                <div class="text-muted iconLAName">fab la-sistrix</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sitemap"></i>
                </div>
                <div class="text-muted iconLAName">la-sitemap</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-sith"></i>
                </div>
                <div class="text-muted iconLAName">fab la-sith</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-skating"></i>
                </div>
                <div class="text-muted iconLAName">la-skating</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-sketch"></i>
                </div>
                <div class="text-muted iconLAName">fab la-sketch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-skiing"></i>
                </div>
                <div class="text-muted iconLAName">la-skiing</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-skiing-nordic"></i>
                </div>
                <div class="text-muted iconLAName">la-skiing-nordic</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-skull"></i>
                </div>
                <div class="text-muted iconLAName">la-skull</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-skull-crossbones"></i>
                </div>
                <div class="text-muted iconLAName">la-skull-crossbones</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-skyatlas"></i>
                </div>
                <div class="text-muted iconLAName">fab la-skyatlas</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-skype"></i>
                </div>
                <div class="text-muted iconLAName">fab la-skype</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-slack"></i>
                </div>
                <div class="text-muted iconLAName">fab la-slack</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-slack-hash"></i>
                </div>
                <div class="text-muted iconLAName">fab la-slack-hash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-slash"></i>
                </div>
                <div class="text-muted iconLAName">la-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sleigh"></i>
                </div>
                <div class="text-muted iconLAName">la-sleigh</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sliders-h"></i>
                </div>
                <div class="text-muted iconLAName">la-sliders-h</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-slideshare"></i>
                </div>
                <div class="text-muted iconLAName">fab la-slideshare</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-smile"></i>
                </div>
                <div class="text-muted iconLAName">la-smile</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-smile-beam"></i>
                </div>
                <div class="text-muted iconLAName">la-smile-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-smile-wink"></i>
                </div>
                <div class="text-muted iconLAName">la-smile-wink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-smog"></i>
                </div>
                <div class="text-muted iconLAName">la-smog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-smoking"></i>
                </div>
                <div class="text-muted iconLAName">la-smoking</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-smoking-ban"></i>
                </div>
                <div class="text-muted iconLAName">la-smoking-ban</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sms"></i>
                </div>
                <div class="text-muted iconLAName">la-sms</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-snapchat"></i>
                </div>
                <div class="text-muted iconLAName">fab la-snapchat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-snapchat-ghost"></i>
                </div>
                <div class="text-muted iconLAName">fab la-snapchat-ghost</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-snapchat-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-snapchat-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-snowboarding"></i>
                </div>
                <div class="text-muted iconLAName">la-snowboarding</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-snowflake"></i>
                </div>
                <div class="text-muted iconLAName">la-snowflake</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-snowman"></i>
                </div>
                <div class="text-muted iconLAName">la-snowman</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-snowplow"></i>
                </div>
                <div class="text-muted iconLAName">la-snowplow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-socks"></i>
                </div>
                <div class="text-muted iconLAName">la-socks</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-solar-panel"></i>
                </div>
                <div class="text-muted iconLAName">la-solar-panel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort"></i>
                </div>
                <div class="text-muted iconLAName">la-sort</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-alpha-down"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-alpha-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-alpha-down-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-alpha-down-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-alpha-up"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-alpha-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-alpha-up-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-alpha-up-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-amount-down"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-amount-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-amount-down-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-amount-down-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-amount-up"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-amount-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-amount-up-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-amount-up-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-down"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-numeric-down"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-numeric-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-numeric-down-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-numeric-down-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-numeric-up"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-numeric-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-numeric-up-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-numeric-up-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-up"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-soundcloud"></i>
                </div>
                <div class="text-muted iconLAName">fab la-soundcloud</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-sourcetree"></i>
                </div>
                <div class="text-muted iconLAName">fab la-sourcetree</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-spa"></i>
                </div>
                <div class="text-muted iconLAName">la-spa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-space-shuttle"></i>
                </div>
                <div class="text-muted iconLAName">la-space-shuttle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-speakap"></i>
                </div>
                <div class="text-muted iconLAName">fab la-speakap</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-speaker-deck"></i>
                </div>
                <div class="text-muted iconLAName">fab la-speaker-deck</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-spell-check"></i>
                </div>
                <div class="text-muted iconLAName">la-spell-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-spider"></i>
                </div>
                <div class="text-muted iconLAName">la-spider</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-spinner"></i>
                </div>
                <div class="text-muted iconLAName">la-spinner</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-splotch"></i>
                </div>
                <div class="text-muted iconLAName">la-splotch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-spotify"></i>
                </div>
                <div class="text-muted iconLAName">fab la-spotify</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-spray-can"></i>
                </div>
                <div class="text-muted iconLAName">la-spray-can</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-square"></i>
                </div>
                <div class="text-muted iconLAName">la-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-square-full"></i>
                </div>
                <div class="text-muted iconLAName">la-square-full</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-square-root-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-square-root-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-squarespace"></i>
                </div>
                <div class="text-muted iconLAName">fab la-squarespace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-stack-exchange"></i>
                </div>
                <div class="text-muted iconLAName">fab la-stack-exchange</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-stack-overflow"></i>
                </div>
                <div class="text-muted iconLAName">fab la-stack-overflow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-stackpath"></i>
                </div>
                <div class="text-muted iconLAName">fab la-stackpath</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-stamp"></i>
                </div>
                <div class="text-muted iconLAName">la-stamp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-star"></i>
                </div>
                <div class="text-muted iconLAName">la-star</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-star-and-crescent"></i>
                </div>
                <div class="text-muted iconLAName">la-star-and-crescent</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-star-half"></i>
                </div>
                <div class="text-muted iconLAName">la-star-half</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-star-half-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-star-half-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-star-of-david"></i>
                </div>
                <div class="text-muted iconLAName">la-star-of-david</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-star-of-life"></i>
                </div>
                <div class="text-muted iconLAName">la-star-of-life</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-staylinked"></i>
                </div>
                <div class="text-muted iconLAName">fab la-staylinked</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-steam"></i>
                </div>
                <div class="text-muted iconLAName">fab la-steam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-steam-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-steam-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-steam-symbol"></i>
                </div>
                <div class="text-muted iconLAName">fab la-steam-symbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-step-backward"></i>
                </div>
                <div class="text-muted iconLAName">la-step-backward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-step-forward"></i>
                </div>
                <div class="text-muted iconLAName">la-step-forward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-stethoscope"></i>
                </div>
                <div class="text-muted iconLAName">la-stethoscope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-sticker-mule"></i>
                </div>
                <div class="text-muted iconLAName">fab la-sticker-mule</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sticky-note"></i>
                </div>
                <div class="text-muted iconLAName">la-sticky-note</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-stop"></i>
                </div>
                <div class="text-muted iconLAName">la-stop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-stop-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-stop-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-stopwatch"></i>
                </div>
                <div class="text-muted iconLAName">la-stopwatch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-store"></i>
                </div>
                <div class="text-muted iconLAName">la-store</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-store-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-store-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-strava"></i>
                </div>
                <div class="text-muted iconLAName">fab la-strava</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-stream"></i>
                </div>
                <div class="text-muted iconLAName">la-stream</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-street-view"></i>
                </div>
                <div class="text-muted iconLAName">la-street-view</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-strikethrough"></i>
                </div>
                <div class="text-muted iconLAName">la-strikethrough</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-stripe"></i>
                </div>
                <div class="text-muted iconLAName">fab la-stripe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-stripe-s"></i>
                </div>
                <div class="text-muted iconLAName">fab la-stripe-s</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-stroopwafel"></i>
                </div>
                <div class="text-muted iconLAName">la-stroopwafel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-studiovinari"></i>
                </div>
                <div class="text-muted iconLAName">fab la-studiovinari</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-stumbleupon"></i>
                </div>
                <div class="text-muted iconLAName">fab la-stumbleupon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-stumbleupon-circle"></i>
                </div>
                <div class="text-muted iconLAName">fab la-stumbleupon-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-subscript"></i>
                </div>
                <div class="text-muted iconLAName">la-subscript</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-subway"></i>
                </div>
                <div class="text-muted iconLAName">la-subway</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-suitcase"></i>
                </div>
                <div class="text-muted iconLAName">la-suitcase</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-suitcase-rolling"></i>
                </div>
                <div class="text-muted iconLAName">la-suitcase-rolling</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sun"></i>
                </div>
                <div class="text-muted iconLAName">la-sun</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-superpowers"></i>
                </div>
                <div class="text-muted iconLAName">fab la-superpowers</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-superscript"></i>
                </div>
                <div class="text-muted iconLAName">la-superscript</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-supple"></i>
                </div>
                <div class="text-muted iconLAName">fab la-supple</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-surprise"></i>
                </div>
                <div class="text-muted iconLAName">la-surprise</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-suse"></i>
                </div>
                <div class="text-muted iconLAName">fab la-suse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-swatchbook"></i>
                </div>
                <div class="text-muted iconLAName">la-swatchbook</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-swift"></i>
                </div>
                <div class="text-muted iconLAName">fab la-swift</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-swimmer"></i>
                </div>
                <div class="text-muted iconLAName">la-swimmer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-swimming-pool"></i>
                </div>
                <div class="text-muted iconLAName">la-swimming-pool</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-symfony"></i>
                </div>
                <div class="text-muted iconLAName">fab la-symfony</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-synagogue"></i>
                </div>
                <div class="text-muted iconLAName">la-synagogue</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sync"></i>
                </div>
                <div class="text-muted iconLAName">la-sync</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sync-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-sync-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-syringe"></i>
                </div>
                <div class="text-muted iconLAName">la-syringe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-table"></i>
                </div>
                <div class="text-muted iconLAName">la-table</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-table-tennis"></i>
                </div>
                <div class="text-muted iconLAName">la-table-tennis</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tablet"></i>
                </div>
                <div class="text-muted iconLAName">la-tablet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tablet-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-tablet-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tablets"></i>
                </div>
                <div class="text-muted iconLAName">la-tablets</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tachometer-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-tachometer-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tag"></i>
                </div>
                <div class="text-muted iconLAName">la-tag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tags"></i>
                </div>
                <div class="text-muted iconLAName">la-tags</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tape"></i>
                </div>
                <div class="text-muted iconLAName">la-tape</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tasks"></i>
                </div>
                <div class="text-muted iconLAName">la-tasks</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-taxi"></i>
                </div>
                <div class="text-muted iconLAName">la-taxi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-teamspeak"></i>
                </div>
                <div class="text-muted iconLAName">fab la-teamspeak</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-teeth"></i>
                </div>
                <div class="text-muted iconLAName">la-teeth</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-teeth-open"></i>
                </div>
                <div class="text-muted iconLAName">la-teeth-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-telegram"></i>
                </div>
                <div class="text-muted iconLAName">fab la-telegram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-telegram-plane"></i>
                </div>
                <div class="text-muted iconLAName">fab la-telegram-plane</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-temperature-high"></i>
                </div>
                <div class="text-muted iconLAName">la-temperature-high</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-temperature-low"></i>
                </div>
                <div class="text-muted iconLAName">la-temperature-low</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-tencent-weibo"></i>
                </div>
                <div class="text-muted iconLAName">fab la-tencent-weibo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tenge"></i>
                </div>
                <div class="text-muted iconLAName">la-tenge</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-terminal"></i>
                </div>
                <div class="text-muted iconLAName">la-terminal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-text-height"></i>
                </div>
                <div class="text-muted iconLAName">la-text-height</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-text-width"></i>
                </div>
                <div class="text-muted iconLAName">la-text-width</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-th"></i>
                </div>
                <div class="text-muted iconLAName">la-th</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-th-large"></i>
                </div>
                <div class="text-muted iconLAName">la-th-large</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-th-list"></i>
                </div>
                <div class="text-muted iconLAName">la-th-list</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-the-red-yeti"></i>
                </div>
                <div class="text-muted iconLAName">fab la-the-red-yeti</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-theater-masks"></i>
                </div>
                <div class="text-muted iconLAName">la-theater-masks</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-themeco"></i>
                </div>
                <div class="text-muted iconLAName">fab la-themeco</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-themeisle"></i>
                </div>
                <div class="text-muted iconLAName">fab la-themeisle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer-empty"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer-empty</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer-full"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer-full</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer-half"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer-half</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer-quarter"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer-quarter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer-three-quarters"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer-three-quarters</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-think-peaks"></i>
                </div>
                <div class="text-muted iconLAName">fab la-think-peaks</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thumbs-down"></i>
                </div>
                <div class="text-muted iconLAName">la-thumbs-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thumbs-up"></i>
                </div>
                <div class="text-muted iconLAName">la-thumbs-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thumbtack"></i>
                </div>
                <div class="text-muted iconLAName">la-thumbtack</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ticket-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-ticket-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-times"></i>
                </div>
                <div class="text-muted iconLAName">la-times</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-times-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-times-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tint"></i>
                </div>
                <div class="text-muted iconLAName">la-tint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tint-slash"></i>
                </div>
                <div class="text-muted iconLAName">la-tint-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tired"></i>
                </div>
                <div class="text-muted iconLAName">la-tired</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-toggle-off"></i>
                </div>
                <div class="text-muted iconLAName">la-toggle-off</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-toggle-on"></i>
                </div>
                <div class="text-muted iconLAName">la-toggle-on</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-toilet"></i>
                </div>
                <div class="text-muted iconLAName">la-toilet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-toilet-paper"></i>
                </div>
                <div class="text-muted iconLAName">la-toilet-paper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-toolbox"></i>
                </div>
                <div class="text-muted iconLAName">la-toolbox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tools"></i>
                </div>
                <div class="text-muted iconLAName">la-tools</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tooth"></i>
                </div>
                <div class="text-muted iconLAName">la-tooth</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-torah"></i>
                </div>
                <div class="text-muted iconLAName">la-torah</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-torii-gate"></i>
                </div>
                <div class="text-muted iconLAName">la-torii-gate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tractor"></i>
                </div>
                <div class="text-muted iconLAName">la-tractor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-trade-federation"></i>
                </div>
                <div class="text-muted iconLAName">fab la-trade-federation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-trademark"></i>
                </div>
                <div class="text-muted iconLAName">la-trademark</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-traffic-light"></i>
                </div>
                <div class="text-muted iconLAName">la-traffic-light</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-train"></i>
                </div>
                <div class="text-muted iconLAName">la-train</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tram"></i>
                </div>
                <div class="text-muted iconLAName">la-tram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-transgender"></i>
                </div>
                <div class="text-muted iconLAName">la-transgender</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-transgender-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-transgender-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-trash"></i>
                </div>
                <div class="text-muted iconLAName">la-trash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-trash-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-trash-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-trash-restore"></i>
                </div>
                <div class="text-muted iconLAName">la-trash-restore</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-trash-restore-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-trash-restore-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tree"></i>
                </div>
                <div class="text-muted iconLAName">la-tree</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-trello"></i>
                </div>
                <div class="text-muted iconLAName">fab la-trello</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-tripadvisor"></i>
                </div>
                <div class="text-muted iconLAName">fab la-tripadvisor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-trophy"></i>
                </div>
                <div class="text-muted iconLAName">la-trophy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-truck"></i>
                </div>
                <div class="text-muted iconLAName">la-truck</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-truck-loading"></i>
                </div>
                <div class="text-muted iconLAName">la-truck-loading</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-truck-monster"></i>
                </div>
                <div class="text-muted iconLAName">la-truck-monster</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-truck-moving"></i>
                </div>
                <div class="text-muted iconLAName">la-truck-moving</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-truck-pickup"></i>
                </div>
                <div class="text-muted iconLAName">la-truck-pickup</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tshirt"></i>
                </div>
                <div class="text-muted iconLAName">la-tshirt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tty"></i>
                </div>
                <div class="text-muted iconLAName">la-tty</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-tumblr"></i>
                </div>
                <div class="text-muted iconLAName">fab la-tumblr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-tumblr-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-tumblr-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tv"></i>
                </div>
                <div class="text-muted iconLAName">la-tv</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-twitch"></i>
                </div>
                <div class="text-muted iconLAName">fab la-twitch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-twitter"></i>
                </div>
                <div class="text-muted iconLAName">fab la-twitter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-twitter-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-twitter-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-typo3"></i>
                </div>
                <div class="text-muted iconLAName">fab la-typo3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-uber"></i>
                </div>
                <div class="text-muted iconLAName">fab la-uber</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-ubuntu"></i>
                </div>
                <div class="text-muted iconLAName">fab la-ubuntu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-uikit"></i>
                </div>
                <div class="text-muted iconLAName">fab la-uikit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-umbraco"></i>
                </div>
                <div class="text-muted iconLAName">fab la-umbraco</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-umbrella"></i>
                </div>
                <div class="text-muted iconLAName">la-umbrella</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-umbrella-beach"></i>
                </div>
                <div class="text-muted iconLAName">la-umbrella-beach</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-underline"></i>
                </div>
                <div class="text-muted iconLAName">la-underline</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-undo"></i>
                </div>
                <div class="text-muted iconLAName">la-undo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-undo-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-undo-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-uniregistry"></i>
                </div>
                <div class="text-muted iconLAName">fab la-uniregistry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-universal-access"></i>
                </div>
                <div class="text-muted iconLAName">la-universal-access</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-university"></i>
                </div>
                <div class="text-muted iconLAName">la-university</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-unlink"></i>
                </div>
                <div class="text-muted iconLAName">la-unlink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-unlock"></i>
                </div>
                <div class="text-muted iconLAName">la-unlock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-unlock-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-unlock-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-untappd"></i>
                </div>
                <div class="text-muted iconLAName">fab la-untappd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-upload"></i>
                </div>
                <div class="text-muted iconLAName">la-upload</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-ups"></i>
                </div>
                <div class="text-muted iconLAName">fab la-ups</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-usb"></i>
                </div>
                <div class="text-muted iconLAName">fab la-usb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user"></i>
                </div>
                <div class="text-muted iconLAName">la-user</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-user-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-alt-slash"></i>
                </div>
                <div class="text-muted iconLAName">la-user-alt-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-astronaut"></i>
                </div>
                <div class="text-muted iconLAName">la-user-astronaut</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-check"></i>
                </div>
                <div class="text-muted iconLAName">la-user-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-user-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-clock"></i>
                </div>
                <div class="text-muted iconLAName">la-user-clock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-cog"></i>
                </div>
                <div class="text-muted iconLAName">la-user-cog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-edit"></i>
                </div>
                <div class="text-muted iconLAName">la-user-edit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-friends"></i>
                </div>
                <div class="text-muted iconLAName">la-user-friends</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-graduate"></i>
                </div>
                <div class="text-muted iconLAName">la-user-graduate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-injured"></i>
                </div>
                <div class="text-muted iconLAName">la-user-injured</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-lock"></i>
                </div>
                <div class="text-muted iconLAName">la-user-lock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-md"></i>
                </div>
                <div class="text-muted iconLAName">la-user-md</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-minus"></i>
                </div>
                <div class="text-muted iconLAName">la-user-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-ninja"></i>
                </div>
                <div class="text-muted iconLAName">la-user-ninja</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-nurse"></i>
                </div>
                <div class="text-muted iconLAName">la-user-nurse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-plus"></i>
                </div>
                <div class="text-muted iconLAName">la-user-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-secret"></i>
                </div>
                <div class="text-muted iconLAName">la-user-secret</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-shield"></i>
                </div>
                <div class="text-muted iconLAName">la-user-shield</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-slash"></i>
                </div>
                <div class="text-muted iconLAName">la-user-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-tag"></i>
                </div>
                <div class="text-muted iconLAName">la-user-tag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-tie"></i>
                </div>
                <div class="text-muted iconLAName">la-user-tie</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-times"></i>
                </div>
                <div class="text-muted iconLAName">la-user-times</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-users"></i>
                </div>
                <div class="text-muted iconLAName">la-users</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-users-cog"></i>
                </div>
                <div class="text-muted iconLAName">la-users-cog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-usps"></i>
                </div>
                <div class="text-muted iconLAName">fab la-usps</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-ussunnah"></i>
                </div>
                <div class="text-muted iconLAName">fab la-ussunnah</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-utensil-spoon"></i>
                </div>
                <div class="text-muted iconLAName">la-utensil-spoon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-utensils"></i>
                </div>
                <div class="text-muted iconLAName">la-utensils</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-vaadin"></i>
                </div>
                <div class="text-muted iconLAName">fab la-vaadin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-vector-square"></i>
                </div>
                <div class="text-muted iconLAName">la-vector-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-venus"></i>
                </div>
                <div class="text-muted iconLAName">la-venus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-venus-double"></i>
                </div>
                <div class="text-muted iconLAName">la-venus-double</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-venus-mars"></i>
                </div>
                <div class="text-muted iconLAName">la-venus-mars</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-viacoin"></i>
                </div>
                <div class="text-muted iconLAName">fab la-viacoin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-viadeo"></i>
                </div>
                <div class="text-muted iconLAName">fab la-viadeo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-viadeo-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-viadeo-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-vial"></i>
                </div>
                <div class="text-muted iconLAName">la-vial</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-vials"></i>
                </div>
                <div class="text-muted iconLAName">la-vials</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-viber"></i>
                </div>
                <div class="text-muted iconLAName">fab la-viber</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-video"></i>
                </div>
                <div class="text-muted iconLAName">la-video</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-video-slash"></i>
                </div>
                <div class="text-muted iconLAName">la-video-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-vihara"></i>
                </div>
                <div class="text-muted iconLAName">la-vihara</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-vimeo"></i>
                </div>
                <div class="text-muted iconLAName">fab la-vimeo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-vimeo-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-vimeo-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-vimeo-v"></i>
                </div>
                <div class="text-muted iconLAName">fab la-vimeo-v</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-vine"></i>
                </div>
                <div class="text-muted iconLAName">fab la-vine</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-vk"></i>
                </div>
                <div class="text-muted iconLAName">fab la-vk</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-vnv"></i>
                </div>
                <div class="text-muted iconLAName">fab la-vnv</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-voicemail"></i>
                </div>
                <div class="text-muted iconLAName">la-voicemail</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-volleyball-ball"></i>
                </div>
                <div class="text-muted iconLAName">la-volleyball-ball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-volume-down"></i>
                </div>
                <div class="text-muted iconLAName">la-volume-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-volume-mute"></i>
                </div>
                <div class="text-muted iconLAName">la-volume-mute</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-volume-off"></i>
                </div>
                <div class="text-muted iconLAName">la-volume-off</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-volume-up"></i>
                </div>
                <div class="text-muted iconLAName">la-volume-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-vote-yea"></i>
                </div>
                <div class="text-muted iconLAName">la-vote-yea</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-vr-cardboard"></i>
                </div>
                <div class="text-muted iconLAName">la-vr-cardboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-vuejs"></i>
                </div>
                <div class="text-muted iconLAName">fab la-vuejs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-walking"></i>
                </div>
                <div class="text-muted iconLAName">la-walking</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-wallet"></i>
                </div>
                <div class="text-muted iconLAName">la-wallet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-warehouse"></i>
                </div>
                <div class="text-muted iconLAName">la-warehouse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-water"></i>
                </div>
                <div class="text-muted iconLAName">la-water</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-wave-square"></i>
                </div>
                <div class="text-muted iconLAName">la-wave-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-waze"></i>
                </div>
                <div class="text-muted iconLAName">fab la-waze</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-weebly"></i>
                </div>
                <div class="text-muted iconLAName">fab la-weebly</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-weibo"></i>
                </div>
                <div class="text-muted iconLAName">fab la-weibo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-weight"></i>
                </div>
                <div class="text-muted iconLAName">la-weight</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-weight-hanging"></i>
                </div>
                <div class="text-muted iconLAName">la-weight-hanging</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-weixin"></i>
                </div>
                <div class="text-muted iconLAName">fab la-weixin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-whatsapp"></i>
                </div>
                <div class="text-muted iconLAName">fab la-whatsapp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-whatsapp-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-whatsapp-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-wheelchair"></i>
                </div>
                <div class="text-muted iconLAName">la-wheelchair</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-whmcs"></i>
                </div>
                <div class="text-muted iconLAName">fab la-whmcs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-wifi"></i>
                </div>
                <div class="text-muted iconLAName">la-wifi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-wikipedia-w"></i>
                </div>
                <div class="text-muted iconLAName">fab la-wikipedia-w</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-wind"></i>
                </div>
                <div class="text-muted iconLAName">la-wind</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-window-close"></i>
                </div>
                <div class="text-muted iconLAName">la-window-close</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-window-maximize"></i>
                </div>
                <div class="text-muted iconLAName">la-window-maximize</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-window-minimize"></i>
                </div>
                <div class="text-muted iconLAName">la-window-minimize</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-window-restore"></i>
                </div>
                <div class="text-muted iconLAName">la-window-restore</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-windows"></i>
                </div>
                <div class="text-muted iconLAName">fab la-windows</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-wine-bottle"></i>
                </div>
                <div class="text-muted iconLAName">la-wine-bottle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-wine-glass"></i>
                </div>
                <div class="text-muted iconLAName">la-wine-glass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-wine-glass-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-wine-glass-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-wix"></i>
                </div>
                <div class="text-muted iconLAName">fab la-wix</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-wizards-of-the-coast"></i>
                </div>
                <div class="text-muted iconLAName">fab la-wizards-of-the-coast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-wolf-pack-battalion"></i>
                </div>
                <div class="text-muted iconLAName">fab la-wolf-pack-battalion</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-won-sign"></i>
                </div>
                <div class="text-muted iconLAName">la-won-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-wordpress"></i>
                </div>
                <div class="text-muted iconLAName">fab la-wordpress</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-wordpress-simple"></i>
                </div>
                <div class="text-muted iconLAName">fab la-wordpress-simple</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-wpbeginner"></i>
                </div>
                <div class="text-muted iconLAName">fab la-wpbeginner</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-wpexplorer"></i>
                </div>
                <div class="text-muted iconLAName">fab la-wpexplorer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-wpforms"></i>
                </div>
                <div class="text-muted iconLAName">fab la-wpforms</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-wpressr"></i>
                </div>
                <div class="text-muted iconLAName">fab la-wpressr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-wrench"></i>
                </div>
                <div class="text-muted iconLAName">la-wrench</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-x-ray"></i>
                </div>
                <div class="text-muted iconLAName">la-x-ray</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-xbox"></i>
                </div>
                <div class="text-muted iconLAName">fab la-xbox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-xing"></i>
                </div>
                <div class="text-muted iconLAName">fab la-xing</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-xing-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-xing-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-y-combinator"></i>
                </div>
                <div class="text-muted iconLAName">fab la-y-combinator</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-yahoo"></i>
                </div>
                <div class="text-muted iconLAName">fab la-yahoo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-yammer"></i>
                </div>
                <div class="text-muted iconLAName">fab la-yammer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-yandex"></i>
                </div>
                <div class="text-muted iconLAName">fab la-yandex</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-yandex-international"></i>
                </div>
                <div class="text-muted iconLAName">fab la-yandex-international</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-yarn"></i>
                </div>
                <div class="text-muted iconLAName">fab la-yarn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-yelp"></i>
                </div>
                <div class="text-muted iconLAName">fab la-yelp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-yen-sign"></i>
                </div>
                <div class="text-muted iconLAName">la-yen-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-yin-yang"></i>
                </div>
                <div class="text-muted iconLAName">la-yin-yang</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-yoast"></i>
                </div>
                <div class="text-muted iconLAName">fab la-yoast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-youtube"></i>
                </div>
                <div class="text-muted iconLAName">fab la-youtube</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-youtube-square"></i>
                </div>
                <div class="text-muted iconLAName">fab la-youtube-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-zhihu"></i>
                </div>
                <div class="text-muted iconLAName">fab la-zhihu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-glass"></i>
                </div>
                <div class="text-muted iconLAName">la-glass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-star-o"></i>
                </div>
                <div class="text-muted iconLAName">la-star-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-remove"></i>
                </div>
                <div class="text-muted iconLAName">la-remove</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-close"></i>
                </div>
                <div class="text-muted iconLAName">la-close</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-gear"></i>
                </div>
                <div class="text-muted iconLAName">la-gear</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-trash-o"></i>
                </div>
                <div class="text-muted iconLAName">la-trash-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-clock-o"></i>
                </div>
                <div class="text-muted iconLAName">la-clock-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-circle-o-down"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-circle-o-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-circle-o-up"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-circle-o-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-play-circle-o"></i>
                </div>
                <div class="text-muted iconLAName">la-play-circle-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-repeat"></i>
                </div>
                <div class="text-muted iconLAName">la-repeat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-rotate-right"></i>
                </div>
                <div class="text-muted iconLAName">la-rotate-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-refresh"></i>
                </div>
                <div class="text-muted iconLAName">la-refresh</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dedent"></i>
                </div>
                <div class="text-muted iconLAName">la-dedent</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-video-camera"></i>
                </div>
                <div class="text-muted iconLAName">la-video-camera</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-picture-o"></i>
                </div>
                <div class="text-muted iconLAName">la-picture-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-photo"></i>
                </div>
                <div class="text-muted iconLAName">la-photo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-image"></i>
                </div>
                <div class="text-muted iconLAName">la-image</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pencil"></i>
                </div>
                <div class="text-muted iconLAName">la-pencil</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-map-marker"></i>
                </div>
                <div class="text-muted iconLAName">la-map-marker</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pencil-square-o"></i>
                </div>
                <div class="text-muted iconLAName">la-pencil-square-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-share-square-o"></i>
                </div>
                <div class="text-muted iconLAName">la-share-square-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-check-square-o"></i>
                </div>
                <div class="text-muted iconLAName">la-check-square-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrows"></i>
                </div>
                <div class="text-muted iconLAName">la-arrows</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-times-circle-o"></i>
                </div>
                <div class="text-muted iconLAName">la-times-circle-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-check-circle-o"></i>
                </div>
                <div class="text-muted iconLAName">la-check-circle-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mail-forward"></i>
                </div>
                <div class="text-muted iconLAName">la-mail-forward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-warning"></i>
                </div>
                <div class="text-muted iconLAName">la-warning</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrows-v"></i>
                </div>
                <div class="text-muted iconLAName">la-arrows-v</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrows-h"></i>
                </div>
                <div class="text-muted iconLAName">la-arrows-h</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bar-chart"></i>
                </div>
                <div class="text-muted iconLAName">la-bar-chart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bar-chart-o"></i>
                </div>
                <div class="text-muted iconLAName">la-bar-chart-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-gears"></i>
                </div>
                <div class="text-muted iconLAName">la-gears</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thumbs-o-up"></i>
                </div>
                <div class="text-muted iconLAName">la-thumbs-o-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thumbs-o-down"></i>
                </div>
                <div class="text-muted iconLAName">la-thumbs-o-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-heart-o"></i>
                </div>
                <div class="text-muted iconLAName">la-heart-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sign-out"></i>
                </div>
                <div class="text-muted iconLAName">la-sign-out</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-linkedin-square"></i>
                </div>
                <div class="text-muted iconLAName">la-linkedin-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thumb-tack"></i>
                </div>
                <div class="text-muted iconLAName">la-thumb-tack</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-external-link"></i>
                </div>
                <div class="text-muted iconLAName">la-external-link</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sign-in"></i>
                </div>
                <div class="text-muted iconLAName">la-sign-in</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-lemon-o"></i>
                </div>
                <div class="text-muted iconLAName">la-lemon-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-square-o"></i>
                </div>
                <div class="text-muted iconLAName">la-square-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bookmark-o"></i>
                </div>
                <div class="text-muted iconLAName">la-bookmark-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-facebook"></i>
                </div>
                <div class="text-muted iconLAName">fab la-facebook</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-facebook-f"></i>
                </div>
                <div class="text-muted iconLAName">fab la-facebook-f</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-feed"></i>
                </div>
                <div class="text-muted iconLAName">la-feed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hdd-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hdd-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-o-right"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-o-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-o-left"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-o-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-o-up"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-o-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-o-down"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-o-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrows-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-arrows-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-group"></i>
                </div>
                <div class="text-muted iconLAName">la-group</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chain"></i>
                </div>
                <div class="text-muted iconLAName">la-chain</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-scissors"></i>
                </div>
                <div class="text-muted iconLAName">la-scissors</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-files-o"></i>
                </div>
                <div class="text-muted iconLAName">la-files-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-floppy-o"></i>
                </div>
                <div class="text-muted iconLAName">la-floppy-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-navicon"></i>
                </div>
                <div class="text-muted iconLAName">la-navicon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-reorder"></i>
                </div>
                <div class="text-muted iconLAName">la-reorder</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-google-plus"></i>
                </div>
                <div class="text-muted iconLAName">fab la-google-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-money"></i>
                </div>
                <div class="text-muted iconLAName">la-money</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-unsorted"></i>
                </div>
                <div class="text-muted iconLAName">la-unsorted</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-desc"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-desc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-asc"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-asc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-linkedin"></i>
                </div>
                <div class="text-muted iconLAName">fab la-linkedin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-rotate-left"></i>
                </div>
                <div class="text-muted iconLAName">la-rotate-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-legal"></i>
                </div>
                <div class="text-muted iconLAName">la-legal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tachometer"></i>
                </div>
                <div class="text-muted iconLAName">la-tachometer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dashboard"></i>
                </div>
                <div class="text-muted iconLAName">la-dashboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-comment-o"></i>
                </div>
                <div class="text-muted iconLAName">la-comment-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-comments-o"></i>
                </div>
                <div class="text-muted iconLAName">la-comments-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-flash"></i>
                </div>
                <div class="text-muted iconLAName">la-flash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-paste"></i>
                </div>
                <div class="text-muted iconLAName">la-paste</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-lightbulb-o"></i>
                </div>
                <div class="text-muted iconLAName">la-lightbulb-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-exchange"></i>
                </div>
                <div class="text-muted iconLAName">la-exchange</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud-download"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud-download</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cloud-upload"></i>
                </div>
                <div class="text-muted iconLAName">la-cloud-upload</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bell-o"></i>
                </div>
                <div class="text-muted iconLAName">la-bell-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cutlery"></i>
                </div>
                <div class="text-muted iconLAName">la-cutlery</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-text-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-text-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-building-o"></i>
                </div>
                <div class="text-muted iconLAName">la-building-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hospital-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hospital-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-tablet"></i>
                </div>
                <div class="text-muted iconLAName">la-tablet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mobile"></i>
                </div>
                <div class="text-muted iconLAName">la-mobile</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mobile-phone"></i>
                </div>
                <div class="text-muted iconLAName">la-mobile-phone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-circle-o"></i>
                </div>
                <div class="text-muted iconLAName">la-circle-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mail-reply"></i>
                </div>
                <div class="text-muted iconLAName">la-mail-reply</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-folder-o"></i>
                </div>
                <div class="text-muted iconLAName">la-folder-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-folder-open-o"></i>
                </div>
                <div class="text-muted iconLAName">la-folder-open-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-smile-o"></i>
                </div>
                <div class="text-muted iconLAName">la-smile-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-frown-o"></i>
                </div>
                <div class="text-muted iconLAName">la-frown-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-meh-o"></i>
                </div>
                <div class="text-muted iconLAName">la-meh-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-keyboard-o"></i>
                </div>
                <div class="text-muted iconLAName">la-keyboard-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-flag-o"></i>
                </div>
                <div class="text-muted iconLAName">la-flag-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mail-reply-all"></i>
                </div>
                <div class="text-muted iconLAName">la-mail-reply-all</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-star-half-o"></i>
                </div>
                <div class="text-muted iconLAName">la-star-half-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-star-half-empty"></i>
                </div>
                <div class="text-muted iconLAName">la-star-half-empty</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-star-half-full"></i>
                </div>
                <div class="text-muted iconLAName">la-star-half-full</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-code-fork"></i>
                </div>
                <div class="text-muted iconLAName">la-code-fork</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-chain-broken"></i>
                </div>
                <div class="text-muted iconLAName">la-chain-broken</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shield"></i>
                </div>
                <div class="text-muted iconLAName">la-shield</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-o"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ticket"></i>
                </div>
                <div class="text-muted iconLAName">la-ticket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-minus-square-o"></i>
                </div>
                <div class="text-muted iconLAName">la-minus-square-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-level-up"></i>
                </div>
                <div class="text-muted iconLAName">la-level-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-level-down"></i>
                </div>
                <div class="text-muted iconLAName">la-level-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pencil-square"></i>
                </div>
                <div class="text-muted iconLAName">la-pencil-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-external-link-square"></i>
                </div>
                <div class="text-muted iconLAName">la-external-link-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-square-o-down"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-square-o-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-toggle-down"></i>
                </div>
                <div class="text-muted iconLAName">la-toggle-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-square-o-up"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-square-o-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-toggle-up"></i>
                </div>
                <div class="text-muted iconLAName">la-toggle-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-square-o-right"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-square-o-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-toggle-right"></i>
                </div>
                <div class="text-muted iconLAName">la-toggle-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-eur"></i>
                </div>
                <div class="text-muted iconLAName">la-eur</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-euro"></i>
                </div>
                <div class="text-muted iconLAName">la-euro</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-gbp"></i>
                </div>
                <div class="text-muted iconLAName">la-gbp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-usd"></i>
                </div>
                <div class="text-muted iconLAName">la-usd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dollar"></i>
                </div>
                <div class="text-muted iconLAName">la-dollar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-inr"></i>
                </div>
                <div class="text-muted iconLAName">la-inr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-rupee"></i>
                </div>
                <div class="text-muted iconLAName">la-rupee</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-jpy"></i>
                </div>
                <div class="text-muted iconLAName">la-jpy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cny"></i>
                </div>
                <div class="text-muted iconLAName">la-cny</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-rmb"></i>
                </div>
                <div class="text-muted iconLAName">la-rmb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-yen"></i>
                </div>
                <div class="text-muted iconLAName">la-yen</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-rub"></i>
                </div>
                <div class="text-muted iconLAName">la-rub</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ruble"></i>
                </div>
                <div class="text-muted iconLAName">la-ruble</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-rouble"></i>
                </div>
                <div class="text-muted iconLAName">la-rouble</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-krw"></i>
                </div>
                <div class="text-muted iconLAName">la-krw</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-won"></i>
                </div>
                <div class="text-muted iconLAName">la-won</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-bitcoin"></i>
                </div>
                <div class="text-muted iconLAName">fab la-bitcoin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-text"></i>
                </div>
                <div class="text-muted iconLAName">la-file-text</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-alpha-asc"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-alpha-asc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-alpha-desc"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-alpha-desc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-amount-asc"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-amount-asc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-amount-desc"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-amount-desc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-numeric-asc"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-numeric-asc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sort-numeric-desc"></i>
                </div>
                <div class="text-muted iconLAName">la-sort-numeric-desc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-youtube-play"></i>
                </div>
                <div class="text-muted iconLAName">la-youtube-play</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bitbucket-square"></i>
                </div>
                <div class="text-muted iconLAName">la-bitbucket-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-long-arrow-down"></i>
                </div>
                <div class="text-muted iconLAName">la-long-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-long-arrow-up"></i>
                </div>
                <div class="text-muted iconLAName">la-long-arrow-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-long-arrow-left"></i>
                </div>
                <div class="text-muted iconLAName">la-long-arrow-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-long-arrow-right"></i>
                </div>
                <div class="text-muted iconLAName">la-long-arrow-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-gittip"></i>
                </div>
                <div class="text-muted iconLAName">la-gittip</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sun-o"></i>
                </div>
                <div class="text-muted iconLAName">la-sun-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-moon-o"></i>
                </div>
                <div class="text-muted iconLAName">la-moon-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-circle-o-right"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-circle-o-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-arrow-circle-o-left"></i>
                </div>
                <div class="text-muted iconLAName">la-arrow-circle-o-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-caret-square-o-left"></i>
                </div>
                <div class="text-muted iconLAName">la-caret-square-o-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-toggle-left"></i>
                </div>
                <div class="text-muted iconLAName">la-toggle-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-dot-circle-o"></i>
                </div>
                <div class="text-muted iconLAName">la-dot-circle-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-try"></i>
                </div>
                <div class="text-muted iconLAName">la-try</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-turkish-lira"></i>
                </div>
                <div class="text-muted iconLAName">la-turkish-lira</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-plus-square-o"></i>
                </div>
                <div class="text-muted iconLAName">la-plus-square-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-institution"></i>
                </div>
                <div class="text-muted iconLAName">la-institution</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bank"></i>
                </div>
                <div class="text-muted iconLAName">la-bank</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-mortar-board"></i>
                </div>
                <div class="text-muted iconLAName">la-mortar-board</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-spoon"></i>
                </div>
                <div class="text-muted iconLAName">la-spoon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-automobile"></i>
                </div>
                <div class="text-muted iconLAName">la-automobile</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cab"></i>
                </div>
                <div class="text-muted iconLAName">la-cab</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-envelope-o"></i>
                </div>
                <div class="text-muted iconLAName">la-envelope-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-pdf-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-pdf-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-word-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-word-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-excel-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-excel-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-powerpoint-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-powerpoint-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-image-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-image-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-photo-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-photo-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-picture-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-picture-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-archive-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-archive-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-zip-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-zip-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-audio-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-audio-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-sound-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-sound-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-video-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-video-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-movie-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-movie-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-file-code-o"></i>
                </div>
                <div class="text-muted iconLAName">la-file-code-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-life-bouy"></i>
                </div>
                <div class="text-muted iconLAName">la-life-bouy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-life-buoy"></i>
                </div>
                <div class="text-muted iconLAName">la-life-buoy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-life-saver"></i>
                </div>
                <div class="text-muted iconLAName">la-life-saver</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-support"></i>
                </div>
                <div class="text-muted iconLAName">la-support</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-circle-o-notch"></i>
                </div>
                <div class="text-muted iconLAName">la-circle-o-notch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ra"></i>
                </div>
                <div class="text-muted iconLAName">la-ra</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-resistance"></i>
                </div>
                <div class="text-muted iconLAName">la-resistance</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ge"></i>
                </div>
                <div class="text-muted iconLAName">la-ge</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-y-combinator-square"></i>
                </div>
                <div class="text-muted iconLAName">la-y-combinator-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-yc-square"></i>
                </div>
                <div class="text-muted iconLAName">la-yc-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-wechat"></i>
                </div>
                <div class="text-muted iconLAName">la-wechat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-send"></i>
                </div>
                <div class="text-muted iconLAName">la-send</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-paper-plane-o"></i>
                </div>
                <div class="text-muted iconLAName">la-paper-plane-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-send-o"></i>
                </div>
                <div class="text-muted iconLAName">la-send-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-circle-thin"></i>
                </div>
                <div class="text-muted iconLAName">la-circle-thin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-header"></i>
                </div>
                <div class="text-muted iconLAName">la-header</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sliders"></i>
                </div>
                <div class="text-muted iconLAName">la-sliders</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-futbol-o"></i>
                </div>
                <div class="text-muted iconLAName">la-futbol-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-soccer-ball-o"></i>
                </div>
                <div class="text-muted iconLAName">la-soccer-ball-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-newspaper-o"></i>
                </div>
                <div class="text-muted iconLAName">la-newspaper-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bell-slash-o"></i>
                </div>
                <div class="text-muted iconLAName">la-bell-slash-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-trash"></i>
                </div>
                <div class="text-muted iconLAName">la-trash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-eyedropper"></i>
                </div>
                <div class="text-muted iconLAName">la-eyedropper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-area-chart"></i>
                </div>
                <div class="text-muted iconLAName">la-area-chart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pie-chart"></i>
                </div>
                <div class="text-muted iconLAName">la-pie-chart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-line-chart"></i>
                </div>
                <div class="text-muted iconLAName">la-line-chart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-cc"></i>
                </div>
                <div class="text-muted iconLAName">la-cc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-ils"></i>
                </div>
                <div class="text-muted iconLAName">la-ils</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-shekel"></i>
                </div>
                <div class="text-muted iconLAName">la-shekel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sheqel"></i>
                </div>
                <div class="text-muted iconLAName">la-sheqel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-meanpath"></i>
                </div>
                <div class="text-muted iconLAName">la-meanpath</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-diamond"></i>
                </div>
                <div class="text-muted iconLAName">la-diamond</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-intersex"></i>
                </div>
                <div class="text-muted iconLAName">la-intersex</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-facebook-official"></i>
                </div>
                <div class="text-muted iconLAName">la-facebook-official</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hotel"></i>
                </div>
                <div class="text-muted iconLAName">la-hotel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-yc"></i>
                </div>
                <div class="text-muted iconLAName">la-yc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-battery-4"></i>
                </div>
                <div class="text-muted iconLAName">la-battery-4</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-battery"></i>
                </div>
                <div class="text-muted iconLAName">la-battery</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-battery-3"></i>
                </div>
                <div class="text-muted iconLAName">la-battery-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-battery-2"></i>
                </div>
                <div class="text-muted iconLAName">la-battery-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-battery-1"></i>
                </div>
                <div class="text-muted iconLAName">la-battery-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-battery-0"></i>
                </div>
                <div class="text-muted iconLAName">la-battery-0</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-sticky-note-o"></i>
                </div>
                <div class="text-muted iconLAName">la-sticky-note-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hourglass-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hourglass-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hourglass-1"></i>
                </div>
                <div class="text-muted iconLAName">la-hourglass-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hourglass-2"></i>
                </div>
                <div class="text-muted iconLAName">la-hourglass-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hourglass-3"></i>
                </div>
                <div class="text-muted iconLAName">la-hourglass-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-rock-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-rock-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-grab-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-grab-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-paper-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-paper-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-stop-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-stop-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-scissors-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-scissors-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-lizard-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-lizard-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-spock-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-spock-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-pointer-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-pointer-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hand-peace-o"></i>
                </div>
                <div class="text-muted iconLAName">la-hand-peace-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-television"></i>
                </div>
                <div class="text-muted iconLAName">la-television</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-plus-o"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-plus-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-minus-o"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-minus-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-times-o"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-times-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-calendar-check-o"></i>
                </div>
                <div class="text-muted iconLAName">la-calendar-check-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-map-o"></i>
                </div>
                <div class="text-muted iconLAName">la-map-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-commenting"></i>
                </div>
                <div class="text-muted iconLAName">la-commenting</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-commenting-o"></i>
                </div>
                <div class="text-muted iconLAName">la-commenting-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la fab la-vimeo"></i>
                </div>
                <div class="text-muted iconLAName">fab la-vimeo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-credit-card-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-credit-card-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-pause-circle-o"></i>
                </div>
                <div class="text-muted iconLAName">la-pause-circle-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-stop-circle-o"></i>
                </div>
                <div class="text-muted iconLAName">la-stop-circle-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-wheelchair-alt"></i>
                </div>
                <div class="text-muted iconLAName">la-wheelchair-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-question-circle-o"></i>
                </div>
                <div class="text-muted iconLAName">la-question-circle-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-volume-control-phone"></i>
                </div>
                <div class="text-muted iconLAName">la-volume-control-phone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-asl-interpreting"></i>
                </div>
                <div class="text-muted iconLAName">la-asl-interpreting</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-deafness"></i>
                </div>
                <div class="text-muted iconLAName">la-deafness</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-hard-of-hearing"></i>
                </div>
                <div class="text-muted iconLAName">la-hard-of-hearing</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-signing"></i>
                </div>
                <div class="text-muted iconLAName">la-signing</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-google-plus-official"></i>
                </div>
                <div class="text-muted iconLAName">la-google-plus-official</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-google-plus-circle"></i>
                </div>
                <div class="text-muted iconLAName">la-google-plus-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-fa"></i>
                </div>
                <div class="text-muted iconLAName">la-fa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-handshake-o"></i>
                </div>
                <div class="text-muted iconLAName">la-handshake-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-envelope-open-o"></i>
                </div>
                <div class="text-muted iconLAName">la-envelope-open-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-address-book-o"></i>
                </div>
                <div class="text-muted iconLAName">la-address-book-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-vcard"></i>
                </div>
                <div class="text-muted iconLAName">la-vcard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-address-card-o"></i>
                </div>
                <div class="text-muted iconLAName">la-address-card-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-vcard-o"></i>
                </div>
                <div class="text-muted iconLAName">la-vcard-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-circle-o"></i>
                </div>
                <div class="text-muted iconLAName">la-user-circle-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-user-o"></i>
                </div>
                <div class="text-muted iconLAName">la-user-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-drivers-license"></i>
                </div>
                <div class="text-muted iconLAName">la-drivers-license</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-id-card-o"></i>
                </div>
                <div class="text-muted iconLAName">la-id-card-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-drivers-license-o"></i>
                </div>
                <div class="text-muted iconLAName">la-drivers-license-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer-4"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer-4</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer-3"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer-3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer-2"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer-1"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-thermometer-0"></i>
                </div>
                <div class="text-muted iconLAName">la-thermometer-0</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-bathtub"></i>
                </div>
                <div class="text-muted iconLAName">la-bathtub</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-s15"></i>
                </div>
                <div class="text-muted iconLAName">la-s15</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-times-rectangle"></i>
                </div>
                <div class="text-muted iconLAName">la-times-rectangle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-window-close-o"></i>
                </div>
                <div class="text-muted iconLAName">la-window-close-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-times-rectangle-o"></i>
                </div>
                <div class="text-muted iconLAName">la-times-rectangle-o</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-eercast"></i>
                </div>
                <div class="text-muted iconLAName">la-eercast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-xl la la-snowflake-o"></i>
                </div>
                <div class="text-muted iconLAName">la-snowflake-o</div>
            </div>
        </div>
    </div>
</div>