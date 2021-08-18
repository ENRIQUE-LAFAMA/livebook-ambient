<?php

require_once "vistas/arriba.php";?><!--esta instruccion nos permite llamar sierta parde de codigo-->

<div class="container contenido"><!--cuerpo de la pagina principal-->
       <?php if($_SESSION['tipoCuenta']== 2):?>
    <h1>Agrega el Codigo de Materia</h1>
    <hr>
    <div class="agregarM">
      <!--si el usuario es estudiante le mostrara agregar materia-->
    
        <form action="../php/materias.php" method="post">
            <input name="codigoc1" class="inputM" type="text">
            <spam>-</spam>
            <input name="codigoc2" class="inputM" type="text">
            <input class="submitAgregarM btn btn-primary btn-user" type="submit" name="agregaM" value="Entrar a la materia">
            
        </form>
           <?php endif; ?>
           
           <!--si el usuario es maestro le mostrara agrgegar clase-->
             
              <?php if($_SESSION['tipoCuenta']== 1):?>
    <h1>Mis Cursos:</h1>
    <hr>
    <div class="agregarM">
        
        <form action="../php/materias.php" method="post"><div class="divM">
        <!--selector de maestro-->
         <label for="selectMaestro">Maestro:</label>
          <select name="selectMaestro" id="materiaM">
               <?php include("conet.php");
                $mostrarC = "SELECT * FROM reg_usuario ";
                $mostrador = mysqli_query($conexion, $mostrarC);
                while($fila = $mostrador->fetch_assoc()){
               ?>
                    <option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></option>
              <?php } ?>
           </select>
           </div>
           <!--selector de materia-->
           <div class="divM">
           <label for="materiaM">Materias:</label>
           <select name="materiaM" id="materiaM">
               <?php include("conet.php");
                $mostrarC = "SELECT * FROM materias ";
                $mostrador = mysqli_query($conexion, $mostrarC);
                while($fila = $mostrador->fetch_assoc()){
               ?>
                    <option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['materia']; ?></option>
              <?php } ?>
           </select>
           </div>
           <div class="divM">
           <label for="selectC">Curso:</label>
           <select name="selectC" id="selectC">
               <?php include("conet.php");
                $mostrarC = "SELECT * FROM cursos ";
                $mostrador = mysqli_query($conexion, $mostrarC);
                while($fila = $mostrador->fetch_assoc()){
               ?>
                    <option value="<?php echo $fila['seccion']; ?>"><?php echo $fila['cursos']; ?></option>
              <?php } ?>
           </select>
           </div>
           <input name="tituloC" type="text" placeholder="Titulo">
           <!--tex area-->
            <textarea name ="textarea" class="textD" placeholder="Agrege Descripcion (opcional)" ></textarea>
            
            <input class="submitAgregarM btn btn-primary btn-user" type="submit" name="agregaC" value="Entrar a la materia">
            
        </form>
    </div>
           <?php endif; ?>
    
</div>

<?php require_once "vistas/bajo.php";?>
