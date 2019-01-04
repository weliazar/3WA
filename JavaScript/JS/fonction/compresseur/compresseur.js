var image = 'WWWWWWWWWWWWBWWWWWWWWWWWWWWBBBWWWWWWWWWWWWWWWWWWWWWWWBWWWWWWWWWWW';

//var image = 'RRRRRRRRRRGGGBBBBBvvvvvvvBBBBDDDDDDEEEEJJJJSSSEEEEEEEE';

var current = image.charAt(0);
var count = 1;
var result = "";
// current = W
// count = 12

//result = 12W1B13W3B

for (var i = 1; i < image.length; i ++){
    if (current != image.charAt(i)) {
        result += count;
        result += current;
        current = image.charAt(i);
        count = 0;
        
    }
    count++;
}

result += count;
result += current;


console.log(result);


// v2


function LRE(s)
{
	var result = "";
	var current_char = s.charAt(0);
	var count = 1;
    
    // count = 11
    // current_char = W
    //result = 12W1B14W3B23W1B11W
    
    for(var i = 1; i < s.length ; i++)
	{
    	if ( current_char != s.charAt(i) )
		{
        	result += count;
			result += current_char;
        	current_char = s.charAt(i);
            count = 0;
        }
        
        count++;
    }
    
    result += count;
	
    result += current_char;
    
    return result;

}


var s = "WWWWWWWWWWWWBWWWWWWWWWWWWWWBBBWWWWWWWWWWWWWWWWWWWWWWWBWWWWWWWWWWW";
var compressed_string = LRE(s); //12W1B14W3B23W1B11W

document.write("<p>string d'origine : " +s+"</p>");
document.write("<p>string compressee : " + compressed_string+"</p>");




