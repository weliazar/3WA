<?php

class CustomerController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

        header('access-control-allow-origin: *');
        header('Content-Type: application/json');


        $API_KEY = "aze";

        $database = new Database();

        if(array_key_exists('id', $_GET) == true && $_GET['api_key'] == "aze") {

            $sql = 'SELECT * FROM customers WHERE customerNumber =?';

            $execute = [$_GET['id']];

            $customer = $database->queryOne($sql, $execute);

            //var_dump($customer);

            $http->sendJsonResponse($customer);

        } else if (array_key_exists('keyword', $_GET) == true && $_GET['api_key'] == "aze") {

            $sql = 'SELECT * FROM customers WHERE customerName LIKE "%"?"%"';


            $execute = [$_GET['keyword']];

            $customers = $database->query($sql, $execute);


            if ($customers != false) {

                $http->sendJsonResponse($customer);

            } else {

                echo 'Erreur 404 pas de customer avec ce key word';
            }

        }  else if ( $_GET['api_key'] != "aze") {

            echo 'error 401 va te faire foutre';

        }
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

    }
}

?>
