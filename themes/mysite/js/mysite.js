$(window).on('scroll', function() {
    if ($(this).scrollTop() > 150) {
    $('.scrollup').fadeIn();
    } else {
    $('.scrollup').fadeOut();
    }
    });
    
    $(".scrollup").on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
    scrollTop: 0
    }, 600);
    return false;
    });





    function myFunction() {
        var x = document.getElementById("mynavdiv");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }

      $(document).ready(function(){
        $("#hamburger").click(function(){
          $("#mynavdiv").toggle();
        });
      });