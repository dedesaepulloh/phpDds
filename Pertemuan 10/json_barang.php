<?php 
    include "koneksi.php";
    $arr = array();
    $tampil = mysqli_query($koneksi, "SELECT * FROM t_barang WHERE id_barang = '$_GET[id_barang]'");
    while($data = mysqli_fetch_array($tampil)){
        $temp = array(
            "id_barang" => $data["id_barang"],
            "nama_barang" => $data["nama_barang"],
            "satuan" => $data["satuan"],
            "harga_beli" => $data["harga_beli"],
            "harga_jual" => $data["harga_jual"],
            "stok" => $data["stok"],
        );

        array_push($arr, $temp);

    }

    $data = json_encode($arr);
    echo "$data";
?>