<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* classs Model untuk olah database master penggnua
*/
/**
* 
*/
class m_pengguna extends CI_Model
{
	public function get_pengguna()
	{
		$query = "SELECT * FROM user";
		return $this->db->query($query)->result_array();
	}
	// get kode otomatis
	public function getkode($table)
	{
		$query = $this->db->query("SELECT max(user_id) as max_id FROM user WHERE user_id LIKE '%U%'");
        $id = $query->row();

            $nourut = (int) substr($id->max_id, 3,3);
            $nourut++;
            $user_id = "U".sprintf("%04s", $nourut);
            return $user_id;
	}
	public function insert($param)
	{
		return $this->db
					->insert('user',$param);
	}
	public function show_edit($param)
	{
		return $this->db
					->where('user_id',$param)
					->get('user')
					->result_array();
	}
	public function edit($where,$param)
	{
		return $this->db
					->where('user_id',$where)
					->Update('user',$param);
	}
	public function delete($where)
	{
		return $this->db->where('user_id',$where)
						->delete('user');
	}
	public function profil_pengguna($param)
	{
		return $this->db
					->where('user_id',$param)
					->get('user')
					->result_array(); 
	}
	

}