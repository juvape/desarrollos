<?php

class Clientes extends Controller
{

  private $mdlClientes;

  public function __construct()
  {
    $this->mdlClientes = $this->LoadModel('mdlClientes');
  }

  public function GuardarRegistro()
  {

        sleep(6);
    
        $_SESSION['documento'] = $_POST['documento'];

        $this->mdlClientes->__SET("documento", $_POST['documento']);
        $this->mdlClientes->__SET('tipo_diligencia', strtoupper($_POST['tipo_diligencia']));
        $this->mdlClientes->__SET('fecha_diligenciamiento', $_POST['fecha_diligenciamiento']);
        $this->mdlClientes->__SET('lugar_diligenciamiento', $_POST['lugar_diligenciamiento']);

          if ($_POST['lugar_diligenciamiento'] == "tesoro")
          {
            $cod = 46;
          }elseif ($_POST['lugar_diligenciamiento'] == "santafe")
          {
            $cod = 1022;
          }elseif ($_POST['lugar_diligenciamiento'] == "bocagrande")
          {
            $cod = 1020;
          }elseif ($_POST['lugar_diligenciamiento'] == "barranquilla")
          {
            $cod = 380;
          }elseif ($_POST['lugar_diligenciamiento'] == "retiro")
          {
            $cod = 47;
          }elseif ($_POST['lugar_diligenciamiento'] == "cali")
          {
            $cod = 1019;
          }elseif ($_POST['lugar_diligenciamiento'] == "bucaramanga")
          {
            $cod = 1023;
          }elseif ($_POST['lugar_diligenciamiento'] == "cartagena")
          {
            $cod = 48;
          }elseif ($_POST['lugar_diligenciamiento'] == "unicentro")
          {
            $cod = 1039;
          }else
          {
            $cod = 001;
          }

        $this->mdlClientes->__SET('codigo_lugar', $cod);
        $this->mdlClientes->__SET('nombre1', ucwords($_POST['nombre1']));
        $this->mdlClientes->__SET('nombre2', ucwords($_POST['nombre2']));
        $this->mdlClientes->__SET('apellido1', ucwords($_POST['apellido1']));
        $this->mdlClientes->__SET('apellido2', ucwords($_POST['apellido2']));
        $this->mdlClientes->__SET('sexo', strtoupper($_POST['sexo']));
        $this->mdlClientes->__SET('fecha_nacimiento', $_POST['nacimiento']);
        $this->mdlClientes->__SET('tipo_documento', strtoupper($_POST['tipo_documento']));
        $this->mdlClientes->__SET('documento', $_POST['documento']);
        $this->mdlClientes->__SET('direccion', ucwords($_POST['direccion']));
        $this->mdlClientes->__SET('ciudad', ucwords($_POST['ciudad']));
        $this->mdlClientes->__SET('departamento', ucwords($_POST['departamento']));
        $this->mdlClientes->__SET('pais', ucwords($_POST['pais']));
        $this->mdlClientes->__SET('celular', $_POST['celular']);
        
        if($_POST['lugar_diligenciamiento'] == "evento")
        {
            $correoEvento = "maajiness.info@gmail.com";
            $this->mdlClientes->__SET('correo_electronico', $correoEvento);
        }
        
        $this->mdlClientes->__SET('correo_electronico', $_POST['email']);
        $this->mdlClientes->__SET('confirmado', "NO");
        $this->mdlClientes->__SET('fecha_confirmacion', "");

        $data = $this->mdlClientes->GuardarInformacionClientes();

        if ($data)
        {
          echo 1;
        }
        else
        {
          echo 2;
        }

        if ($data)
        {
            $destinatario = $_POST['email'];
          //Titulo
            $asunto = "MAAJI-CONFIRMACION NO REPLY";
            $cuerpo = "";
            $cuerpo = '
            <html>
            <head>
            <title>CONFIRMACIÓN TRATAMIENTO DATOS - NO REPLY</title>
            </head>
            <body background="';
            $cuerpo .= URL;
            $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
            $cuerpo .= '<h1>Hola ' . ucwords($_POST['nombre1']) . '</h1>';
            $confirmacion = '<div class="row">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <form class="form-horizontal" name="formAceptarLegalidad" action="' . URL . '/clientes/ConfirmarActualizacion" method="POST" id="form-legalidad">
                   <input class="form-control" type="hidden" name="doc" value="' .  $_POST['documento'] . ' ">';
            $confirmacion .=    '<input class="form-control" type="hidden" name="validacion" value="true">
                </form>';
              $confirmacion .='<a href="';
              $confirmacion .= URL;
              $confirmacion .='home/confirmacionCorreo?confirmacion=true&documento=';
              $confirmacion .= $_SESSION['documento'];
              $confirmacion .= '"><img src="'.URL.'img/mails/Mail1.jpg" alt="Imagen no encontrada"></a>';
              $confirmacion .= '</div></div>';
              $cuerpo .= $confirmacion;
              $cuerpo .='</div>';
              $cuerpo .='</body></html>';
              //cabecera
              $headers = "MIME-Version: 1.0\r\n";
              $headers .= "Content-type: text/html; charset=utf-8\r\n";
              //dirección del remitente
              $headers .= "From: Tiendas Maaji <noreply@maaji.co>\r\n";
              //Enviamos el mensaje a tu_dirección_email
              $bool = mail($destinatario,$asunto,$cuerpo,$headers);

              if($bool){
                echo "Mensaje enviado";
              }
              else{
                echo "Mensaje no enviado";
              }

    }
}

  public function ConfirmarActualizacion()
  {
    $documento = $_POST['doc'];

    if (isset($_POST['validacion']) && isset($documento))
    {

      sleep(2);

      $fecha=strftime("%Y-%m-%d", time());

      $this->mdlClientes->__SET('documento', $_POST['doc']);
      $this->mdlClientes->__SET('confirmado', "SI");
      $this->mdlClientes->__SET('fecha_confirmacion', $fecha);

      $updated = $this->mdlClientes->ActualizarConfirmacion();

      if ($updated)
      {
        echo 1;
      }
      else
      {
        echo 2;
      }

      if ($updated)
      {
          $this->mdlClientes->__SET('documento', $_POST['doc']);
          $consulta = $this->mdlClientes->ConsultarInfoClientes();

          if ($consulta['confirmado'] == "SI")
          {
              $destinatario = $consulta['correo_electronico'];
              $asunto = "FELICITACIONES";

              $cuerpo = "";
              $cuerpo = '
              <html>
              <head>
              <title>Felicitaciones</title>
              </head>
              <body background="';
              $cuerpo .= URL;
              $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';

              // $correo = $email;
             // require APP . 'libs/swiftmailer/lib/swift_required.php';

             // Create the Transport
             // $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
             // ->setUsername(EMAIL_ADMIN)
             // ->setPassword(EMAIL_ADMIN_PASS);
             //
             // // Create the Mailer using your created Transport
             // $mailer = Swift_Mailer::newInstance($transport);
               $confirmacion = "";
               $confirmacion = '<img src="'.URL.'img/mails/Mail2.jpg" alt="Imagen no encontrada"></a>';
               $confirmacion .= '</div></div>';

               $cuerpo .= $confirmacion;
               $cuerpo .='</div>';
               $cuerpo .='</body>';

             // // Create a message
             // $message = Swift_Message::newInstance('FELICITACIONES')
             //   ->setFrom(array(EMAIL_ADMIN => EMAIL_ALIAS))
             //   ->setTo(array($correo => 'A name'))
             //   ->setBody($cuerpo, 'text/html');
             //
             //   $result = $mailer->send($message);
             //   $mailer->getTransport()->stop();
             $headers = "MIME-Version: 1.0\r\n";
             $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
             //dirección del remitente
             $headers .= "From: Tiendas Maaji <noreply@maaji.co>\r\n";
             //Enviamos el mensaje a tu_dirección_email
             $bool = mail($destinatario,$asunto,$cuerpo,$headers);

             // if($bool){
             //   echo "Mensaje enviado";
             // }
             // else{
             //   echo "Mensaje no enviado";
             // }

              if ($consulta['confirmado'] == "SI")
              {
                $lugar = $consulta['lugar_diligenciamiento'];
            
                $asunto = "TRATAMIENTO DE DATOS MAAJI ACEPTADA";

                if ($lugar == "tesoro")
                {
                  $emailTienda = "eltesoro@maaji.co";
                }
                elseif ($lugar == "bocagrande")
                {
                  $emailTienda = "bocagrande@maaji.co";
                }
                elseif ($lugar == "santafe")
                {
                  $emailTienda = "santafe@maaji.co";
                }
                elseif ($lugar == "barranquilla")
                {
                  $emailTienda = "barranquilla@maaji.co";
                }
                elseif ($lugar == "retiro")
                {
                  $emailTienda = "elretiro@maaji.co";
                }
                elseif ($lugar == "cali")
                {
                  $emailTienda = "cali@maaji.co";
                }
                elseif ($lugar == "bucaramanga")
                {
                  $emailTienda = "bucaramanga@maaji.co";
                }
                elseif ($lugar == "cartagena")
                {
                  $emailTienda = "cartagena@maaji.co";
                }
                elseif ($lugar == "evento")
                {
                    $emailTienda = "maajiness.info@gmail.com";
                }
                else
                {
                  $emailTienda = "unicentrobogota@maaji.co";
                }

                $cuerpo = "";
                $cuerpo = '
                  <html>
                  <head>
                  <title>Tratamiento datos aceptada</title>
                  </head>
                  <body background="';
                  $cuerpo .= URL;
                  $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
                $cuerpo .= '<h1>Hola ' . $emailTienda . '</h1>';
                $cuerpo .= '<p>La persona ' .$consulta['nombre1'] . " " .$consulta['apellido1'];
                $cuerpo .= ' con ' .$consulta['tipo_documento'].  " " .$consulta['documento']. ' y correo electrónico ' . $consulta['correo_electronico'];
                $cuerpo .= ' ya confirmo nuestras políticas de tratamiento de datos y ya puede disfrutar de nuestros beneficios.';
                $cuerpo .= '</body></html>';

                $correo = $emailTienda;
               // require APP . 'libs/swiftmailer/lib/swift_required.php';
               //
               // // Create the Transport
               // $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
               // ->setUsername(EMAIL_ADMIN)
               // ->setPassword(EMAIL_ADMIN_PASS);
               //
               // // Create the Mailer using your created Transport
               // $mailer = Swift_Mailer::newInstance($transport);
               // $cuerpo .='</div>';
               // $cuerpo .='</body>';
               //
               // // Create a message
               // $message = Swift_Message::newInstance('TRATAMIENTO DE DATOS MAAJI ACEPTADA')
               //   ->setFrom(array(EMAIL_ADMIN => EMAIL_ALIAS))
               //   ->setTo(array($correo => 'A name'))
               //   ->setBody($cuerpo, 'text/html');
               //
               //   $result = $mailer->send($message);
               //   $mailer->getTransport()->stop();

               $headers = "MIME-Version: 1.0\r\n";
               $headers .= "Content-type: text/html; charset=utf-8\r\n";
               //dirección del remitente
               $headers .= "From: Tiendas Maaji <noreply@maaji.co>\r\n";
               //Enviamos el mensaje a tu_dirección_email
               $bool = mail($correo,$asunto,$cuerpo,$headers);

              }
          }

      }
    }
    else
    {
      header("Location: " . URL . "home/Index");
    }
  }

  public function validarDocumento()
  {

    $this->mdlClientes->__SET("documento", $_POST['documento']);
    $ValidarDocCliente = $this->mdlClientes->validarDocCliente();

    if ($ValidarDocCliente['documento'] === $_POST['documento'])
    {
      echo 1;
    }
    else {
      echo 2;
    }

  }

  public function validarExistenciaCorreo()
  {

    $this->mdlClientes->__SET("correo_electronico", $_POST['correo']);
    $ValidarEmailCliente = $this->mdlClientes->validarEmailCliente();

    if ($ValidarEmailCliente['correo_electronico'] === $_POST['correo'])
    {
      echo 1;
    }
    else {
      echo 2;
    }

  }

}
?>
