<?php
    use Dompdf\Dompdf;

class Home extends Controller
{
  private $mdlUdsuarios;
  private $mdlClientes;

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
    $this->mdlUdsuarios = $this->loadModel("mdlUsuarios");
    $this->mdlClientes = $this->loadModel("mdlClientes");
  }

  public function inicioSesion()
  {
    // var_dump($this->Encrypt("tiendaUnicentroBogota"));
    // exit;
    // load views
    require APP . 'view/_templates/header.php';
    require APP . 'view/home/Login.php';
    require APP . 'view/_templates/footer.php';
  }

  public function getPanelClientes()
  {
    if (isset($_SESSION['SESION_INICIADA']) &&
        $_SESSION['SESION_INICIADA'] == TRUE)
    {
      $clientes = $this->mdlClientes->listarInfoClientes();

      require APP . 'view/_templates/header.php';
      require APP . 'view/home/tablaInfoTiendas.php';
      require APP . 'view/_templates/footer.php';
    }
    else
    {
      header('location: ' . URL . 'home/inicioSesion');
    }

  }

  public function consultarUsuario()
  {
    sleep(3);

    $this->mdlUdsuarios->__SET("email", $_POST['email']);
    $this->mdlUdsuarios->__SET('password', $this->Encrypt($_POST['pass']));
    $user = $this->mdlUdsuarios->consultarUsuario();

    if (count($user) != 0)
    {
      foreach ($user as $value) {

        if ($value['email'] == $_POST['email'] &&
            $value['password'] == $this->Encrypt($_POST['pass']))
        {

          $_SESSION['SESION_INICIADA'] = true;
          $_SESSION['USUARIO_ID'] = $value['idUsuario'];
          $_SESSION['EMAIL'] = $value['email'];

          echo 1;
        }
      }
    }

    else
    {
      echo 2;
    }

  }

  public function CerrarSesion()
  {
    unset($_SESSION['SESION_INICIADA'],$_SESSION['USUARIO_ID'],
    $_SESSION['USUARIO'], $_SESSION['EMAIL']);

    session_destroy();

    header('location:' . URL . 'home/inicioSesion');
    exit;
  }

  public function reportePdf()
  {
    ob_start();

    $pdf = $this->mdlClientes->listarInfoClientes();

    $codigoHTML ='
   <!DOCTYPE html>
   <html>
     <head>
       <meta charset="utf-8">
       <title>Reporte Clientes</title>
     </head>
     <body>
       <table width="100%" border="1" cellspacing="0" cellpadding="0">
         <tr>
           <td colspan="8" bgcolor="skyblue"><center><strong>REPORTE DE LOS CLIENTES REGISTRADOS HASTA LA FECHA</strong></center></td>
         </tr>
           <tr bgcolor="#41C0B9">
           <th>Nombre Cliente</th>
           <th>Fecha Diligenciamiento</th>
           <th>Lugar Diligenciamiento</th>
           <th>Tipo Documento</th>
           <th>Documento</th>
           <th>Correo Electrónico</th>
           <th>Confirmación Habeas Data</th>
           <th>Fecha Confirmación</th>
         </tr>';
         foreach ($pdf as $value){
           $codigoHTML .= '<tr>';
             $codigoHTML .='<td>';
             $codigoHTML .= $value['nombre1'] . ' ';
             $codigoHTML .= $value['nombre2'] . ' ';
             $codigoHTML .= $value['apellido1']. ' ';
             $codigoHTML .= $value['apellido2']. ' ';
             $codigoHTML .= '</td>';
             $codigoHTML .='<td>';
             $codigoHTML .= $value['fecha_diligenciamiento'];
             $codigoHTML .= '</td>';
             $codigoHTML .='<td>';
             $codigoHTML .= ucwords($value['lugar_diligenciamiento']);
             $codigoHTML .= '</td>';
             $codigoHTML .='<td>';
             $codigoHTML .= $value['tipo_documento'];
             $codigoHTML .= '</td>';
             $codigoHTML .='<td>';
             $codigoHTML .= $value['documento'];
             $codigoHTML .= '</td>';
             $codigoHTML .='<td>';
             $codigoHTML .= $value['correo_electronico'];
             $codigoHTML .= '</td>';
             $codigoHTML .='<td>';
             $codigoHTML .= $value['confirmado'];
             $codigoHTML .= '</td>';
             $codigoHTML .='<td>';
             $codigoHTML .= $value['fecha_confirmacion'];
             $codigoHTML .= '</td>';
           $codigoHTML .= '</tr>';
         }
        $codigoHTML .= '
       </table>
     </body>
   </html>';

   $codigoHTML = utf8_encode($codigoHTML);
   $codigoHTML = utf8_decode($codigoHTML);
   $dompdf = new Dompdf();
   $dompdf->set_paper('a4', 'landscape');
   $dompdf->loadHtml($codigoHTML);
   ini_set("memory_limit", "3600M");
   $dompdf->render();
   $dompdf->stream("Reporte_Clientes.pdf");
  }

  public function reporteExcel()
  {
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment;filename=Reporte_clientes.xls");

    $excel = $this->mdlClientes->listarInfoClientes();

    $codigoHTML ='
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <meta http-equiv="content-type" content="text/html">
          <title>Reporte en EXCEL</title>
        </head>
        <body>
          <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <th colspan="8" bgcolor="skyblue"><center>REPORTE CLIENTES</center></th>
            </tr>
            <tr>
              <th>Nombre Cliente</th>
              <th>Fecha Diligenciamiento</th>
              <th>Lugar Diligenciamiento</th>
              <th>Tipo Documento</th>
              <th>Documento</th>
              <th>Correo Electrónico</th>
              <th>Confirmación Habeas Data</th>
              <th>Fecha Confirmación</th>
            </tr>';
            foreach ($excel as $value){
              $codigoHTML .= '<tr>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['nombre1'] . ' ';
                $codigoHTML .= $value['nombre2'] . ' ';
                $codigoHTML .= $value['apellido1']. ' ';
                $codigoHTML .= $value['apellido2']. ' ';
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fecha_diligenciamiento'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= ucwords($value['lugar_diligenciamiento']);
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['tipo_documento'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['documento'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['correo_electronico'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['confirmado'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fecha_confirmacion'];
                $codigoHTML .= '</td>';
              $codigoHTML .= '</tr>';
            }
      $codigoHTML .= '</table></body></html>';

      echo $codigoHTML;

  }

}
