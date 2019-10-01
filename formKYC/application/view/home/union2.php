<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-5">
    <div class="form-group">
      <label for="quantityLocationsShipping">Select the quantity of locations <span class="red">*</span></label>
    </div>
    <div class="form-group">
      <select class="form-control" onchange="shippingQuantityLoc()" name="quantitylocationsshipping" id="quantityLocationsShipping">
        <option value="">---</option>
        <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
          <?php foreach ($query2 as $value): ?>
            <option value="1" <?= $value['quantityLocations'] == '1'? 'selected="selected"' : '' ?> >One</option>
            <option value="2" <?= $value['quantityLocations'] == '2'? 'selected="selected"' : '' ?> >Two</option>
            <option value="3" <?= $value['quantityLocations'] == '3'? 'selected="selected"' : '' ?> >Three</option>
            <option value="4" <?= $value['quantityLocations'] == '4'? 'selected="selected"' : '' ?> >Four</option>
            <option value="5" <?= $value['quantityLocations'] == '5'? 'selected="selected"' : '' ?> >Five</option>
            <option value="mas-5" <?= $value['quantityLocations'] == 'mas-5'? 'selected="selected"' : '' ?> >More than Five</option>
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
</div>

<div id="f1">
        <hr class="hr">
        <fieldset>
          <legend><h2>Location One</h2></legend>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5">
          <div class="form-group">
            <label for="country1">Country <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <select class="form-control" name="country1" id="shippingcountry1" onchange="ValidarCountry1()">
              <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
                <?php foreach ($query2 as $value): ?>
                  <option value="<?= $value['billingCountry']; ?>"><?= $value['billingCountry']; ?></option>
                  <?php foreach ($pais as $value): ?>
                    <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                  <?php endforeach; ?>
                <?php endforeach; ?>

              <?php else: ?>
                <option value="">---</option>
                <?php foreach ($pais as $value): ?>
                  <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                <?php endforeach; ?>
              <?php endif; ?>
            </select>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="state1">State <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
              <?php foreach ($shippingAddress as $value): ?>
                <input type="text" name="state1" class="form-control" id="state1" onkeyup="ValidarLargoState01()" value="<?= $value['State1']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" name="state1" class="form-control" id="state1" onkeyup="ValidarLargoState01()" value="">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
          <!-- Alerta city required -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisoshippingcountry1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;Country is required
            </p>
          </div>

          <!-- Alerta address required -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisostate1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;State is required
            </p>
          </div>

          <!-- Alerta address largo -->
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
            <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
              <?php foreach ($shippingAddress as $value): ?>
                <input type="text" name="city1" class="form-control" id="city1" onkeyup="validarLargoCity01()" value="<?= $value['City1']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" name="city1" class="form-control" id="city1" onkeyup="validarLargoCity01()" value="">
            <?php endif; ?>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="dirbusiness1">Address one<span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
              <?php foreach ($shippingAddress as $value): ?>
                <input type="text" class="form-control"  name="dirbusiness1" id="dirbusiness1" onkeyup="ValidarLargoDirBusiness01()" value="<?= $value['Address1']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
            <input type="text" class="form-control"  name="dirbusiness1" id="dirbusiness1" onkeyup="ValidarLargoDirBusiness01()">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <!-- Alerta address required -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisocity1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;City is required
        </p>
        </div>

        <!-- Alerta address largo -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
        </p>
        </div>

      <!-- Alerta address largo -->
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
      <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
        <?php foreach ($shippingAddress as $value): ?>
          <input type="text" name="storename1" class="form-control" id="storename1" onkeyup="validarLargoStoreName01()" value="<?= $value['storeName1']; ?>">
        <?php endforeach; ?>

      <?php else: ?>
        <input type="text" name="storename1" class="form-control" id="storename1" onkeyup="validarLargoStoreName01()" value="">
      <?php endif; ?>
      </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
      <label for="zipcode1">Zip Code <span class="red">*</span></label>
      </div>
      <div class="form-group">
      <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
        <?php foreach ($shippingAddress as $value): ?>
          <input type="text" name="zipcode1" class="form-control" id="zipcode1" onkeyup="validarLargoZipcode01()" value="<?= $value['ZipCode1']; ?>">
          <input type="hidden" name="idaddresses" class="form-control" id="idaddresses" value="<?= $value['idAddresses']; ?>">
        <?php endforeach; ?>

      <?php else: ?>
        <input type="text" name="zipcode1" class="form-control" id="zipcode1" onkeyup="validarLargoZipcode01()" value="">
      <?php endif; ?>
      </div>
      </div>
      </div>

      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <div class="alert alert-danger alert-dismissible ocultar" id="avisostorename1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Store Name is required
        </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorename1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
        </p>
        </div>

      <!-- Alerta zipcode required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcode1" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;Zip Code is required
      </p>
      </div>

      <!-- Alerta zipcode required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcode1" role="alert">
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

      </fieldset>
</div>

<div id="f2">
            <hr class="hr">
            <fieldset>
              <legend><h2>Location Two</h2></legend>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="country02">Country <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <select class="form-control" name="country02" id="shippingcountry02" onchange="ValidarCountry02()">
                  <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
                    <?php foreach ($shippingAddress as $value): ?>
                      <option value="<?= $value['Country2']; ?>"><?= $value['Country2']; ?></option>
                      <?php foreach ($pais as $value): ?>
                        <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                      <?php endforeach; ?>
                    <?php endforeach; ?>

                  <?php else: ?>
                    <option value="">---</option>
                    <?php foreach ($pais as $value): ?>
                      <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="state02">State <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
                  <?php foreach ($shippingAddress as $value): ?>
                    <input type="text" name="state02" class="form-control" id="state02" onkeyup="ValidarLargoState02()" value="<?= $value['State2']; ?>">
                  <?php endforeach; ?>

                <?php else: ?>
                  <input type="text" name="state02" class="form-control" id="state02" onkeyup="ValidarLargoState02()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisocountry02" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Country is required
                </p>
              </div>

              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisostate02" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;State is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostate02" role="alert">
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
                <label for="city02">City <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
                  <?php foreach ($shippingAddress as $value): ?>
                    <input type="text" name="city02" class="form-control" id="city02" onkeyup="validarLargoCity02()" value="<?= $value['City2']; ?>">
                  <?php endforeach; ?>

                <?php else: ?>
                  <input type="text" name="city02" class="form-control" id="city02" onkeyup="validarLargoCity02()" value="">
                <?php endif; ?>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="address2">Address Two<span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
                  <?php foreach ($shippingAddress as $value): ?>
                    <input type="text" class="form-control"  name="dirbusiness2" id="dirbusiness2" onkeyup="ValidarLargoDirBusiness02()" value="<?= $value['Address2']; ?>">
                  <?php endforeach; ?>

                <?php else: ?>
                  <input type="text" class="form-control"  name="dirbusiness2" id="dirbusiness2" onkeyup="ValidarLargoDirBusiness02()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
            <!-- Alerta address required -->
            <div class="alert alert-danger alert-dismissible ocultar" id="avisocity02" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;City is required
            </p>
            </div>

          <!-- Alerta address largo -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity02" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
          </p>
          </div>

          <!-- Alerta address largo -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness2" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Address Two is required
          </p>
          </div>

          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness2" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Address Two must have a minimum of 8 characters
          </p>
          </div>

          </div>
          </div>

          <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5">
          <div class="form-group">
          <label for="storename02">Store Name <span class="red">*</span></label>
          </div>
          <div class="form-group">
          <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
            <?php foreach ($shippingAddress as $value): ?>
              <input type="text" name="storename02" class="form-control" id="storename02" onkeyup="validarLargoStoreName02()" value="<?= $value['storeName2']; ?>">
            <?php endforeach; ?>

          <?php else: ?>
            <input type="text" name="storename02" class="form-control" id="storename02" onkeyup="validarLargoStoreName02()" value="">
          <?php endif; ?>
          </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
          <label for="zipcode02">Zip Code <span class="red">*</span></label>
          </div>
          <div class="form-group">
          <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
            <?php foreach ($shippingAddress as $value): ?>
              <input type="text" name="zipcode02" class="form-control" id="zipcode02" onkeyup="validarLargoZipcode02()" value="<?= $value['ZipCode2']; ?>">
            <?php endforeach; ?>

          <?php else: ?>
            <input type="text" name="zipcode02" class="form-control" id="zipcode02" onkeyup="validarLargoZipcode02()" value="">
          <?php endif; ?>
          </div>
          </div>
          </div>

          <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
            <div class="alert alert-danger alert-dismissible ocultar" id="avisostorename02" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;Store Name is required
            </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorename02" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
            </p>
            </div>

          <!-- Alerta zipcode required -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcode02" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Zip Code is required
          </p>
          </div>


          <!-- Alerta zipcode required -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcode02" role="alert">
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


          </fieldset>
</div>

<div id="f3">
        <hr class="hr">
        <fieldset>
          <legend><h2>Location Three</h2></legend>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5">
          <div class="form-group">
            <label for="country03">Country <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <select class="form-control" name="country03" id="shippingcountry03" onchange="ValidarCountry03()">
              <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
                <?php foreach ($shippingAddress as $value): ?>
                  <option value="<?= $value['Country3']; ?>"><?= $value['Country3']; ?></option>
                  <?php foreach ($pais as $value): ?>
                    <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                  <?php endforeach; ?>
                <?php endforeach; ?>

              <?php else: ?>
                <option value="">---</option>
                <?php foreach ($pais as $value): ?>
                  <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
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
            <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
              <?php foreach ($shippingAddress as $value): ?>
                <input type="text" name="state3" class="form-control" id="state3" onkeyup="ValidarLargoState03()" value="<?= $value['State3']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" name="state3" class="form-control" id="state3" onkeyup="ValidarLargoState03()" value="">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
          <!-- Alerta country required -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisocountry03" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;Country is required
            </p>
          </div>

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
              <strong>Error!</strong>&nbsp;State must have a minimum of 4 characters
            </p>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5">
          <div class="form-group">
            <label for="city03">City <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
              <?php foreach ($shippingAddress as $value): ?>
                <input type="text" name="city03" class="form-control" id="city03" onkeyup="validarLargoCity03()" value="<?= $value['City3']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" name="city03" class="form-control" id="city03" onkeyup="validarLargoCity03()" value="">
            <?php endif; ?>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="address3">Address Three<span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
              <?php foreach ($shippingAddress as $value): ?>
                <input type="text" class="form-control"  name="dirbusiness3" id="dirbusiness3" onkeyup="ValidarLargoDirBusiness03()" value="<?= $value['Address3']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" class="form-control"  name="dirbusiness3" id="dirbusiness3" onkeyup="ValidarLargoDirBusiness03()" value="">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <!-- Alerta address required -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisocity03" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;City is required
        </p>
        </div>

        <!-- Alerta address largo -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity03" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
        </p>
        </div>

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness3" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
      <strong>Error!</strong>&nbsp;Address Three is required
      </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness3" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
      <strong>Error!</strong>&nbsp;Address Three must have a minimum of 8 characters
      </p>
      </div>

      </div>
      </div>

      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
      <div class="form-group">
        <label for="storename3">Store Name <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
          <?php foreach ($shippingAddress as $value): ?>
            <input type="text" name="storename3" class="form-control" id="storename3" onkeyup="validarLargoStoreName03()" value="<?= $value['storeName3']; ?>">
          <?php endforeach; ?>

        <?php else: ?>
          <input type="text" name="storename3" class="form-control" id="storename3" onkeyup="validarLargoStoreName03()" value="">
        <?php endif; ?>
      </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
        <label for="zipcode03">Zip Code <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
          <?php foreach ($shippingAddress as $value): ?>
            <input type="text" name="zipcode03" class="form-control" id="zipcode03" onkeyup="validarLargoZipcode03()" value="<?= $value['ZipCode3']; ?>">
            <input type="hidden" name="idaddresses" class="form-control" id="idaddresses" value="<?= $value['idAddresses']; ?>">
          <?php endforeach; ?>

        <?php else: ?>
          <input type="text" name="zipcode03" class="form-control" id="zipcode03" onkeyup="validarLargoZipcode03()" value="">
        <?php endif; ?>
      </div>
      </div>
      </div>

      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <div class="alert alert-danger alert-dismissible ocultar" id="avisostorename3" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Store Name is required
          </p>
        </div>

      <!-- Alerta zipcode required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcode03" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Zip Code is required
        </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorename3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
        </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcode03" role="alert">
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


      </fieldset>
</div>

<div id="f4">
      <hr class="hr">
      <fieldset>
        <legend><h2>Location Four</h2></legend>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="country4">Country <span class="red">*</span></label>
        </div>
        <div class="form-group">
          <select class="form-control" name="country4" id="shippingcountry04" onchange="ValidarCountry04()">
            <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
              <?php foreach ($shippingAddress as $value): ?>
                <option value="<?= $value['Country4']; ?>"><?= $value['Country4']; ?></option>
                <?php foreach ($pais as $value): ?>
                  <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                <?php endforeach; ?>
              <?php endforeach; ?>

            <?php else: ?>
              <option value="">---</option>
              <?php foreach ($pais as $value): ?>
                <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
              <?php endforeach; ?>
            <?php endif; ?>
          </select>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
        <div class="form-group">
          <label for="state4">State <span class="red">*</span></label>
        </div>
        <div class="form-group">
          <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
            <?php foreach ($shippingAddress as $value): ?>
              <input type="text" name="state4" class="form-control" id="state4" onkeyup="ValidarLargoState04()" value="<?= $value['State4']; ?>">
            <?php endforeach; ?>

          <?php else: ?>
            <input type="text" name="state4" class="form-control" id="state4" onkeyup="ValidarLargoState04()" value="">
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <!-- Alerta address required -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisocountry4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Country is required
          </p>
        </div>

        <!-- Alerta address required -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisostate4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;State is required
          </p>
        </div>

        <!-- Alerta address largo -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostate4" role="alert">
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
          <label for="city4">City <span class="red">*</span></label>
        </div>
        <div class="form-group">
          <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
            <?php foreach ($shippingAddress as $value): ?>
              <input type="text" name="city4" class="form-control" id="city4" onkeyup="validarLargoCity04()" value="<?= $value['City4']; ?>">
            <?php endforeach; ?>
          <?php else: ?>
            <input type="text" name="city4" class="form-control" id="city4" onkeyup="validarLargoCity04()" value="">
          <?php endif; ?>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
        <div class="form-group">
          <label for="address3">Address four<span class="red">*</span></label>
        </div>
        <div class="form-group">
          <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
            <?php foreach ($shippingAddress as $value): ?>
              <input type="text" class="form-control"  name="dirbusiness4" id="dirbusiness4" onkeyup="ValidarLargoDirBusiness04()" value="<?= $value['Address4']; ?>">
            <?php endforeach; ?>

          <?php else: ?>
            <input type="text" class="form-control"  name="dirbusiness4" id="dirbusiness4" onkeyup="ValidarLargoDirBusiness04()">
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
      <!-- Alerta address required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisocity4" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
      <strong>Error!</strong>&nbsp;City is required
      </p>
      </div>

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity4" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
      <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
      </p>
      </div>

    <!-- Alerta address largo -->
    <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness4" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
    </button>
    <p class="centrar">
    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
    <strong>Error!</strong>&nbsp;Address Four is required
    </p>
    </div>

    <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness4" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
    </button>
    <p class="centrar">
    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
    <strong>Error!</strong>&nbsp;Address Four must have a minimum of 8 characters
    </p>
    </div>

    </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-5">
    <div class="form-group">
    <label for="storenam4">Store Name <span class="red">*</span></label>
    </div>
    <div class="form-group">
    <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
    <?php foreach ($shippingAddress as $value): ?>
      <input type="text" name="storename4" class="form-control" id="storename4" onkeyup="validarLargoStoreName04()" value="<?= $value['storeName4']; ?>">
    <?php endforeach; ?>

    <?php else: ?>
      <input type="text" name="storename4" class="form-control" id="storename4" onkeyup="validarLargoStoreName04()" value="">
    <?php endif; ?>
    </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
    <div class="form-group">
    <label for="zipcode4">Zip Code <span class="red">*</span></label>
    </div>
    <div class="form-group">
    <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
    <?php foreach ($shippingAddress as $value): ?>
      <input type="text" name="zipcode4" class="form-control" id="zipcode4" onkeyup="validarLargoZipcode04()" value="<?= $value['ZipCode4']; ?>">
      <input type="hidden" name="idaddresses" class="form-control" id="idaddresses" value="<?= $value['idAddresses']; ?>">
    <?php endforeach; ?>

    <?php else: ?>
    <input type="text" name="zipcode4" class="form-control" id="zipcode4" onkeyup="validarLargoZipcode04()" value="">
    <?php endif; ?>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
      <div class="alert alert-danger alert-dismissible ocultar" id="avisostorename4" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
      <strong>Error!</strong>&nbsp;Store Name is required
      </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorename4" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
      <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
      </p>
      </div>

    <!-- Alerta zipcode required -->
    <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcode4" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
    </button>
    <p class="centrar">
    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
    <strong>Error!</strong>&nbsp;Zip Code is required
    </p>
    </div>

    <!-- Alerta zipcode required -->
    <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcode4" role="alert">
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

    </fieldset>
</div>

<div id="f5">
        <hr class="hr">
        <fieldset>
            <legend><h2>Location Five</h2></legend>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5">
          <div class="form-group">
            <label for="country5">Country <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <select class="form-control" name="country5" id="shippingcountry05" onchange="ValidarCountry05()">
              <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
                <?php foreach ($shippingAddress as $value): ?>
                  <option value="<?= $value['Contry5']; ?>"><?= $value['Contry5']; ?></option>
                  <?php foreach ($pais as $value): ?>
                    <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                  <?php endforeach; ?>
                <?php endforeach; ?>

              <?php else: ?>
                <option value="">---</option>
                <?php foreach ($pais as $value): ?>
                  <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                <?php endforeach; ?>
              <?php endif; ?>
            </select>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="state5">State <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
              <?php foreach ($shippingAddress as $value): ?>
                <input type="text" name="state5" class="form-control" id="state5" onkeyup="ValidarLargoState05()" value="<?= $value['State5']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" name="state5" class="form-control" id="state5" onkeyup="ValidarLargoState05()" value="">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
          <!-- Alerta city required -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisocountry5" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;Country is required
            </p>
          </div>

          <!-- Alerta address required -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisostate5" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;State is required
            </p>
          </div>

          <!-- Alerta address largo -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostate5" role="alert">
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
            <label for="city5">City <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
              <?php foreach ($shippingAddress as $value): ?>
                <input type="text" name="city5" class="form-control" id="city5" onkeyup="validarLargoCity05()" value="<?= $value['City5']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
                <input type="text" name="city5" class="form-control" id="city5" onkeyup="validarLargoCity05()" value="">
            <?php endif; ?>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="address3">Address five<span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
              <?php foreach ($shippingAddress as $value): ?>
                <input type="text" class="form-control"  name="dirbusiness5" id="dirbusiness5" onkeyup="ValidarLargoDirBusiness05()" value="<?= $value['Address5']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" class="form-control"  name="dirbusiness5" id="dirbusiness5" onkeyup="ValidarLargoDirBusiness05()">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <!-- Alerta address required -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisocity5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;City is required
        </p>
        </div>

        <!-- Alerta address largo -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
        </p>
        </div>

      <!-- Alerta address required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisodirbusiness5" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
      <strong>Error!</strong>&nbsp;Address Five is required
      </p>
      </div>

      <!-- Alerta address required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness5" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
      <strong>Error!</strong>&nbsp;Address Five must have a minimum of 8 characters
      </p>
      </div>

      </div>
      </div>

      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
      <div class="form-group">
      <label for="storename5">Store Name <span class="red">*</span></label>
      </div>
      <div class="form-group">
      <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
        <?php foreach ($shippingAddress as $value): ?>
          <input type="text" name="storename5" class="form-control" id="storename5" onkeyup="validarLargoStoreName05()" value="<?= $value['storeName5']; ?>">
        <?php endforeach; ?>

      <?php else: ?>
        <input type="text" name="storename5" class="form-control" id="storename5" onkeyup="validarLargoStoreName05()" value="">
      <?php endif; ?>
      </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
      <label for="zipcode5">Zip Code <span class="red">*</span></label>
      </div>
      <div class="form-group">
      <?php if (isset($shippingAddress) && $shippingAddress != NULL): ?>
        <?php foreach ($shippingAddress as $value): ?>
          <input type="text" name="zipcode5" class="form-control" id="zipcode5" onkeyup="validarLargoZipcode05()" value="<?= $value['ZipCode5']; ?>">
          <input type="hidden" name="idaddresses" class="form-control" id="idaddresses" value="<?= $value['idAddresses']; ?>">
        <?php endforeach; ?>

      <?php else: ?>
        <input type="text" name="zipcode5" class="form-control" id="zipcode5" onkeyup="validarLargoZipcode05()" value="">
      <?php endif; ?>
      </div>
      </div>
      </div>

      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <div class="alert alert-danger alert-dismissible ocultar" id="avisostorename5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Store Name is required
        </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorename5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
        </p>
        </div>

      <!-- Alerta zipcode required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcode5" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;Zip Code is required
      </p>
      </div>

      <!-- Alerta zipcode required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcode5" role="alert">
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

      </fieldset>
</div>

<div id="f6">
  <div class="alert alert-success alert-dismissible" id="avisoemail" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
  </button>
  <p class="centrar">
    <i class="fa fa-check fa-2x" aria-hidden="true"></i>&nbsp;
    <strong>Hello!</strong>&nbsp;We've received your information and we
    just shared the great news with our MAAJICAL team.
     Our team will contact you shortly.
  </p>
  </div>
</div>
