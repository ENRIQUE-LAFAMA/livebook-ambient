<?php


require_once "vistas/arriba.php";
require_once "../php/addLibro.php";
$search_remember = '';
if (isset($_GET['search'])) {
$search_remember = $_GET['search'];
}
?>
<!--esta instruccion nos permite llamar sierta parde de codigo-->
<div class="container contenido"><!--cuerpo de la pagina principal-->
       <?php if($_SESSION['tipoCuenta']== 2):?>
    <h1>Agrega el Codigo de Materia</h1>
    <hr>
    <div class="agregarM">
      <!--si el usuario es estudiante le mostrara agregar materia-->
    
        <form action="../php/materias.php" method="post">
            <div class="form_estudiante">
                <input name="codigoc1" class="inputM" type="text">
                <spam>-</spam>
                <input name="codigoc2" class="inputM" type="text">
            </div>
            <input class="submitAgregarM btn btn-primary btn-user" type="submit" name="agregaM" value="Entrar a la materia">
            
        </form>
    
           <?php endif; ?>
           
           
           <!--si el usuario es maestro le mostrara agrgegar clase-->
             
              <?php if($_SESSION['tipoCuenta']== 1):?>
    <h1>Agregar una clase:</h1>
    <hr>
    <div class="agregarM">
        
        <form action="../php/materias.php" method="post"><div class="divM">
        <!--selector de maestro-->
            
         <label for="selectMaestro">Maestro:</label>
          <select name="selectMaestro" id="materiaM">
               
                    <option value="<?php echo $_SESSION['id']; ?>"><?php echo $_SESSION['nombre']; ?></option>
                    
           </select>
           </div>
           <!--selector de materia-->
           
           <div class="divM">
           <label for="selectC">Curso:</label>
           <select name="selectC" id="selectC">
               <?php include("materias.php");
                $mate::mostrarMateriaClase();
                
               ?>
           </select>
           </div>
           <input name="tituloC" type="text" placeholder="Titulo de la asignacion ">
           <!--tex area-->
            <textarea name ="textarea" class="textD" placeholder="Agrege las instrucciones y requerimientos para esta asignacion" ></textarea>
            <hr>
            <div class="disponibilidad">
                <span>Agregar Libro:</span>
            <br>
            <label for="radio_no">No:</label>
            <input value=0  type="radio" checked id="radio_no" name="btn_libro" class="agregaLibro">
            
            <label for="radio_si">Si:</label>
            <input value=1 type="radio"  id="radio_si" name="btn_libro" class="agregaLibro radio_si">
            </div>
            
            <div class="disponibilidad">
                <span>Tipo de entrega</span>
            <br>
            <label for="comentario">Comentario:</label>
            <input value="comentario" type="radio" name="btn_entrega" checked id="comentario" class="agregaLibro">
            
            <label for="pdf">PDF:</label>
            <input value="PDF" type="radio" name="btn_entrega" id="pdf" class="agregaLibro">
            </div>
            
            <br>
            
            <input class="submitAgregarM btn btn-primary btn-user" type="submit" name="agregarAsignacion" value="Agregar Asignacion">
            
            <!--0000000000000000000000000000000000000000000000000000000000000000000000000000000000000-->
            
            <!--     tiene un display none     -->
            <div class="selectLib" >
                    <div class="container-fluid contenLibro">
                  <nav class="navbar">
                    <div class="container-fluid">
                      <a class="navbar-brand">Seleccine el libro</a>
                      <form class="d-flex" action="" method="get">
                        <input class="form-control me-2" type="text" placeholder="Buscar libro" aria-label="Buscar" name="search" class="search" value="<?php echo $search_remember ?>">
                        <button class="btn btn-outline-success" type="submit" class="search-btn">Buscar</button>
                      </form>
                    </div>
                  </nav>

                  <h1 class="tituloM">Mostrando archivos</h1>
                  <div class="container-fluid contenMostrar">
                    <?php

                    $search = null;
                    if (isset($_GET['search'])) {
                      $search = $_GET['search'];
                    }
                    $lib->mostrar($search);
                    ?>

                  </div>
                </div>
            </div>
            
            <!--0000000000000000000000000000000000000000000000000000000000000000000000000000000000000-->
        </form>
    </div>
           <?php endif; ?>
    
</div>


<?php require_once "vistas/bajo.php";?>
