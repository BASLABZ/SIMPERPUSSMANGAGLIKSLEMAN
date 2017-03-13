
<div class="content-wrapper">
    <section class="content-header">
      <h1><span class="fa fa-book fa-lg"></span> Tambah  Buku</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Master </a></li>
        <li class="active">Tambah  Buku </li>
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
                <?php echo $this->session->flashdata('exist'); ?>
                <?php echo validation_errors( "<div class='alert alert-danger alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>", "</div>"); ?>
                <?php echo form_open( 'master/buku/add',[ 'class'=> 'role', 'id' => 'validform']) ?>
                    <div class="row">
                    <div class="col-md-12">
                        <label class="col-md-3">No Inventaris</label> 
                    </div>
                   <div class="col-md-12">
                     <div class="col-md-2">
                       <div class="form-group">
                         <input  type="text" name="idbuku"  class="form-control">
                       </div>
                     </div>
                     <div class="col-md-2">
                       <select class="form-control" name="jenisasal">
                         <option value="P">PEMBELIAN</option>
                         <option value="H">HADIAH</option>
                       </select>
                     </div>
                     <div class="col-md-1">
                       <div class="form-group">
                         <input type="text" class="form-control" name="SMA" value="SMA" readonly>
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group">
                         <select class="form-control select2" name="tahunkode">
                           <?php
                                $tahun = date('Y');

                                for ($i=1980; $i <= $tahun ; $i++) { 
                                  $valueTahun = substr($i,2);
                                  echo "<option value='".$valueTahun."'>".$i."</option>";
                                }
                            ?>
                         </select>
                       </div>
                   </div>
                   </div>
                 </div>
                <div class="col-md-6">
                 <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                       <label>Kode Barang </label>
                       <input  type="text"  class="form-control" name="kodebarang"  >
                     </div>
                  </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label>Register </label>
                       <input  type="text" name="register" class="form-control" value="<?php echo $data; ?>" >
                     </div>
                   </div>
                 </div>
                 <div class="form-group">
                   <label>NO. ISBN</label>
                   <input type="text" class="form-control" placeholder="NOMOR ISBN" name="ISBN">
                 </div>
                 
                 <div class="form-group">
                   <label>Judul Buku </label>
                   <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku " >
                 </div>
                 <div class="form-group">
                   <label>Kategoroi Buku </label>
                  <select class="form-control select2" name="kategori_id">
                    <option value="NULL">-Pilih Kategori Buku-</option>
                    <?php foreach ($optkategori as $kategori):?>
                      <option value="<?php echo $kategori['kategori_id']; ?>"><?php echo $kategori['nama_kategori']; ?></option>
                    <?php endforeach; ?>
                  </select>
                 </div>
                 <div class="form-group">
                   <label>Penerbit Buku </label>
                  <select class="form-control select2" name="penerbit_id">
                    <option value="NULL">-Pilih Peberbit Buku-</option>
                   <?php foreach ($optpenerbit as $penerbit):?>
                    <option value="<?php echo $penerbit['penerbit_id']; ?>"><?php echo $penerbit['nama_penerbit']; ?></option>
                   <?php endforeach; ?>
                  </select>
                 </div>
                 <div class="form-group">
                   <label>Pengarang Buku </label>
                   <input type="text" class="form-control" name="pengarang" placeholder="Pengarang Buku " >
                 </div>
                </div>
                <div class="col-md-6">
                 <div class="row">
                   <div class="col-md-4">
                     <div class="form-group">
                     <label>Tahun Pembelian</label>
                     <input type="number" class="form-control" name="tahun_beli">
                    </div>
                   </div>
                   <div class="col-md-4">
                     <div class="form-group">
                     <label>Jumlah</label>
                     <input type="number" class="form-control" name="jumlah">
                    </div>
                  </div>
                   <div class="col-md-4">
                     <div class="form-group">
                     <label>Harga Satuan</label>
                     <input type="number" class="form-control" name="hargasatuan">
                    </div>
                  </div>
                 </div>
                 <div class="row">
                   <div class="col-md-6">
                     <div class="form-group">
                       <label>Total Harga</label>
                       <input type="number" class="form-control" name="totalharga">
                     </div>
                   </div>
                   <div class="col-md-6">
                    <div class="form-group">
                     <label>Kondisi</label>
                     <select class="form-control" name="kondisi">
                       <option value="B">BAIK</option>
                       <option value="R">RUSAK</option>
                     </select>
                   </div>    
                   </div>
                 </div>
                 <div class="form-group">
                   <label>Ruang</label>
                   <input type="text" class="form-control" name="ruang">
                 </div>
                 <div class="form-group">
                   <label>Asal Usul</label>
                   <input type="text" class="form-control" name="asalusul">
                 </div>
                 <div class="form-group">
                   <label>Keterangan Buku </label>
                   <textarea class="form-control" name="ket"></textarea>
                 </div>
                 <div class="form-group">
                  <button class="btn btn-success" type="submit" name="simpan"><span class="fa fa-floppy-o"></span> Simpan</button>
                  <button class="btn btn-default" onclick="history.back()" ><span class="fa fa-refresh"></span> Batal</button>
                 </div>
                </div>
                <?php form_close() ?>
            </div>
            </div>
          </div>
        </div>
       </section>
      </div>