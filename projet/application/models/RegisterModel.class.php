<?php

class RegisterModel {


  private function hashPassword($password)
    {
        $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);
        return crypt($password, $salt);
    }



  public function addUser($post)
	{
var_dump($post);
      $dataUser = new Database();

      $hashPassword = $this->hashPassword($post['password']);

      $dataUser->executeSql('INSERT INTO `User`( `Nom`, `Prenom`, `Email`, `Password`, `Role`)

      VALUES(?,?,?,?, "user")',
        [
          $post['nom'],
          $post['prenom'],
          $post['email'],
          $hashPassword,

        ]
      );

  }



}


?>
