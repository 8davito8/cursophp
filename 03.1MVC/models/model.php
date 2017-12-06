<?php

	class EnlacesPaginas{

		static public function enlacesPaginasModel($enlacesModel){

			switch($enlacesModel){
				case "inicio":
				case "nosotros":
				case "servicios":
				case "contactenos":
					$module = "views/modules/".$enlacesModel.".php";
					break;
				default:
					$module = "views/modules/inicio.php";

			}

			/*if($enlacesModel== "nosotros" || 
			   $enlacesModel == "servicios" ||
			   $enlacesModel == "contactenos" ||
			   $enlacesModel == "inicio"){

				$module = "views/modules/".$enlacesModel.".php";
			}else{

				$module = "views/modules/inicio.php";

			}*/

			return $module;

		}
	}

?>