<?php

if (empty($_POST) == false) {

	//var_dump($_POST);
	include 'application.php';

	$query = $pdo->prepare
	(
	    '
            INSERT INTO
                Author
                (FirstName, LastName)
            VALUES
                (?, ?)
        '

	);

	$query->execute( [ $_POST['firstName'],  $_POST['lastName'],] );

	header('Location: admin.php');
	exit();

}


include 'layout.phtml';
?>
