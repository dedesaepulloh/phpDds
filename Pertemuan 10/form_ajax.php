<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Ajax Tampil Barang</title>
    <script src="lib/jquery-3.4.1.min.js"></script>
</head>
<body>
    <h2 align="center">Form Tampil Detail Barang Dengan Ajax</h2>
    <form method="POST" action="#">
        <table>
                <td>Pilih Barang</td>
                <td>: <select name="id_barang" id="id_barang">
                            <option value="">-- Pilih Data --</option>
                            <?php 
                                include "koneksi.php";
                                $tampil = mysqli_query($koneksi, "SELECT * FROM t_barang");
                                while($data = mysqli_fetch_array($tampil)){
                            ?>
                                <option value="<?php echo "$data[id_barang]"; ?>"><?php echo "$data[nama_barang]"; ?></option>
                                }
                            <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>: <input type="text" name="satuan" id="satuan" /> </td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>: <input type="number" name="harga_beli" id="satuan" /> </td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>: <input type="number" name="harga_jual" id="satuan" /> </td>
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