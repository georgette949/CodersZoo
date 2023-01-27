<?php

// class Database
// {
//     private $host = "host";
//     private $user = "usuario";
//     private $password = "contraseña";
//     private $dbname = "nombre_bd";
//     private $conn;

//     public function __construct()
//     {
//         $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
//     }

//     public function insert($nombre, $edad, $pais)
//     {
//         $stmt = $this->conn->prepare("INSERT INTO tabla (nombre, edad, pais) VALUES (?, ?, ?)");
//         $stmt->bind_param("sii", $nombre, $edad, $pais);
//         $stmt->execute();
//         $stmt->close();
//     }
// }

// // Crear una instancia de la clase Database
// $db = new Database();

// // Insertar los datos


// $nombres = [
//     ["nombre" => "Unicornio", "status" => "Alimentado"],
//     ["nombre" => "Hipogrifo", "status" => "No alimentado"],
//     ["nombre" => "Minotauro", "status" => "No alimentado"],
//     ["nombre" => "Phoenix", "status" => "Alimentado"],
//     ["nombre" => "Dragón", "status" => "Alimentado"]
// ];
// $db = new Database();
// foreach($nombres as $nombre){
//     $db->insert($nombre['nombre'], $status['status']);
// }

// $conexion = mysqli_connect("localhost", "root", "", "db_coderszoofood");
// 	$sql = "INSERT INTO `coderszoofood` (`Nombre`, `Status`) VALUES
// 		('Gato', 'Alimentado'),
// 		('Perro', 'No Alimentado');";
// 	$resultado = mysqli_query($conexion, $sql);

//     try {
//         $conexion = new PDO("mysql:localhost:127.0.0.1", "usuario", "contraseña");
//         $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         echo "Conexión exitosa";
//     } catch(PDOException $e) {
//         echo "Conexión fallida: " . $e->getMessage();
//     }
?>
