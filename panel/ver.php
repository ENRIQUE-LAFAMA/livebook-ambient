<?php

require_once "vistas/arriba.php";?>
    
<div class="container-fluid contenLibro">
      <form method="POST" action="buscar.php"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="inputBuscador" class="form-control bg-light border-0 small" placeholder="Busca tu libro..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" name="buscarL" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
       <h1 class="tituloM">Mostrando archivos</h1>
    <div class="container-fluid contenMostrar">
     
      <?php 
                include("../php/addLibro.php");
                    $lib->mostrar();
        include("buscar.php");
        while($fila = $mostrador->fetch_assoc()){

                ?>
                <article>
                    <a href="<?php echo $fila['ubicacion']; ?>">
                   <img class="M_img" src="<?php echo $fila['portada'];?>" alt=""></a>
                   <h3 class="mostrarTL tituloTL" >Titulo: <?php echo $fila['titulo'];?></h3>
                   <h4 class="mostrarTL" >Autor: <?php echo $fila['autor'];?></h4>
                   <h4 class="mostrarTL" >Editorial: <?php echo $fila['editorial'];?></h4>
                  <!-- <p>hola mi loco</p>-->
                </article>
                <?php
            }
        ?>
       
       
</div>
</div>

<?php require_once "vistas/bajo.php";?>
