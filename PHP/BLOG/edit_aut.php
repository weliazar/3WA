<?php
	if(array_key_exists('id', $_GET) == false) {
		header('Location: admin.php');
		exit();
	}

	var_dump($_POST);

	include 'application.php';


	$query = $pdo->prepare(
		'UPDATE
	                Author
	            SET
	                FirstName = ?,
	                LastName = ?
	            WHERE
	                Id = ?'
		);

	$query->execute( [ $_POST['firstName'], $_POST['lastName'], $_GET['id'] ] );


	header('Location: admin.php');
    exit();

include 'layout.phtml';
?>
