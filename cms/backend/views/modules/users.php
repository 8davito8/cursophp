<?php

  session_start();

  if($_SESSION['id'] == ''){

    header("location:ingreso");

    exit();
  }

  include "views/modules/menu.php";
  include "views/modules/header.php";
?>
<div id="suscriptores" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

  <div>

    <table id="tablaSuscriptores" class="table table-striped dt-responsive nowrap">
      <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      <?php

        $users = new UsersManager();
        $users->showUsersController();
        $users->deleteUser();

      ?>
      </tbody>
    </table>

    <button class="btn btn-warning pull-right" style="margin:20px;">Imprimir Suscriptores</button>
  </div>

</div>