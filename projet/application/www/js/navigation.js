var tabs = document.querySelectorAll('.tabs a');

for (var i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', function (e) {
 
var li = this.parentNode 

var div = this.parentNode.parentNode.parentNode
        

 if(li.classList.contains('active')){
     return false
 }       
      

/*On retire la classe active sur l'element de l'onglet actif  */
div.querySelector('.tabs .active').classList.remove('active')
  
/*J'ajoute la class active a  l'onglet actuel*/
li.classList.add('active')
        
/*On retire la class active sur le contenu actif*/        
div.querySelector('.tab-content.active').classList.remove('active')

/*J'ajoute la class active sur le contenu correspondant a mon clic */        

div.querySelector(this.getAttribute('href')).classList.add('active')
        
        
})
}