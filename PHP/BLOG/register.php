<?php
session_start();/*A METTRE DANS LES PAGES OU JE VEUX MAINTENIR LA CONNECTION (SAUVEGARDE)*/
include 'application.php';
include 'application_hash.php';/*PAGE QUI SERT A CRYPTER LES MDP */


if(empty($_POST) == false) {

    var_dump($_POST);

/*CRYPTAGE MDP*/
$hashPassword = hashPassword($_POST['password']);
        	$query = $pdo->prepare
	(
	    'INSERT INTO Users(mail, password, nom, prenom, pseudo, role) VALUES (?, ?, ?, ?, ?, "user")'

      /*USER EN DURE valeur PAR DEFAUT*/
	);

	$query->execute( [ $_POST['mail'], $hashPassword, $_POST['nom'],/*CRYPTAGE MDP*/
  $_POST['prenom'], $_POST['pseudo'] ] );

  header('Location: index.php');
  	exit();


}


    $template = 'register';/*lien pour affichache sur le layout.phtml*/

    include 'layout.phtml';
 ?>
