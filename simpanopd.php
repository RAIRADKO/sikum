<?php
    include "koneksi.php";

    if(isset($_POST['btnsimpanopd']))
	{
		// ambil data dari formulir
		$kodeopd = $_POST['kodeopd'];
		$namaopd = $_POST['namaopd'];
        $comboass = $_POST['comboass'];
		
		if(!empty($kodeopd) && !empty($namaopd) && !empty($comboass))
		{
			$sql = "SELECT kodeopd FROM opd WHERE kodeopd='$kodeopd'";
			$query = mysqli_query($koneksi, $sql);
			$cek    = mysqli_num_rows ($query);
			if($cek > 0) 
			{
				echo "<SCRIPT>alert('Ooops, Maaf.Data Sudah Ada');</SCRIPT>";
			}
			else
			{
				$sql = "INSERT INTO opd (kodeopd, namaopd, kodeass) VALUE ('$kodeopd', '$namaopd', '$comboass')";
				$query = mysqli_query($koneksi, $sql);
				echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='dataopd.php'</SCRIPT>";
			}
		}
    }
?>