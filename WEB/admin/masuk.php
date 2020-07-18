<!DOCTYPE html>
<html>
<head>
	<title>Data Pesanan Masuk</title>
</head>
<body>

	<h2>Data Pesanan Masuk</h2>

	<!-- cek apakah sudah login -->
	

	<h4>Selamat datang, 


	
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NO HP</th>
			<th>Email</th>
			<th>Harga</th>
			<th>Menu 1</th>
			<th>Menu 2</th>
			<th>Menu 3</th>
			<th>Menu 4</th>
			<th>Menu 5</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pesanan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nohp']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['menu1']; ?></td>
				<td><?php echo $d['menu2']; ?></td>
				<td><?php echo $d['menu3']; ?></td>
				<td><?php echo $d['menu4']; ?></td>
				<td><?php echo $d['menu5']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="cetak.php?id=<?php echo $d['id']; ?>" target="_blank"> CETAK</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>

	<a href="logout.php">LOGOUT</a>

</body>
</html>