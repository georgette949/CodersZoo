<?php

require "ClassZoo.php";

class Delete extends ClassZoo {
// Atributos
   public  $servername = "localhost/coderszoo";
   public  $dbname = "coderszoo";

// atri-metodo
   public $conn = new mysqli($servername, $dbname);

// metodo
   public function checkConnection(){
     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    }  
    
   //metodo
  public function delete($bdname, $nombre, $status){

    public function __construct($db_connection)
    {
        $this -> db = $db_connection;
    }
    }

    //metodo
    public function delete($nombre) {
        $query = "DELETE FROM coderszoofood WHERE Nombre = $nombre";
    } 

}




?>