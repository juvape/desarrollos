<?php


class Home extends Controller
{
  private $mdlCountries;
  private $mdlStores;

    public function __construct()
    {
      $this->mdlCountries = $this->LoadModel('mdlCountries');
      $this->mdlStores = $this->LoadModel('mdlStores');
    }

    public function problem()
    {
      return "Página no encontrada";
    }

    public function Index()
    {
        // Cargar formulario
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function getAllStores()
    {
      $viewStores = $this->mdlStores->getAllStores();
      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . count($viewStores) . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($viewStores as $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);

    }

    public function searchCountry()
    {

      $this->mdlCountries->__SET('region', $_POST['regionCode']);

      $countries = $this->mdlCountries->listCountries();

      if ($countries)
      {
        $html = "";
        foreach ($countries as $key => $value) {
          $html .= '<input id="';
          $html .= ucwords($value['nameEnglish']) . '" ';
          $html .= 'name="countryCode" ';
          $html .= 'type="radio" onclick="validateFormStoreLocator();"';
          $html .= 'value="' . $value['nameEnglish'] . '"> ';
          $html .= '<label class="css-label" ';
          $html .= 'for="' . $value['nameEnglish'] . '">';
          $html .= $value['nameEnglish'];
          $html .= '</label>';
          $html .= '<br/>';
        }
        echo json_encode([
          'html' => $html
        ]);
      }
    }

    public function searchByRegionCountry()
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);

      $storesByRegionCountry = $this->mdlStores->listStoresByRegionCountry();
      $count = $this->mdlStores->countStores();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($storesByRegionCountry as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);

    }

    public function searchByOnline()
    {
      if(isset($_POST['regionCode']) && isset($_POST['countryCode']) &&
               $_POST['storesCode'] == "Online")
      {
        $this->mdlStores->__SET('region', $_POST['regionCode']);
        $this->mdlStores->__SET('country', $_POST['countryCode']);
        $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);

        $storesByRegionCountryType2 = $this->mdlStores->listStoresByRegionCountryType2();
        $count = $this->mdlStores->countStoresByType2();

        $html = "";
        $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
        $html .= "<div class='table-responsive'>";
        $html .= "<table class='table table-striped' id='table-stores'>";
        $html .= "<thead class='table-header'>";
        $html .= "<tr>";
        $html .= "<th>NAME</th>";
        $html .= "<th>ADDRESS</th>";
        $html .= "<th>STATE/CITY</th>";
        $html .= "<th>ZIP CODE</th>";
        $html .= "<th>BUSINESS HOURS</th>";
        $html .= "<th>URL</th>";
        $html .= "</tr>";
        $html .= "</thead>";
        foreach ($storesByRegionCountryType2 as $key => $value) {
          $html .= '<tr>';
          $html .= '<td>' . ucwords($value['name']) . '</td>';
          $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
          $html .= '<td>' . $value['city'] . '</td>';
          $html .= '<td>' . $value['zipCode'] . '</td>';

          if ($value['businessHours'] == "No aplica" ||
              $value['businessHours'] == "No Aplica" ||
              $value['businessHours'] == "NO APLICA" ||
              $value['businessHours'] == "no aplica")
          {
              $html .= '<td></td>';
          }
          else
          {
            $html .= '<td>' . $value['businessHours'] . '</td>';
          }

          if ($value['URL'] != NULL || $value['URL'] != "")
          {
            $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
          }
          else
          {
            $html .= '<td></td>';
          }

          $html .= '</tr>';
        }
        $html .= '</div>';

        echo json_encode([
          'html' => $html,
        ]);
      }

      else if(isset($_POST['regionCode']) && !isset($_POST['countryCode']) &&
               $_POST['storesCode'] == "Online")
      {
        $this->mdlStores->__SET('region', $_POST['regionCode']);
        $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);

        $stores = $this->mdlStores->listStoresByRegionOnline();
        $count = $this->mdlStores->countStoresByRegionOnline();

        $html = "";
        $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
        $html .= "<div class='table-responsive'>";
        $html .= "<table class='table table-striped' id='table-stores'>";
        $html .= "<thead class='table-header'>";
        $html .= "<tr>";
        $html .= "<th>NAME</th>";
        $html .= "<th>ADDRESS</th>";
        $html .= "<th>STATE/CITY</th>";
        $html .= "<th>ZIP CODE</th>";
        $html .= "<th>BUSINESS HOURS</th>";
        $html .= "<th>URL</th>";
        $html .= "</tr>";
        $html .= "</thead>";
        foreach ($stores as $key => $value) {
          $html .= '<tr>';
          $html .= '<td>' . ucwords($value['name']) . '</td>';
          $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
          $html .= '<td>' . $value['city'] . '</td>';
          $html .= '<td>' . $value['zipCode'] . '</td>';

          if ($value['businessHours'] == "No aplica" ||
              $value['businessHours'] == "No Aplica" ||
              $value['businessHours'] == "NO APLICA" ||
              $value['businessHours'] == "no aplica")
          {
              $html .= '<td></td>';
          }
          else
          {
            $html .= '<td>' . $value['businessHours'] . '</td>';
          }

          if ($value['URL'] != NULL || $value['URL'] != "")
          {
            $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
          }
          else
          {
            $html .= '<td></td>';
          }

          $html .= '</tr>';
        }
        $html .= '</div>';

        echo json_encode([
          'html' => $html,
        ]);
      }

      else
      {
        $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
        $storesByTypeOnline = $this->mdlStores->listStoresByTypeOline();
        $count = $this->mdlStores->countByTypeOnline();

        $html = "";
        $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
        $html .= "<div class='table-responsive'>";
        $html .= "<table class='table table-striped' id='table-stores'>";
        $html .= "<thead class='table-header'>";
        $html .= "<tr>";
        $html .= "<th>NAME</th>";
        $html .= "<th>ADDRESS</th>";
        $html .= "<th>STATE/CITY</th>";
        $html .= "<th>ZIP CODE</th>";
        $html .= "<th>BUSINESS HOURS</th>";
        $html .= "<th>URL</th>";
        $html .= "</tr>";
        $html .= "</thead>";
        foreach ($storesByTypeOnline as $key => $value) {
          $html .= '<tr>';
          $html .= '<td>' . ucwords($value['name']) . '</td>';
          $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
          $html .= '<td>' . $value['city'] . '</td>';
          $html .= '<td>' . $value['zipCode'] . '</td>';

          if ($value['businessHours'] == "No aplica" ||
              $value['businessHours'] == "No Aplica" ||
              $value['businessHours'] == "NO APLICA" ||
              $value['businessHours'] == "no aplica")
          {
              $html .= '<td></td>';
          }
          else
          {
            $html .= '<td>' . $value['businessHours'] . '</td>';
          }

          if ($value['URL'] != NULL || $value['URL'] != "")
          {
            $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
          }
          else
          {
            $html .= '<td></td>';
          }

          $html .= '</tr>';
        }
        $html .= '</div>';

        echo json_encode([
          'html' => $html,
        ]);
      }
    }

    public function searchByRegionCountryType()
    {

      if(isset($_POST['regionCode']) && isset($_POST['countryCode']) &&
                $_POST['storesCode'] == "Store")
      {

        $this->mdlStores->__SET('region', $_POST['regionCode']);
        $this->mdlStores->__SET('country', $_POST['countryCode']);
        $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
        $storesByRegionCountryType = $this->mdlStores->listStoresByRegionCountryType();
        $count = $this->mdlStores->countStoresByType();

        $html = "";
        $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
        $html .= "<div class='table-responsive'>";
        $html .= "<table class='table table-striped' id='table-stores'>";
        $html .= "<thead class='table-header'>";
        $html .= "<tr>";
        $html .= "<th>NAME</th>";
        $html .= "<th>ADDRESS</th>";
        $html .= "<th>STATE/CITY</th>";
        $html .= "<th>ZIP CODE</th>";
        $html .= "<th>BUSINESS HOURS</th>";
        $html .= "<th>URL</th>";
        $html .= "</tr>";
        $html .= "</thead>";
        foreach ($storesByRegionCountryType as $key => $value) {
          $html .= '<tr>';
          $html .= '<td>' . ucwords($value['name']) . '</td>';
          $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
          $html .= '<td>' . $value['city'] . '</td>';
          $html .= '<td>' . $value['zipCode'] . '</td>';

          if ($value['businessHours'] == "No aplica" ||
              $value['businessHours'] == "No Aplica" ||
              $value['businessHours'] == "NO APLICA" ||
              $value['businessHours'] == "no aplica")
          {
              $html .= '<td></td>';
          }
          else
          {
            $html .= '<td>' . $value['businessHours'] . '</td>';
          }

          if ($value['URL'] != NULL || $value['URL'] != "")
          {
            $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
          }
          else
          {
            $html .= '<td></td>';
          }

          $html .= '</tr>';
        }
        $html .= '</div>';

        echo json_encode([
          'html' => $html,
        ]);
      }

      else
      {
        $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
        $storesByTypeStore = $this->mdlStores->listStoresByTypeStore();
        $count = $this->mdlStores->countByTypeStore();

        $html = "";
        $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
        $html .= "<div class='table-responsive'>";
        $html .= "<table class='table table-striped' id='table-stores'>";
        $html .= "<thead class='table-header'>";
        $html .= "<tr>";
        $html .= "<th>NAME</th>";
        $html .= "<th>ADDRESS</th>";
        $html .= "<th>STATE/CITY</th>";
        $html .= "<th>ZIP CODE</th>";
        $html .= "<th>BUSINESS HOURS</th>";
        $html .= "<th>URL</th>";
        $html .= "</tr>";
        $html .= "</thead>";
        foreach ($storesByTypeStore as $key => $value) {
          $html .= '<tr>';
          $html .= '<td>' . ucwords($value['name']) . '</td>';
          $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
          $html .= '<td>' . $value['city'] . '</td>';
          $html .= '<td>' . $value['zipCode'] . '</td>';

          if ($value['businessHours'] == "No aplica" ||
              $value['businessHours'] == "No Aplica" ||
              $value['businessHours'] == "NO APLICA" ||
              $value['businessHours'] == "no aplica")
          {
              $html .= '<td></td>';
          }
          else
          {
            $html .= '<td>' . $value['businessHours'] . '</td>';
          }

          if ($value['URL'] != NULL || $value['URL'] != "")
          {
            $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
          }
          else
          {
            $html .= '<td></td>';
          }

          $html .= '</tr>';
        }
        $html .= '</div>';

        echo json_encode([
          'html' => $html,
        ]);
      }

    }

  public function filterBycategory()
  {

    if(isset($_POST['regionCode']) &&
       isset($_POST['countryCode']) &&
       $_POST['storesCode'] == "Store" &&
       $_POST['categoryCode'] == "Swim")
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $storesAllFilters = $this->mdlStores->listByStoreSwim();
      $count = $this->mdlStores->countByStoreSwim();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($storesAllFilters as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            !isset($_POST['storesCode']) &&
            $_POST['categoryCode'] == "Swim")
    {

      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $storesBySwim = $this->mdlStores->listByCategorySwim();
      $count = $this->mdlStores->countByCategorySwim();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($storesBySwim as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if (isset($_POST['regionCode']) &&
             isset($_POST['countryCode']) &&
             $_POST['storesCode'] == "Online" &&
             $_POST['categoryCode'] == "Swim")
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByStoreOnlineSwim();
      $count = $this->mdlStores->countByStoreOnlineSwim();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    elseif (isset($_POST['regionCode']) &&
           isset($_POST['countryCode']) &&
           $_POST['storesCode'] == "Store" &&
           $_POST['categoryCode'] == "Active")
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByStoreActive();
      $count = $this->mdlStores->countByStoreActive();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    elseif (!isset($_POST['regionCode']) &&
           !isset($_POST['countryCode']) &&
           !isset($_POST['storesCode']) &&
           $_POST['categoryCode'] == "Active")
    {
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByCategoryActive();
      $count = $this->mdlStores->countByCategoryActive();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    elseif (isset($_POST['regionCode']) &&
           isset($_POST['countryCode']) &&
           $_POST['storesCode'] == "Online" &&
           $_POST['categoryCode'] == "Active")
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByOnlineActive();
      $count = $this->mdlStores->countByOnlineActive();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(isset($_POST['regionCode']) &&
           isset($_POST['countryCode']) &&
           $_POST['storesCode'] == "Store" &&
           $_POST['categoryCode'] == "Kids")
    {

      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByStoreKids();
      $count = $this->mdlStores->countByStoreKids();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
           !isset($_POST['countryCode']) &&
           !isset($_POST['storesCode']) &&
           $_POST['categoryCode'] == "Kids")
    {
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByKids();
      $count = $this->mdlStores->countByKids();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(isset($_POST['regionCode']) &&
           isset($_POST['countryCode']) &&
           $_POST['storesCode'] == "Online" &&
           $_POST['categoryCode'] == "Kids")
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByOnlineKids();
      $count = $this->mdlStores->countByOnlineKids();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(isset($_POST['regionCode']) &&
            isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Store" &&
            $_POST['categoryCode'] == "Trunks")
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByStoreTrunks();
      $count = $this->mdlStores->countByStoreTrunks();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            !isset($_POST['storesCode']) &&
            $_POST['categoryCode'] == "Trunks")
    {
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTrunks();
      $count = $this->mdlStores->countByTrunks();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(isset($_POST['regionCode']) &&
            isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Online" &&
            $_POST['categoryCode'] == "Trunks")
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByOnlineTrunks();
      $count = $this->mdlStores->countByOnlineTrunks();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(isset($_POST['regionCode']) &&
            isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Store" &&
            $_POST['categoryCode'] == "Cover")
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByStoreCovers();
      $count = $this->mdlStores->countByStoreCovers();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            !isset($_POST['storesCode']) &&
            $_POST['categoryCode'] == "Cover")
    {
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByCovers();
      $count = $this->mdlStores->countByCovers();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(isset($_POST['regionCode']) &&
            isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Online" &&
            $_POST['categoryCode'] == "Cover")
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByOnlineCovers();
      $count = $this->mdlStores->countByOnlineCovers();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(isset($_POST['regionCode']) &&
            isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Store" &&
            $_POST['categoryCode'] == "Accessories")
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByStoreAccessories();
      $count = $this->mdlStores->countByStoreAccessories();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            !isset($_POST['storesCode']) &&
            $_POST['categoryCode'] == "Accessories")
    {
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByAccessories();
      $count = $this->mdlStores->countByAccessories();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(isset($_POST['regionCode']) &&
            isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Online" &&
            $_POST['categoryCode'] == "Accessories")
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByOnlineAccessories();
      $count = $this->mdlStores->countByOnlineAccessories();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Store" &&
            $_POST['categoryCode'] == "Swim")
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeStoreSwim();
      $count = $this->mdlStores->countByTypeStoreSwim();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Store" &&
            $_POST['categoryCode'] == "Active")
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeStoreActive();
      $count = $this->mdlStores->countByTypeStoreActive();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Store" &&
            $_POST['categoryCode'] == "Kids")
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeStoreKids();
      $count = $this->mdlStores->countByTypeStoreKids();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Store" &&
            $_POST['categoryCode'] == "Trunks")
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeStoreTrunks();
      $count = $this->mdlStores->countByTypeStoreTrunks();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Store" &&
            $_POST['categoryCode'] == "Cover")
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeStoreCover();
      $count = $this->mdlStores->countByTypeStoreCover();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Store" &&
            $_POST['categoryCode'] == "Accessories")
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeStoreAccessories();
      $count = $this->mdlStores->countByTypeStoreAccessories();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Online" &&
            $_POST['categoryCode'] == "Swim")
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeOnlineSwim();
      $count = $this->mdlStores->countByTypeOnlineSwim();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Online" &&
            $_POST['categoryCode'] == "Active")
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeOnlineActive();
      $count = $this->mdlStores->countByTypeOnlineActive();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Online" &&
            $_POST['categoryCode'] == "Kids")
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeOnlineKids();
      $count = $this->mdlStores->countByTypeOnlineKids();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Online" &&
            $_POST['categoryCode'] == "Trunks")
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeOnlineTrunks();
      $count = $this->mdlStores->countByTypeOnlineTrunks();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            $_POST['storesCode'] == "Online" &&
            $_POST['categoryCode'] == "Cover")
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeOnlineCover();
      $count = $this->mdlStores->countByTypeOnlineCover();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(!isset($_POST['regionCode']) &&
            !isset($_POST['countryCode']) &&
            !isset($_POST['storesCode']) &&
            $_POST['categoryCode'] == "All")
    {
      $stores = $this->mdlStores->listByAllCategories();
      $count = $this->mdlStores->countByAllCategories();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(isset($_POST['regionCode']) &&
            isset($_POST['countryCode']) &&
            isset($_POST['storesCode'])&&
            $_POST['categoryCode'] == "All")
    {
      $stores = $this->mdlStores->listByAllCategories();
      $count = $this->mdlStores->countByAllCategories();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else
    {
      $this->mdlStores->__SET('typeOfStore', $_POST['storesCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $stores = $this->mdlStores->listByTypeOnlineAccessories();
      $count = $this->mdlStores->countByTypeOnlineAccessories();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead class='table-header'>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords($value['name']) . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }
}

public function searchAllType()
{
  if (!isset($_POST['regionCode']) &&
      !isset($_POST['countryCode']) &&
      $_POST['storesCode'] == "All" &&
      !isset($_POST['categoryCode']) ||
      $_POST['categoryCode'] != "")
  {
    $store = $this->mdlStores->listByAllType();
    $count = $this->mdlStores->countByAllType();

    $html = "";
    $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
    $html .= "<div class='table-responsive'>";
    $html .= "<table class='table table-striped table-bordered' id='table-stores'>";
    $html .= "<thead class='table-header'><tr>";
    $html .= "<th>NAME</th>";
    $html .= "<th>ADDRESS</th>";
    $html .= "<th>STATE/CITY</th>";
    $html .= "<th>ZIP CODE</th>";
    $html .= "<th>BUSINESS HOURS</th>";
    $html .= "<th>URL</th>";
    $html .= "</tr>";
    $html .= "</thead>";
    $html .= "<tbody>";
    foreach ($store as $key => $value) {
      $html .= '<tr>';
      $html .= '<td>' . $value['name'] . '</td>';
      $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
      $html .= '<td>' . $value['city'] . '</td>';
      $html .= '<td>' . $value['zipCode'] . '</td>';

      if ($value['businessHours'] == "No aplica" ||
          $value['businessHours'] == "No Aplica" ||
          $value['businessHours'] == "NO APLICA" ||
          $value['businessHours'] == "no aplica")
      {
          $html .= '<td></td>';
      }
      else
      {
        $html .= '<td>' . $value['businessHours'] . '</td>';
      }

      if ($value['URL'] != NULL || $value['URL'] != "")
      {
        $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
      }
      else
      {
        $html .= '<td></td>';
      }

      $html .= '</tr>';
      $html .= '</tbody>';
      $html .= '</div>';
    }
    echo json_encode([
      'html' => $html
    ]);
  }
}

  public function search()
  {

    if (isset($_POST['inputStorelocatorUSA']) &&
        !empty($_POST['inputStorelocatorUSA']))
    {
      $this->mdlStores->__SET('name', $_POST['inputStorelocatorUSA']);
      $storeByName = $this->mdlStores->listStoresByName();
      $countByName = $this->mdlStores->countStoresByName();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $countByName[0]['countByName'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped table-bordered' id='table-stores'>";
      $html .= "<thead class='table-header'><tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      $html .= "<tbody>";
      foreach ($storeByName as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . $value['name'] . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
        $html .= '</tbody>';
        $html .= '</div>';
      }
      echo json_encode([
        'html' => $html
      ]);
    }
  }

  public function searchByRegion()
  {
    if (isset($_POST['regionCode']) &&
        !empty($_POST['regionCode']))
    {

      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $stores = $this->mdlStores->listStoresByRegion();
      $count = $this->mdlStores->countStoresByRegion();

      $html = "";
      $html .= "<h1 class='find-results'>Results (Showing " . $count[0]['countStores'] . " records)</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped table-bordered' id='table-stores'>";
      $html .= "<thead class='table-header'><tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      $html .= "<tbody>";
      foreach ($stores as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . $value['name'] . '</td>';
        $html .= '<td><a href="' .$value['googleMaps'].'" target="_blank" class="no-decoration">' . $value['address'] . '</a></td>';
        $html .= '<td>' . $value['city'] . '</td>';
        $html .= '<td>' . $value['zipCode'] . '</td>';

        if ($value['businessHours'] == "No aplica" ||
            $value['businessHours'] == "No Aplica" ||
            $value['businessHours'] == "NO APLICA" ||
            $value['businessHours'] == "no aplica")
        {
            $html .= '<td></td>';
        }
        else
        {
          $html .= '<td>' . $value['businessHours'] . '</td>';
        }

        if ($value['URL'] != NULL || $value['URL'] != "")
        {
          $html .= '<td><a href="' . $value['URL'] . '" target="_blank" class="no-decoration">' . $value['URL'] . '</a></td>';
        }
        else
        {
          $html .= '<td></td>';
        }

        $html .= '</tr>';
        $html .= '</tbody>';
        $html .= '</div>';
      }
      echo json_encode([
        'html' => $html
      ]);
    }
  }
}
