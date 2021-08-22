<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LiveBook - Perfil</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mostrar.css">
    
    

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Perfil De Usuario</h1>
                            </div>
                            <!--formulario que permite a los usuario cambiar sus datos con exepcion del correo electronico-->
                            <form class="user" action="../php/adduser.php" method="POST" enctype="multipart/form-data">
                              <!--img de perfil-->
                              <div class="form-group row"> 
                                    
                                        <label for="cambiar_f">
                                            <img class="foto_p" name="foto_p"  
                                            src="<?php echo $_SESSION['foto'];?>">
                                        
                                        </label>
                                            <input type="file"  style="display:none;"name="cambiar_f" id="cambiar_f">
                                  
                                  </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Insertar Nombre" name="nombre" value="<?php echo $_SESSION['apellido'];?>" >
                                            <!--mostramos el valor actual de la info de la base de datos antes de que el susuario haga algun cambio-->
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Insertar Apellido" name="apellido" value="<?php echo $_SESSION['apellido'];?>" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" 
                                        placeholder="Telefono" name="tel" value="<?php echo $_SESSION['telefono'];?>" >
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Correo Electronico" name="correo" value="<?php echo $_SESSION['correo'];?>" >
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password" value="<?php echo $_SESSION['pass'];?>" >
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repetir Password" value="<?php echo $_SESSION['pass'];?>" >
                                    </div>
                                </div>
                                <div class="form-group">
                                 <!-- en esta vista la opcion de tipo de cuenta estara solo visible para el administrador para poder editar los roles de los usuarios-->
                                  <label for="tipoCuenta" class="col-sm-6 mb-3 mb-sm-0">TIPO DE CUENTA</label>
                                   <select name="tipoCuenta" class="col-sm-6" placeholder="Elija el tipo de Cuenta">
                                       <option value="2">Estudiante</option>
                                       <option value="1">Maestro (a)</option>
                                   </select>
                                </div>
                                
                            <hr>
                                <input value="Guardar Cambios" class="btn btn-primary btn-user btn-block" type="submit" name="submitPerfil">
                                <hr>
                                
                            </form>
                            <div class="text-center">
                                <a class="btn btn-primary btn-user btn-block" href="index.php">Atras</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>