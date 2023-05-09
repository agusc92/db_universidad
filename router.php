<?php

    require_once 'templates/estructura.php';
    require_once 'templates/tabla.php';
    require_once 'db_coneccion/peticiones.php';
    $action='';
    if(!empty($_GET['action'])){
        $action = explode('/',$_GET['action']);
    }else{
        $action = 'tabla';
    }

    mostrarHead();
    mostrarHeader();

    mostrarTabla(selecAll());
    mostrarFooter();