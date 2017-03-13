<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <span class="fa fa-users fa-lg"></span> Transaksi Pengembalian Buku</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Transaksi</a></li>
        <li class="active">Pengembalian  Buku</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header"></div>
            <!-- /.box-header -->
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Transaksi</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Status Peminjman</th>
                  <th>Nama Anggota</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      foreach ($data as  $row) {
                        $tgl_pinjam = date('d-m-Y');
                        $tgl_kembali = date('d-m-Y');
                        $status = $row['status_pinjam'];
                  ?>
                              <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $row['idtemporari']; ?></td>
                                <td><?php echo $row['tgl_pinjam']; ?></td>
                                <td><?php echo $row['tgl_pinjam']; ?></td>
                                <td>
                                 <?php 
                                        if ($status =='Dipinjam') {
                                          echo "<button class='btn btn-danger btn-xs'><span class='fa fa-warning'></span> Dipinjam</button>";
                                        }else{
                                         echo " <button class='btn btn-success btn-xs'><span class='fa fa-check'></span> Dikembalikan</button>";
                                        }
                                  ?>
                                 </td>
                                <td><?php echo $row['siswa_nama']; ?></td>
                                  <td>
                                 <?php echo " <a class='btn btn-xs btn-success' href='".base_url('transaksi/peminjaman/detail_pengembalian/'.$row['idtemporari'])."'><span class='fa fa-eye'> Lihat Data</a>"; ?>
                                </td>
                              </tr>
                
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>