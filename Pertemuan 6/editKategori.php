<?php 
    include "koneksi.php";
    $tampil = mysqli_query($koneksi, "SELECT * FROM t_kategori WHERE id_kategori='$_GET[id_kategori]'");
    $data=mysqli_fetch_array($tampil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Data Kategori</title>
</head>
<body>
    <h2 align="center">Form Input Data Kategori</h2>
    <form method="POST" action="update_kategori.php">
        <table>
            <tr>
                <td>Nama Kategori</td>
                <td>
                <input type="hidden" name="id_kategori" value="<?php echo "$data[id_kategori]"; ?>" />
                : <input type="text" name="nama_kategori" value="<?php echo "$data[nama_kategori]"; ?>" /></td>
            </tr>

            <tr>
                <td></td>
                <td>:
                    <input type="reset" name="reset" value="Reset" />
                    <input type="submit" name="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
        <a href="tampil_kategori.php">Kembali</a>
</body>
</html>