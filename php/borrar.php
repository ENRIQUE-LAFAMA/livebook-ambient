<?php

include("conet.php");

$id = $_GET['id'];

$buscar = "SELECT * FROM libros WHERE id = '$id'";
$r_buscar =  mysqli_query($conexion, $buscar);
    $fila = $r_buscar->fetch_assoc();
if($r_buscar){
    unlink($fila['ubicacion']);
    unlink($fila['portada']);
    $eliminar = "DELETE FROM libros WHERE id = '$id'";
    
    $resultado = mysqli_query($conexion, $eliminar);
    if($resultado){
        echo "<script>alert('LIBRO ELIMINADO'); window.history.go(-1);</script>";
        /*header("location:../panel/eliminarLibro.php");*/
    }
    echo $fila['autor'];
}
else{
    echo "<script>alert('No fue posible eliminar este Libro'); window.history.go(-1);</script>";
}







?>