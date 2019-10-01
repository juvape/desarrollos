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
        $this->mdlUsuarios->__SET('email', strtolower($_POST['useremail']));
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
  
public function RecuperarContrasenha()
{
    
  sleep(4);
  
  $email = $_POST['emailuserforgotpass'];

  $this->mdlUsuarios->__SET('email', $email);

  $emailDB = $this->mdlUsuarios->ConsultarUsuarioGetPass();

  if (count($emailDB) != 0)
  {
    if ($email === $emailDB[0]['email'])
    {

    //    $destinatario = $emailDB[0]['email'];
    //   //  $destinatario = "davidvargas.jdvp@gmail.com";
    //       //Titulo
    //   $asunto = "Get back your account";
    //
    //   $cuerpo = "";
    //   $cuerpo = '
    //   <html>
    //   <head>
    //   <title>CONFIRMATION - NO REPLY</title>
    //   </head>
    //   <body background="https://images.pexels.com/photos/670061/pexels-photo-670061.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"; background-size: cover">';
    //   $cuerpo .= '<h1 style="font-weigth: 600;">Hello ' . $destinatario . '</h1>';
    //   $cuerpo .= '<div> The user with email: ' ' of the company ' . $_SESSION['FORM1'][0]['company_name'] . ' and country ' . $_SESSION['FORM2'][0]['country'] . ' have more than five shipping address, please contact him.';
    // $cuerpo .='</div>';
    // $cuerpo .='</body></html>';
    // //cabecera
    // $headers = "MIME-Version: 1.0\r\n";
    // $headers .= "Content-type: text/html; charset=utf-8\r\n";
    // //dirección del remitente
    // $headers .= "From: form KYC Maaji<noreply@maaji.co>\r\n";
    // //Enviamos el mensaje a tu_dirección_email
    // mail($destinatario,$asunto,$cuerpo,$headers);

        echo 1;
    }
  }
  else
  {
    echo 2;
  }


  }
}

?>
