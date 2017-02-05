export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
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
      });
  },
};
