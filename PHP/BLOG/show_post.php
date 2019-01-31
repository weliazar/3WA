<?php

session_start();

if(array_key_exists('id', $_GET) == false || ctype_digit($_GET['id']) == false) {
    header('Location: index.php');
    exit();
}
/* securiter pour forcer les gens a mettre les parametres et les dirige vers la page initial */

include 'application.php';

$query = $pdo->prepare (
	' SELECT
            post.Id,
            Title,
            Content,
            CreationDate,
            FirstName,
            LastName
        FROM
            post
        INNER JOIN
            Author
        ON
            post.AuthorId = Author.Id
        WHERE
            post.Id = ?'

	);
$query->execute( [ $_GET['id'] ] );
$post = $query->fetch(PDO::FETCH_ASSOC);


$query = $pdo->prepare(
	'SELECT
            Pseudo,
            Content,
            CreationDate
        FROM
            comment
        WHERE
            postId = ?'
	);

$query->execute( [ $_GET['id'] ] );
$comments = $query->fetchAll(PDO::FETCH_ASSOC);



$template = "show_post";

include 'layout.phtml';

?>
