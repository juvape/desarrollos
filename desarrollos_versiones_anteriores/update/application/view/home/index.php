<?php
    if(isset($_SESSION['documento']))
    {
        $doc = $_SESSION['documento'];
    }
?>

<header>
  <div class="row">
    <div class="col-xs-12 col-sm-12">
      <div class="cabecera wow bounceInLeft" data-wow-duration="2s">
        <?php require APP. 'view/_templates/logo.php'; ?>
      </div>
      <nav class="wow bounceInLeft" data-wow-duration="2s">
        <?php require APP. 'view/_templates/encabezado.php'; ?>
      </nav>
    </div>
  </div>
</header>

</div>
<div class="clearfix"></div>
<div class="inner_content">
  <div class="title-bar top-title">
    <h1 class="text-center">Formulario Inscripción Tiendas</h1>
  </div>
  <div class="inner_content_w3_agile_info">
    <div class="agile_top_w3_grids">
      <div class="main-customers">
        <form class="form-horizontal" name="formcustomers" id="form-customers" action="#">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="fecha_diligenciamiento" class="control-label">Fecha <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <input type="date" class="form-control" name="fecha_diligenciamiento" id="fecha_diligenciamiento" placeholder="DD/MM/AA" value="<?= strftime("%Y-%m-%d", time()); ?>" readonly="true">
<<<<<<< HEAD
                <input type="hidden" name="tipo_diligencia" value="inscripcion" id="tipo_diligencia">
=======
>>>>>>> c04965bf8f3e3cd298220d812e59e7835cdef6e9
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="lugar_diligenciamiento" class="control-label">Lugar <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <select class="form-control" name="lugar_diligenciamiento" id="lugar_diligenciamiento" onchange="validarLugar()">
                  <option value="">---</option>
                  <option value="tesoro">Maaji Tesoro</option>
                  <option value="retiro">Maaji Retiro</option>
                  <option value="bocagrande">Maaji Bocagrande</option>
                  <option value="barranquilla">Maaji Barranquilla</option>
                  <option value="cali">Maaji Cali</option>
                  <option value="unicentro">Maaji Unicentro</option>
                  <option value="santafe">Maaji Santafe</option>
                  <option value="cartagena">Maaji Cartagena</option>
                  <option value="bucaramanga">Maaji Bucaramanga</option>
                  <option value="evento">Evento</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Alerta lugar diligenciamiento requerido-->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisolugar" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El lugar es requerido
            </p>
          </div>

          <!-- Alerta tipo diligenciamiento requerido-->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisotipodiligencia" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El tipo de diligenciamiento es requerido
            </p>
          </div>

          <!-- Alerta fecha diligenciamiento requerido-->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisofecha" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;La fecha es requerida
            </p>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="nombre1">Nombre 1 <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="nombre1" id="nombre1" onkeyup="ValidarLargoNombre1()">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="nombre2">Nombre 2 <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="nombre2" id="nombre2" onkeyup="ValidarLargoNombre2()">
              </div>
            </div>
          </div>

          <!-- Alerta longitud nombres -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisonombre1largo" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El nombre 1 debe contener mínimo 3 caracteres
            </p>
          </div>

          <!-- Alerta longitud nombres -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisonombre2largo" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El nombre 2 debe contener mínimo 3 caracteres
            </p>
          </div>

          <!-- Alerta nombres requeridos-->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisonombre1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El nombre1 es requerido
            </p>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="apellido1">Apellido 1 <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="apellido1" id="apellido1" onkeyup="ValidarLargoApellido()">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="apellido2">Apellido 2 <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="apellido2" id="apellido2" onkeyup="ValidarLargoApellido2()">
              </div>
            </div>
          </div>

          <!-- Alerta apellidos requeridos-->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisoapellido1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El apellido 1 es requerido
            </p>
          </div>

          <!-- Alerta longitud apellidos -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisoapellido1largo" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El apellido 1 debe contener mínimo 3 caracteres
            </p>
          </div>

          <!-- Alerta longitud apellidos -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisoapellido2largo" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El apellido 2 debe contener mínimo 3 caracteres
            </p>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="sexo">Sexo <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <select class="form-control" name="sexo" onchange="ValidarSexo()" id="sexo">
                  <option value="">-----</option>
                  <option value="m">Masculino</option>
                  <option value="f">Femenino</option>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="nacimiento">Fecha Nacimiento <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="date" class="form-control" name="nacimiento" id="nacimiento" placeholder="DD/MM/AA" onblur="validarFechaLim()">
                <input type="hidden" class="form-control" name="limite" value="<?= strftime("%Y-%m-%d", time()); ?>" id="limite">
                <?php
                  $fecha = date('Y-m-d');
                  $nuevafecha = strtotime ( '-6570 day' , strtotime ( $fecha ) ) ;
                  $nuevafecha = date ( 'Y-m-d' , $nuevafecha );
                 ?>
                <input type="hidden" class="form-control" name="limitemenor" value="<?= $nuevafecha; ?>" id="limitemenor">
              </div>
            </div>
          </div>

          <!-- Alerta sexo requerido-->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisosexo" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El sexo es requerido
            </p>
          </div>

          <!-- Alerta sexo requerido-->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisonacimiento" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;La fecha de nacimiento es requerida
            </p>
          </div>

          <!-- Alerta sexo requerido-->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargonacimiento" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;La fecha de nacimiento debe contener mínimo 5 caracteres
            </p>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="tipo_documento">Tipo Documento <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <select class="form-control" name="tipo_documento" onchange="ValidarTipoDocumento()" id="tipo_documento">
                  <option value="">-----</option>
                  <option value="cc">Cédula Ciudadanía</option>
                  <option value="ti">Tarjeta Identidad</option>
                  <option value="ce">Certificado Extranjería</option>
                  <option value="pasaporte">Pasaporte</option>
                  <option value="nit">NIT</option>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="documento">Número Documento <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="documento" id="documento" onkeyup="ValidarLargoDocumento()" onblur="ValidarDocumento()">
              </div>
            </div>
          </div>

          <!-- Alerta tipo documento requerido-->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisotipodocumento" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El tipo de documento es requerido
            </p>
          </div>

          <!-- Alerta documento requerido-->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisodocumento" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El documento es requerido
            </p>
          </div>

          <div class="alert alert-danger alert-dismissible ocultar" id="errorduplicado" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El documento ingresado ya existe en nuestra base de datos.
            </p>
          </div>

          <!-- Alerta largo documento -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodocumento" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El documento debe contener mínimo 5 caracteres
            </p>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="pais">País <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <!-- <input class="form-control" type="text" name="pais" id="pais" onkeyup="ValidarPais()"> -->
                <select class="form-control" name="pais" id="pais" onchange="ValidarPais()">
                  <option value="">---</option>
                  <?php foreach ($pais as $country): ?>
                    <option value="<?= $country['nombre_pais']; ?>"><?= $country['nombre_pais']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
<<<<<<< HEAD
                <label for="departamento">Departamento <span class="red">*</span></label>
=======
                <label for="departamento">Departamento <span class="red">&nbsp;</span></label>
>>>>>>> c04965bf8f3e3cd298220d812e59e7835cdef6e9
              </div>
              <div class="form-group">
                <!-- <input type="text" class="form-control"  name="departamento" id="departamento" onchange="validarDepartamento()"> -->
                <select class="form-control" name="departamento" id="departamento" onchange="validarDepartamento()">
                  <option value="">---</option>
                  <?php foreach ($departamentos as $value): ?>
                    <option value="<?= $value['nombre_departamento']; ?>"><?= $value['nombre_departamento']; ?></option>
                <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>

          <!-- Alerta departamento requerido -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisodepartamento" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El departamento es requerido
            </p>
          </div>

          <!-- Alerta país requerido -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisopais" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El país es requerido
            </p>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="ciudad">Ciudad <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <!-- <input class="form-control" type="text" name="ciudad" id="ciudad" onkeyup="ValidarCiudad()"> -->
                <select class="form-control" name="ciudad" id="ciudad">
                  <option value="">---</option>
                  <?php foreach ($ciudad as $city): ?>
                    <option value="<?= $city['nombre_ciudad']; ?>"><?= $city['nombre_ciudad']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="direccion">Dirección <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="direccion" id="direccion" onkeyup="ValidarDireccion()">
              </div>
            </div>
          </div>

          <!-- Alerta largo dirección -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodireccion" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;La dirección debe contener mínimo 10 caracteres
            </p>
          </div>

          <!-- Alerta dirección requerida -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisociudad" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;La ciudad es requerida
            </p>
          </div>

          <!-- Alerta largo dirección -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargociudad" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;La ciudad debe contener mínimo 4 caracteres
            </p>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="email">Correo Electrónico <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input class="form-control" type="email" name="email" id="email" onkeyup="ValidarCorreo()">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
<<<<<<< HEAD
                <label for="celular">Celular <span class="red">*</span></label>
=======
                <label for="celular">Celular <span class="red">&nbsp;</span></label>
>>>>>>> c04965bf8f3e3cd298220d812e59e7835cdef6e9
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="celular" id="celular" onkeyup="ValidarCelular()">
              </div>
            </div>
          </div>

          <!-- Alerta largo celular -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocelular" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El celular debe contener mínimo 10 caracteres
            </p>
          </div>

          <!-- Alerta correo obligatorio -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisocorreo" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El correo electrónico es requerido
            </p>
          </div>

          <div class="alert alert-danger alert-dismissible ocultar" id="avisocelular" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El Celular es requerido
            </p>
          </div>


          <div class="alert alert-danger alert-dismissible ocultar" id="avisomailformato" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;El formato del correo electrónico es inválido (example@gmail.com)
            </p>
          </div>
          <br/>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-11">
              <div class="form-group">
                <label for="legalidad">Texto Legal</label>
              </div>
              <div class="form-group">
                <p align="justify" class="text-complete" id="text-complete">
                  <span class="title">AUTORIZACIÓN DE TRATAMIENTO DE DATOS PERSONALES</span>
                  <br/>
                  <span class="title-second">MAS S.A.S - ART MODE S.A.S</span>
                  <br/>

                  Declaro que he sido informado:
                  <br/>
                  I.	Que la sociedad <span class="bold">MAS S.A.S - ART MODE S.A.S.</span>, actuará directamente o a través de terceros como el Responsable del Tratamiento de mis datos personales y ha puesto a mi disposición la línea de atención 057 (4) 448 48 70 y el correo electrónico <a href="mailto:help@maaji.co" class="policies">help@maaji.co</a> y las oficinas de atención al cliente ubicadas en la Carrera 68 No 61 Sur 115, Sabaneta, Medellín , en los horarios establecidos de lunes a viernes de 8:00 a.m. a 5:00 p.m., para la atención de requerimientos relacionados con el tratamiento de mis datos personales y el ejercicio de los derechos mencionados en esta autorización.
                  <br/><br/>
                  II.	Que la sociedad <span class="bold">MAS S.A.S- ART MODE S.A.S.</span>, cuenta con una Política de Privacidad y Protección de Datos Personales que puede ser consultada por el titular de la información en la página web o solicitándola directamente.
                  <br/><br/>
                  III.	Que tengo la libertad y autonomía para determinar la información confidencial que doy a conocer y autorizo tratar a la sociedad <span class="bold">MAS S.A.S - ART MODE S.A.S.</span>
                  <br/><br/>
                  IV.	Mis datos serán tratados para fines precontractuales, contractuales, postcontractuales, comerciales, de atención al cliente y mercadeo, procesamiento, investigación, capacitación, acreditación, consolidación, organización, actualización, reporte, estadística, encuestas, atención y tramitación.
                  <br/><br/>
                  V.	Mis derechos como titular de los datos son los previstos en la Constitución y la ley, especialmente el derecho a conocer, actualizar, rectificar y suprimir mi información personal, así como el derecho a revocar el consentimiento otorgado para el tratamiento de datos personales.
                  <br/><br/>
                  VI.	Son datos sensibles, aquellos que afectan la intimidad del Titular o cuyo uso indebido puede generar discriminación, por ejemplo, la orientación política, las convicciones religiosas o filosóficas, de derechos humanos, así como los datos relativos a la salud, a la vida sexual y los datos biométricos.
                  <br/>
                  Teniendo en cuenta lo anterior, autorizo de manera voluntaria, previa, explícita, informada e inequívoca a <span class="bold">MAS S.A.S - ART MODE S.A.S.</span> y a quien le sean cedidos los derechos, para tratar mis datos personales (recolección, almacenamiento, uso, circulación o supresión), con la finalidad principal de contratación, ejecución y comercialización de los bienes y servicios del Responsable del Tratamiento, así como el contacto a través de medios telefónicos, electrónicos (SMS, chat, correo electrónico y demás medios considerados electrónicos) físicos y/o personales.
                  <br/><br/>
                  <span class="bold">MAS S.A.S - ART MODE S.A.S.</span>  podrá usar mi información para los siguientes fines:
                  <br/><br/>
                  I.	Efectuar las gestiones pertinentes para el desarrollo de la etapa precontractual, contractual y post contractual con <span class="bold">MAS S.A.S - ART MODE S.A.S.</span> y terceros que contraten con él, respecto de cualquiera de los productos y/o servicios ofrecidos por <span class="bold">MAS S.A.S - ART MODE S.A.S.</span> que haya o no adquirido o, respecto de cualquier relación de negocios o comercial que tenga con <span class="bold">MAS S.A.S - ART MODE S.A.S.</span>, así como dar cumplimiento a la ley colombiana o extranjera y las órdenes de autoridades judiciales o administrativas.
                  <br/>
                  II.	Gestionar trámites (solicitudes, quejas, reclamos), realizar análisis de riesgo, efectuar encuestas de satisfacción respecto de los servicios ofrecidos <span class="bold">MAS S.A.S - ART MODE S.A.S.</span>, así como de los aliados comerciales de <span class="bold">MAS S.A.S - ART MODE S.A.S.</span>
                  <br/>
                  III.	Suministrar información de contacto y documentos pertinentes a la fuerza comercial y/o red de distribución, telemercadeo, investigación de mercados y cualquier tercero con el cual <span class="bold">MAS S.A.S - ART MODE S.A.S.</span> posea un vínculo contractual de cualquier índole
                  <br/>
                  IV.	Dar a conocer, transferir y/o trasmitir mis datos personales dentro y fuera del país, a cualquier empresa o a terceros como consecuencia de un contrato, ley o vínculo lícito que así lo requiera, o para implementar servicios de computación en la nube. Para todo lo anterior, otorgo mi autorización expresa e inequívoca.
                  <br/>
                  V.	Suministrar a las asociaciones gremiales, los datos personales necesarios para la realización de estudios y en general la administración de sistemas de información del sector correspondiente.
                  <br/>
                  VI.	Conocer mis datos que reposen en operadores de bancos de datos de información financiera de que trata la Ley 1266 de 2008 o las normas que la modifiquen, adicionen o sustituyan y proporcionarles mi información a los mismos.
                  <br/>
                  VII.	Acceder y consultar mis datos personales que reposen o estén contenidos en bases de datos o archivos de cualquier Entidad Privada o Pública (entre otros, los Ministerios, los Departamentos Administrativos, la DIAN, la Fiscalía, Registraduría Nacional del Estado Civil, Juzgados, tribunales y altas Cortes) ya sea nacional, internacional o extranjera.
                  <br/>
                  VIII.	Crear bases de datos para los fines descritos en la presente autorización.
                  <br/>
                  Por lo anterior, AUTORIZO a <span class="bold">MAS S.A.S - ART MODE S.A.S.</span>.  para que, en los términos de la Ley 1581 de 2012, realice la recolección, almacenamiento, uso, circulación, supresión, y en general, tratamiento de mis datos personales, incluyendo datos sensibles, como mis huellas digitales, fotografías, videos y demás datos que puedan llegar a ser considerados como sensibles de conformidad con la Ley, para que dicho Tratamiento se realice con los fines anteriormente indicados.
                  <br/>
                  Declaro que la presente autorización la he suministrado de forma voluntaria y que la información por mí proporcionada es veraz, completa, exacta, actualizada y verificable.
                  <br/><br/>
                  En adición, en calidad de titular, autorizo de forma libre y voluntaria a <span class="bold">MAS S.A.S - ART MODE S.A.S.</span>, para que en cumplimiento de la Ley 1581 de 2012, el Decreto 1377 de 2013 y el Decreto Único 1074 de 2015, dé tratamiento a los datos personales expuestos conforme a las políticas acogidas por la empresa frente a la materia.
                  <br/>
                  Para más información o para consultar Nuestra política y Manual de tratamiento de datos, consulte <a href="https://www.maaji.co/shop" class="policies">www.maaji.co</a>
                </p>
                <p align="justify" class="text-incomplete" id="text-incomplete">
                  <span class="title">AUTORIZACIÓN DE TRATAMIENTO DE DATOS PERSONALES...</span></p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
              <button type="button" name="button" class="btn btn-second" onclick="MostrarTextoLegal()" id="btn-mostrar">Leer Más <i class="fa fa-plus"></i></button>
              <button type="button" name="button" class="btn btn-second" onclick="OcultarTextoLegal()" id="btn-ocultar">Leer Menos <i class="fa fa-minus"></i></button>
            </div>
          </div>
          <br/>

          <!-- Alert procesando -->
          <center class="ocultar" id="carga">
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-spinner fa-spin fa-3x"></i>&nbsp;
                Procesando información...!
              </p>
            </div>
          </center>

          <!-- Alert guardado exitoso -->
          <div class="container-prod ocultar" id="exito">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-check" aria-hidden="true"></i>&nbsp;
<<<<<<< HEAD
                <strong>Felicidades!</strong>&nbsp; Estás a solo un paso de disfrutar de todos nuestros beneficios.
=======
                <strong>Felicidades!</strong>&nbsp; Esta a solo un paso de disfrutar de todos nuestros beneficios.
>>>>>>> c04965bf8f3e3cd298220d812e59e7835cdef6e9
                <br/>
                Revisa tu correo para continuar con el registro.
              </p>
            </div>
          </div>

          <!-- Alert guardado erronéo -->
          <div class="container-prod ocultar" id="error" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;Se presentarón inconvenientes al intentar guardar los datos
            </p>
          </div>

          <!-- Alert envio correo erronéo -->
          <div class="alert alert-danger alert-dismissible ocultar" id="erroremail" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;No fue posible enviar el correo electrónico
            </p>
          </div>

          <!-- Alert guardado exitoso -->
          <div class="container-prod ocultar" id="successemail">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-check" aria-hidden="true"></i>&nbsp;
                <strong>Felicidades!</strong>&nbsp; Revisa tu correo para continuar con el registro.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-5">
              <div class="form-group">
                <button type="button" class="btn btn-success btn-categoria" onclick="ValidarFormulario()" name="btn-inscripcion">
                  <i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;
                  INSCRIBIRME
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function ValidarDocumento()
{
    var documento = $('#documento').val();

    $.ajax({
      url: url + 'clientes/validarDocumento',
      type: 'POST',
      data: {'documento': documento},
      datatype: "text",
      success: function(resp){

        if (resp == 1)
        {
          $("#errorduplicado").show('slow');
          $('#documento').val("");
          document.formcustomers.documento.style.border = "1px solid #f22012";
          $('#documento').focus();
        }

        if(resp == 2)
        {
          $("#errorduplicado").hide('slow');
          document.formcustomers.documento.style.border = "1px solid #17dd37";
        }

      }
  });
}
</script>
