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
                  <a href="index.html">
                  <video src="img/videobanner.mp4" autoplay loop muted>INDEX</video>
                  </a>

                    <div class="barradenavegacion">
                      <div class="logo">LOGO</div>
                      <div class="navbarright">
                          <a href="index.html"><div class="nuestracompania">Nuestra Compañia</div></a>
                          <a href="Productos.html"><div class="Productos">Productos</div></a>
                          <a href="index.php"><div class="iniciarsesion">Iniciar Sesión</div></a>
                      </div>
                    </div>

              </div>
    </header>
<!-------------------------------------------------------------------------------- inicio del body ---------------------------------------------------------------------------------->
        <form method="post" action="">
<div class="fondo">
	<div class="cajadeiniciodesesion">
		<div class="cajadetitulodeiniciodesesion">

		<h5 class="center-align brand-logo">Registro</h5>

		</div> 

                          <div class="cajadecorreodeiniciodesesion">
                          <b>Ingresa tu nombre</b>
          <input type="text" name="realname" style="border-radius:15px; background-color:white;" class="form-control" placeholder="Ingresa tu nombre" />

                          </div>
                                              
                          <div class="cajadecontrasenadeiniciodesesion">
                          <b>Ingresa tu email</b>
          <input type="text" name="nick" style="border-radius:15px; background-color:white;" class="form-control"  required placeholder="Ingresa mail"/>
        
                          
                          </div>
                          <div class="cajadecorreodeiniciodesesion">
                          <b>Ingresa tu Password</b>
          <input type="password" name="pass" style="border-radius:15px; background-color:white;" class="form-control"  placeholder="Ingresa contraseña" />
                          

                          </div>
                                              
                          <div class="cajadecontrasenadeiniciodesesion">
                          <b>Repite tu contraseña</b>
          <input type="password" name="rpass" style="border-radius:15px; background-color:white;" class="form-control" required placeholder="repite contraseña" />

                          
                          </div>
										
		<div class="botonesiniciosesion">
      <div class="cajadelbotondeaceptar">

      <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/> 

      </div>
      <div class="cajadelbotonderegistro">

      <a href="index1.php" class="btn btn-success">Login</a>
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





<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
</body>
</html>