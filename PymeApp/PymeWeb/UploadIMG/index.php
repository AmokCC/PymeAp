<?php
    //include = 'db_con.php'
    //si upload es presionado
    $msg = "";
    if(isset($_POST['subir'])){
        $target = 'images/'.basename($_FILES['image']['name']);

        $db = mysqli_connect("localhost","root","","pymeimg");


        $image = $_FILES['image']['name'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $talla = $_POST['talla'];

        $sql = "INSERT INTO images (image,nombre,precio,talla)VALUES('$image','$nombre','$precio','$talla')";
        mysqli_query($db,$sql);

        if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
            $msg = "image uploades successfully";
        }else{
            $msg = "There was a problem uploading image";
        }
    }
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="css/styles.css">
    <title>Upload Image</title>
</head>
<body>
    <a href="../Main/index.php" class = "btn-top">Home</a>
    <div id = "content">

        <form method = "POST" action="index.php" enctype = "multipart/form-data">
            <input type="hidden" name="size" value="10000000">
            <div>
                <input type = "file" name = "image" class = "btn-up">
            </div> 
            <div>
                <textarea name="nombre" cols="15" rows="2" placeholder="Nombre"></textarea> 
            </div>
            <div>
                <textarea name="precio" cols="15" rows="2" placeholder="Precio"></textarea> 
            </div>
            <div>
                <textarea name="talla" cols="15" rows="2" placeholder="Talla"></textarea> 
            </div>
            <div>
                <input type="submit" name="subir" value= "Upload Image" class = "btn">
            </div>
            <div>
                <a href = view00.php class = "btn">Vista previa</a>
            </div>

        </form>

    </div>
  
</body>
</html>