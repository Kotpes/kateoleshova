export default {
    init() {
       $('.gallery').slick({
           dots: true,
           infinite: true,
           speed: 300,
           arrows: true,
           slidesToShow: 1,
           slidesToScroll: 1,
           draggable: true,
           centerMode: true,
           variableHeight: true,
           variableWidth: true,
           lazyLoad: 'progressive',
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
