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
      require APP . 'view/home/tablaInfoCustomers.php';
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
          $_SESSION['USUARIO_ID'] = $value['idUser'];
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


  public function reporteExcel()
  {
    // header("Content-Type: application/vnd.ms-excel");
    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
    header("Content-Disposition: attachment;filename=Client_report.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    // //Consultar información Tabla Customers
    // $excel = $this->mdlClientes->listarInfoClientes();
    //
    // //Consultar información tabla addresses y tabla shippingaddress
    // $excel2 = $this->mdlClientes->listarInfoAddress();
    //
    // //Consultar información Tabla buyers y buyerscontacts
    // $excel3 = $this->mdlClientes->listarInfoBuyers();
    //
    // //Consultar información Tabla business y businesslocations
    // $excel4 = $this->mdlClientes->listarInfoBusiness();
    //
    // //Unimos todos los arrays para poder mostrar todos los campos en el reporte
    // $union = array_merge($excel, $excel2, $excel3, $excel4);

    $queryAll = $this->mdlClientes->listarTodo();

    //Pintamos mediante php la tabla con los encabezados para el reporte
    $codigoHTML ='
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <meta http-equiv="content-type" content="text/html">
          <title>Report EXCEL</title>
        </head>
        <body>
          <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <th colspan="133" bgcolor="skyblue"><center>CUSTOMER REPORT KYC</center></th>
              </tr>
              <tr>
              <tr>
              <th bgcolor="#41C0B9">Id User</th>
              <th bgcolor="#41C0B9">User Email</th>
              <th bgcolor="#41C0B9">Company Name</th>
              <th bgcolor="#41C0B9">Brand Name</th>
              <th bgcolor="#41C0B9">Email</th>
              <th bgcolor="#41C0B9">Phone</th>
              <th bgcolor="#41C0B9">website</th>
              <th bgcolor="#41C0B9">facebook</th>
              <th bgcolor="#41C0B9">Instagram</th>
              <th bgcolor="#41C0B9">Twitter</th>
              <th bgcolor="#41C0B9">Pinterest</th>
              <th bgcolor="#41C0B9">Tax ID</th>
              <th bgcolor="#41C0B9">Type of Company</th>
              <th bgcolor="#41C0B9">Legal Representative/Owner</th>
              <th bgcolor="#41C0B9">Legal Representive Id Number</th>
              <th bgcolor="#41C0B9">Owner Phone</th>
              <th bgcolor="#41C0B9">Billing Country</th>
              <th bgcolor="#41C0B9">Billing State</th>
              <th bgcolor="#41C0B9">Billing City</th>
              <th bgcolor="#41C0B9">Billing Address</th>
              <th bgcolor="#41C0B9">Billing Zip Code</th>
              <th bgcolor="#41C0B9">Quantity Locations</th>
              <th bgcolor="#41C0B9">Shipping Country One</th>
              <th bgcolor="#41C0B9">Shipping State One</th>
              <th bgcolor="#41C0B9">Shipping City One</th>
              <th bgcolor="#41C0B9">Shipping Address One</th>
              <th bgcolor="#41C0B9">Shipping Storename One</th>
              <th bgcolor="#41C0B9">Shipping Zipcode One</th>
              <th bgcolor="#41C0B9">Shipping Country Two</th>
              <th bgcolor="#41C0B9">Shipping State Two</th>
              <th bgcolor="#41C0B9">Shipping City Two</th>
              <th bgcolor="#41C0B9">Shipping Address Two</th>
              <th bgcolor="#41C0B9">Shipping Storename Two</th>
              <th bgcolor="#41C0B9">Shipping Zipcode Two</th>
              <th bgcolor="#41C0B9">Shipping Country Three</th>
              <th bgcolor="#41C0B9">Shipping State Three</th>
              <th bgcolor="#41C0B9">Shipping City Three</th>
              <th bgcolor="#41C0B9">Shipping Address Three</th>
              <th bgcolor="#41C0B9">Shipping Storename Three</th>
              <th bgcolor="#41C0B9">Shipping Zipcode Three</th>
              <th bgcolor="#41C0B9">Shipping Country Four</th>
              <th bgcolor="#41C0B9">Shipping State Four</th>
              <th bgcolor="#41C0B9">Shipping City Four</th>
              <th bgcolor="#41C0B9">Shipping Address Four</th>
              <th bgcolor="#41C0B9">Shipping Storename Four</th>
              <th bgcolor="#41C0B9">Shipping Zipcode Four</th>
              <th bgcolor="#41C0B9">Shipping Country Five</th>
              <th bgcolor="#41C0B9">Shipping State Five</th>
              <th bgcolor="#41C0B9">Shipping City Five</th>
              <th bgcolor="#41C0B9">Shipping Address Five</th>
              <th bgcolor="#41C0B9">Shipping Storename Five</th>
              <th bgcolor="#41C0B9">Shipping Zipcode Five</th>
              <th bgcolor="#41C0B9">Currency</th>
              <th bgcolor="#41C0B9">Bank Name</th>
              <th bgcolor="#41C0B9">Branch</th>
              <th bgcolor="#41C0B9">Account Number</th>
              <th bgcolor="#41C0B9">Payment Type</th>
              <th bgcolor="#41C0B9">Which One</th>
              <th bgcolor="#41C0B9">Credit Terms</th>
              <th bgcolor="#41C0B9">Logistic Contact Name</th>
              <th bgcolor="#41C0B9">Logistic Contact Phone</th>
              <th bgcolor="#41C0B9">Logistic Contact Email</th>
              <th bgcolor="#41C0B9">Accounts Payable Name</th>
              <th bgcolor="#41C0B9">Accounts Payable Phone</th>
              <th bgcolor="#41C0B9">Accounts Payable Email</th>
              <th bgcolor="#41C0B9">Name Reference One</th>
              <th bgcolor="#41C0B9">Phone Reference One</th>
              <th bgcolor="#41C0B9">Email Reference One</th>
              <th bgcolor="#41C0B9">Name Reference Two</th>
              <th bgcolor="#41C0B9">Phone Reference Two</th>
              <th bgcolor="#41C0B9">Email Reference Two</th>
              <th bgcolor="#41C0B9">Name Reference Three</th>
              <th bgcolor="#41C0B9">Phone Reference Three</th>
              <th bgcolor="#41C0B9">Email Reference Three</th>
              <th bgcolor="#41C0B9">Quantity Buyers</th>
              <th bgcolor="#41C0B9">Fullname Buyers One</th>
              <th bgcolor="#41C0B9">Phone Buyers One</th>
              <th bgcolor="#41C0B9">Email Buyers One</th>
              <th bgcolor="#41C0B9">Fullname Buyers Two</th>
              <th bgcolor="#41C0B9">Phone Buyers Two</th>
              <th bgcolor="#41C0B9">Email Buyers Two</th>
              <th bgcolor="#41C0B9">Fullname Buyers Three</th>
              <th bgcolor="#41C0B9">Phone Buyers Three</th>
              <th bgcolor="#41C0B9">Email Buyers Three</th>
              <th bgcolor="#41C0B9">Fullname Buyers Four</th>
              <th bgcolor="#41C0B9">Phone Buyers Four</th>
              <th bgcolor="#41C0B9">Email Buyers Four</th>
              <th bgcolor="#41C0B9">Fullname Buyers Five</th>
              <th bgcolor="#41C0B9">Phone Buyers Five</th>
              <th bgcolor="#41C0B9">Email Buyers Five</th>
              <th bgcolor="#41C0B9">Type Of Business</th>
              <th bgcolor="#41C0B9">Lines Interested in Selling</th>
              <th bgcolor="#41C0B9">Currency Anual Sales Figures</th>
              <th bgcolor="#41C0B9">Figures</th>
              <th bgcolor="#41C0B9">Market Potential Brand</th>
              <th bgcolor="#41C0B9">Website</th>
              <th bgcolor="#41C0B9">Certificate of Existence</th>
              <th bgcolor="#41C0B9">Tax certificate</th>
              <th bgcolor="#41C0B9">Chek Specimen</th>
              <th bgcolor="#41C0B9">Legal ID</th>
              <th bgcolor="#41C0B9">Resaler Certificate</th>
              <th bgcolor="#41C0B9">Business Locations</th>
              <th bgcolor="#41C0B9">Business Locations Country One</th>
              <th bgcolor="#41C0B9">Business Locations State One</th>
              <th bgcolor="#41C0B9">Business Locations City One</th>
              <th bgcolor="#41C0B9">Business Locations Address One</th>
              <th bgcolor="#41C0B9">Business Locations Storename One</th>
              <th bgcolor="#41C0B9">Business Locations Zipcode One</th>
              <th bgcolor="#41C0B9">Business Locations Country Two</th>
              <th bgcolor="#41C0B9">Business Locations State Two</th>
              <th bgcolor="#41C0B9">Business Locations City Two</th>
              <th bgcolor="#41C0B9">Business Locations Address Two</th>
              <th bgcolor="#41C0B9">Business Locations Storename Two</th>
              <th bgcolor="#41C0B9">Business Locations Zipcode Two</th>
              <th bgcolor="#41C0B9">Business Locations Country Three</th>
              <th bgcolor="#41C0B9">Business Locations State Three</th>
              <th bgcolor="#41C0B9">Business Locations City Three</th>
              <th bgcolor="#41C0B9">Business Locations Address Three</th>
              <th bgcolor="#41C0B9">Business Locations Storename Three</th>
              <th bgcolor="#41C0B9">Business Locations Zipcode Three</th>
              <th bgcolor="#41C0B9">Business Locations Country Four</th>
              <th bgcolor="#41C0B9">Business Locations State Four</th>
              <th bgcolor="#41C0B9">Business Locations City Four</th>
              <th bgcolor="#41C0B9">Business Locations Address Four</th>
              <th bgcolor="#41C0B9">Business Locations Storename Four</th>
              <th bgcolor="#41C0B9">Business Locations Zipcode Four</th>
              <th bgcolor="#41C0B9">Business Locations Country Five</th>
              <th bgcolor="#41C0B9">Business Locations State Five</th>
              <th bgcolor="#41C0B9">Business Locations City Five</th>
              <th bgcolor="#41C0B9">Business Locations Address Five</th>
              <th bgcolor="#41C0B9">Business Locations Storename Five</th>
              <th bgcolor="#41C0B9">Business Locations Zipcode Five</th>
              <th bgcolor="#41C0B9">Creation Date</th>
            </tr>';

            //Acá se esta mostrando en el reporte la información consultada
            //en la tabla customers
            foreach ($queryAll as $value)
            {

              $codigoHTML .= '<tr>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['idUser'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailUser'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['companyName'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['brandName'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['email'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phone'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['website'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['facebook'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['instagram'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['twitter'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['pinterest'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['taxId'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['typeCompany'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['owner'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['idNumber'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phone'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['billingCountry'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['billingState'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['billingCity'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['billingAddress'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['billingZipCode'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['quantityLocations'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['ZipCode1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['ZipCode2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['ZipCode3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['ZipCode4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Contry5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['ZipCode5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['currency'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['bankName'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['branch'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['accountNumber'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['paymentType'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['whichOne'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['creditTerms'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['logisticContactName'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['logisticContactPhone'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['logisticContactEmail'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['accountsPayableName'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['accountsPayablePhone'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['accountsPayableEmail'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['reference1Name'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneReference1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailReference1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['reference2Name'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneReference2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailReference2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['reference3Name'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneReference3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailReference3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['quantityBuyers'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fullNameBuyers1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneBuyers1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailBuyers1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fullNameBuyers2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneBuyers2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailBuyers2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fullNameBuyers3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneBuyers3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailBuyers3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fullNameBuyers4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneBuyers4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailBuyers4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fullNameBuyers5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneBuyers5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailBuyers5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['typeBusiness'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['linesBusiness'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['currencyAnualSalesFigures'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['figures'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['marketPotentialBrand'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['webSite'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['certificateOfExistence'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['taxCertificate'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['checkSpecimen'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['legalID'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['resalerCertificate'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['businessLocation'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['zipCode1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['state2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['city2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['zipCode2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['zipCode3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['zipCode4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['zipCode5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['createdAt'];
                $codigoHTML .= '</td>';
            }

            $codigoHTML .= '</tr>';
            $codigoHTML .= '</table></body></html>';

      echo $codigoHTML;
  }

  public function reporteExcel2()
  {
    // header("Content-Type: application/vnd.ms-excel");
    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
    header("Content-Disposition: attachment;filename=Client_report_that_finished_all.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    $queryOnlyFinishedAll = $this->mdlClientes->listarSoloFinalizado();

    //Pintamos mediante php la tabla con los encabezados para el reporte
    $codigoHTML ='
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <meta http-equiv="content-type" content="text/html">
          <title>Report EXCEL</title>
        </head>
        <body>
          <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <th colspan="132" bgcolor="skyblue"><center>CUSTOMER REPORT KYC</center></th>
              </tr>
              <tr>
              <tr>
              <th bgcolor="#41C0B9">Id User</th>
              <th bgcolor="#41C0B9">User Email</th>
              <th bgcolor="#41C0B9">Company Name</th>
              <th bgcolor="#41C0B9">Brand Name</th>
              <th bgcolor="#41C0B9">Email</th>
              <th bgcolor="#41C0B9">Phone</th>
              <th bgcolor="#41C0B9">website</th>
              <th bgcolor="#41C0B9">facebook</th>
              <th bgcolor="#41C0B9">Instagram</th>
              <th bgcolor="#41C0B9">Twitter</th>
              <th bgcolor="#41C0B9">Pinterest</th>
              <th bgcolor="#41C0B9">Tax ID</th>
              <th bgcolor="#41C0B9">Type of Company</th>
              <th bgcolor="#41C0B9">Legal Representative/Owner</th>
              <th bgcolor="#41C0B9">Legal Representive Id Number</th>
              <th bgcolor="#41C0B9">Owner Phone</th>
              <th bgcolor="#41C0B9">Billing Country</th>
              <th bgcolor="#41C0B9">Billing State</th>
              <th bgcolor="#41C0B9">Billing City</th>
              <th bgcolor="#41C0B9">Billing Address</th>
              <th bgcolor="#41C0B9">Billing Zip Code</th>
              <th bgcolor="#41C0B9">Quantity Locations</th>
              <th bgcolor="#41C0B9">Shipping Country One</th>
              <th bgcolor="#41C0B9">Shipping State One</th>
              <th bgcolor="#41C0B9">Shipping City One</th>
              <th bgcolor="#41C0B9">Shipping Address One</th>
              <th bgcolor="#41C0B9">Shipping Storename One</th>
              <th bgcolor="#41C0B9">Shipping Zipcode One</th>
              <th bgcolor="#41C0B9">Shipping Country Two</th>
              <th bgcolor="#41C0B9">Shipping State Two</th>
              <th bgcolor="#41C0B9">Shipping City Two</th>
              <th bgcolor="#41C0B9">Shipping Address Two</th>
              <th bgcolor="#41C0B9">Shipping Storename Two</th>
              <th bgcolor="#41C0B9">Shipping Zipcode Two</th>
              <th bgcolor="#41C0B9">Shipping Country Three</th>
              <th bgcolor="#41C0B9">Shipping State Three</th>
              <th bgcolor="#41C0B9">Shipping City Three</th>
              <th bgcolor="#41C0B9">Shipping Address Three</th>
              <th bgcolor="#41C0B9">Shipping Storename Three</th>
              <th bgcolor="#41C0B9">Shipping Zipcode Three</th>
              <th bgcolor="#41C0B9">Shipping Country Four</th>
              <th bgcolor="#41C0B9">Shipping State Four</th>
              <th bgcolor="#41C0B9">Shipping City Four</th>
              <th bgcolor="#41C0B9">Shipping Address Four</th>
              <th bgcolor="#41C0B9">Shipping Storename Four</th>
              <th bgcolor="#41C0B9">Shipping Zipcode Four</th>
              <th bgcolor="#41C0B9">Shipping Country Five</th>
              <th bgcolor="#41C0B9">Shipping State Five</th>
              <th bgcolor="#41C0B9">Shipping City Five</th>
              <th bgcolor="#41C0B9">Shipping Address Five</th>
              <th bgcolor="#41C0B9">Shipping Storename Five</th>
              <th bgcolor="#41C0B9">Shipping Zipcode Five</th>
              <th bgcolor="#41C0B9">Currency</th>
              <th bgcolor="#41C0B9">Bank Name</th>
              <th bgcolor="#41C0B9">Branch</th>
              <th bgcolor="#41C0B9">Account Number</th>
              <th bgcolor="#41C0B9">Payment Type</th>
              <th bgcolor="#41C0B9">Which One</th>
              <th bgcolor="#41C0B9">Credit Terms</th>
              <th bgcolor="#41C0B9">Logistic Contact Name</th>
              <th bgcolor="#41C0B9">Logistic Contact Phone</th>
              <th bgcolor="#41C0B9">Logistic Contact Email</th>
              <th bgcolor="#41C0B9">Accounts Payable Name</th>
              <th bgcolor="#41C0B9">Accounts Payable Phone</th>
              <th bgcolor="#41C0B9">Accounts Payable Email</th>
              <th bgcolor="#41C0B9">Name Reference One</th>
              <th bgcolor="#41C0B9">Phone Reference One</th>
              <th bgcolor="#41C0B9">Email Reference One</th>
              <th bgcolor="#41C0B9">Name Reference Two</th>
              <th bgcolor="#41C0B9">Phone Reference Two</th>
              <th bgcolor="#41C0B9">Email Reference Two</th>
              <th bgcolor="#41C0B9">Name Reference Three</th>
              <th bgcolor="#41C0B9">Phone Reference Three</th>
              <th bgcolor="#41C0B9">Email Reference Three</th>
              <th bgcolor="#41C0B9">Quantity Buyers</th>
              <th bgcolor="#41C0B9">Fullname Buyers One</th>
              <th bgcolor="#41C0B9">Phone Buyers One</th>
              <th bgcolor="#41C0B9">Email Buyers One</th>
              <th bgcolor="#41C0B9">Fullname Buyers Two</th>
              <th bgcolor="#41C0B9">Phone Buyers Two</th>
              <th bgcolor="#41C0B9">Email Buyers Two</th>
              <th bgcolor="#41C0B9">Fullname Buyers Three</th>
              <th bgcolor="#41C0B9">Phone Buyers Three</th>
              <th bgcolor="#41C0B9">Email Buyers Three</th>
              <th bgcolor="#41C0B9">Fullname Buyers Four</th>
              <th bgcolor="#41C0B9">Phone Buyers Four</th>
              <th bgcolor="#41C0B9">Email Buyers Four</th>
              <th bgcolor="#41C0B9">Fullname Buyers Five</th>
              <th bgcolor="#41C0B9">Phone Buyers Five</th>
              <th bgcolor="#41C0B9">Email Buyers Five</th>
              <th bgcolor="#41C0B9">Type Of Business</th>
              <th bgcolor="#41C0B9">Lines Interested in Selling</th>
              <th bgcolor="#41C0B9">Currency Anual Sales Figures</th>
              <th bgcolor="#41C0B9">Figures</th>
              <th bgcolor="#41C0B9">Market Potential Brand</th>
              <th bgcolor="#41C0B9">Website</th>
              <th bgcolor="#41C0B9">Certificate of Existence</th>
              <th bgcolor="#41C0B9">Tax certificate</th>
              <th bgcolor="#41C0B9">Chek Specimen</th>
              <th bgcolor="#41C0B9">Legal ID</th>
              <th bgcolor="#41C0B9">Resaler Certificate</th>
              <th bgcolor="#41C0B9">Business Locations</th>
              <th bgcolor="#41C0B9">Business Locations Country One</th>
              <th bgcolor="#41C0B9">Business Locations State One</th>
              <th bgcolor="#41C0B9">Business Locations City One</th>
              <th bgcolor="#41C0B9">Business Locations Address One</th>
              <th bgcolor="#41C0B9">Business Locations Storename One</th>
              <th bgcolor="#41C0B9">Business Locations Zipcode One</th>
              <th bgcolor="#41C0B9">Business Locations Country Two</th>
              <th bgcolor="#41C0B9">Business Locations State Two</th>
              <th bgcolor="#41C0B9">Business Locations City Two</th>
              <th bgcolor="#41C0B9">Business Locations Address Two</th>
              <th bgcolor="#41C0B9">Business Locations Storename Two</th>
              <th bgcolor="#41C0B9">Business Locations Zipcode Two</th>
              <th bgcolor="#41C0B9">Business Locations Country Three</th>
              <th bgcolor="#41C0B9">Business Locations State Three</th>
              <th bgcolor="#41C0B9">Business Locations City Three</th>
              <th bgcolor="#41C0B9">Business Locations Address Three</th>
              <th bgcolor="#41C0B9">Business Locations Storename Three</th>
              <th bgcolor="#41C0B9">Business Locations Zipcode Three</th>
              <th bgcolor="#41C0B9">Business Locations Country Four</th>
              <th bgcolor="#41C0B9">Business Locations State Four</th>
              <th bgcolor="#41C0B9">Business Locations City Four</th>
              <th bgcolor="#41C0B9">Business Locations Address Four</th>
              <th bgcolor="#41C0B9">Business Locations Storename Four</th>
              <th bgcolor="#41C0B9">Business Locations Zipcode Four</th>
              <th bgcolor="#41C0B9">Business Locations Country Five</th>
              <th bgcolor="#41C0B9">Business Locations State Five</th>
              <th bgcolor="#41C0B9">Business Locations City Five</th>
              <th bgcolor="#41C0B9">Business Locations Address Five</th>
              <th bgcolor="#41C0B9">Business Locations Storename Five</th>
              <th bgcolor="#41C0B9">Business Locations Zipcode Five</th>
              <th bgcolor="#41C0B9">Creation Date</th>
            </tr>';

            //Acá se esta mostrando en el reporte la información consultada
            //en la tabla customers
            foreach ($queryOnlyFinishedAll as $value)
            {
              $codigoHTML .= '<tr>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['idUser'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailUser'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['companyName'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['brandName'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['email'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phone'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['website'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['facebook'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['instagram'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['twitter'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['pinterest'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['taxId'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['typeCompany'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['owner'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['idNumber'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phone'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['billingCountry'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['billingState'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['billingCity'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['billingAddress'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['billingZipCode'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['quantityLocations'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['ZipCode1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['ZipCode2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['ZipCode3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['ZipCode4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Contry5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['ZipCode5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['currency'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['bankName'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['branch'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['accountNumber'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['paymentType'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['whichOne'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['creditTerms'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['logisticContactName'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['logisticContactPhone'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['logisticContactEmail'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['accountsPayableName'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['accountsPayablePhone'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['accountsPayableEmail'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['reference1Name'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneReference1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailReference1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['reference2Name'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneReference2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailReference2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['reference3Name'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneReference3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailReference3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['quantityBuyers'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fullNameBuyers1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneBuyers1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailBuyers1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fullNameBuyers2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneBuyers2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailBuyers2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fullNameBuyers3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneBuyers3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailBuyers3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fullNameBuyers4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneBuyers4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailBuyers4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['fullNameBuyers5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['phoneBuyers5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['emailBuyers5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['typeBusiness'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['linesBusiness'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['currencyAnualSalesFigures'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['figures'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['marketPotentialBrand'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['webSite'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['certificateOfExistence'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['taxCertificate'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['checkSpecimen'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['legalID'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['resalerCertificate'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['businessLocation'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['zipCode1'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['state2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['city2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['zipCode2'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['zipCode3'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['zipCode4'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Country5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['State5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['City5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['Address5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['storeName5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['zipCode5'];
                $codigoHTML .= '</td>';
                $codigoHTML .='<td>';
                $codigoHTML .= $value['createdAt'];
                $codigoHTML .= '</td>';
            }

            $codigoHTML .= '</tr>';
            $codigoHTML .= '</table></body></html>';

      echo $codigoHTML;

  }

}
