<?php

require_once('vendor/autoload.php');


\Stripe\Stripe::setApiKey('sk_test_tb2eaU49ocWP2HO9Uy5qzb3x');


$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$token = $_POST['stripeToken'];



// create customer 

$customer = \Stripe\Customer::create(array(
	"email" => $email,
	"source" => $token
));


//payment

$charge = \Stripe\Charge::create(array(
	"amount" => 3000,/* mettre var montant du client*/
	"currency" => "eur",
	"description"=>"Commande ok",
	"customer" => $customer->id
));


header('Location: success.php?tid='.$charge->id.'&product='.$charge->decription);
exit();