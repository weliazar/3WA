!---------------------- application/hash.php ------------------------------->

<?php

function hashPassword($password){

    $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);

    return crypt($password, $salt);
}

function verifyPassword($password, $hashedPassword){

		return crypt($password, $hashedPassword) == $hashedPassword;
}


?>



<!---------------------- register.php ------------------------------->

<?php

include 'application/hash.php';

if(empty($_POST) == false) {

	var_dump($_POST);

    $hashPassword = hashPassword($_POST['password']);

    include 'application/bdd_connection.php';

	$query = $pdo->prepare
	(
	    '
            INSERT INTO
                Users
                (Mail, Password, FirstName, LastName, Pseudo, Role)
            VALUES
                (?, ?, ?, ?, ?, "user")
        '

	);

	$query->execute( [ $_POST['email'], $hashPassword, $_POST['firstName'], $_POST['lastName'], $_POST['pseudo']  ] );

    header('Location: index.php');
	exit();


}


$template = 'register';
include 'layout.phtml';

?>

<!---------------------- register.phtml ------------------------------->

<!-- Page d'ajout d'un article -->
<h2><i class="fa fa-pencil"></i> Enregistrez vous </h2>

<!-- Formulaire de saisie d'un nouvel article -->
<form class="generic-form" action="register.php" method="post">
    <fieldset>
        <legend><i class="fa fa-sticky-note-o"></i> Nouvel utilisateur</legend>
        <ul>
            <li>
                <label for="lastName">Nom :</label>
                <input type="text" id="lastName" name="lastName">
            </li>
            <li>
                <label for="firstName">Prénom :</label>
                <input type="text" id="firstName" name="firstName">
            </li>
            <li>
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" id="firstName" name="email">
            </li>
            <li>
                <label for="password">Mot de Passe :</label>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <button class="button button-primary" type="submit">Bienvenue</button>
                <a class="button button-cancel" href="index.php">Annuler</a>
            </li>
        </ul>
    </fieldset>
</form>


<!---------------------- login.php ------------------------------->

<?php

session_start();
include 'application/hash.php';

$error = false;
$message = '';

if(empty($_POST) === false) {

	include 'application/bdd_connection.php';
	$query = $pdo->prepare
	(
	    'SELECT
	        *
	     FROM Users Where Mail = ?'
	);

	$query->execute( [ $_POST['email'] ]);
	$user = $query->fetch(PDO::FETCH_ASSOC);


	if ($user == false) {

        $error = true;
		$message = "Votre adresse mail n'existe pas...";

    } else if ( verifyPassword($_POST['password'], $user['Password']) == true ) {

    	$_SESSION['email'] = $user['Mail'];
		$_SESSION['firstName'] = $user['FirstName'];
		$_SESSION['lastName'] = $user['LastName'];
		$_SESSION['pseudo'] = $user['Pseudo'];
		$_SESSION['role'] = $user['Role'];

		header('Location: index.php');
		exit();


    } else {

    	$error = true;
		$message = "Votre mot de passe est incorrect...";

    }



}



$template = 'login';
include 'layout.phtml';

?>




<!---------------------- login.phtml ------------------------------->


<!-- Page d'ajout d'un article -->
<h2><i class="fa fa-pencil"></i> Connectez vous </h2>

<?php if ($error == true ) {?>
<div class="popup">
    <p> <?= $message ?></p>
</div>
<?php } ?>



<!-- Formulaire de saisie d'un nouvel article -->
<form class="generic-form" action="login.php" method="post">
    <fieldset>
        <legend><i class="fa fa-sticky-note-o"></i> Nouvel utilisateur</legend>
        <ul>
            <li>
                <label for="email">Email :</label>
                <input type="text" id="firstName" name="email">
            </li>
            <li>
                <label for="password">Mot de Passe :</label>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <button class="button button-primary" type="submit">Connexion</button>
                <a class="button button-cancel" href="index.php">Annuler</a>
            </li>
        </ul>
    </fieldset>
</form>


<!---------------------- layout.phtml ------------------------------->



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Encore un Blog ?! #nonMaisAllo</title>

    <!-- Feuilles de style externes -->
    <link rel="stylesheet" href="css/normalize-3.0.3.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">

    <!-- Feuilles de style de l'application -->
    <link rel="stylesheet" href="css/blog-main.css">
    <link rel="stylesheet" href="css/blog-theme.css">
    <link rel="stylesheet" href="css/ui-button.css">
    <link rel="stylesheet" href="css/ui-form.css">
</head>
<body>
    <!-- En-tête commune de l'application -->
    <header class="blog-header">
        <h1><a href="index.php"><i class="fa fa-microphone"></i> Encore un Blog ?! #nonMaisAllo</a></h1>
        <nav>
        <?php if (array_key_exists('role', $_SESSION) == false ): ?>
            <a href="login.php"><i class="fa fa-cogs"></i> Login </a>
            <a href="register.php"><i class="fa fa-cogs"></i> Register </a>
       <?php else ?>
            <a href="logout.php"><i class="fa fa-cogs"></i> Logout</a>
            <?php if ($_SESSION['role'] == 'admin') { ?>
            	<a href="admin.php"><i class="fa fa-cogs"></i> Administration</a>
            <?php } ?>
       <?php endif ?>

        </nav>
    </header>

    <main>
        <!-- Chargement du template PHTML spécifié par le programme PHP -->
        <?php include $template.'.phtml' ?>
    </main>

    <!-- Pied de page commun de l'application -->
    <footer class="blog-footer">
        <small>Le blog des élèves de la 3W Academy</small>
    </footer>
</body>
</html>

<!---------------------- admin.php ------------------------------->
<?php
session_start();

if(array_key_exists('role', $_SESSION) == false ) {


    header('Location: login.php');
    exit();

} else if ( $_SESSION['role'] != 'admin') {

    header('Location: index.php');
    exit();

}


include 'application/bdd_connection.php';


$query = $pdo->prepare(
	'SELECT
            Post.Id,
            Title,
            Contents,
            CreationDate,
            FirstName,
            LastName,
            Category.Name AS Category_Name
        FROM
            Post
        INNER JOIN
            Author
        ON
            Post.Author_Id = Author.Id
        INNER JOIN
            Category
        ON
            Post.Category_Id = Category.Id
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

$template = 'admin';
include 'layout.phtml';

?>

<!---------------------- admin.phtml ------------------------------->


<h2><i class="fa fa-cogs"></i> Panneau d'administration</h2>

<nav style="margin-bottom: 20px; margin-top: 30px; ">
    <a href="add_post.php">Rédiger un nouvel article</a>
</nav>

<table>
    <caption>Liste des articles</caption>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Article</th>
            <th>Auteur</th>
            <th>Catégorie</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td><a href="show_post.php?id=<?= intval($post['Id']) ?>" target="_blank"><?= htmlspecialchars($post['Title']) ?></a></td>
                <td><?= substr(htmlspecialchars($post['Contents']), 0, 200) ?></td>
                <td><?= htmlspecialchars($post['FirstName']) ?> <?= htmlspecialchars($post['LastName']) ?></td>
                <td><?= htmlspecialchars($post['Category_Name']) ?></td>
                <td>
                    <a class="edit" href="edit_post.php?id=<?= intval($post['Id']) ?>"><i class="fa fa-pencil"></i></a>
                    <a class="remove" href="delete_post.php?id=<?= intval($post['Id']) ?>"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>


<hr/>
<nav style="margin-bottom: 5px; margin-top: 30px; ">
    <a>Rédiger une nouvelle catégorie</a>
    <form action="add_cat.php" method="post">
        <input type="text" name="catName">
        <input type="submit" value="créer">
    </form>
</nav>



<table>
    <caption>Liste des Categories</caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($categories as $category): ?>
            <tr>

                <td><?= htmlspecialchars($category['Id'])?></td>
                <td>
                    <form action="edit_cat.php?id=<?=$category['Id']?>" method="post">
                        <input type="text" value="<?= $category['Name'] ?>" name="catName">
                        <button type="submit"><i class="fa fa-pencil"></i></button>
                    </form>
                    <a class="remove" href="delete_cat.php?id=<?= intval($category['Id']) ?>"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<hr/>

<nav style="margin-bottom: 5px; margin-top: 30px; ">
    <a>Rédiger une nouvelle auteur</a>
    <form action="add_aut.php" method="post">
        <input type="text" name="firstName" placeholder="prénom">
        <input type="text" name="lastName" placeholder="nom">
        <input type="submit" value="créer">
    </form>
</nav>

<table>
    <caption>Liste des Auteurs</caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($authors as $author): ?>
            <tr>

                <td><?= htmlspecialchars($author['Id'])?></td>
                <td>
                    <form action="edit_aut.php?id=<?=$author['Id']?>" method="post">
                        <input type="text" value="<?= $author['FirstName'] ?>" name="firstName">
                        <input type="text" value="<?= $author['LastName'] ?>" name="lastName">
                        <button type="submit"><i class="fa fa-pencil"></i></button>
                    </form>
                    <a class="remove" href="delete_aut.php?id=<?= intval($author['Id']) ?>"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>


<hr/>

<nav style="margin-bottom: 20px; margin-top: 30px; ">
    <a href="register.php">Ajoutez un nouvel utilisateur</a>
</nav>

<table>
    <caption>Liste des Utilisateurs</caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['FirstName'])?></td>
                <td><?= htmlspecialchars($user['LastName']) ?></td>
                <td><?= htmlspecialchars($user['Mail'])?></td>
                <td>
                        <form action="update_user.php?id=<?= $user['Id'] ?>" method="post">
                            <select name="role">
                                <option <?php if($user['Role'] == 'user') {?> selected <?php }?> value="user" >User</option>
                                <option <?php if($user['Role'] == 'admin') {?> selected <?php }?> value="admin" >Admin</option>
                            </select>
                            <button type="submit">Envoyer</button>
                        </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>


<!---------------------- add_cat.php ------------------------------->

<?php

if (empty($_POST) == false) {

	//var_dump($_POST);
	include 'application/bdd_connection.php';

	$query = $pdo->prepare
	(
	    '
            INSERT INTO
                Category
                (Name)
            VALUES
                (?)
        '

	);

	$query->execute( [ $_POST['catName']  ] );

	header('Location: admin.php');
	exit();

}

?>


<!---------------------- edit_cat.php ------------------------------->

<?php


if(array_key_exists('id', $_GET) == false) {
		header('Location: admin.php');
		exit();
}

include 'application/bdd_connection.php';


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

?>

<!---------------------- delete_cat.php ------------------------------->

<?php


if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id'])){
            header('Location: index.php');
            exit();
}

include 'application/bdd_connection.php';

$query = $pdo->prepare(
	'DELETE FROM Category WHERE Id= ?'
	);

$query->execute( [ $_GET['id'] ] );



header('Location: admin.php');
exit();

?>


<!---------------------- add_aut.php ------------------------------->


<?php

if (empty($_POST) == false) {

	//var_dump($_POST);
	include 'application/bdd_connection.php';

	$query = $pdo->prepare
	(
	    '
            INSERT INTO
                Author
                (FirstName, LastName)
            VALUES
                (?, ?)
        '

	);

	$query->execute( [ $_POST['firstName'],  $_POST['lastName'],] );

	header('Location: admin.php');
	exit();

}

?>
<!---------------------- edit_aut.php ------------------------------->


<?php
	if(array_key_exists('id', $_GET) == false) {
		header('Location: admin.php');
		exit();
	}

	var_dump($_POST);

	include 'application/bdd_connection.php';


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


?>

<!---------------------- delete_aut.php ------------------------------->

<?php

session_start();

if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id'])){
     header('Location: index.php');
     exit();
}

include 'application/bdd_connection.php';

$query = $pdo->prepare(
	'DELETE FROM Author WHERE Id= ?'
	);

$query->execute( [ $_GET['id'] ] );



header('Location: admin.php');
exit();

?>

<!---------------------- update_user.php ------------------------------->

<?php

	if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id'])){
	            header('Location: index.php');
	            exit();
	}


	var_dump($_POST);

	include 'application/bdd_connection.php';


	$query = $pdo->prepare(
		'UPDATE
	                Users
	            SET
	                Role = ?
	            WHERE
	                Id = ?'
		);

	$query->execute( [ $_POST['role'],  $_GET['id'] ] );


	header('Location: admin.php');
   exit();


?>
