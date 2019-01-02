<?php

$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'troiswa');
// sert a connecter la page avec le serveur /*host = ou est stocker l'info - nom du fichier - id et mdp   */

$pdo->exec('SET NAMES UTF8'); // caracteres latin 

$query = $pdo->prepare
(
	'SELECT * FROM offices WHERE officeCode=3' // données que je veux recuperer
    
    /*
    exemple :
    SELECT `contactLastName`,`contactFirstName`FROM customers WHERE country="France"
    
    */
);

$query->execute();// executer

$bureau = $query->fetch(PDO::FETCH_ASSOC); // stock l'info dans la variable bureau - fetchAll (met l'info dans un tab) et fetch (sans tab) recupere et met dans la variable


var_dump($bureau);

?>
`