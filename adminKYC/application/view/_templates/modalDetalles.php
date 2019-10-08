<!-- Modal detalles del cliente index 1 -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-y: scroll">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" onclick="javascript:location.reload()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title text-center authenia" id="exampleModalLabel">Where the Maajic Begins</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="CompanyName">Company Name</label>
            </div>
            <div class="form-group">
              <input type="text" name="companyname" value="" id="CompanyName" readonly="true" class="form-control">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1">
            <div class="form-group">
              <label for="BrandName">Brand Name</label>
            </div>
            <div class="form-group">
              <input type="text" name="brandname" value="Brand Name" id="BrandName" readonly="true" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="Email">Email</label>
            </div>
            <div class="form-group">
              <input type="text" name="email" value="email" id="Email" readonly="true" class="form-control">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1">
            <div class="form-group">
              <label for="CompanyPhone">Company Phone</label>
            </div>
            <div class="form-group">
              <input type="text" name="companyphone" value="company phone" id="CompanyPhone" readonly="true" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="Website">Email</label>
            </div>
            <div class="form-group">
              <input type="text" name="website" value="website" id="Website" readonly="true" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <h3 class="text-center">Social Media Accounts</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="Facebook"><i class="fab fa-facebook-square fa-2x face" aria-hidden="true"></i>&nbsp;Facebook</label>
            </div>
            <div class="form-group">
              <input type="text" name="facebook" value="@" id="Facebook" readonly="true" class="form-control">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1">
            <div class="form-group">
              <label for="Instagram"><i class="fab fa-instagram fa-2x" aria-hidden="true"></i>&nbsp;Instagram</label>
            </div>
            <div class="form-group">
              <input type="text" name="instagram" value="@" id="Instagram" readonly="true" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="Twitter"><i class="fab fa-twitter-square fa-2x twitter" aria-hidden="true"></i>&nbsp;Twitter</label>
            </div>
            <div class="form-group">
              <input type="text" name="twitter" value="@" id="Twitter" readonly="true" class="form-control">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1">
            <div class="form-group">
              <label for="Pinterest"><i class="fab fa-pinterest-square fa-2x pinterest" aria-hidden="true"></i>&nbsp;Pinterest</label>
            </div>
            <div class="form-group">
              <input type="text" name="pinterest" value="@" id="Pinterest" readonly="true" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 right">
              &nbsp;<a href="" name="button" class="btn btn-secondary">&nbsp;Previous&nbsp;<i class="fas fa-arrow-left"></i></a>
              <strong>1</strong> / 4
              <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#modal2" data-backdrop="static" data-keyboard="false" data-dismiss="modal" aria-label="Close"><i class="fas fa-arrow-right"></i>&nbsp;Next</a>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="habilitarEdicion()"><i class="fas fa-edit" aria-hidden="true"></i>&nbsp;Edit</button>
        <button type="button" class="btn btn-success" onclick="guardarCambios()" id="btnguardarcambios" disabled><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal detalles del cliente index 2 -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-y: scroll">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" onclick="javascript:location.reload()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title text-center authenia" id="exampleModalLabel">We Are Building Something</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="TaxId">Tax ID / VAT Number</label>
            </div>
            <div class="form-group">
              <input type="text" name="taxid" value="" id="TaxId" readonly="true" class="form-control">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1">
            <div class="form-group">
              <label for="TypeCompany">Type of Company</label>
            </div>
            <div class="form-group">
              <input type="text" name="typecompany" value="" id="TypeCompany" readonly="true" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="LegalRepOwner">Lega Representative / Owner</label>
            </div>
            <div class="form-group">
              <input type="text" name="legalrepowner" value="" id="LegalRepOwner" readonly="true" class="form-control">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1">
            <div class="form-group">
              <label for="LegalIdNumber">Legal Representative Id Number</label>
            </div>
            <div class="form-group">
              <input type="text" name="legalidnumber" value="" id="LegalIdNumber" readonly="true" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="OwnerPhone">Owner Phone</label>
            </div>
            <div class="form-group">
              <input type="text" name="ownerphone" value="" id="OwnerPhone" readonly="true" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <h3 class="text-center">Billing Address</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="CountryModalIndex2">Country</label>
            </div>
            <div class="form-group">
              <select class="form-control" id="CountryModalIndex2" name="countrymodalindex2" disabled="true">
                <option value="">---</option>
                <?php foreach ($paises as $value): ?>
                  <option value="<?= $value['nameEnglish']; ?>"><?= $value['nameEnglish']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1">
            <div class="form-group">
              <label for="State">State</label>
            </div>
            <div class="form-group">
              <input type="text" name="state" value="" id="State" readonly="true" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="City">City</label>
            </div>
            <div class="form-group">
              <input type="text" name="city" value="" id="City" readonly="true" class="form-control">
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1">
            <div class="form-group">
              <label for="Address">Address</label>
            </div>
            <div class="form-group">
              <input type="text" name="address" value="" id="Address" readonly="true" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="ZipCode">Zip Code</label>
            </div>
            <div class="form-group">
              <input type="text" name="zipcode" value="" id="ZipCode" readonly="true" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <h3 class="text-center">Shipping Address</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="form-group">
              <label for="QuantityLocations">Quantity Of Locations</label>
            </div>
            <div class="form-group">
              <select class="form-control" name="quantitylocations" id="QuantityLocations" disabled="true">
                <option value="">---</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
                <option value="mas-5">More Than Five</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 right">
              &nbsp;<a href="" name="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false" data-dismiss="modal" aria-label="Close">&nbsp;Previous&nbsp;<i class="fas fa-arrow-left"></i></a>
              <strong>2</strong> / 4
              <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#modal2" data-backdrop="static" data-keyboard="false"><i class="fas fa-arrow-right"></i>&nbsp;Next</a>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="habilitarEdicionIndex2()"><i class="fas fa-edit" aria-hidden="true"></i>&nbsp;Edit</button>
        <button type="button" class="btn btn-success" onclick="guardarCambiosIndex2()" id="btnguardarcambiosIdx2" disabled><i class="fas fa-save" aria-hidden="true"></i>&nbsp;Save</button>
      </div>
    </div>
  </div>
</div>
