export default {
  init() {
      $('.content').jscroll({
          autoTrigger: true,
          loadingHtml: '<div class="spinner">' +
          '<div class="rect1"></div>' +
          '<div class="rect2"></div>' +
          '<div class="rect3"></div>' +
          '<div class="rect4"></div>' +
          '<div class="rect5"></div>' +
          '</div>',
          padding: 20,
          nextSelector: '.more a',
          contentSelector: '.main',
          callback: () => {
              $('.jscroll-added .main').addClass('show');
          },
      });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
