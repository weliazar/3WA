<!----index.php ---->

<?php

include 'utilities.php';




include 'index.phtml';

?>

<!----index.phtml ---->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="css/todolist.css">
</head>
<body>
	<main>
        <h1>Gestionnaire de tâches :-)</h1>
        <div>
        <!--affichage todo-->
        
        </div>
        
        <section>
            <!-- Formulaire d'ajout de tâche -->
            <form class="standard-form label-left" action="add.php" method="POST">
                <fieldset>
                    <legend>Informations sur la tâche</legend>
                    <ul>
                        <li>
                            <label for="title">Titre :</label>
                            <input id="title" name="title" type="text">
                        </li>
                        <li>
                            <label for="description">Tâche :</label>
                            <textarea id="description" name="description" rows="5"></textarea>
                        </li>
                        <li>
                            <label for="day">Date de fin :</label>
                            <select id="day" name="day">
                                <?php for($day = 1; $day <= 31; $day++): ?>
                                    <option value="<?= $day ?>"><?= $day ?></option>
                                <?php endfor ?>
                            </select>
                            <span>/</span>
                            <select name="month">
                                <option value="1">Janvier</option>
                                <option value="2">Février</option>
                                <option value="3">Mars</option>
                                <option value="4">Avril</option>
                                <option value="5">Mai</option>
                                <option value="6">Juin</option>
                                <option value="7">Juillet</option>
                                <option value="8">Août</option>
                                <option value="9">Septembre</option>
                                <option value="10">Octobre</option>
                                <option value="11">Novembre</option>
                                <option value="12">Décembre</option>
                            </select>
                            <span>/</span>
                            <select name="year">
                                <?php for($year = date('Y'); $year < date('Y') + 5; $year++): ?>
                                    <option value="<?= $year ?>"><?= $year ?></option>
                                <?php endfor ?>
                            </select>
                        </li>
                        <li>
                            <label>Priorité :</label>
                            <input id="priority-low" name="priority" type="radio" value="priority-low">
                            <label for="priority-low">Basse</label>
                            <input id="priority-normal" name="priority" type="radio" value="priority-normal">
                            <label for="priority-normal">Normale</label>
                            <input id="priority-high" name="priority" type="radio" value="priority-high">
                            <label for="priority-high">Haute</label>
                        </li>
                        <li>
                            <input type="submit" value="Ajouter" title="Ajouter une nouvelle tâche">
                        </li>
                    </ul>
                </fieldset>
            </form>
        </section>
    </main>
</body>
</html>


<!----utilities.php ---->

<?php

function saveTask(array $taskData)
{
	$file = fopen('tasks.csv', 'a');
    
    fputcsv($file, $taskData);
    
    fclose($file);
    
}

?>


<!----add.php ---->

<?php

include 'utilities.php';

if(empty($_POST) == false) {


	//var_dump[$_POST];
    $description = $_POST['description'];
    $date        = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
    $priority    = $_POST['priority'];
    $title       = $_POST['title'];

    
	addTask($title, $description, $date, $priority);
    
    header('Location: index.php');
	exit();
}

function addTask($title, $description, $date, $priority) {
	
    $taskData =
    [
        $title,
        $description,
        $date,
        $priority
    ];
    
    saveTask($taskData);


}


?>
