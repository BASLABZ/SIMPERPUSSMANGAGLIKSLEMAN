<?php 
/**
* model siswa for load table siswa 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class M_siswa extends CI_Model
{
	
	public function get_siswa()
	{
		$query = "SELECT * FROM siswa ORDER BY siswa_id ASC";
		return $this->db->query($query)->result_array();
	}
	public function getkode($table)
	{
				$query = $this->db->query("SELECT max(siswa_id) as max_id FROM siswa WHERE siswa_id LIKE '%S%'");
		        $id = $query->row();

		            $nourut = (int) substr($id->max_id, 3,3);
		            $nourut++;
		            $buku_id = "S".sprintf("%04s", $nourut);
		            return $buku_id;
	}
	public function insert($param)
	{
		return $this->db
					->insert('siswa',$param);
	}
	public function delete($where)
	{
		return $this->db
					->where('siswa_id',$where)
					->delete('siswa');
	}
	public function show_edit($param)
	{
		return $this->db
					->where('siswa_id',$param)
					->get('siswa')
					->result_array();
	}
	public function edit($where,$param)
	{
		return $this->db
					->where('siswa_id',$where)
					->Update('siswa',$param);
	}

	public function cetak_kartu($param)
	{
		return $this->db
					->where('siswa_id',$param)
					->get('siswa')
					->result_array();
	}
	

}