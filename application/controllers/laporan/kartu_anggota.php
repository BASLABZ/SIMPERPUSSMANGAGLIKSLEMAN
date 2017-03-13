<?php 
/**
* 
*/
class Kartu_anggota extends CI_Controller
{
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->library('template');
		$this->load->model('m_siswa');
	}
	public function cetak_kartu($param)
		{
			$data = $this->m_siswa->cetak_kartu($param);
			$this->load->view('laporan/cetak_kartu',['data'=>$data]);
		}
	public function cetak_kartu_semua()
	{
		$data  = $this->m_siswa->get_siswa();
		$this->load->view('laporan/cetak_kartu_anggota_semua',['data'=>$data]);

	}
}