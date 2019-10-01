
<body>

  <?php require APP . 'view/_templates/encabezado.php'; ?>

<div class="" id="logo">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h1 align="center" id="img-logo">
        <a title="MaajiUS" href="http://staging-ap01-seafolly.demandware.net/s/MaajiUS/home">
          <img src="img/logo150_60.png" alt="Logo Maaji" />
        </a>
      </h1>
    </div>
  </div>
</div>

<div class="container" id="container-find-store">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
      <h1><img src="img/find-store.png" alt="img-findastore" width="160" height="80"></h1>
    </div>
  </div>

  <form action="#" autocomplete="off" id="form-storelocator-usa" name="formStorelocatorUsa" method="post" novalidate="novalidate">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4" id="filters">
        <div class="store-locator-refines">
          <label class="refines-header active" id="store-locator-usa-region">Select Region
          <i class="fa fa-angle-down fa-2x mostrar float-right" id="mostrar" aria-hidden="true" onclick="mostrarRegion()"></i>
          <i class="fa fa-angle-up fa-2x float-right" id="ocultar"  aria-hidden="true" onclick="ocultarRegion()"></i>
          </label>
          <div class="listbyregion" id="regions">
            <input id="Africa" name="regionCode" type="radio" value="Africa" onclick="filterCountries()"/>
            <label class="css-label" for="Africa">Africa</label>
            <br/>
            <input id="America" name="regionCode" type="radio" value="America" onclick="filterCountries()"/>
            <label class="css-label" for="America">America</label>
            <br/>
            <input id="Asia" name="regionCode" type="radio" value="Asia" onclick="filterCountries()"/>
            <label class="css-label" for="Asia">Asia</label>
            <br/>
            <input id="Europa" name="regionCode" type="radio" value="Europa" onclick="filterCountries()"/>
            <label class="css-label" for="Europa">Europe</label>
            <br/>
            <input id="Oceania" name="regionCode" type="radio" value="Oceania" onclick="filterCountries()"/>
            <label class="css-label" for="Oceania">Oceania</label>
          </div>
        </div>
        <div class="store-locator-refines">
          <label class="refines-header active" id="store-locator-usa-country">Select Country
          <i class="fa fa-angle-down fa-2x mostrar float-right" id="mostrar-country" aria-hidden="true" onclick="mostrarCountry()"></i>
          <i class="fa fa-angle-up fa-2x ocultar float-right" id="ocultar-country"  aria-hidden="true" onclick="ocultarCountry()"></i>
        </label>
        <div class="listbycountry refines-content" id="country">
        </div>
      </div>
      <div class="store-locator-refines">
        <label class="refines-header active" id="store-locator-usa-stores">Select Type of Store
          <i class="fa fa-angle-down fa-2x mostrar float-right" id="mostrar-stores" aria-hidden="true" onclick="mostrarStores()"></i>
          <i class="fa fa-angle-up fa-2x ocultar float-right" id="ocultar-stores"  aria-hidden="true" onclick="ocultarStores()"></i>
        </label>
        <div class="listbycountry refines-content" id="stores">
          <input id="Physical" name="storesCode" type="radio" value="Physical" onclick="validateRequired()"/>
          <label class="css-label" for="Physical">Physical</label>
          <br/>
          <input id="Store" name="storesCode" type="radio" value="Store" onclick="validateRequired()"/>
          <label class="css-label " for="Store">Store</label>
          <br/>
          <input id="Online" name="storesCode" type="radio" value="Online" onclick="validateRequired()"/>
          <label class="css-label " for="Online">Online Store</label>
          <br/>
          <input id="Distributors" name="storesCode" type="radio" value="Distributors" onclick="validateRequired()"/>
          <label class="css-label " for="Distributors">Distributors</label>
        </div>
      </div>
      <div class="store-locator-refines">
        <label class="refines-header active" id="store-locator-usa-category">Select Category
          <i class="fa fa-angle-down fa-2x mostrar float-right" id="mostrar-category" aria-hidden="true" onclick="mostrarCategory()"></i>
          <i class="fa fa-angle-up fa-2x ocultar float-right" id="ocultar-category"  aria-hidden="true" onclick="ocultarCategory()"></i>
        </label>
        <div class="listbycountry refines-content" id="category">
          <input id="Swim" name="categoryCode" type="radio" value="Swim" onclick="validateRequired()"/>
          <label class="css-label" for="Swim">Swim</label>
          <br/>
          <input id="Active" name="categoryCode" type="radio" value="Active" onclick="validateRequired()"/>
          <label class="css-label " for="Active">Active</label>
          <br/>
          <input id="Kids" name="categoryCode" type="radio" value="Kids" onclick="validateRequired()"/>
          <label class="css-label " for="Kids">Kids</label>
          <br/>
          <input id="Trunks" name="categoryCode" type="radio" value="Trunks" onclick="validateRequired()"/>
          <label class="css-label " for="Trunks">Trunks</label>
          <br/><input id="Cover" name="categoryCode" type="radio" value="Cover" onclick="validateRequired()"/>
          <label class="css-label " for="Cover">Cover Ups</label>
          <br/>
          <input id="Accessories" name="categoryCode" type="radio" value="Accessories" onclick="validateRequired()"/>
          <label class="css-label " for="Accessories">Accessories</label>
        </div>
      </div>
  </div>
</div>
<br/>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-2">
    <p class="or"><b>OR</b></p>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="store-locator-input-wrapper">
      <div class="store-locator-input">
        <div class="form-row " id="dwfrm-storelocator-location">
          <div class="field-wrapper">
            <label for="storelocator_location_usa">
              <input class="form-control input-filter-search" type="text" id="storelocator_location_usa" name="inputStorelocatorUSA" placeholder="Enter the Location">
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
    <div class="store-locator-btn float-center">
      <button type="button" name="storelocator_coordinatesSearch_usa" value="Find" class="btn-find" id="storelocator_coordinatesSearch_usa" onclick="validateFormStoreLocator();">
        <span>
          Find
        </span>
      </button>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
    <div class="store-locator-btn float-center">
      <button type="button" name="refresh" value="Find" class="btn-find" id="refresh" onclick="refreshPage();">
        <span>
          Refresh
        </span>
      </button>
    </div>
  </div>
</div>
</form>
</div>


<div class="storeLocatorPageResult">
  &nbsp;

  <div id="primary">
    <div class="store-locator-wrapper">
      <div class="grid-x">
        <div class="left-nav small-12 large-5 cell" style="width: 100%;">
          <div class="store-locator-search" id="data-stores">

          </div>
          <tbody class="" id="table-tbody">

          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
