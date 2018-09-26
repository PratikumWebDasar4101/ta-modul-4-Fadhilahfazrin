<?php 
session_start();
$data = $_SESSION["data"];
$brg = $_POST["brg"];
$jasa = $_POST["jasa"];
$alamat = $_POST["alamat"];
$tgl = $_POST["tanggal"];
$harga = 0;
$harga_jasa = 0;

for ($i=0; $i < count($brg); $i++) { 
	if ($brg[$i] == "Creamatte") {
		$harga += 45000;
	} elseif ($brg[$i] == "Blush") {
		$harga += 30000;
	} elseif ($brg[$i] == "Bedak") {
		$harga += 40000;
	} elseif ($brg[$i] == "Eyebrow") {
		$harga += 85000;
	} elseif ($brg[$i] == "Mascara") {
		$harga += 45000;
	} elseif ($brg[$i] == "Shadow") {
		$harga += 40000;
	}
}

if ($jasa == "JNE") {
	$harga_jasa = 7000;
}
if ($jasa == "J&T") {
	$harga_jasa = 10000;
}
if ($jasa == "Sicepat") {
	$harga_jasa = 9000;
}
if ($jasa == "Tiki") {
	$harga_jasa = 8000;
}
if ($jasa == "Pos") {
	$harga_jasa = 6000;
}

function total($a, $b){
	return $a + $b;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil</title>
</head>
<body>
	<center>
	<h2>Rincian Pesanan</h2>
	<table>
		<tr>
			<td>Tanggal Transaksi</td>
			<td>:</td>
			<td><?php echo $tgl; ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $data["nama"]?></td>
		</tr>
		<tr>
			<td>No. Handphone</td>
			<td>:</td>
			<td><?php echo $data["no_hp"]?></td>
		</tr>
		<tr valign="top">
			<td>Pesanan</td>
			<td>:</td>
			<td>
				<?php
				foreach ($brg as $pesanan) {
					echo $pesanan."<br>";
				}
				?>
			</td>
		</tr>
		<tr>
			<td>Pengiriman</td>
			<td>:</td>
			<td><?php echo $jasa." ".$harga_jasa;?></td>
		</tr>
		<tr>
			<td>Total</td>
			<td>:</td>
			<td><?php echo total($harga, $harga_jasa); ?></td>
		</tr>
	</table>
	</center>
</body>
</html>