<?php 
/**
* model laporan perkategori dari transaksi
*/
class M_laporanperkategori extends CI_Model
{
	
	public function getAll()
	{
		$query  = "SELECT month(t.tgl_pinjam) as tanggal_pinjam , 
					count(k.kategori_id) as jumlahkategori,
					 k.kategori_id,b.no_inventaris
					  FROM temporari_pinjaman t 
					  	inner join detail_peminjaman p
					  	 on t.idtemporari = p.id_transaksi
					  	  inner join bukus b 
					  	  	on p.idbuku = b.idbuku 
					  	  		inner join kategori k 
					  	  			on b.kategori_id = k.kategori_id
					  	  			 where t.status_pinjam='Dipinjam' group by k.kategori_id";
		return $this->db->query($query)->result_array();
		
	}
	public function semuaGolongan()
	{
		$querySemua = "SELECT month(t.tgl_pinjam) as tanggal_pinjam , count(k.kategori_id) as jumlahkategori, k.kategori_id,b.no_inventaris, count(b.idbuku) as jumlahbuku FROM temporari_pinjaman t inner join detail_peminjaman p on t.idtemporari = p.id_transaksi inner join bukus b on p.idbuku = b.idbuku inner join kategori k on b.kategori_id = k.kategori_id where
			 k.kategori_id='000' or k.kategori_id='100' or k.kategori_id='200' or k.kategori_id='300' or k.kategori_id='400' or k.kategori_id='500' or k.kategori_id='600' or k.kategori_id='700' or k.kategori_id='800' or k.kategori_id='900'and
			t.status_pinjam='Dipinjam' group by k.kategori_id";
		return $query = $this->db->query($querySemua)->result_array();
	}
	public function PerGolongan($param)
	{
		$querySemua = "SELECT month(t.tgl_pinjam) as tanggal_pinjam , count(k.kategori_id) as jumlahkategori, k.kategori_id,b.no_inventaris, count(b.idbuku) as jumlahbuku FROM temporari_pinjaman t inner join detail_peminjaman p on t.idtemporari = p.id_transaksi inner join bukus b on p.idbuku = b.idbuku inner join kategori k on b.kategori_id = k.kategori_id where
			 k.kategori_id='".$param."' and
			t.status_pinjam='Dipinjam' group by k.kategori_id";
		return $query = $this->db->query($querySemua)->result_array();
	}
	public function pertanggal($param)
	{
		$querySemua = "SELECT month(t.tgl_pinjam) as tanggal_pinjam , t.tgl_pinjam as tgl, count(k.kategori_id) as jumlahkategori, k.kategori_id,b.no_inventaris, count(b.idbuku) as jumlahbuku FROM temporari_pinjaman t inner join detail_peminjaman p on t.idtemporari = p.id_transaksi inner join bukus b on p.idbuku = b.idbuku inner join kategori k on b.kategori_id = k.kategori_id where month(t.tgl_pinjam) = '$param' and t.status_pinjam='Dipinjam' group by k.kategori_id";
		return $query = $this->db->query($querySemua)->result_array();	
	}
}