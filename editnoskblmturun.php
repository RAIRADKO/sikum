<?php
    include "headerharus.php";

        
  
	$kodesk = $_POST['kodesk'];
	echo $kodesk;
	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM nomorsk WHERE nosk='$id'");
	if(mysqli_num_rows($show) == 0)
	{	
		echo "<script>window.history.back()</script>";
	}
	else
	{
		$data = mysqli_fetch_array($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        $kode=$data['kodeopd'];
    }

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">

        <div class="card text-center text-white bg-secondary">
            <h4 class="card-header">SILAHKAN DI CEK BON NOMOR SK NYA</h4>
        </div>
        <br>

            <form class="form-horizontal" action="aksibatalintegrasi.php" method="POST">
                <div class="card">
                    <h5 class="card-header">DATA NOMOR SK</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                         <div class="form-group">
                                        <label form="">Kode SK</label>
                                        <input type="text" class="form-control" name="kodesk" value="<?php echo $kodesk?>" readonly>
                                    </div>
                                        <div class="form-group">
                                            <label form="">Nomor SK</label>
                                            <input type="text" class="form-control" name="tnosk" value="<?php echo $data['nosk']?>" readonly>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label form="">Tanggal SK</label>       
                                            <input type="date" class="form-control" name="ttglsk" value="<?php echo $data['tglsk']?>" readonly>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label form="">Judul SK</label>
                                            <textarea type="text" class="form-control" name="tjudulsk" readonly><?php echo $data['judulsk']?></textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>OPD/ Dinas</label>
                                            <select name="comboopd" id="comboopd" class="form-control" onchange="changeValue(this.value)" readonly>
                                                        <?php  
                                                            $a = mysqli_query($koneksi, "select * from opd");  
                                                            
                                                            while ($row= mysqli_fetch_array($a))
                                                            {   
                                                                $kodeopd=$row['kodeopd'];
                                                                if ($kode==$kodeopd)
                                                                {
                                                                    $cek="selected";
                                                                    
                                                                }
                                                                else
                                                                {
                                                                    $cek="";
                                                                }
                                                                echo "<option value='$kodeopd' $cek>$kodeopd</option>";
                                                            }
                                                        ?>          
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label form="">Tanggal Turun SK</label>
                                            <input type="date" class="form-control" name="ttglturunsk" value="<?php echo $data['tglturunsk']?>" readonly>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                        <label form="">Keterangan</label>
                                        <textarea class="form-control" name="tket" value="" readonly><?php echo $data['ket']?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <br>
                <div class="card">
                    <h5 class="card-header">DATA PENGEBON NOMOR SK</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                <div class="form-group">
                                        <label form="">Nama Pengebon</label>
                                        <input type="text" class="form-control" name="tpengebon" value="<?php echo $data['namabon'] ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Bon SK</label>
                                        <input type="date" class="form-control" name="ttglbon" value="<?php echo $data['tglbon'] ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Alasan Bon SK</label>
                                        <textarea class="form-control" name="talasan" value="" readonly><?php echo $data['alasanbonsk'] ?></textarea>
                                        <input type="text" class="form-control" name="tkodesk" value="<?php echo $data['kodesk'] ?>" hidden>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="card text-center">
                    <div class="card-body">
                        <a href ="dataprosessk.php" onclick="return confirm('Yakin ya BON Nomor SK nya ini?')" class="btn btn-success"><i class="fa fa-save"></i> Simpan</a>
                        <a href ="dataprosessk.php" onclick="return confirm('Yakin dibatalkan untuk integrasi BON Nomor SK nya?')" class="btn btn-primary" ><i class="fa fa-reply-all"></i> Batal</a>
                    </div>
                </div>
                </form>
        </div>
    </div>
</div>




<?php
    include "footer.html";
?>

