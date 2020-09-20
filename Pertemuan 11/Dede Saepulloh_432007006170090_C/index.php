<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dede Saepulloh | Tugas Web 2</title>
	<script src="jquery.js" type="text/javascript"></script>
</head>
<body>
	
	<h2 align="center">Form Penggajian</h2>
	<form metdod="POST" action="#" >
	<table>
	<tr>
		<td>Pilih Pegawai</td>
		<td>: <select name="kode_pegawai" id="kode_pegawai">
				<option value="">-- Pilih data --</option>
				<?php include"koneksi.php";
				      $tampil=mysqli_query($koneksi,"SELECT * FROM pegawai inner join jabatan on pegawai.kode_jabatan=jabatan.kode_jabatan");
					  while($data=mysqli_fetch_array($tampil)){
					  ?>
					<option value="<?php echo"$data[kode_pegawai]";?>"><?php echo"$data[nama]";?></option>
					  <?php } ?>
			  </select>
			
		</td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td>: <input type="date" name="tanggal_lahir" id="tanggal_lahir"/></td>
	</tr>
	<tr>
		<td>Tempat Lahir </td>
		<td>: <input type="text" name="tempat_lahir" id="tempat_lahir"/></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>: <textarea name="alamat" id="alamat" cols="20" rows="5"></textarea></td>
	</tr>
	<tr>
		<td>No HP</td>
		<td> : <input type="text" name="no_hp" id="no_hp"/> </td>
	</tr>
	<tr>
		<td>Kode Jabatan</td>
		<td> : <input type="text" name="kode_jabatan" id="kode_jabatan"/> </td>
	</tr>
	<tr>
		<td>Nama Jabatan</td>
		<td> : <input type="text" name="nama_jabatan" id="nama_jabatan"/> </td>
	</tr>
	<tr>
		<td>Gaji Pokok</td>
		<td> : <input type="text" name="gaji_pokok" id="gaji_pokok"/> </td>
	</tr>
	<tr>
		<td>Tunjangan Jabatan</td>
		<td> : <input type="text" name="tunjangan_jabatan" id="tunjangan_jabatan"/> </td>
	</tr>
	
	</table>
	</form>

<script type="text/javascript">
	jQuery(function ($) {
		$("#kode_pegawai").change(function(){
            
            var kode_pegawai=$("#kode_pegawai").val()
            console.log(kode_pegawai);
				$.ajax({
					type:'GET',
					data:'kode_pegawai='+kode_pegawai,
					url:'json_penggajian.php',
					dataType:'json',
					success:function(data){
						for(var i=0; i < data.length; i++){
							$("#nama").val(data[i].nama)
							$("#tanggal_lahir").val(data[i].tanggal_lahir)
							$("#tempat_lahir").val(data[i].tempat_lahir)
							$("#alamat").val(data[i].alamat)
							$("#no_hp").val(data[i].no_hp)
							$("#kode_jabatan").val(data[i].kode_jabatan)
							$("#nama_jabatan").val(data[i].nama_jabatan)
							$("#gaji_pokok").val(data[i].gaji_pokok)
							$("#tunjangan_jabatan").val(data[i].tunjangan_jabatan)
							
						}
					}
				});
			});


		  });

</script>

<script src="jquery.js"></script>
</body>
</html>