<?php 

/**
* model table class penerbit load table in database
*/
class M_penerbit extends CI_Model
{
	
	public function get_penerbit()
	{
		$query = "SELECT * FROM penerbit order by penerbit_id DESC";
		return $this->db->query($query)->result_array();
	}
	public function getkode($table)
	{
		$query = $this->db->query("SELECT max(penerbit_id) as max_id FROM penerbit WHERE penerbit_id LIKE '%P%'");
        $id = $query->row();

            $nourut = (int) substr($id->max_id, 3,3);
            $nourut++;
            $penerbit_id = "P".sprintf("%04s", $nourut);
            return $penerbit_id;
	}
	public function insert($param)
	{
		return $this->db
					->insert('penerbit',$param);
	}
	public function delete($where)
	{
		return $this->db
					->where('penerbit_id',$where)
					->delete('penerbit');
	}
	public function show_edit($where)
	{
		return $this->db
					->where('penerbit_id',$where)
					->get('penerbit')
					->result_array();
	}
	public function edit($where,$param)
	{
		return $this->db
					->where('penerbit_id',$where)
					->Update('penerbit',$param);
	}
}