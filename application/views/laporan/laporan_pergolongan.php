<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body onload="window.print();">
<table>
  <tr>
    <td style="width:100px; "></td>
    <td><img src="<?php echo base_url('resource/themes/default/images/logo.jpg'); ?>" width='50'></td>
    <td align="center"><h3> LAPORAN DATA PEMINJAMAN <br> GOLONGAN : SEMUA GOLONGAN <br> SEKOLAH MENENGAH ATAS NEGERI NGAGLIK</h3><h5>Alamat : Donoharjo, Ngaglik, Sleman No.Telp. 0274 ( 7488796)</h5></td>
  </tr>
</table>
<center>
  <table border="1">
                    <thead>
                      <th>GOLONGAN</th>
                      <th>TANGGAL</th>
                      <th>JUMLAH</th>
                    </thead>
                    <tbody>
                    <?php foreach ($data as  $value) {?>
                      <tr>
                        <td><?php echo $value['kategori_id']; ?></td>
                        <td><?php echo $value['tanggal_pinjam']; ?></td>
                        <td><?php echo $value['jumlahbuku']; ?></td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
</center>
</body>
</html>