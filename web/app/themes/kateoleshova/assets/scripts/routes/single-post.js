export default {
    init() {
       $('.post-slides .slider').slick({
           adaptiveHeight: true,
           infinite: true,
           speed: 300,
           arrows: false,
           slidesToShow: 1,
           slidesToScroll: 1,
           //centerMode: true,
           //variableWidth: true,
           asNavFor: '.slider-nav',
       });
        $('.post-slides .slider-nav').slick({
            slidesToShow: 9,
            slidesToScroll: 1,
            asNavFor: '.post-slides .slider',
            dots: true,
            focusOnSelect: true,
            centerMode: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    },
                },
            ],
        });
    },
    finalize() {

    },
};
