<?php
    include "koneksi.php";

	$kodesk = $_POST['kodesk'];
    $judulsk = $_POST['judulsk'];
    $comboopd = $_POST['comboopd'];
    $nosk = $_POST['nosk'];
    $nowa = $_POST['nowa'];

    if(isset($_POST['btnsimpan']))
	{   
        if (!(is_numeric($nowa)))
        {
            echo "<SCRIPT>alert('Isikan dengan angka tanpa spasi');history.go(-1);</SCRIPT>";
        }  
        else
        {
            $sql = "UPDATE prosessk SET judulsk='$judulsk', kodeopd='$comboopd', nosk='$nosk', nowa='$nowa' WHERE kodesk='$kodesk'";
            $query = mysqli_query($koneksi, $sql);

            echo "<SCRIPT>alert('Data Berhasil Disimpan');window.location='wanosk.php?id=$nosk'</SCRIPT>";
        }
    }
?>