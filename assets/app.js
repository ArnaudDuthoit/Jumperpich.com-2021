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

        console.log('COUNTER');
        const value = document.getElementById('form_message').value;
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






