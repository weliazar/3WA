<?php 

include 'traducteur.phtml';

$dico = [ 
'dog' => 'chien',
'cat'=> 'chat',
'black' => 'noir',
'apple' => 'pomme'

];

if(array_key_exists('word', $_POST) == true)
{
    var_dump($_POST);
    
	$word =  strtolower($_POST['word']);
    
    $lang = $_POST['langue'];
    
    var_dump($dico[$word]);
};


if ()


?>




