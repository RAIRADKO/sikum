<?php
    include "headeradmin.php";     
    include "funcnosk.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">BON NOMOR SK BARU<br>(Pastikan sudah ada surat resmi permohonan BON nomornya)</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form class="form-horizontal" action="simpannomorsk.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Nomor SK</label>
                                        <input type="text" class="form-control" name="nosk" value="<?php echo $nosk?>" readonly>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Tanggal SK</label>
                                        <input type="date" class="form-control" name="tglsk" value = "" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Judul SK</label>
                                        <textarea class="form-control" name="judulsk" required></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>OPD/ Dinas</label>
                                        <select name="comboopd" id="comboopd" class="form-control" onchange="changeValue(this.value)" required>
                                            <option value="">---Silahkan Di Pilih---</option>
                                                    <?php  
                                                        $result = mysqli_query($koneksi, "select * from opd");  
                                                        
                                                        while ($data= mysqli_fetch_array($result))
                                                        {   
                                                            echo '<option name="tkodeopd"  value="' . $data['kodeopd'] . '">' . $data['kodeopd'] . '</option>';  
                                                        }
                                                    ?>          
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nama Penge-BON</label>
                                        <input type="text" class="form-control" name="pengebon" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Tanggal Penge-BON</label>
                                        <input type="date" class="form-control" name="tglbon" required>     
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Alasan BON</label>
                                        <textarea class="form-control" name="alasan" required></textarea>
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