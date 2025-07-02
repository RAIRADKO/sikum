
<?php    
	$query = mysqli_query($koneksi, "SELECT max(kodesk) as kodeTerbesar FROM prosessk");
	$data = mysqli_fetch_array($query);
	$kodesk = $data['kodeTerbesar'];
 

	//$urutan = (int) substr($kodesk, 3, 3);
        $urutan = substr ($kodesk, 2);
	$urutan++;
 
	$huruf = "SK";
	$kodesk = $huruf . sprintf("%04s", $urutan);
?>