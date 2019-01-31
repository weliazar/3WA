<?php

class LoginController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {





    }

    public function httpPostMethod(Http $http, array $formFields)
    {
      var_dump($_POST);
      $loginController = new LoginModel();
      $logs = $loginController->connectUser($_POST);


      return [
        'logs' => $logs
      ];
    }
}

?>
