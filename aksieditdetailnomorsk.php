<?php
    include "koneksi.php";
    //include "funcnosk.php";

	$nosk = $_POST['nosk'];
	$tglsk = $_POST['tglsk'] == "" ? "0000-00-00" : $_POST['tglsk'];
    $judulsk = $_POST['judulsk'];
    $comboopd = $_POST['comboopd'];
    $pengebon = $_POST['pengebon'];
    $tglbon = $_POST['tglbon'] == "" ? "0000-00-00" : $_POST['tglbon'];
    $alasan = $_POST['alasan'];
    $tglambil = $_POST['tglambil'] == "" ? "0000-00-00" : $_POST['tglambil'];
    $pengambil = $_POST['pengambil'];
    $ket = $_POST['ket'];

    
    if(isset($_POST['btnsimpan']))
	{
        $sql = "UPDATE nomorsk SET tglsk='$tglsk', judulsk='$judulsk', kodeopd='$comboopd', namabon='$pengebon', tglbon='$tglbon', alasanbonsk='$alasan', tglambilsk='$tglambil', namapengambilsk='$pengambil', ket='$ket' WHERE nosk='$nosk'";
        $query = mysqli_query($koneksi, $sql);


        // echo("<br>Error description: " . mysqli_error($koneksi));

        echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='kartunosk.php?id=$nosk'</SCRIPT>";
    }
