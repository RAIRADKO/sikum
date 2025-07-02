<?php
    include "headeruser.php";
    
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM prosespb WHERE kodepb='$id'");
    $data = mysqli_fetch_array($show);
    if($data['tglturunpb']=='0000-00-00')
    {   
        echo "<SCRIPT>window.location='detailprosespb5.php?id=$id'</SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>window.location='detailprosespb2.php?id=$id'</SCRIPT>";
    }

?>

