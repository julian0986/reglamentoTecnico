<?php include_once 'view/_head.php';

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{
    
?>

<head>
   <title>Almacenamiento (EDS Vehículares)</title>
</head>



  <div class="titulotarjetas">
    <h2>ALMACENAMIENTO (EDS Vehículares)</h2>
  </div>
  <!--Multiple collapse titles-->
  <!--Tarjeta 1-->
  <div class="row mt-2">
  <div class="col-md-3">
  </div>
    <div class="col-md-3">
      <div class="d-grid gap-2">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">6.3.a Instalación de tanques subterraneos</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgAutomotriz/AlmacenamientoEDSvehiculares/tanqueSubterraneoAutomotriz.JPG" class="d-block w-100" alt="tanqueSubterraneoAutomotriz">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Tanques subterraneos</h5>
              <p class="card-text">La estación de servicio automotriz deberá instalar tanques de almacenamiento de combustible cilíndrico, horizontales subterráneos que deberán contar con doble pared con espacio anular. Podrán tener varios compartimientos, para almacenar diferentes tipos de productos.</p>
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
              <li class="list-group-item">¿Los tanques subterraneos de la estación cuentan con las caracteristicas anterior mente menciondas?</li>
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
          data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">6.3.b Instalación de tanques superficiales</button>

        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgAutomotriz/AlmacenamientoEDSvehiculares/tanqueSuperficialAutomotriz.JPG"
                    class="d-block w-100" alt="tanqueSuperficialAutomotriz.JPG">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Tanques en superficie</h5>
              <p class="card-text">La instalación de los Tanques de Almacenamiento sobre el nivel del suelo o en superficie se podrá hacer única y exclusivamente: En sitios donde existan condiciones geológicas especiales o elevado nivel freático, siempre que estas condiciones se comprueben mediante la Certificación emitida por un geólogo que acompañe su tarjeta profesional. En estos casos, su instalación deberá estar soportada por un estudio técnico que justifique las condiciones exigidas en este literal.
                
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

              <li class="list-group-item">¿Los tanques superficiales de la estación cumplen la reglamentación anteriormente mencionadas?
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