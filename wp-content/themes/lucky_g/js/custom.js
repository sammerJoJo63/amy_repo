$(document).ready(function () {
  $(".title-area .name h1 a").empty();
  $(".title-area .name h1 a").html("<img src='../../../../wp-content/uploads/2021/02/luckyg-logo-transp-e1602995573329.png' width='80' height='80' />")

  $("h2.siteName").find("p").contents().unwrap();
});
