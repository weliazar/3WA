<?php
class LoginModel {
  public function connectUser($post) {

  		$dataConnect = new Database();

  			$user = $dataConnect->queryOne('SELECT * FROM User WHERE Email =?', [ $post['email'] ]);

  			var_dump($user);

  			if( $user != false && $this->verifyPassword($post['password'], $user['Password']) == true ) {

  		$_SESSION['email'] = $user['Email'];
  		$_SESSION['firstName'] = $user['FirtsName'];
  		$_SESSION['lastName'] = $user['LastName'];
      $_SESSION['address'] = $user['Address'];
      $_SESSION['zipCode'] = $user['ZipCode'];
      $_SESSION['city'] = $user['City'];

      var_dump($_SESSION);

  			}
        else {
  				echo 'pas le bon mot de passe ou adresse mail';

  			}

  }

  private function verifyPassword($password, $hashedPassword) {
    return crypt($password, $hashedPassword) == $hashedPassword;
  }
}





?>
