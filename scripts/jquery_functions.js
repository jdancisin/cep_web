$(document).ready(function () {
  // makes any link box fully clickable

  $(".clickbox").click(function () {
    window.location = $(this).find("a").attr("href");
    return false;
  });

  // show/hide for mobilenav
  $(".nav-toggle").click(function () {
    $(this).toggleClass("nav-toggle--active");
    $("body").toggleClass("site-nav--open");
    return false;
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $(".site-header-wrap").addClass("masthead--stuck");
    } else {
      $(".site-header-wrap").removeClass("masthead--stuck");
    }
  });
});
