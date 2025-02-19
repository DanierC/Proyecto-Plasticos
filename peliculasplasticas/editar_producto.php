<?php

// echo 'editar.php?id=1&color=success&descripcion=este es un color verde';
// echo '<br>';

$id_pro = $_GET['id_pro'];
$nom= $_GET['nom'];
$mat1 = $_GET['id_mat_1'];
$mat2= $_GET['id_mat_2'];
$req1= $_GET['req1'];
$req2= $_GET['req2'];


echo $dni;
echo '<br>';
echo $nombre;
echo '<br>';
echo $direccion;
echo '<br>';
echo $telefono;

include_once 'conexion.php';

$sql_editar = 'UPDATE producto SET Nombre=?,id_materia_prima_1=?,id_materia_prima_2=?,requisito_1=?,requisito_2=? WHERE id_prod=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($nom,$mat1,$mat2,$req1,$req2,$id_pro));

//cerramos conexión base de datos y sentencia
$pdo = null; 
$sentencia_editar = null; 

header('location:Producto.php');