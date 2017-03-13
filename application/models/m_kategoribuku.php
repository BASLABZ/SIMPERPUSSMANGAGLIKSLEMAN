<?php 

/**
* model table kategori buku
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class M_kategoribuku extends CI_Model
{
	
	public function get_kategori()
	{
		$query = "SELECT * FROM kategori Order BY kategori_id DESC";
		return $this->db->query($query)->result_array();
	}
	// get kode otomatis
	public function getkode($table)
	{
		$query = $this->db->query("SELECT max(kategori_id) as max_id FROM kategori WHERE kategori_id LIKE '%K%'");
        $id = $query->row();

            $nourut = (int) substr($id->max_id, 3,3);
            $nourut++;
            $kategori_id = sprintf("%04s", $nourut);
            return $kategori_id;
	}
	public function insert($param)
	{
		return $this->db
					->insert('kategori',$param);
	}
	public function delete($where)
	{
		return $this->db
					->where('kategori_id',$where)
					->delete('kategori');
	}
	public function show_edit($where)
	{
		return $this->db
					->where('kategori_id',$where)
					->get('kategori')
					->result_array();
	}

	public function edit($where,$param)
	{
		return $this->db
					->where('kategori_id',$where)
					->Update('kategori',$param);
	}




}