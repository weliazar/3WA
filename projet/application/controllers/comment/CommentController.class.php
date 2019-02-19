<?php

class CommentController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	  $commentModel = new CommentModel();
                $comment      = $commentModel->find($_GET['type']);

                
                $http->sendJsonResponse($comment);
    }

    public function httpPostMethod(Http $http, array $formFields)
    {/*
    	var_dump($_POST);
    
    $commentModel = new CommentModel();
      $coms = $commentModel->addComment($_POST);


      return [
        'coms' => $coms
      ];
        */
        
        
        
        
    }
}