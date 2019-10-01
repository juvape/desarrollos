
<?php if (isset($userAddress) && !empty($userAddress)): ?>
  <?php foreach ($query2 as $value): ?><!-- Inicio foreach $query2 -->
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-11">
          <hr class="hr">
          <fieldset>
            <legend><h2>Location One</h2></legend>
          </div>
        </div>

        <?php foreach ($shippingAddress as $val): ?><!--Foreach shipping address -->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="country1">Country <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <select class="form-control" name="shippingcountry1" id="shippingcountryone" onchange="ValidarCountry1()">
                  <option value="<?= $val['Country1']; ?>" <?= $val['Country1'] != ''? 'selected="selected"' : '' ?>><?= $val['Country1']; ?></option>
                  <?php foreach ($pais as $value): ?>
                    <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="state1">State <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" name="state1" class="form-control" id="state1" onkeyup="ValidarLargoState01()" value="<?= $val['State1']; ?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoshippingcountry1" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Country is required
                </p>
              </div>

              <div class="alert alert-danger alert-dismissible ocultar" id="avisostate1" role="alert">
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
                <input type="text" name="city1" class="form-control" id="city1" onkeyup="validarLargoCity01()" value="<?= $val['City1']; ?>">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="dirbusiness1">Address one<span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="dirbusiness1" id="dirbusiness1" onkeyup="ValidarLargoDirBusiness01()" value="<?= $val['Address1']; ?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <div class="alert alert-danger alert-dismissible ocultar" id="avisocity1" role="alert">
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

              <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness1" role="alert">
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
                <input type="text" name="storename1" class="form-control" id="storename1" onkeyup="validarLargoStoreName01()" value="<?= $val['storeName1']; ?>">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="zipcode1">Zip Code <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input type="text" name="zipcode1" class="form-control" id="zipcode1" onkeyup="validarLargoZipcode01()" value="<?= $val['ZipCode1']; ?>">
              </div>
            </div>
          </div>
      <?php endforeach; ?><!--fin Foreach shipping address -->

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <p class="text-afirmative">
              <strong>* If you more than One shipping address, please add by doing click in the button</strong>
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

      <?php foreach ($shippingAddress as $val): ?><!--Foreach shipping address -->
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
                      <select class="form-control" name="country02" id="country02" onchange="ValidarCountry02()">
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
                      <input type="text" name="state02" class="form-control" id="state02" onkeyup="ValidarLargoState02()" value="<?= $val['State2']; ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="form-group">
                      <label for="city1">City <span class="red">&nbsp;</span></label>
                    </div>
                    <div class="form-group">
                      <input type="text" name="city02" class="form-control" id="city02" onkeyup="validarLargoCity02()" value="<?= $val['City2']; ?>">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                    <div class="form-group">
                      <label for="dirbusiness1">Address Two<span class="red">&nbsp;</span></label>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control"  name="dirbusiness2" id="dirbusiness2" onkeyup="ValidarLargoDirBusiness02()" value="<?= $val['Address2']; ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="form-group">
                      <label for="storename1">Store Name <span class="red">&nbsp;</span></label>
                    </div>
                    <div class="form-group">
                      <input type="text" name="storename2" class="form-control" id="storename2" onkeyup="validarLargoStoreName02()" value="<?= $val['storeName2']; ?>">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                    <div class="form-group">
                      <label for="zipcode1">Zip Code <span class="red">&nbsp;</span></label>
                    </div>
                    <div class="form-group">
                      <input type="text" name="zipcode2" class="form-control" id="zipcode2" onkeyup="validarLargoZipcode02()" value="<?= $val['ZipCode2']; ?>">
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
                        <select class="form-control" name="shippingcountry3" id="shippingcountrythree" onchange="ValidarCountry03()">
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
                        <input type="text" name="state3" class="form-control" id="state3" onkeyup="ValidarLargoState03()" value="<?= $val['State3']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <div class="form-group">
                        <label for="city1">City <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="city3" class="form-control" id="city3" onkeyup="validarLargoCity03()" value="<?= $val['City3']; ?>">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                      <div class="form-group">
                        <label for="dirbusiness1">Address Three<span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control"  name="dirbusiness3" id="dirbusiness3" onkeyup="ValidarLargoDirBusiness03()" value="<?= $val['Address3']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <div class="form-group">
                        <label for="storename1">Store Name <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="storename3" class="form-control" id="storename3" onkeyup="validarLargoStoreName03()" value="<?= $val['storeName3']; ?>">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                      <div class="form-group">
                        <label for="zipcode1">Zip Code <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="zipcode3" class="form-control" id="zipcode3" onkeyup="validarLargoZipcode03()" value="<?= $val['ZipCode3']; ?>">
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
                        <select class="form-control" name="country04" id="country4" onchange="ValidarCountry04()">
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
                        <input type="text" name="state4" class="form-control" id="state4" onkeyup="ValidarLargoState04()" value="<?= $val['State4']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <div class="form-group">
                        <label for="city1">City <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="city4" class="form-control" id="city4" onkeyup="validarLargoCity04()" value="<?= $val['City4']; ?>">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                      <div class="form-group">
                        <label for="dirbusiness1">Address Four<span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control"  name="dirbusiness4" id="dirbusiness4" onkeyup="ValidarLargoDirBusiness04()" value="<?= $val['Address4']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <div class="form-group">
                        <label for="storename1">Store Name <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="storename4" class="form-control" id="storename4" onkeyup="validarLargoStoreName04()" value="<?= $val['storeName4']; ?>">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                      <div class="form-group">
                        <label for="zipcode1">Zip Code <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="zipcode4" class="form-control" id="zipcode4" onkeyup="validarLargoZipcode04()" value="<?= $val['ZipCode4']; ?>">
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
                        <select class="form-control" name="country5" id="country5" onchange="ValidarCountry05()">
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
                        <input type="text" name="state5" class="form-control" id="state5" onkeyup="ValidarLargoState05()" value="<?= $val['State5']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <div class="form-group">
                        <label for="city1">City <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="city5" class="form-control" id="city5" onkeyup="validarLargoCity05()" value="<?= $val['City5']; ?>">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                      <div class="form-group">
                        <label for="dirbusiness1">Address Five<span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control"  name="dirbusiness5" id="dirbusiness5" onkeyup="ValidarLargoDirBusiness05()" value="<?= $val['Address5']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <div class="form-group">
                        <label for="storename1">Store Name <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="storename5" class="form-control" id="storename5" onkeyup="validarLargoStoreName05()" value="<?= $val['storeName5']; ?>">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                      <div class="form-group">
                        <label for="zipcode1">Zip Code <span class="red">&nbsp;</span></label>
                      </div>
                      <div class="form-group">
                        <input type="text" name="zipcode5" class="form-control" id="zipcode5" onkeyup="validarLargoZipcode05()" value="<?= $val['ZipCode5']; ?>">
                      </div>
                    </div>
                  </div>
              </div>

          <?php endforeach; ?><!--fin Foreach shipping address -->
            <?php endforeach; ?><!-- Cierre foreach $query2 -->
          <?php else: ?>
            <?php require APP. 'view/home/shippingAddress.php'; ?>
          <?php endif; ?>
