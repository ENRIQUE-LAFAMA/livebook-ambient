<?php

include("../php/conet.php");

if(!isset($_POST["inputBuscador"])){
    $_POST["inputBuscador"];
    $buscar = $_POST["inputBuscador"];
    
}
$buscar = $_POST["inputBuscador"];

$buscarInto = "SELECT * FORM libros WHERE titulo LIKE '%$buscar%' OR autor LIKE '%$buscar%' OR fecha LIKE '%$buscar%' OR editorial LIKE '%$buscar%' ";

$resultado = mysqli_query($conexion, $buscarInto);











?>