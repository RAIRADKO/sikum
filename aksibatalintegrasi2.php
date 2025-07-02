<?php
    include "koneksi.php";

    if(isset($_POST['btnbatalintegrasi']))
    {
        // ambil data dari formulir
        $tnopb = $_POST['tnopb'];
        $tkodepb = $_POST['tkodepb'];

            $sql = "UPDATE prosespb SET nopb='' WHERE kodepb='$tkodepb'";
            $query = mysqli_query($koneksi, $sql);

            $sql2 = "UPDATE nomorpb  SET kodepb='' WHERE nopb='$tnopb'";
            $query2 = mysqli_query($koneksi, $sql2);
            echo "<SCRIPT>alert('Data Gagal untuk Integrasi BON Nomor PB nya');window.location='dataprosespb.php'</SCRIPT>";
    }
?>

