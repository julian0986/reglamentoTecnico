<?php 

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{
  include_once 'view/_head.php';
    
    ?>

<head>
  <title>EDS privadas</title>

</head>


  <div class="titulotarjetas">
    <h2>EDS PRIVADAS</h2>
  </div>
  <!--Multiple collapse titles-->
  <!--Tarjeta 1-->
  <div class="row mt-2">
    <div class="col-md-3">
      <div class="d-grid gap-2">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">6.4.a EDS con <br>autoservicio</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/EDSprivadas/EDSautoservicio.JPG"
                    class="d-block w-100" alt="EDSautoservicio">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Autoservicio</h5>
              <p class="card-text">Los autoservicios son aquellas Estaciones de Servicio, en las cuales la operación de suministro de los combustibles no se efectúa por personal del establecimiento, sino que la realiza directamente el usuario. A partir de la entrada en vigor de esta Resolución o de acuerdo con los plazos expresamente establecidos, aplican las siguientes disposiciones y requerimientos mínimos de funcionamiento: este tipo de establecimientos debe operar con al menos una (1 ) persona por cada 4 equipos de medición que deberán observar y controlar las normas de seguridad, siendo su responsabilidad, entre otras, controlar las Fuentes de Ignición, actuar en derrames y manejar extintores.
              </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Las EDS autoservicio cuentan con el personal que vifila el correcto funcionamiento de estos dispensadores?</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 2-->
    <div class="col-md-3">
      <div class="d-grid gap-2">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">6.4.b Señalización en EDS privadas</button>

        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgAutomotriz/EDSprivadas/operacionEDSautoservicio.jpg"
                    class="d-block w-100" alt="operacionEDSautoservicio">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Señalización</h5>
              <p class="card-text">Deberán disponerse, próximos a los Medidores de Combustible, avisos con instrucciones de operación y funcionamiento. Adicionalmente, la Estación de Servicio deberá brindar cualquier otro tipo de información que le permita a sus usuarios familiarizarse con su funcionamiento y con las medidas de seguridad mínimas aplicables a este tipo de establecimientos.                
                </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa2">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item">¿La EDS privada cuenta con su correspondiente señalización?
              </li>

            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 
include_once 'view/_footer2.php';

}else{
    $errorLogin = "Acceso denegado !";
    header("Location: ../index.php");
    
}

?>