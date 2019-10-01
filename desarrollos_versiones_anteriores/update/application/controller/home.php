<?php


class Home extends Controller
{

  private $mdlDepartments;
  private $mdlCountryCity;


    public function __construct()
    {
       $this->mdlDepartments = $this->loadModel("mdlDepartamentos");
       $this->mdlCity = $this->loadModel("mdlCiudad");
       $this->mdlCountry = $this->loadModel("mdlPais");
    }

    public function problem()
    {
      return "Página no encontrada";
    }

    public function Index()
    {
      $departamentos = $this->mdlDepartments->listarDepartamentos();
      $ciudad = $this->mdlCity->listarCiudades();
      $pais = $this->mdlCountry->listarPaises();

        // Cargar formulario
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function confirmacionCorreo()
    {

      require APP . 'view/_templates/header.php';
      require APP . 'view/home/confirmacionCorreo.php';
      require APP . 'view/_templates/footer.php';
    }

}
