<?php
    include "headerharus.php";
	
	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM prosessk WHERE kodesk='$id'");
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
                <h5 class="card-header">DATA PROSES SK</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="aksieditdetailprosessk.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Kode SK</label>
                                        <input type="text" class="form-control" name="kodesk" value="<?php echo $data['kodesk']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Masuk</label>
                                        <input type="date" class="form-control" name="tglmasuk" value="<?php echo $data['tglmasuksk'];?>" readonly> 
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul (Jika ingin mengganti judul, ganti pada menu penomoran sk karena sk ini telah bon nomor)</label>
                                        <textarea type="text" class="form-control" name="judulsk" readonly><?php echo $data['judulsk']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>OPD/ Dinas</label>
                                            <select name="comboopd" id="comboopd" class="form-control" onchange="changeValue(this.value)" readonly>
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
                                        <label form="">Jumlah Ttd</label>
                                        <input type="text" class="form-control" name="jmlttd" value="<?php echo $data['jmlttdsk']?>" required>
                                    <div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Naik Kabag</label>
                                        <input type="date" class="form-control" name="tglkabag" value="<?php echo $data['tglnaikkabag'];?>">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Naik Asisten</label>
                                        <input type="date" class="form-control" name="tglass" value="<?php echo $data['tglnaikass'];?>">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Asisten</label>
                                        <input type="text" class="form-control" name="tkodeass" id="tkodeass" value="<?php echo $data['kodeass'];?>"readonly>
                                    </div>
                                    <br>
                                    <form method="POST"> <div class="form-group">
                                        <label form="">Tanggal Turun</label>
                                        <input type="date" class="form-control" name="tglturun" value="<?php echo $data['tglturunsk'];?>">
                                    </div></form>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Keterangan Proses SK</label>
                                        <textarea class="form-control" name="ketprosessk" value=""><?php echo $data['ketprosessk']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor SK</label>
                                        <input type="text" class="form-control" name="nosk" value="<?php echo $data['nosk']?>" readonly>
                                    </div>
                                    <br>
                                    <input type="submit" class="btn btn-primary" name="btnsimpan" value="Simpan">
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