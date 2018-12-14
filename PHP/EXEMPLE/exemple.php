<?php /* toujours avant*/

$name = 'Wilkenson';

var_dump($name); /* equivalent console.log */
for ($i = 0; $i < 6; $i++) {
    echo '<p>Salut '.$name.'</p>'; /* equivalent document.write*/ /* concatainer est un point*/
}

if ($name == 'Paul') {
	echo 'Tu es Paul';
    
} else {
	echo 'Tu n\' es pas Paul';
}


function addition($num1, $num2) {
     $result = $num1 + $num2;
    return $result;
}
$result = addition(3, 5);

$table = ['chien', 'chat', 'souris']; /*tableau*/

echo $table[1];

$dico /*tableau associatif*/ = [

	'name' => 'Robert',
	'age' => 23,
	'taille' => '1m85',
    'fumeur' => false /*pas de virgule pour le dernier*/
];

echo '<p>'.$dico['name'].'</p>';

array_key_exists('name', $dico); // renvoie true si la clef existe ou sinon false

in_array(23, $dico);// renvoie true si la value existe ou sinon false

array_search('1m85', $dico); // renvoie la clef

$dico['age']; // renvoie la value



include 'exemple.phtml'; //fait le lien avec les autres fichier equivalent d'un link !! bien mettre dans l'orde pour la lecture




/* toujours apres*/?>
