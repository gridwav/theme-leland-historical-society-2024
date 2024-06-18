$(document).ready(function() {

  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

       //>=, not <=
      if (scroll >= 100) {
          //clearHeader, not clearheader - caps H
          $("#header").addClass("header");
          $("#header").removeClass("header__home");
      }

      if (scroll <= 100) {
          //clearHeader, not clearheader - caps H
          $("#header").addClass("header__home");
          $("#header").removeClass("header");
      }

  }); //missing );

});
