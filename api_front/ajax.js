'use script'

$getjson('http://10.10.109.36/dev/api_front/customer.php?api_key=aze&id=103',function(response){
    
    console.log(response);
});




$getjson('http://10.10.109.36/dev/api_front/office.php',function(response){
    
    console.log(response);
});


$getjson('http://10.10.109.36/dev/api_front/office.php?id=3',function(response){
    
    console.log(response);
});



$getjson('http://10.10.109.36/dev/api_front/employees.php',function(response){
    
    console.log(response);
});






/*INPLEMENTATION*/
/*
$getjson('http://10.10.109.36/dev/api_front/customer.php?api_key=aze&id=103',displayUser);




$getjson('http://10.10.109.36/dev/api_front/office.php',displayUser);


$getjson('http://10.10.109.36/dev/api_front/office.php?id=3',displayUser);



$getjson('http://10.10.109.36/dev/api_front/employees.php',displayUser);

*/



/*CORRECTION 

const API_KEY = "aze"

//api chez Jacob
$.getJSON('http://10.10.109.33/apiback/customer.php?id=103&api_key=aze', displayUser);


//api chez Fabien
$.getJSON('http://10.10.109.9/dev/api_back/offices.php', displayUser);



//api chez Amel
$.getJSON('http://10.10.109.14/apiBack/offices.php?id=3', displayUser);


//api chez Emmanuel
$.getJSON('http://10.10.109.7/dev/api_back/employees.php', displayUser);



function displayUser(response) {
	console.log(response);
}



const API_KEY = "aze"

function findCustomer(event) {
	event.preventDefault();
	var keyWord = $('#customerName').val();
	$.getJSON('http://10.10.109.36/dev/api_back/customer.php?key_word='+keyWord+'&api_key='+API_KEY, buildCustomer);

}


function buildCustomer(response) {
	console.log(response);
    var ul = $('<ul>');
	for(var i =0; i < response.length; i++) {
		ul.append('<li>'+response[i].customerName+'</li>')
	}

	$('#result').html(ul);

}


$('#submitCN').on('click', findCustomer);
*/