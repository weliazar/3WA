<?php

class MealController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

      $mealModel = new MealModel();
      $meals = $mealModel->mealElement($_GET['id']);


      echo json_encode($meals);
      exit();



    }

    public function httpPostMethod(Http $http, array $formFields)
    {

    }

}


?>
