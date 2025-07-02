<?php
    include "headeradmin.php";

	$id = $_GET['id'];
	$show = mysqli_query($koneksi, "SELECT * FROM opd WHERE kodeopd='$id'");
	
	if(mysqli_num_rows($show) == 0)
	{	
		echo "<script>window.history.back()</script>";
	}
	else
	{
		$data = mysqli_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	}
?>


<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">EDIT DATA OPD/ DINAS</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="aksieditopd.php" method="POST">
                                    
                                    <div class="form-group">
                                        <label form="">Kode OPD/ Dinas</label>
                                        <input type="text" readonly class="form-control" name="kodeopd" value="<?php echo $data['kodeopd'] ?>" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label form="">Nama OPD/ DInas</label>
                                        <input type="text" class="form-control" name="namaopd" value="<?php echo $data['namaopd'] ?>" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Asisten</label>
                                        <select name="comboass" class="form-control">
                                            <option value=""><?php echo $data['kodeass'] ?></option>
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

                                    <button type="submit" class="btn btn-primary" name="btneditopd"><i class="fa fa-save"></i> Edit</button>
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