
<header>
  <nav class="wow bounceInLeft" data-wow-duration="2s">
    <?php require APP. 'view/_templates/menu.php'; ?>
  </nav>
</header>

</div>
<div class="clearfix"></div>
<div class="inner_content">
  <div class="title-bar top-title">
    <h1 class="text-center">Knowing You Better</h1>
  </div>
  <div class="inner_content_w3_agile_info">
    <div class="agile_top_w3_grids">
      <div class="main-customers">
        <form class="form-horizontal" name="formcustomers4" id="form-customers4" action="#" enctype="multipart/form-data">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="figures">Anual Sales Figures</label>
              </div>
              <div class="form-group">
                <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
                  <?php foreach ($query4 as $value): ?>
                    <input type="text" class="form-control"  name="figures" id="figures" onkeyup="ValidarLargoFigures()" value="<?= $value['anualSalesFigures']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="figures" id="figures" onkeyup="ValidarLargoFigures()" value="">
                <?php endif; ?>
              </div>
            </div>

            <br>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="lines" class="control-label">Which lines are you interested in selling? <span class="red">*</span></label>
              </div>

              <div id="lines" name="lines">
                  <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="form-group">
                      <?php if (isset($arrayLines) && in_array("active", $arrayLines)): ?>
                        <input type="checkbox" class="form-check-input" id="active" name="lines[]" value="active" checked="checked">
                        <label class="form-check-label" for="active">Active</label>
                      <?php else: ?>
                        <input type="checkbox" class="form-check-input" id="active" name="lines[]" value="active">
                        <label class="form-check-label" for="active">Active</label>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                    <div class="form-group">
                      <?php if (isset($arrayLines) && in_array("swimwear", $arrayLines)): ?>
                        <input type="checkbox" class="form-check-input" id="swimwear" name="lines[]" value="swimwear" checked="checked">
                        <label class="form-check-label" for="swimwear">Swimwear</label>
                      <?php else: ?>
                        <input type="checkbox" class="form-check-input" id="swimwear" name="lines[]" value="swimwear">
                        <label class="form-check-label" for="swimwear">Swimwear</label>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="form-group">
                      <?php if (isset($arrayLines) && in_array("kids", $arrayLines)): ?>
                        <input type="checkbox" class="form-check-input" id="kids" name="lines[]" value="kids" checked="checked">
                        <label class="form-check-label" for="kids">Kids</label>
                      <?php else: ?>
                        <input type="checkbox" class="form-check-input" id="kids" name="lines[]" value="kids">
                        <label class="form-check-label" for="kids">Kids &nbsp;&nbsp;</label>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                    <div class="form-group">
                      <?php if (isset($arrayLines) && in_array("cover-ups", $arrayLines)): ?>
                        <input type="checkbox" class="form-check-input" id="cover-ups" name="lines[]" value="cover-ups" checked="checked">
                        <label class="form-check-label" for="cover-ups">Cover Ups</label>
                      <?php else: ?>
                        <input type="checkbox" class="form-check-input" id="cover-ups" name="lines[]" value="cover-ups">
                        <label class="form-check-label" for="cover-ups">Cover Ups</label>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="form-group">
                      <?php if (isset($arrayLines) && in_array("trunks", $arrayLines)): ?>
                        <input type="checkbox" class="form-check-input" id="trunks" name="lines[]" value="trunks" checked="checked">
                        <label class="form-check-label" for="trunks">Trunks</label>
                      <?php else: ?>
                        <input type="checkbox" class="form-check-input" id="trunks" name="lines[]" value="trunks">
                        <label class="form-check-label" for="trunks">Trunks</label>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                    <div class="form-group">
                      <?php if (isset($arrayLines) && in_array("accesories", $arrayLines)): ?>
                        <input type="checkbox" class="form-check-input" id="accesories" name="lines[]" value="accesories" checked="checked">
                        <label class="form-check-label" for="accesories">Accesories</label>
                      <?php else: ?>
                        <input type="checkbox" class="form-check-input" id="accesories" name="lines[]" value="accesories">
                        <label class="form-check-label" for="accesories">Accesories</label>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                </div>
            </div>
          </div>

          <br/>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta company name required-->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolines" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;You must select at least one option
                </p>
              </div>

              <!-- Alerta phone required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisofigures" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Anual Sales Figures is required
                </p>
              </div>
          </div>
        </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="typebusiness" class="control-label">Type of Business <span class="red">*</span></label>
              </div>
                <div class="form-group">
                  <select class="form-control"  name="typeBusiness" id="typeBusiness" onchange="validarTypeBusiness()">
                    <option value="NOTHING" >---</option>
                    <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
                      <?php foreach ($query4 as $value): ?>
                        <option value="DEPARTMENT" <?= $value['typeBusiness'] == 'DEPARTMENT'? 'selected="selected"' : '' ?> >DEPARTMENT STORE</option>
                        <option value="SWIMWEAR" <?= $value['typeBusiness'] == 'SWIMWEAR'? 'selected="selected"' : '' ?> >SWIMWEAR STORE (SPECIALTY)</option>
                        <option value="ONLINE" <?= $value['typeBusiness'] == 'ONLINE'? 'selected="selected"' : '' ?> >ONLINE RETAILER</option>
                        <option value="DISTRIBUITOR" <?= $value['typeBusiness'] == 'DISTRIBUITOR'? 'selected="selected"' : '' ?> >DISTRIBUITOR</option>
                        <option value="FRANCHISE" <?= $value['typeBusiness'] == 'FRANCHISE'? 'selected="selected"' : '' ?> >FRANCHISE</option>
                        <option value="RESORT" <?= $value['typeBusiness'] == 'RESORT'? 'selected="selected"' : '' ?> >RESORT/HOTEL</option>
                        <option value="BOUTIQUE" <?= $value['typeBusiness'] == 'BOUTIQUE'? 'selected="selected"' : '' ?> >BOUTIQUE</option>
                        <option value="KIDS" <?= $value['typeBusiness'] == 'KIDS'? 'selected="selected"' : '' ?> >KIDS SHOP</option>
                        <option value="SPORTING" <?= $value['typeBusiness'] == 'SPORTING'? 'selected="selected"' : '' ?> >SPORTING GOODS</option>
                        <option value="SURF" <?= $value['typeBusiness'] == 'SURF'? 'selected="selected"' : '' ?> >SURF SHOP</option>
                        <option value="STUDIOS" <?= $value['typeBusiness'] == 'STUDIOS'? 'selected="selected"' : '' ?> >STUDIOS</option>
                        <option value="CORPORATE" <?= $value['typeBusiness'] == 'CORPORATE'? 'selected="selected"' : '' ?> >CORPORATE SALES</option>
                        <option value="OUTLET" <?= $value['typeBusiness'] == 'OUTLET'? 'selected="selected"' : '' ?> >OUTLET STORES/OFF-PRICE</option>
                      <?php endforeach;  ?>
                    <?php else: ?>
                      <option value="DEPARTMENT"  >DEPARTMENT STORE</option>
                      <option value="SWIMWEAR"  >SWIMWEAR STORE (SPECIALTY)</option>
                      <option value="ONLINE"  >ONLINE RETAILER</option>
                      <option value="DISTRIBUITOR"  >DISTRIBUITOR</option>
                      <option value="FRANCHISE"  >FRANCHISE</option>
                      <option value="RESORT"  >RESORT/HOTEL</option>
                      <option value="BOUTIQUE"  >BOUTIQUE</option>
                      <option value="KIDS"  >KIDS SHOP</option>
                      <option value="SPORTING"  >SPORTING GOODS</option>
                      <option value="SURF"  >SURF SHOP</option>
                      <option value="STUDIOS"  >STUDIOS</option>
                      <option value="CORPORATE"  >CORPORATE SALES</option>
                      <option value="OUTLET"  >OUTLET STORES/OFF-PRICE</option>
                    <?php endif; ?>
                  </select>
                </div>
                <input type="hidden" name="usernamebusiness" class="form-control" value="">
              </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="potentialbrand">Market Potential for the Brand
                </label>
              </div>
              <div class="form-group">
                <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
                  <?php foreach ($query4 as $value): ?>
                    <textarea maxlength="200" type="text" class="form-control"  name="potentialbrand" id="potentialbrand"><?= $value['marketPotentialBrand']; ?></textarea>
                    <input type="hidden" class="form-control"  name="idbusiness" id="idbusiness" value="<?= $value['idBusiness']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                    <textarea maxlength="200" type="text" class="form-control"  name="potentialbrand" id="potentialbrand"  ></textarea>
                    <input type="hidden" class="form-control"  name="idbusiness" id="idbusiness" value="<?= $value['idBusiness']; ?>">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

              <!-- Alerta formato email -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisopotentialbrand" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Market Potential for the Brand is required
                </p>
              </div>

              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargopotentialbrand" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Market Potential for the Brand must have a minimum of 3 characters
                </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

              <div class="alert alert-danger alert-dismissible ocultar" id="avisotypebusiness" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Type of Business is required
                </p>
              </div>

            </div>
          </div>

          <br/>
          <br/>

          <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
            <?php foreach ($query4 as $value): ?>
                  <div class="row" id="mostraOcultarWebSite">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                      <div class="form-group">
                        <label for="website">Website <span class="red">*</span></label>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control"  name="website" id="website" value="<?= trim(str_replace("http://", "", $value['webSite'])); ?>" onkeyup="validarLargoWebSite()">
                          <p><strong>* If your Business Type is Online Add the URL</strong></p>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
                      <div class="alert alert-danger alert-dismissible ocultar" id="avisowebsite" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <p class="centrar">
                          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                          <strong>Error!</strong>&nbsp;Website is required
                        </p>
                      </div>

                      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargowebsite" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <p class="centrar">
                          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                          <strong>Error!</strong>&nbsp;Website must have a minimum of 5 characters
                        </p>
                      </div>
                    </div>
                  </div>


                    <!-- <?php foreach ($businessLocations as $va): ?>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-5">
                        <div class="form-group">
                          <label for="country1">Country <span class="red">*</span></label>
                        </div>
                        <div class="form-group">
                          <select class="form-control" name="businessCountry1" id="businessCountry1" onchange="ValidarBusinnessCountry1()">
                              <option value="">-</option>
                              <option value="<?= $va['Country1']; ?>"><?= $va['Country1']; ?></option>
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
                          <input type="text" name="BusinessState1" class="form-control" id="businesstate1" onkeyup="ValidarLargoBusinessState01()" value="<?= $va['State1']; ?>">
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
                          <input type="text" name="BusinessCity1" class="form-control" id="businesscity" onkeyup="validarLargoBusinessCity()" value="<?= $va['City1']; ?>">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                        <div class="form-group">
                          <label for="dirbusiness1">Address one<span class="red">*</span></label>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control"  name="BusinessAddress1" id="businessaddress1" onkeyup="ValidarLargoBusinessAddress()" value="<?= $va['Address1']; ?>">
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
                          <input type="text" name="Businessstorename1" class="form-control" id="businessstorename1" onkeyup="validarLargoBusinessStoreName()" value="<?= $va['storeName1']; ?>">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                        <div class="form-group">
                          <label for="zipcode1">Zip Code <span class="red">*</span></label>
                        </div>
                        <div class="form-group">
                          <input type="text" name="Businesszipcode1" class="form-control" id="businesszipcode1" onkeyup="ValidarLargoBusinessZipcode()" value="<?= $va['zipCode1'] ?>">
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
                    </div> -->

                    <?php foreach ($query4 as $value): ?> <!-- Inicio Foreach -->
                      <?php if ($value['businessLocation'] > 1 ||
                                $value['businessLocation'] > "1"): ?>

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
                                  * Add or delete the number of locations that you considered necessary
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
                                    <option value="<?= $va['Country2']; ?>" <?= $va['Country2'] != ''? 'selected="selected"' : '' ?>><?= $va['Country2']; ?></option>
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
                                  <input type="text" name="BusinessState02" class="form-control" id="bussinessstate02" onkeyup="ValidarLargoState02()" value="<?= $va['state2']; ?>">
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
                                  <input type="text" name="BusinessCity02" class="form-control" id="businesscity02" onkeyup="validarLargoCity02()" value="<?= $va['city2']; ?>">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                                <div class="form-group">
                                  <label for="businessaddress2">Address Two<span class="red">&nbsp;</span></label>
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control"  name="BusinessAddress2" id="businessaddress2" onkeyup="ValidarLargoDirBusiness02()" value="<?= $va['Address2']; ?>">
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
                                  <input type="text" name="BusinessStorename2" class="form-control" id="businessstorename2" onkeyup="validarLargoStoreName02()" value="<?= $va['storeName2']; ?>">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                                <div class="form-group">
                                  <label for="businesszipcode2">Zip Code <span class="red">&nbsp;</span></label>
                                </div>
                                <div class="form-group">
                                  <input type="text" name="BusinessZipcode2" class="form-control" id="businesszipcode2" onkeyup="validarLargoZipcode02()" value="<?= $va['zipCode2']; ?>">
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
                                      <option value="<?= $va['Country3']; ?>" <?= $va['Country3'] != ''? 'selected="selected"' : '' ?>><?= $va['Country3']; ?></option>
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
                                    <input type="text" name="BusinessState3" class="form-control" id="businessstate3" onkeyup="ValidarLargoState03()" value="<?= $va['State3']; ?>">
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
                                    <input type="text" name="Businesscity3" class="form-control" id="businesscity3" onkeyup="validarLargoCity03()" value="<?= $va['City3']; ?>">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                                  <div class="form-group">
                                    <label for="businessaddress3">Address Three<span class="red">&nbsp;</span></label>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" class="form-control"  name="BusinessAddress3" id="businessaddress3" onkeyup="ValidarLargoDirBusiness03()" value="<?= $va['Address3']; ?>">
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
                                    <input type="text" name="BusinessStorename3" class="form-control" id="businessstorename3" onkeyup="validarLargoStoreName03()" value="<?= $va['storeName3']; ?>">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                                  <div class="form-group">
                                    <label for="businesszipcode3">Zip Code <span class="red">&nbsp;</span></label>
                                  </div>
                                  <div class="form-group">
                                    <input type="text" name="BusinessZipcode3" class="form-control" id="businesszipcode3" onkeyup="validarLargoZipcode03()" value="<?= $va['zipCode3']; ?>">
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
                                        <option value="<?= $va['Country4']; ?>" <?= $va['Country4'] != ''? 'selected="selected"' : '' ?>><?= $va['Country4']; ?></option>
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
                                      <input type="text" name="BusinessState4" class="form-control" id="businessstate4" onkeyup="ValidarLargoState04()" value="<?= $va['State4']; ?>">
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
                                      <input type="text" name="BusinessCity4" class="form-control" id="businesscity4" onkeyup="validarLargoCity04()" value="<?= $va['City4']; ?>">
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                      <label for="businessaddress4">Address Four<span class="red">&nbsp;</span></label>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control"  name="BusinessAddress4" id="businessaddress4" onkeyup="ValidarLargoDirBusiness04()" value="<?= $va['Address4']; ?>">
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
                                      <input type="text" name="BusinessStorename4" class="form-control" id="businessstorename4" onkeyup="validarLargoStoreName04()" value="<?= $va['storeName4']; ?>">
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                      <label for="businesszipcode4">Zip Code <span class="red">&nbsp;</span></label>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="BusinessZipcode4" class="form-control" id="businesszipcode4" onkeyup="validarLargoZipcode04()" value="<?= $va['zipCode4']; ?>">
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
                                          <option value="<?= $va['Country5']; ?>" <?= $va['Country5'] != ''? 'selected="selected"' : '' ?>><?= $va['Country5']; ?></option>
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
                                        <input type="text" name="BusinessState5" class="form-control" id="businessstate5" onkeyup="ValidarLargoState05()" value="<?= $va['State5']; ?>">
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
                                        <input type="text" name="BusinessCity5" class="form-control" id="businesscity5" onkeyup="validarLargoCity05()" value="<?= $va['City5']; ?>">
                                      </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                                      <div class="form-group">
                                        <label for="businessaddress5">Address Five<span class="red">&nbsp;</span></label>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control"  name="BusinessAddress5" id="businessaddress5" onkeyup="ValidarLargoDirBusiness05()" value="<?= $va['Address5']; ?>">
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
                                        <input type="text" name="BusinessStorename5" class="form-control" id="businessstorename5" onkeyup="validarLargoStoreName05()" value="<?= $va['storeName5']; ?>">
                                      </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                                      <div class="form-group">
                                        <label for="businesszipcode5">Zip Code <span class="red">&nbsp;</span></label>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" name="BusinessZipcode5" class="form-control" id="businesszipcode5" onkeyup="validarLargoZipcode05()" value="<?= $va['zipCode5']; ?>">
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

                    <?php else: ?>
                    <?php endif; ?>
                  <?php endforeach; ?> <!-- Fin foreach -->

                <?php endforeach; ?>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="row" id="mostraOcultarWebSite">
              <div class="col-xs-12 col-sm-12 col-md-5">
                <div class="form-group">
                  <label for="website">Website <span class="red">*</span></label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  name="website" id="website" value="" onkeyup="validarLargoWebSite()">
                    <br/>
                    <p><strong>* If your Business Type is Online Add the URL</strong></p>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
                <div class="alert alert-danger alert-dismissible ocultar" id="avisowebsite" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;Website is required
                  </p>
                </div>

                <div class="alert alert-danger alert-dismissible ocultar" id="avisolargowebsite" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p class="centrar">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                    <strong>Error!</strong>&nbsp;Website must have a minimum of 5 characters
                  </p>
                </div>
              </div>
            </div>
            <div id="mostrarOcultarBusinessLocation" >
              <?php require_once 'union4.php'; ?>
            </div>
          <?php endif; ?>

          <div id="mostrarOcultarBusinessLocation" >
            <?php require_once 'union4.php'; ?>
          </div>

        </br>
        </br>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <center>
              <h2 class="social-title">Upload Documents (Only jpg, png, pdf with a size of 5 mb)</h2>
            </center>
          </div>
        </div>
        <br/>
        <br/>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5">
            <div class="form-group">
              <label for="file1">Certificate of Existence <span class="red">*</span></label>
            </div>
            <div class="form-group">
              <!-- <input type="file" name="file1" id="file1" onchange="validarDocumento1()"> -->

              <label for="file1" class="subir">
                <i class="fas fa-cloud-upload-alt"></i> Add File
            </label>
            <input id="file1" onchange='validarDocumento1()' name="file1" type="file" accept="image/*, application/pdf" style='display: none;'/>
            <div id="info"></div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
            <div class="form-group">
              <label for="file2">Tax Certificate <span class="red">*</span></label>
            </div>
            <div class="form-group">
              <!-- <input type="file" name="file2" id="file2" onchange="validarDocumento2()"> -->

              <label for="file2" class="subir">
                <i class="fas fa-cloud-upload-alt"></i> Add File
            </label>
            <input id="file2" onchange='validarDocumento2()' name="file2" type="file" accept="image/*, application/pdf" style='display: none;'/>
            <div id="info"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

            <div class="alert alert-danger alert-dismissible ocultar" id="avisoarchivosrequeridos" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;Certificate of Existence is required
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="avisoarchivosrequeridos2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;Tax Certificate is required
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="errorarchivo1" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;
                The file extension  is invalid (pdf) or the size (max 50 MB) exceeds the allowed
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="errorarchivo2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;
                The file extension  is invalid (pdf) or the size (max 50 MB) exceeds the allowed
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5">
            <div class="form-group">
              <label for="file3">Check Specimen <span class="red">*</span></label>
            </div>
            <div class="form-group">
              <!-- <input type="file" name="file3" id="file3" onchange="validarDocumento3()"> -->

              <label for="file3" class="subir">
                <i class="fas fa-cloud-upload-alt"></i> Add File
            </label>
            <input id="file3" onchange='validarDocumento3()' name="file3" type="file" accept="image/*, application/pdf" style='display: none;'/>
            <div id="info"></div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
            <div class="form-group">
              <label for="file4" class="font">Copy of the ID of the Legal Representative <span class="red">*</span></label>
            </div>
            <div class="form-group">
              <!-- <input type="file" name="file4" id="file4" onchange="validarDocumento4()"> -->

              <label for="file4" class="subir">
                <i class="fas fa-cloud-upload-alt"></i> Add File
            </label>
            <input id="file4" onchange='validarDocumento4()' name="file4" type="file" accept="image/*, application/pdf" style='display: none;'/>
            <div id="info"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

            <div class="alert alert-danger alert-dismissible ocultar" id="avisoarchivosrequeridos3" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;Check Specimen is required
              </p>
            </div>

            <div class="alert alert-danger alert-dismissible ocultar" id="avisoarchivosrequeridos4" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
              <p class="centrar">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                <strong>Error!</strong>&nbsp;Copy of the ID the legal representative is required
              </p>
            </div>
          </div>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="errorarchivo3" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;
            The file extension  is invalid (pdf) or the size (max 50 MB) exceeds the allowed
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="errorarchivo4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;
            The file extension  is invalid (pdf) or the size (max 50 MB) exceeds the allowed
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="errorarchivos" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;
            The files extension  is invalid (pdf) or the size (max 50 MB) exceeds the allowed
          </p>
        </div>

        <br/>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <p align="justify" class="termins">
              I hereby authorize Maaji to use the information provided for the purposes of checking, verifying and
              reporting credit history.
              I certify that I´m not under investigation by any Governmental Authority for, or has been charged with,
              or convicted of, money laundering, drug trafficking, terrorist-related activities or other relates crimes.
              The relation shall be terminated unilaterally and immediately if the client is listed in violation of any
              Anti-Money Laundering Law, by organizations including but not limited to: OFAC, United Nations List.
              In any case the client shall indemnify, defend and hold harmless Maaji, against all suits, actions, losses,
              damages, claims or liability (including, without limitation, attorneys fees and expenses) that Maaji
              incurred.
            </p>
          </div>

          <?php if (isset($userBusiness) && !empty($userBusiness)): ?>
            <span class="igree">
              <input type="checkbox" value="1" name="iGree2" id="iGree2" onclick="btnUpdate.disabled = !this.checked">
              <label for="iGree2">I Agree</labe>
            </span>
          <?php else: ?>
            <span class="igree">
              <input type="checkbox" value="1" name="iGree" id="iGree" onclick="btnSave.disabled = !this.checked">
              <label for="iGree">I Agree</labe>
            </span>
          <?php endif; ?>
          <br/>
        </div>
        <br/>
        <br/>

        <!-- Alerta validaciones de errores -->
        <div class="alert alert-danger alert-dismissible ocultar" id="avisovalidacionesform4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp; Fix errors to continue with the registration
          </p>
        </div>

        <!-- Alert procesando -->
        <center class="ocultar" id="carga4">
          <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
            <p class="centrar">
              <i class="fa fa-spinner fa-spin fa-3x"></i>&nbsp;
              Procesing information...!
            </p>
          </div>
        </center>

        <!-- Alert exito en la actualización -->
        <center class="ocultar" id="successfiles">
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
            <p class="centrar">
              <i class="fa fa-check fa-2x"></i>&nbsp;
              Files loaded correctly!
            </p>
          </div>
        </center>

        <!-- Alert exito en la actualización -->
        <center class="ocultar" id="sucessInfo">
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
            <p class="centrar">
              <i class="fa fa-check fa-2x"></i>&nbsp;
              Information save Successfully.!
            </p>
          </div>
        </center>

        <!-- Alert exito en la actualización -->
        <center class="ocultar" id="sucessupdateinfoform4">
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
            <p class="centrar">
              <i class="fa fa-check fa-2x"></i>&nbsp;
              Information Updated Successfully.!
            </p>
          </div>
        </center>

        <div class="row">
          <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
            <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-1">
              <div class="form-group">
                <a href="<?= URL ?>home/index3" class="btn btn-primary" name="btn-previus">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;
                  Previous
                </a>
              </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-3">
              <div class="form-group">
                <div id="checked2" >
                  <button type="button" class="btn btn-success" name="btnUpdate" onclick="ValidarFormularioUpdateCustomers4()" disabled>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    &nbsp;Update
                </button></div>
              </div>
            </div>
          <?php else: ?>
            <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-1">
              <div class="form-group">
                <a href="<?= URL ?>home/index3" class="btn btn-primary" name="btn-previus">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;
                  Previous
                </a>
              </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-3">
              <div class="form-group">
                <div id="checked" >
                <button type="button" class="btn btn-success" onclick="ValidarFormularioCustomers4()" name="btnSave" disabled>
                  <i class="fa fa-save" aria-hidden="true"></i>&nbsp;
                  Save
                </button>
              </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
