<?php 
    include "koneksi.php";
    $tampil = mysqli_query($koneksi, "SELECT * FROM t_barang inner join t_kategori on t_barang.id_kategori=t_kategori.id_kategori WHERE id_barang='$_GET[id_barang]'");
    $data=mysqli_fetch_array($tampil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Data Barang</title>
</head>
<body>
    <h2 align="center">Form Input Edit Barang</h2>

    <!-- SEBELUM DIUBAH -->
    <!-- <form method="POST" action="insert_barang.php">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>: <input type="text" name="nama_barang" /></td>
            </tr>
            <tr>
                <td>Kategori Barang</td>
                <td>: <select name="id_kategori">
                        <?php 
                            // include "koneksi.php";
                            // $tampil = mysqli_query($koneksi, "SELECT * FROM t_kategori");
                            // while($data=mysqli_fetch_array($tampil)){
                        ?>
                            <option value="<?php echo "$data[id_kategori]"; ?>">
                                <?php echo "$data[nama_kategori]"; ?>
                            </option>
                    <?php  ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>: <input type="text" name="satuan" /> </td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>: <input type="number" name="harga_beli" /> </td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>: <input type="number" name="harga_jual" /> </td>
            </tr>
            <tr>
                <td></td>
                <td>:
                    <input type="reset" name="reset" value="Reset" />
                    <input type="submit" name="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form> -->


    <!-- SETELAH DIUBAH -->
    <form method="POST" action="update_barang.php">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>
                <input type="hidden" name="id_barang" value="<?php echo "$data[id_barang]"; ?>"  />
                : <input type="text" name="nama_barang" value="<?php echo "$data[nama_barang]"; ?>" />
                
                </td>
            </tr>
            <tr>
                <td>Kategori Barang</td>
                <td>: <select name="id_kategori">
                        <option value="<?php echo "$data[id_kategori]"; ?>"><?php echo "$data[nama_kategori]"; ?>
                          </option>
                        <?php 
                            $tampil1 = mysqli_query($koneksi, "SELECT * FROM t_kategori");
                            while($data1=mysqli_fetch_array($tampil1)){
                        ?>
                            <option value="<?php echo "$data1[id_kategori]"; ?>">
                                <?php echo "$data1[nama_kategori]"; ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>: <input type="text" name="satuan" value="<?php echo "$data[satuan]"; ?>" /> </td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>: <input type="number" name="harga_beli" value="<?php echo "$data[harga_beli]"; ?>" /> </td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>: <input type="number" name="harga_jual" value="<?php echo "$data[harga_jual]"; ?>"/> </td>
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




        <a href="tampil_barang.php">Kembali</a>
</body>
</html>