var colonne;
var rangee;
var taille = parseInt(window.prompt('taille de la table de multiplications ?'));

document.write('<table class="bordure">')
for (colonne = 1; colonne <= taille; colonne++) {

    document.write('<tr>');
    for (rangee = 1; rangee <= taille; rangee++) {
        var result = colonne * rangee;
        if (colonne == rangee) {
            document.write('<td class="color">');

        } else {
            document.write('<td class="color2">');

        }
        document.write(result);
        document.write('</td>');

    }
    document.write('</tr>');
}

document.write('</table>')

// correction 



var column;
var row;
var size;

size = parseInt(window.prompt('choisir la taille de la table'));

document.write('<table>');

for (row = 1; row <= size; row++) {

    document.write('<tr>');

    for (column = 1; column <= size; column++) {

        var result = row * column;

        if (row == column) {

            document.write('<td class="same-number">');


        } else {

            document.write('<td>');

        }

        document.write(result);

        document.write('</td>');
    }


    document.write('</tr>');

}


document.write('</table>');
