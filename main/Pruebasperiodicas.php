<?php include_once 'view/_head.php';

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{
    
    ?>
<head>
<title>Pruebas periódicas</title>
</head>
<br/>
<div class="titulotarjetas">
    <h2>PRUEBAS PERIÓDICAS</h2>
  </div>
  <!--Multiple collapse titles 1-->
  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 1-->
  <div class="row mt-2">
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger bg-opacity-25 btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">5.6.2.a
          Líquidos en cajas contenedoras</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2a/WhatsApp Image 2021-09-20 at 12.34.04 PM (1).jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Revisión a cajas contenedoras </h5>
              <p class="card-text">Verificar la ausencia de líquido en las cajas contenedoras de equipos y bombas,
                realizando una inspección visual, por lo menos cada mes.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022.
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
              </l1>
              <li class="list-group-item">
                <H5>Se debe realizar mensualmente</H5>
              </li>
              <li class="list-group-item">¿Realiza las revisiones periódicas a las cajas contenedoras?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2a/1-Liquidos en cajas contenedoras.pdf" class="card-link"
                target="_blank">Ver
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
          data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">5.6.2.b
          Fugas en mangueras de despacho</button>
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2b/WhatsApp Image 2021-09-20 at 12.33.57 PM (1).jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Revisión a mangueras de despacho</h5>
              <p class="card-text">Verificar la ausencia de fugas de las mangueras de despacho, conexiones, equipo de
                medición y demás componentes de la Estación de Servicio que suministran combustibles líquidos,
                realizando
                una inspección visual, por lo menos cada mes.(1 MES) </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
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
                      <div class="modal-body"></h5>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Entendido</button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">
                <h5>Se debe realizar mensualmente</h5>
              </l1>
              <l1 class="list-group-item">¿Realiza las revisiones periódicas a las mangueras de despacho?
              </l1>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2b/2-Fugas en mangueras de despacho.pdf" class="card-link"
                target="_blank">Ver
                norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">5.6.2.c
          Conductividad señal tierra</button>
        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2c/pozo2.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Revisión de conductividad señal tierra</h5>
              <p class="card-text">Verificar que los accesorios conectados al Medidor de Combustible garanticen la
                conductividad de la señal de tierra no mayor a 5 Ω 10% desde la punta de la pistola hasta el equipo, por
                lo menos cada año</p>
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
              <li class="list-group-item">
                <h5>Se debe realizar anualmente</h5>
              </li>
              <li class="list-group-item">¿Realiza las revisiones periódicas de conductividad tierra del equipo?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2c/3-Conductividad senal tierra.pdf" class="card-link"
                target="_blank">Ver norma
                específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">5.6.2.d
          Parada de <br>emergencia </button>
        <div class="collapse multi-collapse" id="multiCollapseExample4">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2d/maxresdefault.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Parada de emergencia</h5>
              <p class="card-text">Verificar el funcionamiento de la Parada de emergencia, por lo menos cada mes.</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
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
              <li class="list-group-item">
                <h5>Se debe realizar mensualmente</h5>
              </li>
              <li class="list-group-item">¿Realiza las revisiones periódicas a la parada de emergencia?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2d/4-Parada de emergencia.pdf" class="card-link"
                target="_blank">Ver norma
                específica</a>
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
    <!--Tarjeta 1-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample20" aria-expanded="false" aria-controls="multiCollapseExample5">5.6.2.e
          Inspección a bocas de ingreso y bombas sumergibles</button>
        <div class="collapse multi-collapse" id="multiCollapseExample20">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls20" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2e/R14.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Inspección bocas de ingreso y bombas sumergible</h5>
              <p class="card-text">Inspeccionar todas las bocas de ingreso a los Tanques y el estado de las bombas
                sumergibles, por Io menos cada mes. Se debe realizar Mantenimiento cuando presente corrosión. (1 MES)
              </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal20">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel20"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Se debe realizar mensualmente</h5>
              </li>
              <li class="list-group-item">¿Realiza las revisiones periódicas a las bocas de ingreso y bombas
                sumergibles?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2c/3-Conductividad senal tierra.pdf" class="card-link">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 2-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">5.6.2.f
          Inspecciónes de inatalaciones eléctricas</button>

        <div class="collapse multi-collapse" id="multiCollapseExample5">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2f/Seguridad-instalaciones-electricas-10.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Inspección instalaciones eléctricas</h5>
              <p class="card-text">Realizar una inspección visual de las Instalaciones Eléctricas, cuadros de mando y
                maniobra, protecciones, instrumentos de medida, circuitos de alumbrado y fuerza motriz. Se deberá
                revisar
                que todos los cables (potencia datos) se encuentran entubados en un conducto resistente al combustible,
                deben contar con sellos cortafuego, las cajas deberán ser anti explosión, por lo menos cada mes</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
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
                        <h5 class="modal-title" id="exampleModalLabel4"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Se debe realizar mensualmente</h5>
              </li>
              <li class="list-group-item">¿Realiza las revisiones periódicas a las instalaciones eléctricas?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2f/5-Inspeccion a redes electricas.pdf" class="card-link"
                target="_blank">Ver
                norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample6">5.6.2.g
          Prueba de sistemas de Sobrellenado</button>
        <div class="collapse multi-collapse" id="multiCollapseExample6">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2g/WhatsApp Image 2021-09-22 at 3.21.44 PM.jpeg"
                    class="d-block w-100" alt="Imagen pendiente">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Procedimiento de prueba de sistemas de sobrellenado</h5>
              <p class="card-text">Se debe tener un procedimiento documentado para la inspección y prueba de los
                dispositivos o sistemas de sobrellenado. Se deben probar como mínimo una vez al año.</p>
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
                <div class="modal fade" id="exampleModa5" tabindex="-1" aria-labelledby="exampleModalLabel"
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
              <li class="list-group-item">
                <h5>Se debe realizar anualmente</h5>
              </li>
              <li class="list-group-item">¿Tiene documentado un procedimiento para la inspección y prueba de los
                sistemas de sobrellenado?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2g/6-Procedimientos documentados.pdf" class="card-link"
                target="_blank">Ver
                norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample7" aria-expanded="false" aria-controls="multiCollapseExample7">5.6.2.h
          Pruebas de estanqueidad</button>
      </div>
      <div class="collapse multi-collapse" id="multiCollapseExample7">
        <div class="card">
          <!--Carrousel-->
          <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2h/02.jpg"
                  class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2h/03.jpg"
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
            <h5 class="card-title">Pruebas de estanqueidad</h5>
            <p class="card-text">Se deberán realizar Pruebas de Estanqueidad a las cajas contenedoras de derrames de
              los
              equipos de medición, contenedor de boca de descarga (spill container) y cajas contenedoras de las bombas
              sumergibles. Esta prueba deberá hacerse por lo menos cada año.</p>
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
                      <h5 class="modal-title" id="exampleModalLabel6">Este requisito es nuevo o introduce aspectos
                        aclaratorios</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <h5>Se deben realizar anualmente</h5>
            </li>
            <li class="list-group-item">¿Realiza la prueba anual de estanqueidad a las cajas contenedoras de equipos y
              bombas y de los spill container?</li>
          </ul>
          <div class="card-body">
            <a href="./src/doc/Pruebas periodicas/5.6.2h/7-Pruebas de estanqueidad.pdf" class="card-link"
              target="_blank">Ver norma
              específica</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Multiple collapse titles TRES-->

  <!--Paquete de 4 tarjetas 3-->
  <div class="row mt-2">
    <!--Tarjeta 1-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample8" aria-expanded="false" aria-controls="multiCollapseExample8">5.6.2.i
          Inspección de dispositivos de seguridad</button>
        <div class="collapse multi-collapse" id="multiCollapseExample8">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls7" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2i/WhatsApp Image 2021-09-20 at 12.34.05 PM (1).jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Válvulas y dispositivos</h5>
              <p class="card-text">Verificar el estado de las válvulas de seguridad de los Medidores de Combustible y
                demás dispositivos, por lo menos cada mes</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa7">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa7" tabindex="-1" aria-labelledby="exampleModalLabel7"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel7"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Se deben realizarse mensualmente</h5>
              </li>
              <li class="list-group-item">¿Realiza inspección mensual de válvulas de impacto y demás dispositivos de
                seguridad?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2i/8-Valvulas de Seguridad.pdf " class="card-link"
                target="_blank">Ver norma
                específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 2-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample9" aria-expanded="false" aria-controls="multiCollapseExample9">5.6.2.j
          Revisión a tanques superficiales</button>
        <div class="collapse multi-collapse" id="multiCollapseExample9">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls8" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2j/revisiontanques.png"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Revisión a tanques</h5>
              <p class="card-text">Comprobar, el estado de las paredes de los Tanques, cuando éstos no sean
                subterráneos,
                así como el estado de las cimentaciones, soportes, cerramientos, drenajes, bombas y equipos e
                instalaciones auxiliares. Esta actividad deberá hacerse por lo menos cada mes, mediante inspección
                visual
              </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal8">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel8"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Se deben realizar mensualmente</h5>
              </li>
              <li class="list-group-item">¿Realiza inspección periódica a la estructura del tanque y demás
                infraestructura de protección y soporte?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2j/9-Revision a tanques superficiales.pdf" class="card-link"
                target="_blank">Ver
                norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample10" aria-expanded="false" aria-controls="multiCollapseExample10">5.6.2.k
          Revisión del espacio anular</button>
        <div class="collapse multi-collapse" id="multiCollapseExample10">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls9" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2k/Anular.jpg"
                    class="d-block w-100" alt="...">
                </div>

              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Espacio anular de los tanques</h5>
              <p class="card-text">Verificar las condiciones del espacio anular de los Tanques, de acuerdo a las
                recomendaciones del fabricante, por lo menos cada mes</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
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
                        <h5 class="modal-title" id="exampleModalLabel9"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Se debe realizar mensualmente</h5>
              </li>
              <li class="list-group-item">¿Realiza las revisiones periódicas al espacio anular de los tanques?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2k/10-Revision del espacio anular.pdf" class="card-link"
                target="_blank">Ver
                norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample11" aria-expanded="false" aria-controls="multiCollapseExample11">5.6.2.l
          Prueba de <br> calidad diésel</button>
        <div class="collapse multi-collapse" id="multiCollapseExample11">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2l/WhatsApp Image 2021-09-21 at 4.29.46 PM.jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Prueba de calidad en el recibo de combustible</h5>
              <p class="card-text">Se debe realizar prueba abreviada de calidad en el recibo del diésel de acuerdo con
                el
                numeral 1 1 de la NTC 6032:2013 "Buenas prácticas de manejo para el biodiésel y las mezclas
                diésel—biodiésel en la cadena de distribución de combustibles líquidos derivados de petróleo en
                Colombia"
                y se debe dejar registro.</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
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
                        <h5 class="modal-title" id="exampleModalLabel10"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Debe realizarse al momento del descargue del combustible</h5>
              </li>
              <li class="list-group-item">¿Realiza prueba de calidad del Diésel al momento de la descarga y de manera
                periódica en el tanque de almacenamiento?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2l/11-Prueba de calidad DIESEL.pdf" class="card-link"
                target="_blank">Ver norma
                específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!--Multiple collapse titles Cuatro-->

  <!--Paquete de 4 tarjetas 4-->
  <div class="row mt-2">
    <!--Tarjeta 1-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample12" aria-expanded="false" aria-controls="multiCollapseExample12">5.6.2.m
          Prueba de hermeticidad en tanques</button>
        <div class="collapse multi-collapse" id="multiCollapseExample12">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls11" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2m/Hermeticidadt.jpg"
                    class="d-block w-100" alt="...">
                </div>
                <!-- <div class="carousel-item">
                      <img src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2m/page_1 (3).jpg" class="d-block w-100" alt="...">
                    </div> -->
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Pruebas de hermeticidad</h5>
              <p class="card-text">Se deberán realizar pruebas de verificación de la hermeticidad del sistema de
                almacenamiento de combustible, mínimo una vez cada 2 años. Estas pruebas las deberá realizar una empresa
                acreditada por ONAC bajo la norma NTC ISO IIEC 1702C con alcance en la norma UNE-EN13160, NFPA 30 A y
                las
                disposiciones relacionados en el presente reglamento técnico.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
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
                        <h5 class="modal-title" id="exampleModalLabel11"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Se debe realizar cada dos años</h5>
              </li>
              <li class="list-group-item">¿Realiza las pruebas de hermeticidad de tanques de manera periódica?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2m/12-Hermeticidad en el sitema de almacenamiento de combustible.pdf"
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
          data-bs-target="#multiCollapseExample13" aria-expanded="false" aria-controls="multiCollapseExample13">5.6.2.n
          Hermeticidad a sistemas de conducción</button>
        <div class="collapse multi-collapse" id="multiCollapseExample13">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls12" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2n/Hermeticidadsis.JPG"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Pruebas de hermeticidad</h5>
              <p class="card-text">Se deberán realizar pruebas de verificación de la hermeticidad del sistema de
                conducción del combustible mínimo una vez cada (2 AÑOS). Estas pruebas las deberá realizar un organismo
                por ONAC bajo la norma NTC ISO /IEC 17020 con alcance en la norma UNE-EN 13160, y/o NFPA 30 y las
                disposiciones relacionadas en el presente reglamento técnico.
              </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal12">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel12"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel12"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Se debe realizar cada dos años</h5>
              </li>
              <li class="list-group-item"> ¿Realiza las pruebas de hermeticidad de tuberías de manera periódica?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2n/13-Hermeticidad a sistemas de conduccion.pdf"
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
          data-bs-target="#multiCollapseExample14" aria-expanded="false" aria-controls="multiCollapseExample14">5.6.2.o
          Simulación <br> de fugas</button>
        <div class="collapse multi-collapse" id="multiCollapseExample14">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls13" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2o/veeder_root.JPG"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Simulaciones en la estación</h5>
              <p class="card-text">Como mínimo cada año, se debe simular una fuga en cada línea de la estación, el
                sistema
                de control de inventarios debe detectarla y bloquear el suministro de combustible por la línea en
                cuestión. Se deberá dejar registro de estas fugas simuladas en la memoria de la consola para una
                posterior
                revisión del Organismo Evaluador de la Conformidad. La estación deberá contar con un manual para este
                propósito</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa13">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa13" tabindex="-1" aria-labelledby="exampleModalLabel13"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel13"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Se debe realizar anualmente</h5>
              </li>
              <li class="list-group-item">¿Si cuenta con sistema automático de control de inventarios, realiza
                simulación anual de fugas en las líneas de conducción?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2o/14-Simulacion de Fugas.pdf" class="card-link"
                target="_blank">Ver norma
                específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample15" aria-expanded="false" aria-controls="multiCollapseExample15">5.6.2.p
          Remisión de <br> resultados</button>
        <div class="collapse multi-collapse" id="multiCollapseExample15">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls14" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2p/PruebasYResultados-logo.jpg"
                    class="d-block w-100" alt="imagen pendiente">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Reporte de simulacro y reemplazo de equipos defectuosos</h5>
              <p class="card-text">Los resultados de las pruebas realizadas en Tanques y tuberías, deberán ser remitidos
                por los agentes de la cadena a la Dirección de Hidrocarburos. Los resultados de las pruebas realizadas
                deberán contar con un mecanismo para verificar su autenticidad. En caso de resultados no satisfactorios
                en las Pruebas de Hermeticidad, ya sea en tuberías o en Tanques, se procederá al cambio de la línea
                defectuosa, la repotenciación o al cambio del Tanque, y a la descontaminación del área afectada, si la
                hubiere, según sea el caso.</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa14">
                  Este requisito es obligatorio para el 03/07/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa14" tabindex="-1" aria-labelledby="exampleModalLabel14"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel14"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Entendido</button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La estación de servicio genera los reportes correspondientes a los simulacros
                realizados?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2p/15-Remision de resultados.pdf" class="card-link"
                target="_blank">Ver norma
                específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--Multiple collapse titles Cinco-->


  <!--Paquete de 4 tarjetas 5-->
  <div class="row mt-2">
    <!--Tarjeta 1-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample16" aria-expanded="false" aria-controls="multiCollapseExample16">5.6.2.q
          Inspección pozo de monitoreo</button>
        <div class="collapse multi-collapse" id="multiCollapseExample16">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls15" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2q/pozoMonitoreo.jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Inspección pozo monitoreo</h5>
              <p class="card-text">Se deben inspeccionar los Pozos de Monitoreo y/u observación antes y después de la
                realización de las pruebas en Tanque y línea, revisando si existe contaminación y variación de niveles.
                En
                caso de que el Tanque sea doble pared se deberá verificar el espacio anular, de acuerdo con las
                recomendaciones entregadas por el fabricante.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal15">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel15"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel15"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Realiza la revisión periódica a los pozos de monitoreo?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2q/16-Inspeccion pozo de monitoreo.pdf" class="card-link"
                target="_blank">Ver
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
          data-bs-target="#multiCollapseExample17" aria-expanded="false" aria-controls="multiCollapseExample18">5.6.2.r
          Sensores de <br> derrames</button>
        <div class="collapse multi-collapse" id="multiCollapseExample17">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls16" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2r/Sensores.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Sensores de derrame</h5>
              <p class="card-text">Las Estaciones de Servicio que tengan un sistema automático de detección de fugas y
                estén provistas de sensores discriminantes para pozos, sensores en el espacio anular del Tanque y
                sensores
                de nivel para cajas contenedoras del equipo medidor y bomba, deberán, como mínimo (CADA AÑO), activar
                cada
                uno de los sensores para probar su funcionamiento. Se deberá dejar registro de estas pruebas simuladas
                en
                la memoria de la consola, para una posterior revisión del ente verificador. La estación deberá contar
                con
                un manual para este propósito.
              </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal16">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel16"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel16"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Se debe realizar anualmente</h5>
              </li>
              <li class="list-group-item">¿Si cuenta con sistema automático de detección de fugas, realiza simulación
                anual de prueba de los sensores?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2r/17-Sensores de derrames.pdf" class="card-link"
                target="_blank">Ver norma
                específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample18" aria-expanded="false" aria-controls="multiCollapseExample18">5.6.2.s
          Revisión a tubo de desfogue</button>
        <div class="collapse multi-collapse" id="multiCollapseExample18">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls17" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2s/semarnat2a11_Cimg_253842.png"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Verificación tuberías de desfogue</h5>
              <p class="card-text">Verificar el estado y funcionamiento de la tubería de desfogue, por lo menos CADA (2)
                AÑOS. Se deberá dejar evidencia escrita de este procedimiento.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa13">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa13" tabindex="-1" aria-labelledby="exampleModalLabel13"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel13"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Se debe realizar cada dos años</h5>
              </li>
              <li class="list-group-item">¿Realiza la prueba periódica de funcionamiento a las tuberías de desfogue?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2s/18-Revision a tubo desfogue.pdf " class="card-link"
                target="_blank">Ver norma
                específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample19" aria-expanded="false" aria-controls="multiCollapseExample19">5.6.2.t
          Aforo de los <br> tanques</button>
        <div class="collapse multi-collapse" id="multiCollapseExample19">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls18" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas periodicas/Pruebas periodicas/5.6.2t/aforo-de-tanques-3d-3.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Aforo de los tanques</h5>
              <p class="card-text">Efectuar el aforo de los Tanques por lo menos cada 5 años.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item"> Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa18">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa18" tabindex="-1" aria-labelledby="exampleModalLabel18"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel18"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <h5>Se debe realizar cada cinco años</h5>
              </li>
              <li class="list-group-item">¿Realiza la renovación de las tablas de aforo de los tanques cada cinco años?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas periodicas/5.6.2t/19-Aforo de los tanques.pdf" class="card-link"
                target="_blank">Ver norma
                específica</a>
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