<?php

include 'application.php';
session_start();/*A METTRE DANS LES PAGES OU JE VEUX MAINTENIR LA CONNECTION (SAUVEGARDE)*/

if(empty($_POST) == true){
if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id'])){
header('Location: admin.php');
exit();
 }
/* securiter pour forcer les gens a mettre les parametres et les dirige vers la page initial */


	$query = $pdo->prepare(
	'SELECT
                Id,
                Title,
                Content
            FROM
                post
            WHERE
             	Id=?'
     );

     $query->execute( [ $_GET['id'] ] );
	 $post = $query->fetch(PDO::FETCH_ASSOC);

     $template = 'edit_post';
	 include 'layout.phtml';

} else {
	$query = $pdo->prepare(
		'UPDATE
	        post
	     SET
	        Title = ?,
	        Content = ?
	     WHERE
	        Id = ?'
	);

    $query->execute( [ $_POST['title'], $_POST['content'], $_POST['postId'] ] );

header('Location: admin.php');
    exit();
}


?>
