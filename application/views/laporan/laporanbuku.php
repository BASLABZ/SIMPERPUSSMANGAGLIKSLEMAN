<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <span class="fa fa-print fa-lg"></span> Laporan  Buku 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Laporan</a></li>
        <li class="active">Laporan  Buku</li>
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
               <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href= "<?php echo base_url('laporan/laporanbuku/cetak'); ?>" target="_BLANK" class="btn btn-info"><span class="fa fa-print fa-lg"></span> Print</a></h3>
              <br>
                <?php echo $this->session->flashdata('Sukses'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped bukulist">
                 <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">No Inventaris</th>
                <th rowspan="2">No ISBN</th>
                <th colspan="2">Nomor</th>
                <th colspan="3">Buku / Perpustakaan</th>
                <th rowspan="2">Tahun Pembelian</th>
                <th rowspan="2">Asal-Usul</th>
                <th rowspan="2">Jumlah</th>
                <th rowspan="2">Harga Satuan</th>
                <th rowspan="2">Harga</th>
                <th rowspan="2">Ket.</th>
                <th rowspan="2">Ruang</th>
                <th rowspan="2">Kondisi</th>
                <th rowspan="2">Tgl Penerimaan</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th>Kode Barang</th>
                <th>Register</th>
                <th>Judul/Pencipta</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $no = 1;
              foreach ($data as  $value) {
             ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['no_inventaris']; ?></td>
                    <td><?php echo $value['ISBN']; ?></td>
                    <td><?php echo $value['kodebarang']; ?></td>
                    <td><?php echo $value['register']; ?></td>
                    <td><?php echo $value['judul_buku']; ?></td>
                    <td><?php echo $value['nama_penerbit']; ?></td>
                    <td><?php echo $value['pengarang']; ?></td>
                    <td><?php echo $value['tahun_beli']; ?></td>
                    <td><?php echo $value['asalusul']; ?></td>
                    <td><?php echo $value['jumlah']; ?></td>
                    <td><?php echo $value['hargasatuan']; ?></td>
                    <td><?php echo $value['totalharga']; ?></td>
                    <td><?php echo $value['ket']; ?></td>
                    <td><?php echo $value['ruang']; ?></td>
                    <td><?php echo $value['kondisi']; ?></td>
                    <td><?php echo $value['tgl_penerimaan']; ?></td>
                    <td>
                      <a href="" class="btn btn-warning btn-xs"><span class="fa fa-edit"></span></a>
                      <a href="<?php echo base_url('master/buku/delete'); ?>/<?php echo $value['idbuku']; ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
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