<?php

  class messageManager{

    public function messageController(){

      if(isset($_POST['name'])){

        if(preg_match('/^[a-zA-Z\s]+$/',$_POST['name'])&&preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$_POST['mail'])&&preg_match('/^[a-zA-Z0-9\s\.,]+$/',$_POST['message'])){


          $datosController = array("name"=>$_POST['name'],"email"=>$_POST['mail'],"message"=>$_POST['message']);
          $respuesta = messageManagerModel::messageModel($datosController,"mensajes");

          if($respuesta == "ok"){
            echo'<script>
						
            swal({
              title: "¡OK!",
              text: "¡El mensaje ha sido enviado correctamente!",
              type: "success",
              confirmButtonText: "Cerrar",
              closeOnConfirm: false
						},

            function(isConfirm){
               if (isConfirm) {	   
                  window.location = "index.php";
                } 
						});

					</script>';
          }


        }else{

          echo "<div class='alert alert-danger'>¡No se puede enviar el mensaje, no se permiten carácteres especiales!</div>";

        }

      }


    }
}