
function createContact(title, firstName, lastName, phone)
{
	var contact = {};
    contact.title = title;
    contact.firstName = firstName;
    contact.lastName  = lastName.toUpperCase();
    contact.phone     = phone;

    return contact;

}

function load() {

	var addressBook = loadDataFromDomStorage('contacts');

    if(addressBook == null)
    {
    	addressBook = []
    }

    return addressBook;

}


function refreshAddressBook(addressBook)
{
	 $('#address-book').empty();

     var addressBookList = $('<ul>');

    for(var index = 0; index < addressBook.length; index++)
    {
    	var li = $('<li data-id="'+index+'">');
        li.append(addressBook[index].firstName+' '+addressBook[index].lastName);

        addressBookList.append(li);

    }

    $('#address-book').html(addressBookList);



}
