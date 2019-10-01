
<header>
  <nav class="wow bounceInLeft" data-wow-duration="2s">
    <?php require APP. 'view/_templates/menu.php'; ?>
  </nav>
</header>

</div>
<div class="clearfix"></div>
<div class="inner_content">
  <div class="title-bar top-title">
    <h1 class="text-center font-maaji">Knowing You Better</h1>
  </div>
  <div class="inner_content_w3_agile_info">
    <div class="agile_top_w3_grids">
      <div class="main-customers">
        <form class="form-horizontal" name="formcustomers4" id="form-customers4" action="#" enctype="multipart/form-data" autocomplete="off">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="figures">Anual Sales Figures</label>
              </div>
              <div class="form-group">
                <select class="form-control" name="currencyAnualFigures" id="currency" onchange="showAnualFigures()">
                  <option value="">---</option>
                <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
                  <?php foreach ($query4 as $value): ?>
                    <option value="USD" <?= $value['currencyAnualSalesFigures'] == 'USD'? 'selected="selected"' : '' ?> >USD</option>
                    <option value="CAD" <?= $value['currencyAnualSalesFigures'] == 'CAD'? 'selected="selected"' : '' ?> >CAD</option>
                    <option value="COP" <?= $value['currencyAnualSalesFigures'] == 'COP'? 'selected="selected"' : '' ?> >COP</option>
                    <option value="EUR" <?= $value['currencyAnualSalesFigures'] == 'EUR'? 'selected="selected"' : '' ?> >EUR</option>
                    <option value="AUD" <?= $value['currencyAnualSalesFigures'] == 'AUD'? 'selected="selected"' : '' ?> >AUD</option>
                    <option value="GBP" <?= $value['currencyAnualSalesFigures'] == 'GBP'? 'selected="selected"' : '' ?> >GBP</option>
                  <?php endforeach; ?>
                <?php else: ?>
                    <option value="USD">USD</option>
                    <option value="CAD">CAD</option>
                    <option value="COP">COP</option>
                    <option value="EUR">EUR</option>
                    <option value="AUD">AUD</option>
                    <option value="GBP">GBP</option>
                <?php endif; ?>
              </select>
              </div>
              <div class="form-group" id="hideCurrency">
                <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
                  <?php foreach ($query4 as $value): ?>
                    <input type="text" class="form-control validanumeros"  name="figures" id="figures" onkeyup="validarFigures()" value="<?= $value['figures']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control validanumeros"  name="figures" id="figures" onkeyup="validarFigures()" value="">
                <?php endif; ?>
              </div>
              <!-- Alerta company name required-->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisonumeros" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Only numbers
                </p>
              </div>
            </div>

            <br>
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1">
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
                <label for="typeBusiness" class="control-label">Type of Business <span class="red">*</span></label>
              </div>
                <div class="form-group">
                  <select class="form-control"  name="typebusiness" id="typeBusiness" onchange="validarTypeBusiness()">
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
                  <strong>Error!</strong>&nbsp;Market Potential for the Brand must have a minimum of 5 characters
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

          <div class="row ocultar" id="mostrarWebSite">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label class="control-label" for="webSite">WebSite <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBusiness) && $userBusiness != NULL): ?>
                  <?php foreach ($query4 as $value): ?>
                    <input type="text" name="website" id="webSite" class="form-control" onkeyup="validarFormatoURL()" value="<?= str_replace("https://", "", $value['webSite']); ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="website" id="webSite" class="form-control" onkeyup="validarFormatoURL()">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargowebsite" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;WebSite must have a minimum of 5 characters
                </p>
              </div>

              <div class="alert alert-danger alert-dismissible ocultar" id="avisowebsite" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;WebSite is required
                </p>
              </div>

              <div class="alert alert-danger alert-dismissible ocultar" id="avisoformatourl" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;WebSite format is invalid (example: www.mydomain.co)
                </p>
              </div>
            </div>
          </div>

          <br/>
          <br/>

          <div id="mostrarOcultarBusinessLocation" class="ocultar">
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
          <div class="col-xs-12 col-sm-12 col-md-5" id="file1">
            <div class="form-group">
              <label for="File1">Certificate of Existence <span class="red">*</span></label>
            </div>
            <div class="form-group">
            <input class="file-3" type="file" name="certificateexistence" id="File1" accept="application/pdf, image/jpeg, image/jpg" onchange="validarFile1()">
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1" id="file2">
            <div class="form-group">
              <label for="File2">Tax Certificate <span class="red">*</span></label>
            </div>
            <div class="form-group">
            <input class="file-3" type="file" name="taxcertificate" id="File2" accept="application/pdf, image/jpeg, image/jpg" onchange="validarFile2()">
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
          <div class="col-xs-12 col-sm-12 col-md-5" id="file3">
            <div class="form-group">
              <label for="File3">Check Specimen <span class="red">*</span></label>
            </div>
            <div class="form-group">
            <input class="file-3" type="file" name="checkspecimen" id="File3" accept="application/pdf, image/jpeg, image/jpg" onchange="validarFile3()">
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1" id="file4">
            <div class="form-group">
              <label for="File4" class="font">Copy of the ID of the Legal Representative <span class="red">*</span></label>
            </div>
            <div class="form-group">
              <input class="file-3" type="file" name="legalrepresentative" id="File4" accept="application/pdf, image/jpeg, image/jpg" onchange="validarFile4()">
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

        <?php if(isset($country) && $country == "United States of America (USA)"): ?>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 mostrar" id="file5">
              <div class="form-group">
                <label for="File5" class="font">Re-Saler Certificate <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <input class="file-3" type="file" name="resalercertificate" id="File5" accept="application/pdf, image/jpeg, image/jpg" onchange="validarFile5()">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoarchivosrequeridos5" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Re-Saler Certificate is required
                </p>
              </div>
            </div>
          </div>
        <?php else: ?>
        <?php endif; ?>

        <div class="alert alert-danger alert-dismissible ocultar" id="errorarchivo3" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;
            The file extension  is invalid (pdf) or the size (max 5 MB) exceeds the allowed
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="errorarchivo4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;
            The file extension  is invalid (pdf) or the size (max 5 MB) exceeds the allowed
          </p>
        </div>

        <div class="alert alert-danger alert-dismissible ocultar" id="errorarchivos" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
          </button>
          <p class="centrar">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
            <strong>Error!</strong>&nbsp;
            The files extension  is invalid (pdf) or the size (max 5 MB) exceeds the allowed
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
              <strong>Processing Information...!</strong>
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
