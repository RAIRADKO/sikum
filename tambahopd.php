<?php
    include "headeradmin.php";                      
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">TAMBAH DATA OPD/ DINAS</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="simpanopd.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Kode OPD/ Dinas</label>
                                        <input type="text" class="form-control" name="kodeopd" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nama OPD/ Dinas</label>
                                        <input type="text" class="form-control" name="namaopd" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Asisten</label>
                                        <select name="comboass" class="form-control" required>
                                            <option value="">---Silahkan Di Pilih---</option>
                                                    <?php  
                                                        $query=mysqli_query($koneksi,"select * from asisten");

                                                        while ($data=mysqli_fetch_array($query))
                                                        {    
                                                    ?>
                                            <option value="<?php echo $data['kodeass'];?>"><?php echo $data['kodeass'];?></option>
                                                    <?php }; ?> 
                                        </select>
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-primary" name="btnsimpanopd"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="dataopd.php" class="btn btn-warning"><i class="fa fa-reply"></i> Batal</a>

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