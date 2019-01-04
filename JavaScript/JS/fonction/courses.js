'use script';

var courses = ['yaourt', 'eau', 'pates', 'the', 'carotte ', 'mais',
    'citron',
    'riz'];


function addProduct(item) {
    courses.push(item);
}

console.log(courses);

var product = window.prompt('ajouter produit');

addProduct(product);

console.log(courses);

function deleteProduct(item) {
    var index = courses.indexOf(item);
    if (index != -1) {
        courses.splice(index, 1);
    }
}

document.write('votre liste contient :' +courses);


function deleteAll() {
    courses = []; //ecrase par un tableau vide pour tout supprimer
}

deleteProduct('riz');
console.log(courses);

// correction


var shoppingList = new Array();

function addItem(item)
{

	shoppingList.push(item);

}

function displayShoppingList()
{

	console.log('La liste contient ' + shoppingList.length + ' produit(s).');
	console.log(shoppingList);
    
    document.write('<ul>');
    
    for (var i = 0; i < shoppingList.length; i++) {
    
    	document.write('<li>'+shoppingList[i]+'</li>')
    	
    }
    
    document.write('</ul>');
}

function removeAllItems()
{

	shoppingList = [];
    
    //shoppinglist(0, shoppingList.length -1);
    
}


function removeItem(item)
{
	var index = shoppingList.indexOf(item);
    
    if(index == -1)
	{
    	console.log("ERREUR : le produit " + item + " n'existe dans la liste de courses");

    } else {
    	shoppingList.splice(index, 1);
    }
    

}


console.clear();


addItem('Fraises');
addItem('Poulet');
addItem('Tournevis');
addItem('Artichaut');

displayShoppingList()


removeItem(window.prompt('Quel produit de la liste de courses souhaitez-vous supprimer ?'));
displayShoppingList();

removeAllItems();
displayShoppingList();
