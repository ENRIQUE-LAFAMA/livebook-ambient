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
        /*$buscarC = "SELECT cursos FROM reg_usuario WHERE correo = '$correo'";
        $buscador = mysqli_query($conexion, $buscarC);*/
        /*$filaU = $buscador->fetch_assoc();*/
        
        /*echo "'".$fila['cursos']."'";*/
        /*CHECAR COMO RECORRER EL ARREGLO PARA PODER TRAER TODAS LAS CLASES AGREGADAS*/
        $mostrarC = "SELECT * FROM clasesmateria WHERE codigoM ='$codigoM' ";
        $mostrador = mysqli_query($conexion, $mostrarC);
        /*$filaM = $mostrador->fetch_assoc();*/
        
       /*echo $filaM['codigoM']. "<br>". $filaU['cursos'];*/
        $i = 0;
       while($filaM = $mostrador->fetch_assoc()){
           $i++;
            ?>
            
            <hr>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vistaM<?php echo $i;?>" aria-expanded="true" aria-controls="collapseTwo">
                    <span><?php echo $filaM['tituloC'];$filaM['descripcionC']; ?>  </span>
                </a>
                <div id="vistaM<?php echo $i;?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
    
    /*hay que hacer que las materias se muestren en el panel del estudiante y del maestro*/
    public function mostrarMateria(){
        
        
        $correo = $_SESSION['correo'];
        include("conet.php");
        
        $buscarU = "SELECT * FROM reg_usuario WHERE correo ='$correo' ";
        $peticion = mysqli_query($conexion, $buscarU);
        $filaU = mysqli_fetch_assoc($peticion);
        $arregloU = array();
        $arregloU = explode(' ', $filaU['cursos']);
        
        
        $mostrarM = "SELECT * FROM clasesmateria";
        $mostrador = mysqli_query($conexion, $mostrarM);
        
        
        
        while($filaM = $mostrador->fetch_assoc()){
            
            
            for($i=0; $i < count($arregloU); $i++){
                
                if($filaM['codigoM'] == $arregloU[$i]){
                    /*$materiasAgregadas = $materiasAgregadas . $arregloU[$i] . " ";*/ 
                        $clases = $filaM['codigoM'];?>
                    
                    <a class="collapse-item" id="<?php $filaM['codigoM'];?>" href="mostrarclases.php?varClase=<?php echo "$clases";?>"><?php echo $filaM['materia'] . " - " . $filaM['Curso'];?></a>
                    
               <?php }
                
        }
        }
        
        
        
    
    }
    /*fin de mostrar materia*/
    /*public function agregarClase($idM, $codigoM, $text, $curso, $correo)*/
    public function agregarClase($codigoF, $correo){
        $gclase = "SELECT * FROM reg_usuario WHERE correo = '$correo' ";
        include("conet.php");
        $mostrador = mysqli_query($conexion, $gclase);
        $fila = $mostrador->fetch_assoc();
        $arreglo = array();
        $arreglo = explode(' ', $fila['cursos']);
        
        /*este bucle es para poder saber las materias ya agregadas en el arreglo que viene de la base de datos*/
        $materias="";
        foreach($arreglo as $elementos){
            
            if($elementos == $codigoF){
                
                
                echo "<script> alert('Esta materia ya la tienes registrada, verifica el codigo nuevamente.');window.location = '../panel/agregarMateria.php';</script>";
                break;
                
            }else{
                
                $materias = $materias . $elementos ." ";
                
                
            }
            
        }
        /*fin del for*/
                
        $verExist = "SELECT * FROM clasesmateria WHERE codigoM = '$codigoF' ";
        include("conet.php");
        $mostrador = mysqli_query($conexion, $verExist);
        $existencia = mysqli_num_rows($mostrador);
        if($existencia == 0){
            echo "<script> alert('Esta materia aun NO existe, verifique el codigo nuevamente y reintente.');window.location = '../panel/agregarMateria.php'</script>";
                    
        }
        else{           
        $materias = $materias . "$codigoF" . " ";
        
        $guardar = "$materias";
        
            $nMateria = "UPDATE reg_usuario SET cursos = '$guardar' WHERE correo = '$correo'";
            $actualiza = mysqli_query($conexion, $nMateria);
            if($actualiza){
                echo "<script> alert('Materia agregada, puedes revisar en tu panel.');window.location = '../panel/agregarMateria.php'</script>";
            }
                }
        
        
        /*$insertar = "INSERT INTO clasemateria (materia)"*/
    }
    /*crear materias como profesor*/
    public function crearMateria($nombreM, $idM, $codigoM, $text, $curso, $tituloC, $correo){
        session_start();
        $mCorreo = $_SESSION['correo'];
        
        include("conet.php");
        /*aqui se genera el codigo de materia el cual es unico por materia*/
        $codigoMateria = $idM . $curso . "-" . $codigoM;
        
        /*verificamos si esa materia existe para no duplicarla*/
        $concidir = "SELECT * FROM clasesmateria where codigoM = '$codigoMateria'";
        $encontrar = mysqli_query($conexion, $concidir);
        $comparadorDB = mysqli_num_rows($encontrar);
        /*si la linia anterior devuelve algun numero diferente a cero es por que existe la clase por lo que hacemos la comprovacion mediante el condicional if*/
            
        if($comparadorDB > 0){
            
            /*en caso de que exista la materia mostrara este mensaje*/
            echo "<script>alert('Esta materia ya existe.');window.location='../panel/agregarMateria.php';</script>";
            
        }
        else{
            /*en caso de que no exista la clase se guarda a la base de datos*/
             $guardar = "INSERT INTO clasesmateria (materia, tituloC, descripcionC, curso, codigoM) VALUE ('$nombreM','$tituloC','$text','$curso', '$codigoMateria')";
            $guardarM = mysqli_query($conexion,$guardar);
            
            $this->agregarClase($codigoMateria, $mCorreo);          
            if($guardarM){
            
            echo "<script>alert('Materia creada con EXITO.');window.location='../panel/agregarMateria.php';</script>";
            }
        }
        
        
            
            
        
        
        
    }
    
    
    
    
}

$mate = new Materia;



if(isset($_POST['CrearMateria'])){
    $idM = $_POST['selectMaestro'];
    $codigoM = $_POST['materiaM'];
    $text = $_POST['textarea'];
    $curso = $_POST['selectC'];
    $tituloC = $_POST['tituloC'];
    $correo = $_SESSION['correo'];
    include('conet.php');
    $concidir = "SELECT materia FROM materias where codigo = '$codigoM'";
    $encontrar = mysqli_query($conexion, $concidir);
    $nombreM =$encontrar->fetch_assoc();
    
    $mate->crearMateria($nombreM['materia'],$idM, $codigoM, $text, $curso,$tituloC, $correo);
}


if(isset($_POST['agregaM'])){
    session_start();
    $codigoc1 = $_POST['codigoc1'];
    $codigoc2 = $_POST['codigoc2'];
    if(empty($codigoc1) or empty($codigoc2)){
        echo "<script>alert('Debes completar el codigo para poder Registrar la materia');window.location = '../panel/agregarMateria.php';</script>";
    }else{
    $codigoF = $codigoc1 ."-". $codigoc2;
    $correo = $_SESSION['correo'];
    $mate->agregarClase($codigoF, $correo);}
}



?>