<?php


class Home extends Controller
{

  private $mdlCountry;
  private $mdlUsuarios;
  private $mdlClientes;
  private $mdlDirecciones;
  private $mdlBuyers;
  private $mdlBusiness;
  private $mdlBusinessLocations;

  private function Encrypt($string)
  {
    $sizeof = strlen($string) - 1;
    $result = '';
    for ($x = $sizeof; $x >= 0; $x--)
    {
      $result .= $string[$x];
    }
    $result = sha1($result);
    return $result;
  }

  public function __construct()
  {
    $this->mdlCountry = $this->loadModel("mdlPais");
    $this->mdlUsuarios = $this->loadModel("mdlUsuarios");
    $this->mdlClientes = $this->loadModel("mdlClientes");
    $this->mdlDirecciones = $this->loadModel("mdlDirecciones");
  	$this->mdlBuyers = $this->loadModel("mdlBuyers");
  	$this->mdlBusiness = $this->loadModel("mdlBusiness");
  	$this->mdlBusinessLocations = $this->loadModel("mdlBusinessLocations");
  }

  public function problem()
  {
    return "Página no encontrada";
  }

  public function index()
  {

    if(isset($_SESSION['SESION_INICIADA']) &&  $_SESSION['SESION_INICIADA'] == true)
    {

      $this->mdlClientes->__SET('userName', $_SESSION['USUARIO_ID']);
      $user = $this->mdlClientes->consultarIdUsuario();

      if ($user != NULL && ($user[0]['userName'] == $_SESSION['USUARIO_ID']))
      {
        $this->mdlClientes->__SET('userName', $_SESSION['USUARIO_ID']);
        $query = $this->mdlClientes->consultarInfoCliente();
      }

      $pais = $this->mdlCountry->listarPaises();

      // Cargar formulario
      require APP . 'view/_templates/header.php';
      require APP . 'view/home/index.php';
      require APP . 'view/_templates/footer.php';
    }
    else
    {
      header('location:'. URL . 'home/inicioSesion');
      exit;
    }
  }

  public function index2()
  {

    if(isset($_SESSION['SESION_INICIADA']) &&  $_SESSION['SESION_INICIADA'] == true)
    {

      $this->mdlDirecciones->__SET('username',$_SESSION['USUARIO_ID']);
      $userAddress = $this->mdlDirecciones->consultarIdUsuario();

      if ($userAddress != NULL && ($userAddress[0]['username'] ==
          $_SESSION['USUARIO_ID']))
      {
        $this->mdlDirecciones->__SET('username', $_SESSION['USUARIO_ID']);
        $query2 = $this->mdlDirecciones->consultarInfoAddresses();

        $this->mdlDirecciones->__SET('idAddresses', $query2[0]['idAddresses']);
        $shippingAddress = $this->mdlDirecciones->consultarInfoShippingAddres();
      }

      $pais = $this->mdlCountry->listarPaises();

      // Cargar formulario
      require APP . 'view/_templates/header.php';
      require APP . 'view/home/index2.php';
      require APP . 'view/_templates/footer.php';
    }
    else
    {
      header('location:'. URL . 'home/inicioSesion');
      exit;
    }
  }

  public function index3()
  {

    if(isset($_SESSION['SESION_INICIADA']) &&  $_SESSION['SESION_INICIADA'] == true)
    {

	    $this->mdlBuyers->__SET('usernameBuyers', $_SESSION['USUARIO_ID']);
      $userBuyers = $this->mdlBuyers->consultarIdUsuario();

	   if ($userBuyers != NULL && ($userBuyers[0]['username'] == $_SESSION['USUARIO_ID']))
      {
        $this->mdlBuyers->__SET('usernameBuyers', $_SESSION['USUARIO_ID']);
        $query3 = $this->mdlBuyers->consultarInfoBuyers();
      }

      // Cargar formulario
      require APP . 'view/_templates/header.php';
      require APP . 'view/home/index3.php';
      require APP . 'view/_templates/footer.php';
    }
    else
    {
      header('location:'. URL . 'home/inicioSesion');
      exit;
    }
  }

   public function index4()
  {

    if(isset($_SESSION['SESION_INICIADA']) &&  $_SESSION['SESION_INICIADA'] == true)
    {

      $this->mdlBusiness->__SET('usernameBusiness', $_SESSION['USUARIO_ID']);
      $userBusiness = $this->mdlBusiness->consultarIdUsuario();

      if ($userBusiness != NULL && ($userBusiness[0]['usernameBusiness'] == $_SESSION['USUARIO_ID']))
      {
         $this->mdlBusiness->__SET('usernameBusiness', $_SESSION['USUARIO_ID']);
         $query4 = $this->mdlBusiness->consultarInfoBusiness();
         $arrayLines = explode(",", $query4[0]['linesBusiness']);

         $this->mdlBusinessLocations->__SET('idBusiness', (int)$query4[0]['idBusiness']);
         $businessLocations = $this->mdlBusinessLocations->consultarInfoBusinessLocations();
      }

        $pais = $this->mdlCountry->listarPaises();

      // Cargar formulario
      require APP . 'view/_templates/header.php';
      require APP . 'view/home/index4.php';
      require APP . 'view/_templates/footer.php';
    }
    else
    {
      header('location:'. URL . 'home/inicioSesion');
      exit;
    }
  }

  public function inicioSesion()
  {
    // load views
    require APP . 'view/_templates/header.php';
    require APP . 'view/home/inicioSesion.php';
    require APP . 'view/_templates/footer.php';
  }

  public function CerrarSesion()
  {
    unset($_SESSION['SESION_INICIADA'],$_SESSION['USUARIO_ID'],
    $_SESSION['USUARIO'], $_SESSION['EMAIL']);

    session_destroy();

    header('location:' . URL . 'home/inicioSesion');
    exit;
  }

  public function confirmacionCorreo()
  {

    require APP . 'view/_templates/header.php';
    require APP . 'view/home/confirmacionCorreo.php';
    require APP . 'view/_templates/footer.php';
  }

  public function Validar()
  {

    sleep(2);

    if (isset($_POST['emailuser']) && isset($_POST['pass']))
    {
      if ($_POST['emailuser'] != null &&
      $_POST['pass'] != null) {

        $this->mdlUsuarios->__SET('email', $_POST['emailuser']);
        $this->mdlUsuarios->__SET('password', $this->Encrypt($_POST['pass']));

        $user = $this->mdlUsuarios->ConsultarUsuarios();

        if (count($user) != 0)
        {
          foreach ($user as $value) {

            if ($value['email'] == $_POST['emailuser'] &&
            $value['password'] == $this->Encrypt($_POST['pass'])) {

              $_SESSION['SESION_INICIADA'] = true;
              $_SESSION['USUARIO_ID'] = $value['idUser'];
              $_SESSION['EMAIL'] = $value['email'];

              echo 1;
            }
          }
        }

      }else{
        header('location:'. URL . 'home/inicioSesion');
        exit;
      }

    }
    else{
      header('location:'. URL . 'home/inicioSesion');
      exit;
    }
  }

  public function registroUsuarios()
  {
    require APP . 'view/_templates/header.php';
    require APP . 'view/home/registroUsuarios.php';
    require APP . 'view/_templates/footer.php';
  }
}
