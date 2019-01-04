const API_KEY = '2ee2c5b569240ea2a2a879dd9c8a822c';
const url_img = 'https://image.tmdb.org/t/p/w185_and_h278_bestv2';


function onClickSearchMovies(event) {
    
    event.preventDefault();
    /* empecher le bouton de rafraichir la page */
    var query = $('#maRecherche').val();
    console.log(query); 
    /* variable qui va recuperer la recherche indiquée dans le html */
    
 $.getJSON('https://api.themoviedb.org/3/search/movie?api_key=2ee2c5b569240ea2a2a879dd9c8a822c&query='+query, getResultMovies);
/* 1- ajouter la var query dans l'url */
/*2- appeler la fonction getResultMovies qui lui contient les titres ...  */   
}

function getResultMovies(response) {
    console.log(response);
    
    for (var i = 0; i < response.results.length; i++) {
        $('.liste ul').append('<li data-id="'+response.results[i].id+'">'+response.results[i].title+'</li>')
        
 /*1- ajoute a la div liste (ul) des li */       
/* 2 - creation de li avec un id qui sera egale à l'id unique de chaque film 
ex: <li data-id="176983"> One Piece Film Z </li> */       
// data id = argument html qui permet de contenir une valeur       
 /*3 - Dans le li ça affiche le titre des films */           
    }
     
}

function afficheDetails( Event) {

var numero = $(this).data('id'); /*var qui recupère l'id qui se trouve dans getResultMovies */
console.log(numero);
    
$.getJSON('https://api.themoviedb.org/3/movie/'+numero+'?api_key=2ee2c5b569240ea2a2a879dd9c8a822c', callBack);
/* 1- ajouter la var numero dans l'url */
/*2- ajouter api key */ 
/*3- appeler la fonction callBAck qui detient l'img et descriptions */
    

}

function callBack(response) {
    
    console.log(response);
    
    
$('.details').html('<img src="'+url_img+response.poster_path+'" />');
/*Ajoute à la div details l'img de l'id */    
    
$('.details').append('<h2>'+response.original_title+'" </h2>');
/* ajoute a la suite de l'img le titre du film correspondant à l'id */    

    
}




$('#search').on('click', onClickSearchMovies) /* au clique du bouton valider ça affiche l'ensemble des elements */

$(document).on('click', 'li', afficheDetails); /* au clique sur un li affiche ce qu'il y a dans la fonction afficheDetails 
'document' (represente la balise body du html)' 
*/



