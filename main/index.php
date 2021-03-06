<?php include_once 'view/_head.php';

if(isset($_SESSION) && !empty($_SESSION['CODSICOM']))
{
    
?>
<head>
<title>Reglamento Tecnico</title>
</head>
<br/>
<div class="container text-center pb-2">
    <h3>REGLAMENTO TÉCNICO APLICABLE A LAS EDS, RESOLUCIÓN 40198 DE 2021</h3>
</div>
  <main>
    <!--Reemplazar por codigo de la imagen-->
    <div class="grilladeimagen" id="grillaprincipal">
      <img src="./src/img/imgppal1.png" class="img-fluid" alt="...">
      <a href="./Areadeabastecimiento.php"  class="point"><img id="tamapunto"
          src="./src/img/punteros/p52.png" alt=""><span class="tooltiptext fuente">5.2 Area de
          abastecimiento</span><span class="numerales"></span></i></a>
      <a href="./Tanquesubterraneos.php"  class="point1"><img src="./src/img/punteros/p531.png"
          alt=""><span class="tooltiptext1 fuente">5.3.1 Tanques Subterraneos</span></i></a>
      <a href="./Almacenamientoytuberias.php"  class="point2"><img src="./src/img/punteros/p53.png"
          alt=""><span class="tooltiptext2 fuente">5.3 Almacenamiento y
          Tuberias</span></i></a>
      <a href="./Disposicioneseds.php"  class="point3"><img src="./src/img/punteros/p5.png" alt=""><span
          class="tooltiptext3 fuente">5. Disposiciónes para Estaciones de
          Servicios</span></i></a>
      <a href="./Disposiciontodasinst.php"  class="point4"><img src="./src/img/punteros/p41.png"
          alt=""><span class="tooltiptext4 fuente">4.1 Disposiciónes Todas las
          Instalaciones</span></i></a>

      <a href="./Pruebasalaeds.php"  class="point5"><img src="./src/img/punteros/p561.png" alt=""><span
          class="tooltiptext5 fuente">5.6.1 Pruebas de la estacion de servicio</span></i></a>

      <a href="./instalacioneselectricas.php"  class="point6"><img src="./src/img/punteros/p43.png"
          alt=""><span class="tooltiptext6 fuente">4.3 Instalaciones Electricas</span></i></a>

      <a href="./Equiposdemedicion.php"  class="point7"><img src="./src/img/punteros/p51.png"
          alt=""><span class="tooltiptext7 fuente">5.1 Equipos de medición de combustible</span></i></a>

      <a href="./Pruebasperiodicas.php"  class="point8"><img src="./src/img/punteros/p562.png"
          alt=""><span class="tooltiptext8 fuente">5.6.2 Pruebas periodicas</span></i></a>

      <a href="./Proteccionincendios.php"  class="point9"><img src="./src/img/punteros/p55.png"
          alt=""><span class="tooltiptext9 fuente">5.5 Sistema contra incendios</span></i></a>

      <a href="./Tuberiasdeconduccion.php"  class="point10"><img src="./src/img/punteros/p42.png"
          alt=""><span class="tooltiptext10 fuente">4.2 Tuberias de conduccción de combustible</span></i></a>

      <a href="./Disposiciontanquessuperficie.php"  class="point11"><img
          src="./src/img/punteros/p532.png" alt=""><span class="tooltiptext11 fuente">5.3.2 Tanques
          Superficiales</span></i></a>

      <a href="./Tanquesfueradeuso.php"  class="point12"><img src="./src/img/punteros/p54.png"
          alt=""><span class="tooltiptext12 fuente">5.4 Tanques fuera de uso</span></i></a>


    </div>
    <div class="styky" id="tituloreglamento">
      <h2 class="text-primary">LISTA DE CHEQUEO, RESOLUCIÓN 40198 DE 2021.</h2>
      <div  id="percent">
        <p>0% Porcentaje de cumplimiento requisitos generales</p>
      </div>
      <div id="myProgress">
        <div id="myBar"></div>
      </div>
    </div>
    <!---Tarjeta Madre que contiene los contenidos generales-->
    <div class="card generales" id="options">
      <h5 class="card-header">REQUISITOS GENERALES</h5>
      <!--Aqui voy a poner la primera barra de progreso-->
     
      <div class="card-body">
        
          <!--Primer acordeon-->
          <div class="accordion-item" id="checklist">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                <b>4.1 DISPOSICIONES TODAS LAS INSTALACIONES</b>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    <b>4.1.a.</b> La ubicación, diseño, construcción, mejoras, Ampliación, calibración volumétrica y
                    pruebas de
                    las
                    plantas de
                    abastecimiento, instalaciones fijas del gran consumidor y Estaciones de Servicio, deberán ceñirse a
                    los
                    presentes
                    requisitos.
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input " type="checkbox" id="flexSwitchCheckDefault1" value="chb1">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault1">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    <b>4.1.b.</b> Las oficinas, talleres, bodegas y demás infraestructuras de las instalaciones deberán
                    estar
                    fabricados
                    con materiales
                    Incombustibles, siempre y cuando estén ubicadas en Áreas Clasificadas y Críticas.
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>

                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault2" value="chb2">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault2">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    <b>4.1.c.</b> Las instalaciones deberán disponer de servicios sanitarios apropiadas para uso
                    exclusivo de sus
                    trabajadores e
                    instalaciones sanitarias independientes para uso de los clientes, localizadas en sitios de fácil
                    acceso.
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault3" value="chb3">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault3">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    <b>4.1.d.</b> Toda Modificación, Ampliación o remodelación en las Áreas Críticas deberá reportarse
                    al
                    Ministerio
                    de Minas y Energía. Igualmente, el cambio de combustible almacenado en los Tanques de
                    Almacenamiento
                    antes de realizarse.
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault4" value="chb4">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault4">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    <b>4.1.e.</b> Las instalaciones deberán tener disponible en todo momento, la documentación
                    actualizada sobre las características, especificaciones y pruebas técnicas de sus equipos.
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault5" value="chb5">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault5">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    <b>4.1.f.</b> Contar con un Área de Almacenamiento temporal de residuos peligrosos y hacer buen
                    manejo de los
                    mismos, conforme con la normatividad ambiental vigente.Toda Modificación, Ampliación o
                    remodelación
                    en las Áreas Críticas deberá reportarse al Ministerio de Minas y Energía. Igualmente, el cambio
                    de
                    combustible almacenado en los Tanques de Almacenamiento antes de realizarse.
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault6" value="chb6">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault6">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    <b>4.1.g.</b> Cuando la instalación cuente con sitio para Estacionamiento de automotores, esta
                    deberá estar
                    ubicada por fuera del Área Critica, y los vehículos deberán disponerse de tal modo que no
                    obstaculicen la circulación. En las áreas que requieran de Estacionamiento temporal, este no
                    debe
                    interferir con la circulación tal modo que no obstaculicen la circulación. En las áreas que
                    requieran de Estacionamiento temporal, este no debe interferir con la circulación inherente a la
                    operación, ni estar ubicado en las Áreas Clasificadas. Se prohíbe el Estacionamiento de
                    vehículos
                    sobre los Tanques de Almacenamiento de combustible. Contar con un Área de Almacenamiento
                    temporal
                    de
                    residuos peligrosos y hacer buen manejo de los mismos, conforme con la normatividad ambiental
                    vigente.Toda Modificación, Ampliación o remodelación en las Áreas Críticas deberá reportarse al
                    Ministerio de Minas y Energía. Igualmente, el cambio de combustible almacenado en los Tanques de
                    Almacenamiento antes de realizarse.
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault7" value="chb7">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault7">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg- bg-opacity-25 border border-danger">
                    <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                    <b>4.1.h.</b> A fin de que se puedan verificar las condiciones de construcción, se deberá tener
                    memorias del
                    proceso de construcción, remodelación, Modificación o Ampliación con dossier de obra con
                    registro
                    fotográfico o videográfico, en especial de la instalación o cambio de los Tanques de
                    Almacenamiento
                    de combustible o tubería de conducción de combustibles. Este punto aplica para instalaciones que
                    se
                    construyan o amplíen a partir de la entrada en vigencia de esta Resolución.
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>
                  <div class="col-2 bg- bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault8" value="chb8">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault8">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg- bg-opacity-25 border border-danger">
                    <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                    <b>4.1.i.</b> El constructor de instalaciones deberá entregar el Certificado de Primera Parte de la
                    construcción,
                    remodelación o modificación, de acuerdo a la ISO/IEC 17050-1 Y 17050-2 o la norma que lo
                    modifique
                    o
                    sustituya. La instalación de los tanques y la tubería de distribución y desfogue deberá contar
                    con
                    un informe de interventoría. Este punto aplica para instalaciones que se construyan, amplíen, o
                    modifiquen a partir de la entrada en vigencia de este reglamento.
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>
                  <div class="col-2 bg- bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault9" value="chb9">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault9">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    <b>4.1.j.</b> Las instalaciones que almacenen combustible diésel, biodiesel o sus mezclas, deberán
                    cumplir con
                    la
                    Norma técnica Colombiana NTC 6032. BUENAS PRÁCTICAS DE MANEJO PARA EL BIODIÉSEL Y LAS MEZCLAS
                    DIÉSEL-BIODIÉSEL EN LA CADENA DE DISTRIBUCIÓN DE COMBUSTIBLES LÍQUIDOS DERIVADOS DE PETRÓLEO EN
                    COLOMBIA, y llevar el Registro De Evidencias de Aplicación de las Buenas Practicas para el
                    Manejo
                    de
                    Biodiesel y las Mezclas Diesel — Biodiesel.
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault10" value="chb10">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault10">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    <b>4.1.k.</b> Las instalaciones que almacenen gasolina, etanol anhidro desnaturalizado o sus
                    mezclas, deberán
                    cumplir con la Norma técnica Colombiana NTC 6198 BUENAS PRACTICAS DE MANEJO DEL ETANOL ANHIDRO
                    DESNATURALIZADO Y SUS MEZCLAS CON GASOLINA EN LA CADENA DE DISTRIBUCIÓN DE COMBUSTIBLES EN
                    COLOMBIA.
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault11" value="chb11">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault11">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    <b>4.1.l.</b> El personal que intervenga en operaciones de almacenamiento y despacho de combustible
                    deberá
                    estar
                    entrenado y capacitado en descarga de combustible, despacho de combustible, atención al cliente
                    y,
                    detección de Condiciones Subestándares con base en los requisitos técnicos del presente
                    reglamento
                    técnico
                    <a href="./Disposiciontodasinst.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault12" value="chb12">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault12">No/Si</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <!-- Segundo acordeon-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingtrece">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapsetrece" aria-expanded="true" aria-controls="collapsetrece">
              <b>4.2 TUBERÍAS DE CONDUCCIÓN DE COMBUSTIBLE</b>
            </button>
          </h2>
          <div id="collapsetrece" class="accordion-collapse collapse" aria-labelledby="headingtrece"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>4.2</b> Las tuberías deben ser de doble contención con espacio anular (intersticial) continuo.
                  <a href="./Tuberiasdeconduccion.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault13" value="chb13">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault13">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <h5> Requisito para EDS nueva o que se amplien o modifiquen</h5>
                  <b>4.2.a.</b> Los sistemas de tuberías subterráneas están conformados por la tubería, conexiones y
                  accesorios
                  que
                  permiten la conducción de combustible. La tubería y sus accesorios deben estar certificados en las
                  normas UL 971 o EN 14125. Las tuberías deben ser de doble contención con espacio anular
                  (intersticial) continuo.
                  Si se interrumpe la continuidad de la doble contención, el sistema deberá contar con accesorios
                  certificados bajo la misma norma que se haya seleccionado, que se encuentren avalados por cada
                  fabricante y que permitan la transición a acoples, uniones roscadas, codos, conectores flexibles,
                  entre otros accesorios. En estos casos, se debe instalar un contenedor de derrames que pueda ser
                  inspeccionado de manera tal que el método de instalación utilizado asegure la resistencia,
                  estanqueidad y hermeticidad del sistema, sin que éste pueda verse afectado por los distintos
                  combustibles que se tenga previsto conducir.
                  Se debe garantizar que los materiales sellantes a utilizar en las uniones de tuberías y accesorios
                  sean resistentes a las mezclas de alcohol carburante y Biodiesel en las proporciones de mezcla
                  reglamentadas.
                  Se prohíbe el uso de cinta teflón, ya que puede taponar o causar mal funcionamiento en equipos.
                  <a href="./Tuberiasdeconduccion.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault14" value="chb14">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault14">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <h5> Requisito para EDS nueva o que se amplien o modifiquen</h5>
                  <b>4.2.b.</b> Se deberá mantener la siguiente información sobre la tubería, suministrada por el
                  fabricante: 1.
                  Nombre del fabricante, 2. Fecha de fabricación, 3. Dimensiones: diámetro, 4. Procedimiento y
                  periodicidad para las Pruebas de Hermeticidad en la tubería primaria y secundaria, 5. Fecha de
                  instalación, 6. Norma o código de fabricación, 7. Documento que indique la de resistencia química
                  para el manejo de mezclas obligatorias y flexibles de biocombustibles.
                  <a href="./Tuberiasdeconduccion.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault15" value="chb15">
                  </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault15">No/Si</label>
                    </div>
                  </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>4.2.c.</b> La instalación del sistema de tubería debe ser lo suficientemente flexible para soportar
                  y a su vez
                  minimizar los golpes de ariete y sobre presiones a los que esté expuesto durante la operación.

                  <a href="./Tuberiasdeconduccion.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault16" value="chb16">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault16">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>4.2.d.</b> En el caso de equipos surtidores, la tubería instalada bajo el nivel del piso debe ser
                  enterrada,
                  con una inclinación de al menos 1% con dirección al tanque (más alta que la tubería en el equipo
                  de
                  medición), protegida con un lecho de material inerte y estar protegida contra la corrosión. Se
                  recomienda instalar la tubería de conducción de combustibles dentro de otra tubería que permita el
                  remplazo y reparaciones fácilmente en caso de falla.
                  <a href="./Tuberiasdeconduccion.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault17" value="chb17">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault17">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>4.2.e.</b> Las tuberías aéreas deberán ser fácilmente inspeccionables y contener señalización y
                  sentido de
                  flujo; se protegerán con pinturas antioxidantes con características apropiadas al ambiente donde
                  se
                  ubiquen.
                  <a href="./Tuberiasdeconduccion.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault18" value="chb18">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault18">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Tercer acordeon-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingeight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseeight" aria-expanded="true" aria-controls="collapseeight">
              <b>4.3 INSTALACIONES ELÉCTRICAS</b>
            </button>
          </h2>
          <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>4.3.a.</b> Estas instalaciones deben demostrar las condiciones mínimas de seguridad a través de una
                  declaración
                  de cumplimiento emitida por un profesional eléctrico con matricula profesional vigente, conforme
                  con
                  los requisitos de las instalaciones eléctricas especiales del RETIE vigente. La declaración de
                  cumplimiento incluye las Áreas Criticas y clasificadas y deberá estar acompañada de un informe
                  donde
                  se reporten las actividades de verificación realizadas, mediciones y hallazgos y sus correcciones
                  en
                  las instalaciones eléctricas. Esta declaración de cumplimiento deberá realizarse cada 5 años.
                  <a href="./instalacioneselectricas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault19" value="chb19">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault19">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>4.3.b.</b> Las instalaciones construidas en vigencia de la Resolución No. 90708 de agosto 30 de
                  2013 deberán
                  dar cumplimiento a la misma, mediante el dictamen de inspección, de conformidad con la última
                  versión del Reglamento Técnico de Instalaciones Eléctricas RETIE- vigente.
                  <a href="./instalacioneselectricas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault20" value="chb20">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault20">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>4.3.c.</b>
                  Requieren Certificación plena las instalaciones ampliadas, con relación al aumento del
                  80% o más
                  de
                  la capacidad eléctrica instalada, o remodelada, en la vigencia del RETIE, tales como las
                  instalaciones en ambientes especiales o clasificados como peligrosos, Estaciones de Servicio y
                  almacenamiento de combustibles.
                  <a href="./instalacioneselectricas.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault21" value="chb21">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault21">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>4.3.d.</b> De conformidad con lo anterior, las instalaciones que se construyan, modifiquen o
                  amplíen, y que
                  almacenen y manejen crudos y combustibles líquidos y sus mezclas con biocombustibles, deberán
                  ajustarse a los requisitos particulares para instalaciones especiales, establecidas en el RETIE
                  vigente, según aplique.
                  <a href="./instalacioneselectricas.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault22" value="chb22">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault22">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Cuarto acordeon-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
              <b>5. DISPOSICIONES PARA ESTACIONES DE SERVICIO</b>
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.a</b> Aviso de precio por cada entrada a la estación de servicio.
                  <a href="./Disposicioneseds.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" value="chb23">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault23">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.b</b> Se deberá exhibir la marca representativa del distribuidor mayorista en la cubierta, así
                  como en
                  cada uno de los Medidores de Combustibles y en el aviso en donde se indique los precios al
                  público.
                  <a href="./Disposicioneseds.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault24" value="chb24">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault24">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.c</b> El acceso de las Estaciones de Servicio Automotrices Públicas y Fluviales tipo 3, deberá
                  estar
                  construido frente a una vía primaria, secundaria o terciaria, de acuerdo a lo estipulado por el
                  Ministerio de Transporte. Este requisito aplica a partir de la entrada en vigencia de esta
                  Resolución.
                  <a href="./Disposicioneseds.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault25" value="chb25">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault25">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.d</b> Las Estaciones de Servicio Públicas y Privadas deberán contar con una bitácora (cuaderno,
                  libro,
                  folder, etc.) de Mantenimiento de los equipos que en la estación se encuentren instalados.
                  <a href="./Disposicioneseds.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault26" value="chb26">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault26">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Quinto acordeon-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
              <b>5.1 EQUIPOS DE MEDICIÓN DE COMBUSTIBLE</b>
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.1.a</b> Podrán estar instalados sobre una base de concreto o de cualquier otro material no
                  inflamable, en
                  todo caso debe contar con barreras de protección en acero al carbón schedule-40, de mínimo 4
                  pulgadas ± 10% de diámetro, empotradas y fundidas en concreto, con una profundidad mínima de 40
                  centímetros, y una altura mínima de 85 cm del piso. Ubicadas en los extremos de la Isla o equipos
                  para impedir la aproximación de un vehículo hasta el Medidor de Combustible.
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault27" value="chb27">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault27">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.1.b</b> En la base de cada uno de los dispensadores, en todas las líneas de conducción de
                  combustible de
                  los
                  equipos dispensadores (sistemas de presión o bomba sumergible) y los sistemas de succión que
                  utilicen tanque elevado para su operación, se deberá instalar una válvula automática de cierre de
                  emergencia rígidamente anclado (válvula de impacto). Esta válvula tendrá incorporado un fusible u
                  otro dispositivo de accionamiento que la cierre en caso de exposición a incendios o fuertes
                  impactos. Adicionalmente, de beberá contar con un mecanismo de cierre en caso de que un golpe
                  afecte
                  físicamente su integridad. Las válvulas deberán estar ancladas de acuerdo a las recomendaciones
                  del
                  fabricante. Aquellas estaciones de servicio que no cumplan con el presente requisito, se les
                  otorgará un plazo de dos (2) años a partir de la entrada en vigencia del presente reglamento para
                  su
                  cumplimiento.
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault28" value="chb28">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault28">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.1.c</b> El equipo de medición deberá estar anclado según las recomendaciones del fabricante y
                  deberá
                  contar
                  con una instalación que asegure la descarga efectiva de la energía estática. Todo equipo metálico
                  donde pudiera estar presente o fluir una mezcla inflamable debe conectarse a tierra.
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault29" value="chb29">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault29">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.1.d</b> Seguir las especificaciones técnicas sobre la instalación, puestas en marcha, operación y
                  Mantenimiento recomendadas por el proveedor o el fabricante.
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault30" value="chb30">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault30">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.1.e</b> Se deberán instalar pistolas que minimicen los picos de presión y la generación de golpe
                  de ariete
                  y
                  con control de goteo. Las pistolas de llenado deberán contar con un sistema de control y
                  protección
                  de sobrellenado y de seguridad.
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault31" value="chb31">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault31">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.1.f</b> En la manguera del Medidor de Combustible deberá colocarse un dispositivo de rotura de
                  emergencia
                  (breakaway), resistente al producto que vaya a manejar, que interrumpa el flujo de combustible en
                  caso de que la manguera sea halada accidentalmente, cerrando tanto el extremo proveniente del
                  dispensador/surtidor como el conjunto de manguera arrancado por el jalón. Este dispositivo deberá
                  ser instalado entre una manguera corta proveniente del Medidor de Combustible y la manguera larga
                  que llegará hasta el vehículo. Por ningún motivo se podrá instalar mediante acoples rígidos
                  directamente en el dispensador. Aquellas estaciones de servicio que no cumplan con el presente
                  requisito, se le otorgará un plazo de un (1) año a partir de la entrada en vigencia de los
                  presentes
                  requisitos para su cumplimiento.
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault32" value="chb32">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault32">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.1.g</b> Las mangueras serán resistentes a combustibles, con alma de acero que aseguren que la
                  conexión a
                  tierra sea firme, no deben tener empalmes, y deberán contar con un destorcedor (Swivel) que
                  permita
                  a la pistola adecuarse a la posición de carga sin comprometer la manguera por fuerzas de torsión.
                  Aquellas estaciones de servicio que no cumplan con el presente requisito, se le otorgará un plazo
                  de
                  un (1) año a partir de la entrada en vigencia de este reglamento
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault33" value="chb33">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault33">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.1.h</b> Se prohíbe el uso de cinta de teflón en las uniones, ya que esta puede generar perdida de
                  continuidad, en su reemplazo deben utilizarse sellantes que sean resistentes a las mezclas de
                  alcohol carburante y biodiesel en las proporciones de mezcla reglamentadas.
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault34" value="chb34">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault34">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.1.i</b> Cada Medidor de Combustibles debe contar con una caja de contención de derrames, debe ser
                  de
                  material impermeable y resistentes al/los producto(s) que vaya a contener. Las cajas de contención
                  que impidan la contención de derrames o fugas de combustibles deberán ser reemplazadas. Las cajas
                  deben ser de un tamaño suficiente para que el sistema que tiene contacto con el combustible quede
                  completamente contenida en el área de la caja. Las cajas deben garantizar estanqueidad, se prohíbe
                  el uso de sellante no resistente a hidrocarburos.
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault35" value="chb35">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault35">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.1.j</b> En las Estaciones de Servicio Públicas, el equipo de medición debe indicar, de manera
                  visible al
                  público, el precio, el tipo y la cantidad de producto que expende, en términos de volumen.
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault36" value="chb36">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault36">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.1.k</b> Los equipos de medición deben estar debidamente calibrados, de manera que la cantidad de
                  combustibles líquidos entregados corresponda a la indicada por el medidor.
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault37" value="chb37">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault37">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.1.l</b> El equipo de medición debe situarse alejado de Fuentes de Ignición, a una distancia
                  mínima de 6 m
                  horizontalmente en todas las direcciones de la caja contenedora y hasta 0,45 m sobre el nivel del
                  suelo.
                  <a href="./Equiposdemedicion.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault38" value="chb38">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault38">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Sexto acordeon-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              <b>5.2 ÁREA DE ABASTECIMIENTO</b>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-10 bg-success bg-opacity-25 border border-success">
                  <b>5.2.a</b> Contar con una cubierta para las Islas y Carriles de Llenado, para lo cual las columnas
                  que se
                  utilicen para su soporte serán de material Incombustible. Las columnas de la cubierta no podrán
                  usarse como la barrera de protección mencionada en el literal a) del numeral 5. I . La estructura
                  para la cubierta será de material Incombustible y estará calculada para las diversas cargas que la
                  afecten.
                  <a href="./Areadeabastecimiento.php">Mas información</a>
                </div>
                <div class="col-2 bg-success bg-opacity-25 border border-success">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault39" value="chb39">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault39">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.2.b</b> Las aguas captadas en la cubierta se canalizarán por medio de tuberías, quedando
                  prohibida su
                  caída
                  libre.
                  <a href="./Areadeabastecimiento.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault40" value="chb40">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault40">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.2.c</b> Tener avisos visibles en el Área de Almacenamiento que indiquen por medio de leyendas,
                  instrucciones
                  o pictogramas:
                  i. No fumar I Prohibido fumar.
                  ii. Apagar celulares o cualquier dispositivo electrónico o eléctrico.
                  <a href="./Areadeabastecimiento.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault41" value="chb41">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault41">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.2.d</b> Tener avisos visibles en el Área de Abastecimiento que indiquen por medio de leyendas,
                  instrucciones
                  o pictogramas lo siguiente:
                  i. No fumar/prohibido fumar
                  ii. Detener el motor, apagar las luces durante el llenado y accionar el freno de estacionamiento o
                  emergencia.
                  iii. Apagar celulares o cualquier dispositivo electrónico o eléctrico mientras se efectúa el
                  llenado
                  del tanque de combustible del vehículo.
                  iv. Prohibido suministrar combustible en contenedores inadecuados.
                  v. Prohibido suministrar combustible a servicio publico con pasajeros a bordo.
                  vi. Prohibido suministrar combustible a motos sin descender de la motocicleta.
                  <a href="./Areadeabastecimiento.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault42" value="chb42">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault42">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Septimo acordion-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <b>5.3 ALMACENAMIENTO Y TUBERÍAS DE CONDUCCIÓN DE COMBUSTIBLE</b>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-10 bg-light bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>5.3.a</b> El sistema de tuberías enterradas y los accesorios utilizados en esta para la conducción
                  de los
                  combustibles deben garantizar la doble contención con materiales resistentes a los productos que
                  se
                  vayan a manejar.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault43" value="chb43">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault43">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-success bg-opacity-25 border border-success">
                  <b>5.3.b</b> Todo Tanque de Almacenamiento debe contar con un mecanismo para la prevención de
                  sobrellenado.
                  Los tanques de almacenamiento subterráneos instalados a partir de la entrada en vigencia de este
                  reglamento deberán contar con válvula de sobrellenado hermética a vapores, inspeccionable en el
                  tubo
                  de descarga de combustible, con cierre automático al paso de combustible. Deberá cumplir con la
                  norma UL 2583 o su sucesoras. El cierre de esta válvula deberá graduarse a un nivel máximo de 95%
                  de
                  la capacidad del tanque. El tubo de llenado o (riser) de estos tanques deben instalarse en el
                  contenedor de derrames y finalizar en el lomo del tanque, la válvula de sobrellenado será la
                  encargada de conducir el combustible hasta el fondo del tanque.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg-success bg-opacity-25 border border-success">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault44" value="chb44">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault44">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.c</b> Los tanques de almacenamiento deben estar numerados e identificados con la capacidad de
                  almacenamiento operativo y el tipo de combustible almacenado, de acuerdo a las tablas de aforo.
                  Además, los tanques superficiales deben contar con un rótulo de identificación de riesgos conforme
                  al Sistema Globalmente Armonizado de Clasificación y Etiquetado de Productos Químicos (SGA),
                  Decreto
                  1496 de 2018.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault45" value="chb45">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault45">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.3.d</b> Se prohíbe el almacenamiento de combustibles en Tanques Estacionarios en Estaciones de
                  Servicio.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault46" value="chb46">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault46">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.e</b> En los tanques subterráneos, deberán existir tubos de respiración o venteo por
                  tanque/compartimiento. Las bocas de los tubos de respiración de los tanques deberán salir al aire
                  libre, por encima de tejados, placas o planchas mínimo 1,5 m ± 10% y alejadas de conducciones
                  eléctricas a mínimo 3 m ± 10%.Así mismo, cuando se almacenen líquidos clase l, las tuberías de
                  venteo deberán contar con una válvula de presión vacío para evitar daños al tanque y pérdida por
                  evaporación y contaminación. Las válvulas de presión vacío deben señalar el rango de operación
                  entre
                  2.5" a 6" pulgadas de columnas de agua para presión y un rango de 6" a IO" columnas de agua para
                  vacío. Esta conformidad deberá estar avalada por el fabricante. Las tuberías de venteo deben estar
                  ubicadas a no menos de 3.6 m por encima del nivel del suelo y a no más de 7 m ± IO % por encima de
                  los Tanques de Almacenamiento. Las tuberías de venteo deben estar identificadas y localizarse
                  donde
                  los vapores no se acumulen o lleguen a una instalación insegura, entren por aberturas de los
                  edificios adyacentes o sean atrapados bajo los aleros, y deben estar al menos a una distancia de 3
                  m
                  de las aberturas de cualquier edificio.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault47" value="chb47">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault47">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.f</b> El diámetro de tubo de respiración (desfogue) del tanque no podrá ser menor a % del
                  diámetro de la
                  boca de llenado, pero en ningún caso inferior a treinta y dos (32) mm (1 ,25 pulgadas).

                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault48" value="chb48">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault48">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.3.g</b> El tanque diseñado y previsto para uso en superficie no debe utilizarse como tanque
                  subterráneo,
                  así
                  como el tanque diseñado y previsto para uso subterráneo no debe usarse como tanque en Superficie.
                  Se
                  prohíbe el uso de tanques cisterna para el almacenamiento de combustible en estaciones de
                  servicio.
                  Los tanques diseñados para transporte instalados para estaciones de servicio deberán ser
                  reemplazados en un tiempo no mayor a 6 meses a partir de la entrada en vigencia de los presentes
                  requisitos.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault49" value="chb49">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault49">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.h</b> Las Estaciones de Servicio que se construyan, modifiquen o amplíen deberán instalar
                  tanques
                  certificados por organismo de certificación de producto acreditados bajo la norma ISO/IEC 17065 o
                  que la modifique o sustituya.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault50" value="chb50">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault50">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.3.i</b> En la Estación de Servicio nuevas, modificadas o ampliadas después de la entrada en
                  vigencia del
                  presente reglamento técnico, se deberá mantener la siguiente información sobre los Tanques de
                  Almacenamiento, suministrada por el fabricante:
                  i. Nombre del fabricante.
                  ii. Identificación del tanque (número de serie)
                  iii. Fecha de fabricación.
                  iv. Fecha de instalación.
                  v. Documento que indique las pruebas de construcción del tanque.
                  vi. Dimensiones del tanque: diámetro y altura en metros (m), con su respectivo esquema.
                  vii. Manual de instalación.
                  viii. Producto(s) que pueden ser almacenados en el tanque.
                  ix. Tabla de aforos expedida por personal competente.
                  x. Procedimiento y periodicidad para las pruebas de hermeticidad recomendado por el fabricante.
                  xi. Volumen en litros y galones.
                  xii. Documento que indique la resistencia química para el manejo de mezclas obligatorias y
                  flexibles
                  de biocombustibles.
                  xiii. Garantía de calidad del tanque.
                  xiv: Declaración para uso subterráneo o en superficie.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault51" value="chb51">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault51">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.j</b> Las Estaciones de Servicio que operan antes de la entrada en vigencia de este Reglamento
                  tienen un
                  (1) año para contar con una ficha técnica de cada Tanque de Almacenamiento, con la siguiente
                  información como mínimo:
                  i. Material del tanque.
                  ii. Dimensiones del tanque: diámetro y altura en metros (m), con su respectivo esquema.
                  iii. Producto almacenado.
                  iv. Tabla de aforo por método volumétrico.
                  v. Declaración para uso subterráneo o en superficie.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault52" value="chb52">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault52">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>5.3.k</b> La instalación de los Tanques de Almacenamiento, de sus tuberías y accesorios, debe
                  cumplir con el
                  procedimiento y recomendaciones impartidas por el fabricante.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault53" value="chb53">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault53">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>5.3.l</b> Los tanques instalados en Estaciones de Servicio nuevas, modificadas o ampliadas después
                  de la
                  entrada en vigencia del presente reglamento técnico deberán estar diseñados y construidos conforme
                  a
                  normas internacionales de amplio reconocimiento, entre otras, como las siguientes, según
                  corresponda.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault54" value="chb54">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault54">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.3.m</b> La instalación debe contar con un sistema de control de Inventarios confiable. El
                  conjunto de
                  normas
                  y procedimientos de control de inventario deberá estar documentado y el personal que intervenga en
                  la operación de éste deberá estar capacitado. Se debe realizar la declaración de información del
                  inventario de los días 7, 14, 21 y 28 de cada mes, en el SICOM, a más tardar 2 días hábiles
                  después.
                  <a href="./Almacenamientoytuberias.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault55" value="chb55">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault55">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Octavo acordeon-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
              <b>5.3.1 INSTALACIÓN DE TANQUES SUBTERRÁNEOS</b>
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>5.3.1.a</b> Los Tanques de Almacenamiento a instalar deberán contar con doble pared con espacio
                  anular. El
                  tanque de doble pared con un espacio anular (intersticial), contará con un sistema de detección de
                  fugas en el espacio anular, espacio que se encuentra entre la pared del tanque primario (interno)
                  y
                  secundario (externo), de tal forma que se puedan detectar fugas durante su vida útil. Lo anterior,
                  con el objeto de evitar al contaminación al subsuelo y los mantos freáticos.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault56" value="chb56">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault56">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>5.3.1.b</b> Todos los ingresos al tanque a nivel del piso deberán contar con un chaflán que
                  sobresalga del
                  piso
                  por lo menos 3 cm, o deberán contar con tapas que garanticen su hermeticidad, para evitar el
                  ingreso
                  de agua de escorrentía.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault57" value="chb57">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault57">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>5.3.1.c</b> Se permitirá el revestimiento o repotenciación de Tanques de Almacenamiento de
                  combustible,
                  siempre
                  y cuando se cumpla con el criterio de la doble pared, con la fabricación de una cámara anular
                  uniforme al interior del tanque, y a través de procedimientos de reconocida experiencia hasta que
                  se
                  cuente con un procedimiento reglamentado, que garanticen la seguridad de las personas y los bienes
                  en todo momento.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault58" value="chb58">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault58">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <H5> Requisito para EDS nueva o que se amplien o modifiquen</H5>
                  <b>5.3.1.d</b> Los tanques revestidos o repotenciados deberán revestirse o repotenciarse conforme a
                  normas
                  internacionales de amplio reconocimiento, entre otras, como las siguientes:
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault59" value="chb59">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault59">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.1.e</b> Toda Estación de Servicio con tanques subterráneos deberá instalar Pozos de Monitoreo
                  y/u
                  observación.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault60" value="chb60">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault60">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.1.f</b> Los tanques subterráneos deben contar con boca de visita de descarga o llenado,
                  cumpliendo los
                  siguientes aspectos:
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault61" value="chb61">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault61">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.1.fI</b> El Contenedor de Derrames (spill container) en la boca de descarga o llenado deberá
                  ser de doble
                  contención y contar con una válvula de drenaje. El espacio anular entre el contenedor primario y
                  el
                  secundario deberá estar herméticamente sellado. El contenedor secundario deberá contar con un
                  mecanismo para detectar presencia de líquido en su interior.
                  Los contenedores de derrames de pared siempre instalados antes de la entrada en vigencia de los
                  presentes requisitos podrán continuar su uso siempre y cuando estas garanticen estanqueidad
                  definida
                  en la prueba del literal h) i) del numeral 5.6.2 o hasta el daño del mismo, momento en el cual
                  deberán ser reemplazados no se podrán reparar.
                  Los contenedores de derrame que se instalen después de publicarse la presente resolución deberán
                  cumplir con la norma UL-2447 y contar con válvula de sobrellenado en el tubo de descarga que
                  cumpla
                  con la norma UL 2583 o sus sucesoras.
                  Los contenedores de derrame de pared instalados antes de la entrada en vigencia de los presentes
                  requisitos podrán continuar su uso solo si garantizan la estanqueidad definida en la prueba del
                  literal h) ii) del numeral 5.6.2 o hasta el daño del mismo, momento en el cual deberán ser
                  reparados
                  o reemplazados.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault62" value="chb62">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault62">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.1.fII</b> El acople de descarga además de ser hermético debe permitir movimiento tipo
                  rodamiento
                  (destorcedor)
                  y debe cumplir con el criterio UL 2583 0 sus sucesores, para evitar que la fuerza ejercida por el
                  personal que conecta y desconecta la manguera en cada carga de combustible afloje el acople desde
                  su
                  baso y pueda generar pérdida de hermeticidad del sistema y un posible punto de fuga de combustible
                  hacia el subsuelo. Se otorga un plazo de 1 año a partir de la entrada en vigencia de este
                  Reglamento
                  para su cumplimiento.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault63" value="chb63">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault63">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.1.fIII</b> La boca de llenado deberá contar con tapones herméticos.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault64" value="chb64">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault64">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.1.fIV</b> Si se instala el sistema de llenado remoto, éste deberá ser inspeccionable y
                  garantizar que en
                  caso
                  de fuga no se contamine el suelo. La boquilla se podrá retirar a una distancia necesaria que
                  permita
                  mantener una gradiente mínima del 1% hacia la toma del tanque respectivo, y a una distancia mínima
                  de tres (3) metros con respecto a una construcción.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault65" value="chb65">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault65">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <b>5.3.1.g</b> Todo Tanque de Almacenamiento nuevo o intervenido a partir de la expedición de este
                  Reglamento,
                  deberá contar con bocas de inspección del tipo "Acceso hombre" (Manhole), conformado por los
                  siguientes elementos. i. La tapa brida (Manhole de Tanque); ii. El contenedor de derrames de
                  tanque
                  o caja de tanque; iii. El Manhole de piso:
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault66" value="chb66">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault66">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-success bg-opacity-25 border border-success">
                  <b>5.3.1.h</b> Cuenta con una caja de contención de derrames de tanque o caja de tanque, en la cual
                  quedará
                  contenida la bomba sumergible y tuberías de succión, esta caja debe impedir que ingrese agua del
                  exterior y que puedan salir posibles derrames de combustible. Deberá estar fabricada en material
                  impermeable que garantice estanqueidad.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-success bg-opacity-25 border border-success">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault67" value="chb67">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault67">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-success bg-opacity-25 border border-success">
                  <b>5.3.1.hII</b> Las cajas de contención de derrames de tanque o caja de tanque instalados antes de la
                  entrada en
                  vigencia de los presentes requisitos podrán continuar su uso solo si garantizan la estanqueidad
                  definida en la prueba del literal h) iii) del numeral 5.6.2 o hasta el daño del mismo, momento en
                  el
                  cual deberán ser reparados o reemplazados.
                  Las cajas de contención de derrames que se instalen después de la entrada en vigencia de los
                  presentes requisitos deberán contar con paredes planas donde fijar las botas de la tubería a fin
                  de
                  garantizar el sello hermético, deberá estar fabricada en material impermeable que garantice
                  estanqueidad y siguiendo los lineamientos de la norma UL 2447. El sello de la bota de la tubería
                  saliente deberá instalarse en una cara plana de contenedor de derrames garantizando el sellado
                  hermético del mismo, se prohíbe su instalación en paredes cilíndricas ya que no se garantizaría el
                  sello.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-success bg-opacity-25 border border-success">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault68" value="chb68">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault68">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.3.1.i</b> Cuando en un tanque subterráneo se requiera la instalación de tuberías para
                  interconectar uno o
                  más
                  tanques, éstas deberán cumplir con la doble contención resistente a los productos que se manejen.
                  Si
                  el diseño no cumple con la doble contención, queda prohibido el uso de este sistema.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault69" value="chb69">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault69">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.1.j</b> Las instalaciones deben disponer de un punto de conexión a tierra para el camión
                  cisterna durante
                  la
                  actividad de descargue.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault70" value="chb70">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault70">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.3.1.k</b> Los tanques no podrán estar enterrados bajo ninguna Edificación, excepto el techo que
                  cubre el
                  Área
                  de Abastecimiento (Canopy). Los extremos de los tanques deben estar al menos a un (1) metro ± 10%
                  de
                  los cimientos de la Edificación más próxima o línea de propiedad sobre la cual se puede llegar a
                  construir.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault71" value="chb71">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault71">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.3.1.l</b> La parte superior de los tanques subterráneos en una Estación de Servicio no podrá
                  estar a menos
                  de
                  cuarenta y cinco (45) cm bajo el nivel del piso. En todo caso deberá seguir la recomendación del
                  fabricante.
                  <a href="./Tanquesubterraneos.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault72" value="chb72">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault72">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Noveno acordeon-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
              <b>5.3.2 INSTALACIÓN DE TANQUES EN SUPERFICIE</b>
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.a</b> La capacidad de almacenamiento total no deberá exceder los 150.000 litros. Las
                  instalaciones de
                  mayor capacidad deberán cumplir con lo estipulado en el numeral 11 Plantas de abastecimiento con
                  excepción de los literales a, f, h, i, j del numeral 11.1; literales d, e, f del numeral 11.2,
                  numeral 11.4 y literales i, k, l del numeral 11.7.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault73" value="chb73">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault73">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.3.2.b</b> Los Tanques de Almacenamiento deben ser cilíndricos. El tanque diseñado para el
                  transporte de
                  hidrocarburos no podrá utilizarse como Tanque de Almacenamiento de combustible en Estaciones de
                  Servicio. Los tanques diseñados para transporte instalados en estaciones de servicio deberán ser
                  reemplazados en un tiempo no mayor a 6 meses a partir de la entrada en vigencia de los presentes
                  requisitos.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault74" value="chb74">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault74">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.c</b> Los tanques en Superficie metálica deberán estar protegidos externamente con pinturas
                  anticorrosivas
                  y/o con Protección Catódica. Los tanques de fibra de vidrio superficiales, deberán ser protegidos
                  externamente contra rayos UV.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault75" value="chb75">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault75">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.d</b> Los Tanques de Almacenamiento ubicados en superficie deberán contar con un Recinto de
                  Contención
                  impermeable y tuberías de respiración.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault76" value="chb76">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault76">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.e</b> La capacidad mínima del recinto de contención es del 100% del volumen del tanque que
                  albergue. Si
                  el
                  Recinto de Contención contiene dos o más tanques, su capacidad neta será por lo menos igual a la
                  del
                  tanque de mayor capacidad dentro del Recinto, más el diez por ciento (10%) de suma de la capacidad
                  de los otros tanques.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault77" value="chb77">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault77">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.f</b> Los Tanques superficiales destinados a Almacenamiento de líquidos Clase l, Clase ll y
                  Clase IIIA,
                  deben localizarse en concordancia con la tabla 5.3.2 a y b.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault78" value="chb78">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault78">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.g</b> En Estaciones de Servicio Públicas, el Recinto de Contención debe ser impermeable y
                  estar
                  construido
                  en concreto. El Recinto de Contención debe ser lo suficientemente amplio, como mínimo 1 metro
                  alrededor del tanque, para permitir realizar actividades de Mantenimiento e inspección. Los
                  Recintos
                  construidos a partir de la entrada en vigencia de este Reglamento deberán ser en concreto
                  reforzado,
                  con una resistencia mínima de 3000 PSI.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault79" value="chb79">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault79">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.h</b> La distancia mínima entre Tanques de Almacenamiento será de 65 cm ± 10%.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault80" value="chb80">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault80">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.i</b> Los cimientos de los tanques deberán diseñarse y construirse de acuerdo con la
                  concentración de
                  carga que resistirán. Los tanques descansarán sobre una base de concreto. Se prohíbe el uso de
                  llantas u otros materiales inadecuados en el cimiento de los tanques. Los cimientos construidos a
                  partir de la entrada en vigor de este Reglamento deberán ser en concreto reforzado, con una
                  resistencia mínima de 3000 PSI.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault81" value="chb81">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault81">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.j</b> El Recinto de Contención debe estar construido en materiales Incombustibles. No está
                  permitido
                  usar
                  materiales combustibles en los soportes del Tanque. No está permitido el almacenamiento de
                  materiales en el Recinto de Contención.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefaul82" value="chb82">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault82">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.k</b> El Recinto de Contención debe proveer drenaje con una inclinación que evite la
                  acumulación de
                  cualquier líquido. El sistema debe permitir dirigir el agua del Recinto al colector del
                  alcantarillado, o como lo disponga la autoridad ambiental competente; y en caso de derrame, éste
                  será tratado como residuo peligroso o dirigido al sistema de pretratamiento y dispuesto como lo
                  disponga la autoridad ambiental competente.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault83" value="chb83">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault83">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.l</b> Todos los tanques superficiales deben contar con ventilación adecuada para evitar la
                  formación de
                  vacíos de presión, que puedan distorsionarlo o que excedan la presión de diseño durante las
                  operaciones de llenado o vaciado, según la norma que corresponda. Para el efecto se debe instalar
                  una válvula de prevención de derrames que cierre automáticamente el flujo de combustible. En los
                  Tanques que Almacenen gasolina, una válvula de presión vacío en cada respiradero, las válvulas de
                  presión vacío deben señalar el rango de operación entre 2.5" a 6" pulgadas de columnas de agua
                  para
                  presión y un rango de 6" a 10" columnas de agua para vacío. Esta conformidad deberá estar avalada
                  por el fabricante, lo respiraderos de los tanques que almacenen Diesel, deberán contar con un
                  elemento que permita la salida de los vapores, entrada de aire y evite el ingreso de agua o
                  partículas.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault84" value="chb84">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault84">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.m</b> Los Tanques de Almacenamiento metálicos deben estar protegidos internamente contra la
                  corrosión y
                  oxidación.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault85" value="chb85">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault85">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.n</b> En el caso de tanques horizontales, todas las aberturas deberán estar ubicadas en la
                  parte
                  superior
                  del tanque, excepto aquella para drenaje o llenado.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault86" value="chb86">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault86">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.o</b> En las Estaciones de Servicio Públicas todos los tanques deberán estar correctamente
                  anclados para
                  que puedan soportar el empuje ocasionado por posibles inundaciones, aun cuando los tanques estén
                  vacíos.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault87" value="chb87">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault87">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.p</b> Todos los tanques deberán ser protegidos contra los daños ocasionados por el impacto de
                  un
                  vehículo
                  automotor mediante las barreras antichoque, de acuerdo a lo establecido en el literal a del
                  numeral
                  5.1. Este numeral aplica cuando el tanque este expuesto en sus alrededores a circulación de
                  vehículos de cualquier índole.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault88" value="chb88">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault88">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.q</b> Los tanques en superficie deberán estar encerrados por un cercado de una altura mínima
                  de dos (2)
                  metros y contar con una puerta de acceso restringido. Si la propiedad en donde se encuentra el
                  tanque ya cuenta con un cercado de protección perimetral, no es necesario cercar el tanque.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault89" value="chb89">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault89">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                  <b>5.3.2.r</b> Cuando el tanque se ubique a una altura tal que exista carga gravitatoria sobre el
                  Medidor de
                  Combustible, la salida del tanque deberá contar con un dispositivo , de manera que impida que el
                  liquido fluya por gravedad desde el tanque al Medidor de Combustible, cuando el Medidor de
                  Combustible no esté en uso y puedan ocurrir fallas en la tubería o manguera.
                  <a href="./Disposiciontanquessuperficie.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning   bg-opacity-25 border border-warning">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault90" value="chb90">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault90">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Decimo acordeon-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingtwelve">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapsetwelve" aria-expanded="true" aria-controls="collapsetwelve">
              <b>5.4 TANQUES FUERA DE USO</b>
            </button>
          </h2>
          <div id="collapsetwelve" class="accordion-collapse collapse" aria-labelledby="headingtwelve"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.4.a</b> Los tanques subterráneos pueden ser dejados temporalmente fuera de operación solo cuando
                  se ha
                  planeado retornarlos a servicio activo. Cuando por alguna circunstancia deje de usarse
                  definitivamente cualquiera de los Tanques de Almacenamiento de combustibles o no se haga uso de
                  estos por más de dos (2) años, se procederá con su Cierre permanente de operación, debiendo, en
                  todo
                  caso, ceñirse a la normatividad ambiental aplicable para estos casos.
                  <a href="./Tanquesfueradeuso.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault91" value="chb91">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault91">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.4.b</b> Los tanques subterráneos o en superficie puestos fuera de servicio temporalmente deben
                  ser desocupados completamente de líquido y gas. La tubería de desfogue debe ser funcional en todo
                  momento. La tubería de conducción de combustibles debe estar sellada o taponada. Los tanques deben
                  estar protegidos contra la corrosión mientras no estén en uso.
                  <a href="./Tanquesfueradeuso.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault92" value="chb92">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault92">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.4.c</b> El retiro de tanques subterráneos que hayan contenido combustibles debe notificarse a las
                  autoridades ambientales competentes. Para retirar los tanques, estos deben ser desconectados de
                  los
                  accesorios y tubería. Se deben desocupar completamente de liquido y gas. La tubería debe
                  taponarse.
                  <a href="./Tanquesfueradeuso.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault93" value="chb93">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault93">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.4.d</b> Si por alguna razón no es posible el retiro del Tanque subterráneo, esta debe estar
                  documentada.
                  El
                  cierre permanente en sitio deberá ser informado a la autoridad ambiental de la jurisdicción y
                  dejar
                  documentado el procedimiento de abandono del Tanque.
                  <a href="./Tanquesfueradeuso.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault94" value="chb94">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault94">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.4.e</b> El Cierre permanente en sitio consiste en desconectar los accesorios y tubería, esta
                  última debe
                  taponarse, desocupar los Tanques completamente de líquido y gas. Se debe excavar con precaución
                  hasta la parte superior del Tanque, retirar la tubería expuesta, abrir los Tanques y rellenar
                  completamente el Tanque con material inerte.
                  <a href="./Tanquesfueradeuso.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault95" value="chb95">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault95">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Once acordeon-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingeleven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseeleven" aria-expanded="true" aria-controls="collapseeleven">
              <b>5.5 SISTEMAS DE PROTECCIÓN CONTRAINCENDIOS, PREPARACIÓN Y RESPUESTA ANTE EMERGENCIAS.</b>
            </button>
          </h2>
          <div id="collapseeleven" class="accordion-collapse collapse" aria-labelledby="headingeleven"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.5.a</b> Toda Estación de Servicio deberá contar con equipos adecuados de protección contra
                  incendios, los
                  cuales como mínimo deberán ser:
                  i. Dos (2) extintores de polvo químico seco de 9.07 kg (20 lb) tipo ABC, ubicados en cada Isla de
                  Llenado.
                  ii. Dos (2) extintores de polvo químico seco de 9.07 kg (20 lb) tipo ABC, ubicados en la oficina
                  de
                  administración.
                  iii. Un (1) extintor de 20 libras 9.07 kg (20 lb) tipo ABC, ubicado en cada área de servicio
                  adicional.

                  <a href="./Proteccionincendios.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault96" value="chb96">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault96">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.5.b</b> Los extintores deben estar incluidos en un programa de inspección y Mantenimiento y,
                  además, deben
                  estar ubicados en lugares de fácil acceso, libres de cualquier obstáculo y deben estar en
                  condiciones de funcionamiento máximo, colocándose a una altura no mayor a 1,30 metros ± 10%,
                  medidos
                  desde el suelo hasta la base del extintor y deben estar debidamente rotulados
                  <a href="./Proteccionincendios.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault97" value="chb97">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault97">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.5.bII</b> Adicionalmente, se debe contar con otro extintor de 9.07 kg (20 lb), para el momento de
                  cargue del
                  Tanque, tipo ABC, el cual deberá estar disponible en el área, durante todo el tiempo que dure el
                  llenado del Tanque.
                  <a href="./Proteccionincendios.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault98" value="chb98">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault98">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.5.c</b> La Estación de Servicio con más de 4 mangueras de suministro, deberá contar con un
                  extintor
                  rodante
                  de polvo químico seco con capacidad mínima de 68 Kg (150 lb) que se ubicará a un costado de la
                  construcción destinada a las oficinas de administración de la Estación de Servicio.
                  <a href="./Proteccionincendios.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault99" value="chb99">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault99">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-warning bg-opacity-25 border border-danger">
                  <b>5.5.d</b> Así mismo, se debe contar como mínimo con un dispositivo de Parada de emergencia que
                  interrumpa
                  todo
                  el flujo eléctrico a la zona de llenado y almacenamiento. El dispositivo debe ubicarse a mínimo
                  seis
                  (6 m) metros ± 10% y máximo treinta metros (30 m) ± 10% del eje central del equipo de medición mas
                  cercano a la parada de emergencia y deberá estar identificado en una zona visible y accesible. La
                  Parada de emergencia debe ser botón "'tipo hongo". Para las Estaciones de Servicio existentes se
                  otorga un plazo máximo de un (1) año a partir de la entrada en vigencia de la presente resolución
                  para dar cumplimiento a este requisito.
                  <a href="./Proteccionincendios.php">Mas información</a>
                </div>
                <div class="col-2 bg-warning bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault100" value="chb100">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault100">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.5.e</b> Todo el personal que labora en la Estación de Servicio deberá estar entrenado en el uso
                  de
                  extintores y en prácticas contra incendio y, en el manejo derrames de hidrocarburos. Para tal fin,
                  deberá conservar los registros de capacitación respectivos.
                  <a href="./Proteccionincendios.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault101" value="chb101">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault102">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.5.f</b> Se debe establecer e implementar un plan de emergencias de acuerdo a los recursos,
                  equipos y
                  personal disponibles para respuesta a incendios y emergencias relacionadas. Este plan debe incluir
                  como mínimo lo siguiente:
                  <a href="./Proteccionincendios.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault103" value="chb102">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault104">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Doce acordeon-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingNine">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
              <b>5.6.1. PRUEBAS DE LA ESTACIÓN DE SERVICIO</b>
            </button>
          </h2>
          <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <b>5.6.1.a</b> Para las Estaciones de Servicio que se construyan, modifiquen o amplíen bajo la
                  vigencia de los
                  presentes requisitos, el fabricante del Tanque debe garantizar la integridad del mismo antes de su
                  instalación en la Estación de Servicio. Para el efecto deberá entregar los resultados de la
                  realización de la respectiva Prueba de Hermeticidad.
                  <a href="./Pruebasalaeds.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault103" value="chb103">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault103">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <b>5.6.1.b</b> Se realizarán dos Pruebas de Hermeticidad iniciales. La primera se debe realizar con
                  los Tanques
                  fijados en su posición final y antes de realizar el proceso de relleno y tapado del mismo. La
                  segunda prueba será con liquido almacenado en el Tanque, verificando que no existan fugas y
                  dejando
                  constancia de esto para posterior verificación por parte del Organismo de inspección.
                  <a href="./Pruebasalaeds.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault104" value="chb104">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault104">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <b>5.6.1.c</b> Se deben realizar dos Pruebas de Hermeticidad a las tuberías en las diferentes etapas
                  de
                  instalación, El fabricante debe especificar la presión de diseño máxima a la cual podrá ser
                  sometida
                  la tubería de producto y la tubería secundaria o de contención.
                  <a href="./Pruebasalaeds.php">Mas información</a>
                </div>
                <div class="col-2 bg- bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault105" value="chb105">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault105">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Trece acordeon-->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
              <b>5.6.2 PRUEBAS PERIÓDICAS</b>
            </button>
          </h2>
          <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.a</b> Verificar la ausencia de líquido en las cajas contenedoras de equipos y bombas,
                  realizando una
                  inspección visual, por lo menos cada mes.
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault106" value="chb106">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault106">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.b</b> Verificar la ausencia de fugas de las mangueras de despacho, conexiones, equipo de
                  medición y
                  demás
                  componentes de la Estación de Servicio que suministran combustibles líquidos, realizando una
                  inspección visual, por Io menos cada mes.(1 MES)
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault107" value="chb107">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault107">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.c</b> Verificar que los accesorios conectados al Medidor de Combustible garanticen la
                  conductividad de
                  la
                  señal de tierra no mayor a 5 Ω 10% desde la punta de la pistola hasta el equipo, por lo menos cada
                  año
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault108" value="chb108">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault108">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.d</b> Verificar el funcionamiento de la Parada de emergencia, por lo menos cada mes. (1 MES)
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault109" value="chb109">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault109">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.e</b> Inspeccionar todas las bocas de ingreso a los Tanques y el estado de las bombas
                  sumergibles, por
                  Io
                  menos cada mes. Se debe realizar Mantenimiento cuando presente corrosión. (1 MES)
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault110" value="chb110">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault110">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.f</b> Realizar una inspección visual de las Instalaciones Eléctricas, cuadros de mando y
                  maniobra,
                  protecciones, instrumentos de medida, circuitos de alumbrado y fuerza motriz. Se deberá revisar
                  que
                  todos los cables (potencia datos) se encuentran entubados en un conducto resistente al
                  combustible,
                  deben contar con sellos cortafuego, las cajas deberán ser anti explosión, por lo menos cada mes.
                  (1
                  MES)
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault111" value="chb111">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault111">No/Si</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.g</b> Se debe tener un procedimiento documentado para la inspección y prueba de los
                  dispositivos o
                  sistemas de sobrellenado. Se deben probar como mínimo una vez al año. (1 AÑO)
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault112" value="chb112">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault112">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.h</b> Se deberán realizar Pruebas de Estanqueidad a las cajas contenedoras de derrames de los
                  equipos de
                  medición, contenedor de boca de descarga (spill container) y cajas contenedoras de las bombas
                  sumergibles. Esta prueba deberá hacerse por lo menos cada año. (1 AÑO)
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault113" value="chb113">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault113">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.i</b> Verificar el estado de las válvulas de seguridad de los Medidores de Combustible y
                  demás
                  dispositivos, por lo menos cada mes. (1 MES)
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault114" value="chb114">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault114">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.j</b> Comprobar, el estado de las paredes de los Tanques, cuando éstos no sean subterráneos,
                  así como el
                  estado de las cimentaciones, soportes, cerramientos, drenajes, bombas y equipos e instalaciones
                  auxiliares. Esta actividad deberá hacerse por lo menos cada mes, mediante inspección visual. (1
                  MES)
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault115" value="chb115">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault115">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.k</b> Verificar las condiciones del espacio anular de los Tanques, de acuerdo a las
                  recomendaciones del
                  fabricante, por lo menos cada mes. (1 MES)
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault116" value="chb116">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault116">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.l</b> Se debe realizar prueba abreviada de calidad en el recibo del diésel de acuerdo con el
                  numeral 1 1
                  de la NTC 6032:2013 "Buenas prácticas de manejo para el biodiesel y las mezclas diésel—biodiesel
                  en
                  la cadena de distribución de combustibles líquidos derivados de petróleo en Colombia" y se debe
                  dejar registro.
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault117" value="chb117">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault117">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.m</b> Se deberán realizar pruebas de verificación de la hermeticidad del sistema de
                  almacenamiento de
                  combustible, mínimo una vez cada 2 años. Estas pruebas las deberá realizar una empresa acreditada
                  por ONAC bajo la norma NTC ISO IIEC 1702C con alcance en la norma UNE-EN13160, NFPA 30 A y las
                  disposiciones relacionados en el presente reglamento técnico.
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault118" value="chb118">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault118">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.n</b> Se deberán realizar pruebas de verificación de la hermeticidad del sistema de
                  conducción del
                  combustible mínimo una vez cada (2 AÑOS). Estas pruebas las deberá realizar un organismo por ONAC
                  bajo la norma NTC ISO /IEC 17020 con alcance en la norma UNE-EN 13160, y/o NFPA 30 y las
                  disposiciones relacionadas en el presente reglamento técnico.
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault119" value="chb119">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault119">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.o</b> Como mínimo cada año, se debe simular una fuga en cada línea de la estación, el sistema
                  de control
                  de inventarios debe detectarla y bloquear el suministro de combustible por la línea en cuestión.
                  Se
                  deberá dejar registro de estas fugas simuladas en la memoria de la consola para una posterior
                  revisión del Organismo Evaluador de la Conformidad. La estación deberá contar con un manual para
                  este propósito.
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault120" value="chb120">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault120">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.p</b> Los resultados de las pruebas realizadas en Tanques y tuberías, deberán ser remitidos
                  por los
                  agentes de la cadena a la Dirección de Hidrocarburos. Los resultados de las pruebas realizadas
                  deberán contar con un mecanismo para verificar su autenticidad. En caso de resultados no
                  satisfactorios en las Pruebas de Hermeticidad, ya sea en tuberías o en Tanques, se procederá al
                  cambio de la línea defectuosa, la repotenciación o al cambio del Tanque, y a la descontaminación
                  del
                  área afectada, si la hubiere, según sea el caso.
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault121" value="chb121">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault121">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.q</b> Se deben inspeccionar los Pozos de Monitoreo y/u observación antes y después de la
                  realización de
                  las pruebas en Tanque y línea, revisando si existe contaminación y variación de niveles. En caso
                  de
                  que el Tanque sea doble pared se deberá verificar el espacio anular, de acuerdo con las
                  recomendaciones entregadas por el fabricante.
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault122" value="chb122">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault122">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.r</b> Las Estaciones de Servicio que tengan un sistema automático de detección de fugas y
                  estén
                  provistas
                  de sensores discriminantes para pozos, sensores en el espacio anular del Tanque y sensores de
                  nivel
                  para cajas contenedoras del equipo medidor y bomba, deberán, como mínimo (CADA AÑO), activar cada
                  uno de los sensores para probar su funcionamiento. Se deberá dejar registro de estas pruebas
                  simuladas en la memoria de la consola, para una posterior revisión del ente verificador. La
                  estación
                  deberá contar con un manual para este propósito.
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault123" value="chb123">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault123">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.s</b> Verificar el estado y funcionamiento de la tubería de desfogue, por lo menos CADA (2)
                  AÑOS. Se
                  deberá dejar evidencia escrita de este procedimiento.
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault124" value="chb124">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault124">No/Si</label>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>5.6.2.t</b> Efectuar el aforo de los Tanques por lo menos CADA 5 AÑOS.
                  <a href="./Pruebasperiodicas.php">Mas información</a>
                </div>
                <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                  <div class="mx-3 col-6 mx-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault125" value="chb125">
                  </div>
                  <div>
                    <label class="form-check-label" for="flexSwitchCheckDefault125">No/Si</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!--Aqui termina los requisitos genrales-->

    </div>
    </div>
    </div>

    <div class="styky" id="tituloreglamento2">
      <h2 class="text-primary">LISTA DE CHEQUEO, RESOLUCIÓN 40198 DE 2021.</h2>
      <div  id="percent2">
        <p>0% Porcentaje de cumplimiento requisitos específicos automotriz</p>
      </div>
      <div id="myProgress2">
        <div id="myBar2"></div>
      </div>
    </div>

    <div class="card generales" id="option2">
      <h5 class="card-header">REQUISITOS ESPECÍFICOS (Automotriz)</h5>
      <!-- Barra de Requisitos Especificos -->
      <!-- <div class="styky" id="percent2">
        <p>0%</p>
      </div>
      <div id="myProgress2">
        <div id="myBar2"></div>
      </div> -->
      <div class="card-body">
        
          <!--Primer acordeon-->
          <!--Primer acordeon-->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingcatorce">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsecatorce" aria-expanded="true" aria-controls="collapsecatorce">
                <b>6.1 REQUISITOS PARTICULARES</b>
              </button>
            </h2>
            <div id="collapsecatorce" class="accordion-collapse collapse" aria-labelledby="headingcatorce"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>6.1.a</b> Toda Estación de Servicio debe contar con un sistema de pretratamiento de aguas industriales que conste, como mínimo, de un sedimentador, una trampa de grasas y una caja de muestreo o un Sistema de Contención de Derrames que prevenga el vertimiento de los contaminantes al alcantarillado, a las aguas superficiales o al suelo. El sistema de pretratamiento o de contención debe estar diseñado de acuerdo al área y ubicación del establecimiento.
                    <a href="./Requisitosparticulaesautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault126" value="chb126">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault126">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-success bg-opacity-25 border border-success">
                    <b>6.1.b</b> Las Áreas de Abastecimiento y Almacenamiento en la Estación de Servicio deberán ser pavimentadas en concreto, garantizando la impermeabilidad del piso; en todos los casos deberá permitir la circulación del agua hacia el sistema de pretratamiento o contención de derrames. Se otorga un plazo de 4 años a partir de la entrada en vigencia expedición de los presentes requisitos para su cumplimiento.
                    <a href="./Requisitosparticulaesautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-success bg-opacity-25 border border-success">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault127" value="chb127">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault127">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>6.1.c</b> Las Áreas de Abastecimiento y Almacenamiento en la Estación de Servicio deberán ser pavimentadas en concreto, garantizando la impermeabilidad del piso; en todos los casos deberá permitir la circulación del agua hacia el sistema de pretratamiento o contención de derrames. Se otorga un plazo de 4 años a partir de la entrada en vigencia expedición de los presentes requisitos para su cumplimiento.
                    <a href="./Requisitosparticulaesautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault128" value="chb128">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault128">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>6.1.d</b> El Área de Abastecimiento y la zona de descarga de carro Tanques en las Estaciones de Servicio Automotrices deben contar con un Canal de Aguas Hidrocarburadas. El canal de conducción de aguas hidrocarburadas debe garantizar la captación de líquidos hidrocarburadas. Para las Estaciones de Servicio que a la entrada en vigencia de este Reglamento no cuenten con este canal, las áreas de ingreso y circulación deberán ser de concreto, asfalto u otro material impermeable y toda el agua de escorrentía deberá dirigirse al sistema de pretratamiento de aguas industriales.
                    <a href="./Requisitosparticulaesautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault129" value="chb129">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault129">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg- bg-opacity-25 border border-danger">
                  <b>6.1.e</b> El canal del que trata el ítem anterior no debe captar agua lluvia de escorrentía no contaminada con hidrocarburos. Para esto, la losa externa debe contar con una pendiente mínima de 1% hacia la Rejilla de Aguas Lluvias perimetral o sumidero. Este punto aplica para Estaciones de Servicio que se construyan, modifiquen o amplíen, a partir de la entrada en vigencia de este reglamento.
                    <a href="./Requisitosparticulaesautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg- bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault130" value="chb130">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault130">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>6.1.f</b> No se permite el abastecimiento de combustibles a los vehículos por fuera del canal perimetral, teniendo en cuenta lo indicado por el literal c de este numeral.
                    <a href="./Requisitosparticulaesautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault131" value="chb131">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault131">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>6.1.g</b> Las Estaciones de Servicio Automotrices deberán estar provistas de los siguientes sistemas de drenaje: Pluvial, Aguas Residuales Domésticas y Aguas Residuales No Domésticas
                    <a href="./Requisitosparticulaesautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault132" value="chb132">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault132">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  <b>6.1.h</b> El volumen de agua recolectada en el Área de Almacenamiento y abastecimiento pasará por el sistema de pretratamiento de aguas no domésticas, antes de conectarse al alcantarillado municipal o como lo estipule la autoridad ambiental de la jurisdicción territorial. También podrá ser almacenado en el Sistema de Contención de Derrames de combustible para ser dispuesto de forma adecuada. Por ningún motivo se conectarán los drenajes que contengan Aguas Residuales Domésticas -ARD y aguas lluvia con las Aguas Residuales No Domésticas -ARnD antes del sistema de pretratamiento
                    <a href="./Requisitosparticulaesautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault133" value="chb133">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault133">No/Si</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Segundo acordeon-->
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingquince">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsequince" aria-expanded="true" aria-controls="collapsequince">
                <b>6.2 ÁREA DE ABASTECIMIENTO</b>
              </button>
            </h2>
            <div id="collapsequince" class="accordion-collapse collapse" aria-labelledby="headingquince"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    6.2.a La distribución de las Islas de expendio deberá permitir un ingreso y salida rápido y ágil de
                    vehículos. Cuando éstos se encuentren estacionados en posición de carga, no deberán obstaculizar
                    la
                    entrada o salida, ni la libertad de maniobra de otros vehículos. En general, deberán cumplir con
                    el
                    radio de giro del vehículo a abastecer sin que obstaculice el normal desarrollo de la movilidad
                    del
                    área.
                    <a href="./areaabastecimientoautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault134" value="chb134">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault134">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    6.2.b El ancho mínimo de los Carriles de Abastecimiento para las Islas de Llenado paralelas debe ser
                    de
                    3
                    metros y, como mínimo, deben existir 50 cm desde el borde de la Isla hasta el Carril de
                    Abastecimiento. En caso de no tener Isla, la distancia será desde el equipo medidor. Por tanto,
                    la
                    distancia mínima entre dos Islas paralelas debe ser de 7 metros libres para el tránsito de
                    vehículos.
                    <a href="./areaabastecimientoautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault135" value="chb135">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault135">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    6.2.c La distancia longitudinal mínima entre dos medidores en una misma Isla será de 3 metros medidos
                    desde el eje central de cada medidor. La distancia entre los Medidores de Combustible de
                    líquidos
                    y,
                    los equipos de suministro de las estaciones de carga de vehículos eléctricos, de GNVC y GLP
                    vehicular, deberá ser mayor a 6 metros.
                    <a href="./areaabastecimientoautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault136" value="chb136">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault136">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-warning bg-opacity-25 border border-warning">
                    6.2.d El equipo de medición debe situarse a una distancia mínima de 6 metros de cualquier Fuente de
                    Ignición. Los elementos instalados a menos de 6 metros del equipo de medición deberán ser en
                    materiales Incombustibles y deberán estar anclados. Este requisito aplica para todas las
                    Estaciones
                    de Servicio, se otorga un plazo de un año a partir de la expedición de los presentes requisitos
                    para
                    su cumplimiento.
                    <a href="./areaabastecimientoautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-warning bg-opacity-25 border border-warning">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault137" value="chb137">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault137">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg- bg-opacity-25 border border-danger">
                    6.2.e El Carril de Abastecimiento debe permanecer debidamente demarcado. Este requisito aplica para
                    todas
                    las Estaciones de Servicio, se otorga un plazo de 6 meses a partir de la entrada en vigor de
                    este
                    Reglamento.
                    <a href="./areaabastecimientoautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg- bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault138" value="chb138">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault138">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    6.2.f La manguera de dispensación podrá exceder los 6 m de largo siempre que el equipo medidor cumpla
                    con
                    lo establecido por la Resolución 77507 de 2016, numeral 7.10.5, de la Superintendencia de
                    Industria
                    y Comercio, o aquellas que la modifiquen, amplíen o sustituyan.
                    <a href="./areaabastecimientoautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault139" value="chb139">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault139">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    6.2.fI Las pistolas instaladas en mangueras de más de 6 metros de longitud deben contar con un
                    mecanismo
                    que impida el flujo de combustible. Si no existe presión en la línea, estas pistolas también
                    deben
                    cumplir con la norma UL-2586. Este literal aplica a todas las Estaciones de Servicio Automotriz
                    y
                    Fluvial a partir de la entrada en vigor de este Reglamento.
                    <a href="./areaabastecimientoautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault140" value="chb140">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault140">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    6.2.g Los equipos de medición deben ubicarse en el Área de Abastecimiento, de manera tal que todas las
                    partes del vehículo a abastecer se encuentren dentro del predio de las Estaciones de Servicio.
                    Este
                    requisito aplica para todas las Estaciones de Servicio a partir de la entrada en vigor de este
                    Reglamento
                    <a href="./areaabastecimientoautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault141" value="chb141">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault141">No/Si</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <!--Tercer acordeon-->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingdieciseis">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsedieciseis"
                aria-expanded="true" aria-controls="collapsedieciseis">
                <b>6.3 ALMACENAMIENTO</b>
              </button>
            </h2>
            <div id="collapsedieciseis" class="accordion-collapse collapse" aria-labelledby="headingdieciseis"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    6.3.a La estación de servicio automotriz deberá instalar tanques de almacenamiento de combustible
                    cilíndrico, horizontales subterráneos que deberán contar con doble pared con espacio anular.
                    Podrán
                    tener varios compartimientos, para almacenar diferentes tipos de productos.
                    <a href="./Almacenamientoautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault142" value="chb142">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault142">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                    6.3.b La instalación de los Tanques de Almacenamiento sobre el nivel del suelo o en superficie se
                    podrá
                    hacer única y exclusivamente: En sitios donde existan condiciones geológicas especiales o
                    elevado
                    nivel freático, siempre que estas condiciones se comprueben mediante la Certificación emitida
                    por
                    un
                    geólogo que acompañe su tarjeta profesional. En estos casos, su instalación deberá estar
                    soportada
                    por un estudio técnico que justifique las condiciones exigidas en este literal.
                    Las estaciones de servicio privadas.
                    <a href="./Almacenamientoautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault143" value="chb143">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault143">No/Si</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <!--Cuarto acordeon-->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingdiecisiete">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsedieisiete" aria-expanded="true" aria-controls="collapsedieisiete">
                <b>6.4 ESTACIONES DE SERVICIO PRIVADAS</b>
              </button>
            </h2>
            <div id="collapsedieisiete" class="accordion-collapse collapse" aria-labelledby="headingdiecisiete"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  6.4.a Los autoservicios son aquellas Estaciones de Servicio, en las cuales la operación de suministro de los combustibles no se efectúa por personal del establecimiento, sino que la realiza directamente el usuario. A partir de la entrada en vigor de esta Resolución o de acuerdo con los plazos expresamente establecidos, aplican las siguientes disposiciones y requerimientos mínimos de funcionamiento: este tipo de establecimientos debe operar con al menos una (1 ) persona por cada 4 equipos de medición que deberán observar y controlar las normas de seguridad, siendo su responsabilidad, entre otras, controlar las Fuentes de Ignición, actuar en derrames y manejar extintores.
                    <a href="./edsprivadasautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault144" value="chb144">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault144">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10 bg-danger bg-opacity-25 border border-danger">
                  6.4.b Señalización: deberán disponerse, próximos a los Medidores de Combustible, avisos con instrucciones de operación y funcionamiento. Adicionalmente, la Estación de Servicio deberá brindar cualquier otro tipo de información que le permita a sus usuarios familiarizarse con su funcionamiento y con las medidas de seguridad mínimas aplicables a este tipo de establecimientos.
                    <a href="./edsprivadasautomotriz.php">Mas información</a>
                  </div>
                  <div class="col-2 bg-danger bg-opacity-25 border border-danger">
                    <div class="mx-3 col-6 mx-3 form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault145" value="chb145">
                    </div>
                    <div>
                      <label class="form-check-label" for="flexSwitchCheckDefault145">No/Si</label>
                    </div>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="d-grid gap-2 col-6 mx-auto mb-5">
      <button onclick="save()" class="btn btn-outline-success">Guardar Progreso</button>

      <button onclick="load_()" class="btn btn-outline-success">Cargar Progreso</button>
    </div>

  </main>

<?php 
include_once 'view/_footer.php';

}else{
    $errorLogin = "Acceso denegado !";
    header("Location: ../index.php");
    
}

?>