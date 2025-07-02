<?php
    include "koneksi.php";

    if(isset($_POST['btnsimpan']))
	{
		// ambil data dari formulir
		$nosk = $_POST['nosk'];
		$tglsk = $_POST['tglsk'] == "" ? "0000-00-00": $_POST['tglsk'];
        $judulsk = $_POST['judulsk'];
        $comboopd = $_POST['comboopd'];
        $kodeass = $_POST['tkodeass'];
        $jmlttd = $_POST['jmlttd'];
        $pengebon = $_POST['pengebon'];
        $tglbon = $_POST['tglbon'] == "" ? "0000-00-00": $_POST['tglbon'];
        $alasan = $_POST['alasan'];
        $nowa = $_POST['nowa'];
        $kodesk = $_POST['kodesk'];

		$sql = "INSERT INTO nomorsk (nosk, tglsk, judulsk, kodeopd, namabon, tglbon, alasanbonsk, kodesk) VALUE ('$nosk','$tglsk','$judulsk','$comboopd', '$pengebon', '$tglbon','$alasan', '$kodesk')";
		$query = mysqli_query($koneksi, $sql);

        $sql2 = "INSERT INTO prosessk(kodesk, tglmasuksk, judulsk, kodeopd,  kodeass, jmlttdsk, nowa, nosk) VALUE ('$kodesk','$tglbon','$judulsk','$comboopd', '$kodeass', '$jmlttd', '$nowa', '$nosk')";
		$query2 = mysqli_query($koneksi, $sql2);


        // echo("Error description: " . mysqli_error($koneksi));

        echo "<SCRIPT>alert('SK telah berhasil di BON nomor kan');window.location='npsk.php?id=$kodesk'</SCRIPT>";
    }
