
<?php

class mdlBuyersContacts
{

  private $idBuyersContacts;
  private $idBuyers;
  private $fullNameBuyers1;
  private $phoneBuyers1;
  private $emailBuyers1;
  private $fullNameBuyers2;
  private $phoneBuyers2;
  private $emailBuyers2;
  private $fullNameBuyers3;
  private $phoneBuyers3;
  private $emailBuyers3;
  private $fullNameBuyers4;
  private $phoneBuyers4;
  private $emailBuyers4;
  private $fullNameBuyers5;
  private $phoneBuyers5;
  private $emailBuyers5;
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
      exit('No se pudo establecer conexion con la base de datos');
    }
  }

  public function guardarInfoForm3BuyersContacts()
   {
     $sql = "CAll SP_guardarInfoForm3BuyersContacts(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     try {
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idBuyers);
       $stm->bindParam(2, $this->fullNameBuyers1);
       $stm->bindParam(3, $this->phoneBuyers1);
       $stm->bindParam(4, $this->emailByers1);
       $stm->bindParam(5, $this->fullNameBuyers2);
       $stm->bindParam(6, $this->phoneBuyers2);
       $stm->bindParam(7, $this->emailBuyers2);
       $stm->bindParam(8, $this->fullNameBuyers3);
       $stm->bindParam(9, $this->phoneBuyers3);
       $stm->bindParam(10, $this->emailBuyers3);
       $stm->bindParam(11, $this->fullNameBuyers4);
       $stm->bindParam(12, $this->phoneBuyers4);
       $stm->bindParam(13, $this->emailBuyers4);
       $stm->bindParam(14, $this->fullNameBuyers5);
       $stm->bindParam(15, $this->phoneBuyers5);
       $stm->bindParam(16, $this->emailBuyers5);
       $stm->execute();
     } catch (PDOException $e) {
       echo $e->getMessage();
     }
   }

   public function consultarInfoBuyersContacts()
    {
      $sql = "CAll SP_consultarInfoBuyersContacts(?)";
      try {
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idBuyers);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }

  public function actualizarInfoForm3Buyers()
  {
    $sql = "CAll SP_actualizarInfoForm3Buyers(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->fullNameBuyers1);
      $stm->bindParam(2, $this->phoneBuyers1);
      $stm->bindParam(3, $this->emailBuyers1);
      $stm->bindParam(4, $this->fullNameBuyers2);
      $stm->bindParam(5, $this->phoneBuyers2);
      $stm->bindParam(6, $this->emailBuyers2);
      $stm->bindParam(7, $this->fullNameBuyers3);
      $stm->bindParam(8, $this->phoneBuyers3);
      $stm->bindParam(9, $this->emailBuyers3);
      $stm->bindParam(10, $this->fullNameBuyers4);
      $stm->bindParam(11, $this->phoneBuyers4);
      $stm->bindParam(12, $this->emailBuyers4);
      $stm->bindParam(13, $this->fullNameBuyers5);
      $stm->bindParam(14, $this->phoneBuyers5);
      $stm->bindParam(15, $this->emailBuyers5);
      $stm->bindParam(16, $this->dateUpdated);
      $stm->bindParam(17, $this->idBuyersContacts);
      $stm->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
