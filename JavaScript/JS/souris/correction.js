var fill = document.getElementById("fill");
var percent = document.getElementById("percent");
var size = 0;
var timer;

var h1 = document.querySelector('h1');

h1.textContent = "hello"; //<h1> Hello</h1>


function interval()
{
	size += 2;
    fill.style.width=size+"%";
	percent.textContent = size+"%";
    
    if(size >= 100) {
    
    	window.clearInterval(timer);
  
    }
}


timer = window.setInterval(interval,250)