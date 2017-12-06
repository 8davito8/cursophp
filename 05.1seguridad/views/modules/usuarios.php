<?php

	session_start();

	if(!$_SESSION['validar']){

		header("Location:index.php?action=ingresar");

		exit();
	}

?>

<h1>USUARIOS</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th>Email</th>
				<th>Editar</th>
				<th>Borrar</th>

			</tr>

		</thead>

		<tbody>
			
			<?php

				$vista = new MvcController();
				$vista->vistaUsuariosController();
				$vista->borrarUsuariosController();

			?>

		</tbody>



	</table>

	<?php

		if(isset($_GET['action'])){
			if($_GET['action']=="cambio"){
				echo "Cambio exitoso";
			}
		}

	?>
	