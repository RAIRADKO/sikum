<?php
    include "headeradmin.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col mt-2 ml-2" style="min-height: 500px;">
            <div class="card">
                <h6 class="card-header">Silahkan dicari dulu pada tabel apakah pernah BON Nomor</h6>
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <a href="tambahprosespb.php" class="btn btn-primary"><i class="fa fa-minus"></i> Tidak BON</a>
                            </div>

                            <div class="col">
                                <a href="tambahnomorpb&np.php" class="btn btn-primary"  onclick="return confirm('Sudah ada surat resmi permohonan bon?')"><i class="fa fa-plus"></i> BON baru</a>
                            </div>                         

                            <div class="col">
                                <form class="d-flex" method="GET">
                                    <input type="text"class="form-control me-2" name="keyword">
                                    <button type="submit" class="btn btn-success ml-2"  name="cari"><i class="fa fa-search"></i> Cari</button>
                                </form>
                            </div>            
                        </div>

                        <div class="table-responsive row mt-3">
                            <div class="col">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Nomor PB</th>
                                        <th width="13%">Tgl PB</th>
                                        <th>Judul PB</th>
                                        <th>OPD/ Dinas</th>
                                        <th>Status</th>
                                        <th width="10%">Aksi</th>
                                    </tr>

                                    <?php
                                        $perpage = 50;
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
                                            $query=mysqli_query($koneksi,"select * from nomorpb where kodepb='' or kodepb IS NULL AND (nopb like '%$keyword%' or judulpb like '%$keyword%' or kodeopd like '%$keyword%') ORDER BY nopb DESC LIMIT $start, $perpage");
                                        }
                                        else
                                        {
                                            $query=mysqli_query($koneksi,"select * from nomorpb WHERE kodepb='' or kodepb IS NULL ORDER BY nopb DESC LIMIT $start, $perpage");
                                        }

                                        if(mysqli_num_rows($query)==0)
                                        {
                                            echo '<tr><td colspan="13" align="center">Tidak Ada Data</td></tr>';
                                        }
                                        else
                                        {
                                        while ($ambil_data=mysqli_fetch_array($query))
                                        {                                       
                                    ?>

                                    <tr>
                                        <td><?php echo $ambil_data['nopb']; ?></td>
                                        <td><?php 
                                            if ($ambil_data['tglpb'] == '0000-00-00')
                                            {
                                                echo '';
                                            }
                                            else
                                            {
                                                echo date ('d-m-Y', strtotime($ambil_data['tglpb']));
                                            }
                                        ?></td>
                                        <td><?php echo $ambil_data['judulpb']; ?></td>
                                        <td><?php echo $ambil_data['kodeopd']; ?></td>
                                        <?php   if (($ambil_data['tglturunpb'] == '0000-00-00') && (!empty($ambil_data['kodepb'])))
                                                    {
                                                        $_SESSION['statusnopb'] = '<span class="badge badge-pill badge-warning">Proses</span>';
                                                    }
                                                    else if ($ambil_data['kodepb']=='')
                                                    {
                                                        $_SESSION['statusnopb'] = '<span class="badge badge-pill badge-danger">BON</span>';
                                                    }
                                                    else
                                                    {
                                                        $_SESSION['statusnopb'] = '<span class="badge badge-pill badge-success">Selesai</span>';
                                                    }
                                            ?>
                                        <td><?php echo $_SESSION['statusnopb'];?></td>
                                        <td><a href ="aksibonpb.php?id=<?php echo $ambil_data['nopb']?>" class="btn btn-warning" onclick="return confirm('Yakin ini ya nomor PB nya?')"><i class="fa fa-th-list"></i> Ini</a> 
                                    </tr>
                                    <?php
                                        }}
                                    ?>
                                </table>

                            <?php
                                if ((isset($_GET['cari']))=="")
                                {
                                    $data=mysqli_query($koneksi,"select * from nomorpb WHERE kodepb='' ORDER BY nopb DESC");
                                }
                                else 
                                {
                                    $data=mysqli_query($koneksi,"select * from nomorpb where kodepb='' AND (nopb like '%$keyword%' or judulpb like '%$keyword%' or kodeopd like '%$keyword%') ORDER BY nopb DESC");
                                }
                                $jmlbaris = mysqli_num_rows($data);
                                $halaman = ceil($jmlbaris/$perpage);

                                $previous = $page - 1;
                                $next = $page + 1;
                            ?>
                            <ul class="pagination justify-content-center">
                                <?php // Jika page = 1, maka LinkPrev disable
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

