<?php
require_once 'db_conect.php';
    
function selecAll(){
    $coneccion = conectar();
    $peticion = $coneccion -> prepare("SELECT * FROM materias");
    $peticion -> execute();
    $materias = $peticion -> fetchAll(PDO::FETCH_ASSOC);
    return $materias;
}