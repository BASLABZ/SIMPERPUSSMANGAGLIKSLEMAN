<!DOCTYPE html>
<html>
<head>
	<title>Laporan Siswa</title>
</head>
<body onload="window.print();">
<table>
	<tr>
		<td style="width:100px; "></td>
		<td><img src="<?php echo base_url('resource/themes/default/images/logo.jpg'); ?>" width='100'></td>
		<td align="center"><h3>LAPORAN DATA ANGGOTA <br>SEKOLAH MENENGAH ATAS NEGERI NGAGLIK</h3><h5>Alamat : Donoharjo, Ngaglik, Sleman No.Telp. 0274 ( 7488796)</h5></td>
	</tr>

</table>
<table  border="1">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Siswa</th>
                  <th>Nama Siswa</th>
                  <th>NIS</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
               
                </tr>
                </thead>
                <tbody>
                  <?php 
                      $no =1;
                      foreach ($data as  $row) {
                        echo "<tr>
                                <td>".$no++."</td>
                                <td>".$row['siswa_id']."</td>
                                <td>".$row['siswa_nama']."</td>
                                <td>".$row['NIS']."</td>
                                <td>".$row['gender']."</td>
                                <td>".$row['siswa_alamat']."</td>
                                <td>".$row['siswa_kontak']."</td>
                                
                                
                             
                              </tr>"  ;
                      }
                   ?>
                </tbody>
              </table>
</body>
</html>