<?php

class OfficeController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        header('access-control-allow-origin: *');
        header('Content-Type: application/json');

        $database = new Database();

    	if (empty($_GET) == true) {

            $sql = 'SELECT * FROM offices';


            $execute = [];

            $offices = $database->query($sql, $execute);


            $http->sendJsonResponse($offices);


        } else if (array_key_exists('country', $_GET) == true) {

            $sql = 'SELECT * FROM offices WHERE country = ?';

            $execute = [$_GET['country']];

            $office = $database->query($sql, $execute);

            $http->sendJsonResponse($office);


        } else if (array_key_exists('id', $_GET) == true) {

            $sql = 'SELECT * FROM offices WHERE officeCode=?';

            $execute = [$_GET['id']];

            $office = $database->queryOne($sql, $execute);

            $http->sendJsonResponse($office);
        }

    }

    public function httpPostMethod(Http $http, array $formFields)
    {


    }
}

?>
