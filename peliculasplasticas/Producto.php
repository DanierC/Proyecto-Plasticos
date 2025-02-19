<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index1.php");
} elseif ($_SESSION['rol'] == 2) {
  header("Location:index.php");
}
include_once 'conexion.php';

//LEER
$sql_leer = 'SELECT * FROM producto';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();
$resultado = $gsent->fetchAll();

//var_dump($resultado);

//AGREGAR
if ($_POST) {

  $nombre = $_POST["nom"];
  $mat1 = $_POST["id_mat_1"];
  $mat2 = $_POST["id_mat_2"];
  $req1 = $_POST["req1"];
  $req2 = $_POST["req2"];

  $sql_agregar = 'INSERT INTO producto (Nombre, id_materia_prima_1, id_materia_prima_2, requisito_1, requisito_2)  VALUES (?,?,?,?,?)';
  $sentencia_agregar = $pdo->prepare($sql_agregar);
  $sentencia_agregar->execute(array($nombre, $mat1, $mat2, $req1, $req2));

  $id1 = $_POST["id_mat_1"];
  $sql_unico1 = 'SELECT * FROM materiaprima WHERE id_materia_prima=?';
  $gsent_unico1 = $pdo->prepare($sql_unico1);
  $gsent_unico1->execute(array($id1));
  $resultado_unico1 = $gsent_unico1->fetch();
  //var_dump($resultado_unico);
  $gsent_unico1 = null;
  $calmat1= $resultado_unico1['cantidad_pedir']-$req1;

  $id1 = $_POST["id_mat_2"];
  $sql_unico1 = 'SELECT * FROM materiaprima WHERE id_materia_prima=?';
  $gsent_unico1 = $pdo->prepare($sql_unico1);
  $gsent_unico1->execute(array($id1));
  $resultado_unico1 = $gsent_unico1->fetch();
  //var_dump($resultado_unico);
  $gsent_unico1 = null;
  $calmat2= $resultado_unico1['cantidad_pedir']-$req2;

  $sql_editar = 'UPDATE materiaprima SET cantidad_pedir=? WHERE id_materia_prima=?';
  $sentencia_editar = $pdo->prepare($sql_editar);
  $sentencia_editar->execute(array($calmat1,$mat1));

  $sql_editar = 'UPDATE materiaprima SET cantidad_pedir=? WHERE id_materia_prima=?';
  $sentencia_editar = $pdo->prepare($sql_editar);
  $sentencia_editar->execute(array($calmat2,$mat2));

  echo "<script>
                      alert('REGISTRO EXITOSO!!!')
                    </script>";
  //cerramos conexión base de datos y sentencia
  $sentencia_editar = null; 
  $sentencia_agregar = null;
  $pdo = null;

  echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Producto.php"> ';
}

if ($_GET) {
  $id = $_GET['id_pro'];
  $sql_unico = 'SELECT * FROM producto WHERE id_prod=?';
  $gsent_unico = $pdo->prepare($sql_unico);
  $gsent_unico->execute(array($id));
  $resultado_unico = $gsent_unico->fetch();

  //var_dump($resultado_unico);
  $gsent_unico = null;
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
          <a class="nav-link collapsed" href="admin.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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



              <div class="col-md-5">
                <?php if (!$_GET) : ?>
                  <h2>AGREGAR PRODUCTO</h2>
                  <form method="POST">
                    <input type="text" class="form-control mt-3" id="nom" name="nom" placeholder="Nombre Producto" required="">
                    <select class="form-control mt-3" id="id_mat_1" name="id_mat_1">
                      <option>ID MATERIA PRIMA 1</option>
                      <?php
                      $conexion = new PDO("mysql: host=localhost; dbname=peliculas; charset=utf8", "root", "");
                      $consulta = "SELECT * FROM `materiaprima` WHERE `nombre_m_p` LIKE 'Carton'";
                      $resultados = $conexion->query($consulta);
                      while (($fila = $resultados->fetch(PDO::FETCH_ASSOC))) {
                        echo "<option value=", $fila["id_materia_prima"], ">", $fila["id_materia_prima"], " - ", $fila["nombre_m_p"], "</option>";
                      }
                      ?>
                    </select>
                    <select class="form-control mt-3" id="id_mat_2" name="id_mat_2">
                      <option>ID MATERIA PRIMA 2</option>
                      <?php
                      $conexion = new PDO("mysql: host=localhost; dbname=peliculas; charset=utf8", "root", "");
                      $consulta = "SELECT * FROM `materiaprima` WHERE `nombre_m_p` LIKE 'Plastico'";
                      $resultados = $conexion->query($consulta);
                      while (($fila = $resultados->fetch(PDO::FETCH_ASSOC))) {
                        echo "<option value=", $fila["id_materia_prima"], ">", $fila["id_materia_prima"], " - ", $fila["nombre_m_p"], "</option>";
                      }
                      ?>
                    </select>
                    <input type="text" class="form-control mt-3" id="req1" name="req1" placeholder="Requisito 1" required="">
                    <input type="text" class="form-control mt-3" id="req2" name="req2" placeholder="Requisito 2" required="">
                    <button class="btn btn-primary mt-3">Agregar</button>
                  </form>
                <?php endif ?>

                <?php if ($_GET) : ?>
                  <h2>EDITAR PRODUCTO</h2>
                  <form method="GET" action="editar_producto.php">
                    <input type="text" class="form-control mt-3" name="nom" value="<?php echo $resultado_unico['Nombre'] ?>">
                    <select class="form-control mt-3" id="id_mat_1" name="id_mat_1">
                      <option value="" disabled></option>
                      <?php
                      echo "<option value=", $resultado_unico['id_materia_prima_1'], ">", $resultado_unico["id_materia_prima_1"], "</option>";
                      $conexion = new PDO("mysql: host=localhost; dbname=peliculas; charset=utf8", "root", "");

                      $consulta = "SELECT * FROM `materiaprima` WHERE `nombre_m_p` LIKE 'Carton'";
                      $resultados = $conexion->query($consulta);
                      while (($fila = $resultados->fetch(PDO::FETCH_ASSOC))) {
                        echo "<option value=", $fila["id_materia_prima"], ">", $fila["id_materia_prima"], " ", $fila["nombre_m_p"], "</option>";
                      }

                      ?>
                    </select>
                    <select class="form-control mt-3" id="id_mat_2" name="id_mat_2">
                      <option value="" disabled></option>
                      <?php
                      echo "<option value=", $resultado_unico['id_materia_prima_2'], ">", $resultado_unico["id_materia_prima_2"], "</option>";
                      $conexion = new PDO("mysql: host=localhost; dbname=peliculas; charset=utf8", "root", "");

                      $consulta = "SELECT * FROM `materiaprima` WHERE `nombre_m_p` LIKE 'Plastico'";
                      $resultados = $conexion->query($consulta);
                      while (($fila = $resultados->fetch(PDO::FETCH_ASSOC))) {
                        echo "<option value=", $fila["id_materia_prima"], ">", $fila["id_materia_prima"], " ", $fila["nombre_m_p"], "</option>";
                      }

                      ?>
                    </select>
                    <input type="text" class="form-control mt-3" name="req1" value="<?php echo $resultado_unico['requisito_1'] ?>">
                    <input type="text" class="form-control mt-3" name="req2" value="<?php echo $resultado_unico['requisito_2'] ?>">
                    <input type="hidden" name="id_pro" value="<?php echo $resultado_unico['id_prod'] ?>">
                    <button class="btn btn-primary mt-3">Editar</button>
                  </form>
                <?php endif ?>
              </div>
              <div class="col-md-7  ">
                <h2>PRODUCTOS REGISTRADOS</h2>
                <?php foreach ($resultado as $dato) : ?>
                  <div class="alert alert-<?php echo $dato['id_prod'] ?> text-uppercase" role="alert">
                    <?php
                    $id_pro = $dato['id_prod'];
                    $nombre = $dato['Nombre'];
                    $mat1 = $dato['id_materia_prima_1'];
                    $mat2 = $dato['id_materia_prima_2'];
                    echo "
                        <div class='col-xl-12 col-md-6'>
                            <div class='card border-left-primary shadow h-100 py-2'>
                                <div class='card-body'>
                                    <div class='row no-gutters align-items-center'>
                                        <div class='col mr-2'>
                                            <div class='h5 font-weight-bold text-primary text-uppercase-800 mb-1'>Id: $id_pro</div>
                                            <div class='h6 mb-0 font-weight-bold text-gray-800'>$nombre</div>
                                            <div class='h6 mb-0 font-weight-bold text-success text-uppercase-800 mb-1'>ID MAT 1: $mat1</div>
                                            <div class='h6 mb-0 font-weight-bold text-success text-uppercase-800 mb-1'>ID MAT 1: $mat2</div>
                                        </div>
                                        
                                        <div class='col-auto'>
                                        <a href='eliminar_producto.php?id_pro=$id_pro' class='float-right ml-3'>
                                        <i class='far fa-trash-alt'></i>
                                        </a>
                                        <a href='Producto.php?id_pro=$id_pro' class='float-right'>
                                        <i class='fas fa-pencil-alt'></i>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                    ?>
                  </div>
                </div>

              <?php endforeach ?>
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
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


</body>

</html>