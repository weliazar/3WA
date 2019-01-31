'use strict';

var add = document.getElementById('addContact');

add.addEventListener('click',onClickAddContact);

var form = document.querySelector('form');

var save = document.getElementById('save');

save.addEventListener('click',onClickSaveContact);

var contactDetails = document.querySelector('.contactDetails');

