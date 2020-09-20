<html>
<head>
	<title>Data Download</title>
	
</head>
<body>
	<h2 align="center">Data Download</h2>
	<a href="form_upload.php">Upload File</a>
	<table align="center" border="1px"; width="800px" >
		<tr>
			<th>No</th>
			<th>Nama File</th>
			<th>Tanggal</th>
			<th>Tipe File</th>
			<th>Ukuran</th>
			<th>Aksi</th>
			
		</tr>
<?php
include "koneksi.php";
$i=0;
$tampil=mysqli_query($koneksi,"SELECT * FROM t_upload");
while($data=mysqli_fetch_array($tampil)){
$i++;
?>	
	 <tr>
		<td><?php echo"$i"; ?></td>
		<td><?php echo"$data[nama_file]"; ?></td>
		<td><?php echo"$data[tanggal]"; ?></td>
		<td><?php echo"$data[type]"; ?></td>
		<td><?php echo"$data[size]"; ?></td>
		<td><a href="upload/<?php echo"$data[file]"; ?>">Download</a></td>

	 </tr>
<?php }?>
	</table>
</body>
</html>