<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index1.php");
} elseif ($_SESSION['rol'] == 1) {
  header("Location:admin.php");
}
include_once 'conexion.php';

//LEER
$sql_leer = 'SELECT * FROM producto';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();

//var_dump($resultado);

//AGREGAR


if ($_GET) {
  $id = $_GET['id'];
  //$sql_unico = "SELECT `fabricacion`.`id_fab`,`producto`.`nombre`,`fabricacion`.`cantidad`,`fabricacion`.`fecha` FROM  `producto`, `fabricacion` WHERE id_prod=?";

  $sql_unico = 'SELECT * FROM fabricacion WHERE id_fab=?';
  $gsent_unico = $pdo->prepare($sql_unico);
  $gsent_unico->execute(array($id));
  $resultado_unico = $gsent_unico->fetch();

  //var_dump($resultado_unico);

  $id2 = $resultado_unico['id_prod'];

  $sql_unico2 = 'SELECT * FROM producto WHERE id_prod=?';
  $gsent_unico2 = $pdo->prepare($sql_unico2);
  $gsent_unico2->execute(array($id2));
  $resultado_unico2 = $gsent_unico2->fetch();

  //var_dump($resultado_unico);
  $gsent_unico2 = null;
  $gsent_unico = null;
  $pdo = null;
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

  <title>CLIENTES</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div class="nav-collapse">

    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">CLIENTES</div>
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
          <a class="nav-link collapsed" href="admin.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Administrar</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="VerProducto.php">Ver Productos</a>
              <a class="collapse-item" href="CarritoDeCompras.php">Ver Compras</a>
            </div>
          </div>
        </li>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Cambio de contraseña</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="cambiocontraseña.php">Cambio Contraseña</a>
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
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
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
              <ul class="nav pull-right">
                <li class="nav-item dropdown no-arrow mx-1"><a href="">Bienvenido <strong><?php echo $_SESSION['user']; ?> </strong> </a></li>
                <i class="fas fa-user"></i>
                <li class="nav-item dropdown no-arrow mx-1"><a href="desconectar.php"> Cerrar Cesión </a></li>
                <i class="fas fa-sign-out-alt"></i>
              </ul>
            </ul>
          </nav>
          <div class="container-fluid">
            <div class="row">

              <?php if (!$_GET) : ?>
                <?php

                  $conexion = new PDO("mysql: host=127.0.0.1; dbname=peliculas; charset=utf8", "root", "");
                  $id = $_SESSION['id'];
                  $peticion2 = "SELECT * FROM  compra where id_cliente = $id";
                  $resultados2 = $conexion->query($peticion2);

                  if ($resultados2 = $conexion->query($peticion2)) {



                    $salida = '';

                    //$fila2=fetch_array($resultados2);
                    while ($fila2 = $resultados2->fetch(PDO::FETCH_ASSOC)) {

                      $id = $fila2["id_fab"];
                      $precio = $fila2["Precio"];
                      $cantidad = $fila2["Cantidad"];

                      echo "

                      <div class='col-xl-4 col-md-6 mb-4'>
                      <div class='card border-left-primary shadow h-100 py-2'>
                      <div class='card-body'>
                      <div class='row no-gutters align-items-center'>
                      <div class='col mr-2'>
                        <div class='text-xs font-weight-bold text-primary text-uppercase mb-1'>Id de Fabricación: $id</div>
                        <div class='h5 mb-0 font-weight-bold text-gray-800'>Cantidad Comprada: $cantidad</div>
                        <div class='h5 mb-0 font-weight-bold text-gray-800'>Precio Total: $$precio</div>
                      </div>
                      <div class='col-auto'>
                      
                      <i class='fas fa-clipboard-list fa-2x text-gray-300'> </i>
                     
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      ";
                    }
                  }
                  ?>
              <?php endif ?>



            </div>
          </div>
        </div>
      </div>
    </div><!-- /wrapper -->

  </div>
  <!-- Le javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/general.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


</body>

</html>