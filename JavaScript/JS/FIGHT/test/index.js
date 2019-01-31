/* VERSION1
var voiture1 = new Car();

console.log(voiture1);

var voiture2 = new Car();

console.log('voiture2', voiture2);

voiture2.brand = "citroen";

console.log('voiture1', voiture1);
console.log('voiture2', voiture2);
*/

/*VERSION2*/

var voiture1 = new Car('Renault', '1991', '21 nevada', 'diesel', '325000',60);

console.log('voiture1', voiture1);


var voiture2 = new Car('Fiat', '1995', 'Panda', 'essence', '33687',50);

console.log('voiture2', voiture2);

/*
document.write(voiture1.brand+' '+voiture1.year);
*/
voiture1.affichage();
voiture2.affichage();


/*voiture2 = objet, 15 = volume*/
voiture1.piquerEssence(voiture2, 15);/*enleve les points (-15 points)
reservoir de Renault : 60 a 75
reservoir de Fiat :de 50 à 35
*/
