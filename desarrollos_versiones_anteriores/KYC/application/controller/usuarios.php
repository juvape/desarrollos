<?php

class Usuarios extends Controller
{
  private $mdlUsuarios;

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
     $this->mdlUsuarios = $this->loadModel("mdlUsuarios");
  }

  public function guardarUsuario()
  {
    sleep(2);

    if (isset($_POST['useremail']) && isset($_POST['password']))
    {
      $this->mdlUsuarios->__SET('email', $_POST['useremail']);
      $user = $this->mdlUsuarios->ConsultarUsuariosRegistrados();

      if ($user[0]['email'] == "0" || $user[0]['email'] == 0)
      {
        //Guardamos en la tabla users
        $this->mdlUsuarios->__SET('email', $_POST['useremail']);
        $this->mdlUsuarios->__SET('password', $this->Encrypt($_POST['password']));
        $this->mdlUsuarios->guardarUsuario();

          echo 1;
      }
      else
      {
        echo 2;
      }
    }
    else
    {
      header("location: " . URL ."home/registrarUsuarios");
    }
  }
}

?>
