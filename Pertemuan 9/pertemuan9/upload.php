<?php
include"koneksi.php";

//inisialisasi data
$target_dir="upload/";
// Folder tempat upload file

$target_file=$target_dir . basename($_FILES["file"]["name"]);
// Alamat untuk proses upload
$ekstensi_file= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Untuk mengetahui ekstensi sebuah file
$size_file= $_FILES["file"]["size"];
// Untuk mengetahui ukuran sebuah file
$tipe_file= $_FILES["file"]["type"];
// Untuk mengetahui tipe sebuah file
$file=date("dmyyhis").".".$ekstensi_file;
//untuk membuat penamaan file otomatis

//fungsi utama upload file
if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir . $file)){
	$simpan=mysqli_query($koneksi,"INSERT INTO t_upload(nama_file,tanggal,file,type,size) VALUES 
	('$_POST[nama_file]',curdate(),'$file','$tipe_file','$size_file')");
	
	echo"<script>alert('Berhasil diupload');window.location='tampil_upload.php'</script>";
}else{
	echo"Gagal Diupload";

}




?>