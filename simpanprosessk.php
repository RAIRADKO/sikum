<?php
include "koneksi.php";

if (isset($_POST['btnsimpanprosessk'])) {
    // ambil data dari formulir
    $kodesk = $_POST['kodesk'];
    $tglmasuk = $_POST['tglmasuk'];
    $judulsk = addslashes($_POST['judulsk']);
    $comboopd = $_POST['comboopd'];
    $jmlttd = $_POST['jmlttd'];
    $kodeass = $_POST['tkodeass'];
    $ketprosessk = addslashes($_POST['ketprosessk']);
    $nosk = $_POST['nosk'] == "" ? "0" : $_POST['nosk'];
    $nowa = $_POST['nowa'];



    if ($kodeass == '') {
        echo "<script>alert('Silahkan ulangi pilihan OPD nya');history.go(-1);</script>";
    } else if ((!(is_numeric($nowa))) && ($nowa !== '')) {
        echo "<script>alert('Isikan dengan angka tanpa spasi');history.go(-1);</script>";
    } else {
        $sql = "INSERT INTO prosessk (kodesk, tglmasuksk, judulsk, kodeopd, kodeass, jmlttdsk, ketprosessk, nowa, nosk) VALUE ('$kodesk','$tglmasuk','$judulsk','$comboopd', '$kodeass', '$jmlttd','$ketprosessk', '$nowa', '$nosk')";
        $query = mysqli_query($koneksi, $sql);
     
        $sql2 = "UPDATE nomorsk SET judulsk='$judulsk', kodesk='$kodesk' WHERE nosk='$nosk'";
        $query2 = mysqli_query($koneksi, $sql2);
        
        echo "<script>alert('Data Berhasil Disimpan');window.location='npsk.php?id=$kodesk'</script>";
    }
}
