<?php
require "ClassZoo.php";

class ClassLeerAnimal extends ClassZoo{
    public function leerAnimal()
    {
        // Variables
        $hostDB = '127.0.0.1';
        $nombreDB = 'coderszoo';
        $usuarioDB = 'root';
        $contrasenyaDB = '';
        // Conecta con base de datos
        $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
        $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
        // Prepara SELECT
        $miConsulta = $miPDO->prepare("SELECT * FROM `coderszoofood` WHERE `Nombre` LIKE 'Mono' AND `Status` = 'No Alimentado';");
        // Ejecuta consulta
        $miConsulta->execute();
        //print_r($miConsulta);
        ?>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Status</th>
            </tr>
            <?php foreach ($miConsulta as $clave => $valor): ?> 
            <tr>
                <td><?= $valor['id']; ?></td>
                <td><?= $valor['Nombre']; ?></td>
                <td><?= $valor['Status']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php
    }
}

$classLeerAnimal = new ClassLeerAnimal();
$classLeerAnimal->leerAnimal();


?>