
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-5">
  <div class="form-group">
    <label for="buyercontactsQuant">Select the quantity of Buyers Contacts <span class="red">*</span></label>
  </div>
    <select onchange="buyerContacts()" class="form-control hoc" name="buyercontactsquantity" id="buyercontactsQuant">
      <option value="">---</option>
      <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
        <?php foreach ($query3 as $value): ?>
          <option value="1" <?= $value['quantityBuyers'] == '1'? 'selected="selected"' : '' ?> >One</option>
          <option value="2" <?= $value['quantityBuyers'] == '2'? 'selected="selected"' : '' ?> >Two</option>
          <option value="3" <?= $value['quantityBuyers'] == '3'? 'selected="selected"' : '' ?> >Three</option>
          <option value="4" <?= $value['quantityBuyers'] == '4'? 'selected="selected"' : '' ?> >Four</option>
          <option value="5" <?= $value['quantityBuyers'] == '5'? 'selected="selected"' : '' ?> >Five</option>
          <option value="mas-5" <?= $value['quantityBuyers'] == 'mas-5'? 'selected="selected"' : '' ?> >More Than Five</option>
      <?php endforeach; ?>
      <?php else: ?>
        <option id="1" value="1" >One</option>
        <option id="2" value="2" >Two</option>
        <option id="3" value="3" >Three</option>
        <option id="4" value="4" >Four</option>
        <option id="5" value="5" >Five</option>
        <option id="mas-5" value="mas-5" >More Than Five</option>
      <?php endif; ?>
    </select>
  </div>
</div>
<br/>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
    <div class="alert alert-danger alert-dismissible ocultar" id="avisoquantitybuyers" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button>
      <p class="centrar">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
        <strong>Error!</strong>&nbsp;Quantity Buyers Contacts is required
      </p>
    </div>
  </div>
</div>
<br/>

<div id="c1" class="">
  <hr class="hr">
  <fieldset>
    <legend><h2>Contact One</h2></legend>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-5">
      <div class="form-group">
        <label for="buyerName1">Full Name <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyernamecontact" class="form-control" id="buyerName1" onkeyup="validarLargoBuyerName()" value="<?= $value['fullNameBuyers1']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyernamecontact" class="form-control" id="buyerName1" onkeyup="validarLargoBuyerName()" value="">
        <?php endif; ?>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
        <label for="buyerPhone1">Phone <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyerphonecontact" class="form-control" id="buyerPhone1" onkeyup="validarLargoBuyerPhone()" value="<?= $value['phoneBuyers1']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyerphonecontact" class="form-control" id="buyerPhone1" onkeyup="validarLargoBuyerPhone()" value="">
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
        <label for="buyerEmail1">Email <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyeremailcontact" class="form-control" id="buyerEmail1" onkeyup="ValidarBuyerEmail()" value="<?= $value['emailBuyers1']; ?>">
            <input type="hidden" name="idbuyyer" class="form-control" id="idbuyyer" value="<?= $value['idBuyers']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyeremailcontact" class="form-control" id="buyerEmail1" onkeyup="ValidarBuyerEmail()" value="">
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

</div>
<div id="c2" class="">
  <hr class="hr">
  <fieldset>
    <legend><h2>Contact Two</h2></legend>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-5">
      <div class="form-group">
        <label for="buyerName2">Full Name <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyernamecontact2" class="form-control" id="buyerName2" onkeyup="validarLargoBuyerName2()" value="<?= $value['fullNameBuyers2']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyernamecontact2" class="form-control" id="buyerName2" onkeyup="validarLargoBuyerName2()" value="">
        <?php endif; ?>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
        <label for="buyerPhone2">Phone <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyerphone2" class="form-control" id="buyerPhone2" onkeyup="validarLargoBuyerPhone2()" value="<?= $value['phoneBuyers2']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyerphone2" class="form-control" id="buyerPhone2" onkeyup="validarLargoBuyerPhone2()" value="">
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
      <!-- Alerta address required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyername2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Full Name is required
        </p>
      </div>

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobuyername2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Full Name must have a minimum of 3 characters
        </p>
      </div>

      <!-- Alerta address required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyerphone2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Phone is required
        </p>
      </div>

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobuyerphone2" role="alert">
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
        <label for="buyerEmail2">Email <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyeremail2" class="form-control" id="buyerEmail2" onkeyup="ValidarBuyerEmail2()" value="<?= $value['emailBuyers2']; ?>">
            <input type="hidden" name="idbuyyer" class="form-control" id="idbuyyer" value="<?= $value['idBuyers']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyeremail2" class="form-control" id="buyerEmail2" onkeyup="ValidarBuyerEmail2()" value="">
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisoformatobuyeremail2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;The format of email is invalid (example@mydomain.com)
        </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyeremail2" role="alert">
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

</div>
<div id="c3" class="">
  <hr class="hr">
  <fieldset>
    <legend><h2>Contact Three</h2></legend>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-5">
      <div class="form-group">
        <label for="buyerName3">Full Name <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyername3" class="form-control" id="buyerName3" onkeyup="validarLargoBuyerName3()" value="<?= $value['fullNameBuyers3']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyername3" class="form-control" id="buyerName3" onkeyup="validarLargoBuyerName3()" value="">
        <?php endif; ?>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
        <label for="buyerPhone3">Phone <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyerphone3" class="form-control" id="buyerPhone3" onkeyup="validarLargoBuyerPhone3()" value="<?= $value['phoneBuyers3']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyerphone3" class="form-control" id="buyerPhone3" onkeyup="validarLargoBuyerPhone3()" value="">
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
      <!-- Alerta address required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyername3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Full Name is required
        </p>
      </div>

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobuyername3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Full Name must have a minimum of 3 characters
        </p>
      </div>

      <!-- Alerta address required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyerphone3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Phone is required
        </p>
      </div>

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobuyerphone3" role="alert">
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
        <label for="buyerEmail3">Email <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyeremail3" class="form-control" id="buyerEmail3" onkeyup="ValidarBuyerEmail3()" value="<?= $value['emailBuyers3']; ?>">
            <input type="hidden" name="idbuyyer" class="form-control" id="idbuyyer" value="<?= $value['idBuyers']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyeremail3" class="form-control" id="buyerEmail3" onkeyup="ValidarBuyerEmail3()" value="">
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisoformatobuyeremail3" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;The format of email is invalid (example@mydomain.com)
        </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyeremail3" role="alert">
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

</div>
<div id="c4" class="">
  <hr class="hr">
  <fieldset>
    <legend><h2>Contact Four</h2></legend>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-5">
      <div class="form-group">
        <label for="buyerName4">Full Name <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyername4" class="form-control" id="buyerName4" onkeyup="validarLargoBuyerName4()" value="<?= $value['fullNameBuyers4']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyername4" class="form-control" id="buyerName4" onkeyup="validarLargoBuyerName4()" value="">
        <?php endif; ?>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
        <label for="buyerPhone4">Phone <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyerphone4" class="form-control" id="buyerPhone4" onkeyup="validarLargoBuyerPhone4()" value="<?= $value['phoneBuyers4']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyerphone4" class="form-control" id="buyerPhone4" onkeyup="validarLargoBuyerPhone4()" value="">
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
      <!-- Alerta address required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyername4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Full Name is required
        </p>
      </div>

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobuyername4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Full Name must have a minimum of 3 characters
        </p>
      </div>

      <!-- Alerta address required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyerphone4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Phone is required
        </p>
      </div>

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobuyerphone4" role="alert">
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
        <label for="buyerEmail4">Email <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyeremail4" class="form-control" id="buyerEmail4" onkeyup="ValidarBuyerEmail4()" value="<?= $value['emailBuyers4']; ?>">
            <input type="hidden" name="idbuyyer" class="form-control" id="idbuyyer" value="<?= $value['idBuyers']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyeremail4" class="form-control" id="buyerEmail4" onkeyup="ValidarBuyerEmail4()" value="">
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisoformatobuyeremail4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;The format of email is invalid (example@mydomain.com)
        </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyeremail4" role="alert">
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

</div>
<div id="c5" class="">
  <hr class="hr">
  <fieldset>
    <legend><h2>Contact Five</h2></legend>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-5">
      <div class="form-group">
        <label for="buyerName5">Full Name <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyername5" class="form-control" id="buyerName5" onkeyup="validarLargoBuyerName5()" value="<?= $value['fullNameBuyers5']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyername5" class="form-control" id="buyerName5" onkeyup="validarLargoBuyerName5()" value="">
        <?php endif; ?>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
      <div class="form-group">
        <label for="buyerPhone5">Phone <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyerphone5" class="form-control" id="buyerPhone5" onkeyup="validarLargoBuyerPhone5()" value="<?= $value['phoneBuyers5']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyerphone5" class="form-control" id="buyerPhone5" onkeyup="validarLargoBuyerPhone5()" value="">
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">
      <!-- Alerta address required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyername5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Full Name is required
        </p>
      </div>

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobuyername5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Full Name must have a minimum of 3 characters
        </p>
      </div>

      <!-- Alerta address required -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyerphone5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;Phone is required
        </p>
      </div>

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisolargobuyerphone5" role="alert">
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
        <label for="buyerEmail5">Email <span class="red">*</span></label>
      </div>
      <div class="form-group">
        <?php if (isset($userBuyers) && $userBuyers != NULL): ?>
          <?php foreach ($buyerContacts as $value): ?>
            <input type="text" name="buyeremail5" class="form-control" id="buyerEmail5" onkeyup="ValidarBuyerEmai5()" value="<?= $value['emailBuyers5']; ?>">
            <input type="hidden" name="idbuyercontacts" class="form-control" id="idbuyyer" value="<?= $value['idBuyersContacts']; ?>">
          <?php endforeach; ?>
        <?php else: ?>
          <input type="text" name="buyeremail5" class="form-control" id="buyerEmail5" onkeyup="ValidarBuyerEmai5()" value="">
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1">

      <!-- Alerta address largo -->
      <div class="alert alert-danger alert-dismissible ocultar" id="avisoformatobuyeremail5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="centrar">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
          <strong>Error!</strong>&nbsp;The format of email is invalid (example@mydomain.com)
        </p>
      </div>

      <div class="alert alert-danger alert-dismissible ocultar" id="avisobuyeremail5" role="alert">
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

</div>

<div id="c6" class="">
  <div class="alert alert-success alert-dismissible" id="avisoemailbuyercontacts" role="alert">
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
