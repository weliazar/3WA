<?php

/* CORRECTION LEWIS 

$random = rand(min, max); // renvoi un entier aléatoire entre min et max

array_push($tab, $value); // push une valeur $value dans un tableau $tab
 
count($tab) // compte le nombre d'element dans un tableau comme .length en JS
 
implode(', ', $tab); // $tab = ['a', 'b', 'c' ]  // a, b, c

array_key_exists('name', $dico); // renvoie true si la clef existe ou sinon false 

in_array(23, $dico);// renvoie true si la value existe ou sinon false

array_search('1m85', $dico); // renvoie la clef

*/
/************VARIABLES***************/

$numbers = [];

/************FONCTIONS***************/

function aleagenreator($numbers)
{   
    do
    {
        $tirage = rand(1,49);
        if (in_array($tirage,$numbers) == false)
        {
            array_push($numbers,$tirage);
        }        
    }
    while(count($numbers)<= 5);
    return $numbers;
};


/************CODE GENERAL***************/

$numbers = aleagenreator($numbers);
$showTab = implode(',',$numbers);

include 'lottery.phtml';



?>