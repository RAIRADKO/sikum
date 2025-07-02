<?php
    include "headeradmin.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">TAMBAH DATA ASISTEN</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="simpanass.php" method="POST">
                                    <div class="form-group">
                                        <label form="">Singkatan Asisten</label>
                                        <input type="text" class="form-control" name="kodeass" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Kepanjangan Asisten</label>
                                        <input type="text" class="form-control" name="namaass" required>
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-primary" name="btnsimpanass"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="dataass.php" class="btn btn-danger"><i class="fa fa-reply"></i> Batal</a>
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