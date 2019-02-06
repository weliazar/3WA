<?php

class BookingController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {




    }

    public function httpPostMethod(Http $http, array $formFields)
    {
      var_dump($_POST);

     $post =$_POST;

     $booking = new BookingModel();
     $booking->booking($post, $_SESSION['user']['userId']);

     $http->redirectTo('/');

    }

}

?>
