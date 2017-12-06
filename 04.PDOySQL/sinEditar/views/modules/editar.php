<?php

	session_start();

	if(!$_SESSION['validar']){

		header("Location:index.php?action=ingresar");

		exit();
	}
	if(!$_GET['id']){

		header("Location:index.php?action=usuarios");

		exit();
	}

?>
<h1>EDITAR USUARIO</h1>

<form method="post" action="">
	
	<?php

		$editarUsuario = new MvcController();
		$editarUsuario->editarUsuarioController();
		$editarUsuario->actualizarUsuarioController();

	?>

	<input type="submit" value="Actualizar">

</form>

