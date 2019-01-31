<?php

/* Ajouter un element a la bdd sur phpMyadmin : INSERT INTO Author (FirstName, LastName) VALUE ('Denis', 'Brogniart');
*/


include 'application.php'; /*Evite de retaper les infos PDO de connexion qui se trouve dans application.php*/
session_start();/*A METTRE DANS LES PAGES OU JE VEUX MAINTENIR LA CONNECTION (SAUVEGARDE)*/


$query = $pdo->prepare(
	    'SELECT
	        *
	     FROM Author'
    /* données que je veux recuperer*/
);

$query->execute();
$authors = $query->fetchAll(PDO::FETCH_ASSOC);
/* stock l'info dans la variable authors */


$query = $pdo->prepare(
	    'SELECT
	        *
	     FROM Category'
    /* données que je veux recuperer*/
);

$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
/* stock l'info dans la variable categories */





if (empty($_POST) == false) {
//empty = tab vide
    $title = $_POST['title'];
    $content = $_POST['contents'];
    $author_id = $_POST['author'];
    $category_id = $_POST['category'];
    /*recupère valeurs indiquées dans le form */

    $query = $pdo->prepare
	(
	    '
            INSERT INTO
                post
                (Title, Content, AuthorId, CategoryId, CreationDate)
            VALUES
                (?, ?, ?, ?, NOW())
        '
/* Faire ATTENTION a l'orthographe (doit etre la  meme que la bdd ) - INSERT INTO Ajoute les valeurs du form + "?" pour proteger les donées + now = heure  */
	);

    $query->execute( [ $title, $content, $author_id, $category_id ] ); /*Mettre les infos ici pour securiser */


    /* arrete le code */

}





$template = 'addPost';

include 'layout.phtml';


?>
