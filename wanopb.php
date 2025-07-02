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
        if ($data['kodepb']!=="")
        {
            $kodepb = $data['kodepb'];
            $show2 = mysqli_query($koneksi, "SELECT * FROM prosespb WHERE kodepb='$kodepb'");
            $data2 = mysqli_fetch_array($show2);
            $nowa = $data2['nowa'];
            if ($nowa !== "")
            {
                $nowa2 = substr($nowa, 1);
                $nowa62 = '62' . $nowa2;
                
                echo "<SCRIPT>window.location='https://api.whatsapp.com/send?phone=$nowa62&text=Nuwun%20Sewu.%0AMohon%20untuk%20diinformasikan%20untuk%20mengambil%20PB/Perbup/Lainnya%20yang%20sudah%20selesai%20proses%20tandatangan%20di%20Bagian%20Hukum%20Setda%20Kab.Purworejo.%0AUntuk%20informasi%20lebih%20lanjut,%20silahkan%20kunjungi%20www.sikumcoba.com.%0AINI%20ADALAH%20PESAN%20OTOMATIS.%0ATerima%20Kasih.'</SCRIPT>";
            }
            else
            {
                echo "<SCRIPT>alert('No WA belum ada, silahkan isi dulu');window.location='daftarnowa.php?id=$kodepb'</SCRIPT>";
            }
            
        }
        else
        {
            echo "<SCRIPT>alert('Data tidak ketemu');</SCRIPT>";
        }
    }

?>

