<?php 
    include "koneksi.php";
    $simpan = mysqli_query($koneksi, "INSERT INTO t_kategori (nama_kategori) VALUES ('$_POST[nama_kategori]')");

    if(simpan){
        header("location:tampil_kategori.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='tampil_kategori.php'>Kembali</a>";
    }
?>