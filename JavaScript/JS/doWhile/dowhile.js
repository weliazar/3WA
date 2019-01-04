/* var name = window.prompt('nom');


do {
    var name = window.prompt('nom');
    document.write('<p>' + name + '</p>');


} while (name != 'Jo');



document.write('<p>trouvé</p>')
*/

var number;

do
{
	number = parseFloat(window.prompt('Veuillez saisir un nombre :'));


}
while(isNaN(number) == true );


document.write('<p>Merci, vous avez saisi <strong>' + number + '</strong>.</p>');
