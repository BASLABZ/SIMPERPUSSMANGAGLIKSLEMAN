<!DOCTYPE html>
<html>
<head>
	<title>Kartu Siswa</title>
  <style type="text/css">
  /*.ukuran{
    width: 200px;
  }*/
  </style>
</head>
<body onload="window.print();">
<table border="1">
  <tr>
    <td>
      <table>
        <tr>
          <td></td>
          <td>
            <img src="<?php echo base_url('resource/themes/default/images/logo.jpg'); ?>" width='80'>
          </td>
          <td align="center">
            <h5> KARTU ANGGOTA PERPUSTAKAAN<br>  SEKOLAH MENENGAH ATAS NEGERI NGAGLIK</h5>
            <h6>Alamat : Donoharjo, Ngaglik, Sleman No.Telp. 0274 ( 7488796)</h6>
            <hr>
          </td>
        </tr>
    </table>
   <?php 
          foreach ($data as  $value) :
            $kodeangota     = $value['kodeanggota'];
            $NIS            = $value['NIS'];
            $siswa_nama     = $value['siswa_nama'];
            $siswa_alamat   = $value['siswa_alamat'];
            $kelas          = $value['kelas'];
            $foto           = $value['foto'];
            $namakelas      = $value['namakelas'];
            $jurusan        = $value['jurusan'];
  ?>
   <hr>
       <table border="0">
        <th>
           <img src="<?php echo base_url('resource/themes/default/upload/'); ?>/<?php echo $foto; ?>" style="width:100px; ">
        </th>
        <th style="width:30px; "></th>
        <th>
          <table border="0">
          <tr>
            <td align="left"> Kode Anggota</td>
            <td align="left"> :</td>
            <td align="left"><b><?php echo $kodeangota; ?></b></td>
          </tr>
          <tr>
            <td align="left"> Nama Lengkap</td>
            <td align="left"> :</td>
            <td align="left"><b><?php echo $siswa_nama; ?></b></td>
          </tr>
          <tr>
            <td align="left"> No Induk</td>
            <td align="left"> :</td>
            <td align="left"><b><?php echo $NIS; ?></b></td>
          </tr>
          <tr>
            <td align="left"> Kelas</td>
            <td align="left"> :</td>
            <td align="left"><b><?php echo $kelas; ?> / <?php echo $namakelas; ?></b></td>
          </tr>
       </table>
        </th>       
       </table>
       <div>
       </div>
     
      <?php endforeach ?>
    </td>
  </tr>    
</table>
</body>
</html>