<?php $current="index.php";?>
<!DOCTYPE html>
<html>
  <?php require_once("partials/head.php"); ?>

  <body>


<div class="container">

  <?php require_once("partials/navbar.php"); ?>
      <section id="banner" class="jumbotron jumbotron-fluid row bg-primario">
          <img src="images/banner.jpg" alt="banner">
      </section>

      <section  class="row categorias mb-5">

      <div class="caja-categoria">
        <div class="icono-categoria">
          <span class="ion-ios-home-outline"></span>
        </div>
      </div>
      <div class="caja-categoria">
        <div class="icono-categoria">
          <span class="ion-social-tux"></span>
        </div>
      </div>
      <div class="caja-categoria">
        <div class="icono-categoria">


          <span class="ion-social-freebsd-devil"></span>
        </div>
      </div>
      <div class="caja-categoria">
        <div class="icono-categoria">
          <span class="ion-social-snapchat-outline"></span>
        </div>
      </div>
      <div class="caja-categoria">
        <div class="icono-categoria">
          <span class="ion-social-octocat"></span>
        </div>
      </div>
      <div class="caja-categoria">
        <div class="icono-categoria">
          <span class="ion-android-favorite"></span>
        </div>
      </div>
      <div class="caja-categoria">
        <div class="icono-categoria">
          <span class="ion-ios-cloudy-night"></span>
        </div>
      </div>

      </section>
      <?php require_once("partials/footer.php"); ?>
  </div>



  <?php require_once("partials/js-import.php"); ?>
  </body>
</html>
