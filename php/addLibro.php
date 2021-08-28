<?php

/*                      *** codigo de prueba para agregar ***                */

/*
include("conet.php");
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$fecha = $_POST["fecha"];
$editorial = $_POST['editorial'];

if($_FILES["archivo"]) {
    $nArchivo = basename($_FILES["archivo"]["name"]);
    $nombreF =  date("d-m-y")."-". date("H-i-s"). "_" . $nArchivo;
    $rutaSaved = "../biblioteca/" . $titulo;
    $saveLibro = move_uploaded_file($_FILES["archivo"]["tmp_name"], $rutaSaved);
    if($saveLibro){
        $agregar = "INSERT INTO libros(titulo, autor, fecha, editorial, ubicacion) VALUES ('$titulo', '$autor', '$fecha', '$editorial', '$rutaSaved' )";
        $conf = mysqli_query($conexion, $agregar);
        if($conf) {
            echo " <script> alert('Se guardo el Libro'); window.location='../panel/index.php'</script>";
        }
        else{
            echo "Error al subir archivo";
        }
    }
}
*/

/*                          *** fin del codigo para agregar ESTA FUNCIONAL ***          */
/*-/-/-/-/-/-/-/-/-/-/-/-/-/--/-/-/-/-/-/-//-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/*/
/*Para manejar los libros trabajamos con POO (programacion orientada a objetos)*/

/*clase para los libros*/
class Libro
{
    /*atributos o caracteristicas de los libros*/
    public $titulo;
    public $autor;
    public $fecha;
    public $editorial;
    public $portada;
    /*metodos o funciones de los libros*/
    public function __construct()
    {

        $this->titulo;
        $this->autor;
        $this->fecha;
        $this->editorial;
        $this->portada;
    }

    /*metodo para agregar un nuevo libro a la biblioteca*/
    public function agregar($titulo, $autor, $fecha, $editorial, $portada, $arch)
    {

        if (!empty($arch)) {/*verificamos si existe algun archivo de lo contrario muestra error */
            $rutaSaved;
            $rutaSaved_p;
            $permiteArchivo = array('pdf');
            $permitePortada = array('img', 'png', 'jpg', 'jpeg');

            $extArchivo = explode(".", $_FILES['archivo']['name']);
            $extPortada = explode(".", $_FILES['portada']['name']);

            $verExtArch = strtolower(end($extArchivo));
            $verExtPort = strtolower(end($extPortada));

            if (in_array($verExtArch, $permiteArchivo)) {
                if (in_array($verExtPort, $permitePortada)) {
                    $nArchivo = basename($_FILES["archivo"]["name"]);/*tomamos el nombre propio del archivo*/
                    $nombreF =  date("d-m-y") . "-" . date("H-i-s") . "_" . $nArchivo;/*modificamos el nombre antes de guardar*/
                    $rutaSaved = "../biblioteca/" . $nombreF; /*creamos una variable para asignar una ruta de guardado*/
                    $rutaSaved_p = "../biblioteca/" . $nombreF . ".jpg";
                    $saveLibro = move_uploaded_file($_FILES["archivo"]["tmp_name"], $rutaSaved);/*movemos el libro a la ruta asignada en la variable*/
                    $saveportada = move_uploaded_file($_FILES["portada"]["tmp_name"], $rutaSaved_p);

                    $e = $_FILES['archivo']['error'];
                    if ($saveLibro) {/*ya modificado el nombre y movido el archivo guardamos los datos en la base de datos*/
                        $agregar = "INSERT INTO libros (titulo, autor, fecha, editorial,portada, ubicacion) VALUES ('$titulo', '$autor', '$fecha', '$editorial','$rutaSaved_p', '$rutaSaved')";






                        include("conet.php");
                        $conf = mysqli_query($conexion, $agregar);/*ejecutamos la consulta para guardar*/
                        if ($conf) {/*si se guardo sactisfactoriamente muestra una alerta y redirije a la pagina principal del usuario logueado*/
                            echo " <script> alert('Se guardo el Libro'); window.location='../panel/index.php'</script>";
                        } else {/*si no se guarda muestra error */
                            echo $conf;
                            echo "NO" . $conexion->error;
                            /*echo "<script> alert('No se ha guardado el Libro');</script>";*/
                        }
                    }
                } else {
                    echo "<script> alert('Esta portada no es permitida, solo archivos con extension: img, jpg, jpeg, png, svg.');window.location='../RED/addbook.php'</script>";
                }
            } else {
                echo "<script> alert('El archivo no es documento PDF');window.location='../RED/addbook.php'</script>";
            }
            /*fin para agregar */
        }
    }

    /*----------------------------------------------------------------------------------------------------------*/

    public function mostrar($search = null)
    {
        include("conet.php");
        $mlibro = $search ? "SELECT * FROM libros WHERE titulo LIKE '%$search%' OR autor LIKE '%$search%' OR fecha LIKE '%$search%' OR editorial LIKE '%$search%' " : "SELECT * FROM libros";
        $mostrador = mysqli_query($conexion, $mlibro);
        while ($fila = $mostrador->fetch_assoc()) {

?>
            <article>

                <img class="M_img" src="<?php echo $fila['portada']; ?>" alt="">
                <h3 class="mostrarTL tituloTL">Titulo: <?php echo $fila['titulo']; ?></h3>
                <h4 class="mostrarTL">Autor: <?php echo $fila['autor']; ?></h4>
                <h4 class="mostrarTL">Editorial: <?php echo $fila['editorial']; ?></h4>
                <!-- <p>hola mi loco</p>-->
            </article>

        <?php
        }
    }

    /*----------------------------------------------------------------------------------------------------------*/
    public function eliminar()
    {
        include("conet.php");
        $mlibro = "SELECT * FROM libros";
        $mostrador = mysqli_query($conexion, $mlibro);
        while ($fila = $mostrador->fetch_assoc()) {

        ?>
            <article>

                <a href="../php/borrar.php?id=<?php echo $fila['id']; ?>" class="borrar">
                    <div class="icobasura"><img src="vistas/garbage.png" alt=""></div>
                </a>
                <img class="M_img" src="<?php echo $fila['portada']; ?>" alt="">
                <h3 class="mostrarTL tituloTL">Titulo: <?php echo $fila['titulo']; ?></h3>
                <h4 class="mostrarTL">Autor: <?php echo $fila['autor']; ?></h4>
                <h4 class="mostrarTL">Editorial: <?php echo $fila['editorial']; ?></h4>
                <!-- <p>hola mi loco</p>-->
            </article>
        <?php
        }
    }

    public function buscar($buscador)
    {
        /*$peticion = "SELECT * FROM libros WHERE titulo = '$buscador', autor = '$buscador', fecha = '$buscador', editorial = '$buscador',";*/
        $peticion = "SELECT * FROM libros WHERE titulo LIKE '%$buscador%'";
        include("conet.php");
        $consulta = mysqli_query($conexion, $peticion);
        while ($fila = $consulta->fetch_assoc()) {

        ?>
            <article>
                <a href="<?php echo $fila['ubicacion']; ?>">
                    <img class="M_img" src="<?php echo $fila['portada']; ?>" alt=""></a>
                <h3 class="mostrarTL tituloTL">Titulo: <?php echo $fila['titulo']; ?></h3>
                <h4 class="mostrarTL">Autor: <?php echo $fila['autor']; ?></h4>
                <h4 class="mostrarTL">Editorial: <?php echo $fila['editorial']; ?></h4>
                <!-- <p>hola mi loco</p>-->
            </article>
<?php
        }
    }
}





/*Instanciamos el objeto lib que seria libro*/
$lib = new Libro;

/*if(isset($_POST["buscarL"])){
    $buscador = _POST['inputBuscador'];
    $lib->mostrar($buscador);
}*/

if (isset($_POST["submitAdd"])) {
    /*verificamos si hay algun $_POST para entonces guardar los datos en las variables 
de lo contrario mostraria variable indefinida por no recibir ningun dato.

*/


    /*---------------------------------------*/
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $fecha = $_POST["fecha"];
    $editorial = $_POST["editorial"];
    $portada = $_FILES["portada"];
    $arch = $_FILES["archivo"];
    /*---------------------------------------*/
    $lib->agregar($titulo, $autor, $fecha, $editorial, $portada, $arch);
}

/*$lib->mostrar();*/









?>