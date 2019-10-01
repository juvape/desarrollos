
<?php

    class mdlStores
    {

      private $idStore;
      private $name;
      private $address;
      private $city;
      private $country;
      private $region;
      private $typeOfStore;
      private $category;
      private $zipCode;
      private $businessHours;
      private $URL;
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

      public function listStoresByRegionCountry()
      {

        $sql = "CAll SP_listStoresByRegionCountry(?, ?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->region);
          $stm->bindParam(2, $this->country);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function listStoresByType()
      {

        $sql = "CAll SP_listStoresByType(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->store);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function listStoresByCategory()
      {

        $sql = "CAll SP_listStoresByCategory(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->category);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function listStoresByName()
      {

        $sql = "CAll SP_listStoresByName(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->name);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function listStores()
      {

        $sql = "CAll SP_listStores(?, ?, ?, ?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->region);
          $stm->bindParam(2, $this->country);
          $stm->bindParam(3, $this->store);
          $stm->bindParam(4, $this->category);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

    }
 ?>
