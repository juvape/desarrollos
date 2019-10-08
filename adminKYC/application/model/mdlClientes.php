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
  private $facebook;
  private $instagram;
  private $twitter;
  private $pinterest;
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
      return $e->getMessage();
    }
  }

  public function listarInfoClientes()
	{
		$sql = "CALL SP_listarInfoClientes()";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

  public function listarInfoAddress()
	{
		$sql = "CALL SP_listarInfoAddress()";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

  public function listarInfoBuyers()
	{
		$sql = "CALL SP_listarInfoBuyers()";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
	}


  public function listarInfoBusiness()
	{
		$sql = "CALL SP_listarInfoBusiness()";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

  public function listarTodo()
  {
    $sql = "CALL SP_consultarTodo()";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

  public function listarSoloFinalizado()
  {
    $sql = "CALL SP_consultarSoloFinalizado()";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
// ****
  public function listarInfoIndex1()
  {
    $sql = "CALL SP_listarInfoIndex1(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->idCustomer);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

  public function listarInfoIndex2()
  {
    $sql = "CALL SP_listarInfoIndex2(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->idCustomer);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

}
 ?>
