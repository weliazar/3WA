<?php 

$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'troiswa');

$pdo->exec('SET NAMES UTF8'); 

$query = $pdo->prepare
(
	'SELECT * FROM `orders`'
);

$query->execute();

$orders= $query->fetchAll(PDO::FETCH_ASSOC);



include 'commande.phtml';
?>