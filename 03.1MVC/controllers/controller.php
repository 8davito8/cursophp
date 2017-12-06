<?php

class MvcController{

	#Llamada a la plantilla

	public function plantilla(){

		#include() Se utiliza para invocar el archivo que contiene código html.
		include "views/template.php";
	}

	#Interacción usuario
	public function enlacesPaginasController(){

		$enlacesController = "inicio";

		if(isset($_GET['action'])){

			$enlacesController = $_GET['action'];

		}

		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

		include $respuesta;

	}
}


?>