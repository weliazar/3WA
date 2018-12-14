<!----------------------js/utilities.js.----------------------------->
<script>

function getRandomInteger(min, max)
{
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

</script>


</script>

<!----------------------js/slider.js.----------------------------->

<script>


var toolbar = document.getElementById('#toolbar-toggle');
var nav = document.querySelector('.toolbar ul');
var icon = document.querySelector('#toolbar-toggle i');
var next = document.getElementById('slider-next');
var prev = document.getElementById('slider-previous');
var random = document.getElementById('slider-random');
var play = document.getElementById('slider-toggle');

var pict = document.querySelector('#slider img');
var fig = document.querySelector('#slider figcaption');

var index = 0;
var isPlaying == false;
var timer;

var slides =
[
    { image: 'images/1.jpg', legend: 'Street Art'          },
    { image: 'images/2.jpg', legend: 'Fast Lane'           },
    { image: 'images/3.jpg', legend: 'Colorful Building'   },
    { image: 'images/4.jpg', legend: 'Skyscrapers'         },
    { image: 'images/5.jpg', legend: 'City by night'       },
    { image: 'images/6.jpg', legend: 'Tour Eiffel la nuit' }
];


function onToolbarToggle(){

	nav.classList.toggle('hide');
    icon.classList.toggle('fa-arrow-down');
    icon.classList.toggle('fa-arrow-right');
}

function goToNext() {

	if (index >= slides.length - 1 ) {
    
    	index = 0;
    
    } else {
    
    	index++;    
    }
    
    pict.src = slides[index].image;
	fig.textContent = slides[index].legend;   

}


function goToPrev() {
	
    if (index <= 0 ) {
    
    	index = slides.length - 1 ;
    
    } else {
    
    	index--;
    }
    
    pict.src = slides[index].image;
	fig.textContent = slides[index].legend;   

}

function goToRandom() {

	index = getRandomInteger(0, slides.length -1 );
    
    pict.src = slides[index].image;
	fig.textContent = slides[index].legend;   

}

function goToPlay() {
	if (isPlaying == false) {
    
    	timer = window.setInterval(goToNext, 2000);
        isPlaying = true;
        
    } else {
    	window.clearInterval(timer);
        isPlaying = false;

    }
    
    var faPlay = document.querySelector('#slider-toggle i');
    faPlay.classList.toggle('fa-play');
    faPlay.classList.toggle('fa-pause');

}

function onPushButtons(event) {
	
    console.log(event);
    
    if (isPlaying == true) {
        goToPlay();	
    }
    
    switch(event.keyCode) {
    	
        case 39:
        goToNext(); // droite
        break;
        
        case 37: // gauche
        goToPrev();
        break
        
        case 82: // bas
        goToRandom();
        break;
        
        case 32: //espace
        goToPlay();
        break
    }


}



pict.src = slides[index].image;
fig.textContent = slides[index].legend;

toolbar.addEventListener('click', onToolbarToggle);
next.addEventListener('click', goToNext);
prev.addEventListener('click', goToPrev);
random.addEventListener('click', goToRandom);
play.addEventListener('click', goToPlay);

document.addEventlistener('keyup', onPushButtons);
