
<header>
  <nav class="wow bounceInLeft" data-wow-duration="2s">
    <?php require APP. 'view/_templates/menu.php'; ?>
  </nav>
</header>

</div>
<div class="clearfix"></div>
<div class="inner_content">
  <div class="title-bar top-title">
    <h1 class="text-center font-maaji">Where The Maajic Begins</h1>
  </div>
  <div class="inner_content_w3_agile_info">
    <div class="agile_top_w3_grids">
      <div class="main-customers">
        <form class="form-horizontal" name="formcustomers1" id="form-customers1" action="#" autocomplete="off">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="company_name" class="control-label">Company Name <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" name="company_name" class="form-control" id="company_name" onkeyup="validarLargoCompany()" value="<?= $value['companyName']; ?>" readonly="true">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="company_name" class="form-control" id="company_name" onkeyup="validarLargoCompany()" value="">
                <?php endif; ?>
              </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="brand" class="control-label">Brand Name <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" class="form-control" name="brand" id="brand" onkeyup="validarLargoBrand()" value="<?= $value['brandName']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control" name="brand" id="brand" onkeyup="validarLargoBrand()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta company name required-->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisocompany" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Company Name is required
                </p>
              </div>

              <!-- Alerta longitud company name -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocompany" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Company Name must have a minimum of 3 characters
                </p>
              </div>

              <!-- Alerta longitud brand -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobrand" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Brand name must have a minimum of 3 characters
                </p>
              </div>

              <!-- Alerta brand name required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisobrand" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Brand Name is required
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="email">Email <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" class="form-control"  name="email" id="email" onkeyup="ValidarFormatoEmail()" value="<?= $value['email']; ?>">
                  <?php endforeach; ?>
                <?php elseif(isset($_SESSION['EMAIL']) && $_SESSION['EMAIL'] != NULL): ?>
                  <input type="text" class="form-control"  name="email" id="email" onkeyup="ValidarFormatoEmail()" value="<?= $_SESSION['EMAIL']; ?>">
                <?php else: ?>
                  <input type="text" class="form-control"  name="email" id="email" onkeyup="ValidarFormatoEmail()" value="">
                <?php endif; ?>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="phone">Company Phone <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" class="form-control"  name="phone" id="phone" onkeyup="ValidarLargoPhone()" value="<?= $value['phone']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="phone" id="phone" onkeyup="ValidarLargoPhone()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta phone required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisophone" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Company Phone is required
                </p>
              </div>

              <!-- Alerta phone largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargophone" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Company Phone must have a minimum of 5 characters
                </p>
              </div>

              <!-- Alerta formato email -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisomailformato" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;The format of the email is invalid (example@gmail.com)
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="website">Website <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" class="form-control"  name="website" id="website" value="<?= trim(str_replace("http://", "", $value['website'])); ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="website" id="website" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-11">
              <div class="form-group">
                <center>
                  <h2 class="address-title">Main Address</h2>
                </center>
              </div>
            </div>
          </div>
          <br/>
          <br/> -->

          <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="country">Country <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <select class="form-control" name="country" id="country" onchange="ValidarCountry()">
                  <option value="">---</option>
                  <?php if (isset($user) && $user != NULL): ?>
                    <?php foreach ($query as $value): ?>
                      <option value="<?= $value['country']; ?>" <?= $value['country'] == $value['country'] ? 'selected="selected"' : '' ?>><?= $value['country']; ?></option>
                      <?php foreach ($pais as $value): ?>
                        <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                      <?php endforeach; ?>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <?php foreach ($pais as $value): ?>
                      <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="state">State <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" name="state" class="form-control" id="state" onkeyup="ValidarLargoState()" value="<?= $value['state']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="state" class="form-control" id="state" onkeyup="ValidarLargoState()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div> -->

          <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1"> -->
              <!-- Alerta address required -->
              <!-- <div class="alert alert-danger alert-dismissible ocultar" id="avisostate" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;State is required
                </p>
              </div> -->

              <!-- Alerta address largo -->
              <!-- <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostate" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;State must have a minimum of 4 characters
                </p>
              </div> -->

              <!-- Alerta country required -->
              <!-- <div class="alert alert-danger alert-dismissible ocultar" id="avisocountry" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Country is required
                </p>
              </div>
            </div>
          </div> -->

          <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="city">City <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" class="form-control"  name="city" id="city" onkeyup="ValidarLargoCity()" value="<?= $value['city']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="city" id="city" onkeyup="ValidarLargoCity()" value="">
                <?php endif; ?>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="address">Address <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" class="form-control"  name="address" id="address" onkeyup="ValidarLargoAddress()" value="<?= $value['address']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="address" id="address" onkeyup="ValidarLargoAddress()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div> -->

          <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1"> -->
              <!-- Alerta address required -->
              <!-- <div class="alert alert-danger alert-dismissible ocultar" id="avisoaddress" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Addres is required
                </p>
              </div> -->

              <!-- Alerta address largo -->
              <!-- <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoaddress" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Address must have a minimum of 8 characters
                </p>
              </div> -->

              <!-- Alerta address required -->
              <!-- <div class="alert alert-danger alert-dismissible ocultar" id="avisocity" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;City is required
                </p>
              </div> -->

              <!-- Alerta address largo -->
              <!-- <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
                </p>
              </div>
            </div>
          </div> -->

          <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="zipcode">Zip Code <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                    <?php foreach ($query as $value): ?>
                      <input type="text" name="zipcode" class="form-control" id="zipcode" onkeyup="ValidarLargoZipcode()" value="<?= $value['zipcode']; ?>">
                    <?php endforeach; ?>
                  <?php else: ?>
                  <input type="text" name="zipcode" class="form-control" id="zipcode" onkeyup="ValidarLargoZipcode()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div> -->

          <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1"> -->
              <!-- Alerta zipcode required -->
              <!-- <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcode" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Zip Code is required
                </p>
              </div> -->

              <!-- Alerta zipcode required -->
              <!-- <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcode" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Zip Code must have a minimum of 3 characters
                </p>
              </div>
            </div>
          </div> -->

          <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-11">
              <div class="form-group">
                <div class="panel panel-primary">
                  <div class="panel-heading">Retail Store location</div>
                  <div class="panel-body">
                    Stores who sells our products.
                  </div>
                </div>
              </div>
            </div>
          </div> -->

          <br/>
          <br/>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-11">
              <div class="form-group">
                <center>
                  <h2 class="social-title">Social Media Accounts</h2>
                </center>
              </div>
            </div>
          </div>
          <br/>
          <br/>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="face"><i class="fa fa-facebook-square fa-3x face" aria-hidden="true"></i> Facebook </label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" name="face" class="form-control" id="face" value="<?= $value['facebook']; ?>" placeholder="Enter the URL">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="face" class="form-control" id="face" value="" placeholder="Enter the URL">
                <?php endif; ?>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="instagram"><i class="fa fa-instagram fa-3x " aria-hidden="true"></i> Instagram </label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" name="instagram" class="form-control" id="instagram" value="<?= $value['instagram']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="instagram" class="form-control" id="instagram" value="@">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="twitter"><i class="fa fa-twitter-square fa-3x twitter" aria-hidden="true"></i> Twitter</label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" name="twitter" class="form-control" id="twitter" value="<?= $value['twitter']; ?>">
                    <input type="hidden" class="form-control" name="idCustomer" id="idCustomer" value="<?= $value['idCustomer']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="twitter" class="form-control" id="twitter" value="@">
                <?php endif; ?>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="Pinterest"><i class="fa fa-pinterest-square fa-3x " style="font-size:48px;color:red"  aria-hidden="true"></i> Pinterest </label>
              </div>
              <div class="form-group">
                <?php if (isset($user) && $user != NULL): ?>
                  <?php foreach ($query as $value): ?>
                    <input type="text" name="pinterest" class="form-control" id="Pinterest" value="<?= $value['pinterest']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="pinterest" class="form-control" id="Pinterest" value="">
                <?php endif; ?>
              </div>
            </div>

          </div>

          <!-- Alerta validaciones de errores -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisovalidaciones" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp; Fix errors to continue with the registration
            </p>
          </div>

          <!-- Alert procesando -->
          <center class="ocultar" id="carga">
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-spinner fa-spin fa-3x"></i>&nbsp;
                <strng></strng>Processing Information...!</strong>
              </p>
            </div>
          </center>

          <!-- Alert exito al guardar -->
          <center class="ocultar" id="exitoguardar">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-check fa-2x"></i>&nbsp;
                Information Saved Successfully.!
              </p>
            </div>
          </center>

          <!-- Alert exito en la actualización -->
          <center class="ocultar" id="exitoactualizacion">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-check fa-2x"></i>&nbsp;
                Information Updated Successfully.!
              </p>
            </div>
          </center>

          <br/>
          <div class="row">
            <?php if (isset($user) && $user != NULL): ?>
              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-2">
                <div class="form-group">
                  <button type="button" class="btn btn-warning" name="btn-next" onclick="ActualizarInformacionForm1()">
                    <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;
                    Update
                  </button>
                </div>
              </div>
              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-2">
                <div class="form-group">
                  <a href="<?= URL ?>home/index2" class="btn btn-primary" name="btn-next">
                    Next (1/4)
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;
                  </a>
                </div>
              </div>
            <?php else: ?>
              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-5">
                <div class="form-group">
                  <button type="button" class="btn btn-primary" onclick="ValidarFormulario()" name="btn-next">
                    Next (1/4)
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;
                  </button>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
