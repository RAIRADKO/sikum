<?php
    include "koneksi.php";

    $kodepb = $_POST['kodepb'];
    $judulpb = $_POST['judulpb'];
    $jmlttd = $_POST['jmlttd'];
    $kodeass = $_POST['tkodeass'];
    $ket = $_POST['ketprosespb'];

    if(isset($_POST['btnsimpan']))
    {
        $sql = "UPDATE prosespb SET ketprosespb='$ket'WHERE kodepb='$kodepb'";
        $query = mysqli_query($koneksi, $sql);

        echo "<SCRIPT>alert('Data Berhasil disimpan');window.location='dataprosespb.php'</SCRIPT>";
    }
?>

