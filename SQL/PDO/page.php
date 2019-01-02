<?php 


$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'troiswa');

$pdo->exec('SET NAMES UTF8'); 

$query = $pdo->prepare
(
	'SELECT customerName, contactFirstName, contactLastName, addressLine1, addressLine2, city FROM orders INNER JOIN customers ON orders.customerNumber = customers.customerNumber WHERE orderNumber=?'// TOUJOURS METTRE UN ? POUR PAS SE FAIRE PIRATER
);


$query->execute( [ $_GET['orderNumber'] ] );/*TOUJOURS METTRE LA VARIABLE DANS UN TAB ET  */
$customer = $query->fetch(PDO::FETCH_ASSOC);
//var_dump($_GET['orderNumber']);
//var_dump($customer);


$query = $pdo->prepare
('SELECT 
productName,priceEach,quantityOrdered,
 priceEach * quantityOrdered 
 AS totalPrice
FROM orderdetails
INNER JOIN products ON products.productCode = orderdetails.productCode
WHERE orderNumber = ?
ORDER BY orderLineNumber'

);

$query->execute(array($_GET['orderNumber']));

$orderLines = $query->fetchAll(PDO::FETCH_ASSOC);



$result = $query->fetch(PDO::FETCH_ASSOC);

$totalAmount = $result['totalAmount'];











include 'page.phtml';
?>