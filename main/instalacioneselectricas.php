<?php include_once 'view/_head.php';

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{
    
?>
<head>
<title>Instalaciones Eléctricas</title>
</head>
<br/>
<div class="titulotarjetas">
    <h2>INSTALACIONES ELÉCTRICAS</h2>
  </div>
  <!--Multiple collapse titles 1-->
  <!--Tarjeta 1-->
  <!--Paquete de 4 tarjetas 1-->
  <div class="row mt-2">
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">4.3.a
          Cumplimiento norma RETIE Instalaciones existentes</button>
        <div class="collapse multi-collapse" id="multiCollapseExample1">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Instalaciones electricuas/Instalaciones electricuas/4.3a/Alcance-retie-600x800.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Condiciones minimas de seguridad</h5>
              <p class="card-text">Toda instalación construida antes del agosto 30 de 2013 que no haya sido ampliada o
modificada, debe garantizar que sus instalaciones eléctricas no representan alto riesgo para la
salud o la vida de las personas o animales, o atenten contra el medio ambiente, y en caso
contrario, debe hacer las modificaciones para eliminar o mitigarel riesgo. Estas instalaciones deben demostrar las condiciones mínimas de seguridad a través de
                una declaración de cumplimiento emitida por un profesional eléctrico con matricula profesional vigente,
                conforme con los requisitos de las instalaciones eléctricas especiales del RETIE vigente. La declaración
                de cumplimiento incluye las Áreas Críticas y clasificadas y deberá estar acompañada de un informe donde
                se
                reporten las actividades de verificación realizadas, mediciones y hallazgos y sus correcciones en las
                instalaciones eléctricas. Esta declaración de cumplimiento deberá realizarse cada 5 años</p>
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
                        <h5 class="modal-title" id="exampleModalLabel1">Este requisito tiene aspectos nuevos o
                          aclaratorios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body"> Este requisito contiene aspectos aclaratorios, que entrarán en vigencia
                        en el 2022
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <l1 class="list-group-item">

              </l1>
              <li class="list-group-item"> ¿Las áreas críticas y clasificadas cuentan con declaración de cumplimiento de
                la norma RETIE, emitida por un profesional eléctrico, vigente por no más de 5 años?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Instalaciones electricas/4.3a/1-RETIE - NTC 2050.pdf" class="card-link"
                target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 2-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">4.3.b
          Cambio norma RETIE instalaciones nuevas</button>
        <div class="collapse multi-collapse" id="multiCollapseExample2">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Instalaciones electricuas/Instalaciones electricuas/4.3b/page_1.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">RETIE-NTC2050</h5>
              <p class="card-text">Las instalaciones construidas en vigencia de la Resolución No. 90708 de agosto 30 de
                2013 deberán dar cumplimiento a la misma, mediante el dictamen de inspección, de conformidad con la
                última
                versión del Reglamento Técnico de Instalaciones Eléctricas RETIE- vigente. </p>
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
                        <h5 class="modal-title" id="exampleModalLabel2">Este requisito tiene aspectos nuevos o
                          aclaratorios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este requisito contiene aspectos aclaratorios, que entrarán en vigencia en el 2022
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item"> ¿Las Instalaciones construídas luego del 30 de marzo de 2022 cuentan con
                declaración de cumplimiento de la norma RETIE vigente, emitida por un profesional eléctrico, vigente por
                no más de 5 años?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Instalaciones electricas/4.3b/2-RETIE - NTC 2050 (2013 o superiores).pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 3-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">4.3.c
          Certificación
          plena a instalaciones ampliadas</button>
        <div class="collapse multi-collapse" id="multiCollapseExample3">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Instalaciones electricuas/Instalaciones electricuas/4.3c/Certificado-retie-.jpg"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">SETIE-NTC-2050</h5>
              <p class="card-text">Requieren Certificación plena las instalaciones ampliadas, con relación al aumento
                del
                80% o más de la capacidad eléctrica instalada, o remodelada, en la vigencia del RETIE, tales como las
                instalaciones en ambientes especiales o clasificados como peligrosos, Estaciones de Servicio y
                almacenamiento de combustibles.
              </p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta priorida ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa3">
                  Este requisito es obligatorio para todas las EDS que se modifiquen o amplien
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa3" tabindex="-1" aria-labelledby="exampleModalLabel3"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Este requisito tiene aspectos nuevos o
                          aclaratorios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                        Este requisito contiene aspectos aclaratorios, que entrarán en vigencia en el 2022
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">Si su estación de servicio fue ampliada por encima del 80% de su capacidad
                eléctrica instalada requiere una certificación plena
              </li>
              <li class="list-group-item">¿Si su estación de servicio requiere una certificación plena, esta ya fue
                tramitada?</li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Instalaciones electricas/4.3c/3-Certificacion plena a instalaciones ampliadas.pdf"
                class="card-link" target="_blank">Ver norma específica</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Tarjeta 4-->
    <div class="col-md-3">
      <div class="d-grid gap-2 py-1">
        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="collapse"
          data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">4.3.d
          Construcción,
          modificación o ampliación</button>
        <div class="collapse multi-collapse" id="multiCollapseExample4">
          <div class="card">
            <!--Carrousel-->
            <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="./src/img/imgtarjetas/generales/Instalaciones electricuas/Instalaciones electricuas/4.3d/Retie.png"
                    class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <!--Titulo principal-->
            <div class="card-body">
              <h5 class="card-title">Construcción, modificación o ampliación</h5>
              <p class="card-text">De conformidad con lo anterior, las instalaciones que se construyan, modifiquen o
                amplíen, y que almacenen y manejen crudos y combustibles líquidos y sus mezclas con biocombustibles,
                deberán ajustarse a los requisitos particulares para instalaciones especiales, establecidas en el RETIE
                vigente, según aplique.</p>
            </div>
            <!--Lista-->

            <ul class="list-group list-group-flush">
              <li class="list-group-item">Este item es de alta priorida ya que entrará en vigencia el 30/03/2022
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-danger mt-1 m-auto" data-bs-toggle="modal"
                  data-bs-target="#exampleModa4">
                  Este requisito es obligatorio para todas las EDS que se modifiquen o amplien
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModa4" tabindex="-1" aria-labelledby="exampleModalLabel4"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Este requisito tiene aspectos nuevos o
                          aclaratorios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Este requisito contiene aspectos aclaratorios, que entrarán en vigencia en el 2022
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">Las instalaciones eléctricas que tengan algunas de las intervenciones
                anteriormente establecidas deberán ajustarse a los requisitos particulares para instalaciones especiales
              </li>
              <li class="list-group-item">¿la estación de servicio cumple con el requisito anteriormente mencionado?
              </li>
            </ul>
            <div class="card-body">
              <a href="./src/doc/Instalaciones electricas/4.3d/4-Construccion modificacion o ampliacion.pdf"
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