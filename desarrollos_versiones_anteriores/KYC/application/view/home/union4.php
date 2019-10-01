
<!-- <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <center>
      <h2 class="social-title">Business Locations</h2>
    </center>
  </div>
</div> -->

<?php if (isset($userBusiness) && !empty($userBusiness)): ?>
  <?php foreach ($query4 as $value): ?><!-- Inicio foreach $query4 -->
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-11">
        <hr class="hr">
        <fieldset>
          <legend><h2>Location One</h2></legend>
        </div>
      </div>

      <?php foreach ($businessLocations as $val): ?>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5">
            <div class="form-group">
              <label for="country1">Country <span class="red">*</span></label>
            </div>
            <div class="form-group">
              <select class="form-control" name="businesscountry1" id="businessCountry1" onchange="ValidarBusinnessCountry1()">
                <option value="<?= $val['Country1']; ?>" <?= $val['Country1'] != ''? 'selected="selected"' : '' ?>><?= $val['Country1']; ?></option>
                <?php foreach ($pais as $value): ?>
                  <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
            <div class="form-group">
              <label for="businessstate1">State <span class="red">*</span></label>
            </div>
            <div class="form-group">
              <input type="text" name="BusinessState1" class="form-control" id="businessstate1" onkeyup="ValidarLargoState01()" value="<?= $val['State1']; ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
            <div class="alert alert-danger alert-dismissible ocultar" id="avisoBusinessCountry1" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;Country is required
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="avisobusinessState1" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;State is required
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostate1" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;State must have a minimum of 4 characters
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5">
            <div class="form-group">
              <label for="city1">City <span class="red">*</span></label>
            </div>
            <div class="form-group">
              <input type="text" name="BusinessCity1" class="form-control" id="businesscity1" onkeyup="validarLargoCity01()" value="<?= $val['City1']; ?>">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
            <div class="form-group">
              <label for="dirbusiness1">Address one<span class="red">*</span></label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  name="BusinessAddress1" id="businessaddress1" onkeyup="ValidarLargoDirBusiness01()" value="<?= $val['Address1']; ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
            <div class="alert alert-danger alert-dismissible ocultar" id="avisoBusinessCity1" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;City is required
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity1" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="avisoBusinessAddres1" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;Address One is required
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness01" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;Address One must have a minimum of 8 characters
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5">
            <div class="form-group">
              <label for="storename1">Store Name <span class="red">*</span></label>
            </div>
            <div class="form-group">
              <input type="text" name="Businessstorename1" class="form-control" id="businessstorename1" onkeyup="validarLargoStoreName01()" value="<?= $val['storeName1']; ?>">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
            <div class="form-group">
              <label for="zipcode1">Zip Code <span class="red">*</span></label>
            </div>
            <div class="form-group">
              <input type="text" name="Businesszipcode1" class="form-control" id="businesszipcode1" onkeyup="validarLargoZipcode01()" value="<?= $val['zipCode1']; ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

            <div class="alert alert-danger alert-dismissible ocultar" id="avisoBusinessStorename1" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;Store Name is required
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="avisoBusinessZipcode1" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;Zip Code is required
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoBusinessStore" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoBusinesszipcode" role="alert">
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
      <?php endforeach; ?>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <p class="text-afirmative">
              <strong>* If you more than One Business Locations, please add by doing click in the button</strong>
            </p>
          </div>
          <div class="form-group">
            <button type="button" name="btn-mas" class="btn btn-warning" id="masdirecciones" onclick="mostrarDirecciones()">
              Add Address
            </button>
            <button type="button" name="btn-mas" class="btn btn-warning ocultar" id="menosdirecciones" onclick="ocultarDirecciones()">
              Hide Address
            </button>
          </div>
        </div>
      </div>

      <?php foreach ($businessLocations as $val): ?><!--Foreach shipping address -->
        <div class="ocultar" id="othersAddress">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <p class="text-afirmative">
                <strong>
                  * Add or Delete the number of locations that you considered necessary
                </strong>
              </p>
            </div>
          </div>
          <!-- Location Two -->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-11">
              <hr class="hr">
              <fieldset>
                <legend><h2>Location Two</h2></legend>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-5">
                <div class="form-group">
                  <label for="country1">Country <span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <select class="form-control" name="BusinessCountry02" id="businesscountry02" onchange="ValidarCountry02()">
                    <option value="">---</option>
                    <option value="<?= $val['Country2']; ?>" <?= $val['Country2'] != ''? 'selected="selected"' : '' ?>><?= $val['Country2']; ?></option>
                    <?php foreach ($pais as $value): ?>
                      <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                <div class="form-group">
                  <label for="state1">State <span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <input type="text" name="BusinessState02" class="form-control" id="bussinessstate02" onkeyup="ValidarLargoState02()" value="<?= $val['state2']; ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-5">
                <div class="form-group">
                  <label for="city1">City <span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <input type="text" name="BusinessCity02" class="form-control" id="businesscity02" onkeyup="validarLargoCity02()" value="<?= $val['city2']; ?>">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                <div class="form-group">
                  <label for="dirbusiness1">Address Two<span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control"  name="BusinessAddress2" id="businessaddress2" onkeyup="ValidarLargoDirBusiness02()" value="<?= $val['Address2']; ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-5">
                <div class="form-group">
                  <label for="storename1">Store Name <span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <input type="text" name="BusinessStorename2" class="form-control" id="businessstorename2" onkeyup="validarLargoStoreName02()" value="<?= $val['storeName2']; ?>">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                <div class="form-group">
                  <label for="zipcode1">Zip Code <span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <input type="text" name="BusinessZipcode2" class="form-control" id="businesszipcode2" onkeyup="validarLargoZipcode02()" value="<?= $val['zipCode2']; ?>">
                </div>
              </div>
            </div>

            <!-- Location Three -->
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-11">
                <hr class="hr">
                <fieldset>
                  <legend><h2>Location Three</h2></legend>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5">
                  <div class="form-group">
                    <label for="country1">Country <span class="red">&nbsp;</span></label>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="BusinessCountry3" id="businesscountry3" onchange="ValidarCountry03()">
                      <option value="">---</option>
                      <option value="<?= $val['Country3']; ?>" <?= $val['Country3'] != ''? 'selected="selected"' : '' ?>><?= $val['Country3']; ?></option>
                      <?php foreach ($pais as $value): ?>
                        <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                  <div class="form-group">
                    <label for="state1">State <span class="red">&nbsp;</span></label>
                  </div>
                  <div class="form-group">
                    <input type="text" name="BusinessState3" class="form-control" id="businessstate3" onkeyup="ValidarLargoState03()" value="<?= $val['State3']; ?>">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5">
                  <div class="form-group">
                    <label for="city1">City <span class="red">&nbsp;</span></label>
                  </div>
                  <div class="form-group">
                    <input type="text" name="Businesscity3" class="form-control" id="businesscity3" onkeyup="validarLargoCity03()" value="<?= $val['City3']; ?>">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                  <div class="form-group">
                    <label for="dirbusiness1">Address Three<span class="red">&nbsp;</span></label>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control"  name="BusinessAddress3" id="businessaddress3" onkeyup="ValidarLargoDirBusiness03()" value="<?= $val['Address3']; ?>">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5">
                  <div class="form-group">
                    <label for="storename1">Store Name <span class="red">&nbsp;</span></label>
                  </div>
                  <div class="form-group">
                    <input type="text" name="BusinessStorename3" class="form-control" id="businessstorename3" onkeyup="validarLargoStoreName03()" value="<?= $val['storeName3']; ?>">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                  <div class="form-group">
                    <label for="zipcode1">Zip Code <span class="red">&nbsp;</span></label>
                  </div>
                  <div class="form-group">
                    <input type="text" name="BusinessZipcode3" class="form-control" id="businesszipcode3" onkeyup="validarLargoZipcode03()" value="<?= $val['zipCode3']; ?>">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-11">
                  <hr class="hr">
                  <fieldset>
                    <legend><h2>Location Four</h2></legend>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="form-group">
                      <label for="country1">Country <span class="red">&nbsp;</span></label>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="BusinessCountry04" id="businesscountry4" onchange="ValidarCountry04()">
                        <option value="">---</option>
                        <option value="<?= $val['Country4']; ?>" <?= $val['Country4'] != ''? 'selected="selected"' : '' ?>><?= $val['Country4']; ?></option>
                        <?php foreach ($pais as $value): ?>
                          <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                    <div class="form-group">
                      <label for="state1">State <span class="red">&nbsp;</span></label>
                    </div>
                    <div class="form-group">
                      <input type="text" name="BusinessState4" class="form-control" id="businessstate4" onkeyup="ValidarLargoState04()" value="<?= $val['State4']; ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="form-group">
                      <label for="city1">City <span class="red">&nbsp;</span></label>
                    </div>
                    <div class="form-group">
                      <input type="text" name="BusinessCity4" class="form-control" id="businesscity4" onkeyup="validarLargoCity04()" value="<?= $val['City4']; ?>">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                    <div class="form-group">
                      <label for="dirbusiness1">Address Four<span class="red">&nbsp;</span></label>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control"  name="BusinessAddress4" id="businessaddress4" onkeyup="ValidarLargoDirBusiness04()" value="<?= $val['Address4']; ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="form-group">
                      <label for="storename1">Store Name <span class="red">&nbsp;</span></label>
                    </div>
                    <div class="form-group">
                      <input type="text" name="BusinessStorename4" class="form-control" id="businessstorename4" onkeyup="validarLargoStoreName04()" value="<?= $val['storeName4']; ?>">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                    <div class="form-group">
                      <label for="zipcode1">Zip Code <span class="red">&nbsp;</span></label>
                    </div>
                    <div class="form-group">
                      <input type="text" name="BusinessZipcode4" class="form-control" id="businesszipcode4" onkeyup="validarLargoZipcode04()" value="<?= $val['zipCode4']; ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-11">
                    <hr class="hr">
                    <fieldset>
                      <legend><h2>Location Five</h2></legend>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <div class="form-group">
                        <label for="country1">Country <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="BusinessCountry5" id="businesscountry5" onchange="ValidarCountry05()">
                          <option value="">---</option>
                          <option value="<?= $val['Contry5']; ?>" <?= $val['Contry5'] != ''? 'selected="selected"' : '' ?>><?= $val['Contry5']; ?></option>
                          <?php foreach ($pais as $value): ?>
                            <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                      <div class="form-group">
                        <label for="state1">State <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="BusinessState5" class="form-control" id="businessstate5" onkeyup="ValidarLargoState05()" value="<?= $val['State5']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <div class="form-group">
                        <label for="city1">City <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="BusinessCity5" class="form-control" id="businesscity5" onkeyup="validarLargoCity05()" value="<?= $val['City5']; ?>">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                      <div class="form-group">
                        <label for="dirbusiness1">Address Five<span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control"  name="BusinessAddress5" id="businessaddress5" onkeyup="ValidarLargoDirBusiness05()" value="<?= $val['Address5']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <div class="form-group">
                        <label for="storename1">Store Name <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="BusinessStorename5" class="form-control" id="businessstorename5" onkeyup="validarLargoStoreName05()" value="<?= $val['storeName5']; ?>">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                      <div class="form-group">
                        <label for="zipcode1">Zip Code <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="BusinessZipcode5" class="form-control" id="businesszipcode5" onkeyup="validarLargoZipcode05()" value="<?= $val['zipCode5']; ?>">
                      </div>
                    </div>
                  </div>
                </div>

              <?php endforeach; ?><!--fin Foreach shipping address -->
            <?php endforeach; ?><!-- Cierre foreach $query4 -->
          <?php else: ?>
            <?php require APP. 'view/home/BusinessAddress.php'; ?>
          <?php endif; ?>
