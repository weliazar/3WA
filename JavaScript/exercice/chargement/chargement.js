var fill = document.getElementById('fill');
var percent = document.getElementById('percent');//paragraphe 


var size = 0;
var timer;

function interval()
{
	size += 2;
    fill.style.width=size+"%";
	percent.textContent = size+"%";
    
    
    if(size >= 100) {
    	window.clearInterval(timer);// arrete a 100%
    }
}

timer = window.setInterval(interval,50)// tout les (temps)