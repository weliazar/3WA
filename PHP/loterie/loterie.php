<?php
/*
$chiffreAléatoire=[];

$nb_min = 1;
$nb_max = 49;
$nombre = mt_rand($nb_min,$nb_max);

// declarer un nb aleatoire

*/

$tirage = [];

function loto() {
    $tab = [];
    $random;
    
    for ($i =0; $i < 6; $i++) {
        
        do {
            $random = rand(1, 49);//nb aleatoire
        }while (in_array($random, $tab) == true);// si il y a un nombre similaire ça recommence, ca evite les doublons
        
        
        array_push($tab, $random);// ajoute toute la valeur de random dans le tableau 
    }
    
    return $tab;// sauvegarde la valeur de tab
    
}

$tirage = loto();// la valeur de loto qui est un tableau va dans la valeur tirage

var_dump($tirage);

include 'loterie.phtml';





?>


