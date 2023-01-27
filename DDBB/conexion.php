<?php
$servername="localhost:3306";
$username="root";
$password="";
$dbname="CodersZoo";
// conectando con la base de datos
try{
    $connect=@mysqli_connect($servername, $username, $password, $dbname);
    if(!$connect){throw new Exception("Error: no se conecta con la base de datos<br/>");
    }echo"estableciendo conexión<br/>";
}catch (Exception $e){
    echo $e;
die();
}
?>