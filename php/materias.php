<?php


class Materia{
    
    public $materia;
    public $tituloC;
    public $descripcion;
    public $codigoM;
    public $codigoc1;
    public $codigoc2;
    public $correo;
    
    
    public function __construct(){
        $this->materia;
        $this->tituloC;
        $this->descripcion;
        $this->codigoM;
    }
    public function mostrar($codigoM){
        
        include("conet.php");
        $mostrarC = "SELECT * FROM clasesmateria WHERE codigoM = '$codigoM'";
        $mostrador = mysqli_query($conexion, $mostrarC);
        /*$fila = $mostrador->fetch_assoc();
        $nfila = count($fila);
        $contador = count($fila); */
        
        
       while($fila = $mostrador->fetch_assoc()){
           
            ?>
            
            <hr>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vistaM" aria-expanded="true" aria-controls="collapseTwo">
                    <span><?php echo $fila['tituloC'];$fila['descripcionC']; ?>  </span>
                </a>
                <div id="vistaM" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <span class="collapse-item" >Descripcion: <?php echo $fila['descripcionC']; ?></span>
                        
                    </div>
                </div>
            <!--oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo
            
            Benyamin18199claro1782FF
            -->
           
        
           
            
            
            
          
            <?php
        }
        
    }
    /*fin de mostrar materia*/
    public function agregarClase($idM, $codigoM, $text, $curso, $correo){
        $gclase = "SELECT * FROM reg_usuario WHERE correo = '$correo' ";
        include("conet.php");
        $mostrador = mysqli_query($conexion, $gclase);
        $fila = $mostrador->fetch_assoc();
        
        
        /*$cont = count($fila['cursos']);
        echo $cont;*/
        
        
        
        $arreglo[] = $fila['cursos'];
        $arreglo[] = "rojo";
        
        echo $arreglo[1];
        
        
        
        
        
        
        
        /*$insertar = "INSERT INTO clasemateria (materia)"*/
    }
    
    
    
    
}

$mate = new Materia;

if(isset($_POST['agregaC'])){
    $idM = $_POST['selectMaestro'];
    $codigoM = $_POST['materiaM'];
    $text = $_POST['textarea'];
    $curso = $_POST['selectC'];
    $tituloC = $_POST['tituloC'];
    $correo = $_SESSION['correo'];
    $mate->agregarClase($idM, $codigoM, $text, $curso, $correo);
}


if(isset($_POST['agregaM'])){
    
    $codigoc1 = $_POST['codigoc1'];
    $codigoc2 = $_POST['codigoc2'];
    $codigoF = $codigoc1 . $codigoc2;
    
    $mate->agregarClase($codigoF);
}



?>