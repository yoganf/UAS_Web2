<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="masuk.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from pesanan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Menu 1</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="menu1" value="<?php echo $d['menu1']; ?>">
					</td>
				</tr>
				<tr>
					<td>Menu 2</td>
					<td><input type="text" name="menu2" value="<?php echo $d['menu2']; ?>"></td>
				</tr>
				<tr>
					<td>Menu 3</td>
					<td><input type="text" name="menu3" value="<?php echo $d['menu3']; ?>"></td>
				</tr>
				<tr>
					<td>Menu 4</td>
					<td><input type="text" name="menu4" value="<?php echo $d['menu4']; ?>"></td>
				</tr>
				<tr>
					<td>Harga </td>
					<td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Nama Pemesan</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>