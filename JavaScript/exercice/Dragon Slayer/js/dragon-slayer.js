'use strict'; // Mode strict du JavaScript

/*************************************************************************************************/
/* **************************************** DONNEES JEU **************************************** */
/*************************************************************************************************/



/*************************************************************************************************/
/* *************************************** FONCTIONS JEU *************************************** */
/*************************************************************************************************/




/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/


var game = {};

function initializeGame() {

    game.difficulty = requestInteger("Choisir Difficulté", 1, 3)


    if (game.difficulty == 1) {
        game.hpDragon = (150, 200);
        game.hpPlayer = (200, 250);
    } else if (game.difficulty == 2) {
        game.hpDragon = (200, 250);
        game.hpPlayer = (200, 250);
    } else {
        game.hpDragon = (200, 250);
        game.hpPlayer = (150, 200);
    }


    game.armure = requestInteger("Choisir Armure", 1, 3)

    if (game.armure == 1) {
        game.armorRatio = 1;
    } else if (game.armure == 2) {
        game.armorRatio = 1.25;
    } else {
        game.armorRatio = 2;
    }


    game.weapon = requestInteger("Choisir Epee", 1, 3)

    if (game.weapon == 1) {
        game.weaponRatio = 0.5;
    } else if (game.weapon == 2) {
        game.weaponRatio = 1;
    } else {
        game.weaponRatio = 2;
    }


}


function domageDragon() {
    var degats;
    if (game.difficulty == 1) {
        degats = getRandomInteger(10, 20) / game.armorRatio;
    } else if (game.difficulty == 2) {
        degats = getRandomInteger(20, 30) / game.armorRatio
    } else {
        degats = getRandomInteger(20, 30) / game.armorRatio
    }

    return Math.floor(degats);
}




function domagePlayer() {
    var degats;

    if (game.difficulty == 1) {
        game.domagePlayer = getRandomInteger(25, 30) * game.weaponRatio;
    } else if (game.difficulty == 2) {
        game.domagePlayer = getRandomInteger(15, 20) * game.weaponRatio;
    } else {
        game.domagePlayer = getRandomInteger(5, 10) * game.weaponRatio;

    }
    return Math.floor(degats);
}


function gameLoop() {

    do {
        game.tour = getRandomInteger(1, 2);

        if (tour == 1) {
            game.hpDragon -= game.domageDragon;
            console.log
            ('Le dragon est plus rapide et vous brûle, il vous enlève ' +game.domageDragon + ' PV');
    

        } else {
            game.hpPlayer -= game.domagePlayer;
            console.log('Vous êtes plus rapide et frappez le dragon, vous lui enlevez ' +game.domagePlayer + ' PV');
          
        }
        game.tour++
    }

    while (game.hpDragon > 0 && game.hpPlayer > 0)

}


initializeGame();
domageDragon();
domagePlayer();
console.log(game);
console.log(domageDragon());
gameLoop();
