

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="register-modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="register-modalLabel">Unite a Somnium</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="" action="index.php?modal_id=register-modal" method="post">

          <div class="form-group">
              <div class="">
                <input class="form-control form-control-lg" type="text" name="nombre" placeholder="NOMBRE">
                <span class="error-message"><?=$errorNombre?></span>
              </div>
              <div class="">
                <input class="form-control form-control-lg" type="text" name="apellido" placeholder="APELLIDO">
                <span class="error-message"><?=$errorApellido?></span>
              </div>
              <div class="">
                <input class="form-control form-control-lg" type="email" name="email" placeholder="TUMAIL@EMAIL.COM">
                <span class="error-message"><?=$errorMail?></span>
              </div>
              <div class="">
                <input class="form-control form-control-lg" type="password" name="password" placeholder="UN PASSWORD PARA TU CUENTA">
                <span class="error-message"><?=$errorPassword?></span>
              </div>
          </div>
            <div class="form-group d-flex justify-content-center">
              <button type="submit"class="btn bg-primario text-white btn-lg mb-3" name="submt">CREA TU CUENTA!</button>
            </div>
            <div class="modal-footer">
                <span>ya tienes cuenta?  -</span><button type="button" name="login"class="btn btn-link btn-small" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Ingresa</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
