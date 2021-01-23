/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

import Filter from './Filter';

if (document.querySelector('.js-filter') !== null) { // Si le systeme de filtre est sur la page
    new Filter(document.querySelector('.js-filter'));
}

if (document.querySelector('#form_message') !== null) { // si le formulaire de contact est sur la page

    function counter() {
        const value = document.getElementById('contact_message').value;
        console.log(value);
        if (value.length === 0) {
            document.getElementById('text').innerHTML = "Message " + "(" + 0 + "/255)";
            return
        }
        const totalChars = value.length;
        document.getElementById('text').innerHTML = "Message " + "(" + totalChars + "/255)";
        if (value.length >= 240) {
            document.getElementById('text').style.color = 'red'
        }
        if (value.length < 240) {
            document.getElementById('text').style.color = 'black'
        }
    }

    const element = document.getElementById('form_message');

    function myEventHandler(event) {
        counter(event)
    }

    element.addEventListener("keyup", function (evt) {
        myEventHandler(evt);
    }, false);

    element.addEventListener("change", function (evt) {
        myEventHandler(evt);
    }, false);

}


(function() {
    var css = document.createElement('link');
    css.href = 'https://use.fontawesome.com/releases/v5.8.1/css/all.css';
    css.rel = 'stylesheet';
    css.type = 'text/css';
    document.getElementsByTagName('head')[0].appendChild(css);
})();



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


// Retour au top //

const scrollToTopBtn = document.getElementById("back-to-top")
const rootElement = document.documentElement
const scrollTotal = rootElement.scrollHeight - rootElement.clientHeight


function handleScroll() {
    // Do something on scroll
    const scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
    if ((rootElement.scrollTop / scrollTotal ) > 0.80 ) {
        // Show button
        scrollToTopBtn.classList.add("show")
    } else {
        // Hide button
        scrollToTopBtn.classList.remove("show")
    }
}

document.addEventListener("scroll", handleScroll)

function scrollToTop() {
    // scroll to top logic
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
    })
}
scrollToTopBtn.addEventListener("click", scrollToTop)




