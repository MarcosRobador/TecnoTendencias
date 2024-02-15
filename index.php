<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoTendencias</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">TecnoTendencias</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <?php if (isset($_SESSION['usuario_id'])): ?>
                    <!-- Usuario logueado -->
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Perfil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="login-register/login.html">Cerrar sesión</a>
                        </div>
                    </li>
                <?php else: ?>
                    <!-- Usuario no logueado -->
                    <li class="nav-item">
                        <a class="nav-link" href="login-register/login.html">Iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login-register/register.html">Registrar</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>



  <div class="imagen-fondo" id="#inicio">
    <img src="img/fondo.png" alt="fondo">
  </div>

  <div class="titulo-noticias">
    <h1>NOTICIAS</h1>
  </div>
  
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <?php 
      // Verifica si existe la variable de sesión 'nombre'
      echo isset($_SESSION['nombre']) ? 'El usuario ' . $_SESSION['nombre'] : 'Invitado'; 
      echo isset($_SESSION['password']) ? ' ha sido introducido en el sistema con la contraseña ' . $_SESSION['password'] : ' ha sido introducido en el sistema con la contraseña: No disponible.'; 
    ?>
    
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>


<?php if (isset($_SESSION['usuario_id'])): ?>
                    <!-- Usuario logueado -->
                    
                    <div class="container mt-5">
  <div class="row noticia-container">
    <div class="col-md-6">
      <img src="img/noticia1.jpg" class="img-fluid noticia-img" alt="Piratería en los Videojuegos">
    </div>
    <div class="col-md-6 d-flex align-items-center">
      <div>
        <h2 class="noticia-titulo">Piratería en los Videojuegos</h2>
        <p class="noticia-p">Durante varias décadas la industria de la música y el cine han luchado a capa y espada contra la piratería. Una de las grandes empresas tecnológicas del presente, Spotify, nació por la necesidad que tenían los estudios discográficos, que perdían millones de dólares al año por culpa de las descargas ilegales de música en internet.

El mercado de los videojuegos en el mundo, uno que factura más billones de dólares al año que el de la música y el cine juntos, tampoco ha podido escapar de la piratería. Es común escuchar a muchos adultos de hoy decir que su primera consola no fue la NES, Nintendo 64 y mucho menos la PlayStation 1, sino la Polystation que se comercializó bien en Colombia, pero era una versión pirata, por ende, sus componentes no eran los de mayor calidad.</p>
      </div>
    </div>
  </div>

  <div class="row noticia-container">
    <div class="col-md-6 order-md-2">
      <img src="img/noticia2.png" class="img-fluid noticia-img" alt="Demanda de lenguajes de programación">
    </div>
    <div class="col-md-6 d-flex align-items-left order-md-1">
      <div>
        <h2 class="noticia-titulo">Demanda de lenguajes</h2>
        <p class="noticia-p">Java, JavaScript, Python, C#, PHP, y Ruby son algunos de los lenguajes de programación más demandados y útiles para aprender hoy en día. Java es esencial para el desarrollo de Android, JavaScript para interactividad web, Python para Big Data y AI, C# para plataformas de Microsoft, PHP para aplicaciones web basadas en datos, y Ruby es recomendado para desarrollo rápido y startups​​​​. Estos lenguajes son fundamentales en varios campos tecnológicos y su conocimiento es altamente valorado en el mercado laboral actual.</p>
      </div>
    </div>
  </div>
</div>

                <?php else: ?>
                    <!-- Usuario no logueado -->
                    <div class="container mt-5">
  <div class="row noticia-container">
    <div class="col-md-6">
      <img src="img/noticia1.jpg" class="img-fluid noticia-img" alt="Piratería en los Videojuegos">
    </div>
    <div class="col-md-6 d-flex align-items-center">
      <div>
        <h2 class="noticia-titulo">Piratería en los Videojuegos</h2>
        <p class="noticia-p">Durante varias décadas la industria de la música y el cine han luchado a capa y espada contra la piratería. Una de las grandes empresas tecnológicas del presente, Spotify, nació por la necesidad que tenían los estudios discográficos, que perdían millones de dólares al año por culpa de las descargas ilegales de música en internet.

El mercado de los videojuegos en el mundo, uno que factura más billones de dólares al año que el de la música y el cine juntos, tampoco ha podido escapar de la piratería. Es común escuchar a muchos adultos de hoy decir que su primera consola no fue la NES, Nintendo 64 y mucho menos la PlayStation 1, sino la Polystation que se comercializó bien en Colombia, pero era una versión pirata, por ende, sus componentes no eran los de mayor calidad.</p>
      </div>
    </div>
  </div>

  <div class="row noticia-container">
    <div class="col-md-6 order-md-2">
      <img src="img/noticia2.png" class="img-fluid noticia-img" alt="Demanda de lenguajes de programación">
    </div>
    <div class="col-md-6 d-flex align-items-left order-md-1">
      <div>
        <h2 class="noticia-titulo">Demanda de lenguajes</h2>
        <p class="noticia-p">Java, JavaScript, Python, C#, PHP, y Ruby son algunos de los lenguajes de programación más demandados y útiles para aprender hoy en día. Java es esencial para el desarrollo de Android, JavaScript para interactividad web, Python para Big Data y AI, C# para plataformas de Microsoft, PHP para aplicaciones web basadas en datos, y Ruby es recomendado para desarrollo rápido y startups​​​​. Estos lenguajes son fundamentales en varios campos tecnológicos y su conocimiento es altamente valorado en el mercado laboral actual.</p>
      </div>
    </div>
  </div>
</div>

                <?php endif; ?>




  <div class="container-footer">

  <div class="container-footer">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="d-flex flex-grow-1 justify-content-start align-items-center">
        <a href="/" class="text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="text-muted">©Copyright TecnoTendencias<span id="year"></span></span>
    </footer>
  </div>

</body>
<script src="js/script.js" > </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3UDkPWsVZ4nT4G8/61EZTx" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>