<?php 


/**
* model master buku for manage master buku from table buku
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class M_buku extends CI_Model
{
	public function get_buku()
	{
		
	$query = "SELECT * FROM bukus b JOIN kategori k ON b.kategori_id = k.kategori_id JOIN penerbit p ON b.penerbit_id = p.penerbit_id  ORDER BY b.register ASC";
	return $this->db->query($query)->result_array();
	}
	public function getkode($table)
	{
		$query = $this->db->query("SELECT max(register) as max_id FROM bukus ");
        $id = $query->row();

            $nourut = (int) substr($id->max_id, 2,2);
            $nourut++;
            $register = sprintf("%04s", $nourut);
            return $register;
	}
	public function delete($where)
	{
		$query = "DELETE FROM bukus where idbuku = '".$where."'";
		return $this->db->query($query);
	}
	public function optkategori()
	{
		$query = "SELECT * FROM kategori order by kategori_id ASC";
		return $this->db->query($query)->result_array();

	}
	public function optpenerbit()
	{
		$query = "SELECT * FROM penerbit order by penerbit_id ASC";
		return $this->db->query($query)->result_array();

	}
	public function show_edit($where)
	{
		
		$query  = "SELECT * FROM bukus b 
						join penerbit p on 
							b.penerbit_id=p.penerbit_id 
								join kategori k 
									on b.kategori_id = k.kategori_id 
										where idbuku = '".$where."'";
		return $this->db->query($query)->result_array();
	}
	public function edit($where,$param)
	{
		return $this->db
					->where('buku_id',$where)
					->Update('buku',$param);
	}
}