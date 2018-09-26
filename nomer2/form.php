<!DOCTYPE html>
<html>
<head>
	<title>barang</title>
</head>
<body>
	<center>
	<h2>Pemesanan</h2>
	<form action="proses.php" method="post">
		<table>
			<tr valign="top">
				<td>Daftar Barang</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="brg[]" value="Creamatte">Creamatte&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp 45.000<br>
					<input type="checkbox" name="brg[]" value="Blush">Cream Blush&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp 30.000<br>
					<input type="checkbox" name="brg[]" value="Bedak">Compact Powder&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp 40.000<br>
					<input type="checkbox" name="brg[]" value="Eyebrow">Eyebrow&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp 85.000<br>
					<input type="checkbox" name="brg[]" value="Mascara">Mascara&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp 45.000<br>
					<input type="checkbox" name="brg[]" value="Shadow">Eyeshadow&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp 40.000<br>
				</td>
			</tr>
			<tr>
				<td>Jenis Pengiriman</td>
				<td>:</td>
				<td>
					<input type="radio" name="jasa" value="JNE">JNE
					<input type="radio" name="jasa" value="J&T">J&T
					<input type="radio" name="jasa" value="Sicepat">Sicepat
					<input type="radio" name="jasa" value="Tiki">Tiki
					<input type="radio" name="jasa" value="Pos">Pos Kilat
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="tanggal" value="<?php echo date("Y/m/d");?>"></td>
				<td colspan="3"><input type="submit" value="Checkout"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>