<?php

    class mdlUsuarios
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

    public function consultarUsuario()
    {

      $sql = "CAll SP_consultarUsuarios(?,?)";
      try {
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->email);
        $stm->bindParam(2, $this->password);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }

}
 ?>
