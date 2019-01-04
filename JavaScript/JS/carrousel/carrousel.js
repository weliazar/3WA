'use strict';

var toolbar = document.querySelector('#toolbar-toggle')
var nav = document.querySelector('.toolbar ul');
var icon = document.querySelector('#toolbar-toggle i');
var image = document.querySelector('#slider img');
var i = 0;
var next = document.getElementById('slider-next');
var previous = document.getElementById('slider-previous');

var stopPlay = document.getElementById('slider-toggle');
var random = document.getElementById('slider-random');

var playing = false;
var diapo;

function disparait() {
    nav.classList.toggle('hide')
    icon.classList.toggle('fa-arrow-down');
    icon.classList.toggle('fa-arrow-right');
}
toolbar.addEventListener('click', disparait);



var tab = ['images/1.jpg', 'images/2.jpg', 'images/3.jpg', 'images/4.jpg', 'images/5.jpg', 'images/6.jpg'];



function changeImageNext() {

    if (i >= tab.length - 1) {
        i = 0;
    } else {
        i++;
    }
    console.log(i);
    image.src = tab[i];

}
image.src = tab[i];




function changeImagePrevious() {

    if (i <= 0) {
        i = tab.length - 1;
    }
    i--;

    console.log(i);
    image.src = tab[i];
}
image.src = tab[i];



function changeStopPlay() {
    console.log('je me declenche');
    if (playing == false) {
        diapo = window.setInterval(changeImageNext, 1000);
        playing = true;

    } else {
        clearInterval(diapo)
        playing = false;
    }

    var fa = document.querySelector('#slider-toggle i');
    fa.classList.toggle('fa-play');
    fa.classList.toggle('fa-pause');
}



function goToRandom() {

    i = getRandomInteger(0, tab.length - 1);

    image.src = tab[i];
    // getRandomInteger est dans le fichier js utilities et le script utilies doit etre toujours devant 
}
/*
function onPushButtons(event) {

    console.log(event);

    if (isPlaying == true) {
        goToPlay();
    }

    switch (event.keyCode) {

        case 39:
            goToNext();
            break;

        case 37:
            goToPrev();
            break

        case 82:
            goToRandom();
            break;

        case 32:
            goToPlay();
            break
    }

document.addEventlistener('keyup', onPushButtons);
*/


    goToRandom();
    random.addEventListener('click', goToRandom);
    stopPlay.addEventListener('click', changeStopPlay);
    next.addEventListener('click', changeImageNext);
    previous.addEventListener('click', changeImagePrevious);