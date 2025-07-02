<?php
include "koneksi.php";
include "funcnosk.php";

$kodesk = $_POST['kodesk'];
$tglmasuk = $_POST['tglmasuk'] == "" ? "0000-00-00" : $_POST['tglmasuk'];
$judulsk = addslashes($_POST['judulsk']);
$comboopd = $_POST['comboopd'];
$jmlttd = $_POST['jmlttd'];
$tglkabag = $_POST['tglkabag'] == "" ? "0000-00-00" : $_POST['tglkabag'];
$tglass = $_POST['tglass'] == "" ? "0000-00-00" : $_POST['tglass'];
$kodeass = $_POST['tkodeass'];
$tglturun = $_POST['tglturun'];
$ket = $_POST['ketprosessk'];
$nowa = $_POST['nowa'];
$tnosk = $_POST['nosk'];

if (isset($_POST['btnsimpan'])) {
    if (empty($tglturun)) {

        $sql = "UPDATE prosessk SET tglmasuksk='$tglmasuk', judulsk='$judulsk', kodeopd='$comboopd', jmlttdsk='$jmlttd', tglnaikkabag='$tglkabag', tglnaikass='$tglass', kodeass='$kodeass', ketprosessk='$ket', nowa='$nowa' WHERE kodesk='$kodesk'";
        $query = mysqli_query($koneksi, $sql);

        echo "<SCRIPT>alert('Berhasil disimpan');window.location='dataprosessk.php'</SCRIPT>";
    } else {
        if (empty($tnosk)) {

            $sql2 = "INSERT INTO nomorsk SET nosk='$nosk', tglsk='$tglturun', judulsk='$judulsk', kodeopd='$comboopd', tglturunsk='$tglturun', kodesk='$kodesk'";
            $query2 = mysqli_query($koneksi, $sql2);

            $sql3 = "UPDATE prosessk SET tglmasuksk='$tglmasuk', judulsk='$judulsk', kodeopd='$comboopd', jmlttdsk='$jmlttd', tglnaikkabag='$tglkabag', tglnaikass='$tglass', kodeass='$kodeass', tglturunsk='$tglturun', ketprosessk='$ket', nosk='$nosk', nowa='$nowa' WHERE kodesk='$kodesk'";
            $query3 = mysqli_query($koneksi, $sql3);

            echo "<SCRIPT>alert('Silahkan isi Tanggal SK nya');window.location='detailnomorsk4.php?id=$nosk'</SCRIPT>";
        } else {
            $sql4 = "UPDATE nomorsk SET tglturunsk='$tglturun', kodesk='$kodesk' WHERE nosk='$tnosk'";
            $query4 = mysqli_query($koneksi, $sql4);

            $sql5 = "UPDATE prosessk SET tglmasuksk='$tglmasuk', judulsk='$judulsk', kodeopd='$comboopd', jmlttdsk='$jmlttd', tglnaikkabag='$tglkabag', tglnaikass='$tglass', kodeass='$kodeass', tglturunsk='$tglturun', ketprosessk='$ket', nosk='$tnosk', nowa='$nowa' WHERE kodesk='$kodesk'";
            $query5 = mysqli_query($koneksi, $sql5);

            echo "<SCRIPT>alert('Data Sudah BON Nomor & Berhasil disimpan');window.location='kartunosk.php?id=$tnosk'</SCRIPT>";
        }
    }
}

///buton cetak///
if (isset($_POST['btncetak'])) {
    echo "<SCRIPT>window.location='npsk.php?id=$kodesk'</SCRIPT>";
}
