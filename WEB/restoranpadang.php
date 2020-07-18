<!DOCTYPE html>
<html>
<head>
	<title>Pesan Restoran Padang</title>
</head>
<body>

	<h2>Silakan Tulis pesanan anda.</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>RESTORAN PADANG</h3>
	<form method="post" action="proses_pesan.php">
		<table>
			<tr>			
				<td></td>
				<td><input type="text" name="menu1" value="Paket Nasi Sate Padang" readonly></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="40.000" readonly></td>
			</tr>
			<tr>
				<td>Nama Pemesan</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>No.HP</td>
				<td><input type="text" name="nohp"></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>