<?php
    
	$query = mysqli_query($koneksi, "SELECT max(nosk) as kodeTerbesar FROM nomorsk");
	$data = mysqli_fetch_array($query);
	$nosk = $data['kodeTerbesar'];
    $noUrut = $nosk + 1;
	$nosk = $noUrut;
?>