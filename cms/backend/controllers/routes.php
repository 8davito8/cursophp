<?php

  class Routes
  {

    public function routesController(){

      $routes = "login";

      if(isset($_GET['action'])){
        $routes = $_GET['action'];
      }

      $respuesta = RouteModels::routesModel($routes);

      include $respuesta;

    }
  }