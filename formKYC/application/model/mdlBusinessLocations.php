
<?php

    class mdlBusinessLocations
    {

      private $idBusiness;
      private $Country1;
      private $State1;
      private $City1;
      private $Address1	;
      private $storeName1;
      private $ZipCode1;
      private $Country2;
      private $State2;
      private $City2;
      private $Address2;
      private $storeName2;
      private $ZipCode2;
      private $Country3;
      private $State3;
      private $City3;
      private $Address3;
      private $storeName3;
      private $ZipCode3;
      private $Country4;
      private $State4;
      private $City4;
      private $storeName4;
      private $Address4;
      private $ZipCode4;
      private $Contry5;
      private $State5;
      private $City5;
      private $storeName5;
      private $Address5;
      private $ZipCode5;
      private $createdAt;
      private $dateUpdated;
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
          echo $e->getMessage();
        }
      }

      public function guardarInfoForm4LocationsEstores()
      {
        $sql = "CALL SP_guardarInfoForm4LocationsStores(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $this->db->beginTransaction();

        try
        {
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1,$this->idBusiness);
           $stm->bindParam(2,$this->Country1);
           $stm->bindParam(3,$this->State1);
           $stm->bindParam(4,$this->City1);
           $stm->bindParam(5,$this->Address1);
           $stm->bindParam(6,$this->storeName1);
           $stm->bindParam(7,$this->ZipCode1);
           $stm->bindParam(8,$this->Country2);
           $stm->bindParam(9,$this->State2);
           $stm->bindParam(10,$this->City2);
           $stm->bindParam(11,$this->Address2);
           $stm->bindParam(12,$this->storeName2);
           $stm->bindParam(13,$this->ZipCode2);
           $stm->bindParam(14,$this->Country3);
           $stm->bindParam(15,$this->State3);
           $stm->bindParam(16,$this->City3);
           $stm->bindParam(17,$this->Address3);
           $stm->bindParam(18,$this->storeName3);
           $stm->bindParam(19,$this->ZipCode3);
           $stm->bindParam(20,$this->Country4);
           $stm->bindParam(21,$this->State4);
           $stm->bindParam(22,$this->City4);
           $stm->bindParam(23,$this->storeName4);
           $stm->bindParam(24,$this->Address4);
           $stm->bindParam(25,$this->ZipCode4);
           $stm->bindParam(26,$this->Contry5);
           $stm->bindParam(27,$this->State5);
           $stm->bindParam(28,$this->City5);
           $stm->bindParam(29,$this->storeName5);
           $stm->bindParam(30,$this->Address5);
           $stm->bindParam(31,$this->ZipCode5);
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

      public function actualizarInfoForm4StoresL()
      {

        $sql = "CALL SP_actualizarStoresLocations(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $this->db->beginTransaction();

        try
        {
           $stm = $this->db->prepare($sql);
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1,$this->idBusiness);
           $stm->bindParam(2,$this->Country1);
           $stm->bindParam(3,$this->State1);
           $stm->bindParam(4,$this->City1);
           $stm->bindParam(5,$this->Address1);
           $stm->bindParam(6,$this->storeName1);
           $stm->bindParam(7,$this->ZipCode1);
           $stm->bindParam(8,$this->Country2);
           $stm->bindParam(9,$this->State2);
           $stm->bindParam(10,$this->City2);
           $stm->bindParam(11,$this->Address2);
           $stm->bindParam(12,$this->storeName2);
           $stm->bindParam(13,$this->ZipCode2);
           $stm->bindParam(14,$this->Country3);
           $stm->bindParam(15,$this->State3);
           $stm->bindParam(16,$this->City3);
           $stm->bindParam(17,$this->Address3);
           $stm->bindParam(18,$this->storeName3);
           $stm->bindParam(19,$this->ZipCode3);
           $stm->bindParam(20,$this->Country4);
           $stm->bindParam(21,$this->State4);
           $stm->bindParam(22,$this->City4);
           $stm->bindParam(23,$this->storeName4);
           $stm->bindParam(24,$this->Address4);
           $stm->bindParam(25,$this->ZipCode4);
           $stm->bindParam(26,$this->Contry5);
           $stm->bindParam(27,$this->State5);
           $stm->bindParam(28,$this->City5);
           $stm->bindParam(29,$this->storeName5);
           $stm->bindParam(30,$this->Address5);
           $stm->bindParam(31,$this->ZipCode5);
           $stm->bindParam(32,$this->dateUpdated);
           $result = $stm->execute();

           if ($result == true) {
             $this->db->commit();
           } else {
             $this->db->rollback();
           }
        }catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function consultarInfoStoresLocations()
       {

         $sql = "CAll SP_consultarInfoStoresLocations(?)";
         try {
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->idBusiness);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
           return $result;
         } catch (PDOException $e) {
           echo $e->getMessage();
         }
       }

    }
 ?>
