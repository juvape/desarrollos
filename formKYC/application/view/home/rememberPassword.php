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

<div class="row">
  <div class="main-login">
    <div class="col-md-6 col-md-offset-3">
      <div class="login-panel panel">
        <div class="panel-heading green-maaji">
          <center><h2 class="form-rememberpassword-heading">Get back into your account</h2></center>
          <center><h2 class="form-rememberpassword-sub-heading">Who are you?</h2></center>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" id="form-rememberPassword" name="formRememberPass" autocomplete="off" onsubmit="forgotPassword()">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="form-group">
                  <label for="emailuser">Email <span class="red">*</span></label>
                  <input type="email" id="emailuserforgotPassword" name="emailuserforgotpass" class="form-control" onkeyup="validarCorreoRememberPass()" onkeydown="rememberPass(event)">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
                  
                <div class="alert alert-danger alert-dismissible ocultar" id="avisoemailformato" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;The format of Email is invalid (ejemplo@correo.com)
                  </p>
                </div>
                
                <div class="alert alert-danger alert-dismissible ocultar" id="avisoemailrequiredforgot" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;The email is required
                  </p>
                </div>
                
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="form-group">
                  <button class="btn btn-success btn-block" type="button" id="btn-login" name="btn-login" onclick="forgotPassword()">
                    <i class="fa fa-check" aria-hidden="true"></i>&nbsp;Confirm
                  </button>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="form-group">
                  <a name="register" class="btn btn-primary btn-block" id="btn-register" href="<?= URL ?>home/inicioSesion">
                    <i class="fa fa-remove" aria-hidden="true"></i>&nbsp;
                    Cancel
                  </a>
                </div>
              </div>
            </div>
        </form>
            
            <!-- Alert procesando -->
            <center class="ocultar" id="cargaRememberPass">
              <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
                <p class="centrar">
                  <i class="fa fa-spinner fa-spin fa-3x"></i>&nbsp;
                  <strng></strng>Processing Information...!</strong>
                </p>
              </div>
            </center>

            <!-- Alert exito al guardar -->
            <center class="ocultar" id="exitoActualizacionRememberPass">
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
                <p class="centrar">
                  <i class="fa fa-check fa-2x"></i>&nbsp;
                  Pleases checked your email to continue the proccess!
                </p>
              </div>
            </center>

            <!-- Alert exito al guardar -->
            <center class="ocultar" id="errordataforgotpassword">
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle fa-2x"></i>&nbsp;
                  Error!! Wrong data
                </p>
              </div>
            </center>
            
          </div>
        </div>
      </div>
    </div>
  </div>
