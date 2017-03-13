<?php 

/**
* class model peminjaman 
*/
class M_peminjaman extends CI_Model
{
	
	public function get_all()
	{
		$query = "SELECT * FROM  temporari_pinjaman t
						inner join siswa s 
						on t.siswa_id = s.siswa_id where t.status_pinjam='Dipinjam'" ;

		return $this->db->query($query)->result_array();
	}
	public function getkode($table)
	{
		$query = $this->db->query("SELECT max(idtemporari) as max_id FROM temporari_pinjaman WHERE idtemporari LIKE '%PI%'");
        $id = $query->row();

            $nourut = (int) substr($id->max_id, 3,3);
            $nourut++;
            $id_transaksi = "PI".sprintf("%04s", $nourut);
            return $id_transaksi;
	}
	public function cek_siswa()
	{
		$query = "SELECT * FROM temporari_pinjaman where status_pinjam = 'Dipinjam'";
		return $this->db->query($query)->result_array();
	}
	public function optsiswa()
	{
		$query = "SELECT siswa_id,siswa_nama FROM siswa  order by siswa_id ASC";
		 return $this->db->query($query)->result_array();
	}
	
	public function optbuku()
	{
		$query = "SELECT idbuku,judul_buku FROM bukus order by idbuku ASC";
		 return $this->db->query($query)->result_array();
	}
	
	public function insert($param)
	{
		return $this->db
					->insert('temporari_pinjaman',$param);
	}
	public function insertdetail($param)
	{
		return $this->db
					->insert('detail_peminjaman',$param);
	}
	public function detail($param)
	{
		$query = "SELECT * FROM detail_peminjaman d 
				  JOIN peminjaman p 
				  ON d.id_transaksi = p.id_transaksi
				  JOIN bukus b
				  ON d.idbuku = b.idbuku
				  JOIN siswa s 
				  ON d.id_siswa = s.siswa_id
				  WHERE d.id_transaksi = '".$param."'";
		return $this->db->query($query)->result_array();

	}
	public function listbukupinjam()
	{
		$query = "SELECT * FROM detail_peminjaman ORDER BY id_transaksi DESC";
		return $this->db->query($query)->result_array();
	}
	public function add_buku($param)
	{
		$query = "SELECT * FROM temporari_pinjaman d JOIN siswa s ON d.siswa_id = s.siswa_id WHERE d.idtemporari = '".$param."'";
		return $this->db->query($query)->result_array();
	}
	public function proses_pinjam_buku($param)
	{
		return $this->db->insert('detail_peminjaman',$param);
	}
	public function optsiswa_param($param)
	{
		$query = "SELECT s.siswa_id,s.siswa_nama FROM temporari_pinjaman d JOIN siswa s ON d.siswa_id = s.siswa_id WHERE d.idtemporari = '".$param."' ";
		return $this->db->query($query)->result_array();
	}
	public function optbuku_param($param)
	{
		$query = "SELECT * FROM detail_peminjaman d JOIN bukus b
				 ON d.idbuku = b.idbuku join kategori k 
				 on b.kategori_id = k.kategori_id
				 join penerbit p 
				 on b.penerbit_id = p.penerbit_id 
				 WHERE d.id_transaksi = '".$param."' ";
		return $this->db->query($query)->result_array();
	}
	public function get_all_pinjam($param)
	{
		$query = "SELECT * FROM detail_peminjaman d 
				JOIN bukus b 
					ON 
					d.idbuku = b.idbuku
					JOIN kategori k 
							ON b.kategori_id = k.kategori_id
						JOIN penerbit p 
							ON b.penerbit_id = p.penerbit_id 
					 where d.id_transaksi='".$param."'";
		return $this->db->query($query)->result_array();
	}
		// hapus pinjaman
		public function delete($where)
		{
			return $this->db
						->where('idtemporari',$where)
						->delete('temporari_pinjaman');
		}
		// hapus detail pinjaman
		public function delete_detail($where)
		{
			return $this->db
						->where('id_transaksi',$where)
						->delete('detail_peminjaman');
		}
		public function delete_buku($id_transaksi,$idbuku)
		{
			$query = "DELETE FROM detail_peminjaman where id_transaksi='".$id_transaksi."' AND idbuku='".$idbuku."' ";
			$this->db->query($query);
		}
		public function getDetailPinjam($param)
		{
				$query = "SELECT * FROM detail_peminjaman d 
									join siswa s 
									on d.id_siswa = s.siswa_id
									join bukus b on 
									d.idbuku = b.idbuku
							where d.id_transaksi='".$param."' ";
				return $this->db->query($query)->result_array();
		}
		public function proses_pengembalian($param)
		{
			$query = "UPDATE temporari_pinjaman set status_pinjam ='Dikembalikan' WHERE idtemporari='".$param."'";
			return $this->db->query($query);

		}
	public function get_all_pengembalian()
	{
		$query = "SELECT * FROM  temporari_pinjaman t
						inner join siswa s 
						on t.siswa_id = s.siswa_id " ;

		return $this->db->query($query)->result_array();
	}

	
}