<?php
    include "headeradmin.php";
    
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM prosespb WHERE kodepb='$id'");
    if(mysqli_num_rows($show) == 0)
    {   
        echo "<script>window.history.back()</script>";
    }
    else
    {
        $data = mysqli_fetch_array($show);  //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
        $kode=$data['kodeopd'];
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">DATA PROSES PB</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="aksieditdetailprosespb.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Kode PB</label>
                                        <input type="text" class="form-control" name="kodepb" value="<?php echo $data['kodepb']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Masuk</label>
                                        <input type="date" class="form-control" name="tglmasuk" value="<?php echo $data['tglmasukpb'];?>" readonly> 
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul (Jika ingin mengganti judul, ganti pada menu penomoran pb karena pb ini telah bon nomor)</label>
                                        <textarea type="text" class="form-control" name="judulpb"><?php echo $data['judulpb']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>OPD/ Dinas</label>
                                            <select name="comboopd" id="comboopd" class="form-control" onchange="changeValue(this.value)">
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
                                        <input type="text" class="form-control" name="jmlttd" value="<?php echo $data['jmlttdpb']?>" required>
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
                                        <input type="date" class="form-control" name="tglturun" value="<?php echo $data['tglturunpb'];?>">
                                    </div></form>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Keterangan Proses PB</label>
                                        <textarea class="form-control" name="ketprosespb" value=""><?php echo $data['ketprosespb']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor PB</label>
                                        <input type="text" class="form-control" name="nopb" value="<?php echo $data['nopb']?>" readonly>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success" name="btnsimpan" onclick="return confirm('Yakin disimpan?')"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="dataprosespb.php" class="btn btn-warning"><i class="fa fa-reply-all"></i> Keluar</a>
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

