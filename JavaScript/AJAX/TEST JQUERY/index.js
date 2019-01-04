// VERSION JAVASCRIPT 
/*
var para2 = document.getElementById('para2');
var para = document.querySelectorAll('.para');

para2.style.color = "red";
para2.style.backgroundColor = "blue";


for (var i = 0; i < para.length; i++) {

    para[i].addEventListener('click', togglePink);

}

function togglePink() {

    this.classList.toggle('pink');

}

*/

// VERSION JQUERY

$('#para2').css('color', 'red');
$('#para2').css('background-color', 'blue');


$('.para').on('click', togglePink);

function togglePink() {

	$(this).toggleClass('pink');
    
    // this sert a gerer celui a lancer l'evenement
    
//  $(this).addClass('pink');addClass POUR AJOUTER
	//$(this).removeClass('pink');removeClass POUR RETIRER
}


$('#send').on('click', changePara);
// APRES UN CLICK ON ECRASE PAR LE CONTENU DE LA FONCTION changePara

function changePara() {
	
    $('#container').html('<p>remplacement par ce qui a dans html</p>'); //ecrase le contenu
    
 $('#container').append('<p class="para" id="para4">para4 (contenu ajouter par append)</p>'); //ajoute du contenu (toujours en derniere position)
}


$.get('endroit où se trouve mon fichier', myFunction);


function myFunction(response) {

console.log(response);

}

$.getJSON('endroit où se trouve mon fichier', myFunction);


$('input[name=what]:checked').val();