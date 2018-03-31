<?php
if(!isset($_SESSION))
   {
       session_start();
   }

$current="index.php";
$categorias=[
  "ion-ios-home-outline",
  "ion-social-tux",
  "ion-social-freebsd-devil",
  "ion-social-snapchat-outline",
  "ion-social-octocat",
  "ion-android-favorite",
  "ion-ios-cloudy-night",
];


?>

<!DOCTYPE html>
<html>
  <?php require_once("partials/head.php"); ?>

  <body>
    <div class="fondo">
      <div class="container container-fluid">
        <?php require_once("partials/navbar.php"); ?>

        <div class="row bg-primario jumbotron jumbotron-fluid d-flex flex-wrap justify-content-center">
          <img src="images/banner.jpg" alt="banner" class="banner">
        </div>

          <div class="row categorias">
            <?php foreach ($categorias as $categoria) : ?>
              <div class="caja-categoria">
                <div class="icono-categoria">
                  <span class="<?=$categoria?>"></span>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <?php require_once("partials/footer.php"); ?>
      </div>
    </div>














    <?php require_once("partials/js-import.php"); ?>
  </body>

</html>
