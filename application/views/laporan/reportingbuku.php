<!DOCTYPE html>
<html>
<head>
	<title>Laporan Buku</title>
</head>
<body onload="window.print();">
<table>
	<tr>
		<td style="width:100px; "></td>
		<td><img src="<?php echo base_url('resource/themes/default/images/logo.jpg'); ?>" width='100'></td>
		<td align="center"><h3>LAPORAN DATA BUKU <br>SEKOLAH MENENGAH ATAS NEGERI NGAGLIK</h3><h5>Alamat : Donoharjo, Ngaglik, Sleman No.Telp. 0274 ( 7488796)</h5></td>
	</tr>

</table>

<table border="1">
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
                </tr>
            <?php } ?>
              </table>
</body>
</html>