<?php

require_once "vistas/arriba.php";?>
    
<div class="container-fluid contenLibro">
       <h1 class="tituloM">Eliminar archivos</h1>
    <div class="container-fluid contenMostrar">
      <?php include("../php/addLibro.php");$lib->eliminar(); ?>
       
       <!--
       
         https://youtu.be/gkHpTSUFmrg 
         modificar eliminar el archivo
         -->
        
       
</div>
</div>

<?php require_once "vistas/bajo.php";?>