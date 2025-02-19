<?php


	$nit=$_POST['nit'];
	$nom=$_POST['nom'];
	$mate= $_POST['mate'];
    $email=$_POST['email'];
    $direccion=$_POST["dir"];
	

	require("connect_db.php");
  
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $checkemail=mysqli_query($mysqli,"SELECT * FROM proveedor WHERE id_proveedor='$nit'");
        $check_mail=mysqli_num_rows($checkemail);
            if($nit){
                if($check_mail>0){
                    echo ' <script language="javascript">alert("Atencion, ya existe el proveedor designado para un usuario, verifique sus datos");</script> ';
                }else{
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO proveedor VALUES('$nit','$nom','$mate','$email','$direccion')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Proveedor registrado con éxito");</script> ';
				
			}
			
		}
    
	
?>


