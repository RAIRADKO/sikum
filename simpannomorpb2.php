<?php
    include "koneksi.php";

    if(isset($_POST['btnsimpan']))
    {
        // ambil data dari formulir
        $nopb = $_POST['nopb'];
        $tglpb = $_POST['tglpb'];
        $judulpb = $_POST['judulpb'];
        $comboopd = $_POST['comboopd'];
        $tseri = $_POST['tseri'];
        $ttglundang = $_POST['ttglundang'];
        $ket = $_POST['ket'];

        //////// no urut nomor seri    
        $query = mysqli_query($koneksi, "SELECT max(noseri) as kodeTerbesar FROM nomorpb WHERE seri='$tseri'");
        $data = mysqli_fetch_array($query);
        $noseri =$data['kodeTerbesar'];

        $noUrut= $noseri + 1;

        $noseri =$noUrut;
        
        $sql = "UPDATE nomorpb SET tglpb='$tglpb', judulpb='$judulpb', kodeopd='$comboopd', seri='$tseri', noseri='$noseri', tglpengundangan='$ttglundang', ket='$ket' WHERE nopb='$nopb'";
        $query = mysqli_query($koneksi, $sql);

        echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='cetaknopb.php?id=$nopb'</SCRIPT>";
    }
?>

