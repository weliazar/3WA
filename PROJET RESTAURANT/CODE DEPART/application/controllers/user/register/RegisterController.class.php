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
      $models = $registerModel->addUser($_POST);


      return [
        'models' => $models
      ];
    }
}

?>
