<?php
    include "headeradmin.php";     
    
    // mengambil data barang dengan kode paling besar
    $query = mysqli_query($koneksi, "SELECT max(kodepb) as kodeTerbesar FROM prosespb");
    $data = mysqli_fetch_array($query);
    $kodepb = $data['kodeTerbesar'];
 
    $urutan = (int) substr($kodepb, 3, 3);
    $urutan++;
 
    $huruf = "PB";
    $kodepb = $huruf . sprintf("%04s", $urutan);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">Buat Nota Pengajuan</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="simpanprosespb.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Kode PB</label>
                                        <input type="text" class="form-control" name="kodepb" value="<?php echo $kodepb ?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal Masuk</label>
                                        <input type="date" class="form-control" name="tglmasuk" value = "" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul</label>
                                        <textarea class="form-control" name="judulpb" required></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>OPD/ Dinas</label>
                                        <select name="comboopd" id="comboopd" class="form-control" onchange="changeValue(this.value)" required>
                                            <option value="">---Silahkan Di Pilih---</option>
                                                    <?php  
                                                        $result = mysqli_query($koneksi, "select * from opd");  
                                                        $jsArray = "var prdName = new Array();\n";
                                                        
                                                        while ($data= mysqli_fetch_array($result))
                                                        {   
                                                            echo '<option name="tkodeopd"  value="' . $data['kodeopd'] . '">' . $data['kodeopd'] . '</option>';  
                                                            $jsArray .= "prdName['" . $data['kodeopd'] . "'] = {tkodeass:'" . addslashes($data['kodeass']) . "'};\n";
                                                        }
                                                    ?>          
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Jumlah Ttd</label>
                                        <input type="text" class="form-control" name="jmlttd" id="angka" required>
                                    <div>
                                    <br>
                                    <div class="form-group">
                                        <label>Asisten</label>
                                        <input type="text" class="form-control" name="tkodeass" id="tkodeass" readonly>     
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Keterangan</label>
                                        <textarea class="form-control" name="ketprosespb"></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor Whatsapp</label>
                                        <input type="text" class="form-control" name="nowa">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nomor PB</label>
                                        <input type="text" class="form-control" name="nopb" readonly>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="btnsimpanprosespb"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="dataprosespb.php" class="btn btn-danger"><i class="fa fa-reply"></i> Batal</a>
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

