var tab = ['chien', 'chat', 'poisson', 'hamster', 'cochon d\'inde', 'rat', 'ragondin', 'furet'];


console.log(tab.length); // 7

// methode WHILE

var i = 0;

while (i < tab.length) {
	
    document.write('<p>'+tab[i]+'</p>');
	i++;

}



//methode FOR

/*
for(var i = 0; i < tab.length; i++) {

	document.write('<p>'+tab[i]+'</p>');

}*/

for (var i = 30; i >= 0; i--) {
	document.write('<p>'+i+'</p>');

}

