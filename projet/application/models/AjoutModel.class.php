<?php
class AjoutModel {
    
    
  public function addPost($post)
	{
var_dump($post);
      $query= new Database();

     

      $query->executeSql('INSERT INTO `Contents`( `Categorie`, `Titre`, `Description`, `Image`)

      VALUES(?,?,?,?)',
        [
          $post['category'],
          $post['under-category'],
          $post['title'],
          $post['description'],
       /*   $post['fichier'],*/
    
        ]
      );

  }

}



?>