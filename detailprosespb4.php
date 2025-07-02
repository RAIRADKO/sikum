<?php
    include "headeradmin.php";
    
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "SELECT * FROM prosespb INNER JOIN nomorpb ON prosespb.kodepb=nomorpb.kodepb WHERE prosespb.kodepb='$id'");
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

            <div class="card"><h5 class="card-header text-center text-white bg-secondary">INFORMASI DATA PROSES PB</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col">

                            <form class="form-horizontal" action="aksieditdetailprosespb2.php" method="POST">
                            <div class="card"><h5 class="card-header">Data Proses PB</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-group">
                                                <label form="">Kode PB</label>
                                                <input type="text" class="form-control" name="kodepb" value="<?php echo $id?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal Masuk</label>
                                                    <?php if ($data['tglmasukpb'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglmasukpb']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Judul</label>
                                                <textarea type="text" class="form-control" name="judulpb" readonly> <?php echo $data['judulpb']?></textarea>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">OPD/ Dinas</label>
                                                <input type="text" class="form-control" name="opd" value="<?php echo $data['kodeopd']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Jumlah Ttd</label>
                                                <input type="text" class="form-control" name="jmlttd" value="<?php echo $data['jmlttdpb']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal Naik Kabag</label>
                                                    <?php if ($data['tglnaikkabag'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglnaikkabag']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal Naik Asisten</label>
                                                    <?php if ($data['tglnaikass'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglnaikass']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label>Asisten</label>
                                                <input type="text" class="form-control" name="tkodeass" id="tkodeass" value="<?php echo $data['kodeass']?>"readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal Turun</label>
                                                    <?php if ($data['tglturunpb'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglturunpb']));?>" readonly> <?php } ?>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Keterangan Proses PB</label>
                                                <textarea class="form-control" name="ketprosespb" value=""><?php echo $data['ketprosespb'] ?></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="card"><h5 class="card-header">Data Penomoran PB</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">

                                            <div class="form-group">
                                                <label form="">Nomor PB</label>
                                                <input type="text" class="form-control" name="tnopb" value="<?php echo $data['nopb']?>" readonly>
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label form="">Tanggal PB</label>
                                                    <?php if ($data['tglpb'] == '0000-00-00') { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo '';?>" readonly>
                                                    <?php } else { ?>
                                                <input type="text" class="form-control" name="" value="<?php echo date ('d-m-Y', strtotime($data['tglpb']));?>" readonly> <?php } ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-success" name="btnsimpan" onclick="return confirm('Yakin disimpan?')"><i class="fa fa-save"></i> Simpan</button>
                            <a href="dataprosespb.php" class="btn btn-danger"><i class="fa fa-reply-all"></i> Batal</a>
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

