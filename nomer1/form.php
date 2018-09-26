<!DOCTYPE html>
<html>
<head>
	<title>pilih</title>
</head>
<body>
	<h2>Silahkan isi data dibawah</h2>
	<form action="proses.php" method="post" enctype="multipart/form-data">
		<p>Silahkan tambahkan foto anda</p>
		<input type="file" name="dokumen" value="dokumen">

		<p>Silahkan pilih hobi anda</p>
		<input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
		<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
		<input type="checkbox" name="hobi[]" value="Menyanyi">Menyanyi<br>
		<input type="checkbox" name="hobi[]" value="Menari">Menari<br>
		<input type="checkbox" name="hobi[]" value="Traveling">Traveling<br>
		<input type="checkbox" name="hobi[]" value="Olahraga">Olahraga<br>

		<p>Pilih genre film favorit anda :</p>
		<input type="checkbox" name="film[]" value="Horror">Horror<br>
		<input type="checkbox" name="film[]" value="Romance">Romance<br>
		<input type="checkbox" name="film[]" value="Action">Action<br>
		<input type="checkbox" name="film[]" value="Anime">Anime<br>
		<input type="checkbox" name="film[]" value="Sci-fi">Sci-fi<br>
		<input type="checkbox" name="film[]" value="Comedy">Comedy<br>
		<input type="checkbox" name="film[]" value="Thriller">Thriller<br>

		<p>Pilih destinasi liburan anda :</p>
		<input type="checkbox" name="tujuan[]" value="Sumbawa">Sumbawa<br>
		<input type="checkbox" name="tujuan[]" value="Bali">Bali<br>
		<input type="checkbox" name="tujuan[]" value="Raja_ampat">Raja Ampat<br>
		<input type="checkbox" name="tujuan[]" value="Pulau_derawan">Pulau Derawan<br>
		<input type="checkbox" name="tujuan[]" value="Bangka_belitung">Bangka Belitung<br>
		<input type="checkbox" name="tujuan[]" value="Labuan_bajo">Labuan Bajo<br>
		<input type="checkbox" name="tujuan[]" value="Pulo_cinta">Pulo Cinta<br><br>
		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>