<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id"));
}
else{
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="html/style.css">
    <title>Web Project</title>
</head>
<body>
    <div class="atas">
        <nav>
            <a href="index.php"><img src="html/assets/logo.png" class="logo"></a>
            <ul>
                <li><a href="#">Jasa</a></li>
                <li><a href="#">Panduan</a></li>
                <li><a href="#">Harga</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <a href="https://wa.me/+6282255304228"><button class="btn"><img src="html/assets/icon.png">Hubungi</button></a>
        </nav>

        <div class="isi">
            <h1>Jasa Joki<br>Dari Mas Richo</h1>
            <p>Silahkan Tulis Jenis Servicenya Untuk Di Jokiin.</p>
                <form>
                    <input type="text" placeholder="Request">
                    <button type="submit" class="btn">Submit</button>
                </form>
        </div>

    </div>
</body>
</html>
