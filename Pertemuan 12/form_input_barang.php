<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input Data Barang</title>
    <script src="jquery-3.4.1.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $("#simpan").click(function(){
                var nama_barang=$("#nama_barang").val();
                var id_kategori=$("#id_kategori").val();
                var satuan=$("#satuan").val();
                var harga_beli=$("#harga_beli").val();
                var harga_jual=$("#harga_jual").val();

                $.ajax({
                    type:"POST",
                    data:"nama_barang="+nama_barang+"&id_kategori="+id_kategori+"&satuan="+satuan+"&harga_beli="+harga_beli+"&harga_jual="+harga_jual,
                    url:"insert_barang.php",
                    dataType:"text",
                    success:function(data){
                        alert(data);
                        $("#nama_barang").val("");
                        $("#id_kategori").val("");
                        $("#satuan").val("");
                        $("#harga_beli").val("");
                        $("#harga_jual").val("");
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h2 align="center">Form Input Data Barang</h2>
        <table cellpadding="5">
            <tr>
                <td>Nama Barang</td>
                <td>: <input type="text" name="nama_barang" id="nama_barang"/></td>
            </tr>
            <tr>
                <td>Kategori Barang</td>
                <td>: <select name="id_kategori" id="id_kategori">
                        <?php 
                            include "koneksi.php";
                            $tampil = mysqli_query($koneksi, "SELECT * FROM t_kategori");
                            while($data=mysqli_fetch_array($tampil)){
                        ?>
                            <option value="<?php echo "$data[id_kategori]"; ?>">
                                <?php echo "$data[nama_kategori]"; ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>: <input type="text" name="satuan" id="satuan"/> </td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>: <input type="number" name="harga_beli" id="harga_beli" /> </td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>: <input type="number" name="harga_jual" id="harga_jual" /> </td>
            </tr>
            <tr>
                <td></td>
                <td>:
                    <button id="simpan">Simpan</button>
                </td>
            </tr>
        </table>
        <a href="tampil_barang.php">Kembali</a>
</body>
</html>