/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
import './styles/app.scss';

// You can specify which plugins you need


// start the Stimulus application
import './bootstrap';


/*
const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("active");
    }
}, 2000);




function BackToTop() {
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('#back-to-top').fadeIn()
            } else {
                $('#back-to-top').fadeOut()
            }
        });
        $('#back-to-top').click(function () {
            $('body,html').animate({scrollTop: 0}, 800);
            return false;
        })
    })
}

BackToTop();

// Counter caracteres form contact //

function counter() {
    var value = $('#form_message').val();
    if (value.length === 0) {
        $('#text').html("Message " + "(" + 0 + "/255)");
        return
    }
    var totalChars = value.length;
    $('#text').html("Message " + "(" + totalChars + "/255)");
    if (value.length >= 240) {
        document.getElementById('text').style.color = 'red'
    }
    if (value.length < 240) {
        document.getElementById('text').style.color = 'black'
    }
}

$(document).ready(function () {
    $('#form_message').change(counter);
    $('#form_message').keydown(counter);
    $('#form_message').keypress(counter);
    $('#form_message').keyup(counter);
    $('#form_message').blur(counter);
    $('#form_message').focus(counter)
}); */
