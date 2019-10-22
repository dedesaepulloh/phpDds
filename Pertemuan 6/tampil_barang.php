<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
</head>
<body>
    <h2 align="center">Data Barang</h2>
    <a href="form_input_barang.php">Tambah Barang</a>
    <table align="center" border="1px"; width="800px">
        <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
        </tr>

        <?php 
            include "koneksi.php";
            $i= 0;
            $tampil = mysqli_query($koneksi, "SELECT * FROM t_barang");
            while($data=mysqli_fetch_array($tampil)){
                $i++;
        ?>
        <tr>
            <td><?php echo "$i" ?></td>
            <td><?php echo "$data[nama_barang]"; ?></td>
            <td><?php echo "$data[satuan]"; ?></td>
            <td><?php echo "$data[harga_beli]"; ?></td>
            <td><?php echo "$data[harga_jual]"; ?></td>
            <td><?php echo "$data[stok]"; ?></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>