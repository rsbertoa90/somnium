<?php $current="faq.php"; ?>
<!DOCTYPE html>
<html>
  <?php require_once("partials/head.php"); ?>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <?php require_once("partials/navbar.php"); ?>

        <div id="accordion" class="col-xl-6 mb-5">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed faq-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  ¿Qué es Eventr?
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
              Eventr es una plataforma que permite tanto a DJ's como a organizadores de eventos encontrarse para generar shows increíbles.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed faq-btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Soy DJ ¿Qué me brinda la plataforma?
                </button>
              </h5>ire_once("partials/navbar.php"); ?>

            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                Los DJ tendrán la posibilidad de crearse un perfil con todos sus datos, incluyendo las redes sociales con sus sets, fotos y experiencias. Así mismo tendrán un calendario donde podrán poner su disponibilidad para tocar.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed faq-btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Y si soy organizador?
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Los organizadores de eventos, nuestros principales clientes, tendrán la posibilidad de buscar DJ's por nombre, género o disponibilidad de fecha.
              </div>
            </div>
          </div>
        </div>
        <!-- /acordion -->


        <?php require_once("partials/footer.php"); ?>

          <?php require_once("partials/js-import.php"); ?>
  </body>
</html>
