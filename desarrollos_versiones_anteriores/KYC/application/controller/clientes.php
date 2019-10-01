<?php

class Clientes extends Controller
{
  private $mdlClientes;
  private $mdlDirecciones;
  private $mdlDireccionesC;
  private $mdlBuyers;
  private $mdlBusiness;
  private $mdlBusinessL;

  public function __construct()
  {
    $this->mdlClientes = $this->LoadModel('mdlClientes');
    $this->mdlDirecciones = $this->LoadModel('mdlDirecciones');
    $this->mdlDireccionesC = $this->LoadModel('mdlDireccionesCompra');
    $this->mdlBuyers = $this->LoadModel('mdlBuyers');
    $this->mdlBusiness = $this->LoadModel('mdlBusiness');
    $this->mdlBusinessL = $this->LoadModel('mdlBusinessLocations');
  }

  public function form2()
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
      $this->mdlClientes->__SET('website', "http://" . $value['website']);
      $this->mdlClientes->__SET('address', ucwords($value['address']));
      $this->mdlClientes->__SET('city', ucwords($value['city']));
      $this->mdlClientes->__SET('state', ucwords($value['state']));
      $this->mdlClientes->__SET('country', ucwords($value['country']));
      $this->mdlClientes->__SET('zipcode', $value['zipcode']);
      $this->mdlClientes->__SET('facebook', $value['face']);
      $this->mdlClientes->__SET('instagram', $value['instagram']);
      $this->mdlClientes->__SET('twitter', $value['twitter']);
      $this->mdlClientes->__SET('userName', (int)$_SESSION['USUARIO_ID']);

      $this->mdlClientes->guardarInfoForm1();

      echo 1;
    }

  }

  public function form3()
  {

    sleep(5);

    $dataForm2 = array($_POST);

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

      if( $value2['shippingcountry1'] != "" && $value2['state1'] != "" &&
          $value2['city1'] != "" && $value2['dirbusiness1'] != "" &&
          $value2['storename1'] != "" && $value2['zipcode1'] != "" &&
          $value2['country02'] == "" && $value2['state02'] == "" &&
          $value2['city02'] == "" && $value2['dirbusiness2'] == "" &&
          $value2['storename2'] == "" && $value2['zipcode2'] == "" &&
          $value2['shippingcountry3'] == "" && $value2['state3'] == "" &&
          $value2['city3'] == "" && $value2['dirbusiness3'] == "" &&
          $value2['storename3'] == "" && $value2['zipcode3'] == "" &&
          $value2['country04'] == "" && $value2['state4'] == "" &&
          $value2['city4'] == "" && $value2['dirbusiness4'] == "" &&
          $value2['storename4'] == "" && $value2['zipcode4'] == "" &&
          $value2['country5'] == "" && $value2['state5'] == "" &&
          $value2['city5'] == "" && $value2['dirbusiness5'] == "" &&
          $value2['storename5'] == "" && $value2['zipcode5'] == "")
      {
        $this->mdlDirecciones->__SET('bisnessLocations', 1);
      }

      if ($value2['shippingcountry1'] != "" && $value2['state1'] != "" &&
              $value2['city1'] != "" && $value2['dirbusiness1'] != "" &&
              $value2['storename1'] != "" && $value2['zipcode1'] != "" &&
              $value2['country02'] != "" && $value2['state02'] != "" &&
              $value2['city02'] != "" && $value2['dirbusiness2'] != "" &&
              $value2['storename2'] != "" && $value2['zipcode2'] != "")
      {
        $this->mdlDirecciones->__SET('bisnessLocations', 2);
      }

      if ($value2['shippingcountry1'] != "" && $value2['state1'] != "" &&
                $value2['city1'] != "" && $value2['dirbusiness1'] != "" &&
                $value2['storename1'] != "" && $value2['zipcode1'] != "" &&
                $value2['country02'] != "" && $value2['state02'] != "" &&
                $value2['city02'] != "" && $value2['dirbusiness2'] != "" &&
                $value2['storename2'] != "" && $value2['zipcode2'] != "" &&
                $value2['shippingcountry3'] != "" && $value2['state3'] != "" &&
                $value2['city3'] != "" && $value2['dirbusiness3'] != "" &&
                $value2['storename3'] != "" && $value2['zipcode3'] != "")
      {
        $this->mdlDirecciones->__SET('bisnessLocations', 3);
      }

      if ($value2['shippingcountry1'] != "" && $value2['state1'] != "" &&
              $value2['city1'] != "" && $value2['dirbusiness1'] != "" &&
              $value2['storename1'] != "" && $value2['zipcode1'] != "" &&
              $value2['country02'] != "" && $value2['state02'] != "" &&
              $value2['city02'] != "" && $value2['dirbusiness2'] != "" &&
              $value2['storename2'] != "" && $value2['zipcode2'] != "" &&
              $value2['shippingcountry3'] != "" && $value2['state3'] != "" &&
              $value2['city3'] != "" && $value2['dirbusiness3'] != "" &&
              $value2['storename3'] != "" && $value2['zipcode3'] != "" &&
              $value2['country04'] != "" && $value2['state4'] != "" &&
              $value2['city4'] != "" && $value2['dirbusiness4'] != "" &&
              $value2['storename4'] != "" && $value2['zipcode4'] != "")
      {
        $this->mdlDirecciones->__SET('bisnessLocations', 4);
      }

      if ($value2['shippingcountry1'] != "" && $value2['state1'] != "" &&
              $value2['city1'] != "" && $value2['dirbusiness1'] != "" &&
              $value2['storename1'] != "" && $value2['zipcode1'] != "" &&
              $value2['country02'] != "" && $value2['state02'] != "" &&
              $value2['city02'] != "" && $value2['dirbusiness2'] != "" &&
              $value2['storename2'] != "" && $value2['zipcode2'] != "" &&
              $value2['shippingcountry3'] != "" && $value2['state3'] != "" &&
              $value2['city3'] != "" && $value2['dirbusiness3'] != "" &&
              $value2['storename3'] != "" && $value2['zipcode3'] != "" &&
              $value2['country04'] != "" && $value2['state4'] != "" &&
              $value2['city4'] != "" && $value2['dirbusiness4'] != "" &&
              $value2['storename4'] != "" && $value2['zipcode4'] != "" &&
              $value2['country5'] != "" && $value2['state5'] != "" &&
              $value2['city5'] != "" && $value2['dirbusiness5'] != "" &&
              $value2['storename5'] != "" && $value2['zipcode5'] != "")
    {
      $this->mdlDirecciones->__SET('bisnessLocations', 5);
    }

      $this->mdlDirecciones->__SET('username', (int)$_SESSION['USUARIO_ID']);

      $this->mdlDirecciones->guardarInfoForm2();

      echo 1;
    }

  }

  public function actualizarForm3ShippingA()
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

      $this->mdlDireccionesC->__SET('Country1', $value2['shippingcountry1']);
      $this->mdlDireccionesC->__SET('State1', $value2['state1']);
      $this->mdlDireccionesC->__SET('City1', $value2['city1']);
      $this->mdlDireccionesC->__SET('Address1', $value2['dirbusiness1']);
      $this->mdlDireccionesC->__SET('storeName1', $value2['storename1']);
      $this->mdlDireccionesC->__SET('ZipCode1', $value2['zipcode1']);
      $this->mdlDireccionesC->__SET('Country2', $value2['country02']);
      $this->mdlDireccionesC->__SET('State2', $value2['state02']);
      $this->mdlDireccionesC->__SET('City2', $value2['city02']);
      $this->mdlDireccionesC->__SET('Address2', $value2['dirbusiness2']);
      $this->mdlDireccionesC->__SET('storeName2', $value2['storename2']);
      $this->mdlDireccionesC->__SET('ZipCode2', $value2['zipcode2']);
      $this->mdlDireccionesC->__SET('Country3', $value2['shippingcountry3']);
      $this->mdlDireccionesC->__SET('State3', $value2['state3']);
      $this->mdlDireccionesC->__SET('City3', $value2['city3']);
      $this->mdlDireccionesC->__SET('Address3', $value2['dirbusiness3']);
      $this->mdlDireccionesC->__SET('storeName3', $value2['storename3']);
      $this->mdlDireccionesC->__SET('ZipCode3', $value2['zipcode3']);
      $this->mdlDireccionesC->__SET('Country4', $value2['country04']);
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

      $date = strftime("%Y-%m-%d", time());
      $this->mdlDireccionesC->__SET('dateUpdated', $date);

      $this->mdlDireccionesC->actualizarDireccionC();

      echo 1;

      sleep(5);
    }

  }

  public function form3DireccionC()
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

      $this->mdlDireccionesC->__SET('Country1', $value2['shippingcountry1']);
      $this->mdlDireccionesC->__SET('State1', $value2['state1']);
      $this->mdlDireccionesC->__SET('City1', $value2['city1']);
      $this->mdlDireccionesC->__SET('Address1', $value2['dirbusiness1']);
      $this->mdlDireccionesC->__SET('storeName1', $value2['storename1']);
      $this->mdlDireccionesC->__SET('ZipCode1', $value2['zipcode1']);
      $this->mdlDireccionesC->__SET('Country2', $value2['country02']);
      $this->mdlDireccionesC->__SET('State2', $value2['state02']);
      $this->mdlDireccionesC->__SET('City2', $value2['city02']);
      $this->mdlDireccionesC->__SET('Address2', $value2['dirbusiness2']);
      $this->mdlDireccionesC->__SET('storeName2', $value2['storename2']);
      $this->mdlDireccionesC->__SET('ZipCode2', $value2['zipcode2']);
      $this->mdlDireccionesC->__SET('Country3', $value2['shippingcountry3']);
      $this->mdlDireccionesC->__SET('State3', $value2['state3']);
      $this->mdlDireccionesC->__SET('City3', $value2['city3']);
      $this->mdlDireccionesC->__SET('Address3', $value2['dirbusiness3']);
      $this->mdlDireccionesC->__SET('storeName3', $value2['storename3']);
      $this->mdlDireccionesC->__SET('ZipCode3', $value2['zipcode3']);
      $this->mdlDireccionesC->__SET('Country4', $value2['country04']);
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

      sleep(3);

      echo 1;
    }

  }

  public function form4()
  {

    sleep(5);

    $dataForm3 = array($_POST);

    foreach ($dataForm3 as $value3)
    {
      $this->mdlBuyers->__SET('currency', $value3['currency']);
      $this->mdlBuyers->__SET('bankName', ucwords($value3['bankname']));
      $this->mdlBuyers->__SET('branch', ucwords($value3['branch']));
      $this->mdlBuyers->__SET('accountNumber', $value3['accountnumber']);
      $this->mdlBuyers->__SET('paymentType', $value3['paymenttype']);

      if (isset($value3['creditTerms']) && $value3['creditTerms'] == "on")
       {
         $accept = "Aceptado";
      }
      else
      {
        $accept = "No aceptado";
      }

      $this->mdlBuyers->__SET('creditTerms', $accept);

      $this->mdlBuyers->__SET('reference1Name', ucwords($value3['reference1name']));
      $this->mdlBuyers->__SET('phoneReference1', $value3['phonereference1']);
      $this->mdlBuyers->__SET('emailReference1', $value3['emailreference1']);
      $this->mdlBuyers->__SET('reference2Name', ucwords($value3['reference2name']));
      $this->mdlBuyers->__SET('phoneReference2', $value3['phonereference2']);
      $this->mdlBuyers->__SET('emailReference2', $value3['emailreference2']);
      $this->mdlBuyers->__SET('reference3Name', ucwords($value3['reference3name']));
      $this->mdlBuyers->__SET('phoneReference3', $value3['phonereference3']);
      $this->mdlBuyers->__SET('emailReference3', $value3['emailreference3']);
      $this->mdlBuyers->__SET('buyerName', ucwords($value3['buyername']));
      $this->mdlBuyers->__SET('buyerPhone', $value3['buyerphone']);
      $this->mdlBuyers->__SET('buyerEmail', $value3['buyeremail']);
      $this->mdlBuyers->__SET('usernameBuyers', (int)$_SESSION['USUARIO_ID']);

      $this->mdlBuyers->guardarInfoForm3();

      echo 1;
    }

  }

  public function form5()
  {
    sleep(5);

    if (isset($_POST['lines']) && $_POST['lines'] != NULL)
    {
      $archivo1 = strtolower($_FILES["file1"]['name']);
      $archivo2 = strtolower($_FILES["file2"]['name']);
      $archivo3 = strtolower($_FILES["file3"]['name']);
      $archivo4 = strtolower($_FILES["file4"]['name']);

    //Validamos que los archivos existan
    if($archivo1 && $archivo2 && $archivo3 && $archivo4)
    {
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
      if ($_FILES['file1']['type'] == "image/jpeg" || $_FILES['file1']['type'] == "image/JPEG")
      {
          $nameFile1 = str_replace(".jpg", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      elseif($_FILES['file1']['type'] == "application/pdf")
      {
        $nameFile1 = str_replace(".pdf", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      else
      {
        $nameFile1 = str_replace(".png", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      //Validación tipo archivo2
      if ($_FILES['file2']['type'] == "image/jpeg" || $_FILES['file1']['type'] == "image/JPEG")
      {
          $nameFile2 = str_replace(".jpg", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      elseif($_FILES['file2']['type'] == "application/pdf")
      {
        $nameFile2 = str_replace(".pdf", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      else
      {
        $nameFile2 = str_replace(".png", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      //Validación tipo archivo3
      if ($_FILES['file3']['type'] == "image/jpeg" || $_FILES['file1']['type'] == "image/JPEG")
      {
          $nameFile3 = str_replace(".jpg", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      elseif($_FILES['file3']['type'] == "application/pdf")
      {
        $nameFile3 = str_replace(".pdf", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      else
      {
        $nameFile3 = str_replace(".png", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      //Validación tipo archivo4
      if ($_FILES['file4']['type'] == "image/jpeg"  || $_FILES['file1']['type'] == "image/JPEG")
      {
          $nameFile4 = str_replace(".jpg", "", $archivo4) . "_legalID." . $extension4;
      }

      elseif($_FILES['file4']['type'] == "application/pdf")
      {
        $nameFile4 = str_replace(".pdf", "", $archivo4) . "_legalID." . $extension4;
      }

      else
      {
        $nameFile4 = str_replace(".png", "", $archivo4) . "_legalID." . $extension4;
      }

      //Obtenemos un nombre temporal del archivo
      $source1 = $_FILES["file1"]["tmp_name"];
      $source2 = $_FILES["file2"]["tmp_name"];
      $source3 = $_FILES["file3"]["tmp_name"];
      $source4 = $_FILES["file4"]["tmp_name"];

      $user = $_SESSION['EMAIL'] . '/';

      //Declaramos un  variable con la ruta donde guardaremos los archivos
      $directorio = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user;

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
      if ($_FILES['file1']['type'] == "image/jpeg" ||
          $_FILES['file1']['type'] == "image/JPEG")
      {
          $name1 = str_replace(".jpeg", "", $nameFile1);
      }

      elseif ($_FILES['file1']['type'] == "image/jpg" ||
              $_FILES['file1']['type'] == "image/JPG")
      {
        $name1 = str_replace(".jpg", "", $nameFile1);
      }

      elseif($_FILES['file1']['type'] == "application/pdf")
      {
        $name1 = str_replace(".pdf", "", $nameFile1);
      }

      elseif ($_FILES['file1']['type'] == "image/PNG")
      {
        $name1 = str_replace(".PNG", "", $nameFile1);
      }

      else
      {
        $name1 = str_replace(".png", "", $nameFile1);
      }

      //Archivo 2
      if ($_FILES['file2']['type'] == "image/jpeg" ||
          $_FILES['file2']['type'] == "image/JPEG")
      {
        $name2 = str_replace(".jpeg", "", $nameFile2);
      }

      elseif ($_FILES['file2']['type'] == "image/jpg" ||
          $_FILES['file2']['type'] == "image/JPG")
      {
        $name2 = str_replace(".jpg", "", $nameFile2);
      }

      elseif($_FILES['file2']['type'] == "application/pdf")
      {
        $name2 = str_replace(".pdf", "", $nameFile2);
      }

      elseif ($_FILES['file2']['type'] == "image/PNG" )
      {
        $name2 = str_replace(".PNG", "", $nameFile2);
      }

      else
      {
        $name2 = str_replace(".png", "", $nameFile2);
      }

      //Archivo 3
      if ($_FILES['file3']['type'] == "image/jpeg" ||
          $_FILES['file3']['type'] == "image/JPEG")
      {
        $name3 = str_replace(".jpeg", "", $nameFile3);
      }

      if ($_FILES['file3']['type'] == "image/jpg" ||
          $_FILES['file3']['type'] == "image/JPG")
      {
        $name3 = str_replace(".jpg", "", $nameFile3);
      }

      elseif($_FILES['file3']['type'] == "application/pdf")
      {
        $name3 = str_replace(".pdf", "", $nameFile3);
      }

      elseif($_FILES['file3']['type'] == "image/PNG")
      {
        $name3 = str_replace(".PNG", "", $nameFile3);
      }

      else
      {
        $name3 = str_replace(".png", "", $nameFile3);
      }

      //Archivo 4
      if ($_FILES['file4']['type'] == "image/jpeg" ||
          $_FILES['file4']['type'] == "image/JPEG")
      {
          $name4 = str_replace(".jpeg", "", $nameFile4);
      }

      elseif ($_FILES['file4']['type'] == "image/jpg" ||
              $_FILES['file4']['type'] == "image/JPG")
      {
          $name4 = str_replace(".jpg", "", $nameFile4);
      }

      elseif($_FILES['file4']['type'] == "application/pdf")
      {
          $name4 = str_replace(".pdf", "", $nameFile4);
      }

      elseif ($_FILES['file4']['type'] == "image/PNG")
      {
        $name4 = str_replace(".png", "", $nameFile4);
      }

      else
      {
          $name4 = str_replace(".png", "", $nameFile4);
      }

      //obtenemos todos los nombres de los ficheros
      $file1 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name1 . '.' . $extension1;
      $file2 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name2 . '.' . $extension2;
      $file3 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name3 . '.' . $extension3;
      $file4 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name4 . '.' . $extension4;

        if(is_file($file1) && is_file($file2) && is_file($file3) && is_file($file4))
        {
          unlink($file1); //elimino el fichero1
          unlink($file2); //elimino el fichero2
          unlink($file3); //elimino el fichero3
          unlink($file4); //elimino el fichero4
        }

        if(in_array($_FILES['file1']['type'], $permitidos) &&
           in_array($_FILES['file2']['type'], $permitidos) &&
           in_array($_FILES['file3']['type'], $permitidos) &&
           in_array($_FILES['file4']['type'], $permitidos) &&
           ($_FILES['file1']['size'] <= $limite_kb * 1024) &&
           ($_FILES['file2']['size'] <= $limite_kb * 1024) &&
           ($_FILES['file3']['size'] <= $limite_kb * 1024) &&
           ($_FILES['file4']['size'] <= $limite_kb * 1024))
        {
          $ruta1 = 'C:/xampp/htdocs/kyv - copia/public/documents/'. $user . $nameFile1;
          $ruta2 = 'C:/xampp/htdocs/kyv - copia/public/documents/'. $user . $nameFile2;
          $ruta3 = 'C:/xampp/htdocs/kyv - copia/public/documents/'. $user . $nameFile3;
          $ruta4 = 'C:/xampp/htdocs/kyv - copia/public/documents/'. $user . $nameFile4;
          $resultado1 = move_uploaded_file($_FILES['file1']['tmp_name'], $ruta1);
          $resultado2 = move_uploaded_file($_FILES['file2']['tmp_name'], $ruta2);
          $resultado3 = move_uploaded_file($_FILES['file3']['tmp_name'], $ruta3);
          $resultado4 = move_uploaded_file($_FILES['file4']['tmp_name'], $ruta4);

  				// echo "cargaarchivoscorrecta";
          $validacionArchivos = true;
  			}
        else
        {
          //obtenemos todos los nombres de los ficheros
          $file1 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name1 . '.' . $extension1;
          $file2 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name2 . '.' . $extension2;
          $file3 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name3 . '.' . $extension3;
          $file4 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name4 . '.' . $extension4;

            if(!in_array($_FILES['file1']['type'], $permitidos) &&
                 !in_array($_FILES['file2']['type'], $permitidos) &&
                 !in_array($_FILES['file3']['type'], $permitidos) &&
                 !in_array($_FILES['file4']['type'], $permitidos) &&
                 !($_FILES['file1']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['file2']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['file3']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['file4']['size'] <= $limite_kb * 1024))
            {
              unlink($file1); //elimino el fichero1
              unlink($file2); //elimino el fichero1
              unlink($file3); //elimino el fichero1
              unlink($file4); //elimino el fichero1
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

        $this->mdlBusiness->__SET('anualSalesFigures', $value3['figures']);
        $this->mdlBusiness->__SET('linesBusiness', implode(",", $lines));
        $this->mdlBusiness->__SET('typeBusiness', ucwords($value3['typeBusiness']));
        $this->mdlBusiness->__SET('marketPotentialBrand', ucwords($value3['potentialbrand']));

        if( $value3['businessCountry1'] != "" && $value3['BusinessState1'] != "" &&
            $value3['BusinessCity1'] != "" && $value3['BusinessAddress1'] != "" &&
            $value3['Businessstorename1'] != "" && $value3['Businesszipcode1'] != "" &&
            $value3['BusinessCountry02'] == "" && $value3['BusinessState02'] == "" &&
            $value3['BusinessCity02'] == "" && $value3['BusinessAddress2'] == "" &&
            $value3['BusinessStorename2'] == "" && $value3['BusinessZipcode2'] == "" &&
            $value3['BusinessCountry3'] == "" && $value3['BusinessState3'] == "" &&
            $value3['Businesscity3'] == "" && $value3['BusinessAddress3'] == "" &&
            $value3['BusinessStorename3'] == "" && $value3['BusinessZipcode3'] == "" &&
            $value3['BusinessCountry04'] == "" && $value3['BusinessState4'] == "" &&
            $value3['BusinessCity4'] == "" && $value3['BusinessAddress4'] == "" &&
            $value3['BusinessStorename4'] == "" && $value3['BusinessZipcode4'] == "" &&
            $value3['BusinessCountry5'] == "" && $value3['BusinessState5'] == "" &&
            $value3['BusinessCity5'] == "" && $value3['BusinessAddress5'] == "" &&
            $value3['BusinessStorename5'] == "" && $value3['BusinessZipcode5'] == "")
        {
          $this->mdlBusiness->__SET('bisnessLocations', 1);
        }

        if ($value3['businessCountry1'] != "" && $value3['BusinessState1'] != "" &&
            $value3['BusinessCity1'] != "" && $value3['BusinessAddress1'] != "" &&
            $value3['Businessstorename1'] != "" && $value3['Businesszipcode1'] != "" &&
            $value3['BusinessCountry02'] != "" && $value3['BusinessState02'] != "" &&
            $value3['BusinessCity02'] != "" && $value3['BusinessAddress2'] != "" &&
            $value3['BusinessStorename2'] != "" && $value3['BusinessZipcode2'] != "")
        {
          $this->mdlBusiness->__SET('bisnessLocations', 2);
        }

        if ($value3['businessCountry1'] != "" && $value3['BusinessState1'] != "" &&
            $value3['BusinessCity1'] != "" && $value3['BusinessAddress1'] != "" &&
            $value3['Businessstorename1'] != "" && $value3['Businesszipcode1'] != "" &&
            $value3['BusinessCountry02'] != "" && $value3['BusinessState02'] != "" &&
            $value3['BusinessCity02'] != "" && $value3['BusinessAddress2'] != "" &&
            $value3['BusinessStorename2'] != "" && $value3['BusinessZipcode2'] != "" &&
            $value3['BusinessCountry3'] != "" && $value3['BusinessState3'] != "" &&
            $value3['Businesscity3'] != "" && $value3['BusinessAddress3'] != "" &&
            $value3['BusinessStorename3'] != "" && $value3['BusinessZipcode3'] != "")
        {
          $this->mdlBusiness->__SET('bisnessLocations', 3);
        }

        if ($value3['businessCountry1'] != "" && $value3['BusinessState1'] != "" &&
            $value3['BusinessCity1'] != "" && $value3['BusinessAddress1'] != "" &&
            $value3['Businessstorename1'] != "" && $value3['Businesszipcode1'] != "" &&
            $value3['BusinessCountry02'] != "" && $value3['BusinessState02'] != "" &&
            $value3['BusinessCity02'] != "" && $value3['BusinessAddress2'] != "" &&
            $value3['BusinessStorename2'] != "" && $value3['BusinessZipcode2'] != "" &&
            $value3['BusinessCountry3'] != "" && $value3['BusinessState3'] != "" &&
            $value3['Businesscity3'] != "" && $value3['BusinessAddress3'] != "" &&
            $value3['BusinessStorename3'] != "" && $value3['BusinessZipcode3'] != "" &&
            $value3['BusinessCountry04'] != "" && $value3['BusinessState4'] != "" &&
            $value3['BusinessCity4'] != "" && $value3['BusinessAddress4'] != "" &&
            $value3['BusinessStorename4'] != "" && $value3['BusinessZipcode4'] != "")
        {
          $this->mdlBusiness->__SET('bisnessLocations', 4);
        }

        if ($value3['businessCountry1'] != "" && $value3['BusinessState1'] != "" &&
            $value3['BusinessCity1'] != "" && $value3['BusinessAddress1'] != "" &&
            $value3['Businessstorename1'] != "" && $value3['Businesszipcode1'] != "" &&
            $value3['BusinessCountry02'] != "" && $value3['BusinessState02'] != "" &&
            $value3['BusinessCity02'] != "" && $value3['BusinessAddress2'] != "" &&
            $value3['BusinessStorename2'] != "" && $value3['BusinessZipcode2'] != "" &&
            $value3['BusinessCountry3'] != "" && $value3['BusinessState3'] != "" &&
            $value3['Businesscity3'] != "" && $value3['BusinessAddress3'] != "" &&
            $value3['BusinessStorename3'] != "" && $value3['BusinessZipcode3'] != "" &&
            $value3['BusinessCountry04'] != "" && $value3['BusinessState4'] != "" &&
            $value3['BusinessCity4'] != "" && $value3['BusinessAddress4'] != "" &&
            $value3['BusinessStorename4'] != "" && $value3['BusinessZipcode4'] != "" &&
            $value3['BusinessCountry5'] != "" && $value3['BusinessState5'] != "" &&
            $value3['BusinessCity5'] != "" && $value3['BusinessAddress5'] != "" &&
            $value3['BusinessStorename5'] != "" && $value3['BusinessZipcode5'] != "")
      {
        $this->mdlBusiness->__SET('bisnessLocations', 5);
      }

      if ($value3['website'] != "")
      {
        $this->mdlBusiness->__SET('webSite', "http://".$value3['website']);
      }
      else
      {
        $this->mdlBusiness->__SET('webSite', $value3['website']);
      }

        $this->mdlBusiness->__SET('certificateOfExistence', $archivo1);
        $this->mdlBusiness->__SET('taxCertificate', $archivo2);
        $this->mdlBusiness->__SET('legalID', $archivo3);
        $this->mdlBusiness->__SET('checkSpecimen', $archivo4);
        $this->mdlBusiness->__SET('usernameBusiness', (int)$_SESSION['USUARIO_ID']);

        $this->mdlBusiness->guardarInfoForm4();

        echo 1;

        sleep(4);
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

  public function form5BusinessL()
  {
    sleep(3);

    $dataForm2 = array($_POST);

    foreach ($dataForm2 as $value2)
    {
      $ultimoIdB = $this->mdlBusiness->consultarUltimoIdBusiness();

      foreach ($ultimoIdB as $id)
      {
        $this->mdlBusinessL->__SET('idBusiness', $id['id']);
      }

      $this->mdlBusinessL->__SET('Country1', $value2['businessCountry1']);
      $this->mdlBusinessL->__SET('State1', $value2['BusinessState1']);
      $this->mdlBusinessL->__SET('City1', $value2['BusinessCity1']);
      $this->mdlBusinessL->__SET('Address1', $value2['BusinessAddress1']);
      $this->mdlBusinessL->__SET('storeName1', $value2['Businessstorename1']);
      $this->mdlBusinessL->__SET('ZipCode1', $value2['Businesszipcode1']);
      $this->mdlBusinessL->__SET('Country2', $value2['BusinessCountry02']);
      $this->mdlBusinessL->__SET('State2', $value2['BusinessState02']);
      $this->mdlBusinessL->__SET('City2', $value2['BusinessCity02']);
      $this->mdlBusinessL->__SET('Address2', $value2['BusinessAddress2']);
      $this->mdlBusinessL->__SET('storeName2', $value2['BusinessStorename2']);
      $this->mdlBusinessL->__SET('ZipCode2', $value2['BusinessZipcode2']);
      $this->mdlBusinessL->__SET('Country3', $value2['BusinessCountry3']);
      $this->mdlBusinessL->__SET('State3', $value2['BusinessState3']);
      $this->mdlBusinessL->__SET('City3', $value2['Businesscity3']);
      $this->mdlBusinessL->__SET('Address3', $value2['BusinessAddress3']);
      $this->mdlBusinessL->__SET('storeName3', $value2['BusinessStorename3']);
      $this->mdlBusinessL->__SET('ZipCode3', $value2['BusinessZipcode3']);
      $this->mdlBusinessL->__SET('Country4', $value2['BusinessCountry04']);
      $this->mdlBusinessL->__SET('State4', $value2['BusinessState4']);
      $this->mdlBusinessL->__SET('City4', $value2['BusinessCity4']);
      $this->mdlBusinessL->__SET('storeName4', $value2['BusinessStorename4']);
      $this->mdlBusinessL->__SET('Address4', $value2['BusinessAddress4']);
      $this->mdlBusinessL->__SET('ZipCode4', $value2['BusinessZipcode4']);
      $this->mdlBusinessL->__SET('Contry5', $value2['BusinessCountry5']);
      $this->mdlBusinessL->__SET('State5', $value2['BusinessState5']);
      $this->mdlBusinessL->__SET('City5', $value2['BusinessCity5']);
      $this->mdlBusinessL->__SET('storeName5', $value2['BusinessStorename5']);
      $this->mdlBusinessL->__SET('Address5', $value2['BusinessAddress5']);
      $this->mdlBusinessL->__SET('ZipCode5', $value2['BusinessZipcode5']);

      $this->mdlBusinessL->guardarInfoForm4();

      sleep(4);

      echo 1;
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
      $this->mdlClientes->__SET('address', $_POST['address']);
      $this->mdlClientes->__SET('city', $_POST['city']);
      $this->mdlClientes->__SET('state', $_POST['state']);
      $this->mdlClientes->__SET('country', $_POST['country']);
      $this->mdlClientes->__SET('zipcode', $_POST['zipcode']);
      $this->mdlClientes->__SET('facebook', $_POST['face']);
      $this->mdlClientes->__SET('instagram', $_POST['instagram']);
      $this->mdlClientes->__SET('twitter', $_POST['twitter']);

      $date = strftime("%Y-%m-%d", time());

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
      $this->mdlDirecciones->__SET('owner', $_POST['owner']);
      $this->mdlDirecciones->__SET('idNumber', $_POST['idnumber']);
      $this->mdlDirecciones->__SET('phone', $_POST['phone2']);
      $this->mdlDirecciones->__SET('billingAddress', $_POST['address']);
      $this->mdlDirecciones->__SET('billingCity', $_POST['city']);
      $this->mdlDirecciones->__SET('billingState', $_POST['state']);
      $this->mdlDirecciones->__SET('billingCountry', $_POST['country']);
      $this->mdlDirecciones->__SET('billingZipCode', $_POST['zipcode']);

      if( $_POST['shippingcountry1'] != "" && $_POST['state1'] != "" &&
          $_POST['city1'] != "" && $_POST['dirbusiness1'] != "" &&
          $_POST['storename1'] != "" && $_POST['zipcode1'] != "" &&
          $_POST['country02'] == "" && $_POST['state02'] == "" &&
          $_POST['city02'] == "" && $_POST['dirbusiness2'] == "" &&
          $_POST['storename2'] == "" && $_POST['zipcode2'] == "" &&
          $_POST['shippingcountry3'] == "" && $_POST['state3'] == "" &&
          $_POST['city3'] == "" && $_POST['dirbusiness3'] == "" &&
          $_POST['storename3'] == "" && $_POST['zipcode3'] == "" &&
          $_POST['country04'] == "" && $_POST['state4'] == "" &&
          $_POST['city4'] == "" && $_POST['dirbusiness4'] == "" &&
          $_POST['storename4'] == "" && $_POST['zipcode4'] == "" &&
          $_POST['country5'] == "" && $_POST['state5'] == "" &&
          $_POST['city5'] == "" && $_POST['dirbusiness5'] == "" &&
          $_POST['storename5'] == "" && $_POST['zipcode5'] == "")
      {
        $this->mdlDirecciones->__SET('bisnessLocations', 1);
      }

      if ($_POST['shippingcountry1'] != "" && $_POST['state1'] != "" &&
              $_POST['city1'] != "" && $_POST['dirbusiness1'] != "" &&
              $_POST['storename1'] != "" && $_POST['zipcode1'] != "" &&
              $_POST['country02'] != "" && $_POST['state02'] != "" &&
              $_POST['city02'] != "" && $_POST['dirbusiness2'] != "" &&
              $_POST['storename2'] != "" && $_POST['zipcode2'] != "")
      {
        $this->mdlDirecciones->__SET('bisnessLocations', 2);
      }

      if ($_POST['shippingcountry1'] != "" && $_POST['state1'] != "" &&
                $_POST['city1'] != "" && $_POST['dirbusiness1'] != "" &&
                $_POST['storename1'] != "" && $_POST['zipcode1'] != "" &&
                $_POST['country02'] != "" && $_POST['state02'] != "" &&
                $_POST['city02'] != "" && $_POST['dirbusiness2'] != "" &&
                $_POST['storename2'] != "" && $_POST['zipcode2'] != "" &&
                $_POST['shippingcountry3'] != "" && $_POST['state3'] != "" &&
                $_POST['city3'] != "" && $_POST['dirbusiness3'] != "" &&
                $_POST['storename3'] != "" && $_POST['zipcode3'] != "")
      {
        $this->mdlDirecciones->__SET('bisnessLocations', 3);
      }

      if ($_POST['shippingcountry1'] != "" && $_POST['state1'] != "" &&
              $_POST['city1'] != "" && $_POST['dirbusiness1'] != "" &&
              $_POST['storename1'] != "" && $_POST['zipcode1'] != "" &&
              $_POST['country02'] != "" && $_POST['state02'] != "" &&
              $_POST['city02'] != "" && $_POST['dirbusiness2'] != "" &&
              $_POST['storename2'] != "" && $_POST['zipcode2'] != "" &&
              $_POST['shippingcountry3'] != "" && $_POST['state3'] != "" &&
              $_POST['city3'] != "" && $_POST['dirbusiness3'] != "" &&
              $_POST['storename3'] != "" && $_POST['zipcode3'] != "" &&
              $_POST['country04'] != "" && $_POST['state4'] != "" &&
              $_POST['city4'] != "" && $_POST['dirbusiness4'] != "" &&
              $_POST['storename4'] != "" && $_POST['zipcode4'] != "")
      {
        $this->mdlDirecciones->__SET('bisnessLocations', 4);
      }

      if ($_POST['shippingcountry1'] != "" && $_POST['state1'] != "" &&
              $_POST['city1'] != "" && $_POST['dirbusiness1'] != "" &&
              $_POST['storename1'] != "" && $_POST['zipcode1'] != "" &&
              $_POST['country02'] != "" && $_POST['state02'] != "" &&
              $_POST['city02'] != "" && $_POST['dirbusiness2'] != "" &&
              $_POST['storename2'] != "" && $_POST['zipcode2'] != "" &&
              $_POST['shippingcountry3'] != "" && $_POST['state3'] != "" &&
              $_POST['city3'] != "" && $_POST['dirbusiness3'] != "" &&
              $_POST['storename3'] != "" && $_POST['zipcode3'] != "" &&
              $_POST['country04'] != "" && $_POST['state4'] != "" &&
              $_POST['city4'] != "" && $_POST['dirbusiness4'] != "" &&
              $_POST['storename4'] != "" && $_POST['zipcode4'] != "" &&
              $_POST['country5'] != "" && $_POST['state5'] != "" &&
              $_POST['city5'] != "" && $_POST['dirbusiness5'] != "" &&
              $_POST['storename5'] != "" && $_POST['zipcode5'] != "")
    {
      $this->mdlDirecciones->__SET('bisnessLocations', 5);
    }

      $date = strftime("%Y-%m-%d", time());

      $this->mdlDirecciones->__SET('dateUpdated', $date);

      $this->mdlDirecciones->actualizarDatosForm2();

      echo 1;
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

      if (isset($_POST['creditTerms']) && $_POST['creditTerms'] == "on")
       {
         $accept = "Aceptado";
      }
      else
      {
        $accept = "No aceptado";
      }

      $this->mdlBuyers->__SET('creditTerms', $accept);

      $this->mdlBuyers->__SET('reference1Name', ucwords($_POST['reference1name']));
      $this->mdlBuyers->__SET('phoneReference1', $_POST['phonereference1']);
      $this->mdlBuyers->__SET('emailReference1', $_POST['emailreference1']);
      $this->mdlBuyers->__SET('reference2Name', ucwords($_POST['reference2name']));
      $this->mdlBuyers->__SET('phoneReference2', $_POST['phonereference2']);
      $this->mdlBuyers->__SET('emailReference2', $_POST['emailreference2']);
      $this->mdlBuyers->__SET('reference3Name', ucwords($_POST['reference3name']));
      $this->mdlBuyers->__SET('phoneReference3', $_POST['phonereference3']);
      $this->mdlBuyers->__SET('emailReference3', $_POST['emailreference3']);
      $this->mdlBuyers->__SET('buyerName', ucwords($_POST['buyername']));
      $this->mdlBuyers->__SET('buyerPhone', $_POST['buyerphone']);
      $this->mdlBuyers->__SET('buyerEmail', $_POST['buyeremail']);
      $this->mdlBuyers->__SET('idBuyers', $_POST['idbuyyer']);

      $this->mdlBuyers->actualizarDatosForm3();

      echo 1;
    }

  }

  public function actualizacionDatosForm5()
  {
    sleep(5);

    if (isset($_POST['lines']) && $_POST['lines'] != NULL)
    {
      $archivo1 = strtolower($_FILES["file1"]['name']);
      $archivo2 = strtolower($_FILES["file2"]['name']);
      $archivo3 = strtolower($_FILES["file3"]['name']);
      $archivo4 = strtolower($_FILES["file4"]['name']);

    //Validamos que los archivos existan
    if($archivo1 && $archivo2 && $archivo3 && $archivo4)
    {
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
      if ($_FILES['file1']['type'] == "image/jpeg" || $_FILES['file1']['type'] == "image/JPEG")
      {
          $nameFile1 = str_replace(".jpg", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      elseif($_FILES['file1']['type'] == "application/pdf")
      {
        $nameFile1 = str_replace(".pdf", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      else
      {
        $nameFile1 = str_replace(".png", "", $archivo1) . "_certificateOfExistence." . $extension1;
      }

      //Validación tipo archivo2
      if ($_FILES['file2']['type'] == "image/jpeg" || $_FILES['file1']['type'] == "image/JPEG")
      {
          $nameFile2 = str_replace(".jpg", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      elseif($_FILES['file2']['type'] == "application/pdf")
      {
        $nameFile2 = str_replace(".pdf", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      else
      {
        $nameFile2 = str_replace(".png", "", $archivo2) . "_taxCertificate." . $extension2;
      }

      //Validación tipo archivo3
      if ($_FILES['file3']['type'] == "image/jpeg" || $_FILES['file1']['type'] == "image/JPEG")
      {
          $nameFile3 = str_replace(".jpg", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      elseif($_FILES['file3']['type'] == "application/pdf")
      {
        $nameFile3 = str_replace(".pdf", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      else
      {
        $nameFile3 = str_replace(".png", "", $archivo3) . "_checkSpecimen." . $extension3;
      }

      //Validación tipo archivo4
      if ($_FILES['file4']['type'] == "image/jpeg"  || $_FILES['file1']['type'] == "image/JPEG")
      {
          $nameFile4 = str_replace(".jpg", "", $archivo4) . "_legalID." . $extension4;
      }

      elseif($_FILES['file4']['type'] == "application/pdf")
      {
        $nameFile4 = str_replace(".pdf", "", $archivo4) . "_legalID." . $extension4;
      }

      else
      {
        $nameFile4 = str_replace(".png", "", $archivo4) . "_legalID." . $extension4;
      }

      //Obtenemos un nombre temporal del archivo
      $source1 = $_FILES["file1"]["tmp_name"];
      $source2 = $_FILES["file2"]["tmp_name"];
      $source3 = $_FILES["file3"]["tmp_name"];
      $source4 = $_FILES["file4"]["tmp_name"];

      $user = $_SESSION['EMAIL'] . '/';

      //Declaramos un  variable con la ruta donde guardaremos los archivos
      $directorio = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user;

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
      $limite_kb = 50000;

      //Archivo 1
      if ($_FILES['file1']['type'] == "image/jpeg" ||
          $_FILES['file1']['type'] == "image/JPEG")
      {
          $name1 = str_replace(".jpeg", "", $nameFile1);
      }

      elseif ($_FILES['file1']['type'] == "image/jpg" ||
              $_FILES['file1']['type'] == "image/JPG")
      {
        $name1 = str_replace(".jpg", "", $nameFile1);
      }

      elseif($_FILES['file1']['type'] == "application/pdf")
      {
        $name1 = str_replace(".pdf", "", $nameFile1);
      }

      elseif ($_FILES['file1']['type'] == "image/PNG")
      {
        $name1 = str_replace(".PNG", "", $nameFile1);
      }

      else
      {
        $name1 = str_replace(".png", "", $nameFile1);
      }

      //Archivo 2
      if ($_FILES['file2']['type'] == "image/jpeg" ||
          $_FILES['file2']['type'] == "image/JPEG")
      {
        $name2 = str_replace(".jpeg", "", $nameFile2);
      }

      elseif ($_FILES['file2']['type'] == "image/jpg" ||
          $_FILES['file2']['type'] == "image/JPG")
      {
        $name2 = str_replace(".jpg", "", $nameFile2);
      }

      elseif($_FILES['file2']['type'] == "application/pdf")
      {
        $name2 = str_replace(".pdf", "", $nameFile2);
      }

      elseif ($_FILES['file2']['type'] == "image/PNG" )
      {
        $name2 = str_replace(".PNG", "", $nameFile2);
      }

      else
      {
        $name2 = str_replace(".png", "", $nameFile2);
      }

      //Archivo 3
      if ($_FILES['file3']['type'] == "image/jpeg" ||
          $_FILES['file3']['type'] == "image/JPEG")
      {
        $name3 = str_replace(".jpeg", "", $nameFile3);
      }

      if ($_FILES['file3']['type'] == "image/jpg" ||
          $_FILES['file3']['type'] == "image/JPG")
      {
        $name3 = str_replace(".jpg", "", $nameFile3);
      }

      elseif($_FILES['file3']['type'] == "application/pdf")
      {
        $name3 = str_replace(".pdf", "", $nameFile3);
      }

      elseif($_FILES['file3']['type'] == "image/PNG")
      {
        $name3 = str_replace(".PNG", "", $nameFile3);
      }

      else
      {
        $name3 = str_replace(".png", "", $nameFile3);
      }

      //Archivo 4
      if ($_FILES['file4']['type'] == "image/jpeg" ||
          $_FILES['file4']['type'] == "image/JPEG")
      {
          $name4 = str_replace(".jpeg", "", $nameFile4);
      }

      elseif ($_FILES['file4']['type'] == "image/jpg" ||
              $_FILES['file4']['type'] == "image/JPG")
      {
          $name4 = str_replace(".jpg", "", $nameFile4);
      }

      elseif($_FILES['file4']['type'] == "application/pdf")
      {
          $name4 = str_replace(".pdf", "", $nameFile4);
      }

      elseif ($_FILES['file4']['type'] == "image/PNG")
      {
        $name4 = str_replace(".png", "", $nameFile4);
      }

      else
      {
          $name4 = str_replace(".png", "", $nameFile4);
      }

      //obtenemos todos los nombres de los ficheros
      $file1 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name1 . '.' . $extension1;
      $file2 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name2 . '.' . $extension2;
      $file3 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name3 . '.' . $extension3;
      $file4 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name4 . '.' . $extension4;

        if(is_file($file1) && is_file($file2) && is_file($file3) && is_file($file4))
        {
          unlink($file1); //elimino el fichero1
          unlink($file2); //elimino el fichero2
          unlink($file3); //elimino el fichero3
          unlink($file4); //elimino el fichero4
        }

        if(in_array($_FILES['file1']['type'], $permitidos) &&
           in_array($_FILES['file2']['type'], $permitidos) &&
           in_array($_FILES['file3']['type'], $permitidos) &&
           in_array($_FILES['file4']['type'], $permitidos) &&
           ($_FILES['file1']['size'] <= $limite_kb * 1024) &&
           ($_FILES['file2']['size'] <= $limite_kb * 1024) &&
           ($_FILES['file3']['size'] <= $limite_kb * 1024) &&
           ($_FILES['file4']['size'] <= $limite_kb * 1024))
        {
          $ruta1 = 'C:/xampp/htdocs/kyv - copia/public/documents/'. $user . $nameFile1;
          $ruta2 = 'C:/xampp/htdocs/kyv - copia/public/documents/'. $user . $nameFile2;
          $ruta3 = 'C:/xampp/htdocs/kyv - copia/public/documents/'. $user . $nameFile3;
          $ruta4 = 'C:/xampp/htdocs/kyv - copia/public/documents/'. $user . $nameFile4;
          $resultado1 = move_uploaded_file($_FILES['file1']['tmp_name'], $ruta1);
          $resultado2 = move_uploaded_file($_FILES['file2']['tmp_name'], $ruta2);
          $resultado3 = move_uploaded_file($_FILES['file3']['tmp_name'], $ruta3);
          $resultado4 = move_uploaded_file($_FILES['file4']['tmp_name'], $ruta4);

          // echo "cargaarchivoscorrecta";
          $validacionArchivos = true;
        }
        else
        {
          //obtenemos todos los nombres de los ficheros
          $file1 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name1 . '.' . $extension1;
          $file2 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name2 . '.' . $extension2;
          $file3 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name3 . '.' . $extension3;
          $file4 = 'C:/xampp/htdocs/kyv - copia/public/documents/' . $user . $name4 . '.' . $extension4;

            if(!in_array($_FILES['file1']['type'], $permitidos) &&
                 !in_array($_FILES['file2']['type'], $permitidos) &&
                 !in_array($_FILES['file3']['type'], $permitidos) &&
                 !in_array($_FILES['file4']['type'], $permitidos) &&
                 !($_FILES['file1']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['file2']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['file3']['size'] <= $limite_kb * 1024) &&
                 !($_FILES['file4']['size'] <= $limite_kb * 1024))
            {
              unlink($file1); //elimino el fichero1
              unlink($file2); //elimino el fichero1
              unlink($file3); //elimino el fichero1
              unlink($file4); //elimino el fichero1
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
        $this->mdlBusiness->__SET('typeBusiness', ucwords($value3['typeBusiness']));
        $this->mdlBusiness->__SET('linesBusiness', implode(",", $lines));
        $this->mdlBusiness->__SET('anualSalesFigures', $value3['figures']);
        $this->mdlBusiness->__SET('marketPotentialBrand', ucwords($value3['potentialbrand']));

        if( $value3['businesscountry1'] != "" && $value3['BusinessState1'] != "" &&
            $value3['BusinessCity1'] != "" && $value3['BusinessAddress1'] != "" &&
            $value3['Businessstorename1'] != "" && $value3['Businesszipcode1'] != "" &&
            $value3['BusinessCountry02'] == "" && $value3['BusinessState02'] == "" &&
            $value3['BusinessCity02'] == "" && $value3['BusinessAddress2'] == "" &&
            $value3['BusinessStorename2'] == "" && $value3['BusinessZipcode2'] == "" &&
            $value3['BusinessCountry3'] == "" && $value3['BusinessState3'] == "" &&
            $value3['Businesscity3'] == "" && $value3['BusinessAddress3'] == "" &&
            $value3['BusinessStorename3'] == "" && $value3['BusinessZipcode3'] == "" &&
            $value3['BusinessCountry04'] == "" && $value3['BusinessState4'] == "" &&
            $value3['BusinessCity4'] == "" && $value3['BusinessAddress4'] == "" &&
            $value3['BusinessStorename4'] == "" && $value3['BusinessZipcode4'] == "" &&
            $value3['BusinessCountry5'] == "" && $value3['BusinessState5'] == "" &&
            $value3['BusinessCity5'] == "" && $value3['BusinessAddress5'] == "" &&
            $value3['BusinessStorename5'] == "" && $value3['BusinessZipcode5'] == "")
        {
          $this->mdlBusiness->__SET('bisnessLocations', 1);
        }

        if ($value3['businesscountry1'] != "" && $value3['BusinessState1'] != "" &&
            $value3['BusinessCity1'] != "" && $value3['BusinessAddress1'] != "" &&
            $value3['Businessstorename1'] != "" && $value3['Businesszipcode1'] != "" &&
            $value3['BusinessCountry02'] != "" && $value3['BusinessState02'] != "" &&
            $value3['BusinessCity02'] != "" && $value3['BusinessAddress2'] != "" &&
            $value3['BusinessStorename2'] != "" && $value3['BusinessZipcode2'] != "")
        {
          $this->mdlBusiness->__SET('bisnessLocations', 2);
        }

        if ($value3['businesscountry1'] != "" && $value3['BusinessState1'] != "" &&
            $value3['BusinessCity1'] != "" && $value3['BusinessAddress1'] != "" &&
            $value3['Businessstorename1'] != "" && $value3['Businesszipcode1'] != "" &&
            $value3['BusinessCountry02'] != "" && $value3['BusinessState02'] != "" &&
            $value3['BusinessCity02'] != "" && $value3['BusinessAddress2'] != "" &&
            $value3['BusinessStorename2'] != "" && $value3['BusinessZipcode2'] != "" &&
            $value3['BusinessCountry3'] != "" && $value3['BusinessState3'] != "" &&
            $value3['Businesscity3'] != "" && $value3['BusinessAddress3'] != "" &&
            $value3['BusinessStorename3'] != "" && $value3['BusinessZipcode3'] != "")
        {
          $this->mdlBusiness->__SET('bisnessLocations', 3);
        }

        if ($value3['businesscountry1'] != "" && $value3['BusinessState1'] != "" &&
            $value3['BusinessCity1'] != "" && $value3['BusinessAddress1'] != "" &&
            $value3['Businessstorename1'] != "" && $value3['Businesszipcode1'] != "" &&
            $value3['BusinessCountry02'] != "" && $value3['BusinessState02'] != "" &&
            $value3['BusinessCity02'] != "" && $value3['BusinessAddress2'] != "" &&
            $value3['BusinessStorename2'] != "" && $value3['BusinessZipcode2'] != "" &&
            $value3['BusinessCountry3'] != "" && $value3['BusinessState3'] != "" &&
            $value3['Businesscity3'] != "" && $value3['BusinessAddress3'] != "" &&
            $value3['BusinessStorename3'] != "" && $value3['BusinessZipcode3'] != "" &&
            $value3['BusinessCountry04'] != "" && $value3['BusinessState4'] != "" &&
            $value3['BusinessCity4'] != "" && $value3['BusinessAddress4'] != "" &&
            $value3['BusinessStorename4'] != "" && $value3['BusinessZipcode4'] != "")
        {
          $this->mdlBusiness->__SET('bisnessLocations', 4);
        }

        if ($value3['businesscountry1'] != "" && $value3['BusinessState1'] != "" &&
            $value3['BusinessCity1'] != "" && $value3['BusinessAddress1'] != "" &&
            $value3['Businessstorename1'] != "" && $value3['Businesszipcode1'] != "" &&
            $value3['BusinessCountry02'] != "" && $value3['BusinessState02'] != "" &&
            $value3['BusinessCity02'] != "" && $value3['BusinessAddress2'] != "" &&
            $value3['BusinessStorename2'] != "" && $value3['BusinessZipcode2'] != "" &&
            $value3['BusinessCountry3'] != "" && $value3['BusinessState3'] != "" &&
            $value3['Businesscity3'] != "" && $value3['BusinessAddress3'] != "" &&
            $value3['BusinessStorename3'] != "" && $value3['BusinessZipcode3'] != "" &&
            $value3['BusinessCountry04'] != "" && $value3['BusinessState4'] != "" &&
            $value3['BusinessCity4'] != "" && $value3['BusinessAddress4'] != "" &&
            $value3['BusinessStorename4'] != "" && $value3['BusinessZipcode4'] != "" &&
            $value3['BusinessCountry5'] != "" && $value3['BusinessState5'] != "" &&
            $value3['BusinessCity5'] != "" && $value3['BusinessAddress5'] != "" &&
            $value3['BusinessStorename5'] != "" && $value3['BusinessZipcode5'] != "")
      {
        $this->mdlBusiness->__SET('bisnessLocations', 5);
      }

      if($value3['website'] == "")
      {
        $this->mdlBusiness->__SET('webSite', $value3['website']);
      }
      else
      {
        $this->mdlBusiness->__SET('webSite', "http://".$value3['website']);
      }

        $this->mdlBusiness->__SET('certificateOfExistence', $archivo1);
        $this->mdlBusiness->__SET('taxCertificate', $archivo2);
        $this->mdlBusiness->__SET('legalID', $archivo3);
        $this->mdlBusiness->__SET('checkSpecimen', $archivo4);
        $this->mdlBusiness->__SET('idBusiness', (int)$value3['idbusiness']);

        $date = strftime("%Y-%m-%d", time());

        $this->mdlBusiness->__SET('dateUpdated', $date);

        $this->mdlBusiness->actualizarInfoForm4();

        echo 1;

        sleep(4);
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

  public function actualizarForm5BusinessL()
  {

    sleep(5);

    $dataForm2 = array($_POST);

    foreach ($dataForm2 as $value2)
    {
      $ultimoIdB = $this->mdlBusiness->consultarUltimoIdBusiness();

      foreach ($ultimoIdB as $id)
      {
        $this->mdlBusinessL->__SET('idBusiness', $id['id']);
      }

      $this->mdlBusinessL->__SET('Country1', $value2['businesscountry1']);
      $this->mdlBusinessL->__SET('State1', $value2['BusinessState1']);
      $this->mdlBusinessL->__SET('City1', $value2['BusinessCity1']);
      $this->mdlBusinessL->__SET('Address1', $value2['BusinessAddress1']);
      $this->mdlBusinessL->__SET('storeName1', $value2['Businessstorename1']);
      $this->mdlBusinessL->__SET('ZipCode1', $value2['Businesszipcode1']);
      $this->mdlBusinessL->__SET('Country2', $value2['BusinessCountry02']);
      $this->mdlBusinessL->__SET('State2', $value2['BusinessState02']);
      $this->mdlBusinessL->__SET('City2', $value2['BusinessCity02']);
      $this->mdlBusinessL->__SET('Address2', $value2['BusinessAddress2']);
      $this->mdlBusinessL->__SET('storeName2', $value2['BusinessStorename2']);
      $this->mdlBusinessL->__SET('ZipCode2', $value2['BusinessZipcode2']);
      $this->mdlBusinessL->__SET('Country3', $value2['BusinessCountry3']);
      $this->mdlBusinessL->__SET('State3', $value2['BusinessState3']);
      $this->mdlBusinessL->__SET('City3', $value2['Businesscity3']);
      $this->mdlBusinessL->__SET('Address3', $value2['BusinessAddress3']);
      $this->mdlBusinessL->__SET('storeName3', $value2['BusinessStorename3']);
      $this->mdlBusinessL->__SET('ZipCode3', $value2['BusinessZipcode3']);
      $this->mdlBusinessL->__SET('Country4', $value2['BusinessCountry04']);
      $this->mdlBusinessL->__SET('State4', $value2['BusinessState4']);
      $this->mdlBusinessL->__SET('City4', $value2['BusinessCity4']);
      $this->mdlBusinessL->__SET('storeName4', $value2['BusinessStorename4']);
      $this->mdlBusinessL->__SET('Address4', $value2['BusinessAddress4']);
      $this->mdlBusinessL->__SET('ZipCode4', $value2['BusinessZipcode4']);
      $this->mdlBusinessL->__SET('Contry5', $value2['BusinessCountry5']);
      $this->mdlBusinessL->__SET('State5', $value2['BusinessState5']);
      $this->mdlBusinessL->__SET('City5', $value2['BusinessCity5']);
      $this->mdlBusinessL->__SET('storeName5', $value2['BusinessStorename5']);
      $this->mdlBusinessL->__SET('Address5', $value2['BusinessAddress5']);
      $this->mdlBusinessL->__SET('ZipCode5', $value2['BusinessZipcode5']);

      $date = strftime("%Y-%m-%d", time());

      $this->mdlBusinessL->__SET('dateUpdated', $date);

      $this->mdlBusinessL->actualizarInfoForm4();

      sleep(4);

      echo 1;
    }

  }

}
?>
