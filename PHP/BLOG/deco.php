
<?php
session_start();/*A METTRE DANS LES PAGES OU JE VEUX MAINTENIR LA CONNECTION (SAUVEGARDE)*/
session_destroy();
/* Deconnection */

header('Location: index.php');
exit();

?>
