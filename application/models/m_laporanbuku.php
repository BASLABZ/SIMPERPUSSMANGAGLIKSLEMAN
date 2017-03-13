<?php 
/**
* model laporan buku 
*/
class M_laporanbuku extends CI_Model
{
	
	public function get_all()
	{
		$query = " SELECT * FROM bukus b 
						JOIN kategori k 
							ON b.kategori_id = k.kategori_id
						JOIN penerbit p 
							ON b.penerbit_id = p.penerbit_id
						 ORDER BY b.register ASC ";
		return $this->db->query($query)->result_array();
	}
}