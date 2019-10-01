
<?php

    class mdlBuyers
    {

      private $idBuyers;
      private $currency;
      private $bankName;
      private $branch;
      private $accountNumber;
      private $paymentType;
      private $creditTerms;
      private $whichOne;
      private $quantityBuyers;
      private $logisticContactName;
      private $logisticContactPhone;
      private $logisticContactEmail;
      private $accountsPayableName;
      private $accountsPayablePhone;
      private $accountsPayableEmail;
      private $reference1Name;
      private $phoneReference1;
      private $emailReference1;
      private $reference2Name;
      private $phoneReference2;
      private $emailReference2;
      private $reference3Name;
      private $phoneReference3;
      private $emailReference3;
  	  private $createdAt;
      private $dateUpdated;
      private $usernameBuyers;
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

      public function guardarInfoForm3()
      {

        $sql = "CALL SP_guardarInfoForm3(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->beginTransaction();

        try
        {
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->currency);
           $stm->bindParam(2, $this->bankName);
           $stm->bindParam(3, $this->branch);
           $stm->bindParam(4, $this->accountNumber);
           $stm->bindParam(5, $this->paymentType);
           $stm->bindParam(6, $this->whichOne);
           $stm->bindParam(7, $this->creditTerms);
           $stm->bindParam(8, $this->quantityBuyers);
           $stm->bindParam(9, $this->logisticContactName);
           $stm->bindParam(10, $this->logisticContactPhone);
           $stm->bindParam(11, $this->logisticContactEmail);
           $stm->bindParam(12, $this->accountsPayableName);
           $stm->bindParam(13, $this->accountsPayablePhone);
           $stm->bindParam(14, $this->accountsPayableEmail);
           $stm->bindParam(15, $this->reference1Name);
		       $stm->bindParam(16, $this->phoneReference1);
           $stm->bindParam(17, $this->emailReference1);
           $stm->bindParam(18, $this->reference2Name);
           $stm->bindParam(19, $this->phoneReference2);
           $stm->bindParam(20, $this->emailReference2);
           $stm->bindParam(21, $this->reference3Name);
           $stm->bindParam(22, $this->phoneReference3);
           $stm->bindParam(23, $this->emailReference3);
           $stm->bindParam(24, $this->usernameBuyers);
           $result = $stm->execute();

           if ($result == true) {
             $this->db->commit();
           } else {
             $this->db->rollback();
           }
        }catch (PDOException $e) {
          exit('Error guardando datos');
        }
      }

      public function actualizarDatosForm3()
      {

        $sql = "CALL SP_actualizarInfoForm3(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->beginTransaction();

        try
        {
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->currency);
           $stm->bindParam(2, $this->bankName);
           $stm->bindParam(3, $this->branch);
           $stm->bindParam(4, $this->accountNumber);
           $stm->bindParam(5, $this->paymentType);
           $stm->bindParam(6, $this->whichOne);
           $stm->bindParam(7, $this->creditTerms);
           $stm->bindParam(8, $this->quantityBuyers);
           $stm->bindParam(9, $this->logisticContactName);
           $stm->bindParam(10, $this->logisticContactPhone);
           $stm->bindParam(11, $this->logisticContactEmail);
           $stm->bindParam(12, $this->accountsPayableName);
           $stm->bindParam(13, $this->accountsPayablePhone);
           $stm->bindParam(14, $this->accountsPayableEmail);
           $stm->bindParam(15, $this->reference1Name);
		       $stm->bindParam(16, $this->phoneReference1);
           $stm->bindParam(17, $this->emailReference1);
           $stm->bindParam(18, $this->reference2Name);
           $stm->bindParam(19, $this->phoneReference2);
           $stm->bindParam(20, $this->emailReference2);
           $stm->bindParam(21, $this->reference3Name);
           $stm->bindParam(22, $this->phoneReference3);
           $stm->bindParam(23, $this->emailReference3);
    		   $stm->bindParam(24, $this->dateUpdated);
           $stm->bindParam(25, $this->idBuyers);
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

        $sql = "CAll SP_consultarIdUsuarioBuyers(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->usernameBuyers);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function ultimoIdBuyers()
        {

          $sql = "CAll SP_consultarUltimoIdBuyers()";
          try {
            $stm = $this->db->prepare($sql);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
          } catch (PDOException $e) {
            echo $e->getMessage();
          }
        }

	   public function consultarInfoBuyers()
      {

        $sql = "CAll SP_consultarInfoBuyers(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->usernameBuyers);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

    }
 ?>
