<?php 
    session_start();
    if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
        echo "<script>alert('Anda Harus Login Dulu !'); window.location = 'login.php'</script>";
    }else{
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>HOME</title>
        </head>
        <body>
            <a href="logout.php">Logout</a>
            <h2 align="center">Selamat Datang <?php echo "$_SESSION[nama_admin]"; ?></h2>

        </body>
        </html>

    <?php } ?>