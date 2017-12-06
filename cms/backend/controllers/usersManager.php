<?php

  class UsersManager{

    public function showUsersController(){

      $respuesta = UsersModel::showUsersModel("suscriptores");

      foreach ($respuesta as $row => $item){

        echo '
          <tr>
            <td>'.$item["nombre"].'</td>
            <td>'.$item["email"].'</td>
            <td><a href="index.php?action=users&idDelete='.$item["id"].'"><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></a></td>
            <td></td>
          </tr>
        ';
      }
    }

    public function deleteUser(){

      if(isset($_GET['idDelete'])){

        $respuesta = UsersModel::deleteUserModel($_GET['idDelete'], "suscriptores");

        if($respuesta == "ok"){
          echo'<script>
						
            swal({
              title: "¡OK!",
              text: "¡El registro se ha borrado correctamente!",
              type: "success",
              confirmButtonText: "Cerrar",
              closeOnConfirm: false
						},

            function(isConfirm){
               if (isConfirm) {	   
                  window.location = "users";
                } 
						});

          </script>';
        }
      }

    }
}