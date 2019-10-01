
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
                        <option value="">---</option>
                      <?php foreach ($query2 as $value): ?>
                        <option value="sole-propiertor" <?= $value['typeCompany'] == 'sole-propiertor'? 'selected="selected"' : '' ?> >Sole Propiertor</option>
                        <option value="limited-society" <?= $value['typeCompany'] == 'limited-society'? 'selected="selected"' : '' ?> >Limited Society</option>
                        <option value="corporation" <?= $value['typeCompany'] == 'corporation'? 'selected="selected"' : '' ?> >Corporation</option>
                        <option value="pathership" <?= $value['typeCompany'] == 'pathership'? 'selected="selected"' : '' ?> >Pathership</option>
                        <option value="other" <?= $value['typeCompany'] == 'other'? 'selected="selected"' : '' ?> >Other</option>
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
                    <input type="text" class="form-control"  name="phone2" id="phone2" onkeyup="ValidarLargoPhone2()" value="<?= $value['phone']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="phone2" id="phone2" onkeyup="ValidarLargoPhone2()" value="">
                <?php endif; ?>
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
                <label for="country2">Country <span class="red">*</span></label>
              </div>
              <div class="form-group">
                  <select class="form-control" name="country2" id="country2" onchange="ValidarCountry2()">
                    <option value="">---</option>
                    <?php if (isset($userAddress) && $userAddress != NULL): ?>
                      <?php foreach ($query2 as $value): ?>
                        <option value="<?= $value['billingCountry']; ?>" <?= $value['billingCountry'] == $value['billingCountry'] ? 'selected="selected"' : '' ?>><?= $value['billingCountry']; ?></option>
                        <?php foreach ($pais as $value): ?>
                          <option value="<?= $value['countryName']; ?>"><?= $value['countryName']; ?></option>
                        <?php endforeach; ?>
                      <?php endforeach; ?>
                    <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                      <?php foreach ($_SESSION['FORM1'] as $val): ?>
                        <option value="<?= $val['country']; ?>" <?= $val['country'] == $val['country'] ? 'selected="selected"' : '' ?>><?= $val['country']; ?></option>
                        <?php foreach ($pais as $value): ?>
                          <option value="<?= $value['countryName']; ?>"><?= $value['countryName']; ?></option>
                        <?php endforeach; ?>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <?php foreach ($pais as $value): ?>
                        <option value="<?= $value['countryName']; ?>"><?= $value['countryName']; ?></option>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="state2">State <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" name="state2" class="form-control" id="state2" onkeyup="ValidarLargoState2()" value="<?= $value['billingState']; ?>">
                  <?php endforeach; ?>
                <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                  <?php foreach ($_SESSION['FORM1'] as $val): ?>
                    <input  type="text" name="state2" class="form-control" id="state2" onkeyup="ValidarLargoState2()" value="<?= $val['state']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="state2" class="form-control" id="state2" onkeyup="ValidarLargoState2()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisostate2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;State is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostate2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;State must have a minimum of 3 characters
                </p>
              </div>

                <!-- Alerta country required -->
                <div class="alert alert-danger alert-dismissible ocultar" id="avisocountry2" role="alert">
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
                <label for="city2">City <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" class="form-control"  name="city2" id="city2" onkeyup="ValidarLargoCity2()" value="<?= $value['billingCity']; ?>">
                  <?php endforeach; ?>
                <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                  <?php foreach ($_SESSION['FORM1'] as $val): ?>
                    <input type="text" class="form-control"  name="city2" id="city2" onkeyup="ValidarLargoCity2()" value="<?= $val['city']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="city2" id="city2" onkeyup="ValidarLargoCity2()" value="">
                <?php endif; ?>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="address2">Address <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" class="form-control"  name="address2" id="address2" onkeyup="ValidarLargoAddress2()" value="<?= $value['billingAddress']; ?>">
                  <?php endforeach; ?>
                <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                  <?php foreach ($_SESSION['FORM1'] as $val): ?>
                    <input type="text" class="form-control"  name="address2" id="address2" onkeyup="ValidarLargoAddress2()" value="<?= $val['address']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="address2" id="address2" onkeyup="ValidarLargoAddress2()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoaddress2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Addres is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoaddress2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Address must have a minimum of 10 characters
                </p>
              </div>

                <!-- Alerta address required -->
                <div class="alert alert-danger alert-dismissible ocultar" id="avisocity2" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;City is required
                  </p>
                </div>

                <!-- Alerta address largo -->
                <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity2" role="alert">
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
                <label for="zipcode2">Zip Code <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                    <input type="text" name="zipcode2" class="form-control" id="zipcode2" onkeyup="validarLargoZipcode2()" value="<?= $value['billingZipCode']; ?>">
                  <?php endforeach; ?>
              <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                <?php foreach ($_SESSION['FORM1'] as $val): ?>
                  <input type="text" name="zipcode2" class="form-control" id="zipcode2" onkeyup="validarLargoZipcode2()" value="<?= $val['zipcode']; ?>">
                <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="zipcode2" class="form-control" id="zipcode2" onkeyup="validarLargoZipcode2()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta zipcode required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcode2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Zip Code is required
                </p>
              </div>

              <!-- Alerta zipcode required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcode2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Zip Code must have a minimum of 5 characters
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

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="country3">Country <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <select class="form-control" name="country3" id="country3" onchange="ValidarCountry3()">
                  <?php if (isset($userAddress) && $userAddress != NULL): ?>
                    <?php foreach ($query2 as $value): ?>
                      <option value="<?= $value['shippingCountry']; ?>"><?= $value['shippingCountry']; ?></option>
                      <?php foreach ($pais as $value): ?>
                        <option value="<?= $value['countryName']; ?>"><?= $value['countryName']; ?></option>
                      <?php endforeach; ?>
                    <?php endforeach; ?>
                  <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                    <?php foreach ($_SESSION['FORM1'] as $val): ?>
                      <option value="<?= $val['country']; ?>" <?= $val['country'] == $val['country'] ? 'selected="selected"' : '' ?>><?= $val['country']; ?></option>
                      <?php foreach ($pais as $value): ?>
                        <option value="<?= $value['countryName']; ?>"><?= $value['countryName']; ?></option>
                      <?php endforeach; ?>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <option value="">---</option>
                    <?php foreach ($pais as $value): ?>
                      <option value="<?= $value['countryName']; ?>"><?= $value['countryName']; ?></option>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="state3">State <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                      <input type="text" name="state3" class="form-control" id="state3" onkeyup="ValidarLargoState3()" value="<?= $value['shippingState']; ?>">
                  <?php endforeach; ?>
                <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                  <?php foreach ($_SESSION['FORM1'] as $val): ?>
                    <input type="text" name="state3" class="form-control" id="state3" onkeyup="ValidarLargoState3()" value="<?= $val['state']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="state3" class="form-control" id="state3" onkeyup="ValidarLargoState3()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisostate3" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;State is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostate3" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;State must have a minimum of 5 characters
                </p>
              </div>

                <!-- Alerta address required -->
                <div class="alert alert-danger alert-dismissible ocultar" id="avisocountry3" role="alert">
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
                <label for="city3">City <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                      <input type="text" name="city3" class="form-control" id="city3" onkeyup="validarLargoCity3()" value="<?= $value['shippingCity']; ?>">
                  <?php endforeach; ?>
                <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                  <?php foreach ($_SESSION['FORM1'] as $val): ?>
                    <input type="text" name="city3" class="form-control" id="city3" onkeyup="validarLargoCity3()" value="<?= $val['city']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                    <input type="text" name="city3" class="form-control" id="city3" onkeyup="validarLargoCity3()" value="">
                <?php endif; ?>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="address3">Address <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userAddress) && $userAddress != NULL): ?>
                  <?php foreach ($query2 as $value): ?>
                      <input type="text" name="address3" class="form-control" id="address3" onkeyup="validarLargoAddress3()" value="<?= $value['shippingAddress']; ?>">
                  <?php endforeach; ?>
                <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
                  <?php foreach ($_SESSION['FORM1'] as $val): ?>
                    <input type="text" name="address3" class="form-control" id="address3" onkeyup="validarLargoAddress3()" value="<?= $val['address']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                    <input type="text" name="address3" class="form-control" id="address3" onkeyup="validarLargoAddress3()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoaddress3" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Addres is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoaddress3" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Address must have a minimum of 10 characters
                </p>
              </div>

                <!-- Alerta address required -->
                <div class="alert alert-danger alert-dismissible ocultar" id="avisocity3" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;City is required
                  </p>
                </div>

                <!-- Alerta address largo -->
                <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity3" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;City must have a minimum of 5 characters
                  </p>
                </div>
          </div>
        </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5">
          <div class="form-group">
            <label for="storename">Store Name <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($userAddress) && $userAddress != NULL): ?>
              <?php foreach ($query2 as $value): ?>
                  <input type="text" name="storename" class="form-control" id="storename" onkeyup="validarLargoStoreName()" value="<?= $value['storeName']; ?>">
              <?php endforeach; ?>
            <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
              <?php foreach ($_SESSION['FORM1'] as $val): ?>
                <input type="text" name="storename" class="form-control" id="storename" onkeyup="validarLargoStoreName()" value="<?= $val['storename']; ?>">
              <?php endforeach; ?>
            <?php else: ?>
                <input type="text" name="storename" class="form-control" id="storename" onkeyup="validarLargoStoreName()" value="">
            <?php endif; ?>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="zipcode3">Zip Code <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($userAddress) && $userAddress != NULL): ?>
              <?php foreach ($query2 as $value): ?>
                  <input type="text" name="zipcode3" class="form-control" id="zipcode3" onkeyup="validarLargoZipcode3()" value="<?= $value['shippingZipCode']; ?>">
                  <input type="hidden" name="idaddresses" class="form-control" id="idaddresses" value="<?= $value['idAddresses']; ?>">
              <?php endforeach; ?>
            <?php elseif(isset($_SESSION['FORM1']) && $_SESSION['FORM1'] != NULL): ?>
              <?php foreach ($_SESSION['FORM1'] as $val): ?>
                <input type="text" name="zipcode3" class="form-control" id="zipcode3" onkeyup="validarLargoZipcode3()" value="<?= $val['zipcode']; ?>">
              <?php endforeach; ?>
            <?php else: ?>
                <input type="text" name="zipcode3" class="form-control" id="zipcode3" onkeyup="validarLargoZipcode3()" value="">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
          <!-- Alerta zipcode required -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcode3" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;Zip Code is required
            </p>
          </div>

          <div class="alert alert-danger alert-dismissible ocultar" id="avisostorename" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;Store Name is required
            </p>
          </div>

          <!-- Alerta zipcode required -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcode3" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Zip Code must have a minimum of 3 characters
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorename" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
          </p>
        </div>
      </div>
    </div>

    <!--Formulario Para Ingresar No se Que; aún no han dicho nombre para esto-->
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="businesslocation2">Select the quantity of locations <span class="red">*</span></label>
        </div>
        <div class="form-group">
          <select class="form-control"  name="businesslocation2" id="businesslocation2" onchange="Validarbusinesslocations()">
            <option value="">---</option>
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($query4 as $value): ?>
                <option value="1" <?= $value['businesslocation2'] == '1'? 'selected="selected"' : '' ?> >One</option>
                <option value="2" <?= $value['businesslocation2'] == '2'? 'selected="selected"' : '' ?> >Two</option>
                <option value="3" <?= $value['businesslocation2'] == '3'? 'selected="selected"' : '' ?> >Three</option>
                <option value="4" <?= $value['businesslocation2'] == '4'? 'selected="selected"' : '' ?> >Four</option>
                <option value="5" <?= $value['businesslocation2'] == '5'? 'selected="selected"' : '' ?> >Five</option>
                <option value="mas-5" <?= $value['businesslocation2'] == 'mas-5'? 'selected="selected"' : '' ?> >More than Five</option>
              <?php endforeach; ?>
            <?php else: ?>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              <option value="4">Four</option>
              <option value="5">Five</option>
              <option value="mas-5">More than Five</option>
            <?php endif; ?>
          </select>
        </div>
      </div>

      <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
        <?php foreach ($query4 as $value): ?>
          <?php if ($value['businesslocation2'] == "1" || $value['businesslocation2'] == "2" ||
                    $value['businesslocation2'] == "3"  || $value['businesslocation2'] == "4" ||
                    $value['businesslocation2'] == "5"): ?>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1" id="dirbusiness01">
              <div class="form-group">
                <label for="dirbusiness01">Enter the address one <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="dirbusiness01" id="dirbusiness01" onkeyup="ValidarLargodirbusiness01()" value="<?= $value['dirbusiness01']; ?>">
              </div>
            </div>
          <?php else: ?>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 ocultar" id="dirbusiness01">
              <div class="form-group">
                <label for="dirbusiness01">Enter the address one <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="dirbusiness01" id="dirbusiness01" onkeyup="ValidarLargodirbusiness01()">
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 ocultar" id="dirbusiness01">
          <div class="form-group">
            <label for="dirbusiness01">Enter the address one <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  name="dirbusiness01" id="dirbusiness01" onkeyup="ValidarLargodirbusiness01()">
          </div>
        </div>
      <?php  endif; ?>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <!-- Alerta address largo -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness01" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location One is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness01" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location One must have a minimum of 10 characters
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
        <?php foreach ($query4 as $value): ?>
          <?php if ($value['businesslocation2'] == "2" || $value['businesslocation2'] == "3" ||
                    $value['businesslocation2'] == "4" || $value['businesslocation2'] == "5"): ?>
            <div class="col-xs-12 col-sm-12 col-md-5" id="dirbusiness02">
              <div class="form-group">
                <label for="dirbusiness02">Enter the address two <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="dirbusiness02" id="dirbusiness02" onkeyup="ValidarLargodirbusiness02()" value="<?= $value['dirbusiness02']; ?>">
              </div>
            </div>
          <?php else: ?>
            <div class="col-xs-12 col-sm-12 col-md-5 ocultar" id="dirbusiness02">
              <div class="form-group">
                <label for="dirbusiness02">Enter the address two <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="dirbusiness02" id="dirbusiness02" onkeyup="ValidarLargodirbusiness02()" value="">
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="col-xs-12 col-sm-12 col-md-5 ocultar" id="dirbusiness02">
          <div class="form-group">
            <label for="dirbusiness02">Enter the address two <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  name="dirbusiness02" id="dirbusiness02" onkeyup="ValidarLargodirbusiness02()" value="">
          </div>
        </div>
      <?php endif; ?>

      <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
        <?php foreach ($query4 as $value): ?>
          <?php if ($value['businesslocation2'] == "3" || $value['businesslocation2'] == "4" ||
                    $value['businesslocation2'] == "5"): ?>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1" id="dirbusiness03">
              <div class="form-group">
                <label for="dirbusiness03">Enter the address three <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="dirbusiness03" id="dirbusiness03" onkeyup="ValidarLargodirbusiness03()" value="<?= $value['dirbusiness03']; ?>">
              </div>
            </div>
          <?php else: ?>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 ocultar" id="dirbusiness03">
              <div class="form-group">
                <label for="dirbusiness03">Enter the address three <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="dirbusiness03" id="dirbusiness03" onkeyup="ValidarLargodirbusiness03()">
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 ocultar" id="dirbusiness03">
          <div class="form-group">
            <label for="dirbusiness03">Enter the address three <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  name="dirbusiness03" id="dirbusiness03" onkeyup="ValidarLargodirbusiness03()">
          </div>
        </div>
      <?php endif;  ?>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <!-- Alerta address largo -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness02" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location Two is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness02" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location Two must have a minimum of 10 characters
          </p>
        </div>

        <!-- Alerta address largo -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness03" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location Three is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness03" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location Three must have a minimum of 10 characters
          </p>
        </div>
      </div>
    </div>

    <br/>
    <div class="row">
      <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
        <?php foreach ($query4 as $value): ?>
          <?php if ($value['businesslocation2'] == "4" || $value['businesslocation2'] == "5"): ?>
            <div class="col-xs-12 col-sm-12 col-md-5" id="dirbusiness04">
              <div class="form-group">
                <label for="dirbusiness04">Enter the address four <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="dirbusiness04" id="dirbusiness04" onkeyup="ValidarLargodirbusiness04()" value="<?= $value['dirbusiness04']; ?>">
              </div>
            </div>
          <?php else: ?>
            <div class="col-xs-12 col-sm-12 col-md-5 ocultar" id="dirbusiness04">
              <div class="form-group">
                <label for="dirbusiness04">Enter the address four <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="dirbusiness04" id="dirbusiness04" onkeyup="ValidarLargodirbusiness04()" value="">
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="col-xs-12 col-sm-12 col-md-5 ocultar" id="dirbusiness04">
          <div class="form-group">
            <label for="dirbusiness04">Enter the address four <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  name="dirbusiness04" id="dirbusiness04" onkeyup="ValidarLargodirbusiness04()">
          </div>
        </div>
      <?php endif; ?>

      <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
        <?php foreach ($query4 as $value): ?>
          <?php if ($value['businesslocation2'] == "5"): ?>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1" id="dirbusiness05">
              <div class="form-group">
                <label for="dirbusiness05">Enter the address five <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="dirbusiness05" id="dirbusiness05" onkeyup="ValidarLargodirbusiness05()" value="<?= $value['dirbusiness05']; ?>">
              </div>
            </div>
          <?php else: ?>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 ocultar" id="dirbusiness05">
              <div class="form-group">
                <label for="dirbusiness05">Enter the address five <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="dirbusiness05" id="dirbusiness05" onkeyup="ValidarLargodirbusiness05()">
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php else: ?>
        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 ocultar" id="dirbusiness05">
          <div class="form-group">
            <label for="dirbusiness05">Enter the address five <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  name="dirbusiness05" id="dirbusiness05" onkeyup="ValidarLargodirbusiness05()">
          </div>
        </div>
      <?php endif; ?>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <!-- Alerta address largo -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness04" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location Four is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness04" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location Four must have a minimum of 10 characters
          </p>
        </div>

        <!-- Alerta address largo -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness03" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location Three is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness03" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location Three must have a minimum of 10 characters
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
        <?php foreach ($query4 as $value): ?>
          <?php if ($value['businesslocation2'] == "mas-5"): ?>
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <div class="alert alert-success alert-dismissible" id="correobusinesslocationssended" role="alert">
                <p class="centrar">
                  <i class="fa fa-check fa-2x" aria-hidden="true"></i>&nbsp;
                  The mail to our representatives of Maaji has already been sent, if
                  you have not yet been contacted, do not worry, soon someone will do it.
                </p>
              </div>
            </div>
          <?php else: ?>
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

              <div class="alert alert-success alert-dismissible ocultar" id="correobusinesslocations" role="alert">
                <p class="centrar">
                  <i class="fa fa-check fa-2x" aria-hidden="true"></i>&nbsp;
                  <strong>Thanks!</strong>&nbsp;
                  We will send an email notification to our representatives,
                  soon someone will contact you.
                </p>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php else: ?>
          <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

            <div class="alert alert-success alert-dismissible ocultar" id="correobusinesslocations" role="alert">
              <p class="centrar">
                <i class="fa fa-check fa-2x" aria-hidden="true"></i>&nbsp;
                <strong>Thanks!</strong>&nbsp;
                We wil sent an email notification to our representatives,
                soon someone will contact you.
              </p>
            </div>
          </div>
      <?php endif; ?>

      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

        <div class="alert alert-danger alert-dismissible ocultar" id="avisobusinesslocation2" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Quantity of locations is required
          </p>
        </div>

        <!-- Alerta address required -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness04" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location Four is required
          </p>
        </div>

        <!-- Alerta address required -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness05" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location Five is required
          </p>
        </div>

        <!-- Alerta address required -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness05" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Location Five must have a minimum of 10 characters
          </p>
        </div>
      </div>

    </div>
    <!--/Formulario Para Ingresar No se Que; aún no han dicho nombre para esto-->



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
          <center class="ocultar" id="carga3">
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-spinner fa-spin fa-3x"></i>&nbsp;
                Procesing information...!
              </p>
            </div>
          </center>

          <!-- Alert exito en la actualización -->
          <center class="ocultar" id="exitoform2">
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
                  <button type="button" class="btn btn-warning" name="btn-update" onclick="ValidarFormularioActualizacionForm2()">
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
