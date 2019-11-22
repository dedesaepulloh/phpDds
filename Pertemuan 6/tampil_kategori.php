<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kategori</title>
</head>
<body>
    <h2 align="center">Data Kategori</h2>
    <a href="form_input_kategori.php">Tambah Kategori</a>
    <table align="center" border="1px"; width="800px">
        <tr>
            <th>NO</th>
            <th>Nama Kategori</th>
            
            <!-- Nambahin Kolom action -->
            <th>Action</th>
        </tr>

        <?php 
            include "koneksi.php";
            $i= 0;
            $tampil = mysqli_query($koneksi, "SELECT * FROM t_kategori");
            while($data=mysqli_fetch_array($tampil)){
                $i++;
        ?>
        <tr>
            <td><?php echo "$i" ?></td>
            <td><?php echo "$data[nama_kategori]"; ?></td>

            <!-- Nambahin Kolom Edit & Hapus -->
            <td>
                <a href="editKategori.php?id_kategori=<?php echo "$data[id_kategori]"; ?>">Edit</a>
                <a href="hapusKategori.php?id_kategori=<?php echo "$data[id_kategori]"; ?>">Hapus</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>