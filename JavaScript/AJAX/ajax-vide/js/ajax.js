'use strict';

function myFunction(response) {

	console.log(response);
    $('#target').html(response);
}

function jsonPart(response) {

    console.log(response); 
    $('#target').html('');// ecrase le precedent (vide la liste)
    $('#target').append('<ul>');
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
    for (var i = 0; i < response.length; i++) {
      $('#target ul').append('<li> Nom : '+response[i].firstName+', tel : '+response[i].phone+' </li>');  
        
    }
    
}

