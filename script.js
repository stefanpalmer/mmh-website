
/*========== CLOSE MOBILE MENU ON CLICK & SMOOTH SCROLL TO LINK a[href^="#"] ==========*/
$(document).on('click', 'a[href^="#"]', function (event) {

    event.preventDefault();
    $('.navbar-toggler').addClass('collapsed');
    $('#navbarResponsive').removeClass('show');

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 64
    }, 1000);

});

// $(function(){
//     $(".nav-link").click(function(event){
//         event.preventDefault();
//         var section = $(this).attr("href");
        
//         $('html, body').animate({
//             scrollTop: $(section).offset().top - 64
//         }, 1250);
//     });
// });

/*========== BOUNCING DOWN ARROW ==========*/


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
    duration: 700
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




/*========== MAKE ALL ANIMATION "FADEINUP" ON MOBILE ==========*/

/*========== WAYPOINTS ANIMATION DELAY ==========*/
//Original Resource: https://www.oxygenna.com/tutorials/scroll-animations-using-waypoints-js-animate-css
// $(function () { // a self calling function
//   function onScrollInit(items, trigger) { // a custom made function
//       items.each(function () { //for every element in items run function
//           var osElement = $(this), //set osElement to the current
//               osAnimationClass = osElement.attr('data-animation'), //get value of attribute data-animation type
//               osAnimationDelay = osElement.attr('data-delay'); //get value of attribute data-delay time

//           osElement.css({ //change css of element
//               '-webkit-animation-delay': osAnimationDelay, //for safari browsers
//               '-moz-animation-delay': osAnimationDelay, //for mozilla browsers
//               'animation-delay': osAnimationDelay //normal
//           });

//           var osTrigger = (trigger) ? trigger : osElement; //if trigger is present, set it to osTrigger. Else set osElement to osTrigger

//           osTrigger.waypoint(function () { //scroll upwards and downwards
//               osElement.addClass('animated').addClass(osAnimationClass); //add animated and the data-animation class to the element.
//           }, {
//                   triggerOnce: true, //only once this animation should happen
//                   offset: '70%' // animation should happen when the element is 70% below from the top of the browser window
//               });
//       });
//   }

//   onScrollInit($('.os-animation')); //function call with only items
//   onScrollInit($('.staggered-animation'), $('.staggered-animation-container')); //function call with items and trigger
// });


/*========== CONTACT FORM INPUT VALIDATION ==========*/
//Original Resource: https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form
// $(function () {

  // init the validator
  // validator files are included in the download package
  // otherwise download from http://1000hz.github.io/bootstrap-validator

//   $('#contact-form').validator();


  // when the form is submitted
//   $('#contact-form').on('submit', function (e) {

      // if the validator does not prevent form submit
    //   if (!e.isDefaultPrevented()) {
        //   var url = "contact/contact.php";

          // POST values in the background the the script URL
        //   $.ajax({
        //       type: "POST",
        //       url: url,
        //       data: $(this).serialize(),
        //       success: function (data) {
                  // data = JSON object that contact.php returns

                  // we recieve the type of the message: success x danger and apply it to the
                //   var messageAlert = 'alert-' + data.type;
                //   var messageText = data.message;

                  // let's compose Bootstrap alert box HTML
                //   var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';

                  // If we have messageAlert and messageText
                //   if (messageAlert && messageText) {
                      // inject the alert to .messages div in our form
                    //   $('#contact-form').find('.messages').html(alertBox);
                      // empty the form
//                       $('#contact-form')[0].reset();
//                   }
//               }
//           });
//           return false;
//       }
//   })
// });