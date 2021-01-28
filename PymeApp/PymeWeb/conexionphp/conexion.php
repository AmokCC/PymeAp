<?php

    $conexion = mysqli_connect("localhost","root","","pymeimg");

    if($conexion){
        echo "conectado correctamente";
    }
    else{
        echo 'Malaso';
    }

?>