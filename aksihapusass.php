<?php
    include "koneksi.php";

    if(isset($_POST['btnhapusass']))
	{
		// ambil data dari formulir
		$kodeass = $_POST['kodeass'];
		$namaass = $_POST['namaass'];
	
			// buat query
			$sql = "DELETE FROM asisten WHERE kodeass='$kodeass'";
			$query = mysqli_query($koneksi, $sql);
			echo "<SCRIPT>alert('Data Berhasil Di HAPUS');window.location='dataass.php'</SCRIPT>";
	}
?>