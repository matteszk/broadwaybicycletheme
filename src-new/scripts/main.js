$(document).ready(function() {
var $nav = $('.main-nav');

function toggleTopNav() {
  if ($(this).scrollTop() > 500) {
    $nav.removeClass('hidden');
  }
  else {
    $nav.addClass('hidden');
  }
}

toggleTopNav();
if (!!$('#hero').length) {
  $(window).scroll(toggleTopNav);

}
else {
  $nav.removeClass('hidden');
}
});
