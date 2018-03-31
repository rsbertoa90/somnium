<?php
if(!isset($_SESSION))
   {
       session_start();
   }

 ?>
<!DOCTYPE html>
<html>
<?php require_once("partials/head.php"); ?>

  <body>
    <?php require_once("partials/navbar.php"); ?>
  </body>
</html>
