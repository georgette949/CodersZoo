<?php
abstract class ClassZoo {

// metodos
    abstract function crearAnimal ($nombre, $status);
    abstract function leerAnimal ($nombre, $status);
    abstract function actualizarAnimal ($status);
    abstract function borrarAnimal ($nombre, $status);
    
}



?>