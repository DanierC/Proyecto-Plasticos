<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>P.Principal</title>
    <!---------------------------------------------------------------- Inicio de importaciones de Materialize  ------------------------------------------------------------------>

          <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!---------------------------------------------------------------- FIN de importaciones de Materialize  ------------------------------------------------------------------>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
              <div class="contenedor">
                  <a href="index4.php">
                  <video src="img/videobanner.mp4" autoplay loop muted>INDEX</video>
                  </a>

                    <div class="barradenavegacion">
                      <div class="logo">LOGO</div>
                      <div class="navbarright">
                          <a href="index4.php"><div class="nuestracompania">Nuestra Compañia</div></a>
                          <a href="VisualizarProductos"><div class="Productos">Productos</div></a>
                          <a href="index.php"><div class="iniciarsesion">Iniciar Sesión</div></a>
                      </div>
                    </div>

              </div>
    </header>
<!-------------------------------------------------------------------------------- inicio del body ---------------------------------------------------------------------------------->
<div class="fondo">
          <div class="container">

              <table>
                  <thead>
                    <tr class="propiedadesdetabla">
                        <th class="propiedadesdetabla">Producto/unidad</th>
                        <th class="propiedadesdetabla">Tamaño</th>
                        <th class="propiedadesdetabla">Precio</th>
                    </tr>
                  </thead>
          
                  <tbody>
                    <tr class="propiedadesdetabla">
                      <td class="propiedadesdetabla"><img class="tamanofototabla" src="img/pequeño.jpg" alt=""></td>
                      <td class="propiedadesdetabla">Pequeño</td>
                      <td class="propiedadesdetabla">$0.87</td>
                    </tr>
                    <tr class="propiedadesdetabla">
                      <td class="propiedadesdetabla"><img class="tamanofototabla" src="img/mediano.jpg" alt=""></td>
                      <td class="propiedadesdetabla">Mediano</td>
                      <td class="propiedadesdetabla">$3.76</td>
                    </tr>
                    <tr class="propiedadesdetabla">
                      <td class="propiedadesdetabla"><img class="tamanofototabla" src="img/grande.jpg" alt=""></td>
                      <td class="propiedadesdetabla">Grande</td>
                      <td class="propiedadesdetabla">$7.00</td>
                    </tr>
                  </tbody>
                </table>
              
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
    
    	<!-- Compiled and minified JavaScript 4to-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    	document.addEventListener('DOMContentLoaded', function() {
    	var elems = document.querySelectorAll('.slider');
    	var instances = M.Slider.init(elems,{
    		indicators:true,
    		hheight:500,
    		duration:100,
    		interval:1000
    	});
    	var elems = document.querySelectorAll('.materialboxed');
    	var instances = M.Materialbox.init(elems);
  	});
    </script>

</body>
</html>