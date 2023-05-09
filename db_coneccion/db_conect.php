<?php

function conectar(){
    $host = 'localhost';
    $dbname = 'db_universidad';
    $username = 'root';
    $password = '';
    try{
        $conectar= new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
        
    return $conectar;
    
    }catch(PDOExeption $e){
        echo $e;
    }

}