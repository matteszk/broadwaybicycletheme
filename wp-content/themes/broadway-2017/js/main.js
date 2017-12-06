// @prepros-prepend "jquery.unveil.js"
(function($) {
  $(document).ready(function() {
    $(".menu-toggle").click(function() {
      $(".main-nav").toggleClass("visible");
      $(".menu-toggle").toggleClass("fa-bars").toggleClass("fa-window-close");
    });

    $("img, .unveil").unveil();
  });
})(window.jQuery || window.Zepto);
