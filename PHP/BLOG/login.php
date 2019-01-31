<?php
session_start();/*A METTRE DANS LES PAGES OU JE VEUX MAINTENIR LA CONNECTION (SAUVEGARDE)*/
include 'application_hash.php';/*PAGE QUI SERT A CRYPTER LES MDP */

$template = 'login';/*lien pour affichache sur le layout.phtml*/

include 'application.php';

  $error = false;

if (empty($_POST)==false) {
  	var_dump($_POST);

    $query = $pdo->prepare
  	(
  	    'SELECT * FROM Users WHERE mail=?'
  	);

  	$query->execute(  [ $_POST['mail'] ] );

    $user = $query->fetch(PDO::FETCH_ASSOC);

    var_dump($user);


    	if ($user == false) {
            $error = true;
    		$message = "Votre adresse mail n'existe pas...";}/*Si le mail est pas bon affiche */

/*CRYPTAGE MDP*/
  	else if ( verifyPassword($_POST['password'], $user['password']) == true ) {

        $_SESSION['mail'] = $user['mail'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['firstName'] = $user['prenom'];
        $_SESSION['lastName'] = $user['nom'];
        $_SESSION['role'] = $user['role'];

        var_dump($_SESSION);
        var_dump('Vous etes connecté');
/*$_SESSION = SUPER GLOBALE QUI FAIT LE LIEN AVEC SESSION START */

/*si le MDP est correct afficher... + recuperer les autre valeurs (nom, role; MDP...) */

    }

    else {
        	$error = true;
    		$message = "Votre mot de passe est incorrect...";
/*Si non, si aucune des conditions n'est pas correct afficher ...  */
        }

}


    include 'layout.phtml';
  ?>
