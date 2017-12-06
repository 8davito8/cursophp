<?php

  require_once "conexion.php";

  class UsersModel{

    public function showUsersModel($tabla){

      $stmt = Conexion::conectar()->prepare("SELECT id, nombre, email FROM $tabla");

      $stmt->execute();

      return $stmt->fetchAll();

      $stmt->close();

    }

    public function deleteUserModel($datos, $tabla){

      $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id= :id");

      $stmt->bindParam(":id", $datos, PDO::PARAM_INT);

      if($stmt->execute()){

        return "ok";

      }else{

        return "error";

      }

      $stmt->close();

    }

  }