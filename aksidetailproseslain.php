<?php
    include "headeradmin.php";
    
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM proseslain WHERE kodelain='$id'");
    if(mysqli_num_rows($show) == 0)
    {   
        echo "<script>window.history.back()</script>";
    }
    else
    {
        $data = mysqli_fetch_array($show);  //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
    }

    $tglturun=$data['tglturun'];
    
    if($tglturun=='0000-00-00')
    {
        echo "<SCRIPT>window.location='detailproseslain.php?id=$id'</SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>window.location='detailproseslain2.php?id=$id'</SCRIPT>";
    }

    ///buton cetak///
    if(isset($_POST['btncetak']))
    {
        echo "<SCRIPT>window.location='np.php?id=$kode'</SCRIPT>";
    }
?>