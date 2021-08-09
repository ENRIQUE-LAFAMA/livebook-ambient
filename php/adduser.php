<?php


    
/***************************/
/*$nombre = $_POST["nombre"];
$apellidos = $_POST["apellido"];
$tel = $_POST["tel"];
$correo = $_POST["correo"];
$password = $_POST["password"];
$tipoCuenta = $_POST["tipoCuenta"];
$foto_p = "perfiles/undraw_profile.svg";*/
session_start();

/*
como trabajaremos con diferentes usuarios y necesitaremos algunos valores individuales del usuario trabajaremos con objetos

*/

/*creamos la clase para los usuarios*/
class usuarios{
    /* definimos los atributos o caracteristicas de los usuarios*/
    public $nombre;
    public $apellidos;
    public $tel;
    public $correo;
    public $password;
    public $tipoCuenta;
    public $foto_p;
    
    public function __construct() {
        /*esta funcion construcctor, se encarga de construir nuestro usuario con los atributos correspondientes*/
        $this->nombre;
        $this->apellidos;
        $this->tel;
        $this->correo;
        $this->password;
        $this->tipoCuenta;
        $this->foto_p;
        
    }
    /*este metodo o funcion es para agregar o registrar nuevos usuarios*/
    public function agregar($nombre, $apellidos, $tel, $correo, $password, $tipoCuenta, $foto_p){
        /*se recibe las variables */
        
        include ("conet.php");/*se nececitara el archivo de conexion cada vez que se valla a hacer alguna consulta a la base de datos*/
        
        $insertar = "INSERT INTO reg_usuario(nombre, apellido, telefono, correo, password, rol_usuario, foto) VALUES ('$nombre', '$apellidos', '$tel','$correo', '$password', '$tipoCuenta', '$foto_p')";
            /*se prepara la consulta*/
        
        /*se ejecuta la consulta*/
        $resultado = mysqli_query($conexion, $insertar);

        /*condicional para verificar si se guardaron los datos o no*/
        if(!$resultado){
            echo $conexion->error;
            echo 'Error al registrarse';
            
        }

        else{
            echo 'Usuario registrado';
            header("location:../panel/login.php");
        }


        }
    /*funcion o metodo para modificar los datos de los diferentes usuarios*/
    public function modificar($nombre, $apellidos, $tel, $correo, $password, $foto){
        
        if($foto){/*si el usuario elije cambiar foto de perfil verificamos el archivo*/
            $fotoN = basename( $_FILES['cambiar_f']['name']);/*tomamos el nombre del archivo*/
            $ruta = "perfiles/" . $fotoN;/*definimos una ruta concatenada con el nombre para luego identificar las fotos de los usuarios*/
        }
        else{
            $ruta = $_SESSION['foto']; /*en caso de que no se halla cargado ninguna img entonces la variable ruta tendra el valor ya en la bae de datos( ultima img cargada )*/
            
        }
        
        /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
        /*ME QUEDE EN LA ACTUALIZACION DE LAS TABLAS*/
        
        /*se toman los datos y se guardan los datos en la base de datos */
        $insertar = "UPDATE reg_usuario SET nombre='$nombre', apellido='$apellidos', telefono='$tel', password='$password', foto='$ruta' WHERE correo = '$correo'";
        include("conet.php");/*integramos la variable de conexion */

        $resultado = mysqli_query($conexion, $insertar);/*ejecutamos la consulta*/

        if(!$resultado){/*si hay algun erro en la actualizacion muestra mensaje de error al actualizar*/
            echo 'Error al actualizar los datos';
        }
        elseif($resultado){/*verificamos si se guardaron los datos para entonces subir la img*/
            $subir_p = move_uploaded_file($_FILES["cambiar_f"]["tmp_name"], $ruta);
             echo "<script>alert('Cambios Guardados');</script>";
            header("location:../panel/index.php");
            
        }
        elseif(!$subir_p){
            echo 'Error al subir foto';/*en caso de que se guarde la info en la base de datos pero la img no se cargue muestra un error */
        }/**/

        
    }
}

$user = new usuarios; /*cramos el objeto usuario o lo instanciamos*/

if(isset($_POST["submitRegistro"])){/*verificamos si se hizo algun post desde el nombre asignado al ca boton de envio de formulario*/
    
    /*almacenamos en las diferentes variables los datos enviados mediante el metodo post*/
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellido"];
    $tel = $_POST["tel"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $tipoCuenta = $_POST["tipoCuenta"];
    $foto_p = "perfiles/undraw_profile.svg";/*al ser un registro se le asigna un avatar o foto de perfil definido*/
    
    $user->agregar($nombre, $apellidos, $tel, $correo, $password, $tipoCuenta, $foto_p);/*llamamos el objeto con su metodo agregar para que nos cree un nuevo usuario ya que el los datos se enviarmos desde el boton regustrar*/
    
}

if(isset($_POST["submitPerfil"])){/*verificamos si se hizo algun post desde el nombre asignado al ca boton de envio de formulario*/
/*verificamos si hay algun $_POST para entonces guardar los datos en las variables 
de lo contrario mostraria variable indefinida por no recibir ningun dato.

*/


/*---------------------------------------*/
    /*almacenamos los datos en las variables correspondientes*/
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellido"];
$tel = $_POST["tel"];
$correo = $_SESSION['correo'];
$password = $_POST["password"];

$foto = $_FILES["cambiar_f"];/*obtenemos el archivo mediante la palabra reservada $_FILES*/

/*---------------------------------------*/
$user->modificar($nombre, $apellidos, $tel, $correo, $password, $foto);/*LLAMAMOS EL OBJETO CON SU METODO MODIFICAR QUE NOS PERMITIRA EDITAR LA INFO DE LOS USUARIOS*/
}





/*
if($resultado) {
    echo "<script>alert('Usuario Registrado'); window.location = '/LiveBook'</sript>";
}
else{
       echo "<script>alert('ERROR al registrar Usuario'); window.history.go(-1);</sript>";
}*/

?>