<?php include_once 'view/_head.php';

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{
    
    ?>
<head>
<title>Disposición todas las instalaciones</title>
</head>
<br/>
<div class="titulotarjetas">
    <h2>DISPOSICIÓN TODAS LAS INSTALACIONES</h2>
  </div>

  <!--Multiple collapse titles 1-->
  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 1-->
  <div class="row mt-2">
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-default btn-lg border border-danger" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">4.1.a Modificación
          civil <br> a EDS</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/Disposiciones todas las instalaciones/4.1a/4.1 eds nuevas o modificadas.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Toda modificación civil que se haga a la estación debe cumplir la ley</h5>
              <p class="card-text">La ubicación, diseño, construcción, mejoras, Ampliación, calibración volumétrica y
                pruebas de las plantas de abastecimiento, instalaciones fijas del gran consumidor y Estaciones de
                Servicio, deberán ceñirse a los presentes requisitos.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  Este requisito aplica para eds que se construyan, modifiquen o amplíen a partir del 30 de marzo del 2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Vigente desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">Debido a que este item ya se encontraba vigente en el reglamento
                        continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item"> Toda obra física que se haga en la estación debe cumplir con la normativa del
                reglamento Técnico

              </l1>
              <li class="list-group-item">¿Ha realizado modificaciones de cualquier índole en la EDS, luego del 30 de
                marzo de 2022, considerando los requisitos de la Resolución 40198 de 2021?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1a/1-Presentes Requisitos.pdf"
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
          data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">4.1.b
          Material de <br> infraestructura</button>
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/Disposiciones todas las instalaciones/4.1b/MaterialInherentementeIncombustible.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>

            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Materiales de infraestructura física</h5>
              <p class="card-text">Las oficinas, talleres, bodegas y demás infraestructuras de las instalaciones deberán
                estar fabricados con materiales Incombustibles, siempre y cuando estén ubicadas en Áreas Clasificadas y
                Críticas.</p>
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
                        <h5 class="modal-title" id="exampleModalLabel2">Vigente desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">Las estructuras de la estación que se encuentren en áreas críticas deben estar
                construidas en materiales Incombustibles</l1>
              <l1 class="list-group-item">¿Se encuentran construidas todas las instalaciones en materiales
                incombustibles?</l1>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1b/2-Infraestructuras fisicas.pdf"
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
          data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">4.1.c
          Instalaciones <br> sanitarias</button>
        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/Disposiciones todas las instalaciones/4.1c/Banos.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>

            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Baños</h5>
              <p class="card-text">Las instalaciones deberán disponer de servicios sanitarios apropiadas para uso
                exclusivo de sus trabajadores e instalaciones sanitarias independientes para uso de los clientes,
                localizadas en sitios de fácil acceso.</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia el 30/03/2022
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
                        <h5 class="modal-title" id="exampleModalLabel3">Vigente desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La EDS cuenta con sanitarios independientes para usuarios y para empleados?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1c/3-Instalaciones Sanitarias.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">4.1.d
          Reportes
          al
          Ministerio de Minas y Energía</button>
        <div class="collapse multi-collapse" id="multiCollapseExample4">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active ">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/Disposiciones todas las instalaciones/4.1d/informar.png"
                    class="rounded mx-auto d-block" alt="...">
                </div>

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Reportes al Ministerio</h5>
              <p class="card-text">Toda Modificación, Ampliación o remodelación en las Áreas Críticas deberá reportarse
                al
                Ministerio de Minas y Energía. Igualmente, el cambio de combustible almacenado en los Tanques de
                Almacenamiento antes de realizarse.</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia el 30/03/2022
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
                        <h5 class="modal-title" id="exampleModalLabel3">En vigencia desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Cuando usted genere cambios en el área crítica de la estación la reportará al
                ministerio de minas y energía?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1d/4-Reportes al ministerio de minas y energia.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Multiple collapse titles2-->
  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 2-->
  <div class="row mt-2">
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">4.1.e
          Documentación
          de los equipos</button>
        <div class="collapse multi-collapse" id="multiCollapseExample5">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/Disposiciones todas las instalaciones/4.1e/Especificaciones.JPG"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Documentos de los equipos</h5>
              <p class="card-text">Las instalaciones deberán tener disponible en todo momento, la documentación
                actualizada sobre las características, especificaciones y pruebas técnicas de sus equipos.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal4">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4">Vigende desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">Debido a que este item ya se encontraba vigente en el reglamento
                        continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Usted cuenta con los documentos que debe tener sobre sus equipos?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1d/4-Reportes al ministerio de minas y energia.pdf" class="card-link" target="_blank">Ver
                norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 2-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample6">4.1.f
          Disposición de
          residuos peligrosos</button>
        <div class="collapse multi-collapse" id="multiCollapseExample6">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/Disposiciones todas las instalaciones/4.1f/cuartoderesiduos.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Área temporal de residuos peligrosos</h5>
              <p class="card-text">Contar con un Área de Almacenamiento temporal de residuos peligrosos y hacer buen
                manejo de los mismos, conforme con la normatividad ambiental vigente.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa5">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa5" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel5">Vigende desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">Debido a que este item ya se encontraba vigente en el reglamento
                        continuará en vigencia

                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La estación tiene un punto para el almacenamiento temporal de residuos
                peligrosos y cumplen con la normatividad ambiental vigente?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1f/6-Disposicion de residuos peligrosos.pdf"
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
          data-bs-target="#multiCollapseExample7" aria-expanded="false" aria-controls="multiCollapseExample7">4.1.g
          Estacionamiento de vehículos en la EDS </button>
        <div class="collapse multi-collapse" id="multiCollapseExample7">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/Disposiciones todas las instalaciones/4.1g/estacionamiento.jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>

            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Estacionamiento de vehículos</h5>
              <p class="card-text">Cuando la instalación cuente con sitio para Estacionamiento de automotores, esta
                deberá
                estar ubicada por fuera del área crítica, y los vehículos deberán disponerse de tal modo que no
                obstaculicen la circulación. En las áreas que requieran de Estacionamiento temporal, este no debe
                interferir con la circulación inherente a la operación, ni estar ubicado en las Áreas Clasificadas. Se
                prohíbe el Estacionamiento de vehículos sobre los Tanques de Almacenamiento de combustible.</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad
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
                        <h5 class="modal-title" id="exampleModalLabel6">Vigende desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">Si la estación tiene parqueaderos deben ser fuera del área crítica</li>
              <li class="list-group-item">Si un vehículo requiere aparcar temporalmente está prohibido que obstaculice
                el
                flujo vehícular</li>
              <li class="list-group-item">Está prohibido parquearse sobre los tanques subterráneos</li>
              <li class="list-group-item">¿Los parqueaderos que tenga la estación de servicio cumplen los anteriores
                requisitos?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1d/4-Reportes al ministerio de minas y energia.pdf" class="card-link" target="_blank">Ver
                norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-default btn-lg border border-danger" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample8" aria-expanded="false" aria-controls="multiCollapseExample8">4.1.h
          Memorias
          de
          intervención a la EDS</button>
        <div class="collapse multi-collapse" id="multiCollapseExample8">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls7" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/Disposiciones todas las instalaciones/4.1h/documentacion.jpg"
                    class="d-block w-100" alt="...">
                </div>

              </div>

            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Información de intervenciones a la estación</h5>
              <p class="card-text">A fin de que se puedan verificar las condiciones de construcción, se deberá tener
                memorias del proceso de construcción, remodelación, Modificación o Ampliación con dossier de obra con
                registro fotográfico o videográfico, en especial de la instalación o cambio de los Tanques de
                Almacenamiento de combustible o tubería de conducción de combustibles. Este punto aplica para
                instalaciones que se construyan o amplíen a partir de la entrada en vigencia de esta Resolución</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa7">
                  Este requisito aplica para eds que se construyan, modifiquen o amplíen a partir del 30 de marzo del 2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa7" tabindex="-1" aria-labelledby="exampleModalLabel7"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel7">Este requisito es nuevo o introduce un aspecto
                          aclaratorio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este requisito es nuevo, entrará en vigencia en el 2022
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Entendido</button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Cuenta con memorias técnicas (fotografías y videos) de los procesos
                constructivos y/o de modificación/ampliación de la EDS?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1h/8-Memorias de intervencion a la estacion.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Multiple collapse titles TRES-->
  <p class="main">
  </p>
  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 3-->
  <div class="row mt-2" >
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-default btn-lg border border-danger" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample9" aria-expanded="false" aria-controls="multiCollapseExample9">4.1.i
          Certificación
          de invtervención</button>
        <div class="collapse multi-collapse" id="multiCollapseExample9">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls8" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/Disposiciones todas las instalaciones/4.1i/certificacion.png"
                    class="d-block w-100" alt="...">
                </div>
              </div>

            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Certificación del constructor</h5>
              <p class="card-text">El constructor de instalaciones deberá entregar el Certificado de Primera Parte de la
                construcción, remodelación o modificación, de acuerdo a la ISO/IEC 17050-1 Y 17050-2 o la norma que lo
                modifique o sustituya. La instalación de los tanques y la tubería de distribución y desfogue deberá
                contar
                con un informe de interventoría. Este punto aplica para instalaciones que se construyan, amplíen, o
                modifiquen a partir de la entrada en vigencia de este reglamento.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal8">
                  Este requisito aplica para eds que se construyan, modifiquen o amplíen a partir del 30 de marzo del 2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel8">Este requisito es nuevo o introduce un aspecto
                          aclaratorio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">Este requisito es nuevo, entrará en vigencia en el 2022
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La EDS cuenta con certificado de primera parte de la construcción,
                remodelación o modificación de la EDS acorde a la Norma ISP/IEC 17050-1 y 17050-2?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1i/9-Certificacion de intervencion.pdf"
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
          data-bs-target="#multiCollapseExample10" aria-expanded="false" aria-controls="multiCollapseExample10">4.1.j
          Buenas prácticas manejo Biodiesel</button>
        <div class="collapse multi-collapse" id="multiCollapseExample10">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls9" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/Disposiciones todas las instalaciones/4.1j/WhatsApp Image 2021-09-21 at 4.29.46 PM.jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls9"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls9"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Buenas prácticas del manejo de Diésel-Biosiesel</h5>
              <p class="card-text">Las instalaciones que almacenen combustible diésel, biodiésel o sus mezclas, deberán
                cumplir con la Norma técnica Colombiana NTC 6032. BUENAS PRÁCTICAS DE MANEJO PARA EL BIODIÉSEL Y LAS
                MEZCLAS DIÉSEL-BIODIÉSEL EN LA CADENA DE DISTRIBUCIÓN DE COMBUSTIBLES LÍQUIDOS DERIVADOS DE PETRÓLEO EN
                COLOMBIA, y llevar el Registro De Evidencias de Aplicación de las Buenas Prácticas para el Manejo de
                Biodiésel y las Mezclas Diésel — Biodiésel.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa9">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa9" tabindex="-1" aria-labelledby="exampleModalLabel9"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel9">Este requisito es nuevo o introduce un aspecto
                          aclaratorio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Debido a que este item ya se encontraba vigente en
                          el reglamento continuará en vigencia</button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La EDS cumple con las buenas prácticas establecidas anteriorimente?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1j/10-NTC 6032.pdf" class="card-link"
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
          data-bs-target="#multiCollapseExample11" aria-expanded="false" aria-controls="multiCollapseExample11">4.1.k
          Buenas prácticas manejo de combustible
        </button>
        <div class="collapse multi-collapse" id="multiCollapseExample11">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Disposiciones todas las instalaciones/Disposiciones todas las instalaciones/4.1k/Buenas-Practicas.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>

            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Normas internacionales de amplio reconocimiento</h5>
              <p class="card-text">Las instalaciones que almacenen gasolina, etanol anhidro desnaturalizado o sus
                mezclas,
                deberán cumplir con la Norma técnica Colombiana NTC 6198 BUENAS PRÁCTICAS DE MANEJO DEL ETANOL ANHIDRO
                DESNATURALIZADO Y SUS MEZCLAS CON GASOLINA EN LA CADENA DE DISTRIBUCIÓN DE COMBUSTIBLES EN COLOMBIA.</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa10">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa10" tabindex="-1" aria-labelledby="exampleModalLabel10"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel10">Este requisito es nuevo o introduce un aspecto
                          aclaratorio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La EDS cumple con las buenas prácticas establecidas anteriormente?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1k/11-NTC 6198.pdf" class="card-link"
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
          data-bs-target="#multiCollapseExample12" aria-expanded="false" aria-controls="multiCollapseExample12">4.1l
          Capacitaciones al personal de la EDS</button>
        <div class="collapse multi-collapse" id="multiCollapseExample12">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls11" class="carousel slide" data-bs-ride="carousel">
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
              <h5 class="card-title">Capacitaciones a vendedores de servicios</h5>
              <p class="card-text">El personal que intervenga en operaciones de almacenamiento y despacho de combustible
                deberá estar entrenado y capacitado en descarga de combustible, despacho de combustible, atención al
                cliente y, detección de Condiciones Subestándares con base en los requisitos técnicos del presente
                reglamento técnico</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal11">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel11"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel11">Este requisito es nuevo o introduce un aspecto
                          aclaratorio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Listado de Capacitaciones</h5>
              </li>
              <li class="list-group-item">Descarga de combustible</li>
              <li class="list-group-item">Despacho de combustible</li>
              <li class="list-group-item">Atención al cliente</li>
              <li class="list-group-item">Detección de condiciones subestándares</li>
              <li class="list-group-item">¿Los vendedores de servicios se encuentran capacitados con base a los
                anteriores
                requisitos?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones todas las instalaciones/4.1l/12-Capacitaciones a vendedores de servicios.pdf"
                class="card-link">Ver norma específica</a>
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