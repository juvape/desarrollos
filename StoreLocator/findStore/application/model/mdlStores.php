
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

  public function getAllStores()
  {
    $sql = "CAll SP_consultStores()";
    try {
      $stm = $this->db->prepare($sql);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
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

  public function listStoresByRegionCountryType()
  {

    $sql = "CAll SP_listStoresByRegionCountryType(?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listStoresByRegionCountryType2()
  {

    $sql = "CAll SP_listStoresByRegionCountryType2(?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByStoreSwim()
  {

    $sql = "CAll SP_listByStoreSwim(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countStores()
  {

    $sql = "CAll SP_countStores(?, ?)";
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

  public function countStoresByType()
  {

    $sql = "CAll SP_countStoresByType2(?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByStoreSwim()
  {

    $sql = "CAll SP_countByStoreSwim(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listStoresByTypeStore()
  {

    $sql = "CAll SP_listStoresByTypeStore(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByCategorySwim()
  {

    $sql = "CAll SP_listStoresByCategorySwim(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countStoresByType2()
  {

    $sql = "CAll SP_countStoresByType(?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByCategorySwim()
  {

    $sql = "CAll SP_countStoresByCategorySwim(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeStore()
  {

    $sql = "CAll SP_countStoresByTypeStore(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
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
      $stm->bindParam(1, $this->typeOfStore);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByStoreOnlineSwim()
  {

    $sql = "CAll SP_listStoresByOnlineSwim(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByStoreOnlineSwim()
  {

    $sql = "CAll SP_countByOnlineSwim(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listStoresByTypeOline()
  {
    $sql = "CAll SP_listStoresByTypeOnline(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
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

  public function countStoresByCategory()
  {

    $sql = "CAll SP_countStoresByCategory(?)";
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

  public function countByTypeOnline()
  {

    $sql = "CAll SP_countStoresByTypeOnline(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
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

  public function countStoresByName()
  {

    $sql = "CAll SP_countStoresByName(?)";
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
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByStoreActive()
  {

    $sql = "CAll SP_listByStoreActive(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByStoreActive()
  {

    $sql = "CAll SP_countByStoreActive(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByCategoryActive()
  {
    $sql = "CAll SP_listStoresActive(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByCategoryActive()
  {

    $sql = "CAll SP_countStoresActive(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countStoresByAllFilters()
  {
    $sql = "CAll SP_countStoresByAllFilters(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByOnlineActive()
  {
    $sql = "CAll SP_listByOnlineActive(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByOnlineActive()
  {
    $sql = "CAll SP_countByOnlineActive(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByStoreKids()
  {
    $sql = "CAll SP_listByStoreKids(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByStoreKids()
  {
    $sql = "CAll SP_countByStoreKids(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByOnlineKids()
  {
    $sql = "CAll SP_listByOnlineKids(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByOnlineKids()
  {
    $sql = "CAll SP_countByOnlineKids(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByKids()
  {
    $sql = "CAll SP_listByKids(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByKids()
  {
    $sql = "CAll SP_countByKids(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByStoreTrunks()
  {
    $sql = "CAll SP_listByStoreTrunks(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByStoreTrunks()
  {
    $sql = "CAll SP_countByStoreTrunks(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTrunks()
  {
    $sql = "CAll SP_listByTrunks(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTrunks()
  {
    $sql = "CAll SP_countByTrunks(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByOnlineTrunks()
  {
    $sql = "CAll SP_listByOnlineTrunks(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByOnlineTrunks()
  {
    $sql = "CAll SP_countByOnlineTrunks(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByStoreCovers()
  {
    $sql = "CAll SP_listByStoreCovers(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByStoreCovers()
  {
    $sql = "CAll SP_countByStoreCovers(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByCovers()
  {
    $sql = "CAll SP_listByCovers(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByCovers()
  {
    $sql = "CAll SP_countByCovers(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByOnlineCovers()
  {
    $sql = "CAll SP_listByOnlineCovers(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByOnlineCovers()
  {
    $sql = "CAll SP_countByOnlineCovers(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByStoreAccessories()
  {
    $sql = "CAll SP_listByStoreAccessories(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByStoreAccessories()
  {
    $sql = "CAll SP_countByStoreAccessories(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByAccessories()
  {
    $sql = "CAll SP_listByAccessories(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByAccessories()
  {
    $sql = "CAll SP_countByAccessories(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByOnlineAccessories()
  {
    $sql = "CAll SP_listByOnlineAccessories(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByOnlineAccessories()
  {
    $sql = "CAll SP_countByOnlineAccessories(?, ?, ?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->country);
      $stm->bindParam(3, $this->typeOfStore);
      $stm->bindParam(4, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeStoreSwim()
  {
    $sql = "CAll SP_listByTypeStoreSwim(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeStoreSwim()
  {
    $sql = "CAll SP_countByTypeStoreSwim(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeStoreActive()
  {
    $sql = "CAll SP_countByTypeStoreActive(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeStoreActive()
  {
    $sql = "CAll SP_listByTypeStoreActive(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeStoreKids()
  {
    $sql = "CAll SP_listByTypeStoreKids(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeStoreKids()
  {
    $sql = "CAll SP_countByTypeStoreKids(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeStoreTrunks()
  {
    $sql = "CAll SP_listByTypeStoreTrunks(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeStoreTrunks()
  {
    $sql = "CAll SP_countByTypeStoreTrunks(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeStoreCover()
  {
    $sql = "CAll SP_listByTypeStoreCover(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeStoreCover()
  {
    $sql = "CAll SP_countByTypeStoreCover(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeStoreAccessories()
  {
    $sql = "CAll SP_listByTypeStoreAccessories(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeStoreAccessories()
  {
    $sql = "CAll SP_countByTypeStoreAccessories(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeOnlineSwim()
  {
    $sql = "CAll SP_listByTypeOnlineSwim(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeOnlineSwim()
  {
    $sql = "CAll SP_countByTypeOnlineSwim(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeOnlineActive()
  {
    $sql = "CAll SP_listByTypeOnlineActive(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeOnlineActive()
  {
    $sql = "CAll SP_countByTypeOnlineActive(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeOnlineKids()
  {
    $sql = "CAll SP_listByTypeOnlineKids(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeOnlineKids()
  {
    $sql = "CAll SP_countByTypeOnlineKids(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeOnlineTrunks()
  {
    $sql = "CAll SP_listByTypeOnlineTrunks(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeOnlineTrunks()
  {
    $sql = "CAll SP_countByTypeOnlineTrunks(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeOnlineCover()
  {
    $sql = "CAll SP_listByTypeOnlineCover(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeOnlineCover()
  {
    $sql = "CAll SP_countByTypeOnlineCover(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByTypeOnlineAccessories()
  {
    $sql = "CAll SP_listByTypeOnlineAccessories(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByTypeOnlineAccessories()
  {
    $sql = "CAll SP_countByTypeOnlineAccessories(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->typeOfStore);
      $stm->bindParam(2, $this->category);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByAllType()
  {
    $sql = "CAll SP_listByAllType()";
    try {
      $stm = $this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByAllType()
  {
    $sql = "CAll SP_countByAllType()";
    try {
      $stm = $this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listByAllCategories()
  {
    $sql = "CAll SP_listByAllCategories()";
    try {
      $stm = $this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countByAllCategories()
  {
    $sql = "CAll SP_countByAllCategories()";
    try {
      $stm = $this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listStoresByRegion()
  {
    $sql = "CAll SP_listStoresByRegion(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countStoresByRegion()
  {
    $sql = "CAll SP_countStoresByRegion(?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function listStoresByRegionOnline()
  {
    $sql = "CAll SP_listStoresByRegionOnline(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->typeOfStore);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function countStoresByRegionOnline()
  {
    $sql = "CAll SP_countStoresByRegionOnline(?, ?)";
    try {
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->region);
      $stm->bindParam(2, $this->typeOfStore);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

}
?>
