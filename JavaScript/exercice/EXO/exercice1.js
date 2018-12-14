 var num1= parseInt(window.prompt('saisit du montant HT'));

var tva =0.80;

window.alert('le taux de TVA est :'+tva);

var resultat2= num1*tva;
window.alert('le prix TTC est de : '+ resultat2);

document.write (resultat2)


*// correction 1

const TAUX_DE_TVA = 20.0;

var montantHT;
var montantTTC;
var montantTVA;


montantHT = window.prompt('Quel est le montant HT ?');

montantHT = parseFloat(montantHT);

montantTVA = (montantHT * TAUX_DE_TVA) / 100;

montantTTC = montantHT + montantTVA;

document.write('<p>Pour un montant HT de ' + montantHT + ' € il y a ' + montantTVA + ' € de TVA.</p>');
document.write('<p>Le montant TTC est donc de ' + montantTTC + ' €.</p>');

