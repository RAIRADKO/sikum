<?php
    include "koneksi.php";

    $kodepb = $_POST['kodepb'];
    $judulpb = $_POST['judulpb'];
    $comboopd = $_POST['comboopd'];
    $nopb = $_POST['nopb'];
    $nowa = $_POST['nowa'];

    if(isset($_POST['btnsimpan']))
    {   
        if (!(is_numeric($nowa)))
        {
            echo "<SCRIPT>alert('Isikan dengan angka tanpa spasi');history.go(-1);</SCRIPT>";
        }  
        else
        {
            $sql = "UPDATE prosespb SET judulpb='$judulpb', kodeopd='$comboopd', nopb='$nopb', nowa='$nowa' WHERE kodepb='$kodepb'";
            $query = mysqli_query($koneksi, $sql);

            echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='wanopb.php?id=$nopb'</SCRIPT>";
        }
    }
?>

