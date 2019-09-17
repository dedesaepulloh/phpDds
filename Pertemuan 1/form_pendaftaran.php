<html>
	<head>
		<title>Belajar PHP</title>
	</head>
	<body>
		<h2 align ="center" >FORM PENDAFTARAN</h2>
		<form method="POST" action="cetak.php">
			<table align="center">
				<tr>
					<td>NPM</td>
					<td>: <input type="text" name="npm" placeholder="Masukan NPM" required /></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>: <input type="text" name="nama" placeholder="Masukan Nama" required /></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>: 
							<select name="jenis_kelamin">
								<option value =""> -- Pilih Jenis -- </option>
								<option value ="Laki - Laki"> Laki - Laki </option>
								<option value ="Perempuan"> Perempuan </option>
							</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>: <input type="submit" name="submit" value="Submit" /></td>
				</tr>
			</table>
		</form>
		
	</body>
</html>