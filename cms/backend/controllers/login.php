<?php

  class Login
  {

    public function ingresoController(){
      if(isset($_POST['user'])) {

        if(preg_match('/^[a-zA-Z0-9]+$/',$_POST['user'])&&preg_match('/^[a-zA-Z0-9]+$/',$_POST['pass'])) {

          $crypt = crypt($_POST['pass'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

          $datosController = array("user" => $_POST['user'], "pass" => $crypt);

          $respuesta = LoginModels::loginModel($datosController, "usuarios");

          if ($respuesta["usuario"] == $_POST["user"] && $respuesta[password] == $crypt) {

            session_start();

            $_SESSION["id"] = $respuesta["id"];
            $_SESSION["user"] = $respuesta["usuario"];

            header("Location:dashboard");

          } else {

            echo "<div class='alert alert-danger'>Error al intentar acceder</div>";

          }


        }
      }

    }

  }