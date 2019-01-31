/*----TOUJOURS TESTER LES FONCTIONS -----*/

/*GERE LE DEROULEMENT*/
var Program = function () {

    this.joueur = new perso('Joueur', 300, 50, 7, 120);
    this.ordinateur = new perso('Ordinateur', 280, 45, 18, 160);

    $('#attaquer').on('click', this.onClickAttaque.bind(this)); 
    
    
    $('#defendre').on('click', this.onClickDefense.bind(this));
    $('#sort').on('click', this.onClickSort.bind(this));
    /*
    this contient joueur / ordinateur 
    
    bind force a prendre la valeur qu'il y a entre paranthèses ex: bind('coucou') affichera coucou */

}


/*methode pour afficher - affichage pour mettre a jour*/
Program.prototype.affichage = function() {

	if(this.joueur.pv > 0 && this.ordinateur.pv > 0) {
    
    	$('#player').text(this.joueur.nom+ ' : '+this.joueur.pv+' pv, attaque : ' + this.joueur.attaque + ', defense : '+ this.joueur.defense +', magie : '+ this.joueur.magie);
        
		$('#ordi').text(this.ordinateur.nom+ ' : '+this.ordinateur.pv+' pv, attaque : ' + this.ordinateur.attaque + ', defense : '+ this.ordinateur.defense +', magie : '+ this.ordinateur.magie);
    
    
    } else {
    	$('#commande').css('display', 'none');
    
    	if(this.joueur.pv > 0) {
        	$('#affichage').html('<p>Victoire de : '+this.joueur.nom+'</p>');

        } else {
        	$('#affichage').html('<p>Victoire de : '+this.ordinateur.nom+'</p>');
        }
    
    }


}



/**/

Program.prototype.onClickAttaque = function(event) {
	event.preventDefault();

	this.joueur.attaquer(this.ordinateur);
    this.contre();
    this.affichage();
    
}

Program.prototype.onClickDefense = function(event) {
	event.preventDefault();
	this.joueur.defendre();
	this.contre();
	this.affichage();
}

Program.prototype.onClickSort = function(event) {
	event.preventDefault();
	if (this.joueur.magie >= 0) {
		this.joueur.sort(this.ordinateur);
        this.contre();
        this.affichage();
    
    } else {
    	console.log('plus de points de magie, veuillez jouer autre chose');

    }


}

Program.prototype.contre = function() {
	var random = getRandomInteger(1, 3);

	if (random == 1) {
		this.ordinateur.attaquer(this.joueur);
	} else if (random == 2) {
    
    	this.ordinateur.defendre();
    
    } else {
    	if(this.ordinateur.magie > 0) {
			this.ordinateur.sort(this.joueur);
		} else {
        	console.log('Plus de points de magie, on change de technique');

        	this.contre();
        }
    
    }

}



