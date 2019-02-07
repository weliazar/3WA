<?php
class OrderModel {
  public function orderUser($userId, $orders) {


  $database = new Database();

          $orderId = $database->executeSql
          (
              'INSERT INTO `Orders`
  			(
  				User_Id,
  				CreationTimestamp,
  				TaxeRate,
                  Status
  			) VALUES (?, NOW(), 20.0, "not payed")',
              [ $userId ]
          );


  		$sql = 'INSERT INTO OderLine
          (
              Order_Id,
              Meal_Id,
              QuantityOrdered,
              PriceEach
          ) VALUES (?, ?, ?, ?)';


          $totalAmount = 0;

          foreach($orders as $order) {

          	$totalAmount += intval($order->quantity) * floatval($order->safeSalePrice);

          	 $database->executeSql
               (
              	$sql,
              	[
                  	$orderId,
                      $order->mealId,
                      $order->quantity,
                      $order->safeSalePrice
                  ]
              );

          }

          $sql = 'UPDATE `Orders`
  				SET CompleteTimestamp = NOW(),
  					TotalAmount       = ?,
  					TaxAmount         = ?
  				WHERE Id = ?';

          $taxAmount = $totalAmount * 0.2;


  		$database->executeSql
          (
              $sql,
              [
                  $totalAmount,
                  $taxAmount,
                  $orderId
              ]
          );

           return $orderId;
      }

      public function findOrder($orderId) {
            $database = new Database();

            // Insertion de la commande dans la base de donées.
            $order = $database->queryOne
            (
                'SELECT * FROM `Order` WHERE Id= ?',
                [ $orderId ]
            );

            return $order;
        }

        public function updateStatus($orderId) {
            $database = new Database();

            // Insertion de la commande dans la base de donées.
            $order = $database->queryOne
            (
                'UPDATE `Order` SET Status = "payed" WHERE Id =?',
                [ $orderId ]
            );

        }



}


?>
