<?php 
    include "koneksi.php";
    $hapus = mysqli_query($koneksi, "DELETE FROM t_kategori WHERE id_kategori = '$_GET[id_kategori]'");

    if(hapus){
        header("location:tampil_kategori.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='tampil_kategori.php'>Kembali</a>";
    }
?>