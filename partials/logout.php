<?php
if(!isset($_SESSION)){
  session_start();
}
  setcookie("userId","",-1);
  session_destroy();
  header("location: ../index.php");
  exit;
 ?>
