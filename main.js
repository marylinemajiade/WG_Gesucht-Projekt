$(document).ready(function () {
  $("div#general div#page_top ul#main-menu .angebote").hover(
    function () {
      $("div#general .elements").addClass("show");
    },
    function () {
      $("div#general .elements").removeClass("show");
    }
  );
});
