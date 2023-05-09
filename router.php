<?php

    require_once 'templates/estructura.php';
    require_once 'templates/tabla.php';
    require_once 'db_coneccion/peticiones.php';


    mostrarHead();
    mostrarHeader();
    mostrarTabla(selecAll());
    mostrarFooter();