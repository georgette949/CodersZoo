<?php

include 'ClassZoo.php';

function actualizarAnimal ($status){

    $status = "
    UPDATE coderszoofood SET status = 'Alimentado'
    -> WHERE status = 'No alimentado'";

}

?>