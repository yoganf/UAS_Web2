<!DOCTYPE html>
<html>
<head>
	<title>Pesan Soto Ayam Ndelik</title>
</head>
<body>

	<h2>Silakan Tulis pesanan anda.</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>SOTO AYAM NDELIK</h3>
	<form method="post" action="proses_pesan.php">
		<table>
			<tr>			
				<td></td>
				<td><input type="text" name="menu1" value="Paket Nasi Soto Ayam + Mendoan" readonly></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="35.000" readonly></td>
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