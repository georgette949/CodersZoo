<?php

require "ClassZoo.php";

class Delete extends ClassZoo {
// Atributos
   public  $servername = "localhost";
   public  $username = "root";
   public $password = "";
   public  $dbname = "coderszoo";
  
// atri-metodo
   public $enlace = mysqli_connect($servername, $username, $password, $dbname);


// metodo
   public function checkConnection(){
    if (mysqli_connect_errno()) {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
    }
}

    //metodo
    public function delete($nombre) {
         $mysqli = new mysqli();
         $consulta = "DELETE FROM coderszoofood WHERE Nombre = $nombre ";
         $sentencia = $mysqli->prepare($consulta);
        echo "$nombre ha sido eliminado";
    }
    

  
}




?>