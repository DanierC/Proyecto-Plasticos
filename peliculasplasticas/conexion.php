<?php
    //conexion a la base de datos por PDO
    //definir las variables de conexion

    $link = 'mysql:host=localhost;dbname=peliculas';
    $usuario = 'root';
    $pass = '';

    try{
        $pdo = new PDO($link,$usuario,$pass);
        //probar la conexion
        //echo 'Conectado <br>';
    }catch(PDOException $e){
        print "¡Error!". $e->getMessage(). "<br>";
        die();
    }
