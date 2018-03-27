<?php
session_start();
require_once("functions.php");

if (isset($_GET["modal_id"]) && $_GET["modal_id"]=="loginModal"){
  $errores = validarLogin($_POST);
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
            <input class="form-control form-control-lg" type="email" placeholder="TUMAIL@EMAIL.COM">
            <input class="form-control form-control-lg" type="password" placeholder="PASSWORD">
          </div>
            <div class="form-group d-flex justify-content-center">
              <button type="submit"class="btn bg-primario text-white btn-lg mb-3" name="submt" data-toggle="modal" data-target="#login-modal">INGRESA</button>
            </div>

            <div class="modal-footer">
                <span>aun no tenes cuenta? -</span><button type="button" name="register"class="btn btn-link btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#register-modal">Unite!</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
