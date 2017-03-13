<?php 

/**
* 
*/
class m_laporan_inventori extends CI_Model
{
	
	public function get_all()
	{
		$query = "SELECT * FROM inventori ORDER BY id_barang DESC";
		return $this->db->query($query)->result_array();
	}
}