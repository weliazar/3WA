<!------------index.php--------------->


<?php


/*
$random = rand(min, max); // renvoi un entier aléatoire entre min et max

 array_push($tab, $value); // push une valeur $value dans un tableau $tab
 
 count($tab) // compte le nombre d'element dans un tableau comme .length en JS
 
 implode(', ', $tab); // $tab = ['a', 'b', 'c' ]  // a, b, c*/
 
const NUMBER_COUNT = 6;
const MIN_BOUND = 1;
const MAX_BOUND = 49;

$lotteryDraw = [];

function getLotteryDraw()
{
	$draw = [];
    $random;
    
    while( count($draw) < NUMBER_COUNT ){
    	do {
        
    
    		$random = rand(MIN_BOUND, MAX_BOUND);
        
        } while (in_array($random, $draw) == true);
        
    	array_push($draw, $random);
    
    }
    
    
    sort($draw);
    
    return $draw;

}

$lotteryDraw = getLotteryDraw();


 
 
 
 include 'index.phtml'

?>

<!------------index.phtml--------------->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Loterie 3Wacademy</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="lottery.css">
</head>
<body>
    <header>
        <h1>Loterie 3WAcademy</h1>
    </header>

    <main>
        <p>Le résultat du tirage de la loterie 3WAcademy est : <em>><?= implode(', ', $lotteryDraw); ?></em></p>
    </main>
</body>
</html>