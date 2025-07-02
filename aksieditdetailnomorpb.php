<?php
include "koneksi.php";
//include "funcnopb.php";

$nopb = $_POST['nopb'];
$tglpb = $_POST['tglpb'] == "" ? "0000-00-00" : $_POST['tglpb'];
$judulpb = addslashes($_POST['judulpb']);
$comboopd = $_POST['comboopd'];
$tglundang = $_POST['ttglundang'] == "" ? "0000-00-00" : $_POST['ttglundang'];
$pengebon = addslashes($_POST['tpengebon']);
$tglbon = $_POST['tglbon'] == "" ? "0000-00-00" : $_POST['tglbon'];
$alasan = addslashes($_POST['alasan']);
$tglambil = $_POST['tglambil'] == "" ? "0000-00-00" : $_POST['tglambil'];
$pengambil = addslashes($_POST['pengambil']);
$ket = addslashes($_POST['ket']);

if (isset($_POST['btnsimpan'])) {
    $sql = "UPDATE nomorpb SET tglpb='$tglpb', judulpb='$judulpb', kodeopd='$comboopd', tglpengundangan='$tglundang', namabon='$pengebon', tglbon='$tglbon', alasanbonpb='$alasan', tglambilpb='$tglambil', namapengambilpb='$pengambil', ket='$ket' WHERE nopb='$nopb'";
    $query = mysqli_query($koneksi, $sql);
    // echo("Error description: " . mysqli_error($koneksi));
    // die();
    echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='datanomorpb.php'</SCRIPT>";
}
