$(function() {
    $(document).ready(function() {

        $('#preloader').fadeOut(3500, function() {
            $(this).remove();
        });

        $(".mobileHeader").on('click', function() {
            $(this).toggleClass("open");
            $(".mobileMenu").toggleClass("open");
        })

        $('#writingGallery').lightSlider({
            gallery: false,
            item: 3,
            controls: false,
            slideMargin: 50,
            enableDrag: false,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        item: 2,
                        slideMargin: 50,
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        item: 1,
                    }
                }
            ],
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#writingGallery .lslide',
                    subHtmlSelectorRelative: true
                });

                el.on('onAfterOpen.lg', function(event) {
                    $(".lg-sub-html").hide();
                    $('.gallery-info-box').first().clone().appendTo('.lg').show();
                });

                el.on('onAfterAppendSubHtml.lg', function(event) {
                    var lgSubContent = $('.lg-sub-html').html();
                    $('.lg .gallery-info-box').html(lgSubContent);
                });

                el.on('onCloseAfter.lg', function(event) {
                    $('.le .gallery-info-box').remove();
                });
            }
        });

        $('.oeuvreGallerie').lightSlider({
            gallery: false,
            item: 1,
            controls: true,
            slideMargin: 50,
            enableDrag: false,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        item: 1,
                        slideMargin: 50,
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                        item: 1,
                    }
                }
            ]
        });
    });

    const lightboxDescription = GLightbox({
        selector: '.glightbox',
        height: '800px',
        moreLength: 0
    });


});