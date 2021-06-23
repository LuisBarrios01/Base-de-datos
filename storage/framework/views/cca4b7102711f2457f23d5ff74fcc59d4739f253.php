<!DOCTYPE html>
<html>
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Practica Calificada </title>
 
  <!-- Custom CSS -->
  <?php $__env->startSection('styles_laravel'); ?>
 
  <!-- Bootstrap Core CSS -->
  <link media="all" type="text/css" rel="stylesheet" href="/assets/css/bootstrap.css">
  <link media="all" type="text/css" rel="stylesheet" href="/assets/css/app.css">
 
  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <?php echo $__env->yieldSection(); ?>
 
  <?php echo $__env->yieldContent('mis_estilos'); ?>
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light  navbar-fixed-top" style="background-color: #54a0ff;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/home"><b><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
  <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
</svg> Qatar 2022</b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
  <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
</svg> </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse" style="padding-right: 85px;">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="disabled" href="/paises/brasil" style="color: black;">Brasil</a></li>
          <li><a class="disabled" href="/paises/argentina" style="color: black;">Argentina</a></li>
          <li><a href="/paises/ecuador" style="color: black;">Ecuador</a></li>
          <li><a class="active" href="/paises/uruguay" style="color: black;">Uruguay</a></li>
          <li><a href="/paises/colombia" style="color: black;">Colombia</a></li>
          <li><a href="/paises/paraguay" style="color: black;">Paraguay</a></li>
          <li><a href="/paises/chile" style="color: black;">Chile</a></li>
          <li><a href="/paises/bolivia" style="color: black;">Bolivia</a></li>
          <li><a href="/paises/venezuela" style="color: black;">Venezuela</a></li>
          <li><a href="/paises/peru" style="color: black;">Perú</a></li>
        </ul>
      </div>
      </div>
    </div>
  </nav>
  <!-- <div class="container-fluid"> -->
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
 
        <!-- Aquí incluiremos el contenido de nuestra aplicación -->
        <?php echo $__env->yieldContent('content'); ?>
 
      </div>
    </div>
  </div>
  <!-- </div> -->
 
  <!-- Scripts -->
  <script src="/assets/js/jquery.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
 
</body>
</html><?php /**PATH C:\xampp\htdocs\qatar\resources\views/app.blade.php ENDPATH**/ ?>