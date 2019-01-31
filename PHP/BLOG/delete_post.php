<?php

if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id'])){
            header('Location: admin.php');
            exit();
}

include 'application.php';

$query = $pdo->prepare(
	'DELETE FROM post WHERE Id= ?'
);

$query->execute( [ $_GET['id'] ] );

$query = $pdo->prepare(
	'DELETE FROM comment WHERE postId= ?'
);

$query->execute( [ $_GET['id'] ] );

header('Location: admin.php');
exit();



?>