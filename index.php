<?php 
  try {
    require_once('funciones/conexion.php');
  } catch (Exception $e) {
    $error = $e->getMessage();
  }
?>




<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Calidad de aire - Comsoc</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Lato|PT+Sans|Patua+One" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <a class="navbar-brand" href="index.php">
            <img src="img/comsoc.png" width="100px" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                <a class="nav-link py-3" href="#">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-3" href="#">EXPERIENCIAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-3" href="#">GALERIA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-3" href="#">NOSOTROS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-3" href="#">CONTACTANOS</a>
              </li>

            </ul>
          </div>
        </nav>      
      </div>
  </header>
  <main>

    <!-- PORTADA -->
    <section class="py-3">
      <div class="container px-5">
        <h2 class="text-center mt-4">Aplicamos tecnología para mejorar vidas</h2> 
        <h3 class="text-center my-4">Lorem ipsum dolor sit amet, consectetur</h3>       
      </div>
      <div class="portada">
        <img src="img/enviropment.jpg" class="img-fluid" alt="Responsive image">
      </div>
    </section>

    <!-- SOBRE EL PROYECTO -->
    <section class="py-3">
      <div class="container py-2">
        <h3 class="text-left">El proyecto</h2>        
      </div>
      <div class="py-2">
        <div class="container">
          <div class="row proyecto">
              <div class="col-sm-6">
                  <h2 class="my-4 text-center">Consectetur adipisicing</h3>
                  <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem excepturi unde doloremque. Suscipit possimus molestiae natus repudiandae! Vel eligendi explicabo molestiae nihil ipsam, eum! Sunt suscipit molestias enim doloribus similique sapiente in, officiis voluptatum.</p>
                  <button type="button" class="btn btn-outline-primary mb-4">Leer más</button>
              </div>
              <div class="col-sm-6">
                <img src="img/sobre-proyecto.jpg" class="img-fluid" alt="">
              </div>
          </div>
        </div>
      </div>
    </section>


    <!-- CARACTERISTICAS -->
    <section class="my-5">
      <div class="container">
        <h3 class="text-center my-5">Mejores características</h2>        
      </div>
      <div class="caracteristicas">
        <div class="container">
          <div class="row sobre-equipo">
              <div class="col-sm-3 text-center">
                  <i class="fas fa-wifi"></i>
                  <h3 class="my-4">Conectividad inmediata</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore atque, libero ex fugiat asperiores itaque, reprehenderit nihil amet maiores hic perferendis, doloribus aut?</p>
              </div>
              <div class="col-sm-3 text-center">
                  <i class="fas fa-mobile"></i>
                  <h3 class="my-4">Compatibilidad con dispositivos</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste at debitis minus, sint natus velit, quia tempora dolores, ratione esse aliquid facilis!</p>
              </div>
              <div class="col-sm-3 text-center">
                  <i class="fas fa-check"></i>
                  <h3 class="my-4">Medida eficiente</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, possimus hic aspernatur error quod libero quo consequatur minus unde. Inventore architecto odio quasi sequi.</p>
              </div>
              <div class="col-sm-3 text-center">
                  <i class="fas fa-rocket"></i>
                  <h3 class="my-4">Rápidos reportes</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum obcaecati incidunt, id, eum minus mollitia assumenda excepturi illo, dolore at modi iste.</p>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MIRALO EN ACCION -->
    <section class="text-left">
      <div class="container">
        <h3 class="my-2">Míralo en acción</h3>
        <h2 class="my-5">Construimos hoy lo que en el futuro será util.</h2>        
      </div>
      <div class="">
        <img src="img/enviropment.jpg" class="img-fluid" alt="Responsive image">
      </div>
    </section>

    <!-- APLICACIONES -->
    <section>
      <div class="aplicaciones py-5">
        <div class="container">
          <div class="row">
              <div class="col-sm-5 text-left">
                <h3 class="my-2">¿Qué puede hacer nuestro dispositivo?</h3> 
                <h2 class="my-5">Aplicaciones</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem minima deserunt, molestias harum! Neque, facere iure dicta possimus cum nemo quia, itaque velit suscipit, veniam perferendis iste doloremque illo fugiat. Voluptates, officiis, accusantium.</p>
                <dl>
                    <dd><i class="fas fa-home"></i>Smart Home</dd>
                    <dd><i class="fas fa-phone"></i>Automotive</dd>
                    <dd><i class="fas fa-tv"></i>Multimedia</dd>
                    <dd><i class="fas fa-wifi"></i>Conectividad</dd>
                </dl>              
                </div>
              <div class="col-sm-7 text-center">
                <img src="img/sobre-proyecto.jpg" class="img-fluid" alt="">
              </div>
          </div>

        </div>
      </div>
      <div class="container py-3">
        <div class="row">
          <div class="col-sm-2 col-4">
            <img src="img/arduino.png" class="img-fluid" alt="">
          </div>
          <div class="col-sm-2 col-4">
            <img src="img/github.png" class="img-fluid" alt="">
          </div>
          <div class="col-sm-2 col-4">
            <img src="img/maqetado.png" class="img-fluid" alt="">
          </div>
          <div class="col-sm-2 col-4">
            <img src="img/php.png" class="img-fluid" alt="">
          </div>
          <div class="col-sm-2 col-4">
            <img src="img/slack.png" class="img-fluid" alt="">
          </div>
          <div class="col-sm-2 col-4">
            <img src="img/mysql.png" class="img-fluid" alt="">
          </div>
        </div>        
      </div>
    </section>

    <!-- NUESTROS PRODUCTOS -->
    <section class="text-center my-5">
      <div>
        <h3 class=" my-4">Nuestros Dispositivos.</h3>        
      </div>
      <div class="container">
        <h2 class="my-5">Tecnología facil de usar</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum recusandae sed, vero doloremque eos sit, cumque mollitia voluptate quaerat ratione iure minus delectus corrupti. Adipisci vitae ab inventore nisi officia soluta aperiam doloribus et aspernatur.</p>

      </div>
      <div class="container px-5">
        <img src="img/dispositivo.png" class="img-fluid" alt="Responsive image">
      </div>
      <div class="container py-5">
        <button type="button" class="btn btn-outline-primary">Ver descripciòn completa</button>
      </div>
    </section>

    <!-- NOSOTROS -->
    <section>
      <div class="aplicaciones py-5">
        <div class="container">
          <div class="row">
              <div class="col-sm-5 text-left">
                <h3 class="my-2">¿Qué puede hacer nuestro dispositivo?</h3> 
                <h2 class="my-5">Aplicaciones</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem minima deserunt, molestias harum! Neque, facere iure dicta possimus cum nemo quia, itaque velit suscipit, veniam perferendis iste doloremque illo fugiat. Voluptates, officiis, accusantium.</p>            
              </div>
              <div class="col-sm-7 text-center">
                <img src="img/sobre-proyecto.jpg" class="img-fluid" alt="">
              </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="">
    <div class="container text-center py-3">
      <p class=""> (c) Derechos reservados IoT - Comsoc UNI</p>
    </div>
  </footer>

  <script src="js/vendor/modernizr-3.6.0.min.js"></script>

  <script src="js/vendor/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
