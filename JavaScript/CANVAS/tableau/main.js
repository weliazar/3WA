var canvas = document.querySelector('#masterpiece');
   
var context = canvas.getContext('2d');


/*
var disk = {
	color: 'black',
    radius = 10,
    position = {x:0, y:0}
}

*/


function onClickCanvas(event)
{
	var offset = canvas.getBoundingClientRect();
    var style = window.getComputedStyle(canvas);
    var border = parseInt(style.borderWidth);
    
	var location = {  x: event.clientX - offset.left - border , y: event.clientY - offset.top - border }

	var disk = new Disk();
    
    /*
var disk = {
	color: 'black',
    radius = 10,
    position = {x:0, y:0}
}

*/
    
    disk.setRadius(getRandomInteger(10,100));
    disk.setPosition(location);
	disk.setColor(getRandomColor());
    
    disk.draw(context);
}


canvas.addEventListener('click', onClickCanvas);
















/*
var disk = {
	color: 'red',
    radius = 10,
    position = {x:0, y:0}
}

*/


/*
function onClickCanvas(event)
{

	var disk = new Disk();

}


canvas.addEventListener('click', onClickCanvas);


var canvas = document.getElementById("tableau");
var context = canvas.getContext("2d");

context.beginPath();
context.lineWidth = "2";
context.arc(100, 100, 90, 0, 2 * Math.PI);
context.fill();



function onClickPosition(event) {

    console.log(event.clientX);
    console.log(event.clientY);

    var offset = canvas.getBoundingClientRect();

}


$(document).click('click', onClickPosition);

*/