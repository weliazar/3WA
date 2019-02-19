<?php
class CommentModel {
    
    
  public function addComment($post)
	{
      /*
var_dump($post);
      $query= new Database();

     

      $query->executeSql('INSERT INTO `Comment`( `Pseudo`, `Content`, `CreationDate`)

      VALUES(?,?,NOW())',
        [
          $post['pseudo'],
          $post['contents'],
          
        
        ]
      );
      
      */
  }
    
    
    	public function listAll() {
        $database = new Database();

        $sql = 'SELECT * FROM Comment';

        return $database->query($sql);
    }

    
        public function find($type)
    {
        $database = new Database();

        $sql = 'SELECT
                    *
                FROM Comment
                WHERE Type = ?';

        
        return $database->query($sql, [ $type ]);
    }
    
    


}


?>