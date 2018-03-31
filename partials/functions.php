<?php
if(!isset($_SESSION))
   {
       session_start();
   }

if (isset($_COOKIE["userId"])){
  $_SESSION["userId"]=$_COOKIE["userId"];
}


function traerUsuarios(){
  $file = file_get_contents("json/usuarios.json");
  $file = explode(PHP_EOL,$file);
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

function existeUsername($username){
  $usuarios=traerUsuarios();
    foreach ($usuarios as $usuario) {
      if ($user["username"] == $username){
        return $usuario;
      }
    }
}

function validarLogin($data){
  $errores=[];

  if (!isset($data["email"]) || !$data["email"]){
    $errores["email"] = "ingresa un email";
    return $errores;
  } elseif ( ! filter_var($data["email"] , FILTER_VALIDATE_EMAIL) ) {
    $errores["email"] = "ingresa un email valido";
    return $errores;
  }else {
    $usuarios=traerUsuarios();
    foreach ($usuarios as $usuario) {
      if ($usuario["email"]==$data["email"]){
        if (!password_verify($data["password"],$usuario["password"])){
          $erorres["password"]="El password ingresado es incorrecto";
        }else{
          $_SESSION["userID"]=$usuario["userId"];
          if (isset($data["recordar"])){
            setcookie("userId",$usuario["userId"],time()+3600);
          }
          return "";
        }
      }
    }
    $errores["email"]="El email no esta registrado";
    return $errores;
  }
}


function validarRegistro($data){
  $errores=[];
  if (!isset($data["username"])||!$data["username"]){
    $errores["username"]="ingresa un nombre de usuario";
  }elseif (existeUsername($data["username"])) {
    $errores["username"]="El nombre de usuario ya esta registrado, por favor, elija otro nombre";
  }

  if (!isset($data["email"])||!$data["email"]){
    $errores["email"]="ingresa un email";
  }elseif (! filter_var($data["email"],FILTER_VALIDATE_EMAIL)) {
    $errores["email"]="ingresa un email valido";
  }elseif (existeMail($data["email"])){
    $errores["email"]="El email ya esta registrado";
  }

  if (!isset($data["password"])||!$data["password"]){
    $errores["password"]="ingresa un password";
  }elseif ( strlen( $data["password"]) < 7 )  {
    $errores["password"]="El password debe tener al menos 7 caracteres";
  }elseif ($data["password"]!=$data["repassword"]) {
    $errores["repassword"]="las contraseñas no coinciden";
  }
  return $errores;
}

function nuevoId(){
  $todos=traerUsuarios();
  $ultimo=array_pop($todos);
  return $ultmo["userId"]+1;
}

function guardar($usuario){
  $usuario=json_encode($usuario);
  file_put_contents("json/usuarios.json",$usuario.PHP_EOL);
}
function registrar($data){
  $usuario=[];
  $usuario["id"]=nuevoId();
  $usuario["username"]=$data["username"];
  $usuario["email"]=$data["email"];
  $usuario["password"]=password_hash($data["password"],PASSWORD_DEFAULT);
  guardar($usuario);
}
 ?>
