<?php include_once 'view/_head.php';

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{
    
    ?>
<head>
<title>Pruebas a la EDS</title>
</head>
<br/>
<div class="titulotarjetas">
    <h2>PRUEBAS DE LA ESTACIÓN DE SERVICIO</h2>
  </div>
  <!--Multiple collapse titles 1-->
  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 1-->
  <div class="row mt-2">
    <div class="col-md-4">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-default btn-lg border border-danger" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">5.6.1a
          Integridad del tanque</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas a eds/Pruebas a eds/5.6.1a/hermeticidad-de-tanques4.jpg"
                    class="d-block w-100" alt="Imagen pendiente">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Pruebas de hermeticidad entregadas por el fabricante</h5>
              <p class="card-text">Para las Estaciones de Servicio que se construyan, modifiquen o amplíen bajo la
                vigencia de los presentes requisitos, el fabricante del Tanque debe garantizar la integridad del mismo
                antes de su instalación en la Estación de Servicio. Para el efecto deberá entregar los resultados de la
                realización de la respectiva Prueba de Hermeticidad.</p>
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
                        <h5 class="modal-title" id="exampleModalLabel1"></h5>
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
              <li class="list-group-item">¿Los tanques de la estación cuentan con sus respectivas pruebas de
                hermeticidad?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas a eds/5.6.1a/Integridad del tanque 5.6.1a.pdf" class="card-link"
                target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 2-->
    <div class="col-md-4">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-default btn-lg border border-danger" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">5.6.1b
          Pruebas de hermeticidad</button>
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas a eds/Pruebas a eds/5.6.1b/WhatsApp Image 2021-09-22 at 1.57.45 PM - copia.jpeg"
                    class="d-block w-100" alt="Imagen pendiente">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Pruebas de hermeticidad a EDS</h5>
              <p class="card-text">Se realizarán dos Pruebas de Hermeticidad iniciales. La primera se debe realizar con
                los Tanques fijados en su posición final y antes de realizar el proceso de relleno y tapado del mismo.
                La
                segunda prueba será con líquido almacenado en el Tanque, verificando que no existan fugas y dejando
                constancia de esto para posterior verificación por parte del Organismo de inspección. </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa2">
                  Este requisito aplica para eds que se construyan, modifiquen o amplíen a partir del 30 de marzo del 2022
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
              <li class="list-group-item">¿Los tanques instalados en la estación ya tuvieron la prueba de hermeticidad
                en
                dos fases?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas a eds/5.6.1b/Pruebas de hermeticidad 5.6.1b.pdf " class="card-link"
                target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-4">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-default btn-lg border border-danger" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">5.6.1C
          Pruebas de hermeticidad a tuberías </button>
        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Pruebas a eds/Pruebas a eds/5.6.1c/WhatsApp Image 2021-09-22 at 1.57.45 PM.jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Pruebas de hermeticidad a tuberías</h5>
              <p class="card-text">Se deben realizar dos Pruebas de Hermeticidad a las tuberías en las diferentes etapas
                de instalación, El fabricante debe especificar la presión de diseño máxima a la cual podrá ser sometida
                la
                tubería de producto y la tubería secundaria o de contención.
              </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa3">
                  Este requisito aplica para eds que se construyan, modifiquen o amplíen a partir del 30 de marzo del 2022
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
              <li class="list-group-item">¿Las tuberías de la estación realizaron las pruebas de hermeticidad?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Pruebas a eds/5.6.1c/Pruebas de hermeticidad a tuberias 5.6.1c.pdf" class="card-link"
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