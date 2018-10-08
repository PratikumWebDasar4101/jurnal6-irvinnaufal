<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1>Form Data Mahasiswa</h1>
<form action="submit.php" method="Post">
	<table align="center">
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" placeholder="Masukan Nama Anda" required maxlength="" ></td>
	</tr>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="number" name="nim" placeholder="Masukan NIM Anda" required maxlength="10" minlength="10"></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td>
			<input type="radio" name="kelas" value="41-01">41-01
			<input type="radio" name="kelas" value="41-02">41-02
			<input type="radio" name="kelas" value="41-03">41-03
			<input type="radio" name="kelas" value="41-04">41-04
		</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td>
			<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
			<input type="radio" name="jk" value="Perempuan">Perempuan
		</td>
	</tr>
	<tr>
		<td>Hobi</td>
		<td>:</td>
		<td>
			<input type="checkbox" name="hobi" value="Bermain">Bermain
			<input type="checkbox" name="hobi" value="Tidur">Tidur
			<input type="checkbox" name="hobi" value="Makan">Makan
		</td>
	</tr>
	<tr>
		<td>Fakultas</td>
		<td>:</td>
		<td>
			<select name="fakultas">
  				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
  				<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
  				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
  				<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option> 
			</select>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>
			<textarea name="alamat" rows="5"></textarea>
	</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<input type="submit" name="" value="Kirim">
		</td>
	</tr>
	</table>
</form>
</center>
</body>
</html>