<?php

    class mdlClientes
    {

      private $id_cliente;
      private $tipo_diligencia;
      private $fecha_diligenciamiento;
      private $lugar_diligenciamiento;
      private $codigo_lugar;
      private $nombre1;
      private $nombre2;
      private $apellido1;
      private $apellido2;
      private $sexo;
      private $fecha_nacimiento;
      private $tipo_documento;
      private $documento;
      private $direccion;
      private $ciudad;
      private $departamento;
      private $pais;
      private $celular;
      private $correo_electronico;
      private $confirmado;
      private $fecha_confirmacion;
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

      public function ActualizarConfirmacion()
      {
        $sql = "CAll SP_actualizarConfirmacion(?,?,?)";

        $this->db->beginTransaction();

        try {
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->documento);
          $stm->bindParam(2, $this->confirmado);
          $stm->bindParam(3, $this->fecha_confirmacion);
          $result = $stm->execute();

          if ($result == true) {
            $this->db->commit();
          } else {
            $this->db->rollback();
          }

          return $result;
        } catch (PDOException $e) {
          exit('Error en la actualizacion de los datos');
        }
      }

      public function validarDocCliente()
      {
         $sql = "CALL 	SP_ValidarDocumentoPersona(?)";
         $stm = $this->db->prepare($sql);
         $stm->bindParam(1, $this->documento);
         $stm->execute();
         return $stm->fetch(PDO::FETCH_ASSOC);
      }

      public function validarEmailCliente()
      {
        $sql = "CALL 	SP_ValidarEmailPersona(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->correo_electronico);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);
      }

      public function ConsultarInfoClientes()
      {
        $sql = "CALL 	SP_ConsultarInfoClientes(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->documento);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);
      }

    }
 ?>
