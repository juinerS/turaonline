<?php 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {

  if(isset($_SESSION["nit"])){ ?>

    <nav class="navbar navbar-expand-lg navbar-dark principal">
      <div class="container-fluid">
          <a class="navbar-brand float-center " href="../index.php"> <img class="logo" src="../img/brand.png">
          </a>
        </img>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav m1-auto justify-items-center">
          <li class="nav-item">
              <a class="nav-link link cursor-dedo" href="../empresas.php">Empresas</a>
          </li>
          <li class="nav-item">
              <a class="nav-link link cursor-dedo" href="../ofertas.php">Ofertas de Trabajo</a>
          </li>
        </ul>
          <ul class="navbar-nav ml-auto align-items-center">
          <li class="nav-item">
    <form id="form_busqueda" class="form-inline" action="../busqueda.php">
        <input id="texto_busqueda" class="form-control" type="search" placeholder="Busqueda" aria-label="Busqueda">
        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Buscar</button>
    </form>
          </li>
            <li class="nav-item">
            <a href="../mi/empresa.php">
                <img class="cursor-dedo img-fluid avatar" id="blah" src="<?php echo $_SESSION["avatar"]; ?>" alt="Mi Foto"/>
            </a>
            </li>
              <li class="nav-item">
              <a class="nav-link link cursor-dedo" data-toggle="modal" id="cerrar_sesion">
                <span data-toggle="tooltip" title="Cerrar sesión" class="oi oi-account-logout"></span>
Cerrar Sesión</a>
            </li>
          </ul>
        </div></div></nav>

<?php }else if(isset($_SESSION["cedula"])){ ?>

    <nav class="navbar navbar-expand-lg navbar-dark principal">
      <div class="container-fluid">
          <a class="navbar-brand float-center " href="../index.php"> <img class="logo" src="../img/brand.png">
          </a>
        </img>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav m1-auto align-items-center">
          <li class="nav-item">
              <a class="nav-link link cursor-dedo" href="../empresas.php">Empresas</a>
          </li>
          <li class="nav-item">
              <a class="nav-link link cursor-dedo" href="../ofertas.php">Ofertas de Trabajo</a>
          </li>
        </ul>
          <ul class="navbar-nav ml-auto align-items-center">
          <li class="nav-item">
    <form id="form_busqueda" class="form-inline" action="../busqueda.php">
        <input id="texto_busqueda" class="form-control" type="search" placeholder="Busqueda" aria-label="Busqueda">
        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Buscar</button>
    </form>
          </li>

            <li class="nav-item">
            <a href="../mi/perfil.php">
                <img class="cursor-dedo img-fluid avatar" id="blah" src="<?php echo $_SESSION["avatar"]; ?>" alt="Mi Foto"/></a>
            </li>
            <li class="nav-item">
              <a class="nav-link link cursor-dedo" data-toggle="modal" id="cerrar_sesion">
                <span data-toggle="tooltip" title="Cerrar sesión" class="oi oi-account-logout"></span>
Cerrar Sesión</a>
            </li>
          </ul>
        </div></div></nav>

<?php }}else { ?>
  
  <nav class="navbar navbar-expand-lg navbar-dark principal">
      <div class="container-fluid">
          <a class="navbar-brand float-center " href="../index.php"> <img class="logo" src="../img/brand.png">
          </a>
        </img>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav m1-auto align-items-center">
          <li class="nav-item">
              <a class="nav-link link cursor-dedo" href="../empresas.php">Empresas</a>
          </li>
          <li class="nav-item">
              <a class="nav-link link cursor-dedo" href="../ofertas.php">Ofertas de Trabajo</a>
          </li>
        </ul>
          <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
    <form id="form_busqueda" class="form-inline" action="../busqueda.php">
        <input id="texto_busqueda" class="form-control" type="search" placeholder="Busqueda" aria-label="Busqueda">
        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Buscar</button>
    </form>
          </li>
            <li class="nav-item">
              <a class="nav-link link float-center cursor-dedo" href="../inicio_sesion.php">Iniciar Sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link float-center cursor-dedo" href="../registro/aspirante.php">Registrarse</a>
            </li>
          </ul>
        </div>
      </nav>
      
<?php } ?>    