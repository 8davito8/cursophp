<div id="backIngreso">
  <form method="post" id="formIngreso" onsubmit="return validateLogin()">

    <h1 id="tituloFormIngreso">INGRESO AL PANEL DE CONTROL</h1>

    <input class="form-control formIngreso" type="text" placeholder="Ingrese su Usuario" name="user" id="user">
    <input class="form-control formIngreso" type="password" placeholder="Ingrese su Contraseña" name="pass" id="pass">
    <?php

      $login = new Login();
      $login->ingresoController();

    ?>
    <input class="form-control formIngreso btn btn-primary" type="submit" value="Enviar">

  </form>
</div>