/*
var montantHT=parseFloat(window.prompt('Saissisez le montant HT'));
const TAUX_TVA = 1.2;

var remise =window.prompt('Souhaitez-vous une remise ?');


if (remise== 'oui' || remise=='Oui' || remise=='yes' || remise=='Yes') {
	document.write('<p> Felicitations vous-avez une remise </p>');
	var montantRemise =parseFloat(window.prompt('Inserer le montant de la remise que vous souhaitez en %?'));
	montantHT = montantHT - (montantHT*montantRemise)/100;
	var montantTTC = montantHT * TAUX_TVA
}


document.write('<p> Le montant HT en € est de : </p>' +montantHT);

document.write('<p> Le montant de votre remise en € est de : </p>' +montantRemise);

document.write('<p> Le montant TTC votre achat en € est de : </p>' +montantTTC);

document.write('<p> Le Taux de TVA qui s applique à votre achat est de : </p>' +TAUX_TVA);

*/

/* 'use strict';

const TAUX_DE_TVA = 20.0;

var demandeRemise;
var montantHT;
var montantTTC;
var montantTVA;
var pourcentageRemise;

montantHT = parseFloat(window.prompt('Quel est le montant HT ?'));
demandeRemise = window.prompt('Souhaitez-vous une remise ?');

if(demandeRemise == 'oui' || demandeRemise == 'yes') {

	pourcentageRemise = parseFloat(window.prompt('Montant de la remise en % :'));
   
   	montantHT = montantHT - (montantHT * pourcentageRemise / 100);

}

montantTVA = montantHT * TAUX_DE_TVA / 100;
montantTTC = montantHT + montantTVA;

document.write('<p>Pour un montant HT de ' + montantHT + ' € il y a ' + montantTVA + ' € de TVA.</p>');
document.write('<p>Le montant TTC est donc de ' + montantTTC + ' €.</p>');

if(demandeRemise == 'oui' || demandeRemise == 'yes')
{
    document.write('<p>Une remise de ' + pourcentageRemise + '% a été appliquée sur le montant HT.</p>');

} else {

	document.write("<p>Aucune remise n'a été appliquée.</p>");

}

*/




