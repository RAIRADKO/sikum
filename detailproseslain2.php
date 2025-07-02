<?php
    include "headeradmin.php";
    
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM proseslain WHERE kodelain='$id'");
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
                <h5 class="card-header">DATA PROSES </h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="aksieditdetailproseslain.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Kode </label>
                                        <input type="text" class="form-control" name="kode" value="<?php echo $data['kodelain']; ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Masuk</label>
                                        <input type="date" class="form-control" name="tglmasuk" value="<?php echo $data['tglmasuk'];?>" readonly> 
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Sedian</label>
                                        <input type="text" class="form-control" name="combosedian" value="<?php echo $data['sedian'];?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul</label>
                                        <textarea type="text" class="form-control" name="judul" readonly><?php echo $data['judul']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>OPD/ Dinas</label>
                                        <input type="text" class="form-control" name="comboopd" value="<?php echo $data['kodeopd'];?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Jumlah Ttd</label>
                                        <input type="text" class="form-control" name="jmlttd" value="<?php echo $data['jmlttd']?>" readonly>
                                    <div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Naik Kabag</label>
                                        <input type="date" class="form-control" name="tglkabag" value="<?php echo $data['tglnaikkabag'];?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Naik Asisten</label>
                                        <input type="date" class="form-control" name="tglass" value="<?php echo $data['tglnaikass'];?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Asisten</label>
                                        <input type="text" class="form-control" name="tkodeass" id="tkodeass" value="<?php echo $data['kodeass'];?>"readonly>
                                    </div>
                                    <br>
                                    <form method="POST"> <div class="form-group">
                                        <label form="">Tanggal Turun</label>
                                        <input type="date" class="form-control" name="tglturun" value="<?php echo $data['tglturun'];?>" readonly>
                                    </div></form>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor Whatsapp</label>
                                        <input type="text" class="form-control" name="nowa" value="<?php echo $data['nowa'];?>">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Keterangan Proses </label>
                                        <textarea class="form-control" name="ketproses" value=""><?php echo $data['ket']?></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tgl Ambil</label>
                                        <input type="date" class="form-control" name="ttglambil" value="<?php echo $data['tglambil'];?>">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nama Pengambil</label>
                                        <input type="text" class="form-control" name="tpengambil" value="<?php echo $data['namaambil'];?>">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success" name="btnsimpan2" onclick="return confirm('Yakin disimpan?')"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="dataproseslain.php" class="btn btn-warning"><i class="fa fa-reply-all"></i> Batal</a>
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

