<?php

class MealModel {

  public function listAll() {

    $dataMeal = new Database();
    $meal= $dataMeal->query('SELECT *FROM Meal');

    return $meal;

  }



}



?>
