<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <!---------------------------------------------------------------- Inicio de importaciones de Materialize  ------------------------------------------------------------------>

          <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!---------------------------------------------------------------- FIN de importaciones de Materialize  ------------------------------------------------------------------>
    <!---------------------------------------------------------------- INICIO de importaciones de mi css  ------------------------------------------------------------------>
																	<link rel="stylesheet" href="css/style.css">
    <!---------------------------------------------------------------- FIN de importaciones de mi css  ------------------------------------------------------------------>
	<title>Peliculas Plasticas</title>
</head>
<body>
<header>
              <div class="contenedor">
                  <a href="index.php">
                  <video src="img/videobanner.mp4" autoplay loop muted>INDEX</video>
                  </a>

                    <div class="barradenavegacion">
                      <div class="logo">LOGO</div>
                      <div class="navbarright">
                          <a href="index4.php"><div class="nuestracompania">Nuestra Compañia</div></a>
                          <a href="VisualizarProductos.php"><div class="Productos">Productos</div></a>
                          <a href="index.php"><div class="iniciarsesion">Iniciar Sesión</div></a>
                      </div>
                    </div>

              </div>
    </header>
<!-------------------------------------------------------------------------------- inicio del body ---------------------------------------------------------------------------------->
<div class="fondo">
	<div class="cajadeiniciodesesion">
		<div class="cajadetitulodeiniciodesesion">

		<h5 class="center-align brand-logo">Inicio de sesión</h5>

		</div> 

		<div class="cajadecorreodeiniciodesesion">

		<form action="validar.php" method="post">

												<b>Correo: </b>
												<input class="form-group has-success" style="border-radius:15px; background-color:white;" type="text" name="mail">


		</div>
												
		<div class="cajadecontrasenadeiniciodesesion">

		<b>Contraseña: </b>
		<input style="border-radius:15px;  background-color:white;" type="password" name="pass">

		</div>
										
		<div class="botonesiniciosesion">
		<div class="cajadelbotondeaceptar">

		<input class="btn btn-primary" type="submit" value="Aceptar">  

		</div>
		<div class="cajadelbotonderegistro">

		<a href="index3.php" class="btn btn-success">Registro</a>
		</div>		
		</div>
	</div>
</div>
    <!------------------------------------------------------------------------------ fin del body -------------------------------------------------------------------------------->

    <!---------------------------------------------------------------- Inicio del footer sacado de Materialize  ------------------------------------------------------------------>
    <footer class="page-footer blue-grey">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <ul>
                <li>
                  <h5 class="white-text">Visitanos en nuestras redes</h5>
                  
                </li>
                <li><a href="#" class="grey-text text-lighten-3">www.facebook.com/filmplastico</a></li>
                <li><a href="#" class="grey-text text-lighten-3">www.twitter.com/filmplastico</a></li>
                <li><a href="#" class="grey-text text-lighten-3">www.instagram.com/filmplastico</a></li>

              </ul>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Contactenos</h5>
              <ul>
                  <li><a href="#" class="grey-text text-lighten-3">Tel : 0123 456 789</a></li>
                <li><a href="#" class="grey-text text-lighten-3">FAX -(1) 515 95 81</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2019 Copyright All rights reserved
          <a class="grey-text text-lighten-4 right" href="#!">554 Parque SimonBolivar, Zarzal Valle | 555-555-1234 | support@filmplastico.com</a>
          </div>
        </div>
      </footer>
    <!---------------------------------------------------------------- FIN del footer sacado de Materialize  ------------------------------------------------------------------>
</body>
</html>