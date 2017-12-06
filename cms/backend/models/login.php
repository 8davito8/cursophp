<?php

  require_once "conexion.php";

  class LoginModels
  {

    public function loginModel($datosModel, $tabla){

      $stmt = Conexion::conectar()->prepare("SELECT id, usuario, password FROM $tabla WHERE usuario = :user AND password = :pass");

      $stmt->bindParam(":user", $datosModel['user'], PDO::PARAM_STR);
      $stmt->bindParam(":pass", $datosModel['pass'], PDO::PARAM_STR);

      $stmt->execute();

      return $stmt->fetch();

      $stmt->close();
    }


}