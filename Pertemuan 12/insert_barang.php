<?php 
    include "koneksi.php";
    $simpan = mysqli_query($koneksi, "INSERT INTO t_barang (nama_barang, id_kategori, satuan, harga_beli, harga_jual) VALUES ('$_POST[nama_barang]', '$_POST[id_kategori]', '$_POST[satuan]', '$_POST[harga_beli]', '$_POST[harga_jual]')");

    if($simpan){
        echo "Berhasil";
    }else{
        echo "Gagal";
    }
?>