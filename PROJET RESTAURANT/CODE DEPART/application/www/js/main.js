'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////




/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////

console.log(document.location.href);
/*Si il ya le mot order dans l'url */
if(document.location.href.indexOf('order') !=-1 && document.location.href.indexOf('order/validate') == -1){
  console.log('ok pour le order');
  var order = new objetMeal();
}

if(document.location.href.indexOf('order/validate') != -1){
  console.log('ok pour le validate');
  var validate = new Recap();
}
