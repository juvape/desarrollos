
<?php

    class mdlDirecciones
    {

      private $idAddresses;
      private $taxID;
      private $typeCompany;
      private $owner;
      private $idNumber;
      private $phone;
      private $billingAddres;
      private $billingCity;
      private $billingState;
      private $billingCountry;
      private $billingZipCode;
      private $shippingAddress;
      private $shippingCity;
      private $shippingState;
      private $shippingCountry;
      private $storeName;
      private $shippingZipcode;
      private $bisnessLocations;
      private $dateUpdated;
      private $username;
      private $db;

      public function __SET($attr, $valor)
      {
        $this->$attr = $valor;
      }

      public function __GET($attr)
      {
        return $this->$attr;
      }

      public function __construct($db)
      {
        try {
          $this->db = $db;
        } catch (PDOException $e) {
          exit('No se pudo establecer conexion con la base de datos');
        }
      }

      public function guardarInfoForm2()
      {
        $sql = "CALL SP_guardarInfoForm2(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->beginTransaction();

        try
        {
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->taxID);
           $stm->bindParam(2, $this->typeCompany);
           $stm->bindParam(3, $this->owner);
           $stm->bindParam(4, $this->idNumber);
           $stm->bindParam(5, $this->phone);
           $stm->bindParam(6, $this->billingAddres);
           $stm->bindParam(7, $this->billingCity);
           $stm->bindParam(8, $this->billingState);
           $stm->bindParam(9, $this->billingCountry);
           $stm->bindParam(10, $this->billingZipCode);
           $stm->bindParam(11, $this->bisnessLocations);
           $stm->bindParam(12, $this->username);
           $result = $stm->execute();

           if ($result == true) {
             $this->db->commit();
           } else {
             $this->db->rollback();
           }
        }catch (PDOException $e) {
          return $e->getMessage();
        }
      }

      public function consultarUltimoId()
      {

        $sql = "CAll SP_consultarUltimoId()";
        try {
          $stm = $this->db->prepare($sql);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function actualizarDatosForm2()
      {
        $sql = "CALL SP_actualizarInfoForm2(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->beginTransaction();

        try
        {
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->taxID);
           $stm->bindParam(2, $this->owner);
           $stm->bindParam(3, $this->idNumber);
           $stm->bindParam(4, $this->phone);
           $stm->bindParam(5, $this->billingAddress);
           $stm->bindParam(6, $this->billingCity);
           $stm->bindParam(7, $this->billingState);
           $stm->bindParam(8, $this->billingCountry);
           $stm->bindParam(9, $this->billingZipCode);
           $stm->bindParam(10, $this->dateUpdated);
           $stm->bindParam(11, $this->bisnessLocations);
           $stm->bindParam(12, $this->idAddresses);
           $result = $stm->execute();

           if ($result == true) {
             $this->db->commit();
           } else {
             $this->db->rollback();
           }
        }catch (PDOException $e) {
          exit('Error actualizando la información');
        }
      }

      public function consultarIdUsuario()
      {

        $sql = "CAll SP_consultarIdAddressUsuario(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->username);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function consultarInfoAddresses()
      {
        $sql = "CAll SP_consultarInfoAddresses(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->username);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function consultarInfoShippingAddres()
      {
        $sql = "CAll SP_consultarInfoShippingAddress(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->idAddresses);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

    }
 ?>
