

function position(pos) {

	console.log(pos);
    var location = pos.coords.latitude.toFixed(2)+','+pos.coords.longitude.toFixed(2);
    console.log(location);

}



if(navigator.geolocation) {
	
    console.log('il y a la géoloc');
    
    navigator.geolocation.getCurrentPosition(position);
    
} else {

  console.log('Pas de geoloc');
}



displayMovieWithId(52340);