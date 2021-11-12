<?php
include_once '../main/config.php';
require_once  constant('CONTROLLER').'user_session.php';
   $uSession   = user_session::getInstance();
   $codSicom   = $uSession->getCurrentUserSicom();
    
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,500;1,300;1,400&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="./src/css/style.css">
  <link rel="stylesheet" href="./src/css/styleB.css">
  <link rel="shortcut icon" href="https://fendipetroleo.com/nuevoF/public/icon/favicon.ico">
  
</head>

<body>
    <form action="./controller/logout.php" method="post" id="form_nav">
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="./src/img/Logo50f.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto fs-4">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../main/src/doc/ReglamentoCompleto/Resolucion-40198-2021ReglamentoTecnico.pdf" target="_blank">Descarga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://reglamentotecnico.foroactivo.com/" target="_blank">Foro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#checklist" tabindex="-1" aria-disabled="true">Lista de chequeo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" tabindex="-1" aria-disabled="true">EDS <?php echo $codSicom; ?></a>
                </li>
                <li class="nav-item">
                  <button class="btn btn-primary"	type="submit"	id="logout_rt"		name="submit"	value="logout_rt"		>Salir</button>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    </form>