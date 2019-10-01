
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
    <h1 class="text-center">User Registration</h1>
  </div>
  <div class="inner_content_w3_agile_info">
    <div class="agile_top_w3_grids">
      <div class="main-users">
        <form class="form-horizontal" name="formusers" id="form-users" action="#">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="useremail" class="control-label">Email <span class="red">*</span></label>
              </div>
              <div class="form-group">
              <input type="text" class="form-control" name="useremail" id="useremail" onkeyup="validarCorreoUsuario()">
              </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label class="control-label" for="password">Password <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="password" class="form-control"  name="password" id="password" onblur="validarPassword()">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoemailrequired" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Email is required
                </p>
              </div>

              <!-- Alerta longitud brand -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoemailuserformato" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;The format of Email is invalid (ejemplo@correo.com)
                </p>
              </div>

              <!-- Alert validación contraseña -->
             <div class="alert alert-danger alert-dismissible ocultar" id="avisopassword" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="close">
                 <span aria-hidden="true">&times;</span>
               </button>
               <p class="centrar">
                 <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                 <strong>Error!</strong>&nbsp;The password can't have blank spaces and must have at least 8 characters and a number
               </p>
             </div>

              <!-- Alerta phone largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisopasswordrequerido" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Password is required
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label class="control-label" for="repeatpass">Confirm Password <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="password" class="form-control"  name="repeatpass" id="repeatpass" onkeyup="ValidarRepeatPassword()">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta phone largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisorepeatpaswordrequired" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Confirm Password is required
                </p>
              </div>

                <!-- Alert validación contraseña -->
             <div class="alert alert-danger alert-dismissible ocultar" id="avisopasswordrepeat" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="close">
                 <span aria-hidden="true">&times;</span>
               </button>
               <p class="centrar">
                 <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                 <strong>Error!</strong>&nbsp;Passwords do not match
               </p>
             </div>
            </div>
          </div>

          <!-- Alert procesando -->
          <center class="ocultar" id="carga">
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-spinner fa-spin fa-3x"></i>&nbsp;
                Procesing information...!
              </p>
            </div>
          </center>

          <!-- Alert guardado exitoso -->
          <div class="container-prod ocultar" id="success">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-check" aria-hidden="true"></i>&nbsp;
                <strong>Congratulations!</strong>&nbsp; Successful registration
              </p>
            </div>
          </div>

          <!-- Alert validación contraseña -->
       <div class="alert alert-danger alert-dismissible ocultar" id="emailrepetido" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="close">
           <span aria-hidden="true">&times;</span>
         </button>
         <p class="centrar">
           <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
           <strong>Error!</strong>&nbsp;Email already exists
         </p>
       </div>

          <br/>
          <br/>
          <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-2">
              <div class="form-group">
                <a class="btn btn-primary" name="btn-atras" href="<?= URL ?>home/inicioSesion">
                  <i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;
                    Back
                </a>
              </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-3">
              <div class="form-group">
                <button type="button" class="btn btn-success" onclick="ValidarFormularioUsuarios()" name="btn-save">
                  <i class="fa fa-save" aria-hidden="true"></i>&nbsp;
                  Save
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
