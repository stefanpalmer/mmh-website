
/*========== CLOSE MOBILE MENU ON CLICK & SMOOTH SCROLL TO LINK a[href^="#"] ==========*/
$(document).on('click', 'a[href^="#"]', function (event) {

    event.preventDefault();
    $('.navbar-toggler').addClass('collapsed');
    $('#navbarResponsive').removeClass('show');

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 64
    }, 1000);

});

/*========== TOP SCROLL BUTTON ==========*/
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 450) {
            $('#top-scroll').fadeIn();
        } else {
            $('#top-scroll').fadeOut();
        }
    });
});

/*========== LIGHTBOX ==========*/
lightbox.option({
    'resizeDuration': 0
})

