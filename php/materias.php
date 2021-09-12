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
                    <span><?php echo $filaM['tituloC']; ?>  </span>
                </a>
                <div id="vistaM<?php echo $i;?>" class="collapse contenClase" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class=" bg-white py-2 collapse-inner rounded contenDescripcion">
                        <span class="collapse-item" >Descripcion: <?php echo $filaM['descripcionC']; ?></span>
                        
                        <?php  if($_SESSION['tipoCuenta']== 1):
                                
                        ?>
                               <div class="revision">
                                   
                                    <table class="tablaClaseEntrega">
                                       <tr>
                                           <th class="tituloTabla">Estudiante</th>
                                           <th class="tituloTabla">Entrea</th>
                                       </tr>
                                       <?php
                                            $titulo = $filaM['tituloC'];
                                            $sql = "SELECT * FROM tareasentregadas WHERE tituloClase = '$titulo' and seccion = '$codigoM'";
                                            include('conet.php');
                                            $peticion = mysqli_query($conexion, $sql);
                                            while($filaClase = $peticion->fetch_assoc()){
                                                
                                            
                                            
                                            
                                        ?>
                                        <tr class="filaTabla">
                                            <td class="data"><?php echo $filaClase['nombre_E'];?></td>
                                            <td class="data"><a href="<?php if($filaClase['tipoEntrega'] == "PDF"){echo $filaClase['entrega'];}else{echo "#";} ?>"><?php echo $filaClase['entrega'];?></a></td>
                                        </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                        <?php endif?>
                        <!--muestra el formulario de entrega para el estudiante-->
                        <?php  if($_SESSION['tipoCuenta']== 2):?>
                        <hr>
                           <h3>Entrega</h3>
                        
                            <div class="formaEntrega">
                                   <?php

                                    if($filaM['tipoEntrega'] == "comentario"):?>
                              <div class="entregaFile">
                                   <form action="../php/materias.php" method="post">
                                       
                                        <textarea name="comentarioEntrega" id=""  placeholder="* Comenta aqui"class="textEntrega" cols="30" rows="10"></textarea>
                                        
                                        <input type="text" style="display:none;" name="tituloC" value="<?php echo $filaM['tituloC'];?>" >
                                        <input type="text" style="display:none;" name="codigoM" value="<?php echo $filaM['codigoM'];?>">
                                        <input type="text" style="display:none;" name="materia" value="<?php echo $filaM['materia'];?>">
                                        <br>
                                        <input type="submit" class="enviarPDF" name="enviarComentario" id="" value="Comentar">
                                   </form>
                                </div>
                                <?php
                                    endif;
                                    if($filaM['tipoEntrega'] == "PDF"):
                                ?>
                                  <div class="entregaFile"> 
                                       <!--<label for="fileEntrega" class="labelEntrega">Agregar tarea:</label>-->
                                        <form action="../php/materias.php" method="post" enctype="multipart/form-data">
                                            
                                        <input type="file" required name="entregaPdf" id="fileEntrega">
                                        <input type="text" style="display:none;" name="tituloC" value="<?php echo $filaM['tituloC'];?>" >
                                        <input type="text" style="display:none;" name="codigoM" value="<?php echo $filaM['codigoM'];?>">
                                        <input type="text" style="display:none;" name="materia" value="<?php echo $filaM['materia'];?>">
                                        <input type="submit" class="enviarPDF" name="enviarPdf" id="" value="entregaPdf">
                                        </form>
                                        
                                    </div>
                                    <?php
                                    endif;
                                ?>
                             </div>
                        <?php endif?>
                        <!--muestra el formulario de entrega para el estudiante-->
                        
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
        $filaDb = $mostrador->fetch_assoc();
        
        
        $misMaterias = [];
        $index = 0;
        
        /*foreach($q as $valor){
            if(!in_array($valor,$misMaterias)){
                $misMaterias[$index++] = $valor;
            }
        }*/
        
        while($filaM = $mostrador->fetch_assoc()){
            
            if(!in_array($filaM['codigoM'],$misMaterias)){
                
            
            for($i=0; $i < count($arregloU); $i++){
                
                if($filaM['codigoM'] == $arregloU[$i]){
                    
                    
                    $clases = $filaM['codigoM'];
                   
                    
?>
                    
                    <a class="collapse-item" id="<?php $filaM['codigoM'];?>" href="mostrarclases.php?varClase=<?php echo "$clases";?>"><?php echo $filaM['materia'] . " - " . $filaM['Curso'];?></a>
                    
               <?php 
                $misMaterias[$index++] = $filaM['codigoM'];
                }
                
                
        }
            /*$filtro = array_unique();*/
                
            
        } /*fin del if para validar duplicadods*/
        }
        
            /*      no tocar            */
        
        /*while($filaM = $mostrador->fetch_assoc()){
            
            
            for($i=0; $i < count($arregloU); $i++){
                
                if($filaM['codigoM'] == $arregloU[$i]){
                   
                    $clases = $filaM['codigoM'];
                    
                    
?>
                    
                    <a class="collapse-item" id="<?php $filaM['codigoM'];?>" href="mostrarclases.php?varClase=<?php echo "$clases";?>"><?php echo $filaM['materia'] . " - " . $filaM['Curso'];?></a>
                    
               <?php }
                
        }
            
        }*/
        
        
        
    
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
    public function crearClaseMaestro($nombreM, $seccionCurso, $text, $curso, $tituloC, $agregarLibro, $fEntrega){
        session_start();
        $mCorreo = $_SESSION['correo'];
        
        include("conet.php");
        /*aqui se genera el codigo de materia el cual es unico por materia*/
        
        
        /*verificamos si esa materia existe para no duplicarla*/
        $concidir = "SELECT * FROM clasesmateria where codigoM = '$curso'";
        $encontrar = mysqli_query($conexion, $concidir);
        $comparadorDB = mysqli_num_rows($encontrar);
        /*si la linia anterior devuelve algun numero diferente a cero es por que existe la clase por lo que hacemos la comprovacion mediante el condicional if*/
            
        if($comparadorDB <= 0){
            
            /*en caso de que exista la materia mostrara este mensaje*/
            echo "<script>alert('Esta materia aun no existe.');window.location='../panel/addClase.php';</script>";
            
        }
        else{
            /*comprobar si se exige libros*/
            if($agregarLibro == 1){
                 
                ?>
                
                <?Php
                
            /*en caso de que no exista la clase se guarda a la base de datos*/
                
            }/*fin del if agregar un libro*/
            
             $guardar = "INSERT INTO clasesmateria (materia, tituloC, descripcionC, Curso, codigoM, tipoEntrega) VALUE ('$nombreM','$tituloC','$text','$seccionCurso', '$curso', '$fEntrega')";
            $guardarM = mysqli_query($conexion,$guardar);
            
            if($guardarM){
            
            echo "<script>alert('Asignacion agregada con EXITO.');window.location='../panel/addClase.php';</script>";
            }
        }/*fin del else si existe la materia*/
        
        
            
            
        
        
        
    }
    public function mostrarMateriaClase(){
    
        
        $correo = $_SESSION['correo'];
        include("conet.php");
        
        $buscarU = "SELECT * FROM reg_usuario WHERE correo ='$correo' ";
        $peticion = mysqli_query($conexion, $buscarU);
        $filaU = mysqli_fetch_assoc($peticion);
        $arregloU = array();
        $arregloU = explode(' ', $filaU['cursos']);
        
        
        $mostrarM = "SELECT * FROM clasesmateria";
        $mostrador = mysqli_query($conexion, $mostrarM);
        
        $noDuplicar = [];
        $index = 0;
        
        while($filaM = array_unique($materias = $mostrador->fetch_assoc())){
            
            if(!in_array($filaM['codigoM'], $noDuplicar)){
            
            for($i=0; $i < count($arregloU); $i++){
                
                if($filaM['codigoM'] == $arregloU[$i]){
                    /*$materiasAgregadas = $materiasAgregadas . $arregloU[$i] . " ";*/ 
                        $clases = $filaM['codigoM'];?>
                    
                    <option value="<?php echo $filaM['codigoM']; ?>"><?php echo $filaM['materia'] . " - " . $filaM['Curso'];?></option>
                    
                    
                    
                    
               <?php }
                
        }
                $noDuplicar[$index++] = $filaM['codigoM'];/*agregamos el codigo de materia al arreglo para evitar la duplicacion */
            } /*fin del if que verifica para evitar la duplicacion de materias*/
        
        }
        
    
    }
    
    public function entregaClaseComent($tituloC, $codigoM, $materia, $comentario, $idEstudiante, $Estudiante){
        if(!empty($comentario)){
            
        
                    $guardarTarea = "INSERT INTO tareasentregadas (seccion, materia, tituloClase, tipoEntrega, entrega,id_estudiante, nombre_E) VALUES ('$codigoM', '$materia', '$tituloC', 'comentario', '$comentario', '$idEstudiante', '$Estudiante')";
                    
                    include("conet.php");
                    $conf = mysqli_query($conexion, $guardarTarea);/*ejecutamos la consulta para guardar*/
                    if ($conf) {/*si se guardo sactisfactoriamente muestra una alerta y redirije a la pagina principal del usuario logueado*/
                            echo " <script> alert('Entrega Exitosa'); history.back();</script>";
                        } else {/*si no se guarda muestra error */
                            echo " <script> alert('No se pudo procesar tu entrega.'); history.back();</script>";
                            /*echo "<script> alert('No se ha guardado el Libro');</script>";*/
                        }
                
            
        }else{/*else del if que verifica si el comentario esta vacio o no*/
            
        }
        
        
        
        
    }
    public function entregaClaseFile($tituloC, $codigoM, $materia, $archivo, $idEstudiante, $Estudiante){
     
        if(!empty($archivo)){
            $rutaSaved;
            $permiteArchivo = array('pdf');
            
            $extArchivo = explode(".", $_FILES['entregaPdf']['name']);
            $verExtArch = strtolower(end($extArchivo));
            
            if (in_array($verExtArch, $permiteArchivo)) {
                $nArchivo = basename($_FILES["entregaPdf"]["name"]);/*tomamos el nombre propio del archivo*/
                $nombreF =  date("d-m-y") . "-" . date("H-i-s") . "_" . $nArchivo;/*modificamos el nombre antes de guardar*/
                $rutaSaved = "../tareasEntregadas/" . $nombreF; /*creamos una variable para asignar una ruta de guardado*/
                $saveTarea = move_uploaded_file($_FILES["entregaPdf"]["tmp_name"], $rutaSaved);/*movemos el libro a la ruta asignada en la variable*/
                if($saveTarea){
                    $guardarTarea = "INSERT INTO tareasentregadas (seccion, materia, tituloClase, tipoEntrega, entrega,id_estudiante, nombre_E) VALUES ('$codigoM', '$materia', '$tituloC', 'PDF',$rutaSaved', '$idEstudiante', '$Estudiante')";
                    
                    include("conet.php");
                    $conf = mysqli_query($conexion, $guardarTarea);/*ejecutamos la consulta para guardar*/
                    if ($conf) {/*si se guardo sactisfactoriamente muestra una alerta y redirije a la pagina principal del usuario logueado*/
                            echo " <script> alert('Entrega Exitosa'); history.back();</script>";
                        } else {/*si no se guarda muestra error */
                            echo " <script> alert('No se pudo procesar tu entrega.'); history.back();</script>";
                            /*echo "<script> alert('No se ha guardado el Libro');</script>";*/
                        }
                }     
            }else{/*else del if que verifica si esta permitido el tipo de archivo que se intenta subir*/
                echo " <script> alert('Este Archivo no esta permitido para esta entrega, debe ser PDF'); history.back();</script>";
            }
            
            
            
        }else{/*else de verificacion si hay archivo*/
            echo " <script> alert('Debe cargar un archivo'); history.back();</script>";
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

if(isset($_POST['agregarAsignacion'])){
    
    $idM = $_POST['selectMaestro'];
    $text = $_POST['textarea'];
    $curso = $_POST['selectC'];
    $tituloC = $_POST['tituloC'];
    $agregarLibro = $_POST['btn_libro'];
    $fEntrega = $_POST['btn_entrega'];
    
    
    include('conet.php');
    $concidir = "SELECT * FROM clasesmateria where codigoM = '$curso'";
    $encontrar = mysqli_query($conexion, $concidir);
    $nombreM = $encontrar->fetch_assoc();
    
    $mate->crearClaseMaestro($nombreM['materia'], $nombreM['Curso'], $text, $curso, $tituloC, $agregarLibro, $fEntrega);
    
    
}

if(isset($_POST['enviarPdf'])){
    session_start();
    $tituloC = $_POST['tituloC'];
    $codigoM = $_POST['codigoM'];
    $materia = $_POST['materia'];
    $archivoT = $_FILES["entregaPdf"];
    $idEstudiante = $_SESSION['id'];
    $Estudiante = $_SESSION['nombre'] ." ". $_SESSION['apellido'];
    $mate->entregaClaseFile($tituloC, $codigoM, $materia, $archivoT, $idEstudiante, $Estudiante);
        
}

if(isset($_POST['enviarComentario'])){
    session_start();
    $tituloC = $_POST['tituloC'];
    $codigoM = $_POST['codigoM'];
    $materia = $_POST['materia'];
    $idEstudiante = $_SESSION['id'];
    $Estudiante = $_SESSION['nombre'] ." ". $_SESSION['apellido'];
    $comentario = $_POST['comentarioEntrega'];
    if(!empty($comentario)){
        
    $mate->entregaClaseComent($tituloC, $codigoM, $materia, $comentario, $idEstudiante, $Estudiante);
    }else{
        
        echo "<script>alert('Debe hacer el comentario para hacer la entrega.');history.back();</script>";
    }
    
}


?>