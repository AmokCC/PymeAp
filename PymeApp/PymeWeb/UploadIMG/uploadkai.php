<?php
include 'db_con.php';

$image = $_POST['image'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];


$query = "INSERT INTO images(img_url,nombre,precio)VALUES ('$image','$nombre','$precio')";
$ejecutar = mysqli_query($conexion,$query);
if($ejecutar){
    echo '
        <script>
            alert("Datos actualizados correctamente");
            window.location = "index.php";
        </script>
    ';
}else{
    echo '
        <script>
            alert("Error al registrar los datos");
            window.location = "index.php";
        </script>
    ';

}

?>