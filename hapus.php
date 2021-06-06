<?php 
function hapus($ab)
{
	global $koneksi;
	mysqli_query($koneksi, "DELETE  FROM kendaraan WHERE id=$ab");
	return mysqli_affected_rows($koneksi); 

}





$ab=$_GET['id'];
$koneksi= new mysqli("localhost", "root", "", "kendaraan");




if (hapus($ab) > 0) {
	echo "<script> alert(' Mantap Sekali Data Sudah terhapus bung');
	document.location.href = 'daftarkendaraan.php';
	</script>";

}

else{
	echo "<script> alert(' Terjadi Kegagalan dalam Menghapus nih haha');
	document.location.href = 'daftarkendaraan.php';
	</script>";
	
}
?>
