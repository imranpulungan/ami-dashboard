<div class="form-group">
    <input type="text" class="form-control" placeholder="Cari Custom Icon" id="searchCustomIcon" />
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#searchCustomIcon').on('keyup', function(e) {
            e.preventDefault();
            var value = $(this).val().toLowerCase();
            $(".iconCustomName").filter(function() {
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
            var iconRemoved = icon.children().removeClass('icon-2x text-dark-50').addClass('menu-icon').parent().html();
            $thisIcon.find('.iconStartHere').html(iconHtml)

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
                    <i class="icon-2x text-dark-50 ki ki-double-arrow-next"></i>
                </div>
                <div class="text-muted iconCustomName">ki-double-arrow-next</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-double-arrow-back"></i>
                </div>
                <div class="text-muted iconCustomName">ki-double-arrow-back</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-double-arrow-down"></i>
                </div>
                <div class="text-muted iconCustomName">ki-double-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-double-arrow-up"></i>
                </div>
                <div class="text-muted iconCustomName">ki-double-arrow-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-long-arrow-back"></i>
                </div>
                <div class="text-muted iconCustomName">ki-long-arrow-back</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-arrow-next"></i>
                </div>
                <div class="text-muted iconCustomName">ki-arrow-next</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-arrow-back"></i>
                </div>
                <div class="text-muted iconCustomName">ki-arrow-back</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-long-arrow-next"></i>
                </div>
                <div class="text-muted iconCustomName">ki-long-arrow-next</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-check"></i>
                </div>
                <div class="text-muted iconCustomName">ki-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-arrow-down"></i>
                </div>
                <div class="text-muted iconCustomName">ki-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-minus"></i>
                </div>
                <div class="text-muted iconCustomName">ki-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-long-arrow-down"></i>
                </div>
                <div class="text-muted iconCustomName">ki-long-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-long-arrow-up"></i>
                </div>
                <div class="text-muted iconCustomName">ki-long-arrow-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-plus"></i>
                </div>
                <div class="text-muted iconCustomName">ki-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-arrow-up"></i>
                </div>
                <div class="text-muted iconCustomName">ki-arrow-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-round"></i>
                </div>
                <div class="text-muted iconCustomName">ki-round</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-reload"></i>
                </div>
                <div class="text-muted iconCustomName">ki-reload</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-refresh"></i>
                </div>
                <div class="text-muted iconCustomName">ki-refresh</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-solid-plus"></i>
                </div>
                <div class="text-muted iconCustomName">ki-solid-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-close"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-close</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-solid-minus"></i>
                </div>
                <div class="text-muted iconCustomName">ki-solid-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-hide"></i>
                </div>
                <div class="text-muted iconCustomName">ki-hide</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-code"></i>
                </div>
                <div class="text-muted iconCustomName">ki-code</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-copy"></i>
                </div>
                <div class="text-muted iconCustomName">ki-copy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-up-and-down"></i>
                </div>
                <div class="text-muted iconCustomName">ki-up-and-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-left-and-right"></i>
                </div>
                <div class="text-muted iconCustomName">ki-left-and-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-triangle-bottom"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-triangle-bottom</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-triangle-right"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-triangle-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-triangle-top"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-triangle-top</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-triangle-left"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-triangle-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-double-arrow-up"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-double-arrow-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-double-arrow-next"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-double-arrow-next</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-double-arrow-back"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-double-arrow-back</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-double-arrow-down"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-double-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-arrow-down"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-arrow-next"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-arrow-next</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-arrow-back"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-arrow-back</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-arrow-up"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-arrow-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-check"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-wide-arrow-down"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-wide-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-wide-arrow-up"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-wide-arrow-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-wide-arrow-next"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-wide-arrow-next</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-wide-arrow-back"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-wide-arrow-back</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-long-arrow-up"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-long-arrow-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-long-arrow-down"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-long-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-long-arrow-back"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-long-arrow-back</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-long-arrow-next"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-long-arrow-next</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-check-1"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-check-1</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-close"></i>
                </div>
                <div class="text-muted iconCustomName">ki-close</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-more-ver"></i>
                </div>
                <div class="text-muted iconCustomName">ki-more-ver</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-more-ver"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-more-ver</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-more-hor"></i>
                </div>
                <div class="text-muted iconCustomName">ki-more-hor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-more-hor"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-more-hor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-menu"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-menu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-drag"></i>
                </div>
                <div class="text-muted iconCustomName">ki-drag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-bold-sort"></i>
                </div>
                <div class="text-muted iconCustomName">ki-bold-sort</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-eye"></i>
                </div>
                <div class="text-muted iconCustomName">ki-eye</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-outline-info"></i>
                </div>
                <div class="text-muted iconCustomName">ki-outline-info</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-menu"></i>
                </div>
                <div class="text-muted iconCustomName">ki-menu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-menu-grid"></i>
                </div>
                <div class="text-muted iconCustomName">ki-menu-grid</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-wrench"></i>
                </div>
                <div class="text-muted iconCustomName">ki-wrench</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-gear"></i>
                </div>
                <div class="text-muted iconCustomName">ki-gear</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-info"></i>
                </div>
                <div class="text-muted iconCustomName">ki-info</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-calendar-2"></i>
                </div>
                <div class="text-muted iconCustomName">ki-calendar-2</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-calendar"></i>
                </div>
                <div class="text-muted iconCustomName">ki-calendar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-calendar-today"></i>
                </div>
                <div class="text-muted iconCustomName">ki-calendar-today</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x text-dark-50 ki ki-clock"></i>
                </div>
                <div class="text-muted iconCustomName">ki-clock</div>
            </div>
        </div>
    </div>
</div>