<?php
    include "headeruser.php";
	
	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM prosessk WHERE kodesk='$id'");
    $data = mysqli_fetch_array($show);
	if($data['tglturunsk']=='0000-00-00')
	{	
		echo "<SCRIPT>window.location='detailprosessk5.php?id=$id'</SCRIPT>";
	}
	else
	{
        echo "<SCRIPT>window.location='detailprosessk2.php?id=$id'</SCRIPT>";
    }

?>