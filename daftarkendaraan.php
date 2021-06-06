<?php  
$koneksi= new mysqli("localhost", "root", "", "kendaraan"); 

$cek=mysqli_query($koneksi, "SELECT * FROM kendaraan");
?>
<?php 

if (isset($_POST['cari'])) {
	$cari=$_POST['car'];
	$cek= mysqli_query($koneksi,"SELECT * FROM kendaraan WHERE nomer_mesin like '%".$cari."%' 

		"); 
}

else{
	$cek= mysqli_query($koneksi,"SELECT * FROM kendaraan"); 
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Kendaraan</title>
	<link rel="stylesheet" type="text/css" href="penampilan.css">
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form action="" method="post">
		<input type="text" name="car" id="car" size="50px" autofocus autocomplete="off" placeholder="ketik nomer_mesin yang ingin dicari">
		<button type="submit"  name="cari">Cari</button>
		<b><button><a href="inputdata.php" style="text-decoration: none;">Tambah Data</a></button></b>
				<b><button><a href="daftarkendaraan.php" style="text-decoration: none;">Perbarui</a></button></b>
	</form>
	<br>
<table border="1px" cellpadding="15px" cellspacing="0">	
<tr>
	<th>Aksi</th>
	<th>Nomor Mesin Kendaraan</th>
	<th>Nomor Rangka Kendaraan</th>
	<th>Jenis Kendaraan</th>
	<th>Nama Kendaraan </th>
	<th>Tanggal Buat</th>
	<th>Nomor BPKB</th>
	<th>Nomor STNK</th>
	<th>Status STNK</th>
	<th>Kondisi</th>
</tr>
	<?php  while ($row=mysqli_fetch_assoc($cek) ) :{
		} ?>
<tr>
	<td><button><a href="hapus.php?id=<?=$row["id"]; ?>" onClick="return confirm('yakin');" style="text-decoration: none;">hapus data</a></button>
	<button><a href="ubah.php?id=<?= $row["id"]; ?>" style="text-decoration: none;"> ubah data</a></button>
</td>
	<td><?php echo$row["nomer_mesin"]; ?></td>
	<td><?php echo$row["nomer_rangka"]; ?></td>
	<td><?php echo$row["jenis_kendaraan"]; ?></td>
	<td><?php echo$row["nama_kendaraan"]; ?></td>
	<td><?php echo$row["tanggal"]; ?></td>
	<td><?php echo$row["nomer_BPKB"]; ?></td>
	<td><?php echo$row["nomer_STNK"]; ?></td>
	<td><?php echo$row["status_STNK"]; ?></td>
	<td><?php echo$row["kondisi"]; ?></td>
</tr>
<?php  endwhile;  ?>
</table>
</body>
<footer >
 <p style="text-align: center; color: #CC00FF;"> &copy;Muhammad Syaid Abdul Malik Kelas 4.2</p>
</footer>
</html>
<?php 


 ?>




