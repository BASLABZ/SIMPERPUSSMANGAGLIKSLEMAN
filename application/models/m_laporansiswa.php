<?php 

/**
* model laporan siswa
*/
class M_laporansiswa extends CI_Model
{
	
	public function get_siswa()
	{
		$query = "SELECT * FROM siswa ORDER BY siswa_id ASC";
		return $this->db->query($query)->result_array();
	}
	
}