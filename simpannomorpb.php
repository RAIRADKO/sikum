<?php
    include "koneksi.php";

    if(isset($_POST['btnsimpan']))
    {
        // ambil data dari formulir
        $nopb = $_POST['nopb'];
        $tglpb = $_POST['tglpb'] =="" ? "0000-00-00" : $_POST['tglpb'];
        $judulpb = $_POST['judulpb'];
        $comboopd = $_POST['comboopd'];
        $tseri = $_POST['tseri'];
        $ttglundang = $_POST['ttglundang'] =="" ? "0000-00-00" : $_POST['ttglundang'];
        $pengebon = $_POST['pengebon'];
        $tglbon = $_POST['tglbon'] =="" ? "0000-00-00" : $_POST['tglbon'];
        $alasan = $_POST['alasan'];

        //////// no urut nomor seri    
        $query = mysqli_query($koneksi, "SELECT max(noseri) as kodeTerbesar FROM nomorpb WHERE seri='$tseri'");
        $data = mysqli_fetch_array($query);
        $noseri =$data['kodeTerbesar'];

        $noUrut= $noseri + 1;

        $noseri =$noUrut;
        
        $sql = "INSERT INTO nomorpb (nopb, tglpb, judulpb, kodeopd,seri, noseri, tglpengundangan, namabon, tglbon, alasanbonpb) VALUE ('$nopb','$tglpb','$judulpb','$comboopd','$tseri', '$noseri', '$ttglundang', '$pengebon', '$tglbon','$alasan')";
        $query = mysqli_query($koneksi, $sql);

        echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='datanomorpb.php'</SCRIPT>";
    }
?>

