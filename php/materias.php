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
        $correo = $_SESSION['correo'];
        include("conet.php");
        $buscarC = "SELECT cursos FROM reg_usuario WHERE correo = '$correo'";
        $buscador = mysqli_query($conexion, $buscarC);
        /*$filaU = $buscador->fetch_assoc();*/
        
        /*echo "'".$fila['cursos']."'";*/
        /*CHECAR COMO RECORRER EL ARREGLO PARA PODER TRAER TODAS LAS CLASES AGREGADAS*/
        $mostrarC = "SELECT * FROM clasesmateria WHERE codigoM ='match' ";
        $mostrador = mysqli_query($conexion, $mostrarC);
        /*$filaM = $mostrador->fetch_assoc();*/
        
       /*echo $filaM['codigoM']. "<br>". $filaU['cursos'];*/
        
       while($filaM = $mostrador->fetch_assoc()){
           
            ?>
            
            <hr>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vistaM" aria-expanded="true" aria-controls="collapseTwo">
                    <span><?php echo $filaM['tituloC'];$filaM['descripcionC']; ?>  </span>
                </a>
                <div id="vistaM" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <span class="collapse-item" >Descripcion: <?php echo $filaM['descripcionC']; ?></span>
                        
                    </div>
                </div>
            <!--oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo
            
            Benyamin18199claro1782FF
            -->
           
        
           
            
            
            
          
            <?php
        }
        
    }
    /*fin de mostrar materia*/
    /*public function agregarClase($idM, $codigoM, $text, $curso, $correo)*/
    public function agregarClase($codigoF, $correo){
        $gclase = "SELECT * FROM reg_usuario WHERE correo = '$correo' ";
        include("conet.php");
        $mostrador = mysqli_query($conexion, $gclase);
        $fila = $mostrador->fetch_assoc();
        
        
        /*$cont = count($fila['cursos']);
        echo $cont;*/
        
    
        
        $arreglo = array();
        $arreglo[] = $fila['cursos'];
        $arreglo[] = $codigoF;
        
        
        /*este bucle es para poder saber las materias ya agregadas en el arreglo que viene de la base de datos*/
        $materias="";
        foreach($arreglo as $elementos){
            $materias = $materias . "$elementos,";
            
        }
        
        
        $guardar = "$materias";
        
        $nMateria = "UPDATE reg_usuario SET cursos = '$guardar' WHERE correo = '$correo'";
        $actualiza = mysqli_query($conexion, $nMateria);
        
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
    $correo = $_SESSION['correo'];
    $mate->agregarClase($codigoF, $correo);
}



?>