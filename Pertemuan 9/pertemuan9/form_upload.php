<html>
<head>
	<title>Form Upload</title>
</head>
<body>
	<h2 align="center">Form Upload</h2>	
	<form method="POST" action="upload.php" enctype="multipart/form-data">
	<table>
	<tr>
		<td>Nama File</td>
		<td>: <input type="text" name="nama_file"/></td>
	</tr>
	<tr>
		<td>Pilih File</td>
		<td>: <input type="file" name="file"/></td>
	</tr>
	<tr>
		<td></td>
		<td>: 
		<input type="reset" name="reset" value="Reset"/>
		<input type="submit" name="submit" value="Simpan"/></td>
	</tr>
	</table>
	</form>
		<a href="tampil_upload.php">Kembali</a>
</body>
</html>