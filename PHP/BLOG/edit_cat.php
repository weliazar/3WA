<?php


if(array_key_exists('id', $_GET) == false) {
		header('Location: admin.php');
		exit();
}

include 'application.php';


$query = $pdo->prepare(
		'UPDATE
	                Category
	            SET
	                Name = ?
	            WHERE
	                Id = ?'
		);

$query->execute( [ $_POST['catName'],$_GET['id'] ] );

header('Location: admin.php');
exit();

include 'layout.phtml';
?>
