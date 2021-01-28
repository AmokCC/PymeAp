<?php
include "db_con.php";
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
if (isset($_POST['submit']) && isset($_FILES['my_image'])){
   
    echo "<pre>";
	print_r($_FILES['my_image']);
    echo "</pre>";
    
    $img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];
    
    if($error === 0){
        if ($img_size > 760000){
            $em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
        }else{
            $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
            
            $img_ex_lc= strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png","jfif"); 

            if(in_array($img_ex_lc,$allowed_exs)){
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);
                //Instertar en base de datos
                
                $sql = "INSERT INTO images(img_url,nombre,precio)VALUES('$new_img_name','$nombre','$precio')";
                mysqli_query($conexion,$sql);
            }else{
                $em = "You cant upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    }else{
        $em = "unknown error occurred!";
		header("Location: index.php?error=$em");
    }
}else{
    header("Location: index.php");
}