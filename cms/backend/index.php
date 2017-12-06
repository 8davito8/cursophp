<?php

  require_once "models/routes.php";
  require_once "models/login.php";
  require_once "models/usersManager.php";

  require_once "controllers/template.php";
  require_once "controllers/routes.php";
  require_once "controllers/login.php";
  require_once "controllers/usersManager.php";

  $template = new Template();
  $template->templateController();