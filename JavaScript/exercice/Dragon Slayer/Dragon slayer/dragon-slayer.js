'use strict'; // Mode strict du JavaScript

var damagePoint;
var dragonSpeed;
var playerSpeed;
var game = {};

function initializeGame() {

    game.difficulty = requestInteger("Choisir Difficulté" + '1. Facile - 2. Normal - 3. Difficile', 1, 3)


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


    game.armure = requestInteger("Choisir Armure" + '1.Cuivre - 2. Fer - 3.Magique', 1, 3)

    if (game.armure == 1) {
        game.armorRatio = 1;
    } else if (game.armure == 2) {
        game.armorRatio = 1.25;
    } else {
        game.armorRatio = 2;
    }


    game.weapon = requestInteger("Choisir Epee" + '1. Bois - 2. Acier - 3. Excalibur', 1, 3)

    if (game.weapon == 1) {
        game.weaponRatio = 0.5;
    } else if (game.weapon == 2) {
        game.weaponRatio = 1;
    } else {
        game.weaponRatio = 2;
    }


}


function domageDragon() {
    /*  var damagePoint;
        cette variable doit etre déclarer en globale = à l 'extérieur des fonctions
        a variable damage doit etres identique et modifier dans les fonctions
     */
    if (game.difficulty == 1) {
        damagePoint = getRandomInteger(10, 20);
    } else {
        damagePoint = getRandomInteger(20, 30);
    }

    return Math.round(damagePoint / game.armorRatio);
}




function domagePlayer() {
    /*  var damagePoint;
        cette variable doit etre déclarer en globale = à l 'extérieur des fonctions
        a variable damage doit etres identique et modifier dans les fonctions
     */
    if (game.difficulty == 1) {
        game.domagePlayer = getRandomInteger(25, 30);
    } else if (game.difficulty == 2) {
        game.domagePlayer = getRandomInteger(15, 20);
    } else {
        game.domagePlayer = getRandomInteger(5, 10);
    }
    return Math.round(damagePoint * game.weaponRatio);
}


function gameLoop() {

    /*  var damagePoint;
        var dragonSpeed;
        var playerSpeed; 
        ces variables doivent etre déclarer en globale = à l'extérieur des fonctions
    */

    game.round = 1;

    while (game.hpDragon > 0 && game.hpPlayer > 0) {
        dragonSpeed = getRandomInteger(10, 20); //si pendant son tour l'un a plus de point que l'autre alors il y a des degats pour l'autre 
        playerSpeed = getRandomInteger(10, 20);
        console.log('Tour numéro' + game.round);

        if (dragonSpeed > playerSpeed) {

            damagePoint = domageDragon(); // fonction en haut(degats)
            game.hpPlayer -= damagePoint;
            console.log('Le dragon est plus rapide et vous brûle, il vous enlève ' + damagePoint + ' PV');



        } else {
            damagePoint = domagePlayer();
            game.hpDragon -= damagePoint;
            console.log('Vous êtes plus rapide et frappez le dragon, vous lui enlevez ' + damagePoint + ' PV');

        }
        showGameState();
        game.round++;
    }


}

function showGameState() {
    console.log('Dragon : ' + game.hpDragon + ' PV, ' +
        'joueur : ' + game.hpPlayer + ' PV'
    );
}

function showGameWinner() {
    if (game.hpDragon > 0) {
        document.write('<img src="dragon.jpg"/>');
        console.log("Le dragon a gagné, vous avez été carbonisé !");
        console.log("Il restait " + game.hpDragon + " PV au dragon");
    } else {
        document.write('<img src="chevalier.jpg"/>');
        console.log("Vous avez gagné, vous êtes vraiment fort !");
        console.log("Il vous restait " + game.hpPlayer + " PV");

    }

}


initializeGame();
domageDragon();
domagePlayer();
gameLoop();
showGameState();
showGameWinner();