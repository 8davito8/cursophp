<?php

  require_once "models/messageManager.php";

  require_once "controllers/template.php";
  require_once "controllers/messageManager.php";

  $template = new TemplateController();
  $template -> template();