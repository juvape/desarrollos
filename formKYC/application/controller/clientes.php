<?php

class Clientes extends Controller
{
  private $mdlClientes;
  private $mdlDirecciones;
  private $mdlDireccionesC;
  private $mdlBuyers;
  private $mdlBuyersContacts;
  private $mdlBusiness;
  private $mdlBusinessL;

  public function __construct()
  {
    $this->mdlClientes = $this->LoadModel('mdlClientes');
    $this->mdlDirecciones = $this->LoadModel('mdlDirecciones');
    $this->mdlDireccionesC = $this->LoadModel('mdlDireccionesCompra');
    $this->mdlBuyers = $this->LoadModel('mdlBuyers');
    $this->mdlBuyersContacts = $this->LoadModel('mdlBuyersContacts');
    $this->mdlBusiness = $this->LoadModel('mdlBusiness');
    $this->mdlBusinessL = $this->LoadModel('mdlBusinessLocations');
  }

  public function form1()
  {
    sleep(5);

    $dataForm1 = array($_POST);
    $_SESSION['FORM1'] = $dataForm1;
   
    foreach ($dataForm1 as $value)
    {
      $this->mdlClientes->__SET('companyName', ucwords($value['company_name']));

      $_SESSION['COMPANYNAME'] = $value['company_name'];

      $this->mdlClientes->__SET('brandName', ucwords($value['brand']));
      $this->mdlClientes->__SET('email', $value['email']);
      $this->mdlClientes->__SET('phone', $value['phone']);

      if($value['website'] == "")
      {
        $this->mdlClientes->__SET('website', $value['website']);
      }
      else
      {
        $this->mdlClientes->__SET('website', "http://" . $value['website']);
      }

      $this->mdlClientes->__SET('facebook', $value['face']);
      $this->mdlClientes->__SET('instagram', $value['instagram']);
      $this->mdlClientes->__SET('twitter', $value['twitter']);
      $this->mdlClientes->__SET('pinterest', $value['pinterest']);
      $this->mdlClientes->__SET('userName', (int)$_SESSION['USUARIO_ID']);

      $this->mdlClientes->guardarInfoForm1();

      echo 1;
    }

  }

  public function form2()
  {
    sleep(3);

    $dataForm2 = array($_POST);
    $_SESSION['FORM2'] = $dataForm2;


    foreach ($dataForm2 as $value2)
    {
      $this->mdlDirecciones->__SET('taxID', $value2['taxid']);
      $this->mdlDirecciones->__SET('typeCompany', ucwords($value2['typecompany']));
      $this->mdlDirecciones->__SET('owner', ucwords($value2['owner']));

      $_SESSION['NAMECUSTOMER'] = $value2['owner'];

      $this->mdlDirecciones->__SET('idNumber', $value2['idnumber']);
      $this->mdlDirecciones->__SET('phone', $value2['phone2']);
      $this->mdlDirecciones->__SET('billingAddres', ucwords($value2['address']));
      $this->mdlDirecciones->__SET('billingCity', ucwords($value2['city']));
      $this->mdlDirecciones->__SET('billingState', ucwords($value2['state']));
      $this->mdlDirecciones->__SET('billingCountry', ucwords($value2['country']));
      $this->mdlDirecciones->__SET('billingZipCode', $value2['zipcode']);
      $this->mdlDirecciones->__SET('quantityLocations', $value2['quantitylocationsshipping']);
      
     if($value2['quantitylocationsshipping'] == "mas-5")
      {
        // $destinatario = "jmontoya@maaji.co, jvargasp@maaji.co, svanegas@maaji.co, dvillada@maaji.co";
         $destinatario = "jvargasp@maaji.co, davidvargas.jdvp@gmail.com";
            //Titulo
        $asunto = "MAAJI KYC SHIPPING ADDRESS";
        
        $cuerpo = "";
        $cuerpo = '
        <html>
        <head>
        <title>CONFIRMATION - NO REPLY</title>
        </head>
       <body background="';
        $cuerpo .= URL;
        $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
        $cuerpo .= '<h4 style="font-weigth: 600; font-size: 20px;">Hello ' . $destinatario . '</h4>';
        $cuerpo .= '<div style="font-size: 20px;"> The user with email: ' . $_SESSION['EMAIL'] . ' of the company ' . $_SESSION['FORM1'][0]['company_name'] . ' and country ' . $_SESSION['FORM2'][0]['country'] . ' have more than five shipping address, please contact him.'; 
      $cuerpo .='</div>';
      $cuerpo .='</body></html>';
      //cabecera
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      //dirección del remitente
      $headers .= "From: form KYC Maaji<noreply@maaji.co>\r\n";
      //Enviamos el mensaje a tu_dirección_email
      mail($destinatario,$asunto,$cuerpo,$headers);
    }
      
      $this->mdlDirecciones->__SET('username', (int)$_SESSION['USUARIO_ID']);

      $this->mdlDirecciones->guardarInfoForm2();

      echo 1;

      sleep(3);
    }

  }

  public function actualizarForm2ShippingA()
  {
    sleep(6);

    $dataForm2 = array($_POST);

    foreach ($dataForm2 as $value2)
    {
      $ultimoId = $this->mdlDirecciones->consultarUltimoId();

      foreach ($ultimoId as $id)
      {
        $this->mdlDireccionesC->__SET('idAddresses', $id['id']);
      }

      $this->mdlDireccionesC->__SET('Country1', $value2['country1']);
      $this->mdlDireccionesC->__SET('State1', $value2['state1']);
      $this->mdlDireccionesC->__SET('City1', $value2['city1']);
      $this->mdlDireccionesC->__SET('Address1', $value2['dirbusiness1']);
      $this->mdlDireccionesC->__SET('storeName1', $value2['storename1']);
      $this->mdlDireccionesC->__SET('ZipCode1', $value2['zipcode1']);
      $this->mdlDireccionesC->__SET('Country2', $value2['country02']);
      $this->mdlDireccionesC->__SET('State2', $value2['state02']);
      $this->mdlDireccionesC->__SET('City2', $value2['city02']);
      $this->mdlDireccionesC->__SET('Address2', $value2['dirbusiness2']);
      $this->mdlDireccionesC->__SET('storeName2', $value2['storename02']);
      $this->mdlDireccionesC->__SET('ZipCode2', $value2['zipcode02']);
      $this->mdlDireccionesC->__SET('Country3', $value2['country03']);
      $this->mdlDireccionesC->__SET('State3', $value2['state3']);
      $this->mdlDireccionesC->__SET('City3', $value2['city03']);
      $this->mdlDireccionesC->__SET('Address3', $value2['dirbusiness3']);
      $this->mdlDireccionesC->__SET('storeName3', $value2['storename3']);
      $this->mdlDireccionesC->__SET('ZipCode3', $value2['zipcode03']);
      $this->mdlDireccionesC->__SET('Country4', $value2['country4']);
      $this->mdlDireccionesC->__SET('State4', $value2['state4']);
      $this->mdlDireccionesC->__SET('City4', $value2['city4']);
      $this->mdlDireccionesC->__SET('storeName4', $value2['storename4']);
      $this->mdlDireccionesC->__SET('Address4', $value2['dirbusiness4']);
      $this->mdlDireccionesC->__SET('ZipCode4', $value2['zipcode4']);
      $this->mdlDireccionesC->__SET('Contry5', $value2['country5']);
      $this->mdlDireccionesC->__SET('State5', $value2['state5']);
      $this->mdlDireccionesC->__SET('City5', $value2['city5']);
      $this->mdlDireccionesC->__SET('storeName5', $value2['storename5']);
      $this->mdlDireccionesC->__SET('Address5', $value2['dirbusiness5']);
      $this->mdlDireccionesC->__SET('ZipCode5', $value2['zipcode5']);

      // $date = strftime("%Y-%m-%d", time());
      $date = date("Y-m-d H:i:s");
      $this->mdlDireccionesC->__SET('dateUpdated', $date);

      $this->mdlDireccionesC->actualizarDireccionC();

      echo 1;

      sleep(3);
    }

  }

  public function form2DireccionC()
  {
    sleep(5);

    $dataForm2 = array($_POST);

    foreach ($dataForm2 as $value2)
    {

      $ultimoId = $this->mdlDirecciones->consultarUltimoId();

      foreach ($ultimoId as $id)
      {
        $this->mdlDireccionesC->__SET('idAddresses', $id['id']);
      }

      $this->mdlDireccionesC->__SET('Country1', $value2['country1']);
      $this->mdlDireccionesC->__SET('State1', $value2['state1']);
      $this->mdlDireccionesC->__SET('City1', $value2['city1']);
      $this->mdlDireccionesC->__SET('Address1', $value2['dirbusiness1']);
      $this->mdlDireccionesC->__SET('storeName1', $value2['storename1']);
      $this->mdlDireccionesC->__SET('ZipCode1', $value2['zipcode1']);
      $this->mdlDireccionesC->__SET('Country2', $value2['country02']);
      $this->mdlDireccionesC->__SET('State2', $value2['state02']);
      $this->mdlDireccionesC->__SET('City2', $value2['city02']);
      $this->mdlDireccionesC->__SET('Address2', $value2['dirbusiness2']);
      $this->mdlDireccionesC->__SET('storeName2', $value2['storename02']);
      $this->mdlDireccionesC->__SET('ZipCode2', $value2['zipcode02']);
      $this->mdlDireccionesC->__SET('Country3', $value2['country03']);
      $this->mdlDireccionesC->__SET('State3', $value2['state3']);
      $this->mdlDireccionesC->__SET('City3', $value2['city03']);
      $this->mdlDireccionesC->__SET('Address3', $value2['dirbusiness3']);
      $this->mdlDireccionesC->__SET('storeName3', $value2['storename3']);
      $this->mdlDireccionesC->__SET('ZipCode3', $value2['zipcode03']);
      $this->mdlDireccionesC->__SET('Country4', $value2['country4']);
      $this->mdlDireccionesC->__SET('State4', $value2['state4']);
      $this->mdlDireccionesC->__SET('City4', $value2['city4']);
      $this->mdlDireccionesC->__SET('storeName4', $value2['storename4']);
      $this->mdlDireccionesC->__SET('Address4', $value2['dirbusiness4']);
      $this->mdlDireccionesC->__SET('ZipCode4', $value2['zipcode4']);
      $this->mdlDireccionesC->__SET('Contry5', $value2['country5']);
      $this->mdlDireccionesC->__SET('State5', $value2['state5']);
      $this->mdlDireccionesC->__SET('City5', $value2['city5']);
      $this->mdlDireccionesC->__SET('storeName5', $value2['storename5']);
      $this->mdlDireccionesC->__SET('Address5', $value2['dirbusiness5']);
      $this->mdlDireccionesC->__SET('ZipCode5', $value2['zipcode5']);

      $this->mdlDireccionesC->guardarDireccionC();

      echo 1;
      sleep(2);

    }

  }

  public function form3()
  {

    sleep(3);

    $dataForm3 = array($_POST);

    foreach ($dataForm3 as $value3)
    {
      $this->mdlBuyers->__SET('currency', $value3['currency']);
      $this->mdlBuyers->__SET('bankName', ucwords($value3['bankname']));
      $this->mdlBuyers->__SET('branch', ucwords($value3['branch']));
      $this->mdlBuyers->__SET('accountNumber', $value3['accountnumber']);
      $this->mdlBuyers->__SET('paymentType', $value3['paymenttype']);

      if ($value3['paymenttype'] == "other")
      {
        $this->mdlBuyers->__SET('whichOne', $value3['others']);
      }
      else
      {
        $this->mdlBuyers->__SET('whichOne', "");
      }

      if (isset($value3['creditTerms']) && $value3['creditTerms'] == "on")
       {
         $accept = "Aceptado";
      }
      else
      {
        $accept = "No aceptado";
      }

      $this->mdlBuyers->__SET('creditTerms', $accept);

      $this->mdlBuyers->__SET('quantityBuyers', $value3['buyercontactsquantity']);
      
    if($value3['buyercontactsquantity'] == "mas-5")
      {
         $destinatario = "jmontoya@maaji.co, jvargasp@maaji.co, svanegas@maaji.co, dvillada@maaji.co";
        //  $destinatario = "davidvargas.jdvp@gmail.com";
            //Titulo
        $asunto = "MAAJI KYC BUYER CONTACT";
        
        $cuerpo = "";
        $cuerpo = '
        <html>
        <head>
        <title>CONFIRMATION - NO REPLY</title>
        </head>
         <body background="';
        $cuerpo .= URL;
        $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
        $cuerpo .= '<h4 style="font-weigth: 600; font-size: 20px;">Hello ' . $destinatario . '</h4>';
        $cuerpo .= '<div style="font-size: 20px;> The user with email: ' . $_SESSION['EMAIL'] . ' of the company ' . $_SESSION['FORM1'][0]['company_name'] . ' and country ' . $_SESSION['FORM2'][0]['country'] . ' have more than five buyers contacts, please contact him.'; 
      $cuerpo .='</div>';
      $cuerpo .='</body></html>';
      //cabecera
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      //dirección del remitente
      $headers .= "From: form KYC Maaji<noreply@maaji.co>\r\n";
      //Enviamos el mensaje a tu_dirección_email
      mail($destinatario,$asunto,$cuerpo,$headers);
    }
      
      $this->mdlBuyers->__SET('logisticContactName', ucwords($value3['logisticcontactname']));
      $this->mdlBuyers->__SET('logisticContactPhone', ucwords($value3['logisticcontactphone']));
      $this->mdlBuyers->__SET('logisticContactEmail', ucwords($value3['logisticcontactemail']));
      $this->mdlBuyers->__SET('accountsPayableName', ucwords($value3['accountspayablename']));
      $this->mdlBuyers->__SET('accountsPayablePhone', ucwords($value3['payablephone']));
      $this->mdlBuyers->__SET('accountsPayableEmail', ucwords($value3['payableEmail']));
      $this->mdlBuyers->__SET('reference1Name', ucwords($value3['reference1name']));
      $this->mdlBuyers->__SET('phoneReference1', $value3['phonereference1']);
      $this->mdlBuyers->__SET('emailReference1', $value3['emailreference1']);
      $this->mdlBuyers->__SET('reference2Name', ucwords($value3['reference2name']));
      $this->mdlBuyers->__SET('phoneReference2', $value3['phonereference2']);
      $this->mdlBuyers->__SET('emailReference2', $value3['emailreference2']);
      $this->mdlBuyers->__SET('reference3Name', ucwords($value3['reference3name']));
      $this->mdlBuyers->__SET('phoneReference3', $value3['phonereference3']);
      $this->mdlBuyers->__SET('emailReference3', $value3['emailreference3']);
      $this->mdlBuyers->__SET('usernameBuyers', (int)$_SESSION['USUARIO_ID']);

      $this->mdlBuyers->guardarInfoForm3();

      echo 1;

      sleep(3);
    }

  }

  public function actualizacionDatosForm3BuyersContacts()
  {
    sleep(5);

    $dataForm3Buyers = array($_POST);

    foreach ($dataForm3Buyers as $value)
    {

      $this->mdlBuyersContacts->__SET('fullNameBuyers1', $value['buyernamecontact']);
      $this->mdlBuyersContacts->__SET('phoneBuyers1', ucwords($value['buyerphonecontact']));
      $this->mdlBuyersContacts->__SET('emailBuyers1', ucwords($value['buyeremailcontact']));
      $this->mdlBuyersContacts->__SET('fullNameBuyers2', $value['buyernamecontact2']);
      $this->mdlBuyersContacts->__SET('phoneBuyers2', $value['buyerphone2']);
      $this->mdlBuyersContacts->__SET('emailBuyers2', ucwords($value['buyeremail2']));
      $this->mdlBuyersContacts->__SET('fullNameBuyers3', ucwords($value['buyername3']));
      $this->mdlBuyersContacts->__SET('phoneBuyers3', ucwords($value['buyerphone3']));
      $this->mdlBuyersContacts->__SET('emailBuyers3', ucwords($value['buyeremail3']));
      $this->mdlBuyersContacts->__SET('fullNameBuyers4', ucwords($value['buyername4']));
      $this->mdlBuyersContacts->__SET('phoneBuyers4', ucwords($value['buyerphone4']));
      $this->mdlBuyersContacts->__SET('emailBuyers4', ucwords($value['buyeremail4']));
      $this->mdlBuyersContacts->__SET('fullNameBuyers5', ucwords($value['buyername5']));
      $this->mdlBuyersContacts->__SET('phoneBuyers5', $value['buyerphone5']);
      $this->mdlBuyersContacts->__SET('emailBuyers5', $value['buyeremail5']);

      $date = date("Y-m-d H:i:s");
      $this->mdlBuyersContacts->__SET('dateUpdated', $date);

      $this->mdlBuyersContacts->__SET('idBuyersContacts', (int)$value['idbuyercontacts']);

      $this->mdlBuyersContacts->actualizarInfoForm3Buyers();

      echo 1;
    }
  }

  public function form3BuyersContacts()
  {
    sleep(6);

    $dataForm3Buyers = array($_POST);

    foreach ($dataForm3Buyers as $value)
    {

      $ultimoId = $this->mdlBuyers->ultimoIdBuyers();

      foreach ($ultimoId as $val)
      {
        $this->mdlBuyersContacts->__SET('idBuyers', (int)$val['id']);
      }

      $this->mdlBuyersContacts->__SET('fullNameBuyers1', ucwords($value['buyernamecontact']));
      $this->mdlBuyersContacts->__SET('phoneBuyers1', $value['buyerphonecontact']);
      $this->mdlBuyersContacts->__SET('emailByers1', $value['buyeremailcontact']);
      $this->mdlBuyersContacts->__SET('fullNameBuyers2', ucwords($value['buyernamecontact2']));
      $this->mdlBuyersContacts->__SET('phoneBuyers2', $value['buyerphone2']);
      $this->mdlBuyersContacts->__SET('emailBuyers2', $value['buyeremail2']);
      $this->mdlBuyersContacts->__SET('fullNameBuyers3', ucwords($value['buyername3']));
      $this->mdlBuyersContacts->__SET('phoneBuyers3', $value['buyerphone3']);
      $this->mdlBuyersContacts->__SET('emailBuyers3', $value['buyeremail3']);
      $this->mdlBuyersContacts->__SET('fullNameBuyers4', ucwords($value['buyername4']));
      $this->mdlBuyersContacts->__SET('phoneBuyers4', $value['buyerphone4']);
      $this->mdlBuyersContacts->__SET('emailBuyers4', $value['buyeremail4']);
      $this->mdlBuyersContacts->__SET('fullNameBuyers5', ucwords($value['buyername5']));
      $this->mdlBuyersContacts->__SET('phoneBuyers5', $value['buyerphone5']);
      $this->mdlBuyersContacts->__SET('emailBuyers5', $value['buyeremail5']);

      $this->mdlBuyersContacts->guardarInfoForm3BuyersContacts();

      echo 1;
    }
  }

  public function form4()
  {
    sleep(5);

    if (isset($_POST['lines']) && $_POST['lines'] != NULL)
    {
      $archivo1 = strtolower($_FILES["certificateexistence"]['name']);
      $archivo2 = strtolower($_FILES["taxcertificate"]['name']);
      $archivo3 = strtolower($_FILES["checkspecimen"]['name']);
      $archivo4 = strtolower($_FILES["legalrepresentative"]['name']);

    //Validamos que los archivos existan
    if($archivo1 && $archivo2 && $archivo3 && $archivo4)
    {
      if(isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
      {
        $archivo5 = strtolower($_FILES["resalercertificate"]['name']);
        $ext5 = explode(".", $archivo5);
        $extension5 = end($ext5);
      }

      $validacionArchivos = "";

      $ext1 = explode(".", $archivo1);
      $ext2 = explode(".", $archivo2);
      $ext3 = explode(".", $archivo3);
      $ext4 = explode(".", $archivo4);
      $extension1 = end($ext1);
      $extension2 = end($ext2);
      $extension3 = end($ext3);
      $extension4 = end($ext4);

      //Validación tipo archivo1
      if ($_FILES['certificateexistence']['type'] == "image/jpeg" || $_FILES['certificateexistence']['type'] == "image/JPEG")
      {
          $nameFile1 = str_replace(".jpg", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      elseif($_FILES['certificateexistence']['type'] == "application/pdf")
      {
        $nameFile1 = str_replace(".pdf", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      else
      {
        $nameFile1 = str_replace(".png", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      //Validación tipo archivo2
      if ($_FILES['taxcertificate']['type'] == "image/jpeg" || $_FILES['taxcertificate']['type'] == "image/JPEG")
      {
          $nameFile2 = str_replace(".jpg", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      elseif($_FILES['taxcertificate']['type'] == "application/pdf")
      {
        $nameFile2 = str_replace(".pdf", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      else
      {
        $nameFile2 = str_replace(".png", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      //Validación tipo archivo3
      if ($_FILES['checkspecimen']['type'] == "image/jpeg" || $_FILES['checkspecimen']['type'] == "image/JPEG")
      {
          $nameFile3 = str_replace(".jpg", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      elseif($_FILES['checkspecimen']['type'] == "application/pdf")
      {
        $nameFile3 = str_replace(".pdf", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      else
      {
        $nameFile3 = str_replace(".png", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      //Validación tipo archivo4
      if ($_FILES['legalrepresentative']['type'] == "image/jpeg"  || $_FILES['legalrepresentative']['type'] == "image/JPEG")
      {
          $nameFile4 = str_replace(".jpg", "", $archivo4) . "_legalID." . $extension4;
      }

      elseif($_FILES['legalrepresentative']['type'] == "application/pdf")
      {
        $nameFile4 = str_replace(".pdf", "", $archivo4) . "_legalID." . $extension4;
      }

      else
      {
        $nameFile4 = str_replace(".png", "", $archivo4) . "_legalID." . $extension4;
      }

      //Validamos si existe el archivo 5
      if (isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
      {
        //Validación tipo archivo5
        if ($_FILES['resalercertificate']['type'] == "image/jpeg"  || $_FILES['resalercertificate']['type'] == "image/JPEG")
        {
            $nameFile5 = str_replace(".jpg", "", $archivo5) . "_resSalerCertificate." . $extension5;
        }

        elseif($_FILES['resalercertificate']['type'] == "application/pdf")
        {
          $nameFile5 = str_replace(".pdf", "", $archivo5) . "_resSalerCertificate." . $extension5;
        }

        else
        {
          $nameFile5 = str_replace(".png", "", $archivo5) . "_resSalerCertificate." . $extension5;
        }

        $source5 = $_FILES["resalercertificate"]["tmp_name"];

      }

      //Obtenemos un nombre temporal del archivo
      $source1 = $_FILES["certificateexistence"]["tmp_name"];
      $source2 = $_FILES["taxcertificate"]["tmp_name"];
      $source3 = $_FILES["checkspecimen"]["tmp_name"];
      $source4 = $_FILES["legalrepresentative"]["tmp_name"];

      $user = $_SESSION['EMAIL'] . '/';

      //Declaramos un  variable con la ruta donde guardaremos los archivos
       $directorio = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user;
    //   $directorio = 'C:/xampp/htdocs/formKYC/public/documents/' . $user;

      //Validamos si la ruta de destino existe, en caso de no existir la creamos
      if(!file_exists($directorio)){
        mkdir($directorio, 0777) or die("No fue posible crear el directorio");
      }

      //Abrimos el directorio de destino
      $dir = opendir($directorio);

      //Indicamos la ruta de destino, así como el nombre del archivo
      $target_path1 = $directorio.'/'.$nameFile1;
      $target_path2 = $directorio.'/'.$nameFile2;
      $target_path3 = $directorio.'/'.$nameFile3;
      $target_path4 = $directorio.'/'.$nameFile4;

      if (isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
      {
        $target_path5 = $directorio.'/'.$nameFile5;
      }

      //Indicamos la extensión del archivo permitida
      $permitidos = array(
                          "application/pdf",
                          "image/jpeg",
                          "image/JPEG",
                          "image/jpg",
                          "image/JPG",
                          "image/png",
                          "image/PNG"
                         );

      //Acá especificamos un tamaño válido de 5 MB
      $limite_kb = 5000;

      //Archivo 1
      if ($_FILES['certificateexistence']['type'] == "image/jpeg" ||
          $_FILES['certificateexistence']['type'] == "image/JPEG")
      {
          $name1 = str_replace(".jpeg", "", $nameFile1);
      }

      elseif ($_FILES['certificateexistence']['type'] == "image/jpg" ||
              $_FILES['certificateexistence']['type'] == "image/JPG")
      {
        $name1 = str_replace(".jpg", "", $nameFile1);
      }

      elseif($_FILES['certificateexistence']['type'] == "application/pdf")
      {
        $name1 = str_replace(".pdf", "", $nameFile1);
      }

      elseif ($_FILES['certificateexistence']['type'] == "image/PNG")
      {
        $name1 = str_replace(".PNG", "", $nameFile1);
      }

      else
      {
        $name1 = str_replace(".png", "", $nameFile1);
      }

      //Archivo 2
      if ($_FILES['taxcertificate']['type'] == "image/jpeg" ||
          $_FILES['taxcertificate']['type'] == "image/JPEG")
      {
        $name2 = str_replace(".jpeg", "", $nameFile2);
      }

      elseif ($_FILES['taxcertificate']['type'] == "image/jpg" ||
          $_FILES['taxcertificate']['type'] == "image/JPG")
      {
        $name2 = str_replace(".jpg", "", $nameFile2);
      }

      elseif($_FILES['taxcertificate']['type'] == "application/pdf")
      {
        $name2 = str_replace(".pdf", "", $nameFile2);
      }

      elseif ($_FILES['taxcertificate']['type'] == "image/PNG" )
      {
        $name2 = str_replace(".PNG", "", $nameFile2);
      }

      else
      {
        $name2 = str_replace(".png", "", $nameFile2);
      }

      //Archivo 3
      if ($_FILES['checkspecimen']['type'] == "image/jpeg" ||
          $_FILES['checkspecimen']['type'] == "image/JPEG")
      {
        $name3 = str_replace(".jpeg", "", $nameFile3);
      }

      if ($_FILES['checkspecimen']['type'] == "image/jpg" ||
          $_FILES['checkspecimen']['type'] == "image/JPG")
      {
        $name3 = str_replace(".jpg", "", $nameFile3);
      }

      elseif($_FILES['checkspecimen']['type'] == "application/pdf")
      {
        $name3 = str_replace(".pdf", "", $nameFile3);
      }

      elseif($_FILES['checkspecimen']['type'] == "image/PNG")
      {
        $name3 = str_replace(".PNG", "", $nameFile3);
      }

      else
      {
        $name3 = str_replace(".png", "", $nameFile3);
      }

      //Archivo 4
      if ($_FILES['legalrepresentative']['type'] == "image/jpeg" ||
          $_FILES['legalrepresentative']['type'] == "image/JPEG")
      {
          $name4 = str_replace(".jpeg", "", $nameFile4);
      }

      elseif ($_FILES['legalrepresentative']['type'] == "image/jpg" ||
              $_FILES['legalrepresentative']['type'] == "image/JPG")
      {
          $name4 = str_replace(".jpg", "", $nameFile4);
      }

      elseif($_FILES['legalrepresentative']['type'] == "application/pdf")
      {
          $name4 = str_replace(".pdf", "", $nameFile4);
      }

      elseif ($_FILES['legalrepresentative']['type'] == "image/PNG")
      {
        $name4 = str_replace(".png", "", $nameFile4);
      }

      else
      {
          $name4 = str_replace(".png", "", $nameFile4);
      }

      if (isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
      {
        //Archivo 5
        if ($_FILES['resalercertificate']['type'] == "image/jpeg" ||
            $_FILES['resalercertificate']['type'] == "image/JPEG")
        {
            $name5 = str_replace(".jpeg", "", $nameFile5);
        }

        elseif ($_FILES['resalercertificate']['type'] == "image/jpg" ||
                $_FILES['resalercertificate']['type'] == "image/JPG")
        {
            $name5 = str_replace(".jpg", "", $nameFile5);
        }

        elseif($_FILES['resalercertificate']['type'] == "application/pdf")
        {
            $name5 = str_replace(".pdf", "", $nameFile5);
        }

        elseif ($_FILES['resalercertificate']['type'] == "image/PNG")
        {
          $name5 = str_replace(".png", "", $nameFile5);
        }

        else
        {
            $name5 = str_replace(".png", "", $nameFile5);
        }

        // $file5 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name5 . '.' . $extension5;
        $file5 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name5 . '.' . $extension5;

      }

      //obtenemos todos los nombres de los ficheros
       $file1 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name1 . '.' . $extension1;
       $file2 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name2 . '.' . $extension2;
       $file3 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name3 . '.' . $extension3;
       $file4 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name4 . '.' . $extension4;
    //   $file1 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name1 . '.' . $extension1;
    //   $file2 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name2 . '.' . $extension2;
    //   $file3 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name3 . '.' . $extension3;
    //   $file4 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name4 . '.' . $extension4;

        if(is_file($file1) && is_file($file2) && is_file($file3) && is_file($file4))
        {
          unlink($file1); //elimino el fichero1
          unlink($file2); //elimino el fichero2
          unlink($file3); //elimino el fichero3
          unlink($file4); //elimino el fichero4

          if(isset($file5) && is_file($file5))
          {
            unlink($file5); //elimino el fichero5
          }
        }

        if(in_array($_FILES['certificateexistence']['type'], $permitidos) &&
           in_array($_FILES['taxcertificate']['type'], $permitidos) &&
           in_array($_FILES['checkspecimen']['type'], $permitidos) &&
           in_array($_FILES['legalrepresentative']['type'], $permitidos) ||
           (isset($_FILES['resalercertificate']) && in_array($_FILES['resalercertificate']['type'], $permitidos)) &&
           ($_FILES['certificateexistence']['size'] <= $limite_kb * 1024) &&
           ($_FILES['taxcertificate']['size'] <= $limite_kb * 1024) &&
           ($_FILES['checkspecimen']['size'] <= $limite_kb * 1024) &&
           ($_FILES['legalrepresentative']['size'] <= $limite_kb * 1024) ||
           (isset($_FILES['resalercertificate']) && $_FILES['resalercertificate']['size'] <= $limite_kb * 1024))
        {
           $ruta1 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/'. $user . $nameFile1;
           $ruta2 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/'. $user . $nameFile2;
           $ruta3 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/'. $user . $nameFile3;
           $ruta4 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/'. $user . $nameFile4;
        //   $ruta1 = 'C:/xampp/htdocs/formKYC/public/documents/'. $user . $nameFile1;
        //   $ruta2 = 'C:/xampp/htdocs/formKYC/public/documents/'. $user . $nameFile2;
        //   $ruta3 = 'C:/xampp/htdocs/formKYC/public/documents/'. $user . $nameFile3;
        //   $ruta4 = 'C:/xampp/htdocs/formKYC/public/documents/'. $user . $nameFile4;

          if (isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
          {
            // $ruta5 = 'C:/xampp/htdocs/formKYC/public/documents/'. $user . $nameFile5;
            $ruta5 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/'. $user . $nameFile5;
            $resultado5 = move_uploaded_file($_FILES['resalercertificate']['tmp_name'], $ruta5);
          }

          $resultado1 = move_uploaded_file($_FILES['certificateexistence']['tmp_name'], $ruta1);
          $resultado2 = move_uploaded_file($_FILES['taxcertificate']['tmp_name'], $ruta2);
          $resultado3 = move_uploaded_file($_FILES['checkspecimen']['tmp_name'], $ruta3);
          $resultado4 = move_uploaded_file($_FILES['legalrepresentative']['tmp_name'], $ruta4);

  				// echo "cargaarchivoscorrecta";
          $validacionArchivos = true;
  			}
        else
        {
          //obtenemos todos los nombres de los ficheros
           $file1 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name1 . '.' . $extension1;
           $file2 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name2 . '.' . $extension2;
           $file3 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name3 . '.' . $extension3;
           $file4 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name4 . '.' . $extension4;
        //   $file1 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name1 . '.' . $extension1;
        //   $file2 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name2 . '.' . $extension2;
        //   $file3 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name3 . '.' . $extension3;
        //   $file4 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name4 . '.' . $extension4;

          if (isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
          {
            // $file5 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name5 . '.' . $extension5;
            $file5 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name5 . '.' . $extension5;
          }


            if(!in_array($_FILES['certificateexistence']['type'], $permitidos) &&
                 !in_array($_FILES['taxcertificate']['type'], $permitidos) &&
                 !in_array($_FILES['checkspecimen']['type'], $permitidos) &&
                 !in_array($_FILES['legalrepresentative']['type'], $permitidos) ||
                 (isset($_FILES['resalercertificate']) && !in_array($_FILES['resalercertificate']['type'], $permitidos)) &&
                 !($_FILES['certificateexistence']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['taxcertificate']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['checkspecimen']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['legalrepresentative']['size'] <= $limite_kb * 1024) ||
                 (isset($_FILES['resalercertificate']) && !$_FILES['resalercertificate']['size'] <= $limite_kb * 1024))
            {
              unlink($file1); //elimino el fichero1
              unlink($file2); //elimino el fichero2
              unlink($file3); //elimino el fichero3
              unlink($file4); //elimino el fichero4

              if (isset($file5))
              {
                unlink($file5); //elimino el fichero5
              }
              echo "errorarchivos";
            }
              $validacionArchivos = false;
		    }

      }

      if (isset($validacionArchivos) && $validacionArchivos == true)
      {

      $dataForm4 = array($_POST);
      $lines = $_POST['lines'];

      foreach ($dataForm4 as $value3)
      {
        $this->mdlBusiness->__SET('currencyAnualSalesFigures', $value3['currencyAnualFigures']);
        $this->mdlBusiness->__SET('figures', $value3['figures']);
        $this->mdlBusiness->__SET('linesBusiness', implode(",", $lines));
        $this->mdlBusiness->__SET('typeBusiness', ucwords($value3['typebusiness']));
        $this->mdlBusiness->__SET('marketPotentialBrand', ucwords($value3['potentialbrand']));
        $this->mdlBusiness->__SET('bisnessLocations', $value3['storelocations']);
        
      if ($value3['website'] != "")
      {
        $this->mdlBusiness->__SET('webSite', "https://".$value3['website']);
      }
      else
      {
        $this->mdlBusiness->__SET('webSite', $value3['website']);
      }

        $this->mdlBusiness->__SET('certificateOfExistence', $archivo1);
        $this->mdlBusiness->__SET('taxCertificate', $archivo2);
        $this->mdlBusiness->__SET('legalID', $archivo3);
        $this->mdlBusiness->__SET('checkSpecimen', $archivo4);

        if(isset($archivo5) && $archivo5 != "")
        {
          $this->mdlBusiness->__SET('resalerCertificate', $archivo5);
        }
        else
        {
          $this->mdlBusiness->__SET('resalerCertificate', "");
        }

        $this->mdlBusiness->__SET('usernameBusiness', (int)$_SESSION['USUARIO_ID']);
        
    //Acá enviamos correo a la persona designada de Customer Experience
    //informando que el cliente tienen más de 5 locationes de tienda
    if($value3['storelocations'] == "mas-5")
      {
        //  $destinatario = "jmontoya@maaji.co";
         $destinatario = "jmontoya@maaji.co, jvargasp@maaji.co, svanegas@maaji.co, dvillada@maaji.co";
            //Titulo
        $asunto = "MAAJI KYC RETAIL STORE LOCATION";
        
        $cuerpo = "";
        $cuerpo = '
        <html>
        <head>
        <title>CONFIRMATION - NO REPLY</title>
        </head>
        <body background="';
        $cuerpo .= URL;
        $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
        $cuerpo .= '<h4 style="font-weigth: 600; font-size: 20px;">Hello ' . $destinatario . '</h4>';
        $cuerpo .= '<div style="font-size: 20px;> The user with email: ' . $_SESSION['EMAIL'] . ' of the company ' . $_SESSION['FORM1'][0]['company_name'] . ' and country ' . $_SESSION['FORM2'][0]['country'] . ' have more than five retail store location,  please contact him.'; 
      $cuerpo .='</div>';
      $cuerpo .='</body></html>';
      //cabecera
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      //dirección del remitente
      $headers .= "From: form KYC Maaji<noreply@maaji.co>\r\n";
      //Enviamos el mensaje a tu_dirección_email
      mail($destinatario,$asunto,$cuerpo,$headers);
    }

        $this->mdlBusiness->guardarInfoForm4();
        
        
        //Acá enviamos correo al cliente informandole que su información
        //ya quedo almacenada en la base de datos
         $destinatario = $_SESSION['EMAIL'];
        //  $destinatario = "davidvargas.jdvp@gmail.com";
            //Titulo
        $asunto = "MAAJI KYC CONFIRMATION";
        
        $cuerpo = "";
        $cuerpo = '
        <html>
        <head>
        <title>CONFIRMATION - NO REPLY</title>
        </head>
        <body background="';
        $cuerpo .= URL;
        $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
        $cuerpo .= '<h4 style="font-weigth: 600;">Hello ' . $_SESSION['EMAIL'] . '</h4>';
        $cuerpo .= '<div style="font-size: 20px;> Welcome to the land of <strong>MAAJINESS</strong>, now you are part of our family!'; 
      $cuerpo .='</div>';
      $cuerpo .='</body></html>';
      //cabecera
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      //dirección del remitente
      $headers .= "From: form KYC Maaji<noreply@maaji.co>\r\n";
      //Enviamos el mensaje a tu_dirección_email
      mail($destinatario,$asunto,$cuerpo,$headers);
      
      
      //Acá enviamos correo a la persona designada de CX
     //informando que el cliente ya quedo registrado en la base de datos.
         $destinatario = "jmontoya@maaji.co, jvargasp@maaji.co, svanegas@maaji.co, dvillada@maaji.co";
            //Titulo
        $asunto = "MAAJI KYC NEW CUSTOMER";
        
        $cuerpo = "";
        $cuerpo = '
        <html>
        <head>
        <title>CONFIRMATION - NO REPLY</title>
        <body background="';
        $cuerpo .= URL;
        $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
        $cuerpo .= '<h4 style="font-weigth: 600;">Hello ' . $destinatario . '</h4>';
        $cuerpo .= '<div style="font-size: 20px;> The user with email: ' . $_SESSION['EMAIL'] . ' of the company ' . $_SESSION['FORM1'][0]['company_name'] . ' and country ' . $_SESSION['FORM2'][0]['country'] . ' been registered correctly in our database, please contact him. <br/>Thanks'; 
      $cuerpo .='</div>';
      $cuerpo .='</body></html>';
      //cabecera
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      //dirección del remitente
      $headers .= "From: form KYC Maaji<noreply@maaji.co>\r\n";
      //Enviamos el mensaje a tu_dirección_email
      mail($destinatario,$asunto,$cuerpo,$headers);
      
        echo 1;

        sleep(2);
      }
    }
    else
    {
      echo 2;
    }
  }
    else
    {
      header("Location: " . URL . "home/index4");
    }

  }

  public function form4BusinessL()
  {
    sleep(4);

    $dataForm2 = array($_POST);

    foreach ($dataForm2 as $value2)
    {
      $ultimoIdB = $this->mdlBusiness->consultarUltimoIdBusiness();

      foreach ($ultimoIdB as $id)
      {
        $this->mdlBusinessL->__SET('idBusiness', $id['id']);
      }

      $this->mdlBusinessL->__SET('Country1', $value2['countrystore1']);
      $this->mdlBusinessL->__SET('State1', $value2['statestore1']);
      $this->mdlBusinessL->__SET('City1', $value2['citystoreretail1']);
      $this->mdlBusinessL->__SET('Address1', $value2['addressstore1']);
      $this->mdlBusinessL->__SET('storeName1', $value2['storenameretail1']);
      $this->mdlBusinessL->__SET('ZipCode1', $value2['zipcodestore1']);
      $this->mdlBusinessL->__SET('Country2', $value2['countrystore2']);
      $this->mdlBusinessL->__SET('State2', $value2['statestore2']);
      $this->mdlBusinessL->__SET('City2', $value2['citystoreretail2']);
      $this->mdlBusinessL->__SET('Address2', $value2['addresstore2']);
      $this->mdlBusinessL->__SET('storeName2', $value2['storenameretail2']);
      $this->mdlBusinessL->__SET('ZipCode2', $value2['zipcodestore2']);
      $this->mdlBusinessL->__SET('Country3', $value2['countrystore3']);
      $this->mdlBusinessL->__SET('State3', $value2['statestore3']);
      $this->mdlBusinessL->__SET('City3', $value2['citystoreretail3']);
      $this->mdlBusinessL->__SET('Address3', $value2['addressstore3']);
      $this->mdlBusinessL->__SET('storeName3', $value2['storenameretail3']);
      $this->mdlBusinessL->__SET('ZipCode3', $value2['zipcodestore3']);
      $this->mdlBusinessL->__SET('Country4', $value2['countrystore4']);
      $this->mdlBusinessL->__SET('State4', $value2['statestore4']);
      $this->mdlBusinessL->__SET('City4', $value2['citystore4']);
      $this->mdlBusinessL->__SET('storeName4', $value2['storenameretail4']);
      $this->mdlBusinessL->__SET('Address4', $value2['addresstore4']);
      $this->mdlBusinessL->__SET('ZipCode4', $value2['zipcodestore4']);
      $this->mdlBusinessL->__SET('Contry5', $value2['countrystore5']);
      $this->mdlBusinessL->__SET('State5', $value2['statesore5']);
      $this->mdlBusinessL->__SET('City5', $value2['citystore5']);
      $this->mdlBusinessL->__SET('storeName5', $value2['storenameretail5']);
      $this->mdlBusinessL->__SET('Address5', $value2['addresstore5']);
      $this->mdlBusinessL->__SET('ZipCode5', $value2['zipcodestore5']);

      $this->mdlBusinessL->guardarInfoForm4LocationsEstores();

      echo 1;

      sleep(4);
    }

  }

  public function actualizacionDatos()
  {

    if(isset($_SESSION['SESION_INICIADA']) &&  $_SESSION['SESION_INICIADA'] == true)
    {
      sleep(2);

      /* Acá envío valores de los campos para actualizar en base de datos si hubo cambios
      en el formulario */
      $this->mdlClientes->__SET('idCustomer', (int)$_POST['idCustomer']);
      $this->mdlClientes->__SET('companyName', $_POST['company_name']);
      $this->mdlClientes->__SET('brandName', $_POST['brand']);
      $this->mdlClientes->__SET('email', $_POST['email']);
      $this->mdlClientes->__SET('phone', $_POST['phone']);
      $this->mdlClientes->__SET('website', "http://" . $_POST['website']);
      $this->mdlClientes->__SET('facebook', $_POST['face']);
      $this->mdlClientes->__SET('instagram', $_POST['instagram']);
      $this->mdlClientes->__SET('twitter', $_POST['twitter']);
      $this->mdlClientes->__SET('pinterest', $_POST['pinterest']);

      // $date = strftime("%Y-%m-%d", time());
      $date = date("Y-m-d H:i:s");//Formato hora para año/mes/día Hora:munutos:segundos

      $this->mdlClientes->__SET('dateUpdated', $date);

      $this->mdlClientes->actualizarDatosForm1();

      echo 1;
    }

  }

  public function actualizacionDatosForm2()
  {

    if(isset($_SESSION['SESION_INICIADA']) &&
        $_SESSION['SESION_INICIADA'] == true)
    {
      sleep(2);

      /* Acá envío valores de los campos para actualizar en base de datos si hubo cambios
      en el formulario # 2*/
      $this->mdlDirecciones->__SET('idAddresses', (int)$_POST['idaddresses']);
      $this->mdlDirecciones->__SET('taxID', $_POST['taxid']);
      $this->mdlDirecciones->__SET('typeCompany', $_POST['typecompany']);
      $this->mdlDirecciones->__SET('owner', $_POST['owner']);
      $this->mdlDirecciones->__SET('idNumber', $_POST['idnumber']);
      $this->mdlDirecciones->__SET('phone', $_POST['phone2']);
      $this->mdlDirecciones->__SET('billingAddress', $_POST['address']);
      $this->mdlDirecciones->__SET('billingCity', $_POST['city']);
      $this->mdlDirecciones->__SET('billingState', $_POST['state']);
      $this->mdlDirecciones->__SET('billingCountry', $_POST['country']);
      $this->mdlDirecciones->__SET('billingZipCode', $_POST['zipcode']);
      $this->mdlDirecciones->__SET('quantityLocations', $_POST['quantitylocationsshipping']);

      // $date = strftime("%Y-%m-%d", time());
      $date = date("Y-m-d H:i:s");//Formato hora para año/mes/día Hora:munutos:segundos

      $this->mdlDirecciones->__SET('dateUpdated', $date);
      
      if($_POST['quantitylocationsshipping'] == "mas-5")
      {
        $destinatario = "jmontoya@maaji.co, jvargasp@maaji.co, svanegas@maaji.co, dvillada@maaji.co";
        //  $destinatario = "davidvargas.jdvp@gmail.com";
            //Titulo
        $asunto = "MAAJI KYC SHIPPING ADDRESS";
        
        $cuerpo = "";
        $cuerpo = '
        <html>
        <head>
        <title>CONFIRMATION - NO REPLY</title>
        </head>
         <body background="';
        $cuerpo .= URL;
        $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
        $cuerpo .= '<h4 style="font-weigth: 600;">Hello ' . $destinatario . '</h4>';
        $cuerpo .= '<div  style="font-size: 20px;> The user with email: ' . $_SESSION['EMAIL'] . ' of the company ' . $_SESSION['FORM1'][0]['company_name'] . ' and country ' . $_SESSION['FORM2'][0]['country'] . ' have more than five shipping address, please contact him.'; 
      $cuerpo .='</div>';
      $cuerpo .='</body></html>';
      //cabecera
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      //dirección del remitente
      $headers .= "From: form KYC Maaji<noreply@maaji.co>\r\n";
      //Enviamos el mensaje a tu_dirección_email
      mail($destinatario,$asunto,$cuerpo,$headers);
    }
    
                
      $this->mdlDirecciones->actualizarDatosForm2();
    
      echo 1;
    
      sleep(3);    

    }

  }


  public function actualizacionDatosForm3()
  {

    if(isset($_SESSION['SESION_INICIADA']) &&
       $_SESSION['SESION_INICIADA'] == true)
    {
      sleep(2);

      /* Acá envío valores de los campos para actualizar en base de datos si hubo cambios
      en el formulario # 3*/
      $this->mdlBuyers->__SET('currency', $_POST['currency']);
      $this->mdlBuyers->__SET('bankName', ucwords($_POST['bankname']));
      $this->mdlBuyers->__SET('branch', ucwords($_POST['branch']));
      $this->mdlBuyers->__SET('accountNumber', $_POST['accountnumber']);
      $this->mdlBuyers->__SET('paymentType', $_POST['paymenttype']);

      if ($_POST['paymenttype'] == "other")
      {
        $this->mdlBuyers->__SET('whichOne', $_POST['others']);
      }
      else
      {
        $this->mdlBuyers->__SET('whichOne', "");
      }

      if (isset($_POST['creditTerms']) && $_POST['creditTerms'] == "on")
       {
         $accept = "Aceptado";
      }
      else
      {
        $accept = "No aceptado";
      }

      $this->mdlBuyers->__SET('creditTerms', $accept);
      $this->mdlBuyers->__SET('quantityBuyers', $_POST['buyercontactsquantity']);
      
      
        if($_POST['buyercontactsquantity'] == "mas-5")
      {
        $destinatario = "jmontoya@maaji.co, jvargasp@maaji.co, svanegas@maaji.co, dvillada@maaji.co";
        //  $destinatario = "davidvargas.jdvp@gmail.com";
            //Titulo
        $asunto = "MAAJI KYC BUYER CONTACT";
        
        $cuerpo = "";
        $cuerpo = '
        <html>
        <head>
        <title>CONFIRMATION - NO REPLY</title>
        </head>
         <body background="';
        $cuerpo .= URL;
        $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
        $cuerpo .= '<h4 style="font-weigth: 600;">Hello ' . $destinatario . '</h4>';
        $cuerpo .= '<div style="font-size: 20px;> The user with email: ' . $_SESSION['EMAIL'] . ' of the company ' . $_SESSION['FORM1'][0]['company_name'] . ' and country ' . $_SESSION['FORM2'][0]['country'] . ' have more than five buyers contacts, please contact him.'; 
      $cuerpo .='</div>';
      $cuerpo .='</body></html>';
      //cabecera
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      //dirección del remitente
      $headers .= "From: form KYC Maaji<noreply@maaji.co>\r\n";
      //Enviamos el mensaje a tu_dirección_email
      mail($destinatario,$asunto,$cuerpo,$headers);
    }
      
      $this->mdlBuyers->__SET('logisticContactName', $_POST['logisticcontactname']);
      $this->mdlBuyers->__SET('logisticContactPhone', $_POST['logisticcontactphone']);
      $this->mdlBuyers->__SET('logisticContactEmail', $_POST['logisticcontactemail']);
      $this->mdlBuyers->__SET('accountsPayableName', $_POST['accountspayablename']);
      $this->mdlBuyers->__SET('accountsPayablePhone', $_POST['payablephone']);
      $this->mdlBuyers->__SET('accountsPayableEmail', $_POST['payableEmail']);
      $this->mdlBuyers->__SET('reference1Name', ucwords($_POST['reference1name']));
      $this->mdlBuyers->__SET('phoneReference1', $_POST['phonereference1']);
      $this->mdlBuyers->__SET('emailReference1', $_POST['emailreference1']);
      $this->mdlBuyers->__SET('reference2Name', ucwords($_POST['reference2name']));
      $this->mdlBuyers->__SET('phoneReference2', $_POST['phonereference2']);
      $this->mdlBuyers->__SET('emailReference2', $_POST['emailreference2']);
      $this->mdlBuyers->__SET('reference3Name', ucwords($_POST['reference3name']));
      $this->mdlBuyers->__SET('phoneReference3', $_POST['phonereference3']);
      $this->mdlBuyers->__SET('emailReference3', $_POST['emailreference3']);
      $this->mdlBuyers->__SET('idBuyers', (int)$_POST['idbuyer']);

      $date = date("Y-m-d H:i:s");//Formato hora para año/mes/día Hora:munutos:segundos

      $this->mdlBuyers->__SET('dateUpdated', $date);

      $this->mdlBuyers->actualizarDatosForm3();

      echo 1;

      sleep(3);
    }

  }

  public function actualizacionDatosForm4()
  {
    sleep(5);

    if (isset($_POST['lines']) && $_POST['lines'] != NULL)
    {
      $archivo1 = strtolower($_FILES["certificateexistence"]['name']);
      $archivo2 = strtolower($_FILES["taxcertificate"]['name']);
      $archivo3 = strtolower($_FILES["checkspecimen"]['name']);
      $archivo4 = strtolower($_FILES["legalrepresentative"]['name']);

    //Validamos que los archivos existan
    if($archivo1 && $archivo2 && $archivo3 && $archivo4)
    {
      if(isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
      {
        $archivo5 = strtolower($_FILES["resalercertificate"]['name']);
        $ext5 = explode(".", $archivo5);
        $extension5 = end($ext5);
      }

      $validacionArchivos = "";

      $ext1 = explode(".", $archivo1);
      $ext2 = explode(".", $archivo2);
      $ext3 = explode(".", $archivo3);
      $ext4 = explode(".", $archivo4);
      $extension1 = end($ext1);
      $extension2 = end($ext2);
      $extension3 = end($ext3);
      $extension4 = end($ext4);

      //Validación tipo archivo1
      if ($_FILES['certificateexistence']['type'] == "image/jpeg" || $_FILES['certificateexistence']['type'] == "image/JPEG")
      {
          $nameFile1 = str_replace(".jpg", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      elseif($_FILES['certificateexistence']['type'] == "application/pdf")
      {
        $nameFile1 = str_replace(".pdf", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      else
      {
        $nameFile1 = str_replace(".png", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      //Validación tipo archivo2
      if ($_FILES['taxcertificate']['type'] == "image/jpeg" || $_FILES['taxcertificate']['type'] == "image/JPEG")
      {
          $nameFile2 = str_replace(".jpg", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      elseif($_FILES['taxcertificate']['type'] == "application/pdf")
      {
        $nameFile2 = str_replace(".pdf", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      else
      {
        $nameFile2 = str_replace(".png", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      //Validación tipo archivo3
      if ($_FILES['checkspecimen']['type'] == "image/jpeg" || $_FILES['checkspecimen']['type'] == "image/JPEG")
      {
          $nameFile3 = str_replace(".jpg", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      elseif($_FILES['checkspecimen']['type'] == "application/pdf")
      {
        $nameFile3 = str_replace(".pdf", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      else
      {
        $nameFile3 = str_replace(".png", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      //Validación tipo archivo4
      if ($_FILES['legalrepresentative']['type'] == "image/jpeg"  || $_FILES['legalrepresentative']['type'] == "image/JPEG")
      {
          $nameFile4 = str_replace(".jpg", "", $archivo4) . "_legalID." . $extension4;
      }

      elseif($_FILES['legalrepresentative']['type'] == "application/pdf")
      {
        $nameFile4 = str_replace(".pdf", "", $archivo4) . "_legalID." . $extension4;
      }

      else
      {
        $nameFile4 = str_replace(".png", "", $archivo4) . "_legalID." . $extension4;
      }

      //Validamos si existe el archivo 5
      if (isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
      {
        //Validación tipo archivo5
        if ($_FILES['resalercertificate']['type'] == "image/jpeg"  || $_FILES['resalercertificate']['type'] == "image/JPEG")
        {
            $nameFile5 = str_replace(".jpg", "", $archivo5) . "_resSalerCertificate." . $extension5;
        }

        elseif($_FILES['resalercertificate']['type'] == "application/pdf")
        {
          $nameFile5 = str_replace(".pdf", "", $archivo5) . "_resSalerCertificate." . $extension5;
        }

        else
        {
          $nameFile5 = str_replace(".png", "", $archivo5) . "_resSalerCertificate." . $extension5;
        }

        $source5 = $_FILES["resalercertificate"]["tmp_name"];

      }

      //Obtenemos un nombre temporal del archivo
      $source1 = $_FILES["certificateexistence"]["tmp_name"];
      $source2 = $_FILES["taxcertificate"]["tmp_name"];
      $source3 = $_FILES["checkspecimen"]["tmp_name"];
      $source4 = $_FILES["legalrepresentative"]["tmp_name"];

      $user = $_SESSION['EMAIL'] . '/';

      //Declaramos un  variable con la ruta donde guardaremos los archivos
       $directorio = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user;
    //   $directorio = 'C:/xampp/htdocs/formKYC/public/documents/' . $user;

      //Validamos si la ruta de destino existe, en caso de no existir la creamos
      if(!file_exists($directorio)){
        mkdir($directorio, 0777) or die("No fue posible crear el directorio");
      }

      //Abrimos el directorio de destino
      $dir = opendir($directorio);

      //Indicamos la ruta de destino, así como el nombre del archivo
      $target_path1 = $directorio.'/'.$nameFile1;
      $target_path2 = $directorio.'/'.$nameFile2;
      $target_path3 = $directorio.'/'.$nameFile3;
      $target_path4 = $directorio.'/'.$nameFile4;

      if (isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
      {
        $target_path5 = $directorio.'/'.$nameFile5;
      }

      //Indicamos la extensión del archivo permitida
      $permitidos = array(
                          "application/pdf",
                          "image/jpeg",
                          "image/JPEG",
                          "image/jpg",
                          "image/JPG",
                          "image/png",
                          "image/PNG"
                         );

      //Acá especificamos un tamaño válido de 5 MB
      $limite_kb = 5000;

      //Archivo 1
      if ($_FILES['certificateexistence']['type'] == "image/jpeg" ||
          $_FILES['certificateexistence']['type'] == "image/JPEG")
      {
          $name1 = str_replace(".jpeg", "", $nameFile1);
      }

      elseif ($_FILES['certificateexistence']['type'] == "image/jpg" ||
              $_FILES['certificateexistence']['type'] == "image/JPG")
      {
        $name1 = str_replace(".jpg", "", $nameFile1);
      }

      elseif($_FILES['certificateexistence']['type'] == "application/pdf")
      {
        $name1 = str_replace(".pdf", "", $nameFile1);
      }

      elseif ($_FILES['certificateexistence']['type'] == "image/PNG")
      {
        $name1 = str_replace(".PNG", "", $nameFile1);
      }

      else
      {
        $name1 = str_replace(".png", "", $nameFile1);
      }

      //Archivo 2
      if ($_FILES['taxcertificate']['type'] == "image/jpeg" ||
          $_FILES['taxcertificate']['type'] == "image/JPEG")
      {
        $name2 = str_replace(".jpeg", "", $nameFile2);
      }

      elseif ($_FILES['taxcertificate']['type'] == "image/jpg" ||
          $_FILES['taxcertificate']['type'] == "image/JPG")
      {
        $name2 = str_replace(".jpg", "", $nameFile2);
      }

      elseif($_FILES['taxcertificate']['type'] == "application/pdf")
      {
        $name2 = str_replace(".pdf", "", $nameFile2);
      }

      elseif ($_FILES['taxcertificate']['type'] == "image/PNG" )
      {
        $name2 = str_replace(".PNG", "", $nameFile2);
      }

      else
      {
        $name2 = str_replace(".png", "", $nameFile2);
      }

      //Archivo 3
      if ($_FILES['checkspecimen']['type'] == "image/jpeg" ||
          $_FILES['checkspecimen']['type'] == "image/JPEG")
      {
        $name3 = str_replace(".jpeg", "", $nameFile3);
      }

      if ($_FILES['checkspecimen']['type'] == "image/jpg" ||
          $_FILES['checkspecimen']['type'] == "image/JPG")
      {
        $name3 = str_replace(".jpg", "", $nameFile3);
      }

      elseif($_FILES['checkspecimen']['type'] == "application/pdf")
      {
        $name3 = str_replace(".pdf", "", $nameFile3);
      }

      elseif($_FILES['checkspecimen']['type'] == "image/PNG")
      {
        $name3 = str_replace(".PNG", "", $nameFile3);
      }

      else
      {
        $name3 = str_replace(".png", "", $nameFile3);
      }

      //Archivo 4
      if ($_FILES['legalrepresentative']['type'] == "image/jpeg" ||
          $_FILES['legalrepresentative']['type'] == "image/JPEG")
      {
          $name4 = str_replace(".jpeg", "", $nameFile4);
      }

      elseif ($_FILES['legalrepresentative']['type'] == "image/jpg" ||
              $_FILES['legalrepresentative']['type'] == "image/JPG")
      {
          $name4 = str_replace(".jpg", "", $nameFile4);
      }

      elseif($_FILES['legalrepresentative']['type'] == "application/pdf")
      {
          $name4 = str_replace(".pdf", "", $nameFile4);
      }

      elseif ($_FILES['legalrepresentative']['type'] == "image/PNG")
      {
        $name4 = str_replace(".png", "", $nameFile4);
      }

      else
      {
          $name4 = str_replace(".png", "", $nameFile4);
      }

      if (isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
      {
        //Archivo 5
        if ($_FILES['resalercertificate']['type'] == "image/jpeg" ||
            $_FILES['resalercertificate']['type'] == "image/JPEG")
        {
            $name5 = str_replace(".jpeg", "", $nameFile5);
        }

        elseif ($_FILES['resalercertificate']['type'] == "image/jpg" ||
                $_FILES['resalercertificate']['type'] == "image/JPG")
        {
            $name5 = str_replace(".jpg", "", $nameFile5);
        }

        elseif($_FILES['resalercertificate']['type'] == "application/pdf")
        {
            $name5 = str_replace(".pdf", "", $nameFile5);
        }

        elseif ($_FILES['resalercertificate']['type'] == "image/PNG")
        {
          $name5 = str_replace(".png", "", $nameFile5);
        }

        else
        {
            $name5 = str_replace(".png", "", $nameFile5);
        }

        // $file5 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name5 . '.' . $extension5;
        $file5 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name5 . '.' . $extension5;

      }

      //obtenemos todos los nombres de los ficheros
       $file1 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name1 . '.' . $extension1;
       $file2 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name2 . '.' . $extension2;
       $file3 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name3 . '.' . $extension3;
       $file4 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name4 . '.' . $extension4;
    //   $file1 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name1 . '.' . $extension1;
    //   $file2 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name2 . '.' . $extension2;
    //   $file3 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name3 . '.' . $extension3;
    //   $file4 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name4 . '.' . $extension4;

        if(is_file($file1) && is_file($file2) && is_file($file3) && is_file($file4))
        {
          unlink($file1); //elimino el fichero1
          unlink($file2); //elimino el fichero2
          unlink($file3); //elimino el fichero3
          unlink($file4); //elimino el fichero4

          if(isset($file5) && is_file($file5))
          {
            unlink($file5); //elimino el fichero5
          }
        }

        if(in_array($_FILES['certificateexistence']['type'], $permitidos) &&
           in_array($_FILES['taxcertificate']['type'], $permitidos) &&
           in_array($_FILES['checkspecimen']['type'], $permitidos) &&
           in_array($_FILES['legalrepresentative']['type'], $permitidos) ||
           (isset($_FILES['resalercertificate']) && in_array($_FILES['resalercertificate']['type'], $permitidos)) &&
           ($_FILES['certificateexistence']['size'] <= $limite_kb * 1024) &&
           ($_FILES['taxcertificate']['size'] <= $limite_kb * 1024) &&
           ($_FILES['checkspecimen']['size'] <= $limite_kb * 1024) &&
           ($_FILES['legalrepresentative']['size'] <= $limite_kb * 1024) ||
           (isset($_FILES['resalercertificate']) && $_FILES['resalercertificate']['size'] <= $limite_kb * 1024))
        {
           $ruta1 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/'. $user . $nameFile1;
           $ruta2 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/'. $user . $nameFile2;
           $ruta3 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/'. $user . $nameFile3;
           $ruta4 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/'. $user . $nameFile4;
        //   $ruta1 = 'C:/xampp/htdocs/formKYC/public/documents/'. $user . $nameFile1;
        //   $ruta2 = 'C:/xampp/htdocs/formKYC/public/documents/'. $user . $nameFile2;
        //   $ruta3 = 'C:/xampp/htdocs/formKYC/public/documents/'. $user . $nameFile3;
        //   $ruta4 = 'C:/xampp/htdocs/formKYC/public/documents/'. $user . $nameFile4;

          if (isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
          {
            // $ruta5 = 'C:/xampp/htdocs/formKYC/public/documents/'. $user . $nameFile5;
            $ruta5 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/'. $user . $nameFile5;
            $resultado5 = move_uploaded_file($_FILES['resalercertificate']['tmp_name'], $ruta5);
          }

          $resultado1 = move_uploaded_file($_FILES['certificateexistence']['tmp_name'], $ruta1);
          $resultado2 = move_uploaded_file($_FILES['taxcertificate']['tmp_name'], $ruta2);
          $resultado3 = move_uploaded_file($_FILES['checkspecimen']['tmp_name'], $ruta3);
          $resultado4 = move_uploaded_file($_FILES['legalrepresentative']['tmp_name'], $ruta4);

  				// echo "cargaarchivoscorrecta";
          $validacionArchivos = true;
  			}
        else
        {
          //obtenemos todos los nombres de los ficheros
           $file1 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name1 . '.' . $extension1;
           $file2 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name2 . '.' . $extension2;
           $file3 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name3 . '.' . $extension3;
           $file4 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name4 . '.' . $extension4;
        //   $file1 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name1 . '.' . $extension1;
        //   $file2 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name2 . '.' . $extension2;
        //   $file3 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name3 . '.' . $extension3;
        //   $file4 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name4 . '.' . $extension4;

          if (isset($_FILES["resalercertificate"]) && $_FILES["resalercertificate"] != NULL)
          {
            // $file5 = 'C:/xampp/htdocs/formKYC/public/documents/' . $user . $name5 . '.' . $extension5;
            $file5 = '/home/u775486835/domains/maajiness.com/public_html/formKYC/public/documents/' . $user . $name5 . '.' . $extension5;
          }


            if(!in_array($_FILES['certificateexistence']['type'], $permitidos) &&
                 !in_array($_FILES['taxcertificate']['type'], $permitidos) &&
                 !in_array($_FILES['checkspecimen']['type'], $permitidos) &&
                 !in_array($_FILES['legalrepresentative']['type'], $permitidos) ||
                 (isset($_FILES['resalercertificate']) && !in_array($_FILES['resalercertificate']['type'], $permitidos)) &&
                 !($_FILES['certificateexistence']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['taxcertificate']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['checkspecimen']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['legalrepresentative']['size'] <= $limite_kb * 1024) ||
                 (isset($_FILES['resalercertificate']) && !$_FILES['resalercertificate']['size'] <= $limite_kb * 1024))
            {
              unlink($file1); //elimino el fichero1
              unlink($file2); //elimino el fichero2
              unlink($file3); //elimino el fichero3
              unlink($file4); //elimino el fichero4

              if (isset($file5))
              {
                unlink($file5); //elimino el fichero5
              }
              echo "errorarchivos";
              exit;
            }
              $validacionArchivos = false;
        }

      }

      if (isset($validacionArchivos) && $validacionArchivos == true)
      {

      $dataForm4 = array($_POST);

      $lines = $_POST['lines'];

      foreach ($dataForm4 as $value3)
      {
        $this->mdlBusiness->__SET('currencyAnualSalesFigures', $value3['currencyAnualFigures']);
        $this->mdlBusiness->__SET('figures', $value3['figures']);
        $this->mdlBusiness->__SET('linesBusiness', implode(",", $lines));
        $this->mdlBusiness->__SET('typeBusiness', $value3['typebusiness']);
        $this->mdlBusiness->__SET('marketPotentialBrand', ucwords($value3['potentialbrand']));

        if($value3['typebusiness'] != "ONLINE")
          {
            $this->mdlBusiness->__SET('webSite', "");
          }
          else
          {
            $this->mdlBusiness->__SET('webSite', "http://".$value3['website']);
          }

        $this->mdlBusiness->__SET('bisnessLocations', $value3['storelocations']);
        
    if($value3['storelocations'] == "mas-5")
      {
         $destinatario = "jmontoya@maaji.co, jvargasp@maaji.co, svanegas@maaji.co, dvillada@maaji.co";
        //  $destinatario = "davidvargas.jdvp@gmail.com";
            //Titulo
        $asunto = "MAAJI KYC RETAIL STORE LOCATION";
        
        $cuerpo = "";
        $cuerpo = '
        <html>
        <head>
        <title>CONFIRMATION - NO REPLY</title>
        </head>
        <body background="';
        $cuerpo .= URL;
        $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
        $cuerpo .= '<h4 style="font-weigth: 600;">Hello ' . $destinatario . '</h4>';
        $cuerpo .= '<div style="font-size: 20px;> The user with email: ' . $_SESSION['EMAIL'] . ' of the company ' . $_SESSION['FORM1'][0]['company_name'] . ' and country ' . $_SESSION['FORM2'][0]['country'] . ' have more than five retail store location,  please contact him.'; 
      $cuerpo .='</div>';
      $cuerpo .='</body></html>';
      //cabecera
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      //dirección del remitente
      $headers .= "From: form KYC Maaji<noreply@maaji.co>\r\n";
      //Enviamos el mensaje a tu_dirección_email
      mail($destinatario,$asunto,$cuerpo,$headers);
    }
        
        $this->mdlBusiness->__SET('certificateOfExistence', $archivo1);
        $this->mdlBusiness->__SET('taxCertificate', $archivo2);
        $this->mdlBusiness->__SET('legalID', $archivo3);
        $this->mdlBusiness->__SET('checkSpecimen', $archivo4);

        if (isset($archivo5) && $archivo4 != NULL)
        {
          $this->mdlBusiness->__SET('resalerCertificate', $archivo5);
        }
        else
        {
          $this->mdlBusiness->__SET('resalerCertificate', "");
        }

        $date = date("Y-m-d H:i:s");
        $this->mdlBusiness->__SET('dateUpdated', $date);
        $this->mdlBusiness->__SET('idBusiness', (int)$value3['idbusiness']);


        $this->mdlBusiness->actualizarInfoForm4();
        

         $destinatario = $_SESSION['EMAIL'];
        //  $destinatario = "jvargasp@maaji.co";
            //Titulo
        $asunto = "MAAJI KYC CONFIRMATION";
        
        $cuerpo = "";
        $cuerpo = '
        <html>
        <head>
        <title>CONFIRMATION - NO REPLY</title>
        </head>
        <body background="';
        $cuerpo .= URL;
        $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
        $cuerpo .= '<h4 style="font-weigth: 600;">Hello ' . $destinatario . '</h4>';
        $cuerpo .= '<div style="font-size: 20px;> Welcome to the land of <strong>MAAJINESS</strong>, now you are part of our family!'; 
      $cuerpo .='</div>';
      $cuerpo .='</body></html>';
      //cabecera
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      //dirección del remitente
      $headers .= "From: form KYC Maaji<noreply@maaji.co>\r\n";
      //Enviamos el mensaje a tu_dirección_email
      mail($destinatario,$asunto,$cuerpo,$headers);
      
      
      //Acá enviamos correo a la persona designada de CX
     //informando que el cliente ya quedo registrado en la base de datos.
        $destinatario = "jmontoya@maaji.co, jvargasp@maaji.co, svanegas@maaji.co, dvillada@maaji.co";
        //  $destinatario = "davidvargas.jdvp@gmail.com";
            //Titulo
        $asunto = "MAAJI KYC NEW CUSTOMER";
        
        $cuerpo = "";
        $cuerpo = '
        <html>
        <head>
        <title>CONFIRMATION - NO REPLY</title>
        </head>
        <body background="';
        $cuerpo .= URL;
        $cuerpo .= 'img/logo/fondo.png" style="background-size: cover">';
        $cuerpo .= '<h4 style="font-weigth: 600;">Hello ' . $destinatario . '</h4>';
        $cuerpo .= '<div style="font-size: 20px;> The user with email: ' . $_SESSION['EMAIL'] . ' of the company ' . $_SESSION['FORM1'][0]['company_name'] . ' and country ' . $_SESSION['FORM2'][0]['country'] . ' been registered correctly in our database, please contact him. <br/> Thanks'; 
      $cuerpo .='</div>';
      $cuerpo .='</body></html>';
      //cabecera
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      //dirección del remitente
      $headers .= "From: form KYC Maaji<noreply@maaji.co>\r\n";
      //Enviamos el mensaje a tu_dirección_email
      mail($destinatario,$asunto,$cuerpo,$headers);

        echo 1;

        sleep(2);
      }
    }
    else
    {
      echo 2;
    }
  }
    else
    {
      header("Location: " . URL . "home/index4");
    }

  }

  public function actualizarForm4StoresL()
  {

    sleep(2);

    $dataForm2 = array($_POST);

    foreach ($dataForm2 as $value2)
    {
      $ultimoIdB = $this->mdlBusiness->consultarUltimoIdBusiness();

      foreach ($ultimoIdB as $id)
      {
        $this->mdlBusinessL->__SET('idBusiness', $id['id']);
      }

      $this->mdlBusinessL->__SET('Country1', $value2['countrystore1']);
      $this->mdlBusinessL->__SET('State1', $value2['statestore1']);
      $this->mdlBusinessL->__SET('City1', $value2['citystoreretail1']);
      $this->mdlBusinessL->__SET('Address1', $value2['addressstore1']);
      $this->mdlBusinessL->__SET('storeName1', $value2['storenameretail1']);
      $this->mdlBusinessL->__SET('ZipCode1', $value2['zipcodestore1']);
      $this->mdlBusinessL->__SET('Country2', $value2['countrystore2']);
      $this->mdlBusinessL->__SET('State2', $value2['statestore2']);
      $this->mdlBusinessL->__SET('City2', $value2['citystoreretail2']);
      $this->mdlBusinessL->__SET('Address2', $value2['addresstore2']);
      $this->mdlBusinessL->__SET('storeName2', $value2['storenameretail2']);
      $this->mdlBusinessL->__SET('ZipCode2', $value2['zipcodestore2']);
      $this->mdlBusinessL->__SET('Country3', $value2['countrystore3']);
      $this->mdlBusinessL->__SET('State3', $value2['statestore3']);
      $this->mdlBusinessL->__SET('City3', $value2['citystoreretail3']);
      $this->mdlBusinessL->__SET('Address3', $value2['addressstore3']);
      $this->mdlBusinessL->__SET('storeName3', $value2['addressstore3']);
      $this->mdlBusinessL->__SET('ZipCode3', $value2['zipcodestore3']);
      $this->mdlBusinessL->__SET('Country4', $value2['countrystore4']);
      $this->mdlBusinessL->__SET('State4', $value2['statestore4']);
      $this->mdlBusinessL->__SET('City4', $value2['citystore4']);
      $this->mdlBusinessL->__SET('storeName4', $value2['storenameretail4']);
      $this->mdlBusinessL->__SET('Address4', $value2['addresstore4']);
      $this->mdlBusinessL->__SET('ZipCode4', $value2['zipcodestore4']);
      $this->mdlBusinessL->__SET('Contry5', $value2['countrystore5']);
      $this->mdlBusinessL->__SET('State5', $value2['statesore5']);
      $this->mdlBusinessL->__SET('City5', $value2['citystore5']);
      $this->mdlBusinessL->__SET('storeName5', $value2['storenameretail5']);
      $this->mdlBusinessL->__SET('Address5', $value2['addresstore5']);
      $this->mdlBusinessL->__SET('ZipCode5', $value2['zipcodestore5']);

      $date = date("Y-m-d H:i:s");
      $this->mdlBusinessL->__SET('dateUpdated', $date);

      $this->mdlBusinessL->actualizarInfoForm4StoresL();

      sleep(4);

      echo 1;
    }

  }

}
?>
