/*Json = string*/
/*Application dans f12 */

var tab = [{ name: 'Thib', job : 'dev' }, { name: 'Jo', job : 'étudiant' }, { name: 'Bernard', job : 'fonctionnaire' }];

console.log(tab);

var json = JSON.stringify(tab);/*transforme le tab d'objet en string*/

console.log(json);



var tab2 = JSON.parse(json);/*parse sert a transformer une string en tableau*/

console.log(tab);


// window.localStorage.setItem('test', json);

var recup = window.localStorage.getItem('test');

console.log('recup',recup);

var recupTab = JSON.parse(recup);

console.log(recupTab[0]);