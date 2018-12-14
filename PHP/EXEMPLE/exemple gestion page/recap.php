
<?php

//$_post est une super globale qui peut aller sur toute les pages

if (empty($_POST) == false) {

	var_dump($_POST);

    
	$firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    
    
    include 'header.phtml';
    include 'recap.phtml';
    include 'footer.phtml';

}else {
	header('Location: form.php');
    exit();
} // renvoi a l'url



?>
