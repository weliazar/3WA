'use strict';

function recupInfosForm() {
    var civilite = document.getElementById('civilite').value;
    var name = document.getElementById('name').value;
    var firstName = document.getElementById('firstName').value;
    var telephone = document.getElementById('telephone').value;
    
    var contact = {"civilite":civilite , "name":name , "firstName":firstName , "telephone" :telephone};
    return contact;
}




