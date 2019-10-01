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

    public function Index()
    {
        // Cargar formulario
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
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
          $html .= 'type="radio" ';
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

  public function search()
  {

    if (isset($_POST['regionCode']) && !empty($_POST['regionCode']) &&
        isset($_POST['countryCode']) && !empty($_POST['countryCode']))
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);

      $storesByRegionCountry = $this->mdlStores->listStoresByRegionCountry();

      $html = "";
      $html .= "<h1 class='find-results'>Results</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead>";
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

        $html .= '<td>' . $value['URL'] . '</td>';
        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(isset($_POST['storesCode']) && !empty($_POST['storesCode']))
    {
       $this->mdlStores->__SET('store', $_POST['storesCode']);
       $storesByType = $this->mdlStores->listStoresByType();

       $html = "";
       $html .= "<h1 class='find-results'>Results</h1>";
       $html .= "<div class='table-responsive'>";
       $html .= "<table class='table table-striped' id='table-stores'>";
       $html .= "<thead>";
       $html .= "<tr>";
       $html .= "<th>NAME</th>";
       $html .= "<th>ADDRESS</th>";
       $html .= "<th>STATE/CITY</th>";
       $html .= "<th>ZIP CODE</th>";
       $html .= "<th>BUSINESS HOURS</th>";
       $html .= "<th>URL</th>";
       $html .= "</tr>";
       $html .= "</thead>";
       foreach ($storesByType as $key => $value) {
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

         $html .= '<td>' . $value['URL'] . '</td>';
         $html .= '</tr>';
       }
       $html .= '</div>';

       echo json_encode([
         'html' => $html,
       ]);
    }

    else if(isset($_POST['categoryCode']) && !empty($_POST['categoryCode']))
    {
      $this->mdlStores->__SET('category', $_POST['categoryCode']);
      $storesByCategory = $this->mdlStores->listStoresByCategory();

      $html = "";
      $html .= "<h1 class='find-results'>Results</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped' id='table-stores'>";
      $html .= "<thead>";
      $html .= "<tr>";
      $html .= "<th>NAME</th>";
      $html .= "<th>ADDRESS</th>";
      $html .= "<th>STATE/CITY</th>";
      $html .= "<th>ZIP CODE</th>";
      $html .= "<th>BUSINESS HOURS</th>";
      $html .= "<th>URL</th>";
      $html .= "</tr>";
      $html .= "</thead>";
      foreach ($storesByCategory as $key => $value) {
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

        $html .= '<td>' . $value['URL'] . '</td>';
        $html .= '</tr>';
      }
      $html .= '</div>';

      echo json_encode([
        'html' => $html,
      ]);
    }

    else if(isset($_POST['regionCode']) && !empty($_POST['regionCode']) &&
            isset($_POST['countryCode']) && !empty($_POST['countryCode']) &&
            isset($_POST['storesCode']) && !empty($_POST['storesCode']) &&
            isset($_POST['categoryCode']) && !empty($_POST['categoryCode']))
    {
      $this->mdlStores->__SET('region', $_POST['regionCode']);
      $this->mdlStores->__SET('country', $_POST['countryCode']);
      $this->mdlStores->__SET('store', $_POST['storeCode']);
      $this->mdlStores->__SET('category', $_POST['categoryCode']);

      $stores = $this->mdlStores->listStores();

      $html = "";
      $html .= "<h1 class='find-results'>Results</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped table-bordered' id='table-stores'>";
      $html .= "<thead><tr>";
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

        $html .= '<td>' . $value['URL'] . '</td>';
        $html .= '</tr>';
        $html .= '</tbody>';
        $html .= '</div>';
      }
      echo json_encode([
        'html' => $html
      ]);
    }

    else if (isset($_POST['inputStorelocatorUSA']) && !empty($_POST['inputStorelocatorUSA']))
    {
      $this->mdlStores->__SET('name', strtoupper($_POST['inputStorelocatorUSA']));
      $storeByName = $this->mdlStores->listStoresByName();

      $html = "";
      $html .= "<h1 class='find-results'>Results</h1>";
      $html .= "<div class='table-responsive'>";
      $html .= "<table class='table table-striped table-bordered' id='table-stores'>";
      $html .= "<thead><tr>";
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
        
        $html .= '<td>' . $value['URL'] . '</td>';
        $html .= '</tr>';
        $html .= '</tbody>';
        $html .= '</div>';
      }
      echo json_encode([
        'html' => $html
      ]);
    }
    else
    {
      $this->mdlStores->__SET('region', "");
      $this->mdlStores->__SET('country', "");
      $this->mdlStores->__SET('store', "");
      $this->mdlStores->__SET('category', "");
      $this->mdlStores->__SET('name', "");
    }
  }
}
