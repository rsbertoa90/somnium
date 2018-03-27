<?php
session_start();

require_once("functions.php");




if(isset($_GET["modal_id"])){
  if ($_GET["modal_id"]=="register-modal"){
    if ($_POST){
      if (!trim($_POST["nombre"])){
        $errorNombre="por favor completa este campo";
      }
      if (!trim($_POST["apellido"])){
        $errorApellido="por favor completa este campo";
      }
      if (!trim($_POST["email"])){
        $errorMail="por favor completa este campo";
      }elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $errorMail="por favor ingresa una direccion de mail valida";
      }
      if(!trim($_POST["password"])){
        $errorPassword="por favor completa este campo";
      }
    }
    $errorMail = verificarUsuarioDuplicado($POST["email"]);

    if (!$errorMail && !$errorNombre && !$errorApellido && !$errorPassword ){
        $_POST["password"]=password_hash($_POST["password"],PASSWORD_DEFAULT);
        file_put_contents("../json/usuarios.json",json_encode($_POST),FILE_APPEND);
    }

  }
  elseif ($_GET["modal_id"]=="login-modal") {

  }
}


 ?>



<!-- /modales -->
