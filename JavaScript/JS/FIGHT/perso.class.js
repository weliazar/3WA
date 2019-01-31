var perso = function (nom, pv, attaque, defense, magie) {

    this.nom = nom;
    this.pv = pv;
    this.attaque = attaque;
    this.defense = defense;
    this.magie = magie;
/*c'est comme si this etait = joueur ou ordinateur */
}




var joueur = new perso('joueur', 300, 50, 7, 120);
var ordinateur = new perso('ordinateur', 280, 45, 18, 160);

console.log(joueur, ordinateur);


/*prototype = modele qui permet de  */
perso.prototype.attaquer = function (perso) {

    var degats = this.attaque - perso.defense;

    if (degats < 10) {

        console.log(perso.nom + 'ne sent plus rien....');
        degats = 10
    }
    perso.pv -= degats

    console.log(this.nom + ' Attaque, il enlève ' + degats + ' pv a ' + perso.nom)

    console.log(perso.nom + ' a  ' + perso.pv + ' pv');
}





perso.prototype.defendre = function () {
    var ratio = Math.round(this.defense * Math.random());

    console.log(this.nom + ' augmente sa defense de ' + ratio / 2 + ' point ');
    this.defense += ratio / 2;

    console.log(this.nom + ' a une defense à :' + this.defense);
}


perso.prototype.sort = function (perso) {

    if (this.magie > 0) {
        var degats = getRandomInteger(1, this.magie);
        console.log(this.nom + ' jete un sort,il enlève ' + degats + ' pv a ' + perso.nom);
        perso.pv -= degats;
        this.magie -= degats;
        console.log(perso.nom + ' a  ' + perso.pv + ' pv');
    } else {
        console.log('Vous n avez plus de point de magie....')
    }

}


joueur.attaquer(ordinateur);
ordinateur.defendre();
joueur.sort(ordinateur);















