<?php
    include "koneksi.php";

    if(isset($_POST['btneditopd']))
	{
		// ambil data dari formulir
		$kodeopd = $_POST['kodeopd'];
		$namaopd = $_POST['namaopd'];
        $kodeass = $_POST['comboass'];

		$sql = "UPDATE opd SET namaopd = '$namaopd',  kodeass = '$kodeass' WHERE kodeopd='$kodeopd'";
		$query = mysqli_query($koneksi, $sql);
		echo "<SCRIPT>alert('Data Berhasil Di Ubah');window.location='dataopd.php'</SCRIPT>";
    }
?>