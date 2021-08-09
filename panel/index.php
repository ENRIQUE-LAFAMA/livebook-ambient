<?php

require_once "vistas/arriba.php";?><!--esta instruccion nos permite llamar sierta parde de codigo-->

<div class="container-fluid contenido"><!--cuerpo de la pagina principal-->
    <h1>hola <?php echo $_SESSION['nombre']; ?></h1>
    <?php
        
        /*include("../php/materias.php");$mate->mostrar("Match");*/
        
    ?>
    
</div>

<?php require_once "vistas/bajo.php";?>
