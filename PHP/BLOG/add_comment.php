<?php

include 'application.php';
/*Evite de retaper les infos PDO de connexion qui se trouve dans application.php*/

$query = $pdo->prepare(
	' INSERT INTO
            comment
            (Pseudo, Content, PostId, CreationDate)
        VALUES
            (?, ?, ?, NOW())'
    /*insert un commentaire au post */
	);

$query->execute( [ $_POST['nickName'], $_POST['contents'], $_POST['postId'] ] );

header('Location: show_post.php?id='.$_POST['postId']);
exit();


?>