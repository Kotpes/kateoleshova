export default {
    init() {
       $('.post-slides .slider').slick({
           dots: true,
           infinite: false,
           speed: 300,
           arrows: true,
           slidesToShow: 1,
           slidesToScroll: 1,
           draggable: true,
           centerMode: true,
           variableHeight: true,
           variableWidth: true,
           responsive: [
               {
                   breakpoint: 768,
                   settings: {
                       centerMode: false,
                       arrows: false,
                       //variableWidth: false,
                   },
               },
           ],
       });
    },
    finalize() {

    },
};
