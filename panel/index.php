<?php

require_once "vistas/arriba.php";?><!--esta instruccion nos permite llamar sierta parde de codigo-->

<div class="container-fluid contenido"><!--cuerpo de la pagina principal-->
    <h1>Matematicas</h1>
    <?php
        
        include("../php/materias.php");$mate->mostrar("LENG");
        
    ?>
    
</div>

<?php require_once "vistas/bajo.php";?>
