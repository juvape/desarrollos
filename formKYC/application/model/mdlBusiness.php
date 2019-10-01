
<?php

    class mdlBusiness
    {

      private $idBusiness;
      private $usernameBusiness;
      private $typeBusiness;
      private $linesBusiness;
      private $currencyAnualSalesFigures;
      private $figures;
      private $marketPotentialBrand;
      private $bisnessLocations;
      private $webSite;
      private $certificateOfExistence;
      private $taxCertificate;
      private $legalID;
      private $checkSpecimen;
      private $resalerCertificate;
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
          exit('No se pudo establecer conexion con la base de datos');
        }
      }

      public function guardarInfoForm4()
      {
        $sql = "CALL SP_guardarInfoForm4(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
        $this->db->beginTransaction();

        try
        {
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->currencyAnualSalesFigures);
           $stm->bindParam(2, $this->figures);
           $stm->bindParam(3, $this->linesBusiness);
           $stm->bindParam(4, $this->typeBusiness);
           $stm->bindParam(5, $this->marketPotentialBrand);
           $stm->bindParam(6, $this->bisnessLocations);
           $stm->bindParam(7, $this->webSite);
           $stm->bindParam(8, $this->certificateOfExistence);
           $stm->bindParam(9, $this->taxCertificate);
           $stm->bindParam(10, $this->legalID);
           $stm->bindParam(11, $this->checkSpecimen);
           $stm->bindParam(12, $this->resalerCertificate);
           $stm->bindParam(13, $this->usernameBusiness);
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

      public function consultarUltimoIdBusiness()
      {
        $sql = "CAll SP_consultarUltimoIdBusiness()";
        try {
          $stm = $this->db->prepare($sql);
          $stm->execute();
          $result = $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function actualizarInfoForm4()
      {
        $sql = "CALL SP_actualizarInfoForm4(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->db->beginTransaction();
        try
        {
           $stm = $this->db->prepare($sql);
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->currencyAnualSalesFigures);
           $stm->bindParam(2, $this->figures);
           $stm->bindParam(3, $this->linesBusiness);
           $stm->bindParam(4, $this->typeBusiness);
           $stm->bindParam(5, $this->marketPotentialBrand);
           $stm->bindParam(6, $this->webSite);
           $stm->bindParam(7, $this->bisnessLocations);
           $stm->bindParam(8, $this->certificateOfExistence);
           $stm->bindParam(9, $this->taxCertificate);
           $stm->bindParam(10, $this->legalID);
           $stm->bindParam(11, $this->checkSpecimen);
           $stm->bindParam(12, $this->resalerCertificate);
           $stm->bindParam(13, $this->dateUpdated);
           $stm->bindParam(14, $this->idBusiness);
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

	  public function consultarIdUsuario()
      {

        $sql = "CAll SP_consultarIdUsuarioBusiness(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->usernameBusiness);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

	   public function consultarInfoBusiness()
      {

        $sql = "CAll SP_consultarInfoBusiness(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->usernameBusiness);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }
    }
 ?>
