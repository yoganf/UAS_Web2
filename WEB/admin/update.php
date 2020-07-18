<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$menu1 = $_POST['menu1'];
$menu2 = $_POST['menu2'];
$menu3 = $_POST['menu3'];
$menu4 = $_POST['menu4'];
$harga = $_POST['harga'];
$nama = $_POST['nama'];
$email = $_POST['email'];

// update data ke database
mysqli_query($koneksi,"update pesanan set menu1='$menu1', menu2='$menu2', menu3='$menu3', menu4='$menu4', harga='$harga', nama='$nama', email='$email' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:masuk.php");

?>