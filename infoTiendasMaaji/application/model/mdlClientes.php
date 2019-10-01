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
          exit('No se pudo establecer conexion con la base de datos');
        }
      }

      public function listarInfoClientes()
  		{
  			$sql = "CALL SP_listarInfoClientes()";
              $stm = $this->db->prepare($sql);
              $stm->execute();
              return $stm->fetchAll(PDO::FETCH_ASSOC);
  		}

}
 ?>
