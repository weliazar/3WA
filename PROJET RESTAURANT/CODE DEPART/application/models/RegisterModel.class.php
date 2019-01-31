<?php

class RegisterModel {


  private function hashPassword($password)
    {
        $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);
        return crypt($password, $salt);
    }



  public function addUser($post)
	{

      $dataUser = new Database();

      $hashPassword = $this->hashPassword($post['password']);

      $dataUser->executeSql('INSERT INTO `User`( `FirtsName`, `LastName`, `Email`, `Password`, `BirthDate`, `Address`, `City`, `ZipCode`,  `Phone`, `CreationTimestamp`)

      VALUES(?,?,?,?,?,?,?,?,?, NOW())',
        [
          $post['firstName'],
          $post['lastName'],
          $post['email'],
          $hashPassword,
          $post['birthYear'].'-'.$post['birthMonth'].'-'.$post['birthDay'],
          $post['address'],
          $post['city'],
          $post['zipCode'],
          $post['phone']
        ]
      );

  }



}


?>
