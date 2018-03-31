<?php
if(!isset($_SESSION))
   {
       session_start();
   }

require_once("functions.php");

if (isset($_GET["modal_id"]) && $_GET["modal_id"]=="login-modal"){
  $erroresLogin = validarLogin($_POST);
  if (!$erroresLogin){
    header("location: perfil.php");
    exit;
  }
}

 ?>

<!--Login modal  -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login-modalLabel">Ingresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form class="" action="index.php?modal_id=login-modal" method="post">

          <div class="form-group">
            <div class="">
              <input class="form-control form-control-lg"  name="email" type="email" placeholder="TUMAIL@EMAIL.COM">
              <?php if (isset($errores["email"])): ?>
                <span class="error-message"><?=$erroresLogin["email"]?></span>
              <?php endif ?>
            </div>
            <input class="form-control form-control-lg" name="password" type="password" placeholder="PASSWORD">
            <?php if (isset($errores["password"])):?>
              <span  class="error-message"><?=$erroresLogin["password"]?></span>
            <?php endif ?>
          </div>
            <div class="form-group d-flex justify-content-center">
              <button type="submit"class="btn bg-primario text-white btn-lg mb-3" name="submt" data-toggle="modal" data-target="#login-modal">INGRESA</button>
            </div>
            <div class="form-group">
              <input type="checkbox" name="recordar">recodarme | <a href="#">Recuperar contraseña</a>
            </div>

            <div class="modal-footer">
                <span>aun no tenes cuenta? -</span><button type="button" name="register"class="btn btn-link btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#register-modal">Unite!</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
