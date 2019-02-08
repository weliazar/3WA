<?php

/*API OUVERT QLQN PEUT ACCEDER AU SERVEUR - JUSTE POUR RECUPERER LES DONNÉES EN JSON */


header('access-control-allow-origin: *');
header('Content-Type: application/json');

include 'class/Database.class.php';
$database = new Database();

$API_KEY = "aze";

if (array_key_exists('id', $_GET) == false && array_key_exists('key_word', $_GET) == false && $_GET['api_key'] == $API_KEY){

    $sql = 'SELECT * FROM customers';

    $execute = [];

    $customer = $database->query($sql, $execute);

    echo json_encode($customer);
    exit();

} else if(array_key_exists('id', $_GET) == true && $_GET['api_key'] == $API_KEY) {

    $sql = 'SELECT * FROM customers WHERE customerNumber =?';

    $execute = [$_GET['id']];

    $customer = $database->queryOne($sql, $execute);

   echo json_encode($customer);
    exit();


} else if ( $_GET['api_key'] != "aze" ) {

    echo 'error 401 va te faire foutre';

} else if (array_key_exists('key_word', $_GET) == true && $_GET['api_key'] == $API_KEY){

    $sql = 'SELECT * FROM customers WHERE customerName LIKE ?';

    $execute = ['%'.$_GET['key_word'].'%'];

    $custormerName = $database->query($sql, $execute);

    echo json_encode($custormerName);
    exit();
}


?>
