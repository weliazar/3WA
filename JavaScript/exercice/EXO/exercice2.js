
var Day = new Array(); 

Day[0] = 'Dimanche';
Day[1] = "Lundi";
Day[2] = "Mardi";
Day[3] = 'Mercredi';
Day[4] = 'Jeudi';
Day[5] = 'Vendredi';
Day[6] = 'Samedi';



var Month = ["janvier", "fevrier", "mars","avril","mai","juin","juillet","aout","septembre", "octobre","novembre","decembre"];

var date = new Date();


console.log(date);

console.log(date.getDate());
console.log(date.getDay());
console.log(date.getMonth());
console.log(date.getFullYear());

document.write(' Nous sommes le : '+Day[date.getDay()] + ' '+date.getDate() +' '+ Month[date.getMonth()] +' '+date.getFullYear());

//correction

var dayNames   = new Array(); // []
dayNames[0] = 'Dimanche';
dayNames[1] = 'Lundi';
dayNames[2] = 'Mardi';
dayNames[3] = 'Mercredi';
dayNames[4] = 'Jeudi';
dayNames[5] = 'Vendredi';
dayNames[6] = 'Samedi';


var monthNames = [];
monthNames[0]  = 'Janvier';
monthNames[1]  = 'Février';
monthNames[2]  = 'Mars';
monthNames[3]  = 'Avril';
monthNames[4]  = 'Mai';
monthNames[5]  = 'Juin';
monthNames[6]  = 'Juillet';
monthNames[7]  = 'Août';
monthNames[8]  = 'Septembre';
monthNames[9]  = 'Octobre';
monthNames[10] = 'Novembre';
monthNames[11] = 'Décembre';

var today = new Date();

document.write('Nous sommes le ' + dayNames[today.getDay()] + ' ');  // dayNames[4]
document.write(today.getDate() + ' ');
document.write(monthNames[today.getMonth()] + ' ');
document.write(today.getFullYear() + '.');


