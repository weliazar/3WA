var toggleRectangle = document.getElementById('toggle-rectangle');

var rectangle = document.querySelector('.rectangle');

console.log(rectangle);

toggleRectangle.addEventListener('click' ,cacher);

function cacher() {
   rectangle.classList.toggle('hidden');
}





var rectangle =document.querySelector('.rectangle')


rectangle.addEventListener('mouseout',changeColor1);
rectangle.addEventListener('mouseover',changeColor1);
function changeColor1() {
rectangle.classList.toggle('important')
    
    
    
    
}
var rectangle =document.querySelector('.rectangle')


rectangle.addEventListener('dblclick' ,changeColor);

function changeColor() {
rectangle.classList.toggle('good')
    
}


function onMouseOutRectangle()
{
    rectangle.classList.remove('good');
    rectangle.classList.remove('important');
}

