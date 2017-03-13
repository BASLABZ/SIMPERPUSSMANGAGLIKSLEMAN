<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN IVENTARIS</title>
</head>
<body onload="window.print();">
	<table>
		<tr>
			<td style="width:100px; "></td>
			<td><img src="<?php echo base_url('resource/themes/default/images/logo.jpg'); ?>" width='100'></td>
			<td align="center"><h3>LAPORAN DATA IVENTARIS <br>SEKOLAH MENENGAH ATAS NEGERI NGAGLIK</h3><h5>Alamat : Donoharjo, Ngaglik, Sleman No.Telp. 0274 ( 7488796)</h5></td>
		</tr>
	</table>
		<table border="1">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                  <th>Lokasi</th>
             
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      foreach ($data as  $row) {
                        echo "<tr>
                                <td>".$no++."</td>
                                <td>".$row['id_barang']."</td>
                                <td>".$row['nama_barang']."</td>
                                <td>".$row['keterangan']."</td>
                                <td>".$row['jumlah']."</td>
                                <td>".$row['lokasi']."</td>
                               
                              
                              </tr>"  ;
                      }
                   ?>
                </tbody>
              </table>
</body>
</html>