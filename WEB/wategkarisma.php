<!DOCTYPE html>
<html>
<head>
	<title>Pesan Warteg Karisma</title>
</head>
<body>

	<h2>Silakan Tulis pesanan anda.</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>WARTEG KARISMA</h3>
	<form method="post" action="proses_pesan.php">
		<table>
			<tr>			
				<td></td>
				<td><input type="text" name="menu1" value="Paket Nasi Tempe Orek" readonly></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="text" name="menu2" value="Kentang Balado" readonly></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="text" name="menu3" value="Oseng - Oseng" readonly></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="text" name="menu4" value="Tongkol" readonly></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="30.000" readonly></td>
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