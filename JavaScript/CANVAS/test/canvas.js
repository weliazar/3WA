var canvas = document.getElementById("moncanevas"); 

var context = canvas.getContext('2d'); /*toujours mettre getContext ()*/


context.beginPath();/*toujours mettre au debut*/

context.strokeStyle='green';/*avant le tracer - pour la couleur*/

context.lineWidth=12; /*avant le tracer - pour l'epaisseur*/

context.moveTo(20,100);
context.lineTo(200,10);
context.lineTo(500, 300);

context.stroke(); /* ordre de creation toujours a la fin */


context.beginPath();
context.strokeStyle='red';
context.lineWidth=10; 
context.lineTo(500, 300);
context.lineTo(200, 300);
context.stroke(); 


context.beginPath();
context.strokeStyle='blue';
context.lineWidth=3; 
context.arc(200,100,50,0,2*Math.PI); /* 200 et 100 : position, 50:diametre,0:coupe,math.pi  */
context.stroke(); 

context.beginPath();
context.strokeStyle='blue';/*contour*/
context.lineWidth=3;
context.fillStyle = "pink"; 
context.arc(200,100,100,0,2*Math.PI);
context.fill(); /*remplir*/



function onClickPosition(event) {
	
	console.log(event.clientX);
    console.log(event.clientY);
    
    var offset = canvas.getBoundingClientRect();
    
}


$(document).click('click', onClickPosition);