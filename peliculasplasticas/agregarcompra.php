
<?php
include_once 'conexion.php';

//AGREGAR
if ($_POST) {
    $max = $_POST["max"];
    $id_cliente = $_POST["id_cliente"];
    $id_fab = $_POST["id_fab"];
    $cantidad = $_POST["cantidad"];
    $total = $_POST["total"];


    echo $cantidad, "-";
    echo $total, "-";
    if ($cantidad <= $max) {
        $sql_agregar = 'INSERT INTO compra (id_cliente, id_fab, Cantidad, Precio)  VALUES (?,?,?,?)';
        $sentencia_agregar = $pdo->prepare($sql_agregar);
        $sentencia_agregar->execute(array($id_cliente, $id_fab, $cantidad, $total));

        $existente = $max - $cantidad;
        $sql_editar = 'UPDATE fabricacion SET cantidad=? WHERE id_fab=?';
        $sentencia_editar = $pdo->prepare($sql_editar);
        $sentencia_editar->execute(array($existente, $id_fab));

        echo "<script>
        alert('COMPRA EXITOSA!!!')
    </script>";
        //cerramos conexión base de datos y sentencia
        $sentencia_editar = null;
        $sentencia_agregar = null;
        $pdo = null;

        echo '    <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=VerProducto.php"> ';
    } else {
        echo "<script>
        alert('La cantidad requerida supera la cantidad disponible')
    </script>";
        echo '
    <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=VerProducto.php"> ';
    }
}
?>    



