<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	
		
		include "views/template.php";
	
	}

	#ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}

		else{

			$enlaces = "index";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}

	#registro de usuarios

	public function registroUsuarioController(){

		if(isset($_POST['usuario'])){
			$datos = array("usuario"=>$_POST['usuario'],"password"=>$_POST['password'],"email"=>$_POST['email']);

			$respuesta = Datos::registroUsuarioModel($datos, "usuarios");

			if($respuesta=="success"){
				header("location:index.php?action=ok");
			}else{
				header("location:index.php");
			}
		}

	}

	#Ingreso de usuarios
	public function ingresoUsuarioController(){
		if(isset($_POST['usuariologin'])){

			$datos = array("usuario"=>$_POST['usuariologin'],"password"=>$_POST['passwordlogin']);

			$respuesta = Datos::ingresoUsuarioModel($datos,"usuarios");

			if($respuesta['usuario'] == $_POST[usuariologin] && $respuesta['password'] == $_POST[passwordlogin]){

				session_start();

				$_SESSION['validar'] = true;

				header("Location:index.php?action=usuarios");

			}else{

				header("Location:index.php?action=fallo");

			}

		}
		
	}

	#Vista de usuarios
	public function vistaUsuariosController(){

		$respuesta = Datos::vistaUsuariosModel('usuarios');

		foreach ($respuesta as $key => $value) {
			echo "<tr>
				<td>".$value["usuario"]."</td>
				<td>".$value["password"]."</td>
				<td>".$value["email"]."</td>
				<td><a href='index.php?action=editar&id=".$value['id']."'><button>Editar</button></a></td>
				<td><a href='index.php?action=usuarios&id=".$value['id']."'><button>Borrar</button></a></td>
			</tr>";
		}
		

	}

	#Editar usuario

	public function editarUsuarioController(){

		$datos = $_GET['id'];

		$respuesta = Datos::editarUsuarioModel($datos, 'usuarios');

		echo '<input type="text" value="'.$respuesta['usuario'].'" name="usuarioEditar" required>

			<input type="password" value="'.$respuesta['password'].'" name="passwordEditar" required>

			<input type="email" value="'.$respuesta['email'].'" name="emaiEditar" required>
			
			<input type="hidden" value="'.$respuesta['id'].'" name="idEditar">
			';

	}

	#actualizar

	public function actualizarUsuarioController(){

		if(isset($_POST['usuarioEditar'])){

			$datos = array ("id"=>$_POST['idEditar'],"usuario"=>$_POST['usuarioEditar'],"password"=>$_POST['passwordEditar'],"email"=>$_POST['emaiEditar']);

			$respuesta = Datos::actualizarUsuarioModel($datos, "usuarios");

			if($respuesta=="success"){
				header("Location:index.php?action=cambio");

			}else{
				echo "No ha sido posible actualizar el usuario";
			}
		}

	}

	#borrar

	public function borrarUsuariosController(){

		if(isset($_GET['id'])){

			$datos = $_GET['id'];

			$respuesta = Datos::borrarUsuarioModel($datos, 'usuarios');

			if($respuesta=="success"){
				header("Location:index.php?action=usuarios");

			}
		}

	}

}

?>