'use script';

var ordinateur;
var user;
function getRandomInteger(min, max) {

	return Math.floor(Math.random() * (max - min + 1)) + min;
   
}

ordinateur = getRandomInteger(1, 1000);

console.log(ordinateur)

do {
    

    user = window.prompt('Deviner le chiffre exact (de 0 à 1000)');

    if (ordinateur<user) { 

        alert('Vous avez depasser ')
    }
    else if (ordinateur>user) { 

        alert('Vous etes en dessous  ')
    }


    else if (ordinateur == user) {
        alert(' Bravo !! vous avez trouver le chiffre exact ')
    }
    
} while (user != ordinateur)
    
    console.log(ordinateur)

