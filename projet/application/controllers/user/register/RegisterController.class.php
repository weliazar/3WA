<?php

class RegisterController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {





    }

    public function httpPostMethod(Http $http, array $formFields)
    {
      var_dump($_POST);
      $registerModel = new RegisterModel();

      $registerModel->addUser($_POST);
    }
}

?>
