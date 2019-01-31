/* VERSION1

var Car = function() {
	
    this.brand = "Renault";
    this.year = "1991";
    this.model = "21 Nevada";
    this.fuel = "diesel";
    this.km = "289000";
    

}

*/


/*VERSION 2 */


var Car = function(brand, year, model, fuel, km, reservoir) {
	
    this.brand = brand;
    this.year = year;
    this.model = model;
    this.fuel = fuel;
    this.km = km;   
    this.reservoir = reservoir;

}

Car.prototype.affichage = function() {

	$('#affiche').append('<p>'+this.brand+' '+this.year+' '+ this.model +'</p><p>fuel : '+this.fuel+'km ? : '+this.km+'</p>');

	console.log(this.reservoir);

}


Car.prototype.piquerEssence = function(objet, volume) {

	this.reservoir += volume;
    objet.reservoir -= volume;
    
    
    console.log( 'reservoir de '+this.brand+' : '+this.reservoir  );
    console.log( 'reservoir de '+objet.brand+' : '+objet.reservoir  );
	

}


