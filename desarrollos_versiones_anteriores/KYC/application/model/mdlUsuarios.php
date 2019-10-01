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

      public function GuardarInformacionClientes()
      {
        $sql = "CAll SP_guardarInformacionClientes(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $this->db->beginTransaction();

        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->tipo_diligencia);
          $stm->bindParam(2, $this->fecha_diligenciamiento);
          $stm->bindParam(3, $this->lugar_diligenciamiento);
          $stm->bindParam(4, $this->codigo_lugar);
          $stm->bindParam(5, $this->nombre1);
          $stm->bindParam(6, $this->nombre2);
          $stm->bindParam(7, $this->apellido1);
          $stm->bindParam(8, $this->apellido2);
          $stm->bindParam(9, $this->sexo);
          $stm->bindParam(10, $this->fecha_nacimiento);
          $stm->bindParam(11, $this->tipo_documento);
          $stm->bindParam(12, $this->documento);
          $stm->bindParam(13, $this->direccion);
          $stm->bindParam(14, $this->ciudad);
          $stm->bindParam(15, $this->departamento);
          $stm->bindParam(16, $this->pais);
          $stm->bindParam(17, $this->celular);
          $stm->bindParam(18, $this->correo_electronico);
          $stm->bindParam(19, $this->confirmado);
          $stm->bindParam(20, $this->fecha_confirmacion);
          $result = $stm->execute();

          if ($result == true) {
            $this->db->commit();
          } else {
            $this->db->rollback();
          }

          return $result;
        } catch (PDOException $e) {
          exit('Error en la inserción d elos datos');
        }
      }

      public function ConsultarUsuariosRegistrados()
      {
        $sql = "CAll SP_consultarUsuariosRegistrados(?)";
        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->email);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        } catch (PDOException $e) {
          echo $e->getMessage();
        }
      }

      public function ConsultarUsuarios()
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

      public function guardarUsuario()
      {

        $sql = "CALL SP_guardarUsuario(?, ?)";

        $this->db->beginTransaction();

        try
        {
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->email);
           $stm->bindParam(2, $this->password);
           $result = $stm->execute();

           if ($result == true) {
             $this->db->commit();
           } else {
             $this->db->rollback();
           }
        }catch (PDOException $e) {
          exit('Error guardando el usuario');
        }
      }

    }
 ?>
