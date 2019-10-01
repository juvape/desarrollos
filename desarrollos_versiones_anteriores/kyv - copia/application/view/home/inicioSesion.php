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
          <form class="form-horizontal" id="form-login" name="formlogin">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="form-group">
                  <label for="emailuser">Email <span class="red">*</span></label>
                  <input type="text" id="emailuser" name="emailuser" class="form-control" onkeyup="validarCorreo()">
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
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="form-group">
                  <label for="pass">Password <span class="red">*</span></label>
                  <input type="password" id="pass" name="pass" class="form-control" onkeydown="onKeyDown(event);">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="form-group">
                  <button class="btn btn-success btn-block" type="button" id="btn-login" name="btn-login" onclick="valedate()">
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
            <!-- <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <div class="form-group">
                  <button type="button" name="reset-pass" class="btn btn-default btn-block" id="reset-pass">
                    <i class="fa fa-key" aria-hidden="true"></i>&nbsp;
                    Forgot password
                  </button>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div id="_AJAX_"></div>
      </div>
    </div>
  </div>
