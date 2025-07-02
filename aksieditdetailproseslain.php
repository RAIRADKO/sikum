<?php
include "koneksi.php";

$kode = $_POST['kode'];
$tglmasuk = $_POST['tglmasuk'] == "" ? "0000-00-00" : $_POST['tglmasuk'];
$sedian = $_POST['combosedian'];
$judul = $_POST['judul'];
$comboopd = $_POST['comboopd'];
$jmlttd = $_POST['jmlttd'];
$tglkabag = $_POST['tglkabag'] == "" ? "0000-00-00" : $_POST['tglkabag'];
$tglass = $_POST['tglass'] == "" ? "0000-00-00" : $_POST['tglass'];
$kodeass = $_POST['tkodeass'];
$tglturun = $_POST['tglturun'];
$ket = $_POST['ketproses'];
$nowa = $_POST['nowa'];


if (isset($_POST['btnsimpan'])) {
    if ($kodeass == '') {
        echo "<SCRIPT>alert('Silahkan ulangi pilihan OPD nya');history.go(-1);</SCRIPT>";
    } else if ((!(is_numeric($nowa))) && ($nowa !== '')) {
        echo "<SCRIPT>alert('Isikan dengan angka tanpa spasi');history.go(-1);</SCRIPT>";
    } else {
        $texttglturun = $tglturun != '' ? "tglturun='$tglturun'," : "";
        $sql = "UPDATE proseslain SET tglmasuk='$tglmasuk', sedian='$sedian', judul='$judul', kodeopd='$comboopd', jmlttd='$jmlttd', tglnaikkabag='$tglkabag', 
            tglnaikass='$tglass', kodeass='$kodeass', $texttglturun ket='$ket', nowa='$nowa' WHERE kodelain='$kode'";
        $query = mysqli_query($koneksi, $sql);

        if ($tglturun == '') {
            echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='dataproseslain.php'</SCRIPT>";
        } else {
            echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='cetaktandaterima.php?id=$kode'</SCRIPT>";
        }
    }
}

if (isset($_POST['btnsimpan2'])) {
    $tglambil = $_POST['ttglambil'];
    $namaambil = $_POST['tpengambil'];
    $sql = "UPDATE proseslain SET sedian='$sedian', ket='$ket', tglambil='$tglambil', namaambil='$namaambil', nowa='$nowa' WHERE kodelain='$kode'";
    $query = mysqli_query($koneksi, $sql);

    echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='dataproseslain.php'</SCRIPT>";
}

///buton cetak///
if (isset($_POST['btncetak'])) {
    echo "<SCRIPT>window.location='np.php?id=$kode'</SCRIPT>";
}
