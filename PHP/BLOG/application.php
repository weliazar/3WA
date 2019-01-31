<?php

	$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa');

	$pdo->exec('SET NAMES UTF8');

/*Contient la connexion au serveur evite de retaper ses infos sur differentes pages */

?> 