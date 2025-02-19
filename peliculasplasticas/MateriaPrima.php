<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index1.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index.php");
}
?>
<!DOCTYPE html>

<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>ADMINISTRADOR</title>

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div class="nav-collapse">
	  <ul class="nav">
		  
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
	  <div class="sidebar-brand-icon rotate-n-15">
		<i class="fas fa-laugh-wink"></i>
	  </div>
	  <div class="sidebar-brand-text mx-3">ADMINISTRADOR</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
	  <a class="nav-link" href="admin.php">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Panel De control</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
	  Interface
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
	  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
		<i class="fas fa-fw fa-cog"></i>
		<span>Administrar</span>
	  </a>
	  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
		<a class="collapse-item" href="VerUsuarios.php">Ver Usuarios</a>
                <a class="collapse-item" href="Proveedores.php">Proveedores</a>
                <a class="collapse-item" href="MateriaPrima.php">Materia Prima</a>
                <a class="collapse-item" href="Producto.php">Producto</a>
                <a class="collapse-item" href="fabricacion.php">Fabricacion</a>
		</div>
	  </div>
	</li>
	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
     

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

         </ul>
	
		<ul class="nav pull-right">
				<li class="nav-item dropdown no-arrow mx-1"><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?> </strong> </a></li>
        <i class="fas fa-user"></i>
			  <li class="nav-item dropdown no-arrow mx-1"><a href="desconectar.php"> Cerrar Cesión </a></li>	
        <i class="fas fa-sign-out-alt"></i>		 
    </ul>
    
             
        </nav>
      
        <div class="container-fluid">
		<!-- formulario registro -->
<center><div class="tit">
<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		

		<table border="0">
<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt; color: #050505;"><b>Agregar</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt; color: #050505;"><b>Ingresa el id Materia Prima</b></label>
      <input type="text" name="materia" class="form-control" placeholder="Ingresa el id materia" />
    </div>
    <label style="font-size: 14pt; color: #050505;"><b>Ingresa el proveedor</b></label>
    <select class="form-control mt"  name="pro">
                      <option>Proveedor</option>
                      <?php
                      $conexion = new PDO("mysql: host=localhost; dbname=peliculas; charset=utf8", "root", "");
                      $consulta = "SELECT * FROM `proveedor` ";
                      $resultados = $conexion->query($consulta);
                      while (($fila = $resultados->fetch(PDO::FETCH_ASSOC))) {
                        echo "<option value=", $fila["id_proveedor"], ">", $fila["id_proveedor"], " - ",$fila["nombre_empresa"],  "</option>";
                      }
                      ?>
                    </select>
                    <div class="form-group mt-3">
      <label style="font-size: 14pt; color: #050505;"><b>Ingresa el nombre material</b></label>
    <select class="form-control" name="nomp">
      <option>Selecione un material</option>
      <option>Carton</option>
      <option>Plastico</option>

    </select>
</div>
     
    <div class="form-group">
      <label style="font-size: 14pt; color: #050505;"><b>Ingresa la cantidad</b></label>
      <input type="text" name="can" class="form-control" required placeholder="Ingresa cantidad a pedir" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #050505;"><b>Ingresa la descripcion</b></label>
      <input type="text" name="des" class="form-control" required placeholder="Ingresa Descripcion" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Agregar"/>
  

  </fieldset>
</form>
</div>
</div>
<?php
		if(isset($_POST['submit'])){
			require("agregarMateriaPrima.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

			


              <!-- Approach -->
              <div class="container">
                
                <div class="card-body">
				<h2> Administrador De Materia Prima</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla Materia Prima</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT `materiaprima`.`id_materia_prima`,`proveedor`.`nombre_empresa`,`materiaprima`.`nombre_m_p`,`materiaprima`.`cantidad_pedir`,`materiaprima`.`descripcion` FROM  `proveedor`, `materiaprima` where `proveedor`.`id_proveedor` = `materiaprima`.`id_proveedor`");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Id Proveedor</td>";
						echo "<td>Nombre Material</td>";
						echo "<td>Cantida A Pedir</td>";
						echo "<td>Descripcion</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";

				    	echo "<td><a href='actualizarMateriaPrima.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='MateriaPrima.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM materiaprima WHERE id_materia_prima=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='MateriaPrima.php'</script>";
					}

			?>
                
              


		


		


</div><!-- /container -->

<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

	
  </body>
</html>