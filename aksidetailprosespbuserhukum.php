<?php
    include "headeruserhukum.php";
    
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM prosespb WHERE kodepb='$id'");
    $data = mysqli_fetch_array($show);
    if($data['tglturunpb']=='0000-00-00')
    {   
        echo "<SCRIPT>window.location='detailprosespb5userhukum.php?id=$id'</SCRIPT>";
    }
    else if (($data['tglturunpb']=='0000-00-00') && ($data['nopb']==''))
    {
        echo "<SCRIPT>window.location='detailprosespb6userhukum.php?id=$id'</SCRIPT>";
    }
    else
    {
        echo "<SCRIPT>window.location='detailprosespb2userhukum.php?id=$id'</SCRIPT>";
    }

?>

