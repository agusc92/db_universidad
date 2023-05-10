<?php

    require_once 'templates/estructura.php';
    require_once 'templates/tabla.php';
    require_once 'db_coneccion/peticiones.php';
    $action=[];
    if(!empty($_GET['action'])){
        $action = explode('/',$_GET['action']);
    }else{
        array_push($action,'materias');
    }

    mostrarHead();
    mostrarHeader();
    
    switch($action[0]){
        case 'materias':
            mostrarTabla(selecAll());
            break;
        case 'materias-carreras':
            mostrarTabla(selecJoin());
            break;
            default:
            mostrarTabla(selecFiltro($action));
            
    }
    
    mostrarFooter();