<?php

class Materia{
    
    public $materia;
    public $tituloC;
    public $descripcion;
    public $codigoM;
    
    
    public function __construct(){
        $this->materia;
        $this->tituloC;
        $this->descripcion;
        $this->codigoM;
    }
    public function mostrar($codigoM){
        
        include("conet.php");
        $mostrarC = "SELECT * FROM clasesmateria";
        $mostrador = mysqli_query($conexion, $mostrarC);
        $fila = $mostrador->fetch_assoc();
        $cont = count($fila);
        for($i=0; $i<=$cont; i++;){
            ?>
            <hr>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vistaM" aria-expanded="true" aria-controls="collapseTwo">
                    <span><?php echo $fila['materia'];$fila['descripcionC']; ?>  </span>
                </a>
                <div id="vistaM" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <span class="collapse-item" >Descripcion: <?php echo $fila['descripcionC']; ?></span>
                        
                    </div>
                </div>
        }
           
            
            
            
      <!--  while($fila){
            
            <hr>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vistaM" aria-expanded="true" aria-controls="collapseTwo">
                    <span><?php echo $fila['materia'];$fila['descripcionC']; ?>  </span>
                </a>
                <div id="vistaM" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <span class="collapse-item" >Descripcion: <?php echo $fila['descripcionC']; ?></span>
                        
                    </div>
                </div>-->
            <!--oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
          
            <?php
        }
        
    }
    
    
    
    
}

$mate = new materia;





?>