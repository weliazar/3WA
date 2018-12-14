'use script'
/*var a= parseFloat(window.prompt('Saissisez un chiffre' ));
var operation= window.prompt('Saissisez l operation souhaiter + - * / ^' );
var b= parseFloat(window.prompt('Saissisez un chiffre' ));


switch (operation) { 

case '+':
 document.write (a +b);
break;

case '-':
 document.write (a -b);
break;

case '*':
 document.write (a *b)
break;

case '/':
 document.write (a /b);
break;

case '^':
 document.write (a ^b);
break;

}

*/

/*var number1;
var number2;
var operation;
var result;

number1   = parseFloat(window.prompt('Saisissez un premier nombre :'));
number2   = parseFloat(window.prompt('Saisissez un deuxième nombre :'));
operation = window.prompt('Quelle opération mathématique souhaitez-vous effectuer ?');


switch(operation)
{
	case '+':
	case 'addition':
    result = number1 + number2;
    break;
    
    case '-':
    case 'soustraction':
    result = number1 - number2;
    break;
    
    case '*':
    case 'multiplication':
    result = number1 * number2;
    break;
    
    case '/':
    case 'division':
    
    if(number2 == 0)
   	{
       document.write('<p>Erreur : vous ne pouvez pas diviser un nombre par 0 !</p>');

       break;
   	}
    
    result = number1 / number2;
    
    case '^':
    case 'puissance':
    result = number1 ** number2;
    break;

    default:
    document.write("<p>Erreur : vous avez indiqué une opération inconnue !</p>");
    break;

}

if(isNaN(result) == true)
{
	document.write("<p>Vous n'avez pas saisi deux nombres !</p>");
	result = undefined;

}

if(result != undefined)
{
    document.write("<p>Le résultat de l'opération est <strong>" + result + '</strong>.</p>');
}
*/ 

var chiffre = Math.random()*3;

console.log(chiffre);


var num = 2.8;

console.log(Math.round(num));

var string = 'PAUL';

console.log(string.toLowerCase());