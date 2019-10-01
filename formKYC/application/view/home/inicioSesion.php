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
          <center><h2 class="form-signin-heading">Login</h2></center>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" id="form-login" name="formlogin" autocomplete="off">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="form-group">
                  <label for="emailuser">Email <span class="red">*</span></label>
                  <input type="text" id="emailUser" name="emailuser" class="form-control" onkeyup="validarCorreo()" onkeydown="onKeyDown(event);">
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
                
                  <div class="alert alert-danger alert-dismissible ocultar" id="avisoEmailRequired" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;Email is required
                  </p>
                </div>
                
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="form-group">
                  <label for="pass">Password <span class="red">*</span></label>
                  <input type="password" id="loginPass" name="loginpass" class="form-control" onkeydown="onKeyDown(event);" onkeyup="validarPasswordLogin()">
                </div>
              </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
                    
                  <div class="alert alert-danger alert-dismissible ocultar" id="avisoPasswordRequeridoLogin" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;Password is required
                  </p>
                </div>
                    
                <div class="alert alert-danger alert-dismissible ocultar" id="avisoPasswordLogin" role="alert">
                 <button type="button" class="close" data-dismiss="alert" aria-label="close">
                   <span aria-hidden="true">&times;</span>
                 </button>
                 <p class="centrar">
                   <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                   <strong>Error!</strong>&nbsp;The password must have a minimum of 8 characters
                 </p>
               </div>
                    
                </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="form-group">
                  <button class="btn btn-success btn-block" type="button" id="btn-login" name="btn-login" onclick="validate()">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Sign in
                  </button>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="form-group">
                  <a name="register" class="btn btn-primary btn-block" id="btn-register" href="<?= URL ?>/home/registroUsuarios">
                    <i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;
                    Register
                  </a>
                </div>
              </div>
            </div>
            </form>
            
            <!--Sección para recuperación de contraseña-->
            <!-- <div class="row">-->
            <!--  <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">-->
            <!--   <form class="form-horizontal" action="<?= URL; ?>home/RecuperarContrasenia" id="recuperaPass" name="formrecuperarPassword" autocomplete="off" method="POST">-->
            <!--       <input type="submit" class="forgotPassword" name="inputresetpass" value="Forgot my Password">-->
            <!--   </form>-->
            <!--  </div>-->
            <!--</div>-->
            
           
           
           <!-- Alert procesando -->
            <center class="ocultar" id="carga">
              <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
                <p class="centrar">
                  <i class="fa fa-spinner fa-spin fa-3x"></i>&nbsp;
                  <strong>Processing Information...!</strong>
                </p>
              </div>
            </center>
            
              <div class="container-prod ocultar" id="successData">
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
                <p class="centrar">
                  <i class="fa fa-spinner fa-spin fa-3x" aria-hidden="true"></i>&nbsp;
                  <strong>Connected!</strong> We are redirecting...
                </p>
              </div>
            </div>
            
            <div class="container-prod ocultar" id="errorData">
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error! </strong>Incorrect credentials
                </p>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
