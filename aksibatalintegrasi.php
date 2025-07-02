<?php
    include "koneksi.php";

    if(isset($_POST['btnbatalintegrasi']))
	{
		// ambil data dari formulir
        $tnosk = $_POST['tnosk'];
        $tkodesk = $_POST['tkodesk'];

            $sql = "UPDATE prosessk SET nosk='' WHERE kodesk='$tkodesk'";
			$query = mysqli_query($koneksi, $sql);

            $sql2 = "UPDATE nomorsk  SET kodesk='' WHERE nosk='$tnosk'";
			$query2 = mysqli_query($koneksi, $sql2);
			echo "<SCRIPT>alert('Data Gagal untuk Integrasi BON Nomor SK nya');window.location='dataprosessk.php'</SCRIPT>";
    }
?>