<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "peliculas";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM producto WHERE id_prod NOT LIKE '' ORDER By id_prod LIMIT 0";

    if (isset($_POST['consulta1'])) {
    	$q = $conn->real_escape_string($_POST['consulta1']);
    	$query = "SELECT * FROM producto WHERE id_prod LIKE '%$q%' OR Nombre LIKE '%$q%' ";
    }

    $resultado = $conn->query($query);
	
       if ($resultado->num_rows>0) { 
    	$salida.="";

    	while ($fila = $resultado->fetch_assoc()) {
			$fabricar= round(($fila['requisito_1']+$fila['requisito_2'])/4);
			$req1=$fila['requisito_1']-$fila['requisito_1'];
			$req2=$fila['requisito_2']-$fila['requisito_2'];
			$salida.="<input type='text' class='form-control mt-3' name='cantidad' placeholder='Cantidad a fabricar' value='$fabricar' readonly='readonly'>
			<input type='hidden' class='form-control mt-3' name='req1'  value='$req1' >
			<input type='hidden' class='form-control mt-3' name='req2'  value='$req2' >
			";
			
    	}
    	$salida.="";
    }else{
    	$salida.="<input type='text' class='form-control mt-3' name='cantidad' placeholder='Cantidad a fabricar' readonly='readonly'>";
    }


    echo $salida;

    $conn->close();



?>