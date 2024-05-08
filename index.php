<!DOCTYPE html>
<html>
<head>
	<title>UTS - Piala Asia U-23 Qatar Group B</title>
</head>
<body>
	<h1>Input Data Klasemen Piala Asia U-23 Qatar Group B</h1>
	<form action="index.php" method="post">
		<label for="nama_negara">Nama Negara:</label>
		<select name="nama_negara" id="nama_negara">
			<option value="Korea Selatan U-23">Korea Selatan U-23</option>
			<option value="Jepang U-23">Jepang U-23</option>
			<option value="Tiongkok U-23">Tiongkok U-23</option>
			<option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
		</select>
		<br><br>
		<label for="jumlah_pertandingan">Jumlah Pertandingan (P):</label>
		<input type="number" name="jumlah_pertandingan" id="jumlah_pertandingan" value="0">
		<br><br>
		<label for="jumlah_menang">Jumlah Menang (M):</label>
		<input type="number" name="jumlah_menang" id="jumlah_menang" value="0">
		<br><br>
		<label for="jumlah_seri">Jumlah Seri (S):</label>
		<input type="number" name="jumlah_seri" id="jumlah_seri" value="0">
		<br><br>
		<label for="jumlah_kalah">Jumlah Kalah (K):</label>
		<input type="number" name="jumlah_kalah" id="jumlah_kalah" value="0">
		<br><br>
		<label for="jumlah_poin">Jumlah Poin:</label>
		<input type="number" name="jumlah_poin" id="jumlah_poin" value="0">
		<br><br>
		<label for="nama_operator">Nama Operator:</label>
		<input type="text" name="nama_operator" id="nama_operator">
		<br><br>
		<label for="nim_mahasiswa">NIM Mahasiswa:</label>
		<input type="text" name="nim_mahasiswa" id="nim_mahasiswa">
		<br><br>
		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>