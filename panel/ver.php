<?php

require_once "vistas/arriba.php";?>
    
<div class="container-fluid contenLibro">
       <h1 class="tituloM">Mostrando archivos</h1>
    <div class="container-fluid contenMostrar">
      <?php include("../php/addLibro.php");$lib->mostrar(); ?>
       
       
</div>
</div>

<?php require_once "vistas/bajo.php";?>
