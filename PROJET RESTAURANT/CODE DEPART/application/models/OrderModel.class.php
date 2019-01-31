<?php
class OrderModel {
  public function orderUser($post) {
var_dump($post);
    $dataMeal = new Database();
    $meal= $dataMeal->query('SELECT *FROM Meal');

    return $meal;


  }




?>
