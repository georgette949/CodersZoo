<?php

require "ClassZoo.php";

class Delete extends ClassZoo {
      

  public function delete($nombre,$status){
     
    private $db;

    public function __construct($db_connection)
    {
        $this -> db = $db_connection;
    }
    
    public function delete($nombre) {
        $query = "DELETE FROM coderszoofood WHERE Nombre = $nombre";
    }

  }

}
//class DeleteElement {
  //  private $db;

   // public function __construct($db_connection) {
   //     $this->db = $db_connection;
   // }

   // public function delete($table, $id) {
   //     $query = "DELETE FROM $table WHERE id = :id";
   //     $stmt = $this->db->prepare($query);
   //     $stmt->bindParam(':id', $id);
   //     return $stmt->execute();
   // }



?>