<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap-JS -->
<script src="js/bootstrap.bundle.min.js"></script>


<?php if(isset($_GET["modal_id"])): ?>
    <script type='text/javascript'>
            $(document).ready(function(){
            $('#<?=$_GET["modal_id"]?>').modal('show');
            });
    </script>
<?php endif ?>
