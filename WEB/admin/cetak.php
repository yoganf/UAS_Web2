<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from pesanan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<center>
			<h1>Pesanan Sodara : <?php echo $d['nama']; ?><br>
			Total Harga : <?php echo $d['harga']; ?><br>
			Alamat Email : <?php echo $d['email']; ?>

		</h1>
			
			<h2>Isi Pesanan Sebagai Berikut:</h2>
			<table>
				<tr>			
					
					<td>
					<?php echo $d['id']; ?>
						<?php echo $d['menu1']; ?>
					</td>
				</tr>
				<tr>
					
					<td><?php echo $d['menu2']; ?>
				</tr>
				<tr>
					
					<td><?php echo $d['menu3']; ?></td>
				</tr>
				<tr>
					
					<td><?php echo $d['menu4']; ?>
				</tr>
					
			</table>
	
	</center>
		<?php 
	}
	?>
	<script>
		window.print();
	</script>