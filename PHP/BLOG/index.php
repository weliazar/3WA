<?php
session_start();
var_dump($_SESSION);
include 'application.php';/*Evite de retaper les infos PDO de connexion qui se trouve dans application.php*/

$query = $pdo->prepare(
	    'SELECT
	        post.Id, Title, Content, FirstName, LastName,CreationDate
	     FROM
            Author
        INNER JOIN
            post
        ON post.AuthorId = Author.Id'
    /*données que je veux recuperer - 1 num dans post, 2 tittle dans post, 3 content dans post , 4-5 nom et prenom dans author - Inner join associe le tab Author et post grace à "L'ID" (en commun)
    */
);

$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);
/*stock l'info dans la variable posts :

'Id' => string '1' (length=1)
'Title' => string 'test 1' (length=4)
'Content'=> string 'Je suis le test 1'(length=17)
'FirstName' => string 'Denis' (length=5)
'LastName' => string 'Brogniart' (length=9)
*/




$template = 'index';/*lien pour affichache sur le layout.phtml*/

include 'layout.phtml';

?>
