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
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
      