<?php
    include "headeradmin.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">CETAK LAPORAN</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="aksilap.php" method="POST">
                                    <div class="form-group">
                                        <input type="radio" class="lap" name="lap" value="lapnosk"> Data Nomor SK
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="radio" class="lap" name="lap" value="lapnopb"> Data Nomor PERBUP
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="radio" class="lap" name="lap" value="lapnosekda"> Data SK Sekda
                                    </div>
                                    <br>

                                    <button type="submit" class="btn btn-primary" name="btncetak"><i class="fa fa-print"></i> Cetak</button>
                                    <button type="submit" class="btn btn-success" name="btnexport"><i class="fa fa-file-excel"></i> Export</button>
                                    <a href="templateadmin.php" class="btn btn-danger"><i class="fa fa-reply"></i> Batal</a>
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