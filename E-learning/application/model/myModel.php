
<?php

    class myModel
    {

      private $attributte;
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
          exit('Cannot connected DB');
        }
      }

      public function save()
      {
        $sql = "CAll save(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->atributte);
          $result = $stm->execute();
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function list(){
        $sql = "CALL  list()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
      }

    }
 ?>
