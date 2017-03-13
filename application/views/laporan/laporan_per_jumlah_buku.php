<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-print fa-lg"></span> Laporan  Buku  Per Jumlah Kategori</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Laporan</a></li>
        <li class="active">Laporan  Buku Per Jumlah Kategori</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header"></div>
              <div class="box-body">
               <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <br>
                <?php echo $this->session->flashdata('Sukses'); ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="panel panel-primary">
                    <div class="panel-heading"><span class="fa fa-file"></span> Filter Laporan
                    <a href="<?php echo base_url('laporan/laporanperkategori/cetakSemuaGolongan'); ?>" class="btn btn-info btn-success btn-md" target='_BLANK'><span class="fa fa-print"></span>    Cetak Semua Golongan</a>
                    </div>
                    <div class="panel-body">
                      <form class="role" method="POST" action="<?php echo base_url('laporan/laporanperkategori/cetakPergolongan'); ?>">
                        <div class="row form-group">
                          <label class="col-md-3">Pilih Golongan</label>
                          <div class="col-md-6">
                            <select class="form-control select2"  name="golongan">
                            <?php foreach ($golongan as  $value) { ?>
                            <option value="<?php echo $value['kategori_id']; ?>"><?php echo $value['nama_kategori']; ?></option>
                            <?php } ?>
                          </select>
                          </div>
                          <div class="col-md-3">
                            <button type="submit" class="btn btn-info btn-xs"> <span class="fa fa-print"></span> Cetak</button>
                          </div>
                        </div>
                  </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="panel panel-primary">
                    <div class="panel-heading">Filter Berdasarkan Tanggal</div>
                    <div class="panel-body">
                      <form class="role" method="POST" action="<?php echo base_url('laporan/laporanperkategori/cetakpertanggal'); ?>">
                          <div class="row form-group">
                          <label class="col-md-2">Tanggal</label>
                          <div class="col-md-6">
                            <select class="form-control select2" name="bulan">
                              <option value="1">JANUARI</option>
                              <option value="2">FEBRUARI</option>
                              <option value="3">MARET</option>
                              <option value="4">APRIL</option>
                              <option value="5">MEI</option>
                              <option value="6">JUNI</option>
                              <option value="7">JULI</option>
                              <option value="8">AGUSTUS</option>
                              <option value="9">SEPTEMBER</option>
                              <option value="10">OKTOBER</option>
                              <option value="11">NOVEMBER</option>
                              <option value="12">DESEMBER</option>
                            </select>
                          </div>
                          <div class="col-md-2">
                            <button type="submit" class="btn btn-info btn-xs"><span class="fa fa-print"></span>
                            Cetak
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
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
