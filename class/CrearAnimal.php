<?php
require "ClassZoo.php";

class CrearAnimal extends ClassZoo
{
    private $host = "localhost:127.0.0.1";
    private $user = "root@localhost";
    private $dbname = "coderszoo";
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->dbname);
    }

    // public function insert($nombre, $status)
    // {
    //     $stmt = $this->conn->prepare("INSERT INTO tabla (Nombre, Status) VALUES (?, ?)");
    //     $stmt->bind_param("sii", $nombre, $status);
    //     $stmt->execute();
    //     $stmt->close();
    // }
}


// Insertar los datos

$conexion = mysqli_connect("localhost", "root", "", "db_coderszoofood");
	$sql = "INSERT INTO `coderszoofood` (`Nombre`, `Status`) VALUES
		('Unicornio', 'Alimentado'),
        ('Minotauro', 'No Alimentado'),
        ('Phoenix', 'No Alimentado'),
        ('Dragón', 'Alimentado'),
		('Hipogrifo', 'Alimentado');";
	$resultado = mysqli_query($conexion, $sql);



// $nombres = [
//     ["Nombre" => "Unicornio", "Status" => "Alimentado"],
//     ["Nombre" => "Hipogrifo", "Status" => "No alimentado"],
//     ["Nombre" => "Minotauro", "Status" => "No alimentado"],
//     ["Nombre" => "Phoenix", "Status" => "Alimentado"],
//     ["Nombre" => "Dragón", "Status" => "Alimentado"]
// ];
// $db = new CrearAnimal();
// foreach($nombres as $nombre){
//     $db->insert($nombre['Nombre'], $status['Status']);
// }

try {
    $conexion = new PDO("mysql:localhost:127.0.0.1", "root@localhost");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch(PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?>