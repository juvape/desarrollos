
<?php

    class mdlCiudad
    {

      private $id_ciudad;
      private $codigo_ciudad;
      private $nombre_ciudad;
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

      public function listarCiudades()
      {
        $sql = "CAll SP_listarCiudades()";

        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(2);
      }

    }
 ?>
