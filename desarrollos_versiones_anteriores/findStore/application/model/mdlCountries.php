
<?php

    class mdlCountries
    {

      private $idCountry;
      private $countryCode;
      private $nameSpanish;
      private $nameEnglish;
      private $region;
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

      public function listCountries()
      {
        $sql = "CAll SP_listCountries(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->region);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

    }
 ?>
