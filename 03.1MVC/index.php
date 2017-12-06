<?php

#El index: Mostraremos la salida de las vistas al usuario y tambien a traves de el enviaremos las distintas acciones que usuario envia al controlador

require_once "controllers/controller.php";
require_once "models/model.php";

$mvc = new MvcController();
$mvc -> plantilla();




?>