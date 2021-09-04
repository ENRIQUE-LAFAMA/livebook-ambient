function confirmacion(e){
    if(confirm("Estas seguro(a) que desea elimiar ")){
        return true;
    }
    else{
        e.preventDefault();
    }
}

let borrador = document.querySelectorAll(".borrar");

for (var i = 0; i < borrador.length; i++){
    borrador[i].addEventListener('click', confirmacion);
}

function mostrarClases(){
    
    var botonesMateria = document.getElementById("<?php echo $filaM['codigoM'];  ?>");
    botonesMateria.addEventListener("click", mostrarM)
}

