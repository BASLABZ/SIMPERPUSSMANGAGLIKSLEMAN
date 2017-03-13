<?php 
/**
* class auto code master
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Librarycode extends CI_Controller
{
	
	public function buatkode()
		{
			$table = "user";
			$query = "SELECT * FROM ".$table."";
			$struktur = $this->db->query($query);
			// $field = mysql_field_name($struktur,0);
			$field = $this->db->list_field($struktur,0);
			$panjang = mysql_field_len($struktur,0);
					$qry	= $this->db->query("SELECT MAX(".$field.") FROM ".$table."");
	 				$row	= mysql_fetch_array($qry); 
					if ($row[0]=="") {
						$angka = 0;
					}else{
						$angka = substr($row[0],strlen(1));
					}
					$angka++;
					$angka = strval($angka);
					$tmp = "";
					for ($i=1; $i <= ($panjang-strlen(1)-strlen($angka)) ; $i++) { 
						$tmp = $tmp."0";
					}return $tmp.$angka;
		}

}