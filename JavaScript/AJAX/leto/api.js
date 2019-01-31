$.ajax({
    url: "https://api.internationalshowtimes.com/v4/movies/52340",
    type: "GET",
    dataType: "json",
    data: {
        "countries": "FR",
    },
    headers: {
        "X-API-Key": "nce8u3Rq5yNq0jL9FjpmxZ8jWCzv9xvw",
    },
})

.done(function(response) {
   /* console.log("HTTP Request Succeeded! ");*/
    console.log(response);
    
    $('.container h1').append(response.movie.title);
    
    $('#pict').attr('src', response.movie.poster_image_thumbnail);
    $('#author').append(response.movie.crew[0].name);
   
    for (var i=0 ; i<5 ;i++) {
    $('#cast').append(response.movie.cast[i].name + ',');
    };
   
    for (var i=0 ; i<2 ;i++) {
    $('#theme').append(response.movie.genres[i].name+ ',');
    };
    
    $('#desc').append(response.movie.synopsis);
    /*
    $('#video').append('src', response. );
    */
  
    
    if(response.movie.release_dates.FR != undefined) { $('#sortie').text(dateUsToFrench(response.movie.release_dates.FR[0].date)); 
    } 
    
    else if (response.movie.release_dates.US != undefined) {
        $('#sortie').text(dateUsToFrench(response.movie.release_dates.US[0].date));  
    }
    
    var url = response.movie.trailers[0].trailer_files[0].url;
	var youtube = url.split('=');
    
    
    var embed = 'https://www.youtube.com/embed/';
    $('#video').attr('src', embed+youtube[1]);
})


.fail(function(error) {
    console.log("HTTP Request Failed");
})






function position(pos) {

	console.log(pos);
    var location = pos.coords.latitude.toFixed(2)+','+pos.coords.longitude.toFixed(2);
    console.log(location);
    
    var date = new Date();

    $.ajax({
        url: "https://api.internationalshowtimes.com/v4/showtimes?movie_id=52340&countries=FR&location="+location+"&time_to="+date+"&distance=5",
        type: "GET",
        dataType: "json",
        data: {
            "countries": "FR",
        },
        headers: {
            "X-API-Key": "nce8u3Rq5yNq0jL9FjpmxZ8jWCzv9xvw",
        },
    })
    .done(displayShowTimes)
}




function displayShowTimes(response) {

	console.log(response);
    
    var showtimes = [];
    
    
    for(var i = 0; i < response.showtimes.length; i++) {
    	var seance = splitSeance(response.showtimes[i].start_at);
    	
       	var test = true;
        for (var j = 0; j < showtimes.length; j ++) {
            
            if (showtimes[j].cineId == response.showtimes[i].cinema_id) {
                
                    showtimes[j].show.time.push(seance.hour);
                    showtimes[j].show.url.push(response.showtimes[i].booking_link);
                    test = false;
                
                }
            }
            
            if (test == true) {
                showtimes.push({
                cineId :  response.showtimes[i].cinema_id,
                show : {
                      		time : [seance.hour],
                     		 url : [response.showtimes[i].booking_link]
                   	   } 
                });
            }
    
    }
    
    console.log('nouveau tab', showtimes);
    buildTableWithShow(showtimes);

}


function buildTableWithShow(showtimes) {
	var table = $('<table>');// creation tab
    
    table.append('<tr><td>cinema</td><td>horaire des scéance d\'aujourd\'hui</td></tr>');
    
	for (var k = 0; k < showtimes.length; k++) {
    
    	var tr = $('<tr>');
        tr.append('<td id="'+showtimes[k].cineId+'">'+showtimes[k].cineId+'</td>');
        
        var td = $('<td>');
        
        for(var l = 0; l < showtimes[k].show.time.length; l++) {
         
            td.append('<a href="'+showtimes[k].show.url[l]+'">'+showtimes[k].show.time[l]+'</a> ')
        
        }
        
        tr.append(td);

        table.append(tr);
    
    }

	$('#affiche').html(table);

    for(var m = 0; m < showtimes.length; m ++) {
    
    	getCineWithId(showtimes[m].cineId);

    
    }
    
}


function getCineWithId(cineId) {
	jQuery.ajax({
    url: "https://api.internationalshowtimes.com/v4/cinemas/"+cineId,
    type: "GET",
    data: {
        "countries": "FR",
    },
    headers: {
        "X-API-Key": "nce8u3Rq5yNq0jL9FjpmxZ8jWCzv9xvw",
    },
    })
    .done(function(response) {
    
        console.log('place',response);
        

        
        $('#'+response.cinema.id).html('<h3>'+response.cinema.name+'</h3> <p>'+response.cinema.location.address.display_text+'</p>');


    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("HTTP Request Failed");
    })



}




