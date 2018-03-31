<?php
if(!isset($_SESSION)){
  session_start();
}
require_once("functions.php");
require_once("loginModal.php");
require_once("registerModal.php");


?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primario">
  <form class="form-inline my-2 my-lg-0 w-100 ">
    <input class="form-control mr-sm-2 w-75" type="text" placeholder="Busqueda" aria-label="Search">
    <button class="btn btn-primary my-2 my-sm-0" type="submit"> <span class="ion-ios-search-strong text-white"></span> </button>
  </form>
</nav>


<nav class="navbar navbar-expand-lg navbar-dark bg-primario  ">

      <a class="navbar-brand" href="#">Somnium</a>
      <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ion-navicon-round"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ">
          <?php foreach ($navigation as $url => $name): ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?=$url?>"> <?=$name?></a>
            </li>
          <?php endforeach; ?>
          <li class="nav-item active">
          <?php if (isset($_SESSION["userId"])): ?>
            <a class="nav-link" href="partials/logout.php" >Salir</a>
          <?php else: ?>
            <a class="nav-link" href="" data-toggle="modal" data-target="#login-modal">ingresa</a>
          <?php endif; ?>
        </li>

        </ul>
      </div>
</nav>
