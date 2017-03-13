<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-tags fa-lg"></span> Detail Peminjaman</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Transaksi </a></li>
        <li class="active">Detail Transaksi Peminjaman  
        
        </li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <label>Transaski Peminjaman </label>
              
            </div>
            <hr>
            <!-- /.box-header -->
            <!-- cari Siswa Yang Meminjam -->
            <div class="box-body">
            <?php foreach ($siswa as  $row) : 
                  $namasiswa = $row['siswa_nama'];
                  endforeach
             ?>
              <?php foreach ($transaksi as  $value):
                  $kodetransaksi = $value['idtemporari'];
                  $tgl_pinjam = $value['tgl_pinjam'];
                  $tgl_kembali = $value['tgl_kembali'];
                  $status = $value['status_pinjam'];
              ?>
                  <div class="col-md-12">
                          <div class="col-sm-3">
                            <div class="form-group">
                            <label>No.Transaksi</label>
                            <input type="text" class="form-control" readonly required  name="id_transaksi" value="<?php echo $kodetransaksi; ?>" />
                          </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input type="text" class="form-control" required  readonly name="tgl_pinjam" value="<?php echo $tgl_pinjam; ?>" />
                          </div>
                          </div>
                           <div class="col-sm-3">
                            <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="text" class="form-control" required  readonly name="tgl_kembali" value="<?php echo $tgl_kembali; ?>" />
                          </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Status Peminjaman</label>
                              <input type="text" hidden class="form-control" readonly name="status_pinjam" value="<?php  echo $status; ?>">
                            </div>
                          </div>
                          
                        </div>
                       
              <?php endforeach ?>
          </div>
        </div>
         <div class="box">
            <div class="box-header"><label>Data Angota & Buku</label></div><hr>
            <div class="box-body">
              <div class="col-md-5">
              <div class="form-group">
                                  <label>Nama Siswa</label>
                                  <input type="text" class="form-control" readonly  value="<?php echo $namasiswa; ?>">
                                </div>
            </div>
            <div class="col-md-5">
                <?php if ($status=='Dipinjam') {
                ?>
                <a href="<?php echo base_url('transaksi/peminjaman/proses_pengembalian_buku'); ?>/<?php echo $kodetransaksi; ?>" class="btn btn-danger btn-lg"><span class="fa fa-check fa-3x"> <p style="font-size:20px; "><?php echo $status; ?></p></span>  <br><br></a>
                <?php }else{?>
                    <a href="<?php echo base_url('transaksi/peminjaman/proses_pengembalian_buku'); ?>/<?php echo $kodetransaksi; ?>" class="btn btn-success btn-lg"><span class="fa fa-heart fa-3x"> <p style="font-size:20px; "><?php echo $status; ?></p></span>  <br><br></a>
                  <?php } ?>
            </div>
            
            <div class="col-md-12">
              <hr>
              <label>Data Buku</label>
              
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Inventaris</th>
                  <th>Judul Buku</th>
                  <th>Kategori</th>
                  <th>Penerbit</th>
                  <th>Kondisi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      foreach ($buku as  $rowbuku) {
                        echo "<tr>
                                <td>".$no++."</td>
                                <td>".$rowbuku['no_inventaris']."</td>
                                <td>".$rowbuku['judul_buku']."</td>
                                <td>".$rowbuku['nama_kategori']."</td>
                                <td>".$rowbuku['nama_penerbit']."</td>
                                <td>".$rowbuku['kondisi']."</td>
                              </tr>"  ;
                      }
                   ?>
                </tbody>
              </table>
              
            </div>
            </div>
         </div>
       </section>
      </div>