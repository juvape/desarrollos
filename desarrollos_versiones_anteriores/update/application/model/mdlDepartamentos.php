
<?php

    class mdlDepartamentos
    {

      private $id_departamento;
      private $codigo_departamento;
      private $nombre_departamento;
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

      public function listarDepartamentos()
      {
        $sql = "CAll SP_listarDepartamentos()";

        $this->db->beginTransaction();
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(2);
      }

    }
 ?>
