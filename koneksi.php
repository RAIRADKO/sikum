<?php
session_start();

$host = "172.31.31.70"; // Nama hostnya
$username = "sikumpurworejoka_ika"; // Username
$password = "sikumpurworejoka"; // Password (Isi jika menggunakan password)
$tahun=$_SESSION['tahun'];
$database="sikumpurworejoka_$tahun";
$koneksi = mysqli_connect($host, $username, $password, $database);


	if(!$koneksi) 
	{
		die("Maaf, Koneksi database $database gagal dr koneksi php : ".mysqli_connect_error());
	}

?>