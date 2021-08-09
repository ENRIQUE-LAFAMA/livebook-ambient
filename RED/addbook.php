<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!--VINCULACIOIN DE ESTILOS-->
    <link rel="stylesheet" href="../CSS/add_lib.css">
</head>
<body>
   <!--FORMULARIO PARA CREAR UN NUEVO LIBRO-->
    <form  action="../php/addLibro.php" class="add_lib" method="post" enctype="multipart/form-data" >
        <h1 class="add_lib_titulo">AGREGAR LIBRO</h1>
        <div class="container"><label for="" class="add_lib_label">Titulo</label><input type="text" class="add_lib_input" placeholder="ingrese el titulo" name="titulo" required></div>
        <div class="container"><label for="" class="add_lib_label">Autor</label><input type="text" class="add_lib_input" placeholder="ingrese el autor" name="autor" required></div>
        <div class="container"><label for="" class="add_lib_label">Fecha</label><input type="date" class="add_lib_input" placeholder="ingrese la fecha actual" name="fecha" required></div>
        <div class="container"><label for="" class="add_lib_label">Editrotial</label><input type="text" class="add_lib_input" placeholder="ingrese la editorial" name="editorial" required></div>
        <span>Portada:</span>
        <input type="file" class="archivo" name="portada" required>
        <span><L></L>ibro:</span>
        <input type="file" class="archivo" name="archivo" required>
        <input type="submit" class="add_lib_submit" name="submitAdd"><!--cambio-->
    </form>

</body>
</html>