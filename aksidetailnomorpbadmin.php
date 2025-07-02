<?php
    include "koneksi.php";
    
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM nomorpb WHERE nopb='$id'");
    if(mysqli_num_rows($show) == 0)
    {   
        echo "<script>window.history.back()</script>";
    }
    else
    {
        $data = mysqli_fetch_array($show);  //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        if ($data['kodepb']=="")
        {
            echo "<SCRIPT>window.location='detailnomorpb.php?id=$id'</SCRIPT>";
        }
        else if ((!empty($data['kodepb'])) && ($data['tglturunpb']=='0000-00-00'))
        {
            echo "<SCRIPT>window.location='detailnomorpb3.php?id=$id'</SCRIPT>";
        }
        else if (($data['seri']=="") OR ($data['noseri']==""))
        {
            echo "<SCRIPT>window.location='detailnomorpb5.php?id=$id'</SCRIPT>";
        }
        else if ((!empty($data['kodepb'])) && (!empty($data['tglturunpb'])))
        {
            echo "<SCRIPT>window.location='detailnomorpb4.php?id=$id'</SCRIPT>";
        }
        else
        {
            echo "<SCRIPT>alert('Data tidak ketemu');</SCRIPT>";
        }
    }
?>

