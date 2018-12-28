<?php 

//PARTIE UTILITIES

function saveTask(array $taskData) {
	$file = fopen('tasks.csv', 'a');
    fputcsv($file, $taskData);
    fclose($file); 
    
    // ouvre ou cree un new tab
}

function loadTasks()
{
	$file = fopen('tasks.csv', 'a+');
		
	$tasks = array(); // []
    
    while(true)
	{

		$taskData = fgetcsv($file);
        
		if($taskData == false)
		{
			break;
		}
		array_push($tasks, $taskData);
	}

    fclose($file);

	return $tasks;
}




// PARTIE ADD


if(empty($_POST) == false) {
var_dump($_POST);    
    
$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$priority = $_POST['priority'];
// Prend les valeurs ajoutées dans le formulaire
    
    
	addTask($title, $description, $date, $priority);
    // fonction crée qui va sauvegarder les valeurs entrées du formulaire  
}


function addTask($title, $description, $date, $priority)  // fonction qui sauvegarde les valeurs entrées du formulaire  
{
	
    $taskData =
    [
        $title,
        $description,
        $date,
        $priority
    ];
    // creation new tab avec l'ensemble des valeurs
    
    saveTask($taskData);
// stocke la valeur du tab 
}


function onload() {
    $tasks = []; // new tab
    
    $file = fopen('tasks.csv', 'a+');
    while(true) // ouvre le fichier 
    {
        $line = fgetcsv($file);
    //fait des tours de boucle
        if ($line == false) {
            break;
            // stop fin de tab
        }
        array_push($tasks, $line);
        // ajout du tab dans la boucle
    }
    fclose($file); // ferme le fichier une fois fini
    
    return $tasks; // renvoit la valeur pour le stockage
}


$tasks = onload();
var_dump($tasks);

$now = date_create();

/*
foreach ($tasks as $key => $value) {
    echo $key[1];
    echo $value[1];
}

*/

include 'todo.phtml'
//http://php.net/manual/fr/function.fopen.php
?>