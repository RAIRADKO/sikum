<?php
    include "koneksi.php";
    include "funcnopb.php";

    $kodepb = $_POST['kodepb'];
    $tglmasuk = $_POST['tglmasuk'] ==""?"0000-00-00":$_POST['tglmasuk'];
    $judulpb = $_POST['judulpb'];
    $comboopd = $_POST['comboopd'];
    $jmlttd = $_POST['jmlttd'];
    $tglkabag = $_POST['tglkabag'] ==""?"0000-00-00":$_POST['tglkabag'];
    $tglass = $_POST['tglass'] ==""?"0000-00-00":$_POST['tglass'];
    $kodeass = $_POST['tkodeass'];
    $tglturun = $_POST['tglturun'];
    $ket = $_POST['ketprosespb'];
    $nowa = $_POST['nowa'];
    $tnopb = $_POST['nopb'];

    if(isset($_POST['btnsimpan']))
    {
        if (empty($tglturun))
        {
            $sql = "UPDATE prosespb SET tglmasukpb='$tglmasuk', judulpb='$judulpb', kodeopd='$comboopd', jmlttdpb='$jmlttd', tglnaikkabag='$tglkabag', tglnaikass='$tglass', kodeass='$kodeass', ketprosespb='$ket', nowa='$nowa' WHERE kodepb='$kodepb'";
            $query = mysqli_query($koneksi, $sql);

            echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='dataprosespb.php'</SCRIPT>";
        }
        else
        {
            if (empty($tnopb))
            {
                $sql2 = "INSERT INTO nomorpb SET nopb='$nopb', tglpb='$tglturun', judulpb='$judulpb', kodeopd='$comboopd', tglturunpb='$tglturun', kodepb='$kodepb'";
                $query2 = mysqli_query($koneksi, $sql2);

                $sql3 = "UPDATE prosespb SET tglmasukpb='$tglmasuk', judulpb='$judulpb', kodeopd='$comboopd', jmlttdpb='$jmlttd', tglnaikkabag='$tglkabag', tglnaikass='$tglass', kodeass='$kodeass', tglturunpb='$tglturun', ketprosespb='$ket', nopb='$nopb', nowa='$nowa' WHERE kodepb='$kodepb'";
                $query3 = mysqli_query($koneksi, $sql3);

                echo "<SCRIPT>alert('Data Berhasil Disimpan & Bernomor');window.location='editnopb.php?id=$nopb'</SCRIPT>";
            }
            else
            {
                $sql4 = "UPDATE nomorpb SET tglturunpb='$tglturun', kodepb='$kodepb' WHERE nopb='$tnopb'";
                $query4 = mysqli_query($koneksi, $sql4);

                $sql5 = "UPDATE prosespb SET tglmasukpb='$tglmasuk', judulpb='$judulpb', kodeopd='$comboopd', jmlttdpb='$jmlttd', tglnaikkabag='$tglkabag', tglnaikass='$tglass', kodeass='$kodeass', tglturunpb='$tglturun', ketprosespb='$ket', nopb='$tnopb', nowa='$nowa' WHERE kodepb='$kodepb'";
                $query5 = mysqli_query($koneksi, $sql5);

                echo "<SCRIPT>alert('Data Sudah BON Nomor & Berhasil disimpan');window.location='cetaknopb.php?id=$tnopb'</SCRIPT>";
            }
        }     
    }

    ///buton cetak///
    if(isset($_POST['btncetak']))
    {
        echo "<SCRIPT>window.location='nppb.php?id=$kodepb'</SCRIPT>";
    }
?>

