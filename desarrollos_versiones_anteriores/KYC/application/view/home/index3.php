
<header>
  <nav class="wow bounceInLeft" data-wow-duration="2s">
    <?php require APP. 'view/_templates/menu.php'; ?>
  </nav>
</header>

</div>
<div class="clearfix"></div>
<div class="inner_content">
  <div class="title-bar top-title">
    <h1 class="text-center">Something Good</h1>
  </div>
  <div class="inner_content_w3_agile_info">
    <div class="agile_top_w3_grids">
      <div class="main-customers">
        <form class="form-horizontal" name="formcustomers3" id="form-customers3" action="#">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="currency" class="control-label">Billing Currency <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <select class="form-control" name="currency" id="currency" onchange="validarCurrency()">
                  <option value="">---</option>
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <option value="USD" <?= $value['currency'] == 'USD'? 'selected="selected"' : '' ?> >USD</option>
                    <option value="CAD" <?= $value['currency'] == 'CAD'? 'selected="selected"' : '' ?> >CAD</option>
                    <option value="COP" <?= $value['currency'] == 'COP'? 'selected="selected"' : '' ?> >COP</option>
                    <option value="EUR" <?= $value['currency'] == 'EUR'? 'selected="selected"' : '' ?> >EUR</option>
                    <option value="AUD" <?= $value['currency'] == 'AUD'? 'selected="selected"' : '' ?> >AUD</option>
                    <option value="GBP" <?= $value['currency'] == 'GBP'? 'selected="selected"' : '' ?> >GBP</option>
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
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="bankname" class="control-label">Bank Name <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" class="form-control" name="bankname" id="bankname" onkeyup="validarLargoBankName()" value="<?= $value['bankName']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control" name="bankname" id="bankname" onkeyup="validarLargoBankName()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta company name required-->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisocurrency" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Billing Currency is required
                </p>
              </div>

              <!-- Alerta longitud company name -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargocurrency" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Billing Currency must have a minimum of 3 characters
                </p>
              </div>

              <!-- Alerta brand name required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisobankname" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Bank Name is required
                </p>
              </div>

              <!-- Alerta longitud company name -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobankname" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Bank Name must have a minimum of 3 characters
                </p>
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group ul">
                <label for="branch" >Branch <span class="red">*</span>
                  <div class="li">
                    <i class="fa fa-question-circle" aria-hidden="true" title=""></i>
                    <span class="span">A bank branch is a physical location of a banking corporation</span>
                  </div>
                </label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" class="form-control"  name="branch" id="branch" onkeyup="ValidarLargoBranch()" value="<?= $value['branch']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="branch" id="branch" onkeyup="ValidarLargoBranch()" value="">
                <?php endif; ?>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group ">
                <label for="accountnumber" >Account Number <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" class="form-control"  name="accountnumber" id="accountnumber" onkeyup="ValidarLargoAccountNumber()" value="<?= $value['accountNumber']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" class="form-control"  name="accountnumber" id="accountnumber" onkeyup="ValidarLargoAccountNumber()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta phone required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisobranch" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Branch is required
                </p>
              </div>

              <!-- Alerta phone largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobranch" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Branch must have a minimum of 3 characters
                </p>
              </div>

              <!-- Alerta formato email -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoaccountnumber" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Account Number is required
                </p>
              </div>

              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargoaccountnumber" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Account Number must have a minimum of 6 characters
                </p>
              </div>
            </div>
          </div>

          <br/>
          <br/>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <center>
                <h2 class="address-title">Payment</h2>
              </center>
            </div>
          </div>
          <br/>
          <br/>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="paymenttype" >Type of Payment <span class="red">*</span>
                  </label>
              </div>
              <div class="form-group">
                <select class="form-control"  name="paymenttype" id="paymenttype" onchange="ValidarTypePayment()">
                  <option value="">---</option>
                  <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                    <?php foreach ($query3 as $value): ?>
                      <option value="credit-card" <?= $value['paymentType'] == 'credit-card'? 'selected="selected"' : '' ?> >Credit Card</option>
                      <option value="transaction" <?= $value['paymentType'] == 'transaction'? 'selected="selected"' : '' ?> >Transaction</option>
                      <option value="other" <?= $value['paymentType'] == 'other'? 'selected="selected"' : '' ?> >Other</option>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <option value="credit-card">Credit Card</option>
                    <option value="transaction">Transaction</option>
                    <option value="other">Others</option>
                  <?php endif; ?>
                </select>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group ul" id="ul">
                <div class="terms">
                  <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                    <?php foreach ($query3 as $val): ?>
                      <?php if ($val['creditTerms'] == "Aceptado"): ?>
                        <input type="checkbox" name="creditTerms" id="terms" checked="checked">
                      <?php else: ?>
                        <input type="checkbox" name="creditTerms" id="terms">
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php else: ?>
                      <input type="checkbox" name="creditTerms" id="terms">
                  <?php endif; ?>
              </div>
                <label for="terms">&nbsp;¿Do you want to apply for credit terms?
                  <div class="li" id="li">
                    <i class="fa fa-question-circle" aria-hidden="true" title=""></i>
                    <span class="span">The credit approval will be contingent entirely on Maaji´s discretion and the Maaji´s internal credit policies </span>
                  </div>
                </label>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisotypepayment" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Type of Payment is required
                </p>
              </div>

            </div>
          </div>

          <br/>
          <br/>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <center>
                <h2 class="title-buyer-contact">Buyer Contact</h2>
              </center>
            </div>
          </div>
          <br/>
          <br/>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="buyername">Full Name <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="buyername" class="form-control" id="buyername" onkeyup="validarLargoBuyerName()" value="<?= $value['buyerName']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="buyername" class="form-control" id="buyername" onkeyup="validarLargoBuyerName()" value="">
                <?php endif; ?>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="buyerphone">Phone <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="buyerphone" class="form-control" id="buyerphone" onkeyup="validarLargoBuyerPhone()" value="<?= $value['buyerPhone']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="buyerphone" class="form-control" id="buyerphone" onkeyup="validarLargoBuyerPhone()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyername" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Full Name is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobuyername" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Full Name must have a minimum of 3 characters
                </p>
              </div>

              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyerphone" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Phone is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobuyerphone" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Phone must have a minimum of 5 characters
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="buyeremail">Email <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="buyeremail" class="form-control" id="buyeremail" onkeyup="ValidarBuyerEmail()" value="<?= $value['buyerEmail']; ?>">
                    <input type="hidden" name="idbuyyer" class="form-control" id="idbuyyer" value="<?= $value['idBuyers']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="buyeremail" class="form-control" id="buyeremail" onkeyup="ValidarBuyerEmail()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoformatobuyeremail" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;The format of email is invalid (example@mydomain.com)
                </p>
              </div>

              <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyeremail" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Email is required
                </p>
              </div>
            </div>
          </div>

          <br/>
          <br/>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <center>
                <h2 class="social-title">Logistic Contact </h2>
              </center>
            </div>
          </div>
          <br/>
          <br/>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7">
              <h2 class="title-reference-two">Reference One</h2>
            </div>
          </div>
          <br/>
          <br/>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="reference1name">Full Name <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="reference1name" class="form-control" id="reference1name" onkeyup="validarLargoNameReference1()" value="<?= $value['reference1Name']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="reference1name" class="form-control" id="reference1name" onkeyup="validarLargoNameReference1()" value="">
                <?php endif; ?>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="phonereference1">Phone <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="phonereference1" class="form-control" id="phonereference1" onkeyup="validarLargoPhoneReference1()" value="<?= $value['phoneReference1']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="phonereference1" class="form-control" id="phonereference1" onkeyup="validarLargoPhoneReference1()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisonamereference1" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Full Name is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargonamereference1" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Full Name must have a minimum of 3 characters
                </p>
              </div>

              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisophonereference1" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Phone is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargophonereference1" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Phone must have a minimum of 5 characters
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="emailreference1">Email <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="emailreference1" class="form-control" id="emailreference1" onkeyup="ValidarEmailReference1()" value="<?= $value['emailReference1']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="emailreference1" class="form-control" id="emailreference1" onkeyup="ValidarEmailReference1()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoemailreference1" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Email is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoformatoemailreference1" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;The format of email is invalid (example@mydomain.com)
                </p>
              </div>
            </div>
          </div>

          <br/>
          <br/>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7">
              <h2 class="title-reference-two">Reference Two</h2>
            </div>
          </div>
          <br/>
          <br/>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="reference2name">Full Name <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="reference2name" class="form-control" id="reference2name" onkeyup="validarLargoNameReference2()" value="<?= $value['reference2Name']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="reference2name" class="form-control" id="reference2name" onkeyup="validarLargoNameReference2()" value="">
                <?php endif; ?>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="phonereference2">Phone <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="phonereference2" class="form-control" id="phonereference2" onkeyup="validarLargoPhoneReference2()" value="<?= $value['phoneReference2']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="phonereference2" class="form-control" id="phonereference2" onkeyup="validarLargoPhoneReference2()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisonamereference2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Full Name is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargonamereference2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Full Name must have a minimum of 3 characters
                </p>
              </div>

              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisophonereference2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Phone is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargophonereference2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Phone must have a minimum of 5 characters
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="emailreference2">Email <span class="red">*</span></label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="emailreference2" class="form-control" id="emailreference2" onkeyup="ValidarEmailReference2()" value="<?= $value['emailReference2']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="emailreference2" class="form-control" id="emailreference2" onkeyup="ValidarEmailReference2()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address required -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoemailreference2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Email is required
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoformatoemailreference2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;The format of email is invalid (example@mydomain.com)
                </p>
              </div>
            </div>
          </div>

          <br/>
          <br/>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7">
              <h2 class="title-reference-three">Reference Three - Optional</h2>
            </div>
          </div>
          <br/>
          <br/>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="reference3name">Full Name</label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="reference3name" class="form-control" id="reference3name" onkeyup="validarLargoNameReference3()" value="<?= $value['reference3Name']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="reference3name" class="form-control" id="reference3name" onkeyup="validarLargoNameReference3()" value="">
                <?php endif; ?>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
              <div class="form-group">
                <label for="phonereference3">Phone</label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="phonereference3" class="form-control" id="phonereference3" onkeyup="validarLargoPhoneReference3()" value="<?= $value['phoneReference3']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="phonereference3" class="form-control" id="phonereference3" onkeyup="validarLargoPhoneReference3()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargonamereference3" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Name must have a minimum of 3 characters
                </p>
              </div>

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisolargophonereference3" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;Phone must have a minimum of 5 characters
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <div class="form-group">
                <label for="emailreference3">Email</label>
              </div>
              <div class="form-group">
                <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
                  <?php foreach ($query3 as $value): ?>
                    <input type="text" name="emailreference3" class="form-control" id="emailreference3" onkeyup="ValidarEmailReference3()" value="<?= $value['emailReference3']; ?>">
                  <?php endforeach; ?>
                <?php else: ?>
                  <input type="text" name="emailreference3" class="form-control" id="emailreference3" onkeyup="ValidarEmailReference3()" value="">
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

              <!-- Alerta address largo -->
              <div class="alert alert-danger alert-dismissible ocultar" id="avisoformatoemailreference3" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p class="centrar">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
                  <strong>Error!</strong>&nbsp;The format of email is invalid (example@mydomain.com)
                </p>
              </div>
            </div>
          </div>
          <br/>
          <br/>

          <!-- Alerta validaciones de errores -->
          <div class="alert alert-danger alert-dismissible ocultar" id="avisovalidaciones3" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p class="centrar">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
              <strong>Error!</strong>&nbsp; Fix errors to continue with the registration
            </p>
          </div>
          <br>

          <!-- Alert procesando actualización -->
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
          <center class="ocultar" id="exitoactualizacionForm3">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ari-hidden="true">&times;</span></button>
              <p class="centrar">
                <i class="fa fa-check fa-2x"></i>&nbsp;
                Information Update Successfully.!
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

          <div class="row">
            <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-1">
                <div class="form-group">
                  <a href="<?= URL ?>home/index2" class="btn btn-primary" name="btn-previus">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;
                    Previous
                  </a>
                </div>
              </div>
              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-1">
                <div class="form-group">
                  <button type="button" class="btn btn-warning" name="btn-update" onclick="ValidarFormularioActualizacionForm3()">
                    <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;
                    Update
                  </button>
                </div>
              </div>
              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-1">
                <div class="form-group">
                  <a href="<?= URL ?>home/index4" class="btn btn-primary" name="btn-go">
                    Next (3/4)
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;
                  </a>
                </div>
              </div>
            <?php else: ?>
              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-1">
                <div class="form-group">
                  <a href="<?= URL ?>home/index2" class="btn btn-primary" name="btn-previus">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;
                    Previous
                  </a>
                </div>
              </div>

              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3 col-md-offset-5">
                <div class="form-group">
                  <button type="button" class="btn btn-primary" onclick="ValidarFormularioCustomers3()" name="btn-next">
                    Next (3/4)
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;
                  </button>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
