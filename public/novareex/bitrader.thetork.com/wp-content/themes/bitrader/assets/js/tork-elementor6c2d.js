
jQuery(document).ready(function ($) {
    // Product thumbnails slider
    setTimeout(() => {
        if ($('.flex-control-thumbs > li').length >= 5) {
            $(".flex-control-thumbs").addClass("product-thumbnails-slider");
        }

        $('.product-thumbnails-slider').slick({
            dots: false,
            arrows: false,
            prevArrow: '<div class="prev"><i class="far fa-angle-left"></i></div>',
            nextArrow: '<div class="next"><i class="far fa-angle-right"></i></div>',
            autoplay: false,
            speed: 2000,
            slidesToShow: 5,
            slidesToScroll: 1,
            focusOnSelect: true,
            vertical: false
        });
    }, 100);

    // Related products slider
    $('.rel-slider-active').slick({
        slidesToShow: 4,
        arrows: false,
        autoplay: false,
        prevArrow: '<button type="button" class="slick-prev"><i class="far fa-long-arrow-alt-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="far fa-long-arrow-alt-right"></i></button>',
        infinite: true,  // fixed typo: was "Infinity"
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });
});

