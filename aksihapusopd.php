<?php
    include "koneksi.php";

    if(isset($_POST['btnhapusopd']))
	{
		$kodeopd = $_POST['kodeopd'];
	
		$sql = "DELETE FROM opd WHERE kodeopd='$kodeopd'";
		$query = mysqli_query($koneksi, $sql);
		echo "<SCRIPT>alert('Data Berhasil Di HAPUS');window.location='dataopd.php'</SCRIPT>";
	}
?>