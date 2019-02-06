<?php

class PaymentController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
      if(array_key_exists('user', $_SESSION) == false) {
            $http->redirectTo('/user/login');
        }



    }

    public function httpPostMethod(Http $http, array $formFields)
    {

          	var_dump($_POST);
          	$orders = json_decode($_POST['order']);

              var_dump($orders);

              $mealModel = new MealModel();


            	foreach($orders as $order) {
              	$meal = $mealModel->mealElement($order->mealId);

              	$order->safeSalePrice = $meal['SalePrice'];
              }
              var_dump($orders);
              $orderModel = new OrderModel();

               $orderId    = $orderModel->orderUser
              (
                  $_SESSION['Id'],
                  $orders
              );

              /*paiement par carte*/



            //  $http->redirectTo('/success');
    }
}

?>
