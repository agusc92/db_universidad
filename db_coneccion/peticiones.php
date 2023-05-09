<?php
require_once 'db_conect.php';
    
function selecAll(){
    $coneccion = conectar();
    $peticion = $coneccion -> prepare("SELECT nombre AS materia,profesor FROM materias");
    $peticion -> execute();
    $materias = $peticion -> fetchAll(PDO::FETCH_ASSOC);
    return $materias;
}

function selecJoin(){
    $coneccion = conectar();
    $peticion = $coneccion -> prepare("SELECT materias.nombre AS materia, carreras.nombre AS carrera,materias.profesor AS profesor FROM carreras JOIN materias ON materias.carrera_id = carreras.id");
    $peticion ->execute();
    $result = $peticion -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
}