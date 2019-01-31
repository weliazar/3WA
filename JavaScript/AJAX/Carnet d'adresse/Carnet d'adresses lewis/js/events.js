'use strict';

var ul = document.querySelector('.showContacts');

function onClickAddContact(){

    form.classList.toggle('hidden');
}

var contacts = loadDataFromDomStorage('Address_Book');
console.log(contacts);

if (contacts == null ) {
    contacts = [];
} 

showContacts();

function onClickSaveContact(event) {
    event.preventDefault();
    var contact = recupInfosForm();

        contacts.push(contact);
        saveDataToDomStorage('Address_Book', contacts);

        showContacts();
}

function showContacts(){
    ul.innerHTML = "";
    for (var i=0 ; i<contacts.length ; i++) {
        var li = document.createElement("li");
        var a = document.createElement("a");
        li.setAttribute("data-id" , i);
        var infosContact = contacts[i].firstName+' '+contacts[i].name;
        a.textContent = infosContact;
        ul.appendChild(li).appendChild(a);
        
    }

}
var contactDetails = document.querySelector('.contactDetails');

var li = document.querySelectorAll('li');
for (var i = 0; i < li.length; i++) {
    li[i].addEventListener('click',showDetails)
}


function showDetails() {
    contactDetails.innerHTML = "";
    var id = this.dataset.id;
    var h2 = document.createElement("h2");
    h2.textContent = contacts[id].civilite+' '+contacts[id].firstName+' '+contacts[id].name;
    var p = document.createElement("p");
    p.textContent = contacts[id].telephone;
    contactDetails.appendChild(h2).appendChild(p);
    var edit = document.createElement("a");
    edit.setAttribute('id','edit');
    edit.textContent = 'Modifier ce contact';
    contactDetails.appendChild(edit);
   
 
    contactDetails.dataset.id = id;

    var edit = document.getElementById("edit");
    edit.addEventListener('click',editContact);
}


function editContact(){

    var id = contactDetails.dataset.id

    form.classList.toggle('hidden');
    document.getElementById('civilite').value = contacts[id].civilite;
    document.getElementById('name').value = contacts[id].name;
    document.getElementById('firstName').value = contacts[id].firstName;
    document.getElementById('telephone').value = contacts[id].telephone;

}


/********A TRAVAILLER******************

if ($('#contact-form').data('mode') == 'add') {
    	
        addressBook.push(contact);
    
    } else {
    	var id = $('#contact-details').data('id');
        
        addressBook[id] = contact;
    
    }
CRÉER UN DATA-MODE QUI PRENDRA LA VALEUR EDIT OU ADD POUR AFFICHER LE FORMULAIRE VIDE OU AVEC LE CONTACT SELECTIONNE

FONCTION DE SUPPRESSION DU LOCAL STORAGE

function onClickClearAddressBook(event) {
	event.preventDefault();
    
    addressBook = [];
    saveDataToDomStorage('contacts', []);
    refreshAddressBook(addressBook);

}



/*