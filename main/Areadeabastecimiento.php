<?php include_once 'view/_head.php';

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{
    
?>
 <head>
<title>Área de abastecimientio</title>
</head>
<br/>
  <div class="titulotarjetas">
    <h2>ÁREA DE ABASTECIMIENTO</h2>
  </div>

  <!--Multiple collapse titles-->

  <!--Tarjeta 1-->
  <div class="row  mt-2">
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-success btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">5.2.a
          Cubierta para isla (Canopy)</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Area de abastecimiento/Area de abastecimiento/5.2a/canopi.JPG"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Canopy</h5>
              <p class="card-text">Contar con una cubierta para las Islas y Carriles de Llenado, para lo cual las
                columnas
                que se utilicen para su soporte serán de material Incombustible. Las columnas de la cubierta no podrán
                usarse como la barrera de protección mencionada en el literal a) del numeral 5. I . La estructura para
                la
                cubierta será de material Incombustible y estará calculada para las diversas cargas que la afecten. </p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de baja prioridad ya que entra en vigencia 03/03/2026
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  Este requisito es obligatorio para el 03/03/2026
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">El requisito es nuevo </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este requisito es nuevo, entrará en vigencia en el 2026
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">El canopy es un techo que cubre el área de abastecimiento, evitando en caso de
                lluvia que los equipos electrónicos se vean expuestos</l1>
              <li class="list-group-item">¿La estación de servicio cuenta con canopy?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Area de abastecimiento/5.2a/1-Cubierta para isla (Canopi).pdf" class="card-link"
                target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 2-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-warning btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">5.2.b
          Tubería de desagüe del canopy</button>

        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Area de abastecimiento/Area de abastecimiento/5.2b/tuberiaCanopi.JPG"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Tuberías de desague</h5>
              <p class="card-text">Las aguas captadas en la cubierta se canalizarán por medio de tuberías, quedando
                prohibida su caída libre.</p>
            </div>
            <!--Lista-->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de prioridad media ya que entrará en vigencia el 30/03/2024
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa2">
                  Este requisito es obligatorio para el 03/03/2024
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Este requisito es nuevo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este requisito es nuevo, entrará en vigencia en el 2024
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">Las tuberías de desague evacúan las aguas lluvias acumuladas en el techo de la
                estación evitando su caída libre</l1>
              <li class="list-group-item">¿El canopy tiene un sistema de drenaje de agua lluvia por medio de
                canales/tubería?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Area de abastecimiento/5.2b/2-Tuberia de desague del Canopi.pdf" class="card-link"
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
          data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">5.2.c
          Pictogramas en área de almacenamiento</button>

        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Area de abastecimiento/Area de abastecimiento/5.2c/Prohibidofumar.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Pictogramas en área de almacenamiento</h5>
              <p class="card-text">Tener avisos visibles en el Área de Almacenamiento que indiquen por medio de
                leyendas,
                instrucciones o pictogramas: </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad ya que entrará en vigencia 30-03-2022
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
                        <h5 class="modal-title" id="exampleModalLabel3">En vigencia desde el reglamento anterior</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Debido a que este item ya se encontraba vigente en el reglamento continuará en vigencia
                      </div>
                    </div>
                  </div>
                </div>
              <li class="list-group-item">i)Prohibido fumar
              </li>
              <li class="list-group-item">ii)Apagar cualquier dispositivo electrónico
              </li>
              <li class="list-group-item">iii)Detener el motor, apagar las luces durante el llenado y accionar el freno
                de
                estacionamiento o emergencia.
              </li>
              <li class="list-group-item">iv)Prohibido suministrar combustible en contenedores inadecuados.
              </li>
              <li class="list-group-item">v) Prohibido suministrar combustible a servicio publico con pasajeros a bordo.
              </li>
              <li class="list-group-item">vi) Prohibido suministrar combustible a motos sin descender de la motocicleta.
              </li>
              <li class="list-group-item">¿El área de abastecimiento de la estación cuenta con estos pictogramas?</li>

            </ul>
            <div class="card-body">
              <a href="./src/doc/Area de abastecimiento/5.2c/3-Pictogramas de informacion en area de almacenamiento.pdf"
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
          data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">5.2.d
          Pictogramas en área de abastecimiento</button>

        <div class="collapse multi-collapse" id="multiCollapseExample4">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Area de abastecimiento/Area de abastecimiento/5.2c/Prohibidofumar.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Pictogramas en área de abastecimiento</h5>
              <p class="card-text">Tener avisos visibles en el Área de Abastecimiento que indiquen por medio de
                leyendas,
                instrucciones o pictogramas lo siguiente: :</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta prioridad Este item es de alta prioridad ya que entrará
                en vigencia 30-03-2022
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
              <li class="list-group-item">i)Prohibido fumar
              </li>
              <li class="list-group-item">ii)Apagar cualquier dispositivo electrónico
              </li>
              <li class="list-group-item">iii)Detener el motor, apagar las luces durante el llenado y accionar el freno
                de
                estacionamiento o emergencia.
              </li>
              <li class="list-group-item">iv)Prohibido suministrar combustible en contenedores inadecuados.
              </li>
              <li class="list-group-item">v) Prohibido suministrar combustible a servicio publico con pasajeros a bordo.
              </li>
              <li class="list-group-item">vi) Prohibido suministrar combustible a motos sin descender de la motocicleta.
              </li>
              <li class="list-group-item">¿El área de abastecimiento de la estación cuenta con estos pictogramas?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Area de abastecimiento/5.2d/4-Pictograma de informacion en area de Abastecimiento.pdf"
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