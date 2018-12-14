
var voiture = {
				marque: 'fiat',
                annee : 2017,
                achat: 2018,
                passagers: ["bernard", "valerie"]
                
             };

           document.write('<ul>');

           	document.write("<li> la marque de la voiture est : " +voiture.marque+"</li>");

           	document.write("<li>  l'annee de fabrication est en: " +voiture.annee+"</li>");

           	document.write("<li>  l'annee d'achat est en : " +voiture.achat+"</li>");

           	document.write("<li>  les passagers sont : " +voiture.passagers+"</li>");

           document.write("</ul>");

           // correction

var myCar = new Object();

myCar.brand         = 'Alfa Roméo';
myCar.buyDate       = new Date('2013-06-20');
myCar.passengers    = new Array();
myCar.passengers[0] = 'Nicolas';
myCar.passengers[1] = 'Charlotte';
myCar.year          = 2012;



document.write('<ul>');
document.write('<li>Marque : ' + myCar.brand + '</li>');
document.write('<li>Année de fabrication : ' + myCar.year + '</li>');
document.write('<li>Date de l\'achat : ' + myCar.buyDate.toDateString() + '</li>');
document.write('<li>Passager 1 : ' + myCar.passengers[0] + '</li>');
document.write('<li>Passager 2 : ' + myCar.passengers[1] + '</li>');
document.write('</ul>');


myCar = {
			brand: 'Alfa Roméo',
            passengers : ['Nico', 'Nanard'],
            year: 2012

		}


