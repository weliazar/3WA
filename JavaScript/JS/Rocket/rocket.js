'use strict';

var chrono = document.querySelector('#billboard span');

var bouton = document.querySelector('#firingButton');

var fusee = document.querySelector('#rocket');

var timer;

var count = 10;

function pushFireButton() {

    timer = window.setInterval(startCount, 1000);
    depart()
}

function startCount() {
    chrono.textContent = count;
    count--;

    if (count < 0) {
        window.clearInterval(timer);
        fin ()
    }
}

bouton.addEventListener('click', pushFireButton);

 function depart() {

        rocket.src="images/rocket2.gif"
    }

function fin () {
    
    rocket.src="images/rocket3.gif"
 rocket.classList.add("tookOff")
}

// correction


var rocket = document.getElementById('rocket');
var billboard = document.querySelector('#billboard span');
var firingButton  = document.getElementById('firingButton');
var count = 10;
var timer;

function onClickFiringButton()
{

	timer = setInterval(countDown, 1000);
	rocket.src = 'images/rocket2.gif';
    
    window.setTimeout(out, count * 1000)

}


function out() {
	
    rocket.src = 'images/rocket3.gif';
    rocket.classList.add('tookOff');
    firingButton.removeEventListener('click', onClickFiringButton);
    

}


function countDown()
{
	billboard.textContent = count;
	count--;
    
    if( count == -1 ){
        
        clearInterval(timer);
        //rocket.src = 'images/rocket3.gif';
        //rocket.classList.add('tookOff');
        //firingButton.removeEventListener('click', onClickFiringButton);
    }

}


firingButton.addEventListener('click', onClickFiringButton);