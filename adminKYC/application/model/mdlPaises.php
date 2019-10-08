<?php

class mdlPaises
{

  private $idCountry;
  private $codeCountry;
  private $nameSpanish;
  private $nameEnglish;
  private $state;
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

  public function listarPaises()
	{
		$sql = "CALL SP_listarPaises()";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
	}

}
 ?>
