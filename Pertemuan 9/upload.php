<?php 
    // Inisialisasi data
    include "koneksi.php";

    // Folder Tempat upload file
    $target_dir = "upload/";

    // Alamat untuk proses upload
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Untuk mengetahui ekstensi sebuah file
    $ekstensi_file = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Untuk mengetahui ukuran sebuah file
    $size_file = $_FILES["file"]["size"];

    // Untuk mengetahui type sebuah file
    $tipe_file = $_FILES["file"]["type"];

    // Untuk membuat penamaan sebuah file
    $file = date("dmyyhis").".".$ekstensi_file;

    // Fungsi utama upload file
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $file)){
        $simpan = mysqli_query($koneksi, "INSERT INTO t_upload (nama_file,tanggal,file,type,size) VALUES('$_POST[nama_file]', curdate(), '$file', '$tipe_file', '$size_file')");

        echo "<script>alert('Berhasil diupload');window.location='tampil_upload.php'</script>";
    }else{
        echo "<script>alert('Gagal diupload');window.location='form_upload.php'</script>";
    }
?>