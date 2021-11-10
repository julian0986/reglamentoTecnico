<?php include_once 'view/_head.php';

if (isset($_SESSION) && !empty($_SESSION['CODSICOM'])) {

?>

  <head>
    <title>Área de abastecimiento (EDS Vehículares)</title>
  </head>

  <div class="titulotarjetas">
    <h2>REQUISITOS AREA DE ABASTECIMIENTO EDS AUTOMOTRIZ</h2>
  </div>
  <!--Multiple collapse titles 1-->
  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 1-->
  <div class="row">
    <div class="col-md-3">
      <div class="d-grid gap-2">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">6.2.a Ingreso y salida de <br> vehículos</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Area abastecimiento/g.2a.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Áreas de desplazamiento vehícular</h5>
              <p class="card-text">La distribución de las Islas de expendio deberá permitir un ingreso y salida rápido y ágil de vehículos. Cuando éstos se encuentren estacionados en posición de carga, no deberán obstaculizar la entrada o salida, ni la libertad de maniobra de otros vehículos. En general, deberán cumplir con el radio de giro del vehículo a abastecer sin que obstaculice el normal desarrollo de la movilidad del área.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Introduce aspectos nuevos o aclaratorios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">Este item es nuevo y entrará en vigencia en el 2022

                      </div>
                    </div>
                  </div>
                </div>
              </li>
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
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">6.2.b distancia entre los carriles de abastecimiento</button>
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Area abastecimiento/6.2b.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Distancia minima entre los carriles de abastecimientio</h5>
              <p class="card-text">El ancho mínimo de los Carriles de Abastecimiento para las Islas de Llenado paralelas debe ser de 3 metros y, como mínimo, deben existir 50 cm desde el borde de la Isla hasta el Carril de Abastecimiento. En caso de no tener Isla, la distancia será desde el equipo medidor. Por tanto, la distancia mínima entre dos Islas paralelas debe ser de 7 metros libres para el tránsito de vehiculas.
              </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal" data-bs-target="#exampleModa1">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
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
              <li class="list-group-item">¿La distancia minima de los carriles de abastecimiento corresponden a los atenriormente mencionados?</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-3">
      <div class="d-grid gap-2">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">6.2.c Distancia minima entre equipos de medición</button>
        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Area abastecimiento/6.2c.png" class="d-block w-100" alt="Imagen pendiente">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Distancia minima entre los equipos de medición</h5>
              <p class="card-text">La distancia longitudinal mínima entre dos medidores en una misma Isla será de 3 metros medidos desde el eje central de cada medidor. La distancia entre los Medidores de Combustible de líquidos y, los equipos de suministro de las estaciones de carga de vehículos eléctricos, de GNVC y GLP vehicular, deberá ser mayor a 6 metros.
              </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal" data-bs-target="#exampleModa3">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
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
              <li class="list-group-item">¿La distancia minima longitudinal de los equipos de medición corresponden a los anteriormente mencionados?
              </li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2">
        <button class="btn btn-warning btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">6.2.d Distancia de los equipos de medición</button>
        <div class="collapse multi-collapse" id="multiCollapseExample4">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Area abastecimiento/6.2.d.png" class="d-block w-100" alt="...">
                </div>
              </div>

            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Materiales cercanos a los equipos de medición</h5>
              <p class="card-text">El equipo de medición debe situarse a una distancia mínima de 6 metros de cualquier Fuente de Ignición. Los elementos instalados a menos de 6 metros del equipo de medición deberán ser en materiales Incombustibles y deberán estar anclados. Este requisito aplica para todas las Estaciones de Servicio, se otorga un plazo de un año a partir de la expedición de los presentes requisitos para su cumplimiento.
              </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Este item es de media prioridad, ya que entrará en vigencia el 30/03/2023
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning mt-1 m-auto" data-bs-toggle="modal" data-bs-target="#exampleModa4">
                  Este requisito es obligatorio para el 30/03/2023
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
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
              <li class="list-group-item">¿Los elementos situados a menos de 6 metros de los equipos de medicion están construidos en materiales incombustibles?</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Ver norma específica</a>
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
      <div class="d-grid gap-2">
        <button class="btn btn-default btn-lg border border-danger" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">6.2.e Demarcado de los carriles de Abastecimiento</button>
        <div class="collapse multi-collapse" id="multiCollapseExample5">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Area abastecimiento/6.2.e.PNG" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Demcardado del carril de abastecimiento</h5>
              <p class="card-text">El Carril de Abastecimiento debe permanecer debidamente demarcado. Este requisito aplica para todas las Estaciones de Servicio, se otorga un plazo de 6 meses a partir de la entrada en vigor de este Reglamento.
              </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger mt-1 m-auto" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                  Este requisito aplica para eds que se construyan, modifiquen o amplíen a partir del 30 de marzo del 2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
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
              <li class="list-group-item">¿Los carriles de abastecimiento de la EDS se encuentran debidamente demarcados?</li>
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
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample6">6.2.f Largo máximo de la manguera de distribución</button>
        <div class="collapse multi-collapse" id="multiCollapseExample6">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Tuberias de conduccion de combustible/Tuberias de conduccion de combustible/4.2c/flexible.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Largo de la manguera de distribución</h5>
              <p class="card-text">La manguera de dispensación podrá exceder los 6 m de largo siempre que el equipo medidor cumpla con lo establecido por la Resolución 77507 de 2016, numeral 7.10.5, de la Superintendencia de Industria y Comercio, o aquellas que la modifiquen, amplíen o sustituyan.
              </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal" data-bs-target="#exampleModa5">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
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
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-3">
      <div class="d-grid gap-2">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample8" aria-expanded="false" aria-controls="multiCollapseExample8">6.2.fI Reglamento para pistolas con mangueras de 6m o mas</button>
        <div class="collapse multi-collapse" id="multiCollapseExample8">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Equipos de medicion de combustibles/Equipos de medicion de combustibles/5.1e/pistolas-surtidor-768x449.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Pistolas con mangueras de mas de 6 metros de longitud</h5>
              <p class="card-text">Las pistolas instaladas en mangueras de más de 6 metros de longitud deben contar con un mecanismo que impida el flujo de combustible. Si no existe presión en la línea, estas pistolas también deben cumplir con la norma UL-2586. Este literal aplica a todas las Estaciones de Servicio Automotriz y Fluvial a partir de la entrada en vigor de este Reglamento.
              </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal" data-bs-target="#exampleModa6">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel6">s</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Las pistolas cuyas mangueras tengan una longitud mayor a 6 metros cuentan con un mecanismo que impida el flujo de combustible?
              </li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample7" aria-expanded="false" aria-controls="multiCollapseExample7">6.2.g Ubicación del equipo de medición dentro de la EDS</button>
        <div class="collapse multi-collapse" id="multiCollapseExample7">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Area abastecimiento/6.2g.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Ubicación del equipo de medición dentro de la EDS</h5>
              <p class="card-text">Los equipos de medición deben ubicarse en el Área de Abastecimiento, de manera tal que todas las partes del vehículo a abastecer se encuentren dentro del predio de las Estaciones de Servicio. Este requisito aplica para todas las Estaciones de Servicio a partir de la entrada en vigor de este Reglamento.
              </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal" data-bs-target="#exampleModa6">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
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
              <li class="list-group-item">¿La ubicación de los equipos de medición permite que todo el vehículo que está siendo abastecido ingrese al predio?
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
} else {
  $errorLogin = "Acceso denegado !";
  header("Location: ../index.php");
}

?>