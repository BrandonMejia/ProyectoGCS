<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="{{ url('css/carousel.css') }}" />
    <link rel="stylesheet"  href="{{ url('css/estilo.css') }}" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
          <a class="navbar-brand" href="inicio.html"> <img src="{{ url('imagenes/logo-Dicovi.svg') }}" alt="" width="36" height="36"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Vacunación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Estadísticas</a>
              </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
              <button class="category btn btn-warning my-2 my-sm-0" type="button" OnClick="location.href= ''">Categoría</button>
              <a href="profile.html">Usuario</a>
              <a href="profile.html"><img class="user-profile" src="{{ url('imagenes/usuario.png') }}" alt="" width="36" height="36"></a>
              <button class="logout btn btn-outline-danger my-2 my-sm-0" type="button" OnClick="location.href= 'inicio_sesion.html'">Cerrar sesión</button>
            </form>
          </div>
        </nav>
      </header>
      <br><br><br>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
          <div class="profile-nav col-md-3">
              <div class="panel">
                  <div class="user-heading round">
                      <a href="#">
                          <img src="Imagenes/usuario.png" alt="">
                      </a>
                      <h1>Usuario</h1>
                  </div>
              </div>
          </div>
          <div class="profile-info col-md-9">
              <div class="panel">
                  <div class="panel-body bio-graph-info">
                      <h1>Información</h1>
                      <div class="row">
                          <div class="bio-row">
                              <p><span>Nombres </span>: </p>
                          </div>
                          <div class="bio-row">
                              <p><span>Apellidos </span>: </p>
                          </div>
                          <div class="bio-row">
                              <p><span>DNI </span>: </p>
                          </div>
                          <div class="bio-row">
                              <p><span>Fecha de nacimiento</span>: </p>
                          </div>
                          <div class="bio-row">
                              <p><span>Estado civil </span>: </p>
                          </div>
                          <div class="bio-row">
                              <p><span>Seguro </span>: </p>
                          </div>
                          <div class="bio-row">
                              <p><span>Región </span>: </p>
                          </div>
                          <div class="bio-row">
                              <p><span>Distrito </span>: </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
    <hr>
    <div>
        <div id="categoria" class="container">
            <div>
                <img src="" alt="">
                <h1>Categoría: categoría</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><strong>Inicio de vacunación:</strong> Inicio</p><br>
                <strong>¿Considera que debería pertenecer a otra categoría? <a href="">Aplique aquí</a> </strong>
            </div>
        </div>
    </div>     
    <hr>
    <div id="map">

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper)
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
      integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
      crossorigin="anonymous"
    ></script>
    <!-- Font awesome -->
    <script
      src="https://kit.fontawesome.com/a27b5ca44f.js"
      crossorigin="anonymous"
    ></script>
</body>

</html>