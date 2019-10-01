<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-5">
    <div class="form-group">
      <label for="storeLocations">Select the quantity retail store location <span class="red">*</span></label>
    </div>
    <div class="form-group">
      <select class="form-control" onchange="funcStoreLocations()" class="hod" name="storelocations" id="storeLocations">
        <option value="none">---</option>
        <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
          <?php foreach ($query4 as $value): ?>
            <option value="1" <?= $value['businessLocation'] == '1'? 'selected="selected"' : '' ?> >One</option>
            <option value="2" <?= $value['businessLocation'] == '2'? 'selected="selected"' : '' ?> >Two</option>
            <option value="3" <?= $value['businessLocation'] == '3'? 'selected="selected"' : '' ?> >Three</option>
            <option value="4" <?= $value['businessLocation'] == '4'? 'selected="selected"' : '' ?> >Four</option>
            <option value="5" <?= $value['businessLocation'] == '5'? 'selected="selected"' : '' ?> >Five</option>
            <option value="mas-5" <?= $value['businessLocation'] == 'mas-5'? 'selected="selected"' : '' ?> >More than Five</option>
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

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

    <div class="alert alert-danger alert-dismissible ocultar" id="avisoquantitystores" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;Quantity retail store location  is required
      </p>
    </div>

  </div>
</div>
<br/>
<br/>

<div id="d1">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <center>
        <h2 class="retail-store-title font-maaji">Retail Store Location </h2>
      </center>
    </div>
  </div>
  <br/>

    <hr class="hr">
    <fieldset>
    <legend><h2>Location One</h2></legend>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5">
          <div class="form-group">
            <label for="countryStore1">Country <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <select class="form-control" name="countrystore1" id="countryStore1" onchange="ValidarCountryStore1()">
              <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
                <?php foreach ($businessLocations as $value): ?>
                  <option value="<?= $value['Country1']; ?>"><?= $value['Country1']; ?></option>
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
            <label for="stateStore1">State <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($businessLocations as $value): ?>
                <input type="text" name="statestore1" class="form-control" id="stateStore1" onkeyup="ValidarLargoStateStore1()" value="<?= $value['State1']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" name="statestore1" class="form-control" id="stateStore1" onkeyup="ValidarLargoStateStore1()" value="">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
          <div class="alert alert-danger alert-dismissible ocultar" id="avisocountrystore1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;Country is required
            </p>
          </div>

          <!-- Alerta address required -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisostatestore1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;State is required
            </p>
          </div>

          <!-- Alerta address largo -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostatestore1" role="alert">
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
            <label for="cityStore1">City <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($businessLocations as $value): ?>
                <input type="text" name="citystoreretail1" class="form-control" id="cityStore1" onkeyup="validarLargoCityStore1()" value="<?= $value['City1']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" name="citystoreretail1" class="form-control" id="cityStore1" onkeyup="validarLargoCityStore1()" value="">
            <?php endif; ?>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="addresStore1">Address one<span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($businessLocations as $value): ?>
                <input type="text" class="form-control"  name="addressstore1" id="addresStore1" onkeyup="ValidarLargoAddresStore1()" value="<?= $value['Address1'] ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" class="form-control"  name="addressstore1" id="addresStore1" onkeyup="ValidarLargoAddresStore1()" value="">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
          <div class="alert alert-danger alert-dismissible ocultar" id="avisocitystore1" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;City is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocitystore1" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
          </p>
        </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisoadddresstore1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Address One is required
        </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoaddresstore1" role="alert">
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
      <label for="storeName1">Store Name <span class="red">*</span></label>
      </div>
      <div class="form-group">
      <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
        <?php foreach ($businessLocations as $value): ?>
          <input type="text" name="storenameretail1" class="form-control" id="storeName1" onkeyup="validarLargoStoreNameRetail1()" value="<?= $value['storeName1']; ?>">
        <?php endforeach; ?>

      <?php else: ?>
        <input type="text" name="storenameretail1" class="form-control" id="storeName1" onkeyup="validarLargoStoreNameRetail1()" value="">
      <?php endif; ?>
      </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
      <label for="zipcode1">Zip Code <span class="red">*</span></label>
      </div>
      <div class="form-group">
      <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
        <?php foreach ($businessLocations as $value): ?>
          <input type="text" name="zipcodestore1" class="form-control" id="zipcodeStore1" onkeyup="validarLargoZipcodeStore1()" value="<?= $value['zipCode1']; ?>">
          <input type="hidden" name="idaddresses" class="form-control" id="idaddresses" value="<?= $value['idBusinessLocations']; ?>">
        <?php endforeach; ?>

      <?php else: ?>
        <input type="text" name="zipcodestore1" class="form-control" id="zipcodeStore1" onkeyup="validarLargoZipcodeStore1()" value="">
      <?php endif; ?>
      </div>
      </div>
      </div>

      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <div class="alert alert-danger alert-dismissible ocultar" id="avisostorenameretail1" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Store Name is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorenameretail1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
        </p>
        </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcodestore1" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;Zip Code is required
      </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcodestore1" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;Zip Code must have a minimum of 4 characters
      </p>
      </div>

      </div>
      </div>

      </fieldset>
</div>

<div id="d2">
      <hr class="hr">
      <fieldset>
        <legend><h2>Location Two</h2></legend>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="countryStore2">Country <span class="red">*</span></label>
        </div>
        <div class="form-group">
          <select class="form-control" name="countrystore2" id="countryStore2" onchange="ValidarCountryStore2()">
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($businessLocations as $value): ?>
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
          <label for="state6">State <span class="red">*</span></label>
        </div>
        <div class="form-group">
          <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
            <?php foreach ($businessLocations as $value): ?>
              <input type="text" name="statestore2" class="form-control" id="stateStore2" onkeyup="ValidarLargoStateStore2()" value="<?= $value['state2']; ?>">
            <?php endforeach; ?>

          <?php else: ?>
            <input type="text" name="statestore2" class="form-control" id="stateStore2" onkeyup="ValidarLargoStateStore2()" value="">
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <div class="alert alert-danger alert-dismissible ocultar" id="avisocountrystore2" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Country is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisostatestore2" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;State is required
          </p>
        </div>

        <!-- Alerta address largo -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostatestore2" role="alert">
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
          <label for="cityStoreRetail2">City <span class="red">*</span></label>
        </div>
        <div class="form-group">
          <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
            <?php foreach ($businessLocations as $value): ?>
              <input type="text" name="citystoreretail2" class="form-control" id="cityStoreRetail2" onkeyup="validarLargoCityStore2()" value="<?= $value['city2']; ?>">
            <?php endforeach; ?>

          <?php else: ?>
            <input type="text" name="citystoreretail2" class="form-control" id="cityStoreRetail2" onkeyup="validarLargoCityStore2()" value="">
          <?php endif; ?>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
        <div class="form-group">
          <label for="address2">Address Two<span class="red">*</span></label>
        </div>
        <div class="form-group">
          <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
            <?php foreach ($businessLocations as $value): ?>
              <input type="text" class="form-control"  name="addresstore2" id="addresStore2" onkeyup="ValidarLargoAddressStore2()" value="<?= $value['Address2']; ?>">
            <?php endforeach; ?>

          <?php else: ?>
            <input type="text" class="form-control"  name="addresstore2" id="addresStore2" onkeyup="ValidarLargoAddressStore2()" value="">
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <div class="alert alert-danger alert-dismissible ocultar" id="avisocitystore2" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;City is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocitystore2" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
          </p>
        </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisoaddresstore2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Address Two is required
        </p>
      </div>

    <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoaddresstore2" role="alert">
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
    <label for="storeNameRetail2">Store Name <span class="red">*</span></label>
    </div>
    <div class="form-group">
    <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
      <?php foreach ($businessLocations as $value): ?>
        <input type="text" name="storenameretail2" class="form-control" id="storeNameRetail2" onkeyup="validarLargoStoreNameRetail2()" value="<?= $value['storeName2']; ?>">
      <?php endforeach; ?>

    <?php else: ?>
      <input type="text" name="storenameretail2" class="form-control" id="storeNameRetail2" onkeyup="validarLargoStoreNameRetail2()" value="">
    <?php endif; ?>
    </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
        <label for="zipcodeStore2">Zip Code <span class="red">*</span></label>
      </div>
      <div class="form-group">
      <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
        <?php foreach ($businessLocations as $value): ?>
          <input type="text" name="zipcodestore2" class="form-control" id="zipcodeStore2" onkeyup="validarLargoZipcodeStore2()" value="<?= $value['zipCode2']; ?>">
          <input type="hidden" name="idaddresses" class="form-control" id="idaddresses" value="<?= $value['idBusinessLocations']; ?>">
        <?php endforeach; ?>

      <?php else: ?>
        <input type="text" name="zipcodestore2" class="form-control" id="zipcodeStore2" onkeyup="validarLargoZipcodeStore2()" value="">
      <?php endif; ?>
      </div>
    </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
      <div class="alert alert-danger alert-dismissible ocultar" id="avisostorenameretail2" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;Store Name is required
      </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorenameretail2" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
      </p>
      </div>

    <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcodestore2" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
    </button>
    <p class="centrar">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
      <strong>Error!</strong>&nbsp;Zip Code is required
    </p>
    </div>

    <!-- Alerta zipcode required -->
    <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcodestore2" role="alert">
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

<div id="d3">
    <hr class="hr">
    <fieldset>
      <legend><h2>Location Three</h2></legend>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5">
          <div class="form-group">
            <label for="countryStore3">Country <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <select class="form-control" name="countrystore3" id="countryStore3" onchange="validarCountryStore3()">
              <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
                <?php foreach ($businessLocations as $value): ?>
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
            <label for="stateStore3">State <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($businessLocations as $value): ?>
                <input type="text" name="statestore3" class="form-control" id="stateStore3" onkeyup="ValidarLargoStateStore3()" value="<?= $value['State3']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" name="statestore3" class="form-control" id="stateStore3" onkeyup="ValidarLargoStateStore3()" value="">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
          <div class="alert alert-danger alert-dismissible ocultar" id="avisocountrystore3" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;Country is required
            </p>
          </div>

          <div class="alert alert-danger alert-dismissible ocultar" id="avisostatestore3" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;State is required
            </p>
          </div>

          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostatestore3" role="alert">
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
            <label for="cityStore3">City <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($businessLocations as $value): ?>
                <input type="text" name="citystoreretail3" class="form-control" id="cityStore3" onkeyup="validarLargoCityStore3()" value="<?= $value['City3']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" name="citystoreretail3" class="form-control" id="cityStore3" onkeyup="validarLargoCityStore3()" value="">
            <?php endif; ?>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="addresStore3">Address Three<span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($businessLocations as $value): ?>
                <input type="text" class="form-control"  name="addressstore3" id="addresStore3" onkeyup="ValidarLargoAddresStore3()" value="<?= $value['Address3']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" class="form-control"  name="addressstore3" id="addresStore3" onkeyup="ValidarLargoAddresStore3()">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
          <div class="alert alert-danger alert-dismissible ocultar" id="avisocitystore3" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;City is required
            </p>
          </div>

          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocitystore3" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
            </p>
          </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisoaddresstore3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Address Three is required
        </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoaddresstore3" role="alert">
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
        <label for="storenameRetail3">Store Name <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
          <?php foreach ($businessLocations as $value): ?>
            <input type="text" name="storenameretail3" class="form-control" id="storenameRetail3" onkeyup="validarLargoStoreNameRetail3()" value="<?= $value['storeName3']; ?>">
          <?php endforeach; ?>

        <?php else: ?>
          <input type="text" name="storenameretail3" class="form-control" id="storenameRetail3" onkeyup="validarLargoStoreNameRetail3()" value="">
        <?php endif; ?>
      </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
        <label for="zipcode03">Zip Code <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
          <?php foreach ($businessLocations as $value): ?>
            <input type="text" name="zipcodestore3" class="form-control" id="zipcodeStore3" onkeyup="validarLargoZipcodeStore3()" value="<?= $value['zipCode3']; ?>">
            <input type="hidden" name="idaddresses" class="form-control" id="idaddresses" value="<?= $value['idBusinessLocations']; ?>">
          <?php endforeach; ?>

        <?php else: ?>
          <input type="text" name="zipcodestore3" class="form-control" id="zipcodeStore3" onkeyup="validarLargoZipcodeStore3()" value="">
        <?php endif; ?>
      </div>
      </div>
      </div>

      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <div class="alert alert-danger alert-dismissible ocultar" id="avisostorenameretail3" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Store Name is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorenameretail3" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
          </p>
        </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcodestore3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Zip Code is required
        </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcodestore3" role="alert">
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

<div id="d4">
    <hr class="hr">
    <fieldset>
      <legend><h2>Location Four</h2></legend>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5">
          <div class="form-group">
            <label for="countryStore4">Country <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <select class="form-control" name="countrystore4" id="countryStore4" onchange="ValidarCountryStore4()">
              <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
                <?php foreach ($businessLocations as $value): ?>
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
            <label for="stateStore4">State <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($businessLocations as $value): ?>
                <input type="text" name="statestore4" class="form-control" id="stateStore4" onkeyup="ValidarLargoStateStore4()" value="<?= $value['State4']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" name="statestore4" class="form-control" id="state4" onkeyup="ValidarLargoStateStore4()" value="">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
          <div class="alert alert-danger alert-dismissible ocultar" id="avisocountrystore4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;Country is required
            </p>
          </div>

          <div class="alert alert-danger alert-dismissible ocultar" id="avisostatestore4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;State is required
            </p>
          </div>

          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostatestore4" role="alert">
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
            <label for="cityStore4">City <span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($businessLocations as $value): ?>
                <input type="text" name="citystore4" class="form-control" id="cityStore4" onkeyup="validarLargoCityStore4()" value="<?= $value['City4']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" name="citystore4" class="form-control" id="cityStore4" onkeyup="validarLargoCityStore4()" value="">
            <?php endif; ?>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="addresStore">Address four<span class="red">*</span></label>
          </div>
          <div class="form-group">
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($businessLocations as $value): ?>
                <input type="text" class="form-control" name="addresstore4" id="addresStore" onkeyup="ValidarLargoAddresStore4()" value="<?= $value['Address4']; ?>">
              <?php endforeach; ?>

            <?php else: ?>
              <input type="text" class="form-control" name="addresstore4" id="addresStore" onkeyup="ValidarLargoAddresStore4()" value="">
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
          <div class="alert alert-danger alert-dismissible ocultar" id="avisocitystore4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;City is required
            </p>
          </div>

          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocitystore4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
            </p>
          </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisoaddresstore4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Address Four is required
          </p>
        </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoaddressstore4" role="alert">
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
      <label for="storenameRetail4">Store Name <span class="red">*</span></label>
      </div>
      <div class="form-group">
      <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
      <?php foreach ($businessLocations as $value): ?>
        <input type="text" name="storenameretail4" class="form-control" id="storenameRetail4" onkeyup="validarLargoStoreNameRetail4()" value="<?= $value['storeName4']; ?>">
      <?php endforeach; ?>

      <?php else: ?>
      <input type="text" name="storenameretail4" class="form-control" id="storenameRetail4" onkeyup="validarLargoStoreNameRetail4()" value="">
      <?php endif; ?>
      </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
      <label for="zipcode4">Zip Code <span class="red">*</span></label>
      </div>
      <div class="form-group">
      <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
      <?php foreach ($businessLocations as $value): ?>
        <input type="text" name="zipcodestore4" class="form-control" id="zipcodeStore4" onkeyup="validarLargoZipcodeStore4()" value="<?= $value['zipCode4']; ?>">
        <input type="hidden" name="idaddresses" class="form-control" id="idaddresses" value="<?= $value['idBusinessLocations']; ?>">
      <?php endforeach; ?>

      <?php else: ?>
      <input type="text" name="zipcodestore4" class="form-control" id="zipcodeStore4" onkeyup="validarLargoZipcodeStore4()" value="">
      <?php endif; ?>
      </div>
      </div>
      </div>

      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <div class="alert alert-danger alert-dismissible ocultar" id="avisostorenameretail4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Store Name is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorenameretail4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
          </p>
        </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcodestore4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Zip Code is required
        </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcodestore4" role="alert">
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

<div id="d5">
  <hr class="hr">
  <fieldset>
    <legend><h2>Location Five</h2></legend>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="countryStore5">Country <span class="red">*</span></label>
        </div>
        <div class="form-group">
          <select class="form-control" name="countrystore5" id="countryStore5" onchange="ValidarCountryStore5()">
            <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
              <?php foreach ($businessLocations as $value): ?>
                <option value="<?= $value['Country5']; ?>"><?= $value['Country5']; ?></option>
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
          <label for="stateStore5">State <span class="red">*</span></label>
        </div>
        <div class="form-group">
          <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
            <?php foreach ($businessLocations as $value): ?>
              <input type="text" name="statesore5" class="form-control" id="stateStore5" onkeyup="ValidarLargoStateStore5()" value="<?= $value['State5']; ?>">
            <?php endforeach; ?>

          <?php else: ?>
            <input type="text" name="statesore5" class="form-control" id="stateStore5" onkeyup="ValidarLargoStateStore5()" value="">
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <div class="alert alert-danger alert-dismissible ocultar" id="avisocountrystore5" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Country is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisostatestore5" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;State is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostatestore5" role="alert">
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
          <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
            <?php foreach ($businessLocations as $value): ?>
              <input type="text" name="citystore5" class="form-control" id="cityStore5" onkeyup="validarLargoCityStore5()" value="<?= $value['City5']; ?>">
            <?php endforeach; ?>

          <?php else: ?>
            <input type="text" name="citystore5" class="form-control" id="cityStore5" onkeyup="validarLargoCityStore5()" value="">
          <?php endif; ?>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
        <div class="form-group">
          <label for="addresStore5">Address five<span class="red">*</span></label>
        </div>
        <div class="form-group">
          <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
            <?php foreach ($businessLocations as $value): ?>
              <input type="text" class="form-control"  name="addresstore5" id="addresStore5" onkeyup="ValidarLargoAddresStore5()" value="<?= $value['Address5']; ?>">
            <?php endforeach; ?>

          <?php else: ?>
            <input type="text" class="form-control"  name="addresstore5" id="addresStore5" onkeyup="ValidarLargoAddresStore5()" value="">
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
        <div class="alert alert-danger alert-dismissible ocultar" id="avisocitystore5" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;City is required
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocitystore5" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
          </p>
        </div>

    <div class="alert alert-danger alert-dismissible ocultar" id="avisoaddrestore5" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;Address Five is required
      </p>
    </div>

    <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoaddrestore5" role="alert">
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
    <label for="storenameRetail5">Store Name <span class="red">*</span></label>
    </div>
    <div class="form-group">
    <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
      <?php foreach ($businessLocations as $value): ?>
        <input type="text" name="storenameretail5" class="form-control" id="storenameRetail5" onkeyup="validarLargoStoreNameRetail5()" value="<?= $value['storeName5']; ?>">
      <?php endforeach; ?>

    <?php else: ?>
      <input type="text" name="storenameretail5" class="form-control" id="storenameRetail5" onkeyup="validarLargoStoreNameRetail5()" value="">
    <?php endif; ?>
    </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
    <div class="form-group">
    <label for="zipcode5">Zip Code <span class="red">*</span></label>
    </div>
    <div class="form-group">
    <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
      <?php foreach ($businessLocations as $value): ?>
        <input type="text" name="zipcodestore5" class="form-control" id="zipcodeStore5" onkeyup="validarLargoZipcodeStore5()" value="<?= $value['zipCode5']; ?>">
        <input type="hidden" name="idaddresses" class="form-control" id="idaddresses" value="<?= $value['idBusinessLocations']; ?>">
      <?php endforeach; ?>

    <?php else: ?>
      <input type="text" name="zipcodestore5" class="form-control" id="zipcodeStore5" onkeyup="validarLargoZipcodeStore5()" value="">
    <?php endif; ?>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
      <div class="alert alert-danger alert-dismissible ocultar" id="avisostorenameretail5" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;Store Name is required
      </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorenameretail5" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;Store Name must have a minimum of 4 characters
      </p>
      </div>

    <div class="alert alert-danger alert-dismissible ocultar" id="avisozipcodestore5" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
    </button>
    <p class="centrar">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
      <strong>Error!</strong>&nbsp;Zip Code is required
    </p>
    </div

    <!-- Alerta zipcode required -->
    <div class="alert alert-danger alert-dismissible ocultar" id="avisolargozipcodestore5" role="alert">
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

<div id="d6">
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
