    <?php

require_once "vistas/arriba.php";?><!--esta instruccion nos permite llamar sierta parde de codigo-->

<div class="container-fluid contenido"><!--cuerpo de la pagina principal-->
    <?php
        include('../php/conet.php');
        $materiaSelecionada = $_GET['varClase'];
         $mostrarM = "SELECT materia FROM clasesmateria where codigoM = '$materiaSelecionada' ";
        $mostrador = mysqli_query($conexion, $mostrarM);
        $filaM = mysqli_fetch_assoc($mostrador);
    ?>
    <h1><?php echo $filaM['materia']; ?></h1>
    <?php
        
    
        
        include_once("../php/materias.php");$mate->mostrar($materiaSelecionada);
    
        
    ?>
    
</div>

<?php require_once "vistas/bajo.php";?>