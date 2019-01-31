function getRandomInteger(min, max)
{
	return Math.floor(Math.random() * (max - min + 1)) + min;
}


function getRandomColor()
{
    var red;
    var blue;
    var green;
    var opacity;
    
    red = getRandomInteger(0, 255);
    blue = getRandomInteger(0, 255);
    green = getRandomInteger(0, 255);
    
    opacity = Math.random();
    
    return 'rgba('+ red +', '+ blue +', '+ green +', '+ opacity +')';
}