<?php
    include "koneksi.php";

    if(isset($_POST['btneditass']))
	{
		// ambil data dari formulir
		$kodeass = $_POST['kodeass'];
		$namaass = $_POST['namaass'];
		
		if (!empty($namaass))
		{
			// buat query
			$sql = "UPDATE asisten SET kodeass = '$kodeass' , namaass = '$namaass' WHERE kodeass='$kodeass'";
			$query = mysqli_query($koneksi, $sql);
			echo "<SCRIPT>alert('Data Berhasil Di Ubah');window.location='dataass.php'</SCRIPT>";
		}
	}
?>