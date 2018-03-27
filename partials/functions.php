<?php
session_start();

if (isset($_COOKIE["userId"])){
  $_SESSION["userId"]=$_COOKIE["userId"];
}

function traerUsuarios(){
  $file = file_get_contents("../json/usuarios.json");
  $file = explode($file);
  array_pop($file);
  $usuarios=[];
  foreach ($file as $usuario) {
    $usuarios[]=json_decode($usuario,true);
  }
  return $usuarios;
}

function existeMail($mail){
  $usuarios=traerUsuarios();
    foreach ($usuarios as $usuario) {
      if ($user["email"] == $mail){
        return $usuario;
      }
    }
}

function validarLogin($data){
  $errores=[];

  if (!$data["email"]){
    $errores["email"] = "ingresa un email";
  } elseif ( !filter_var($data["email"],FILTER_VALIDATE_EMAIL) ){
    $errores["email"] = "ingresa un email valido";
  }

  $usuarios=traerUsuarios();
  foreach ($usuarios as $usuario) {
    if($usuario[""])
  }
}


 ?>
