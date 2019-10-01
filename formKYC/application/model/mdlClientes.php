
<?php

    class mdlClientes
    {

      private $idCustomer;
      private $userName;
      private $companyName;
      private $brandName;
      private $email;
      private $phone;
      private $website;
      private $address;
      private $city;
      private $state;
      private $country;
      private $zipcode;
      private $facebook;
      private $instagram;
      private $twitter;
      private $pinterest;
      private $dateUpdated;
      private $createdAt;
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

      public function guardarInfoForm1()
      {

        $sql = "CALL SP_guardarInfoForm1(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->beginTransaction();

        try
        {
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->companyName);
           $stm->bindParam(2, $this->brandName);
           $stm->bindParam(3, $this->email);
           $stm->bindParam(4, $this->phone);
           $stm->bindParam(5, $this->website);
           $stm->bindParam(6, $this->facebook);
           $stm->bindParam(7, $this->instagram);
           $stm->bindParam(8, $this->twitter);
           $stm->bindParam(9, $this->pinterest);
           $stm->bindParam(10, $this->userName);
           $result = $stm->execute();

           if ($result == true) {
             $this->db->commit();
           } else {
             $this->db->rollback();
           }
        }catch (PDOException $e) {
          exit('Error guardando el usuario');
        }
      }

      public function actualizarDatosForm1()
      {

        $sql = "CALL SP_actualizarInfoForm1(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->beginTransaction();

        try
        {
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->companyName);
           $stm->bindParam(2, $this->brandName);
           $stm->bindParam(3, $this->email);
           $stm->bindParam(4, $this->phone);
           $stm->bindParam(5, $this->website);
           $stm->bindParam(6, $this->facebook);
           $stm->bindParam(7, $this->instagram);
           $stm->bindParam(8, $this->twitter);
           $stm->bindParam(9, $this->pinterest);
           $stm->bindParam(10, $this->dateUpdated);
           $stm->bindParam(11, $this->idCustomer);
           $result = $stm->execute();

           if ($result == true) {
             $this->db->commit();
           } else {
             $this->db->rollback();
           }
        }catch (PDOException $e) {
          exit('Error guardando el usuario');
        }
      }

      public function consultarIdUsuario()
      {

        $sql = "CAll SP_consultarIdUsuario(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->userName);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function consultarInfoCliente()
      {

        $sql = "CAll SP_consultarInfoClientes(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->userName);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

    }
 ?>
