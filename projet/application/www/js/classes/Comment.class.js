
getComments('pestel');

$('.changeType').on('click', onClickRecupType);


function onClickRecupType(event) {
    var type = $(this).data('type');
    console.log(type);
    getComments(type);
}


function getComments(type) {
    $.getJSON(getRequestUrl()+'/comment?type='+type, displayComments)
}


function displayComments(response) {
    
    console.log(response);
    
    var table = $('<table>');
    table.append('<tr><td>Pseudo</td><td>Contenu</td><td>Date</td></tr>');
    
    for(var i = 0; i < response.length; i++){
        var tr = $('<tr>');
        tr.append('<td>'+response[i].Pseudo+'</td><td>'+response[i].Content+'</td><td>'+response[i].CreationDate+'</td>');
        table.append(tr);
    }
    
    $('#comments').html(table);
    
}