var addressBook = load();

refreshAddressBook(addressBook);

function onClickAddContact()
{
	$('#contact-form').removeClass('hide');

    $('#contact-form').data('mode', 'add');

   // $('#contact-form').fadeIn('fast');  retire un display none avec un transition fondu au noir


}


function onClickSaveContact()
{

	var contact = createContact
    (
        $('select[name=title]').val(),
        $('input[name=firstName]').val(),
        $('input[name=lastName]').val(),
        $('input[name=phone]').val()
    );


    if ($('#contact-form').data('mode') == 'add') {

        addressBook.push(contact);

    } else {
    	var id = $('#contact-details').data('id');

        addressBook[id] = contact;

    }




	saveDataToDomStorage('contacts', addressBook);

    refreshAddressBook(addressBook);

    $('#contact-details').addClass('hide');
    $('#contact-form').addClass('hide');

}

function onClickShowContactDetails() {

	var id = $(this).data('id');

	$('#contact-details h3').text(addressBook[id].title+' '+addressBook[id].firstName+' '+addressBook[id].lastName);
    $('#contact-details p').text(addressBook[id].phone);

    $('#contact-details').removeClass('hide');
    $('#contact-details').data('id', id);

}

function onClickEditContact() {

	var id =  $('#contact-details').data('id');
     $('#title').val(addressBook[id].title);
    $('#firstName').val(addressBook[id].firstName);
    $('#lastName').val(addressBook[id].lastName);
    $('#phone').val(addressBook[id].phone);

	$('#contact-form').data('mode', 'edit');
    $('#contact-form').removeClass('hide');
}

function onClickClearAddressBook(event) {
	event.preventDefault();

    addressBook = [];
    saveDataToDomStorage('contacts', []);
    refreshAddressBook(addressBook);

}
