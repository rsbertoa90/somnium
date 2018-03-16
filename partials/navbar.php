<?php require_once("modals.php") ?>
<!-- navbar -->
<nav class="navbar navbar-expand-md  row">
  <a class="navbar-brand display-1 font-weight-bold text-white col-4" href="#">SOMNIUM</a>
  <button class="navbar-toggler btn-menu font-weight-bold text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="ion-navicon-round text-white font-weight-bold"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav d-flex justify-content-end  ml-5">
      <li class="nav-item">
        <a class="n-link " href="#">Home</a>
      </li>
      <li class="nav-item ">
        <a class="n-link" href="#" data-toggle="modal" data-target="#register-modal">Registrate</a>
      </li>
      <li class="nav-item">
        <a class="n-link" href="#" data-toggle="modal" data-target="#login-modal">Ingresa</a>
      </li>
      <li class="nav-item">
        <a class="n-link" href="#">Preguntas Frecuentes</a>
      </li>
    </ul>

  </div>
  <form class="form-inline my-2 my-lg-0 col-8 d-flex flex-wrap align-content-start justify-content-start">
    <div class="form-group row">
      <input class="form-control mr-sm-2 col-9" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary  mr-sm-2 col-2" type="submit"> <span class="ion-ios-search-strong "></span> </button>
    </div>
  </form>
</nav>
<!--/navbar  -->
