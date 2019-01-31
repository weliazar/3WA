<?php

class HomeController
{
  /*PAR UN LIEN*/
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*EQUIVALENT IF empty
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
       $mealModel = new MealModel();
       $meals = $mealModel->listAll();


       return [
         'meals' => $meals
       ];

    }

/*PAR UN FORMULAIRE*/
    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*EQUIVALENT IF empty
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}
