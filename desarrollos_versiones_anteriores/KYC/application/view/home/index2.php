
<header>
  <nav class="wow bounceInLeft" data-wow-duration="2s">
    <?php require APP. 'view/_templates/menu.php'; ?>
  </nav>
</header>

</div>
<div class="clearfix"></div>
<div class="inner_content">
  <div class="title-bar top-title">
    <h1 class="text-center">We are building something...</h1>
  </div>
  <div class="inner_content_w3_agile_info">
    <div class="agile_top_w3_grids">
      <div class="main-customers">
        <form class="form-horizontal" name="formcustomers2" id="form-customers2" action="#">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="taxid" class="control-label">TAX ID / VAT Number <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" name="taxid" class="form-control" id="taxid" onkeyup="validarLargoTax()" value="<?= $value['taxId']; ?>" readonly="true">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="taxid" class="form-control" id="taxid" onkeyup="validarLargoTax()" value="">
                <?php endif; ?>
              </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="typecompany" class="control-label">Type of Company <span class="red">*</span></label>
              </div>
              <div class="form-group">
                    <?php if (isset($userAddress) && $userAddress != NULL): ?>
                    <select class="form-control" name="typecompany" id="typecompany" onchange="validarTypeCompany()" disabled="true">
                      <?php foreach ($query2 as $value): ?>
                        <option value="<?= $value['typeCompany'];?>"><?= $value['typeCompany'];?></option>
                      <?php endforeach; ?>
                    <?php else: ?>
                    <select class="form-control" name="typecompany" id="typecompany" onchange="validarTypeCompany()">
                      <option value="">---</option>
                      <option value="sole-propiertor">Sole Propiertor</option>
                      <option value="limited-society">Limited Society</option>
                      <option value="corporation">Corporation</option>
                      <option value="pathership">Pathership</option>
                      <option value="other">Other</option>
                    <?php endif; ?>
                  </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta company name required-->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisotaxid" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;TAX ID is required
                </p>
              </div>

              <!-- Alerta longitud company name -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargotaxid" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;TAX ID must have a minimum of 3 characters
                </p>
              </div>

              <!-- Alerta brand name required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisotypecompany" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Type of Company is required
                </p>
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="owner">Legal Representative/Owner <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" class="form-control"  name="owner" id="owner" onkeyup="ValidarLargoOwner()" value="<?= $value['owner']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="owner" id="owner" onkeyup="ValidarLargoOwner()" value="">
                <?php endif; ?>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="idnumber">Owner ID Number <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" class="form-control"  name="idnumber" id="idnumber" onkeyup="ValidarLargoNumber()" value="<?= $value['idNumber']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="idnumber" id="idnumber" onkeyup="ValidarLargoNumber()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta phone required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoOwner" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Legal Representative/Owner is required
                </p>
              </div>

              <!-- Alerta phone largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoOwner" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Legal Representative/Owner must have a minimum of 3 characters
                </p>
              </div>

              <!-- Alerta formato email -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisonumber" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;ID Number is required
                </p>
              </div>

              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargonumber" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;ID Number must have a minimum of 5 characters
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="phone2">Owner Phone <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" class="form-control"  name="phone2" id="phone2" value="<?= $value['phone']; ?>" onkeyup="validarLargoOwerPhone()">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="phone2" id="phone2" value="" onkeyup="validarLargoOwerPhone()">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargophone2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Owner Phone must have a minimum of 5 characters
                </p>
              </div>
            </div>
          </div>

          <br/>
          <br/>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <center>
                <h2 class="address-title">Billing Address</h2>
              </center>
            </div>
          </div>
          <br/>
          <br/>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="country">Country <span class="red">*</span></label>
              </div>
              <div class="form-group">
                  <select class="form-control" name="country" id="country" onchange="ValidarBillingCountry()">
                    <option value="">---</option>
                    <?php if (isset($userAddress) && $userAddress != NULL): ?>
                      <?php foreach ($query2 as $value): ?>
                        <option value="<?= $value['billingCountry']; ?>" <?= $value['billingCountry'] == $value['billingCountry'] ? 'selected="selected"' : '' ?>><?= $value['billingCountry']; ?></option>
                        <?php foreach ($pais as $value): ?>
                          <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                        <?php endforeach; ?>
                      <?php endforeach; ?>
                    <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                      <?php foreach ($_SESSION['FORM1'] as $val): ?>
                        <option value="<?= $val['country']; ?>" <?= $val['country'] == $val['country'] ? 'selected="selected"' : '' ?>><?= $val['country']; ?></option>
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
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" name="state" class="form-control" id="state" onkeyup="ValidarLargostate()" value="<?= $value['billingState']; ?>">
                  <?php endforeach; ?>
                <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                  <?php foreach ($_SESSION['FORM1'] as $val): ?>
                    <input  type="text" name="state" class="form-control" id="state" onkeyup="ValidarLargostate()" value="<?= ucwords($val['state']); ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="state" class="form-control" id="state" onkeyup="ValidarLargostate()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisostate" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;State is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostate" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;State must have a minimum of 4 characters
                </p>
              </div>

                <!-- Alerta country required -->
                <div class="alert alert-danger alert-dismissible ocultar" id="avisocountry" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;Country is required
                  </p>
                </div>
          </div>
        </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="city">City <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" class="form-control"  name="city" id="city" onkeyup="ValidarLargocity()" value="<?= $value['billingCity']; ?>">
                  <?php endforeach; ?>
                <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                  <?php foreach ($_SESSION['FORM1'] as $val): ?>
                    <input type="text" class="form-control"  name="city" id="city" onkeyup="ValidarLargocity()" value="<?= ucwords($val['city']); ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="city" id="city" onkeyup="ValidarLargocity()" value="">
                <?php endif; ?>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="address">Address <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" class="form-control"  name="address" id="address" onkeyup="ValidarLargoaddress()" value="<?= $value['billingAddress']; ?>">
                  <?php endforeach; ?>
                <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                  <?php foreach ($_SESSION['FORM1'] as $val): ?>
                    <input type="text" class="form-control"  name="address" id="address" onkeyup="ValidarLargoaddress()" value="<?= $val['address']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="address" id="address" onkeyup="ValidarLargoaddress()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoaddress" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Addres is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoaddress" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Address must have a minimum of 8 characters
                </p>
              </div>

                <!-- Alerta address required -->
                <div class="alert alert-danger alert-dismissible ocultar" id="avisocity" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;City is required
                  </p>
                </div>

                <!-- Alerta address largo -->
                <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
                  </p>
                </div>
          </div>
        </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="zipcode">Zip Code <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" name="zipcode" class="form-control" id="zipcode" onkeyup="validarLargozipcode()" value="<?= $value['billingZipCode']; ?>">
                    <input type="hidden" name="idaddresses" class="form-control" id="idaddresses" value="<?= $value['idAddresses']; ?>">
                  <?php endforeach; ?>
              <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                <?php foreach ($_SESSION['FORM1'] as $val): ?>
                  <input type="text" name="zipcode" class="form-control" id="zipcode" onkeyup="validarLargozipcode()" value="<?= $val['zipcode']; ?>">
                <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="zipcode" class="form-control" id="zipcode" onkeyup="validarLargozipcode()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta zipcode required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcode" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Zip Code is required
                </p>
              </div>

              <!-- Alerta zipcode required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcode" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Zip Code must have a minimum of 3 characters
                </p>
              </div>
          </div>
        </div>

          <br/>
          <br/>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <center>
                <h2 class="social-title">Shipping Address</h2>
              </center>
            </div>
          </div>
          <br/>
          <br/>

    <?php require_once 'union2.php'; ?>
          <!-- Alerta validaciones de errores -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisovalidaciones2" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp; Fix errors to continue with the registration
            </p>
          </div>

          <!-- Alert procesando -->
          <center class="ocultar" id="carga2">
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-spinner fa-spin fa-3x"></i>&nbsp;
                Procesing information...!
              </p>
            </div>
          </center>

          <!-- Alert exito en la actualización -->
          <center class="ocultar" id="exitoguardar2">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-check fa-2x"></i>&nbsp;
                Information Saved Successfully.!
              </p>
            </div>
          </center>

          <!-- Alert exito en la actualización -->
          <center class="ocultar" id="exitoupdateform2">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-check fa-2x"></i>&nbsp;
                Information Updated Successfully.!
              </p>
            </div>
          </center>

          <div class="row">
            <?php if (isset($userAddress) && $userAddress != NULL): ?>
              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-1">
                <div class="form-group">
                  <a href="<?= URL ?>home/index" class="btn btn-primary" name="btn-previus">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;
                    Previous
                  </a>
                </div>
              </div>
              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-1">
                <div class="form-group">
                  <button type="button" class="btn btn-warning" name="btn-update" onclick="FormularioActualizacionForm2()">
                    <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;
                    Update
                  </button>
                </div>
              </div>
              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-1">
                <div class="form-group">
                  <a href="<?= URL ?>home/index3" class="btn btn-primary" name="btn-go">
                    Next (2/4)
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;
                  </a>
                </div>
              </div>
            <?php else: ?>
              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-1">
                <div class="form-group">
                  <a href="<?= URL ?>home/index" class="btn btn-primary" name="btn-previus">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;
                    Previous
                  </a>
                </div>
              </div>

              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-5">
                <div class="form-group">
                  <button type="button" class="btn btn-primary" onclick="ValidarFormularioCustomers2()" name="btn-next">
                    Next (2/4)
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
