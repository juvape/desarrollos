<?php

class mdlClientes
{

  private $idUsuario;
  private $email;
  private $password;
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

}
 ?>
