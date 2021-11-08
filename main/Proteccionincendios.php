<?php include_once 'view/_head.php';

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{
    
    ?>
<head>
<title>Protección contra incendios</title>
</head>
<br/>
<div class="titulotarjetas">
    <h2>SISTEMA DE PROTECCIÓN CONTRA INCENDIOS</h2>
  </div>
  <!--Multiple collapse titles 1-->
  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 1-->
  <div class="row">
    <div class="col-md-3">
      <div>
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">5.5.a
          Equipos de protección contra incendios</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Proteccion contra incendios/5.5a/img2a.jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Equipos de protección contra incendios</h5>
              <p class="card-text">Toda Estación de Servicio deberá contar con equipos adecuados de protección contra
                incendios, los cuales como mínimo deberán ser:</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
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
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">
                ¿Cuenta con extintores en la cantidad y capacidad indicada por la norma?
              </l1>
              <li class="list-group-item">Dos (2) extintores de polvo químico seco de 9.07 kg (20 lb) tipo ABC, ubicados
                en cada Isla de Llenado</li>
              <li class="list-group-item">Dos (2) extintores de polvo químico seco de 9.07 kg (20 lb) tipo ABC, ubicados
                en la oficina de administración.</li>
              <li class="list-group-item">Un (1) extintor de 20 libras 9.07 kg (20 lb) tipo ABC, ubicado en cada área de
                servicio adicional.</li>
            </ul>
            <div class="card-body">
              <a href="src/doc/Proteccion contra incendios/5.5a/Equipos de proteccion contra incendios 5.5a.pdf "
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 2-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">5.5.b
          Programa de inspección y mantenimiento de extintores</button>
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Proteccion contra incendios/5.5b/extintor1.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Inspección y mantenimiento</h5>
              <p class="card-text">Los extintores deben estar incluidos en un programa de inspección y Mantenimiento y,
                además, deben estar ubicados en lugares de fácil acceso, libres de cualquier obstáculo y deben estar en
                condiciones de funcionamiento máximo, colocándose a una altura no mayor a 1,30 metros ± 10%, medidos
                desde
                el suelo hasta la base del extintor y deben estar debidamente rotulados</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa1">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa1" tabindex="-1" aria-labelledby="exampleModalLabel1"
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
              <li class="list-group-item">¿Tiene en su programa de inspección y mantenimiento definidas acciones para el
                caso de los extintores de la EDS?</li>
            </ul>
            <div class="card-body">
              <a href="src/doc/Proteccion contra incendios/5.5b1/Programa de inspeccion y mantenimeinto a extintores 5.5b.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">5.5.bII
          Extintor <br> para cargues</button>
        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Proteccion contra incendios/5.5a/WhatsApp Image 2021-10-05 at 12.15.56 PM.jpeg"
                    class="d-block w-100" alt="Imagen pendiente">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Extintor para cargues o descargues</h5>
              <p class="card-text">Adicionalmente, se debe contar con otro extintor de 9.07 kg (20 lb), para el momento
                de
                cargue del Tanque, tipo ABC, el cual deberá estar disponible en el área, durante todo el tiempo que dure
                el llenado del Tanque.
              </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa3">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa3" tabindex="-1" aria-labelledby="exampleModalLabel3"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Cuenta usted con el extintor satélite en la estación?
              </li>
            </ul>
            <div class="card-body">
              <a href="src/doc/Proteccion contra incendios/5.5b2/Extintor para cargues 5.5b.pdf" class="card-link"
                target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">5.5.c
          Extintor rodante <br> o satélite</button>
        <div class="collapse multi-collapse" id="multiCollapseExample4">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Proteccion contra incendios/5.5c/WhatsApp Image 2021-10-05 at 12.22.07 PM.jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>

            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Extintor satélite</h5>
              <p class="card-text">La Estación de Servicio con más de 4 mangueras de suministro, deberá contar con un
                extintor rodante de polvo químico seco con capacidad mínima de 68 Kg (150 lb) que se ubicará a un
                costado
                de la construcción destinada a las oficinas de administración de la Estación de Servicio.</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa4">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa4" tabindex="-1" aria-labelledby="exampleModalLabel4"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La estación cuenta con extintores rodantes o satelital?</li>
            </ul>
            <div class="card-body">
              <a href="src/doc/Proteccion contra incendios/5.5c/Extintor rodante o satelite 5.5c.pdf" class="card-link"
                target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Multiple collapse titles 2-->
  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 1-->
  <div class="row mt-2">
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-warning btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">5.5.d
          Parada <br> de Emergencia</button>
        <div class="collapse multi-collapse" id="multiCollapseExample5">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Proteccion contra incendios/Proteccion contra incendios/5.5d/WhatsApp Image 2021-09-20 at 12.33.52 PM.jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Parada de emergencia</h5>
              <p class="card-text">Se debe contar como mínimo con un dispositivo de Parada de emergencia que interrumpa
                todo el flujo eléctrico a la zona de llenado y almacenamiento. El dispositivo debe ubicarse a mínimo
                seis
                (6 m) metros ± 10% y máximo treinta metros (30 m) ± 10% del eje central del equipo de medición más
                cercano
                a la parada de emergencia y deberá estar identificado en una zona visible y accesible. La Parada de
                emergencia debe ser botón "'tipo hongo". Para las Estaciones de Servicio existentes se otorga un plazo
                máximo de un (1) año a partir de la entrada en vigencia de la presente resolución para dar cumplimiento
                a
                este requisito.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2023
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal4">
                  Este requisito es obligatorio para el 30/03/2023
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">

              </l1>
              <li class="list-group-item">¿La EDS cuenta con parada de emergencia señalizada y ubicada a no más de 30
                metros del punto más cercano de la isla?</li>
            </ul>
            <div class="card-body">
              <a href="src/doc/Proteccion contra incendios/5.5d/Parada de emergencia 5.5d.pdf" class="card-link"
                target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 2-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample6">5.5.e
          Entrenamiento del personal</button>
        <div class="collapse multi-collapse" id="multiCollapseExample6">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/4.1l/WhatsApp Image 2021-09-27 at 4.06.08 PM.jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Entrenamiento del personal</h5>
              <p class="card-text">Todo el personal que labora en la Estación de Servicio deberá estar entrenado en el
                uso
                de extintores y en prácticas contra incendio y, en el manejo derrames de hidrocarburos. Para tal fin,
                deberá conservar los registros de capacitación respectivos.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa5">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa5" tabindex="-1" aria-labelledby="exampleModalLabel5"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel5"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Realizan jornadas periódicas de formación al personal en manejo de
                contingencias?</li>
            </ul>
            <div class="card-body">
              <a href="src/doc/Proteccion contra incendios/5.5e/Entrenamiento del personal 5.5e.pdf" class="card-link"
                target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample7" aria-expanded="false" aria-controls="multiCollapseExample7">5.5.f Plan
          de <br> emergencia</button>
        <div class="collapse multi-collapse" id="multiCollapseExample7">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Proteccion contra incendios/Proteccion contra incendios/5.5f/Plan-de-emergencia-de-una-empresa.png"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Plan de emergencias</h5>
              <p class="card-text">Se debe establecer e implementar un plan de emergencias de acuerdo a los recursos,
                equipos y personal disponibles para respuesta a incendios y emergencias relacionadas. Este plan debe
                incluir como mínimo lo siguiente:
              </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa6">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa6" tabindex="-1" aria-labelledby="exampleModalLabel6"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel6"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La estación cuenta con un plan de emergencia como anteriormente se
                establece?
              </li>
            </ul>
            <div class="card-body">
              <a href="src/doc/Proteccion contra incendios/5.5f/Plan de emergencias 5.5.f.pdf" class="card-link"
                target="_blank">Ver norma específica</a>
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