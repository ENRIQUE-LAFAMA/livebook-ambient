<?php

include 'conet.php';
session_start();/*se inicia la seccion del usuario*/

/*se optienen los datos ingresados por el usuario*/
$correo = $_POST['correo'];
$pass = $_POST['password'];


/*verificamos en la vase de datos si el usuario esta registrado (si existe)*/
$q = "SELECT * from reg_usuario WHERE correo = '$correo' AND password = '$pass' ";

/*ejecutamos una consulta a la base de datos para verificar si existe*/
$consulta = mysqli_query($conexion, $q);

/*si la consulta encontro coincidencia devolvera el numero de filas que coinciden*/
$int_usuario = mysqli_num_rows($consulta);

        if($int_usuario > 0){/*verificamos si existe al menos una coincidencia, los usuarios no se repiten por lo que no debe devolver
        mas de uno*/
            $fila = $consulta->fetch_assoc();/*almacenamos la fila optenida de la base de datos en forma de arreglo en la variable fila*/
            
            /*almacenamos los valores obtenidos de la base de datos en variables de seccion para poder usarlas mas adelantes en otras vistas*/
            $_SESSION['id'] = $fila['id'];
            $_SESSION['nombre'] = $fila['nombre'];
            $_SESSION['apellido'] = $fila['apellido'];
            $_SESSION['telefono'] = $fila['telefono'];
            $_SESSION['correo'] = $correo;
            $_SESSION['pass'] = $pass;
            $_SESSION['tipoCuenta'] = $fila['rol_usuario'];
            $_SESSION['foto'] = $fila['foto'];
            
            /*una vez se inicie la seccion del usuario se redirigira a la vista principal que es el dashboard*/
            header("location: ../panel/index.php");
        }
        /*si la consulta no encuentra coincidencias entonces entrara a este segundo if*/
        else if($int_usuario == 0){
            /*$_SESSION[];*/
            echo 'datos incorrectos';
            mysqli_free_result($consulta);/*liveramos el valor almacenado en la variable consulta para liverar memoria*/
            mysqli_close($conexion); /*cerramos la conexion a la base de datos*/
            header("location: ../panel/login.php");/*redirigimos a la misma vista para loguearse*/

        }

/*include ('conet.php');
$correo = $_POST['correo'];
$password = $_POST['password'];

session_start();
$_SESSION['correo']=$correo;


&usuario = " SELECT* FROM reg_usuario WHERE correo ='$correo' and password ='$password'";

&buscar = mysquli_query($conexion, $usuario);

$int_usuario = mysqli_num_rows(&buscar);

if($int_usuario > 0){
    header("location:prueba.php");
}
else{
    echo "error en la autenticacion";
    
}
mysqli_free_result($buscar);

mysqli_close($conexion);*/

?>