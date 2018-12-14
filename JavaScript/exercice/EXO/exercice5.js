/* var age;
var isThirtyYearsOld;
var isAdult; var isNotCentennial;

age = 35;

isThirtyYearsOld = (age == 30); // false 
isThirtyYearsOld = (age == 35); // true 

isThirtyYearsOld = (age != 100); // true 


age = 100;
isNotCentennial  = (age != 100); // false


age = 18;

isAdult = (age > 18); // false
isAdult = (age >= 18); // true

isAdult = (age < 18); // false
isAdult = (age <= 18); // true
*/

/*
var age = parseInt(window.prompt('tapez votre age'));

var firstName = 'Tom';



if (age >= 18) {

	document.write('<p>Vous êtes majeur.</p>');
    
    
    var name = window.prompt('Name ?');

    if (name == 'Julien') {

        document.write('<p>Vous êtes Julien</p>');

    } else if (name == 'Max') {

        document.write('<p>Vous êtes Max</p>');

    } else if (name == 'Jean') {

        document.write('<p>Vous êtes Jean</p>');

    } else {

        document.write('<p>Mais vous êtes qui ?</p>');

    }

} else {

	document.write('<p>Vous n\'êtes pas majeur.</p>');

}*/

/* if (firstName == 'Tom' && age >= 18 ) {

	document.write('<p>Vous êtes majeur et votre nom est Tom</p>');

}

if (firstName == 'Tom' || firstName == 'Pierre') {

		document.write('<p>Vous êtes Tom ou Pierre</p>');

}

if (firstName == 'Tom' || firstName == 'Pierre' && age > 17 ) {

		document.write('<p>Vous êtes Tom ou Pierre</p>');

}

*/


var test = 23;


console.log(isNaN(test));

var test2 = "une string";


console.log(isNaN(test2));


if (isNaN(test2) == true) {

    document.write('test2 pas un chiffre');
    
} else {
    document.write('test2 chiffre');
}



var name = "Jo"


switch (name) {

    case 'Jean':
    document.write('Vous êtes Jean');
    break;
    
    case 'Pierre':
    document.write('Vous êtes Pierre');
    break;

    case 'Jacques':
    document.write('Vous êtes Jacques');
    break;
    
    case 'Jo':
    document.write('Vous êtes Jo');
    break;
    
    default:
    document.write('Vous êtes qui');
    break;


}




