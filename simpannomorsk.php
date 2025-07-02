<?php
    include "koneksi.php";

    if(isset($_POST['btnsimpan']))
	{
		// ambil data dari formulir
		$nosk = $_POST['nosk'];
		$tglsk = $_POST['tglsk'];
        $judulsk = $_POST['judulsk'];
        $comboopd = $_POST['comboopd'];
        $pengebon = $_POST['pengebon'];
        $tglbon = $_POST['tglbon'];
        $alasan = $_POST['alasan'];
		
		$sql = "INSERT INTO nomorsk (nosk, tglsk, judulsk, kodeopd, namabon, tglbon, alasanbonsk) VALUE ('$nosk','$tglsk','$judulsk','$comboopd','$pengebon', '$tglbon','$alasan')";
		$query = mysqli_query($koneksi, $sql);

        echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='datanomorsk.php'</SCRIPT>";
    }
?>