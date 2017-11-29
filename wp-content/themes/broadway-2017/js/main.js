// @prepros-prepend "jquery.unveil.js"
(function($) {
  $(document).ready(function() {
    $(".menu-toggle").click(function() {
      $(".main-nav").toggleClass("visible");
    });

    $("img, .unveil").unveil();
  });
})(window.jQuery || window.Zepto);
