<?php

class MealModel {

  public function listAll() {

    $dataMeal = new Database();
    $meal= $dataMeal->query('SELECT *FROM Meal');

    return $meal;

  }


  public function mealElement($id) {

  $dataElement = new Database();
  $element= $dataElement->queryOne('SELECT * FROM Meal WHERE Id=?
  ', [$id]);

  return $element;

}


}



?>
