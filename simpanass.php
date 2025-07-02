<?php
    include "koneksi.php";

    if(isset($_POST['btnsimpanass']))
	{
		// ambil data dari formulir
		$kodeass = $_POST['kodeass'];
		$namaass = $_POST['namaass'];
		
		if(!empty($kodeass) && !empty($namaass))
		{
			$sql = "SELECT kodeass FROM asisten WHERE kodeass='$kodeass'";
			$query = mysqli_query($koneksi, $sql);
			$cek    = mysqli_num_rows ($query);
			if($cek > 0) 
			{
				echo "<SCRIPT>alert('Ooops, Maaf.Data Sudah Ada');window.location='dataass.php'</SCRIPT>";
			}
			else
			{
				$sql = "INSERT INTO asisten (kodeass, namaass) VALUE ('$kodeass', '$namaass')";
				$query = mysqli_query($koneksi, $sql);
				echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='dataass.php'</SCRIPT>";
			}
		}
    }
?>