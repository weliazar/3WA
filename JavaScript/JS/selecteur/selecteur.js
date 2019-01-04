var photoList =document.querySelectorAll('#photoList li');

console.log(photoList);
for (var i = 0; i < photoList.length; i++) {
    photoList[i].addEventListener('click', selection);

}

function selection() {
    this.classList.toggle('select')// this sert a 
}


var total= document.querySelector('em');





// correction

var photos = document.querySelectorAll('.photo-list li');
var total  = document.querySelector('#total em');

function onClickListItem()
{
	this.classList.toggle('selected');
	var selectedPhotos = document.querySelectorAll('.photo-list li.selected');
	total.textContent = selectedPhotos.length;
}




for(index = 0; index < photos.length; index++)
{
    photos[index].addEventListener('click', onClickListItem);
}



setTimeout(myFunction, 10000);// pour la fusée declenche une fonction au bout d'un temps definit 
