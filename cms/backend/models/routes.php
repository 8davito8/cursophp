<?php
  class RouteModels{

    static public function routesModel($routes){

      switch($routes){
        case "dashboard":
        case "login":
        case "messages":
        case "slide":
        case "articles":
        case "profile":
        case "users":
        case "videos":
        case "galery":
        case "logout";
          $module = "views/modules/".$routes.".php";
          break;
        default:
          $module = "views/modules/login.php";
      }

      return $module;

    }
  }