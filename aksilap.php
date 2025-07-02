<?php
    include "koneksi.php";

    if(isset($_POST['btnexport']))
	{
        if (isset($_POST['lap']))
		{
			$lap=$_POST['lap'];
			if ($lap=='lapnosk')
			{
				echo "<SCRIPT>window.location='exportlapnosk.php'</SCRIPT>";
			}
			else if ($lap=='lapnopb')
			{
				echo "<SCRIPT>window.location='exportlapnopb.php'</SCRIPT>";
			}
			else
			{
				echo "<SCRIPT>window.location='exportlapnolain.php'</SCRIPT>";
			}
		}
		else
		{
			echo "<SCRIPT>alert('Silahkan dipilih dulu');window.location= window.history.go(-1);</SCRIPT>";
		}
	}

	if(isset($_POST['btncetak']))
	{
		if (isset($_POST['lap']))
		{
			$lap=$_POST['lap'];
			if ($lap=='lapnosk')
			{
				echo "<SCRIPT>window.location='cetaklapnosk.php'</SCRIPT>";
			}
			else if ($lap=='lapnopb')
			{
				echo "<SCRIPT>window.location='cetaklapnopb.php'</SCRIPT>";
			}
			else
			{
				echo "<SCRIPT>window.location='cetaklapnolain.php'</SCRIPT>";
			}
		}
		else
		{
			echo "<SCRIPT>alert('Silahkan dipilih dulu');window.location= window.history.go(-1);</SCRIPT>";
		}
	}

?>