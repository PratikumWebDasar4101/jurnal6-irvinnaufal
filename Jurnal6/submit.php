<?php 
include "koneksi.php";
$nama 			= $_POST['nama'];
$nim 			= $_POST['nim'];
$kelas			= $_POST['kelas'];
$jeniskelamin	= $_POST['jk'];
$hobi			= $_POST['hobi'];
$fakultas		= $_POST['fakultas'];
$alamat			= $_POST['alamat'];
	
$query = "INSERT INTO siswa('Nama', 'NIM', 'Kelas','Jenis_Kelamin','Hobi', 'Fakultas', 'Alamat')
		VALUES ('$nama', '$nim', '$kelas','$jeniskelamin','$hobi','$fakultas','$alamat')";
if ($query) {
	?>
	<script>
		alert("Data Berhasil Tersimpan")
		location = "form.php";
	</script>
	<?php
}else{
	?>
	<script >
		alert("Data Tidak Tersimpan");
	</script>
	<?php
}
?>
 