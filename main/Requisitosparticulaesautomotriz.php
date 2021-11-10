<?php include_once 'view/_head.php';

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{
    
    ?>

<head>
  <title>Requisitos particulares para estaciones automotrices</title>
</head>

  <div class="titulotarjetas">
    <h2>REQUISITOS PARTICULARES EDS AUTOMOTRIZ</h2>
  </div>
  <!--Multiple collapse titles 1-->
  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 1-->
  <div class="row">
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">6.1.a
          Pretratamiento <br> de aguas</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Requisitos especificos/6.1a.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Sistema de pretratamiento de agua</h5>
              <p class="card-text">Toda Estación de Servicio debe contar con un sistema de pretratamiento de aguas
                industriales que conste, como mínimo, de un sedimentador, una trampa de grasas y una caja de muestreo o
                un Sistema de Contención de Derrames que prevenga el vertimiento de los contaminantes al alcantarillado,
                a las aguas superficiales o al suelo. El sistema de pretratamiento o de contención debe estar diseñado
                de acuerdo al área y ubicación del establecimiento.</p>
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
                        <h5 class="modal-title" id="exampleModalLabel">Vigente desde el relgamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">Debido a que este item ya se encontraba vigente en el reglamento
                        continuará en vigencia

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
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-success btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">6.1.b
          Pavimentación <br> de la EDS</button>
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Area abastecimiento/g.2a.png"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Pavimentación</h5>
              <p class="card-text">Las Áreas de Abastecimiento y Almacenamiento en la Estación de Servicio deberán ser
                pavimentadas en concreto, garantizando la impermeabilidad del piso; en todos los casos deberá permitir
                la circulación del agua hacia el sistema de pretratamiento o contención de derrames. Se otorga un plazo
                de 4 años a partir de la entrada en vigencia expedición de los presentes requisitos para su
                cumplimiento. </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de baja prioridad, ya que entrará en vigencia el 30/03/2026
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa1">
                  Este requisito es obligatorio para el 30/03/2026
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa1" tabindex="-1" aria-labelledby="exampleModalLabel1"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Requisitos nuevos o con aspectos aclaratorios
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este item es nuevo y contiene aspectos aclaratorios

                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La EDS se encuentra pavimentada con concreto y correctamente
                impermeabilizada?</li>
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
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">6.1.c
          Manejo de <br> aguas lluvias</button>
        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Requisitos especificos/6.1c.jpeg" class="d-block w-100" alt="Imagen pendiente">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Manejo de aguas lluvias</h5>
              <p class="card-text">Las Estaciones de Servicio deberán contar con un sistema para el manejo de aguas
                lluvias. Solo cuando el área no lo permita, la canal de aguas hidrocarburadas puede captar las aguas
                lluvias. la Rejilla de Aguas Lluvias puede cumplir la función de Canal de Aguas Hidrocarburadas.
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
              <li class="list-group-item">¿La EDS cuenta con el sistema de manejo para las aguas lluvias, siempre y
                cuando esta lo requiera?
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
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">6.1.d Canal
          de aguas hidrocarburadas</button>
        <div class="collapse multi-collapse" id="multiCollapseExample4">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Requisitos especificos/6.1d.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>

            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Canal de agua hidrocarburadas</h5>
              <p class="card-text">El Área de Abastecimiento y la zona de descarga de carro Tanques en las Estaciones de
                Servicio Automotrices deben contar con un Canal de Aguas Hidrocarburadas. El canal de conducción de
                aguas hidrocarburadas debe garantizar la captación de líquidos hidrocarburadas. Para las Estaciones de
                Servicio que a la entrada en vigencia de este Reglamento no cuenten con este canal, las áreas de ingreso
                y circulación deberán ser de concreto, asfalto u otro material impermeable y toda el agua de escorrentía
                deberá dirigirse al sistema de pretratamiento de aguas industriales.
              </p>
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
                        <h5 class="modal-title" id="exampleModalLabel3">Requisito nuevo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este item es nuevo y entrará en vigencia en el 2022
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La EDS cuenta con el canal de aguas hidrocarburadas?</li>
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
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-default btn-lg border border-danger" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">6.1.e
          Requisito con referencia al el numeral 6.1.d</button>
        <div class="collapse multi-collapse" id="multiCollapseExample5">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Requisitos especificos/6.1e.png" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Requisitos para el numeral 6.1.d</h5>
              <p class="card-text">El canal del que trata el ítem anterior no debe captar agua lluvia de escorrentía no
                contaminada con hidrocarburos. Para esto, la losa externa debe contar con una pendiente mínima de 1%
                hacia la Rejilla de Aguas Lluvias perimetral o sumidero. Este punto aplica para Estaciones de Servicio
                que se construyan, modifiquen o amplíen, a partir de la entrada en vigencia de este reglamento.
              </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal4">
                  Este requisito aplica para eds que se construyan, modifiquen o amplíen a partir del 30 de marzo del 2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4">Este requisito es nuevo o contiene aspectos
                          aclaratorios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">Debido a que este item ya se encontraba vigente en el reglamento
                        continuará en vigencia

                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">

              </l1>
              <li class="list-group-item">¿La EDS cumple los requisitos anteriormente descritos para el canal de auas
                hidrocarburadas?</li>
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
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample6">6.1.f
          Prohibicion de abastecimiento a vehículos</button>
        <div class="collapse multi-collapse" id="multiCollapseExample6">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Requisitos especificos/6.1f.PNG" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Prohibición para el abastecimiento de vehículos</h5>
              <p class="card-text">No se permite el abastecimiento de combustibles a los vehículos por fuera del canal
                perimetral, teniendo en cuenta lo indicado por el literal c de este numeral.
              </p>
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
                        <h5 class="modal-title" id="exampleModalLabel5">Vigente desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia

                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Reconoce el canal perimetral de la estación y la prohibición de abastecer
                vehículos por fuera de este?</li>
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
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample8" aria-expanded="false" aria-controls="multiCollapseExample8">6.1.g
          Sistemas de <br> drenaje</button>
        <div class="collapse multi-collapse" id="multiCollapseExample8">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Requisitos especificos/6.1g.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Drenajes de la estación</h5>
              <p class="card-text">Las Estaciones de Servicio Automotrices deberán estar provistas de los siguientes
                sistemas de drenaje: Pluvial, Aguas Residuales Domésticas y Aguas Residuales No Domésticas
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
                        <h5 class="modal-title" id="exampleModalLabel6">Este equisito es nuevo o contiene aspectos
                          aclaratorios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este requisito es nuevo y entrará en vigencia en el 2022
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La EDS cuenta con los tres sistemas de drenaje anteriormente mencionados?
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
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample7" aria-expanded="false" aria-controls="multiCollapseExample7">6.1.h
          Pretratamiento de <br> aguas no domesticas</button>
        <div class="collapse multi-collapse" id="multiCollapseExample7">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/Requisitos especificos/6.1H.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Pretratamiento de aguas no domesticas</h5>
              <p class="card-text">El volumen de agua recolectada en el Área de Almacenamiento y abastecimiento pasará
                por el sistema de pretratamiento de aguas no domésticas, antes de conectarse al alcantarillado municipal
                o como lo estipule la autoridad ambiental de la jurisdicción territorial. También podrá ser almacenado
                en el Sistema de Contención de Derrames de combustible para ser dispuesto de forma adecuada. Por ningún
                motivo se conectarán los drenajes que contengan Aguas Residuales Domésticas -ARD y aguas lluvia con las
                Aguas Residuales No Domésticas -ARnD antes del sistema de pretratamiento
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
                        <h5 class="modal-title" id="exampleModalLabel6">Este equisito es nuevo o contiene aspectos
                          aclaratorios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este requisito es nuevo y entrará en vigencia en el 2022
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿El agua recolectada en el área de abastecimiento pasa pasa por el sistema de
                pretratamiento de aguas o es almacenado en el sistema de contención de derrames?
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