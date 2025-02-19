<?php
	$idmateria=$_POST['materia'];
	$idpro=$_POST['pro'];
	$nommate= $_POST['nomp'];
    $canti=$_POST['can'];
    $descrip=$_POST["des"];
	

	require("connect_db.php");
  
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $checkemail=mysqli_query($mysqli,"SELECT * FROM  materiaprima WHERE id_materia_prima='$idmateria'");
        $check_mail=mysqli_num_rows($checkemail);
            if($idmateria){
                if($check_mail>0){
                    echo ' <script language="javascript">alert("Atencion, ya existe el Materia Prima designado para un usuario, verifique sus datos");</script> ';
                }else{
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO materiaprima VALUES('$idmateria','$idpro','$nommate','$canti','$descrip')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Materia Prima registrado con éxito");</script> ';
				
			}
			
		}
    
	
?>