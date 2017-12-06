<?php

  require_once "backend/models/conexion.php";

  class messageManagerModel
  {

    public function messageModel($datos, $tabla){

      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email, mensaje) VALUES (:nombre, :email, :mensaje)");

      $stmt -> bindParam(":nombre",$datos['name'], PDO::PARAM_STR);
      $stmt -> bindParam(":email",$datos['email'], PDO::PARAM_STR);
      $stmt -> bindParam(":mensaje",$datos['message'], PDO::PARAM_STR);

      if($stmt->execute()){

        return "ok";

      }else{

        return "error";

      }

      $stmt->close();

    }

  }