<?php

class AjoutController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	var_dump($_POST);
        var_dump($_FILES);
 $ajoutModel = new AjoutModel();
      $adds = $ajoutModel->addPost($_POST);


      return [
        'adds' => $adds
      ];
    }
}