<?php
  $socialIcons=[
    "ion-social-facebook",
    "ion-social-google",
    "ion-social-instagram",
    "ion-social-instagram",
    "ion-social-twitter",
    "ion-social-linkedin",
  ];
  ?>

<footer class="row d-flex flex-wrap ">
  <div class="d-flex flex-wrap col-12 justify-content-around">
    <?php foreach ($socialIcons as $icon):  ?>
      <div class="icono">
        <span class="<?=$icon?>"></span>
      </div>
    <?php endforeach;  ?>
  </div>
</footer>
