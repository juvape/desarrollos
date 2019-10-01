
<body>

  <?php require APP . 'view/_templates/encabezado.php'; ?>

<div class="" id="logo">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h1 align="center" id="img-logo">
         <a title="MaajiUS" href="https://www.maaji.co/shop/us">
          <img src="<?= URL; ?>img/Logo150_60.png" alt="Logo Maaji" />
          <!--<img src="https://www.maaji.co/on/demandware.static/Sites-Maaji-Site/-/default/dw1e0201b5/images/maaji-logo.svg" alt="logo"/>-->
        </a>
      </h1>
    </div>
  </div>
</div>

<div class="container" id="container-find-store">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
      <h1 class="title-find">Find A Store</h1>
    </div>
  </div>

  <div class="row menu">
    <div class="col-xs-12 col-sm-12 col-md-4" id="filters">
      <div class="slidebar">
        <form action="#" autocomplete="off" id="form-storelocator-usa" name="formStorelocatorUsa" method="post" novalidate="novalidate">
          <ul class="menu">
            <div class="store-locator-refines">
              <div class="listbyregion" id="regions">
                <li class="sub-menu"><a class="dropa">SELECT REGION</a>

                  <ul>
                    <li><a href="#"> <input id="Africa" name="regionCode" type="radio" value="Africa" onclick="filterCountries()"/>
                      <label class="css-label" for="Africa">Africa</label></a></li>
                      <li><a href="#"><input id="America" name="regionCode" type="radio" value="America" onclick="filterCountries()"/>
                        <label class="css-label" for="America">America</label></a></li>
                        <li><a href="#"><input id="Asia" name="regionCode" type="radio" value="Asia" onclick="filterCountries()"/>
                          <label class="css-label" for="Asia">Asia</label></a></li>
                          <li><a href="#"><input id="Europa" name="regionCode" type="radio" value="Europa" onclick="filterCountries()"/>
                            <label class="css-label" for="Europa">Europe</label></a></li>

                            <li><a href="#"><input id="Oceania" name="regionCode" type="radio" value="Oceania" onclick="filterCountries()"/>
                              <label class="css-label" for="Oceania">Oceania</label></a></li>
                            </ul>

                          </li>
                        </div>
                      </div>
                      <div class="store-locator-refines">
                        <div class="listByCountry">
                          <li class="sub-menu"><a class="dropa">SELECT COUNTRY</a>
                            <ul>
                              <div class="store-locator-refines">
                                <li>
                                  <a href="#"><div class="listbycountry refines-content" id="country" onclick="regionPais()"></div></a>
                                </li>
                              </div>
                            </ul>
                          </li>
                        </div>
                      </div>
                      <div class="store-locator-refines">
                        <div class="listbycountry refines-content" id="stores">
                          <li class="sub-menu"><a class="dropa">SELECT TYPE OF STORE</a>
                            <ul>
                                <li><a href=""><input id="Store" name="storesCode" type="radio" value="Store" onclick="regionPaisType();"/>
                                  <label class="css-label " for="Store">Store</label></a>
                                </li>
                                  <li><a href=""><input id="Online" name="storesCode" type="radio" value="Online" onclick="searchByOnline();"/>
                                    <label class="css-label " for="Online">Online Store</label></a>
                                  </li>
                                  <li><a href=""><input id="All" name="storesCode" type="radio" value="All" onclick="allTypes();"/>
                                    <label class="css-label " for="All">All</label></a>
                                  </li>
                                    </ul>
                                  </li>
                                </div>
                              </div>
                              <div class="store-locator-refines">
                                <div class="listbycountry refines-content" id="category">
                                  <li class="sub-menu"><a class="dropa">SELECT CATEGORY</a>
                                    <ul>
                                      <li><a href="">
                                        <input id="Swim" name="categoryCode" type="radio" value="Swim" onclick="filterAll();"/>
                                        <label class="css-label" for="Swim">Swim</label>
                                      </a></li>
                                      <li><a href="">
                                        <input id="Active" name="categoryCode" type="radio" value="Active" onclick="filterAll();"/>
                                        <label class="css-label " for="Active">Active</label>
                                      </a></li>
                                      <li><a href="">
                                        <input id="Kids" name="categoryCode" type="radio" value="Kids" onclick="filterAll();"/>
                                        <label class="css-label " for="Kids">Kids</label>
                                      </a></li>
                                      <li><a href="">
                                        <input id="Trunks" name="categoryCode" type="radio" value="Trunks" onclick="filterAll();"/>
                                        <label class="css-label " for="Trunks">Trunks</label>
                                      </a></li>
                                      <li><a href="">
                                        <input id="Cover" name="categoryCode" type="radio" value="Cover" onclick="filterAll();"/>
                                        <label class="css-label " for="Cover">Cover Ups</label>
                                      </a></li>
                                      <li><a href="">
                                        <input id="Accessories" name="categoryCode" type="radio" value="Accessories" onclick="filterAll();"/>
                                        <label class="css-label " for="Accessories">Accessories</label>
                                      </a></li>
                                      <li><a href="">
                                        <input id="All" name="categoryCode" type="radio" value="All" onclick="filterAll();"/>
                                        <label class="css-label " for="All">All</label>
                                      </a></li>
                                    </ul>
                                  </li>
                                </div>
                              </div>
                              <li >
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-2">
                                    <p class="or"><b>OR</b></p>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                    <div class="store-locator-input-wrapper">
                                      <div class="store-locator-input">
                                        <div class="form-row " id="dwfrm-storelocator-location">
                                          <div class="field-wrapper">
                                            <!-- <label for="storelocator_location_usa"> -->
                                              <input class="form-control input-filter-search" type="text" id="storelocator_location_usa" name="inputStorelocatorUSA" placeholder="Enter the Location" onkeyup="validateFormStoreLocator();" onkeypress="onKeyDown(event);">
                                            <!-- </label> -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>

                              <br/>
                              <br/>
                              
                            </form>
                          </div>
                        </div>
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
