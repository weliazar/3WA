/*

function sayHello() {
    document.write('<p>Bonjour à toutes et à tous !</p>');
    document.write('<p>Coucou</p>');
}


sayHello();
sayHello();
sayHello();
sayHello();



// Autres

function sayHelloByName(firstName, lastName)
{
    document.write('<p>Bonjour ' + firstName + ' ' + lastName + ' !</p>');
}

sayHelloByName('Marie', 'MAYERS');

sayHelloByName('Thib', 'Monesma');



// autres 

function sayHelloByName(firstName, lastName)
{
    document.write('<p>Bonjour ' + firstName + ' ' + lastName + ' !</p>');
}

var firstName = window.prompt('firstName ?');

var lastName = window.prompt('laststName ?');

sayHelloByName(firstName,lastName);

*/

///// exemple "RETURN"


function sayHello()
{
    return 'Bonjour à toutes et à tous !';
}

var message = sayHello();
document.write('<h2>' + message + '</h2>');

function addition(num1, num2) {
	var result = num1 + num2;
    
    return result;

}
var test = addition(8, 5); //13





/// push = ajout
var tab = ['canard', 'chien', 'chat'];
console.log(tab);

tab.push('souris');
console.log(tab);
tab.push('oie');
console.log(tab);


/// indexof
tab.indexOf('chien') // 1
tab.indexOf('chat') // 2
tab.indexOf('poule')// -1 inexistant



// splice
tab.splice(2, 1); // supprime chat
console.log(tab);





