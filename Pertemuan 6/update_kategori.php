<?php 
    include "koneksi.php";
    $edit = mysqli_query($koneksi, "UPDATE t_kategori SET nama_kategori = '$_POST[nama_kategori]' WHERE id_kategori = '$_POST[id_kategori]'");

    if(edit){
        header("location:tampil_kategori.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='tampil_kategori.php'>Kembali</a>";
    }
?>