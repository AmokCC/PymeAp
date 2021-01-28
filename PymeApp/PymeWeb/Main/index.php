<!DOCTYPE html>

<html>
    <head>
        <meta charset = "UTF-8">
        <link rel = "stylesheet" href="css/style.css">
    </head>
    <body>
    
        
        <header>
            <input type = "checkbox" id="btn-menu">
            <label for = "btn-menu"><img src="img/nav30x30.png" alt=""></label>
            <nav class = "menu">

            
                <ul >
                    <li> <a href="#">Sobre Nosotros</a> </li>
                    <li> <a href="#">Productos</a> </li>
                    <li> <a href="#">Ropa</a> </li>
                    <li> <a href="#">Talla 7-7.5</a> </li>
                    <li> <a href="#">Talla 8-8.5</a> </li>
                    <li> <a href="#">Talla 9-9.5</a> </li>
                    <li> <a href="#">Talla 10-10.5</a> </li>
                    <li> <a href="#">Talla 11-11.5</a> </li>
                    <li> <a href="#">Talla 12-12.5</a> </li>
                    <li> <a href="#">Talla 13+</a> </li>
                    <li> <a href="#">Usado</a> </li>
                    <li> <a href="../UploadIMG/index.php">Ingreso</a> </li>
        
                </ul>
            </nav>
            
        </header>

        <div class = "logo">
            <img src="img/nike-hor.jpg">
        </div>

        
        <?php 
            include 'db_con.php';
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conexion,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="img">
             	<img src="../UploadIMG/images/<?=$images['image']?>">
             </div>
          		
        <?php } }?>

        <div class="productos">
            <h2>Productos</h2>
            <div class = "row">
                <div class="col-4">
                    <img src="img/tilla1.png">
                    <a href = "https://www.instagram.com/sneakercll/">Jordan 1</a>
                    <p>$200.00</p>

                </div>
                <div class="col-4">
                    <img src="img/tilla2.png">
                    <a href = "https://www.instagram.com/sneakercll/">Jordan 1</a>
                    <p>$200.00</p>

                </div>
                <div class="col-4">
                    <img src="img/tilla3.png">
                    <a href = "https://www.instagram.com/sneakercll/">Jordan 1</a>
                    <p>$200.00</p>

                </div>
                <div class="col-4">
                    <img src="img/tilla4.png">
                    <a href = "https://www.instagram.com/sneakercll/">Jordan 1</a>
                    <p>$200.00</p>

                </div>
                <div class="col-4">
                    <img src="img/tilla1.png">
                    <a href = "https://www.instagram.com/sneakercll/">Jordan 1</a>
                    <p>$200.00</p>

                </div>
                <div class="col-4">
                    <img src="img/tilla2.png">
                    <a href = "https://www.instagram.com/sneakercll/">Jordan 1</a>
                    <p>$200.00</p>

                </div>
            </div>

        </div>
    </body>


</html>