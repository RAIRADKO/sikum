<?php
    include "headeradmin.php";
    
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM nomorpb WHERE nopb='$id'");
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
                <h5 class="card-header">EDIT NO PB (Mohon diperhatikan antara judul dengan kategori seri)</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="aksieditdetailnomorpb.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Nomor PB</label>
                                        <input type="text" class="form-control" name="nopb" value="<?php echo $data['nopb']?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal PB</label>
                                        <input type="date" class="form-control" name="tglpb" value="<?php echo $data['tglpb'];?>" required> 
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul</label>
                                        <textarea type="text" class="form-control" name="judulpb" required><?php echo $data['judulpb']?></textarea>
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
                                        <label form="">Kategori</label>
                                            <?php 
                                            $show2 = mysqli_query($koneksi, "SELECT * FROM nomorpb INNER JOIN seri ON nomorpb.seri=seri.seri WHERE nopb='$id'");
                                            $data2 = mysqli_fetch_array($show2); 
                                            ?>
                                        <input type="text" class="form-control" name="kategori" value="<?php echo $data2['kategori'];?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Seri</label>
                                        <input type="text" class="form-control" name="seri" value="<?php echo $data['seri'];?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor seri</label>
                                        <input type="text" class="form-control" name="no seri" value="<?php echo $data['noseri'];?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Tanggal Pengundangan</label>
                                        <input type="date" class="form-control" name="ttglundang" value="<?php echo $data['tglpengundangan'];?>" required>     
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nama Penge-BON</label>
                                        <input type="text" class="form-control" name="tpengebon" value="<?php echo $data['namabon'];?>" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Tanggal Penge-BON</label>
                                        <input type="date" class="form-control" name="tglbon" value="<?php echo $data['tglbon'];?>" required>     
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Alasan BON</label>
                                        <textarea class="form-control" name="alasan" required><?php echo $data['alasanbonpb'];?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Tanggal Ambil PB</label>
                                        <input type="date" class="form-control" name="tglambil" value="<?php echo $data['tglambilpb'];?>" readonly>     
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nama Pengambil PB</label>
                                        <textarea class="form-control" name="pengambil" readonly><?php echo $data['namapengambilpb'];?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Keterangan Lain</label>
                                        <textarea class="form-control" name="ket"><?php echo $data['ket'];?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Kode Proses PB</label>
                                        <input type="text" class="form-control" name="pengebon" value="<?php echo $data['kodepb'];?>" readonly>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success" name="btnsimpan" onclick="return confirm('Yakin disimpan?')"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="datanomorpb.php" class="btn btn-warning"><i class="fa fa-reply-all"></i> Batal</a>
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

