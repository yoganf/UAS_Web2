<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$menu1 = $_POST['menu1'];
$menu2 = $_POST['menu2'];
$menu3 = $_POST['menu3'];
$menu4 = $_POST['menu4'];
$menu5 = $_POST['menu5'];
$harga = $_POST['harga'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

// menginput data ke database
mysqli_query($koneksi,"insert into pesanan values('$menu1','$menu2','$menu3','$menu4','$menu5','$harga','$nama','$nohp','$email')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>