<?php

class ChargeController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
/*si provient du get redirection dans  l'order*/
      if(array_key_exists('email', $_SESSION) == false) {

    		$http->redirectTo('/order');
    	}



    }

    public function httpPostMethod(Http $http, array $formFields)
    {
      orderId= $_GET['orderId'];

		  $orderModel = new OrderModel();

          $order = $orderModel->findOrder($orderId);

          $totalTTC = floatval($order['TotalAmount']) + floatval($order['TaxAmount']);

          	try {


                require_once('vendor/autoload.php');


                \Stripe\Stripe::setApiKey('sk_test_WvJOfwZp9WEwNygwuHXgiwLX');

                //$_POST['first_name'];

                $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);


                $email = $_SESSION['user']['email'];
                $token = $_POST['stripeToken'];

                // create customer

                $customer = \Stripe\Customer::create(array(
                    "email" => $email,
                    "source" => $token
                ));

               $charge = \Stripe\Charge::create(array(
                "amount" => $totalTTC*100,
                "currency" => "eur",
                "description"=>"Commande num : ".$order['Id'],
                "customer" => $customer->id
               ));

                $orderModel->updateStatus($orderId);

                $http->redirectTo('/success?tid='.$charge->id.'&product='.$charge->decription);

           } catch (Exception $error) {

           		var_dump('paiement échoué');

           }


    }


}


?>
