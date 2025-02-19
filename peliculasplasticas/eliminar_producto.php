<?php
include_once 'conexion.php';
$id = $_GET['id_pro'];

$sql_eli='DELETE FROM producto WHERE id_prod=?';
$sentencia_eli = $pdo ->prepare($sql_eli);
$sentencia_eli->execute(array($id));

$pdo=null;
$sentencia_eli=null;

header('location:producto.php');