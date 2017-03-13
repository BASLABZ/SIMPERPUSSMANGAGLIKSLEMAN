<?php 

/**
* class inventori
*/
class m_inventori extends CI_Model
{
	
	public function get_all()
	{
		$query = "SELECT * FROM inventori ORDER BY id_barang DESC";
		return $this->db->query($query)->result_array();
	}
	
	public function getkode($table)
	{
		$query = $this->db->query("SELECT max(id_barang) as max_id FROM inventori WHERE id_barang LIKE '%I%'");
        $id = $query->row();

            $nourut = (int) substr($id->max_id, 3,3);
            $nourut++;
            $user_id = "I".sprintf("%04s", $nourut);
            return $user_id;
	}
	public function insert($param)
	{
		return $this->db
					->insert('inventori',$param);
	}
	public function delete($where)
	{
		return $this->db->where('id_barang',$where)
						->delete('inventori');
	}
	public function show_edit($where)
	{
		return $this->db
					->where('id_barang',$where)
					->get('inventori')
					->result_array();
	}
	public function edit($where,$param)
	{
		return $this->db
					->where('id_barang',$where)
					->Update('inventori',$param);
	}



}