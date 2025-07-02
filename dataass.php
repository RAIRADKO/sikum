<?php
    include "headeradmin.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 500px;">
            <div class="card">
                <h5 class="card-header">DATA ASISTEN</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="tambahass.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                            </div>                         

                            <div class="col">
                                <form class="d-flex" method="GET">
                                    <input type="text"class="form-control me-2" name="keyword">
                                    <input type="submit" class="btn btn-outline-info ml-2"  name="cari" value="Cari">
                                </form>
                            </div>            
                        </div>

                        <div class="table-responsive row mt-3">
                            <div class="col">
                                <table class=" table table-bordered table-striped">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Asisten</th>
                                        <th width="50%">Asisten</th>
                                        <th>Aksi</th>
                                    </tr>

                                    <?php
                                        $perpage = 20;
                                        if (isset($_GET['page']))
                                        {
                                            $page = $_GET['page'];
                                        }
                                        else
                                        {
                                            $page = 1;
                                        }

                                        if($page > 1)
                                        {
                                            $start = ($page * $perpage) - $perpage;
                                        }
                                        else
                                        {
                                            $start = 0;
                                        }
                                        if (isset($_GET['cari']))
                                        {
                                            $keyword=$_GET['keyword'];
                                            $query=mysqli_query($koneksi,"select * from asisten where namaass like '%$keyword%' or kodeass like '%$keyword%' ORDER BY kodeass ASC LIMIT $start, $perpage");
                                        }
                                        else
                                        {
                                            $query=mysqli_query($koneksi,"select * from asisten ORDER BY kodeass ASC LIMIT $start, $perpage");
                                        }

                                        if(mysqli_num_rows($query)==0)
                                        {
                                            echo '<tr><td colspan="13" align="center">Tidak Ada Data</td></tr>';
                                        }
                                        else
                                        {
                                        $no=1;
                                        while ($ambil_data=mysqli_fetch_array($query))
                                        {                                       
                                    ?>

                                    <tr>
                                        <td><?php echo $no++ ?></th>
                                        <td><?php echo $ambil_data['kodeass']; ?></td>
                                        <td><?php echo $ambil_data['namaass']; ?></td>
                                        <td><a href ="editass.php?id=<?php  echo $ambil_data['kodeass']  ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a> 
                                        <a href ="hapusass.php?id=<?php echo $ambil_data['kodeass']?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="fa fa-trash"></i> Hapus</a></td>
                                    </tr>
                                    <?php
                                        }}
                                    ?>
                                </table>

                            <?php
                                if ((isset($_GET['cari']))=="")
                                {
                                    $data=mysqli_query($koneksi,"select * from asisten ORDER BY kodeass ASC");
                                }
                                else
                                {
                                    $data=mysqli_query($koneksi,"select * from asisten where namaass like '%$keyword%' or kodeass like '%$keyword%' ORDER BY kodeass ASC");
                                }

                                $jmlbaris = mysqli_num_rows($query);
                                $halaman = ceil($jmlbaris/$perpage);

                                $previous = $page - 1;
                                $next = $page + 1;
                            ?>
                            <ul class="pagination justify-content-center">
                                <?php
                                    // Jika page = 1, maka LinkPrev disable
                                    if($page == 1)
                                    { 
                                ?>        
                                    <!-- link Previous Page disable --> 
                                <li class="page-item disabled"><a class="page-link" <?php if($halaman > 1){ echo "href='?page=$previous'"; } ?>>PREVIOUS</a></li>
                                <?php
                                    }
                                else
                                { 
                                ?>
                                <li class="page-item"><a class="page-link"  <?php if($halaman > 1){ echo "href='?page=$previous'"; } ?>>PREVIOUS</a></li>
                                <?php
                                }
                                ?>
                            <?php
                                for($i=1; $i<=$halaman; $i++)
                                {
                            ?>    
                                <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"> <?php echo $i; ?></a></li>
                                <?php } ?>
                                
                            
                            <!-- link Next Page -->
                                <?php       
                                if($page == $halaman){ 
                                ?>
                                <li class="page-item disabled"><a class="page-link" href="?page= <?php $next ?>">Next</a></li>
                                <?php
                                }
                                else{
                                $linkNext = ($page < $halaman)? $page + 1 : $halaman;
                                ?>
                                <li class="page-item"><a a class="page-link" href="?page=<?php echo $linkNext; ?>">NEXT</a></li>
                                <?php
                                }
                                ?>
                            
                            </ul>
                            
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