'use strict'; // Mode strict du JavaScript

/*************************************************************************************************/
/* *********************************** FONCTIONS UTILITAIRES *********************************** */
/*************************************************************************************************/
function getRandomInteger(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}


function requestInteger(message, min, max) {
    var number;

    do {
        number = parseInt(window.prompt(message));

    } while (isNaN(number) == true || number < min || number > max);

    return number;

}
