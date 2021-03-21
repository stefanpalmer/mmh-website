
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

/*========== ANIMATE ON SCROLL ==========*/
AOS.init({
    offset: 300,
    duration: 700,
    once: true
});

/*========== LIGHTBOX ==========*/
lightbox.option({
    'resizeDuration': 0
})

/*========== FORM VALIDATION ========== */
let contactForm = document.getElementById("contact-form");
let errorMsgs = document.getElementById("error-msg");
let successMsg = document.getElementById("success-msg");
let fullName = document.getElementById("full-name");
let email = document.getElementById("email");
let message = document.getElementById("message");

contactForm.addEventListener("submit", e => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    let nameValue = fullName.value.trim();
    let emailValue = email.value.trim();
    let messageValue = message.value.trim();
    let errors = [];

    if (nameValue === "" || nameValue == null) {
        errors.push("<p>Please enter name</p>");
    }

    if (emailValue === "" || emailValue == null) {
        errors.push("<p>Please enter email address</p>");
    } else if (!isEmail(emailValue)) {
        errors.push("<p>Not a valid email address</p>");
    }

    if (messageValue === "" || messageValue == null) {
        errors.push("<p>Please enter a message</p>");
    }

    if (errors.length > 0) {
        errorMsgs.innerHTML = errors.join("");
    } else {
        errorMsgs.innerHTML = "";
        successMsg.innerHTML = "<p>Message sent!</p>";
    }
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
