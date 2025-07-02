<?php
    include "koneksi.php";

    if(isset($_POST['btnsimpan']))
	{
		// ambil data dari formulir
		$nosk = $_POST['nosk'];
		$tglsk = $_POST['tglsk'];
        $judulsk = addslashes($_POST['judulsk']);
        $comboopd = $_POST['comboopd'];
        $pengebon = addslashes($_POST['pengebon']);
        $tglbon = $_POST['tglbon'];
        $alasan = addslashes($_POST['alasan']);
        $kodesk = $_POST['kodesk'];

		$sql = "INSERT INTO nomorsk (nosk, tglsk, judulsk, kodeopd, namabon, tglbon, alasanbonsk, kodesk) VALUE ('$nosk','$tglsk','$judulsk','$comboopd','$pengebon', '$tglbon','$alasan', '$kodesk')";
		$query = mysqli_query($koneksi, $sql);

        $sql2 = "UPDATE prosessk SET nosk='$nosk' WHERE kodesk='$kodesk'";
		$query2 = mysqli_query($koneksi, $sql2);
        
        echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='dataprosessk.php'</SCRIPT>";
    }
?>