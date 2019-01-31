<?php
session_start();/*A METTRE DANS LES PAGES OU JE VEUX MAINTENIR LA CONNECTION (SAUVEGARDE)*/
include 'application.php';
$query = $pdo->prepare(
	'SELECT
            post.Id,
            Title,
            Content,
            CreationDate,
            FirstName,
            LastName,
            Category.Name AS Category_Name
        FROM
            post
        INNER JOIN
            Author
        ON
            post.AuthorId = Author.Id
        INNER JOIN
            Category
        ON
            post.CategoryId = Category.Id
        ORDER BY
            CreationDate DESC'
	);

$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $pdo->prepare(
    'SELECT*
        FROM
           Category'
);

$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $pdo->prepare(
    'SELECT*
        FROM
           Author'
);

$query->execute();
$authors = $query->fetchAll(PDO::FETCH_ASSOC);
//var_dump($authors);


$query = $pdo->prepare(
    'SELECT*
        FROM
           Users'
);

$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);




$template = 'admin';/*lien pour affichache sur le layout.phtml*/

include 'layout.phtml';



?>
