<!----------------------traducteur.php------------------------------->

<?php

$result = null;

$dictionary =
[
        'cat'    => 'chat',
        'dog'    => 'chien',
        'monkey' => 'singe',
        'sea'    => 'mer',
        'sun'    => 'soleil'
];

function translate($word, $direction, $dictionnary)
{
	switch($direction)
    {
        case 'toFrench':
        	if(array_key_exists($word, $dictionary) == true)
        	{
            	 $translatedWord = $dictionary[$word];
                 
                 $message = "Le mot ".$word." se traduit par ".$translatedWord.".";
                 
            } else {
            	$message = "Je ne connais pas le mot ".$word.".";
            }
        break;
        
        case 'toEnglish':
        	if(in_array($word, $dictionary) == true)
        	{
            	$translatedWord = array_search($word, $dictionary);
                $message = "Le mot ".$word." se traduit par ".$translatedWord.".";

            } else {
            	 $message = "Je ne connais pas le mot ".$word.".";
            }            
            
        break;
        
        default:
        	$message = "Je ne sais traduire qu'en français et en anglais !";
        break;
      }
      
      return $message

}

if(array_key_exists('word', $_POST) == true) // enregistre les mots indiquées dans le form
{
    //var_dump($_POST);
    $word = strtolower($_POST['word']);//tout en minuscule
    $direction = $_POST['direction'];
     $result = translate($word, $direction, $dictionnary);
}

include 'traducteur.phtml';


?>


<!----------------------traducteur.phtml------------------------------->


<
!DOCTYPE html >
    <
    html lang = "fr" >
    <
    head >
    <
    meta charset = "utf-8" >
    <
    title > PHP < /title> <
    link rel = "stylesheet"
href = "http://fonts.googleapis.com/css?family=Open+Sans" >
    <
    link rel = "stylesheet"
href = "05-exercice-traducteur.css" >
    <
    /head> <
    body >
    <
    header >
    <
    h1 > Traducteur Anglais - Français < /h1> <
    /header>

    <
    main >

    <
    form action = "traducteur.php"
method = "POST" >
    <
    ul >
    <
    li >
    <
    label
for = "word" > Mot: < /label> <
    input type = "text"
id = "word"
name = "word" >
    <
    /li> <
    li >
    <
    label
for = "direction" > Sens de traduction: < /label> <
    select id = "direction"
name = "direction" > //recupere valeur(donnee)
    <
    option value = "toEnglish" > Français vers Anglais < /option> <
    option value = "toFrench" > Anglais vers Français < /option> <
    /select> <
    /li> <
    li >
    <
    input type = "submit"
value = "Traduire" >
    <
    /li> <
    /ul> <
    /form>
<?php if($result != null) { ?>

<
p > <?= $result ?> < /p>

    <
    ?
} ? > // result = la valeur taper
<
/main> <
/body> <
/html>




version 2


    <
    !DOCTYPE html >
    <
    html lang = "fr" >
    <
    head >
    <
    meta charset = "utf-8" >
    <
    title > PHP < /title> <
    link rel = "stylesheet"
href = "http://fonts.googleapis.com/css?family=Open+Sans" >
    <
    link rel = "stylesheet"
href = "05-exercice-traducteur.css" >
    <
    /head> <
    body >
    <
    header >
    <
    h1 > Traducteur Anglais - Français < /h1> <
    /header>

    <
    main >
    <?php if($result != null) { ?>

    <
    p > <?= $result ?> < /p>

<?php } else {?>

<
form action = "traducteur.php"
method = "POST" >
    <
    ul >
    <
    li >
    <
    label
for = "word" > Mot: < /label> <
    input type = "text"
id = "word"
name = "word" >
    <
    /li> <
    li >
    <
    label
for = "direction" > Sens de traduction: < /label> <
    select id = "direction"
name = "direction" >
    <
    option value = "toEnglish" > Français vers Anglais < /option> <
    option value = "toFrench" > Anglais vers Français < /option> <
    /select> <
    /li> <
    li >
    <
    input type = "submit"
value = "Traduire" >
    <
    /li> <
    /ul> <
    /form>

<?php } ?>

<
/main> <
/body> <
/html>
