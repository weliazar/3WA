/*Cette page sert a gerer l'ensemble des evenements du tableau */


/*Cet objet Appelle de la var canvas dans main.js et la var pen dans pen.class.js */
var Slate = function(pen, canvas)
{
  /*THIS = SLATE*/

	this.canvas = canvas;
    this.context = this.canvas.getContext('2d');
    this.currentLocation = null;/*null = pas de valeur - tant qu'il se passe rien */
    this.isDrawing       = false;/*false par defaut quand il se passe rien */
    this.pen         =  pen;/*caracteristique du stylo */


/*Au click appelle des fncts onMouseDown - onMouseMove - onMouseUpAndLeave  */
    this.canvas.addEventListener('mousedown',  this.onMouseDown.bind(this));
    this.canvas.addEventListener('mousemove',  this.onMouseMove.bind(this));
	this.canvas.addEventListener('mouseup',    this.onMouseUpAndLeave.bind(this));
    this.canvas.addEventListener('mouseleave', this.onMouseUpAndLeave.bind(this));
}

/*Methode POUR LA POSITION*/
Slate.prototype.getMouseLocation = function(event)
{
	var offset = this.canvas.getBoundingClientRect();/*position du canvas par rapport au site ex: (20,40)*/


	var location = { x: event.clientX - offset.left, y: event.clientY - offset.top };

    console.log(location);

    return location;
}

/*Methode AU CLICK  */
 Slate.prototype.onMouseDown = function(event) {

 	console.log('coucou ');

    this.currentLocation = this.getMouseLocation(event);

    this.isDrawing = true;

 }

/*Methode */
 Slate.prototype.onMouseMove = function(event) {

    var location = this.getMouseLocation(event);

    if(this.isDrawing == true) {

        this.pen.configure(this.context);
        this.context.beginPath();
        this.context.moveTo(this.currentLocation.x, this.currentLocation.y);
        this.context.lineTo(location.x, location.y);
        this.context.stroke();

        this.currentLocation = location;
    }

 }
/* Methode quand le dessin s'arrete  */
  Slate.prototype.onMouseUpAndLeave = function(event) {

  	this.isDrawing = false;
  }

/*Autres methodes dans program.class.js - methode qui sert a reset   */
	Slate.prototype.clear = function(event) {

   	this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);

   }
