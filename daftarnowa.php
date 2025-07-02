<?php
    include "headeradmin.php";
	
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
                <h5 class="card-header">Silahkan Isi Nomor Whatsapp Yang Akan Dihubungi</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="aksidaftarnowa.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Kode SK</label>
                                        <input type="text" class="form-control" name="kodesk" value="<?php echo $data['kodesk']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul</label>
                                        <textarea type="text" class="form-control" name="judulsk" readonly><?php echo $data['judulsk']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">OPD/ Dinas</label>
                                        <input type="text" class="form-control" name="comboopd" value="<?php echo $data['kodeopd']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>User</label>
                                        <select name="combouser" id="combouser" class="form-control" onchange="changeValue(this.value)">
                                            <option value="">---Pilihan No WA Lainnya pada OPD yang sama---</option>
                                                    <?php  
                                                        $opd = $data['kodeopd'];
                                                        $result = mysqli_query($koneksi, "select * from user WHERE kodeopd='$opd'");  
                                                        $jsArray = "var prdName = new Array();\n";
                                                        
                                                        while ($data2= mysqli_fetch_array($result))
                                                        {   
                                                            echo '<option name="tnama"  value="' . $data2['nama'] . '">' . $data2['nama'] . '</option>';  
                                                            $jsArray .= "prdName['" . $data2['nama'] . "'] = {nowa:'" . addslashes($data2['nowa']) . "'};\n";
                                                        }
                                                    ?>          
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor SK</label>
                                        <input type="text" class="form-control" name="nosk" value="<?php echo $data['nosk']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor WA</label>
                                        <input type="text" class="form-control" name="nowa"  id="nowa" value="<?php echo $data['nowa']?>">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success" name="btnsimpan"onclick="return confirm('Yakin disimpan?')"><i class="fab fa-whatsapp fa-lg"></i> Kirim</button>
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
    document.getElementById('nowa').value = prdName[x].nowa;
};
</script>