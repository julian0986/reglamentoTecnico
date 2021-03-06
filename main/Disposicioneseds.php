<?php include_once 'view/_head.php';

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{
    
    ?>
<head>
<title>Disposiciones para EDS</title>
</head>
<br/>
<div class="titulotarjetas">
    <h2>DISPOSICIONES PARA ESTACIONES DE SERVICIO</h2>
  </div>
  <!--Multiple collapse titles-->
  <!--Tarjeta 1-->
  <div class="row mt-2">
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">5.a Aviso
          de precios</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Disposiciones EDS/5a/TABLERO DE PRECIOS.PNG"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Aviso de precio por cada entrada de la estación de servicio</h5>
              <p class="card-text">La estación de servicio debe contar con un tablero de precios por cada entrada de la
                estación</p>
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
              <l1 class="list-group-item">Los tableros de precios son totems en la entrada de la estación que indican
                los
                precios de los productos que dentro del área de abastecimiento se comercializan la resolución es 181518
                de 2009</l1>
              <li class="list-group-item">¿La estación cuenta con tótems/aviso de precios?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones EDS/5a/1-Resolucion 181518 de 2009 o sus modificatorias.pdf"
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
          data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">5.b
          Bandera mayorista</button>

        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Disposiciones EDS/5b/bandera mayorista.PNG"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Bandera mayorista</h5>
              <p class="card-text">Se deberá exhibir la marca representativa del distribuidor mayorista en la
                cubierta,
                así como en cada uno de los Medidores de Combustibles y en el aviso en donde se indique los precios al
                público.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de prioridad media ya que entrará en vigencia el 30/03/2023
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa2">
                  Este requisito es obligatorio para el 30/03/2023
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">En vigencia desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">Debido a que este item ya se encontraba vigente en el reglamento
                        continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item"><b>*</b> ¿La cubierta del CANOPI expone la bandera mayorista a la que la
                estación
                está suscrita? <br><b>*</b> ¿Los surtidores o dispensadores tienen aviso de precios?
              </li>

            </ul>
            <div class="card-body">
              <a href="./src/doc/Disposiciones EDS/5b/2-Bandera Mayorista.pdf" class="card-link" target="_blank">Ver
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
          data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">5.c
          Entrada a la estación</button>
        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Disposiciones EDS/Disposiciones EDS/5c/edsviaprincipal.jpeg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Entrada a la estación</h5>
              <p class="card-text">El acceso de las Estaciones de Servicio Automotrices Públicas y Fluviales tipo 3,
                deberá estar construido frente a una vía primaria, secundaria o terciaria, de acuerdo a lo estipulado
                por el Ministerio de Transporte. Este requisito aplica a partir de la entrada en vigencia de esta
                Resolución.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad, ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal4">
                  Este requisito es obligatorio para el 30/03/2022
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel4"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4">En vigencia desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia

                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿La EDS cuenta con accesos debidamente adecuados y adaptados a la vía pública
                sobre la que está construída
                (carriles de aceleración, distancia a la vía, estructura de separación, etc)?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Equipos de medicion de combustibles/5d/2-Bitacora de mantenimiento.pdf" class="card-link"
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
          data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">5.d
          Bitácora de mantenimiento</button>
        <div class="collapse multi-collapse" id="multiCollapseExample5">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./src/img/imgtarjetas/generales/Disposiciones EDS/Disposiciones EDS/5d/bitacora.JPG"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Bitácora de mantenimiento</h5>
              <p class="card-text">Las Estaciones de Servicio Públicas y Privadas deberán contar con una bitácora
                (cuaderno, libro, folder, etc.) de Mantenimiento de los equipos que en la estación se encuentren
                instalados.</p>
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
                        <h5 class="modal-title" id="exampleModalLabel5">El equisito es nuevo o tiene aspectos
                          aclaratorios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este item contiene aspectos aclaratorios que entrarán en vigencia en el 2022
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">¿Cuenta con la bitácora de mantenimiento de los equipos?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Equipos de medicion de combustibles/5d/2-Bitacora de mantenimiento.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
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