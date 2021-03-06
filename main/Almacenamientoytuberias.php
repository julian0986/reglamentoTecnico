<?php include_once 'view/_head.php';

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{

?>
<div class="titulotarjetas">
    <h2>ALMACENAMIENTO Y TUBERÍAS DE CONDUCCIÓN DE COMBUSTIBLE</h2>
  </div>

  <!--Multiple collapse titles 1-->

  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 1-->
  <div class="row mt-2">
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-default btn-lg border border-danger" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1"> 5.3.a
          Tuberías de doble contención</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/5.3A/Tuberia de doble contencion.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Doble contención en tuberías enterradas</h5>
              <p class="card-text">El sistema de tuberías enterradas y los accesorios utilizados en esta para la
                conducción de los combustibles deben garantizar la doble contención con materiales resistentes a los
                productos que se vayan a manejar.</p>
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
                        <h5 class="modal-title" id="exampleModalLabel1">En vigencia desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">
                <h3>¿Qué es?</h3> <br>
                <p>
                  La doble contención es una tubería que rodee la tubería que lleva el líquido que se está
                  transportando,
                  esta está dispuesta para evitar un derrame, en el caso de que la tubería interior sufra una fuga
                </p>
              </l1>
              <li class="list-group-item">¿La EDS cuenta con tuberías de doble contención?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3A/5.3a UL971 o EN 14125 o su sucesoras.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 2-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-success btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">5.3.b
          Sistema de prevención de sobrellenado</button>

        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/5.3B/53bvalvulasobrellenado.jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Prevención al sobrellenado</h5>
              <p class="card-text">Todo Tanque de Almacenamiento debe contar con un mecanismo para la prevención de
                sobrellenado.
                Los tanques de almacenamiento subterráneos instalados a partir de la entrada en vigencia de este
                reglamento deberán contar con válvula de sobrellenado hermética a vapores, inspeccionable en el tubo de
                descarga de combustible, con cierre automático al paso de combustible. Deberá cumplir con la norma UL
                2583
                o su sucesoras. El cierre de esta válvula deberá graduarse a un nivel máximo de 95% de la capacidad del
                tanque. El tubo de llenado o (riser) de estos tanques deben instalarse en el contenedor de derrames y
                finalizar en el lomo del tanque, la válvula de sobrellenado será la encargada de conducir el combustible
                hasta el fondo del tanque.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de baja prioridad ya que cuenta con tres años para cumplirse
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa2">
                  Este requisito es obligatorio para el 30/03/2025
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Este requisito es nuevo o introduce un aspecto
                          aclaratorio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Este requisito es nuevo, entrará en vigencia en el 2025</p>
                        <br>
                        <p>Para los tanques nuevos, Para tanques nuevos deberán contar con válvula de sobrellenado tipo
                          lengüeta inspeccionable en el tubo de descarga de combustible, con cierre automático al paso
                          de combustible</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">
                <h3>Prevenciones de sobrellenado en los tanques</h3>
              </l1>
              <li class="list-group-item">Después de (FECHA) todos los tanques subterráneos que se instalen en la
                estación
                deberán contar con válvula de sobrellenado hermética a vapores</li>
              <li class="list-group-item"> El tubo de llenado o (riser) de estos tanques deben instalarse en el
                contenedor
                de derrames y finalizar en el lomo del tanque, la válvula de sobrellenado será la encargada de conducir
                el
                combustible hasta el fondo del tanque</li>
              <li class="list-group-item">¿El tanque cuenta con mecanismo de protección de sobrellenado?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3B/5.3b UL 2583 o su sucesoras.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-warning btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">5.3.c
          Etiquetado y rotulación de tanques SGA</button>

        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/5.3C/SGA.JPG"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Marcación de los tanques</h5>
              <p class="card-text">Los tanques de almacenamiento deben estar numerados e identificados con la capacidad
                de
                almacenamiento operativo y el tipo de combustible almacenado, de acuerdo a las tablas de aforo. Además,
                los tanques superficiales deben contar con un rótulo de identificación de riesgos conforme al Sistema
                Globalmente Armonizado de Clasificación y Etiquetado de Productos Químicos (SGA), Decreto 1496 de 2018.
              </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que cuenta con un año a partir de la
                entrada en vigencia para cumplirse
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa3">
                  Este requisito es obligatorio para el 30/03/2023
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa3" tabindex="-1" aria-labelledby="exampleModalLabel3"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Este requisito es nuevo o introduce un aspecto
                          aclaratorio </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este requisito es nuevo, entrará en vigencia en el 2023
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Los tanques superficiales se encuentran debidamente identificados y rotulados
                con la matriz SGA con el tipo de
                almacenamiento y cantidad de almacenamiento?
              </li>

              <li class="list-group-item">¿Los tanques subterráneos cuentan con placa de identificación y aforo?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3C/5.3c Decreto 1496 de 2018 Etiquetado y rotulacion de tanques SGA.pdf"
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
          data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">5.3.d
          Tanques
          estacionarios en EDS</button>

        <div class="collapse multi-collapse" id="multiCollapseExample4">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3D/estacionario.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Tanques estacionarios</h5>
              <p class="card-text">Se prohíbe el almacenamiento de combustibles en Tanques Estacionarios en Estaciones
                de
                Servicio</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia el 30 de marzo de
                2022
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
              <li class="list-group-item">Los tanques estacionarios (Tanques que no son permanentes en la estación) no
                pueden contener combustible
              </li>
              <li class="list-group-item"> ¿Cuenta usted con tanques estacionarios en la EDS?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3D/5.3d Tanques estacionarios.pdf"
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
    <!--Tarjeta1-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-warning btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">5.3.e
          Tuberías <br> de ventilación</button>
        <div class="collapse multi-collapse" id="multiCollapseExample5">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3e/sistema de tubos de desfogue.jpg"
                    class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3e/WhatsApp Image 2021-09-20 at 12.33.54 PM (1).jpg"
                    class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3e/WhatsApp Image 2021-09-20 at 12.33.54 PM.jpg "
                    class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Tuberías de ventilación</h5>
              <p class="card-text">En los tanques subterráneos, deberán existir tubos de respiración o venteo por
                tanque/compartimiento.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia el 30/03/2023
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal4">
                  Este requisito es obligatorio para el 30/03/2023
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4">Requisitos para EDS nuevas o que se modifiquen
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>"Las válvulas de presión vacío instaladas a partir de la entrada en vigencia de los presentes
                          requisitos deberán cumplir con la certificación UL 2583.
                          La tubería enterrada en los tubos de desfogue, en las estaciones de servicio que se
                          construyan, modifiquen o amplíen a partir de la entrada en vigencia de este reglamento,
                          deberán contar con una pendiente mínima de 1% hacía los tanques de almacenamiento.
                          "</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">Las bocas de los tubos de respiración de los tanques deberán salir al aire
                libre, por encima de tejados, placas o planchas mínimo 1,5 m ± 10%
              </l1>
              <li class="list-group-item">Deben estar alejadas de conducciones eléctricas a mínimo 3 m ± 10%
              </li>
              <li class="list-group-item">cuando se almacenen líquidos clase l (COMBUSTIBLE CORRIENTE), las tuberías de
                venteo deberán contar con una válvula de presión vacío para evitar daños al tanque y pérdida por
                evaporación y contaminación.
              </li>
              <li class="list-group-item">Las válvulas de presión vacío deben señalar el rango de operación entre 2.5" a
                6" pulgadas de columnas de agua para presión y un rango de 6" a IO" columnas de agua para vacío
              </li>
              </li>
              <li class="list-group-item"> Esta conformidad deberá estar avalada por el fabricante. Las tuberías de
                venteo
                deben estar ubicadas a no menos de 3.6 m por encima del nivel del suelo y a no más de 7 m ± IO % por
                encima de los Tanques de Almacenamiento.
              </li>
              </li>
              <li class="list-group-item">Las tuberías de venteo deben estar identificadas y localizarse donde los
                vapores
                no se acumulen o lleguen a una instalación insegura, entren por aberturas de los edificios adyacentes o
                sean atrapados bajo los aleros, y deben estar al menos a una distancia de 3 m de las aberturas de
                cualquier edificio.
              </li>
              </li>
              <li class="list-group-item">¿Las tuberías de ventilación cumplen con los requisitos anteriormente
                establecidos?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3e/5.3e Tuberias de ventilacion.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta2-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-warning btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample20" aria-expanded="false" aria-controls="multiCollapseExample5">5.3.f
          Diámetro del tubo de desfogue</button>
        <div class="collapse multi-collapse" id="multiCollapseExample20">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls20" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3f/WhatsApp Image 2021-09-20 at 9.56.56 PM.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Tuberías de ventilación</h5>
              <p class="card-text">En los tanques subterráneos, deberán existir tubos de respiración o venteo por
                tanque/compartimiento.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal20">
                  Este requisito es obligatorio para el 30/03/2023
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel20">En vigencia desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿El diámetro de las tuberías de ventilación corresponden a los diámetros
                anteriormente establecidos?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3f/5.3f Diametro del tubo de desfogue.pdf"
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
          data-bs-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample6">5.3.g Tipo
          de tanque y usos permitidos</button>
        <div class="collapse multi-collapse" id="multiCollapseExample6">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3g/tanque en superficie.jpg"
                    class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3g/Tanque-subterraneo-hidrocarburos.jpg"
                    class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3g/tanques_transporte.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Tipos de tanque autorizado</h5>
              <p class="card-text">El tanque diseñado y previsto para uso en superficie no debe utilizarse como tanque
                subterráneo, así como el tanque diseñado y previsto para uso subterráneo no debe usarse como tanque en
                Superficie. Se prohíbe el uso de tanques cisterna para el almacenamiento de combustible en estaciones de
                servicio. Los tanques diseñados para transporte instalados para estaciones de servicio deberán ser
                reemplazados en un tiempo no mayor a 6 meses a partir de la entrada en vigencia de los presentes
                requisitos.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia 30/09/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa5">
                  Este requisito es obligatorio para el 30/09/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa5" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel5">En vigencia desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Los tipos de tanque que posee están diseñados para la manera como están
                instalados (superficial o subterráneo)?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3g/5.3g Tipo de tanques y uso permitido.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-warning btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample7" aria-expanded="false" aria-controls="multiCollapseExample7">
          5.3.h Certificación de norma técnica del tanque
        </button>
        <div class="collapse multi-collapse" id="multiCollapseExample7">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3h/Cerificacion.png"
                    class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3h/modificaciones en EDS.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls6"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls6"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Certificación de los tanques</h5>
              <p class="card-text">Las Estaciones de Servicio que se construyan, modifiquen o amplíen deberán instalar
                tanques certificados por organismo de certificación de producto acreditados bajo la norma ISO/IEC 17065
                o
                que la modifique o sustituya. </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que cuenta con un año a partir de la entrada
                en vigencia para cumplirse
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa6">
                  Este requisito es obligatorio para el 30/03/2023
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa6" tabindex="-1" aria-labelledby="exampleModalLabel6"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel6">Este requisito es nuevo o introduce un aspecto
                          aclaratorio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este requisito es nuevo, entrará en vigencia en el 2023
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Los tanques instalados cuentan con certificado fabricación de la norma
                ISO/IEC 17065? </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3h/5.3h Certificacion de Norma tecnica del tanque.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 3-->
  <div class="row mt-2">
    <!--Tarjeta1-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample8" aria-expanded="false" aria-controls="multiCollapseExample8">5.3.i
          Documentacion de origen del tanque</button>
        <div class="collapse multi-collapse" id="multiCollapseExample8">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls7" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3i/ficha tanque.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Información de los tanques suministrada por el fabricante</h5>
              <p class="card-text">En la Estación de Servicio nuevas, modificadas o ampliadas después de la entrada en
                vigencia del presente reglamento técnico, se deberá mantener la siguiente información sobre los Tanques
                de
                Almacenamiento, suministrada por el fabricante: </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia 2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger t-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa7">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa7" tabindex="-1" aria-labelledby="exampleModalLabel7"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel7">En vigencia desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">i) Nombre del fabricante.
              </li>
              <li class="list-group-item">ii)Identificación del tanque (número de serie)
              </li>
              <li class="list-group-item">iii)Fecha de fabricación.
              </li>
              <li class="list-group-item">iv)Fecha de instalación
              </li>
              <li class="list-group-item">v)Documento que indique las pruebas de construcción del tanque.
              </li>
              <li class="list-group-item">vi)Dimensiones del tanque: diámetro y altura en metros (m), con su respectivo
                esquema.
              </li>
              <li class="list-group-item">vii) Manual de instalación
              </li>
              <li class="list-group-item">viii) Producto(s) que pueden ser almacenados en el tanque.
              </li>
              <li class="list-group-item">ix)Tabla de aforos expedida por personal competente.
              </li>
              <li class="list-group-item">x)Procedimiento y periodicidad para las pruebas de hermeticidad recomendado
                por
                el fabricante.
              </li>
              <li class="list-group-item">xi) Volumen en litros y galones.
              </li>
              <li class="list-group-item">xii) Documento que indique la resistencia química para el manejo de mezclas
                obligatorias y flexibles de biocombustibles
              </li>
              <li class="list-group-item">xii)Garantía de calidad del tanque.
              </li>
              <li class="list-group-item">xiv)Declaración para uso subterráneo o en superficie.
              </li>

              <li class="list-group-item">¿Los tanques cuentan con la información que debe ser suministrada por el
                fabricante?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3i/5.3i Informacion suministrada por el fabricante.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 2-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-warning btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample9" aria-expanded="false" aria-controls="multiCollapseExample9">5.3.j
          Ficha técnica <br> de tanques</button>
        <div class="collapse multi-collapse" id="multiCollapseExample9">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls8" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3i/ficha tanque.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Información de tanques que ya están en operación</h5>
              <p class="card-text">Las Estaciones de Servicio que operan antes de la entrada en vigencia de este
                Reglamento tienen un (1) año para contar con una ficha técnica de cada Tanque de Almacenamiento, con la
                siguiente información como mínimo</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia dentro de un año
                luego de la entrada en vigencia del reglamento
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal8">
                  Este requisito es obligatorio para el 30/03/2023
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel8"> Este requisito es nuevo o introduce un aspecto
                          aclaratorio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este requisito es nuevo, entrará en vigencia en el 2023
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">i) Material del tanque

              </l1>
              <l1 class="list-group-item">ii) Dimensiones del tanque: diámetro y altura en metros (m), con su respectivo
                esquema.

              </l1>
              <l1 class="list-group-item">ii) Producto almacenado

              </l1>
              <l1 class="list-group-item">iv) Tabla de foro volumetrico

              </l1>
              <l1 class="list-group-item">v) Declaración para uso subterráneo o Superficie

              </l1>
              <li class="list-group-item">¿Cuenta usted con la información minima de los tanques?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3j/5.3j Informacion suministrada por el fabricante.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-default btn-lg border border-danger" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample10" aria-expanded="false" aria-controls="multiCollapseExample10">5.3.k
          Cumplimiento procedimiento de instalación</button>
        <div class="collapse multi-collapse" id="multiCollapseExample10">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls9" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3k/instalacion tanques.png"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Recomendaciones del fabricante</h5>
              <p class="card-text">La instalación de los Tanques de Almacenamiento, de sus tuberías y accesorios, debe
                cumplir con el procedimiento y recomendaciones impartidas por el fabricante. </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa9">
                  Este requisito aplica para eds que se construyan, modifiquen o amplíen a partir del 30 de marzo del 2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa9" tabindex="-1" aria-labelledby="exampleModalLabel9"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel9">En vigencia desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">Todas las tuberías y tanques deberán ser dispuestas bajo las recomendaciones
                del
                fabricante</l1>
              <li class="list-group-item">¿Diligenció y firmó con el instalador de tanques, la lista de verificación de
                procedimiento de instalación suministrada por el fabricante?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3k/5.3k Recomendaciones del fabricante.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-default btn-lg border border-danger" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample11" aria-expanded="false" aria-controls="multiCollapseExample11">5.3.l
          Norma técnica de diseño y construcción de tanques.</button>
        <div class="collapse multi-collapse" id="multiCollapseExample11">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3l/normas.JPG"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Normas internacionales de amplio reconocimiento</h5>
              <p class="card-text">Los tanques instalados en Estaciones de Servicio nuevas, modificadas o ampliadas
                después de la entrada en vigencia del presente reglamento técnico deberán estar diseñados y construidos
                conforme a normas internacionales de amplio reconocimiento, entre otras, como las siguientes, según
                corresponda.</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa10">
                  Este requisito aplica para eds que se construyan, modifiquen o amplíen a partir del 30 de marzo del 2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa10" tabindex="-1" aria-labelledby="exampleModalLabel10"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel10">En vigencia desde el reglamento anterior</h5>
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
                <h5>Listado de certificaciones aceptadas</h5>
              </li>
              <li class="list-group-item">Tanques metálicos: API 650 - 652; UL 58 y UL 80, UL142; . UNE-EN 976 UNE 53
                432,
                UNE 53 496; UNE 62 350; UNE 62 351; EN 12285.Tanques en fibra de vidrios: UL 1316; UL 2080; UL 2085.
                Tanques metálicos con revestimiento de Fibra de Vidrio en su interior: ASTMD 638; ASTMD 790
              </li>

              <li class="list-group-item">¿Los tanques de la estación cumplen con alguna de las certificaciones
                internacionales anteriormente mencionadas?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3l/5.3l Normas Internacionales.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 4-->
  <div class="row mt-2">
    <!--Tarjeta 1-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample12" aria-expanded="false" aria-controls="multiCollapseExample12">5.3.m
          Sistema de invetarios</button>
        <div class="collapse multi-collapse" id="multiCollapseExample12">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls11" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3m/sistemainventarios.JPG"
                    class="d-block w-100" alt="...">
                </div>
              </div>
              <!--Titulo principal-->
              <div class="card-body">
                <h5 class="card-title">Sistema de inventarios</h5>
                <p class="card-text">La instalación debe contar con un sistema de control de Inventarios confiable. El
                  conjunto de normas y procedimientos de control de inventario deberá estar documentado y el personal
                  que
                  intervenga en la operación de éste deberá estar capacitado. Se debe realizar la declaración de
                  información
                  del inventario de los días 7, 14, 21 y 28 de cada mes, en el SICOM, a más tardar 2 días hábiles
                  después.
                </p>
              </div>
              <hr>
              <!--Lista-->
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30 de marzo de
                  2022
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                    data-bs-target="#exampleModal11">
                    Este requisito es obligatorio para el 30/03/2022
                  </button>
                </li>
                <!-- Modal -->
                <!--Titulo principal-->
                <div class="card-body">
                  <h5 class="card-title">Sistema de inventarios</h5>
                  <p class="card-text">La instalación debe contar con un sistema de control de Inventarios
                    confiable. El
                    conjunto de normas y procedimientos de control de inventario deberá estar documentado y el
                    personal
                    que
                    intervenga en la operación de éste deberá estar capacitado. Se debe realizar la declaración
                    de
                    información
                    del inventario de los días 7, 14, 21 y 28 de cada mes, en el SICOM, a más tardar 2 días
                    hábiles
                    después.
                  </p>
                </div>
                <hr>
                <!--Lista-->
                </li>
                <li class="list-group-item">¿Cuenta con un sistema de control de inventarios manual o
                  sistematizado, y debidamente documentado dentro de un procedimiento?</li>
              </ul>
              <hr>
              <div class="card-body">
                <a href="./src/doc/Almacenamiento y tuberias/Almacenamiento y tuberias/5.3m/5.3m Consola de inventarios en tanques.pdf"
                  class="card-link" target="_blank">Ver norma específica</a>
              </div>
            </div>
          </div>
        </div>
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