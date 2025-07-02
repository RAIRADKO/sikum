<?php
    include "headeradmin.php";
	
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
            <div class="card">
                <h5 class="card-header">DATA PENOMORAN SK</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="aksieditdetailnomorsk.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Nomor SK</label>
                                        <input type="text" class="form-control" name="nosk" value="<?php echo $data['nosk']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal SK</label>
                                        <input type="date" class="form-control" name="tglsk" value="<?php echo $data['tglsk'];?>" required> 
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul</label>
                                        <textarea type="text" class="form-control" name="judulsk" required><?php echo $data['judulsk']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>OPD/ Dinas</label>
                                            <select name="comboopd" id="comboopd" class="form-control" onchange="changeValue(this.value)" required>
                                                        <?php  
                                                            $a = mysqli_query($koneksi, "select * from opd");  
                                                            $jsArray = "var prdName = new Array();\n";
                                                            
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
                                                                $jsArray .= "prdName['" . $row['kodeopd'] . "'] = {tkodeass:'" . addslashes($row['kodeass']) . "'};\n";
                                                            }
                                                        ?>          
                                            </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nama Penge-BON</label>
                                        <input type="text" class="form-control" name="pengebon" value="<?php echo $data['namabon'];?>" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Tanggal Penge-BON</label>
                                        <input type="date" class="form-control" name="tglbon" value="<?php echo $data['tglbon'];?>" required>     
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Alasan BON</label>
                                        <textarea class="form-control" name="alasan" required><?php echo $data['alasanbonsk'];?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Tanggal Ambil SK</label>
                                        <input type="date" class="form-control" name="tglambil" value="<?php echo $data['tglambilsk'];?>" readonly>     
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nama Pengambil SK</label>
                                        <textarea class="form-control" name="pengambil" readonly><?php echo $data['namapengambilsk'];?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Keterangan Lain</label>
                                        <textarea class="form-control" name="ket"><?php echo $data['ket'];?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Kode Proses SK</label>
                                        <input type="text" class="form-control" name="tkodesk" value="<?php echo $data['kodesk'];?>" readonly>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success" name="btnsimpan" onclick="return confirm('Yakin disimpan?')"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="datanomorsk.php" class="btn btn-warning"><i class="fa fa-reply-all"></i> Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "footer.html";
?>

<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(x){
    document.getElementById('tkodeass').value = prdName[x].tkodeass;

};
</script>