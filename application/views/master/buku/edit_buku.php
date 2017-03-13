<?php 
    foreach ($data as $value):
      $no_inventaris = $value['no_inventaris'];
      $tahunBuku = substr($no_inventaris,12);
      $hadiah = substr($no_inventaris, 6, 1);


 ?>
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
                <?php echo form_open( 'master/buku/prosesedit/'.$value['idbuku'],[ 'class'=> 'role', 'id' => 'validform']) ?>
                    <div class="row">
                    <div class="col-md-12">
                        <label class="col-md-3">No Inventaris</label> 
                    </div>
                   <div class="col-md-12">
                     <div class="col-md-2">
                       <div class="form-group">
                         <input  type="text" name="idbuku" readonly class="form-control" value="<?php echo $value['idbuku']; ?>">
                       </div>
                     </div>
                     <div class="col-md-2">
                       <select class="form-control" name="jenisasal">
                         <option value="P"
                           <?php if($hadiah=='P'){echo "selected=selected";}?>>
                            PEMBELIAN
                         </option>
                         <option value="H"
                           <?php if($hadiah=='H'){echo "selected=selected";}?>>
                            HADIAH
                         </option>     

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
                            ?>  
                                <option value="<?php echo $valueTahun; ?>"
                                  <?php if($tahunBuku == $valueTahun){echo "selected=selected";}?>>
                                     <?php echo $valueTahun; ?>
                                </option> 
                            <?php } ?>
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
                       <input  type="text"  class="form-control" name="kodebarang" value="<?php echo $value['kodebarang']; ?>" >
                     </div>
                  </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label>Register </label>
                       <input  type="text" name="register" class="form-control" readonly value="<?php echo $value['register']; ?> "  >
                     </div>
                   </div>
                 </div>
                 <div class="form-group">
                   <label>NO. ISBN</label>
                   <input type="text" class="form-control" placeholder="NOMOR ISBN" name="ISBN" value="<?php echo $value['ISBN']; ?>">
                 </div>
                 
                 <div class="form-group">
                   <label>Judul Buku </label>
                   <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku " value="<?php echo $value['judul_buku']; ?>">
                 </div>
                 <div class="form-group">
                   <label>Kategoroi Buku </label>
                  <select class="form-control select2" name="kategori_id">
                    <option value="NULL">-Pilih Kategori Buku-</option>
                    <?php foreach ($optkategori as $kategori):?>
                      <option value="<?php echo $kategori['kategori_id']; ?>"
                           <?php if($value['kategori_id']==$kategori['kategori_id']){echo "selected=selected";}?>>
                            <?php echo $kategori['nama_kategori']; ?>
                      </option>     
                    <?php endforeach; ?>
                  </select>
                 </div>
                 <div class="form-group">
                   <label>Penerbit Buku </label>
                  <select class="form-control select2" name="penerbit_id">
                    <option value="NULL">-Pilih Peberbit Buku-</option>
                   <?php foreach ($optpenerbit as $penerbit):?>
                    <option value="<?php echo $penerbit['penerbit_id']; ?>"
                           <?php if($value['penerbit_id']==$penerbit['penerbit_id']){echo "selected=selected";}?>>
                            <?php echo $penerbit['nama_penerbit']; ?>
                      </option>     
                   <?php endforeach; ?>
                  </select>
                 </div>
                 <div class="form-group">
                   <label>Pengarang Buku </label>
                   <input type="text" class="form-control" name="pengarang" placeholder="Pengarang Buku " value="<?php echo $value['pengarang']; ?>">
                 </div>
                </div>
                <div class="col-md-6">
                 <div class="row">
                   <div class="col-md-4">
                     <div class="form-group">
                     <label>Tahun Pembelian</label>
                     <input type="number" class="form-control" name="tahun_beli" value="<?php echo $value['tahun_beli']; ?>">
                    </div>
                   </div>
                   <div class="col-md-4">
                     <div class="form-group">
                     <label>Jumlah</label>
                     <input type="number" class="form-control" name="jumlah" value="<?php echo $value['jumlah']; ?>">
                    </div>
                  </div>
                   <div class="col-md-4">
                     <div class="form-group">
                     <label>Harga Satuan</label>
                     <input type="number" class="form-control" name="hargasatuan" value="<?php echo $value['hargasatuan']; ?>">
                    </div>
                  </div>
                 </div>
                 <div class="row">
                   <div class="col-md-6">
                     <div class="form-group">
                       <label>Total Harga</label>
                       <input type="number" class="form-control" name="totalharga" value="<?php echo $value['totalharga']; ?>">
                     </div>
                   </div>
                   <div class="col-md-6">
                    <div class="form-group">
                     <label>Kondisi</label>
                     <select class="form-control" name="kondisi">
                       <option value="B"
                        <?php if($value['kondisi']=='B'){echo "selected=selected";}?>>
                          BAIK
                      </option>     
                      <option value="R"
                        <?php if($value['kondisi']=='R'){echo "selected=selected";}?>>
                          RUSAK
                      </option>     
                     </select>
                   </div>    
                   </div>
                 </div>
                 <div class="form-group">
                   <label>Ruang</label>
                   <input type="text" class="form-control" name="ruang" value="<?php echo $value['ruang']; ?>">
                 </div>
                 <div class="form-group">
                   <label>Asal Usul</label>
                   <input type="text" class="form-control" name="asalusul" value="<?php echo $value['asalusul']; ?>">
                 </div>
                 <div class="form-group">
                   <label>Keterangan Buku </label>
                   <textarea class="form-control" name="ket"><?php echo $value['ket']; ?></textarea>
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
    <?php endforeach; ?>