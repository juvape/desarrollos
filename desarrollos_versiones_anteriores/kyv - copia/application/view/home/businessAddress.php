
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-11">
      <hr class="hr">
      <fieldset>
        <legend><h2>Location One</h2></legend>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5">
        <div class="form-group">
          <label for="country1">Country <span class="red">*</span></label>
        </div>
        <div class="form-group">
          <select class="form-control" name="businessCountry1" id="businessCountry1" onchange="ValidarBusinnessCountry1()">
            <option value="">---</option>
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
          <input type="text" name="BusinessState1" class="form-control" id="businesstate1" onkeyup="ValidarLargoBusinessState01()" value="">
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

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoBusinessState1" role="alert">
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
          <input type="text" name="BusinessCity1" class="form-control" id="businesscity" onkeyup="validarLargoBusinessCity()" value="">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
        <div class="form-group">
          <label for="dirbusiness1">Address one<span class="red">*</span></label>
        </div>
        <div class="form-group">
          <input type="text" class="form-control"  name="BusinessAddress1" id="businessaddress1" onkeyup="ValidarLargoBusinessAddress()">
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

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoBusinesscity" role="alert">
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

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoBusinessAddress" role="alert">
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
          <input type="text" name="Businessstorename1" class="form-control" id="businessstorename1" onkeyup="validarLargoBusinessStoreName()" value="">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
        <div class="form-group">
          <label for="zipcode1">Zip Code <span class="red">*</span></label>
        </div>
        <div class="form-group">
          <input type="text" name="Businesszipcode1" class="form-control" id="businesszipcode1" onkeyup="ValidarLargoBusinessZipcode()" value="">
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

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <p class="text-afirmative">
            <strong>* If you more than One business locations, please add by doing click in the button</strong>
          </p>
        </div>
        <div class="form-group">
          <button type="button" name="btn-mas" class="btn btn-warning" id="masdireccionesBusiness" onclick="mostrarMasDireccionesBusiness()">
            Add Address
          </button>
          <button type="button" name="btn-menos" class="btn btn-warning ocultar" id="menosdireccionesBusiness" onclick="ocultarDireccionesBusiness()">
            Hide Address
          </button>
        </div>
      </div>
    </div>

  <div class="ocultar" id="othersAddressBusiness">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <p class="text-afirmative">
          <strong>
            * Add the number of locations that you considered necessary
          </strong>
        </p>
      </div>
    </div>
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
            <label for="businesscountry02">Country <span class="red">&nbsp;</span></label>
          </div>
          <div class="form-group">
            <select class="form-control" name="BusinessCountry02" id="businesscountry02" onchange="ValidarCountry02()">
              <option value="">---</option>
              <?php foreach ($pais as $value): ?>
                <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="bussinessstate02">State <span class="red">&nbsp;</span></label>
          </div>
          <div class="form-group">
            <input type="text" name="BusinessState02" class="form-control" id="bussinessstate02" onkeyup="ValidarLargoState02()" value="">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
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
            <label for="businesscity02">City <span class="red">&nbsp;</span></label>
          </div>
          <div class="form-group">
            <input type="text" name="BusinessCity02" class="form-control" id="businesscity02" onkeyup="validarLargoCity02()" value="">
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="businessaddress2">Address Two<span class="red">&nbsp;</span></label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  name="BusinessAddress2" id="businessaddress2" onkeyup="ValidarLargoDirBusiness02()">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

          <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity02" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
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
            <label for="businessstorename2">Store Name <span class="red">&nbsp;</span></label>
          </div>
          <div class="form-group">
            <input type="text" name="BusinessStorename2" class="form-control" id="businessstorename2" onkeyup="validarLargoStoreName02()" value="">
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
          <div class="form-group">
            <label for="businesszipcode2">Zip Code <span class="red">&nbsp;</span></label>
          </div>
          <div class="form-group">
            <input type="text" name="BusinessZipcode2" class="form-control" id="businesszipcode2" onkeyup="validarLargoZipcode02()" value="">
          </div>
        </div>
      </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

        <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorename02" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
          </p>
        </div>

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
              <label for="businesscountry3">Country <span class="red">&nbsp;</span></label>
            </div>
            <div class="form-group">
              <select class="form-control" name="BusinessCountry3" id="businesscountry3" onchange="ValidarCountry03()">
                <option value="">---</option>
                <?php foreach ($pais as $value): ?>
                  <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
            <div class="form-group">
              <label for="businessstate3">State <span class="red">&nbsp;</span></label>
            </div>
            <div class="form-group">
              <input type="text" name="BusinessState3" class="form-control" id="businessstate3" onkeyup="ValidarLargoState03()" value="">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

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
              <label for="businesscity3">City <span class="red">&nbsp;</span></label>
            </div>
            <div class="form-group">
              <input type="text" name="Businesscity3" class="form-control" id="businesscity3" onkeyup="validarLargoCity03()" value="">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
            <div class="form-group">
              <label for="businessaddress3">Address Three<span class="red">&nbsp;</span></label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  name="BusinessAddress3" id="businessaddress3" onkeyup="ValidarLargoDirBusiness03()">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

            <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity3" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
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
              <label for="businessstorename3">Store Name <span class="red">&nbsp;</span></label>
            </div>
            <div class="form-group">
              <input type="text" name="BusinessStorename3" class="form-control" id="businessstorename3" onkeyup="validarLargoStoreName03()" value="">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
            <div class="form-group">
              <label for="businesszipcode3">Zip Code <span class="red">&nbsp;</span></label>
            </div>
            <div class="form-group">
              <input type="text" name="BusinessZipcode3" class="form-control" id="businesszipcode3" onkeyup="validarLargoZipcode03()" value="">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

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
                <label for="businesscountry4">Country <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <select class="form-control" name="BusinessCountry04" id="businesscountry4" onchange="ValidarCountry04()">
                  <option value="">---</option>
                  <?php foreach ($pais as $value): ?>
                    <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="businessstate4">State <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <input type="text" name="BusinessState4" class="form-control" id="businessstate4" onkeyup="ValidarLargoState04()" value="">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

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
                <label for="businesscity4">City <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <input type="text" name="BusinessCity4" class="form-control" id="businesscity4" onkeyup="validarLargoCity04()" value="">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="businessaddress4">Address Four<span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="BusinessAddress4" id="businessaddress4" onkeyup="ValidarLargoDirBusiness04()">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity4" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
                </p>
              </div>

              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness4" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Location Four must have a minimum of 8 characters
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="businessstorename4">Store Name <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <input type="text" name="BusinessStorename4" class="form-control" id="businessstorename4" onkeyup="validarLargoStoreName04()" value="">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="businesszipcode4">Zip Code <span class="red">&nbsp;</span></label>
              </div>
              <div class="form-group">
                <input type="text" name="BusinessZipcode4" class="form-control" id="businesszipcode4" onkeyup="validarLargoZipcode04()" value="">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorename4" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
                </p>
              </div>

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
                  <label for="businesscountry5">Country <span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <select class="form-control" name="BusinessCountry5" id="businesscountry5" onchange="ValidarCountry05()">
                    <option value="">---</option>
                    <?php foreach ($pais as $value): ?>
                      <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                <div class="form-group">
                  <label for="businessstate5">State <span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <input type="text" name="BusinessState5" class="form-control" id="businessstate5" onkeyup="ValidarLargoState05()" value="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

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
                  <label for="businesscity5">City <span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <input type="text" name="BusinessCity5" class="form-control" id="businesscity5" onkeyup="validarLargoCity05()" value="">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                <div class="form-group">
                  <label for="businessaddress5">Address Five<span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control"  name="BusinessAddress5" id="businessaddress5" onkeyup="ValidarLargoDirBusiness05()">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

                <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocity5" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;City must have a minimum of 3 characters
                  </p>
                </div>

                <div class="alert alert-danger alert-dismissible ocultar" id="avisolargodirbusiness5" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;Location Five must have a minimum of 8 characters
                  </p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-5">
                <div class="form-group">
                  <label for="businessstorename5">Store Name <span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <input type="text" name="BusinessStorename5" class="form-control" id="businessstorename5" onkeyup="validarLargoStoreName05()" value="">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                <div class="form-group">
                  <label for="businesszipcode5">Zip Code <span class="red">&nbsp;</span></label>
                </div>
                <div class="form-group">
                  <input type="text" name="BusinessZipcode5" class="form-control" id="businesszipcode5" onkeyup="validarLargoZipcode05()" value="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

                <div class="alert alert-danger alert-dismissible ocultar" id="avisolargostorename5" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;Store Name must have a minimum of 3 characters
                  </p>
                </div>

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
          </div>
