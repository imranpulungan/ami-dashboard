<div class="form-group">
    <input type="text" class="form-control" placeholder="Cari Icon Social" id="searchSocialIcon" />
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#searchSocialIcon').on('keyup', function(e) {
            e.preventDefault();
            var value = $(this).val().toLowerCase();
            $(".iconSocName").filter(function() {
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
                    <i class="icon-2x la text-dark-50 socicon-modelmayhem"></i>
                </div>
                <div class="text-muted iconSocName">socicon-modelmayhem</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-mixcloud"></i>
                </div>
                <div class="text-muted iconSocName">socicon-mixcloud</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-drupal"></i>
                </div>
                <div class="text-muted iconSocName">socicon-drupal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-swarm"></i>
                </div>
                <div class="text-muted iconSocName">socicon-swarm</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-istock"></i>
                </div>
                <div class="text-muted iconSocName">socicon-istock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-yammer"></i>
                </div>
                <div class="text-muted iconSocName">socicon-yammer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-ello"></i>
                </div>
                <div class="text-muted iconSocName">socicon-ello</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-stackoverflow"></i>
                </div>
                <div class="text-muted iconSocName">socicon-stackoverflow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-persona"></i>
                </div>
                <div class="text-muted iconSocName">socicon-persona</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-triplej"></i>
                </div>
                <div class="text-muted iconSocName">socicon-triplej</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-houzz"></i>
                </div>
                <div class="text-muted iconSocName">socicon-houzz</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-rss"></i>
                </div>
                <div class="text-muted iconSocName">socicon-rss</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-paypal"></i>
                </div>
                <div class="text-muted iconSocName">socicon-paypal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-odnoklassniki"></i>
                </div>
                <div class="text-muted iconSocName">socicon-odnoklassniki</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-airbnb"></i>
                </div>
                <div class="text-muted iconSocName">socicon-airbnb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-periscope"></i>
                </div>
                <div class="text-muted iconSocName">socicon-periscope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-outlook"></i>
                </div>
                <div class="text-muted iconSocName">socicon-outlook</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-coderwall"></i>
                </div>
                <div class="text-muted iconSocName">socicon-coderwall</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-tripadvisor"></i>
                </div>
                <div class="text-muted iconSocName">socicon-tripadvisor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-appnet"></i>
                </div>
                <div class="text-muted iconSocName">socicon-appnet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-goodreads"></i>
                </div>
                <div class="text-muted iconSocName">socicon-goodreads</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-tripit"></i>
                </div>
                <div class="text-muted iconSocName">socicon-tripit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-lanyrd"></i>
                </div>
                <div class="text-muted iconSocName">socicon-lanyrd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-slideshare"></i>
                </div>
                <div class="text-muted iconSocName">socicon-slideshare</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-buffer"></i>
                </div>
                <div class="text-muted iconSocName">socicon-buffer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-disqus"></i>
                </div>
                <div class="text-muted iconSocName">socicon-disqus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-vkontakte"></i>
                </div>
                <div class="text-muted iconSocName">socicon-vkontakte</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-whatsapp"></i>
                </div>
                <div class="text-muted iconSocName">socicon-whatsapp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-patreon"></i>
                </div>
                <div class="text-muted iconSocName">socicon-patreon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-storehouse"></i>
                </div>
                <div class="text-muted iconSocName">socicon-storehouse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-pocket"></i>
                </div>
                <div class="text-muted iconSocName">socicon-pocket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-mail"></i>
                </div>
                <div class="text-muted iconSocName">socicon-mail</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-blogger"></i>
                </div>
                <div class="text-muted iconSocName">socicon-blogger</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-technorati"></i>
                </div>
                <div class="text-muted iconSocName">socicon-technorati</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-reddit"></i>
                </div>
                <div class="text-muted iconSocName">socicon-reddit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-dribbble"></i>
                </div>
                <div class="text-muted iconSocName">socicon-dribbble</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-stumbleupon"></i>
                </div>
                <div class="text-muted iconSocName">socicon-stumbleupon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-digg"></i>
                </div>
                <div class="text-muted iconSocName">socicon-digg</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-envato"></i>
                </div>
                <div class="text-muted iconSocName">socicon-envato</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-behance"></i>
                </div>
                <div class="text-muted iconSocName">socicon-behance</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-delicious"></i>
                </div>
                <div class="text-muted iconSocName">socicon-delicious</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-deviantart"></i>
                </div>
                <div class="text-muted iconSocName">socicon-deviantart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-forrst"></i>
                </div>
                <div class="text-muted iconSocName">socicon-forrst</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-play"></i>
                </div>
                <div class="text-muted iconSocName">socicon-play</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-zerply"></i>
                </div>
                <div class="text-muted iconSocName">socicon-zerply</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-wikipedia"></i>
                </div>
                <div class="text-muted iconSocName">socicon-wikipedia</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-apple"></i>
                </div>
                <div class="text-muted iconSocName">socicon-apple</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-flattr"></i>
                </div>
                <div class="text-muted iconSocName">socicon-flattr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-github"></i>
                </div>
                <div class="text-muted iconSocName">socicon-github</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-renren"></i>
                </div>
                <div class="text-muted iconSocName">socicon-renren</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-friendfeed"></i>
                </div>
                <div class="text-muted iconSocName">socicon-friendfeed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-newsvine"></i>
                </div>
                <div class="text-muted iconSocName">socicon-newsvine</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-identica"></i>
                </div>
                <div class="text-muted iconSocName">socicon-identica</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-bebo"></i>
                </div>
                <div class="text-muted iconSocName">socicon-bebo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-zynga"></i>
                </div>
                <div class="text-muted iconSocName">socicon-zynga</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-steam"></i>
                </div>
                <div class="text-muted iconSocName">socicon-steam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-xbox"></i>
                </div>
                <div class="text-muted iconSocName">socicon-xbox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-windows"></i>
                </div>
                <div class="text-muted iconSocName">socicon-windows</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-qq"></i>
                </div>
                <div class="text-muted iconSocName">socicon-qq</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-douban"></i>
                </div>
                <div class="text-muted iconSocName">socicon-douban</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-meetup"></i>
                </div>
                <div class="text-muted iconSocName">socicon-meetup</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-playstation"></i>
                </div>
                <div class="text-muted iconSocName">socicon-playstation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-android"></i>
                </div>
                <div class="text-muted iconSocName">socicon-android</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-snapchat"></i>
                </div>
                <div class="text-muted iconSocName">socicon-snapchat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-twitter"></i>
                </div>
                <div class="text-muted iconSocName">socicon-twitter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-facebook"></i>
                </div>
                <div class="text-muted iconSocName">socicon-facebook</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-googleplus"></i>
                </div>
                <div class="text-muted iconSocName">socicon-googleplus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-pinterest"></i>
                </div>
                <div class="text-muted iconSocName">socicon-pinterest</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-foursquare"></i>
                </div>
                <div class="text-muted iconSocName">socicon-foursquare</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-yahoo"></i>
                </div>
                <div class="text-muted iconSocName">socicon-yahoo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-skype"></i>
                </div>
                <div class="text-muted iconSocName">socicon-skype</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-yelp"></i>
                </div>
                <div class="text-muted iconSocName">socicon-yelp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-feedburner"></i>
                </div>
                <div class="text-muted iconSocName">socicon-feedburner</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-linkedin"></i>
                </div>
                <div class="text-muted iconSocName">socicon-linkedin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-viadeo"></i>
                </div>
                <div class="text-muted iconSocName">socicon-viadeo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-xing"></i>
                </div>
                <div class="text-muted iconSocName">socicon-xing</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-myspace"></i>
                </div>
                <div class="text-muted iconSocName">socicon-myspace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-soundcloud"></i>
                </div>
                <div class="text-muted iconSocName">socicon-soundcloud</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-spotify"></i>
                </div>
                <div class="text-muted iconSocName">socicon-spotify</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-grooveshark"></i>
                </div>
                <div class="text-muted iconSocName">socicon-grooveshark</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-lastfm"></i>
                </div>
                <div class="text-muted iconSocName">socicon-lastfm</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-youtube"></i>
                </div>
                <div class="text-muted iconSocName">socicon-youtube</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-vimeo"></i>
                </div>
                <div class="text-muted iconSocName">socicon-vimeo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-dailymotion"></i>
                </div>
                <div class="text-muted iconSocName">socicon-dailymotion</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-vine"></i>
                </div>
                <div class="text-muted iconSocName">socicon-vine</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-flickr"></i>
                </div>
                <div class="text-muted iconSocName">socicon-flickr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-500px"></i>
                </div>
                <div class="text-muted iconSocName">socicon-500px</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-wordpress"></i>
                </div>
                <div class="text-muted iconSocName">socicon-wordpress</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-tumblr"></i>
                </div>
                <div class="text-muted iconSocName">socicon-tumblr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-twitch"></i>
                </div>
                <div class="text-muted iconSocName">socicon-twitch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-8tracks"></i>
                </div>
                <div class="text-muted iconSocName">socicon-8tracks</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-amazon"></i>
                </div>
                <div class="text-muted iconSocName">socicon-amazon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-icq"></i>
                </div>
                <div class="text-muted iconSocName">socicon-icq</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-smugmug"></i>
                </div>
                <div class="text-muted iconSocName">socicon-smugmug</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-ravelry"></i>
                </div>
                <div class="text-muted iconSocName">socicon-ravelry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-weibo"></i>
                </div>
                <div class="text-muted iconSocName">socicon-weibo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-baidu"></i>
                </div>
                <div class="text-muted iconSocName">socicon-baidu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-angellist"></i>
                </div>
                <div class="text-muted iconSocName">socicon-angellist</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-ebay"></i>
                </div>
                <div class="text-muted iconSocName">socicon-ebay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-imdb"></i>
                </div>
                <div class="text-muted iconSocName">socicon-imdb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-stayfriends"></i>
                </div>
                <div class="text-muted iconSocName">socicon-stayfriends</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-residentadvisor"></i>
                </div>
                <div class="text-muted iconSocName">socicon-residentadvisor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-google"></i>
                </div>
                <div class="text-muted iconSocName">socicon-google</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-yandex"></i>
                </div>
                <div class="text-muted iconSocName">socicon-yandex</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-sharethis"></i>
                </div>
                <div class="text-muted iconSocName">socicon-sharethis</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-bandcamp"></i>
                </div>
                <div class="text-muted iconSocName">socicon-bandcamp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-itunes"></i>
                </div>
                <div class="text-muted iconSocName">socicon-itunes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-deezer"></i>
                </div>
                <div class="text-muted iconSocName">socicon-deezer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-telegram"></i>
                </div>
                <div class="text-muted iconSocName">socicon-telegram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-openid"></i>
                </div>
                <div class="text-muted iconSocName">socicon-openid</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-amplement"></i>
                </div>
                <div class="text-muted iconSocName">socicon-amplement</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-viber"></i>
                </div>
                <div class="text-muted iconSocName">socicon-viber</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-zomato"></i>
                </div>
                <div class="text-muted iconSocName">socicon-zomato</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-draugiem"></i>
                </div>
                <div class="text-muted iconSocName">socicon-draugiem</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-endomodo"></i>
                </div>
                <div class="text-muted iconSocName">socicon-endomodo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-filmweb"></i>
                </div>
                <div class="text-muted iconSocName">socicon-filmweb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-stackexchange"></i>
                </div>
                <div class="text-muted iconSocName">socicon-stackexchange</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-wykop"></i>
                </div>
                <div class="text-muted iconSocName">socicon-wykop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-teamspeak"></i>
                </div>
                <div class="text-muted iconSocName">socicon-teamspeak</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-teamviewer"></i>
                </div>
                <div class="text-muted iconSocName">socicon-teamviewer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-ventrilo"></i>
                </div>
                <div class="text-muted iconSocName">socicon-ventrilo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-younow"></i>
                </div>
                <div class="text-muted iconSocName">socicon-younow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-raidcall"></i>
                </div>
                <div class="text-muted iconSocName">socicon-raidcall</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-mumble"></i>
                </div>
                <div class="text-muted iconSocName">socicon-mumble</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-medium"></i>
                </div>
                <div class="text-muted iconSocName">socicon-medium</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-bebee"></i>
                </div>
                <div class="text-muted iconSocName">socicon-bebee</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-hitbox"></i>
                </div>
                <div class="text-muted iconSocName">socicon-hitbox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-reverbnation"></i>
                </div>
                <div class="text-muted iconSocName">socicon-reverbnation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-formulr"></i>
                </div>
                <div class="text-muted iconSocName">socicon-formulr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-instagram"></i>
                </div>
                <div class="text-muted iconSocName">socicon-instagram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-battlenet"></i>
                </div>
                <div class="text-muted iconSocName">socicon-battlenet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-chrome"></i>
                </div>
                <div class="text-muted iconSocName">socicon-chrome</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-discord"></i>
                </div>
                <div class="text-muted iconSocName">socicon-discord</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-issuu"></i>
                </div>
                <div class="text-muted iconSocName">socicon-issuu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-macos"></i>
                </div>
                <div class="text-muted iconSocName">socicon-macos</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-firefox"></i>
                </div>
                <div class="text-muted iconSocName">socicon-firefox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-opera"></i>
                </div>
                <div class="text-muted iconSocName">socicon-opera</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-keybase"></i>
                </div>
                <div class="text-muted iconSocName">socicon-keybase</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-alliance"></i>
                </div>
                <div class="text-muted iconSocName">socicon-alliance</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-livejournal"></i>
                </div>
                <div class="text-muted iconSocName">socicon-livejournal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-googlephotos"></i>
                </div>
                <div class="text-muted iconSocName">socicon-googlephotos</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-horde"></i>
                </div>
                <div class="text-muted iconSocName">socicon-horde</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-etsy"></i>
                </div>
                <div class="text-muted iconSocName">socicon-etsy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-zapier"></i>
                </div>
                <div class="text-muted iconSocName">socicon-zapier</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-google-scholar"></i>
                </div>
                <div class="text-muted iconSocName">socicon-google-scholar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-researchgate"></i>
                </div>
                <div class="text-muted iconSocName">socicon-researchgate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-wechat"></i>
                </div>
                <div class="text-muted iconSocName">socicon-wechat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-strava"></i>
                </div>
                <div class="text-muted iconSocName">socicon-strava</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-line"></i>
                </div>
                <div class="text-muted iconSocName">socicon-line</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-lyft"></i>
                </div>
                <div class="text-muted iconSocName">socicon-lyft</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-uber"></i>
                </div>
                <div class="text-muted iconSocName">socicon-uber</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-songkick"></i>
                </div>
                <div class="text-muted iconSocName">socicon-songkick</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-viewbug"></i>
                </div>
                <div class="text-muted iconSocName">socicon-viewbug</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-googlegroups"></i>
                </div>
                <div class="text-muted iconSocName">socicon-googlegroups</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-quora"></i>
                </div>
                <div class="text-muted iconSocName">socicon-quora</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-diablo"></i>
                </div>
                <div class="text-muted iconSocName">socicon-diablo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-blizzard"></i>
                </div>
                <div class="text-muted iconSocName">socicon-blizzard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-hearthstone"></i>
                </div>
                <div class="text-muted iconSocName">socicon-hearthstone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-heroes"></i>
                </div>
                <div class="text-muted iconSocName">socicon-heroes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-overwatch"></i>
                </div>
                <div class="text-muted iconSocName">socicon-overwatch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-warcraft"></i>
                </div>
                <div class="text-muted iconSocName">socicon-warcraft</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-starcraft"></i>
                </div>
                <div class="text-muted iconSocName">socicon-starcraft</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-beam"></i>
                </div>
                <div class="text-muted iconSocName">socicon-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-curse"></i>
                </div>
                <div class="text-muted iconSocName">socicon-curse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-player"></i>
                </div>
                <div class="text-muted iconSocName">socicon-player</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-streamjar"></i>
                </div>
                <div class="text-muted iconSocName">socicon-streamjar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-nintendo"></i>
                </div>
                <div class="text-muted iconSocName">socicon-nintendo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere" style="width: 40px;">
                    <i class="icon-2x la text-dark-50 socicon-hellocoton"></i>
                </div>
                <div class="text-muted iconSocName">socicon-hellocoton</div>
            </div>
        </div>
    </div>
</div>