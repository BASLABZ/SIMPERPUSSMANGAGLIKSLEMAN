<?php 
/**
* laporan anggota/siswa
*/
class Reportsiswa extends CI_Controller
{
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->library('template');
		$this->load->model('m_laporansiswa');
	}

	public function index()
	{
		$data = $this->m_laporansiswa->get_siswa();
		$this->template->view('laporan/laporansiswa',['data'=>$data]);
		
	}
	public function cetak()
	{
		$data = $this->m_laporansiswa->get_siswa();
		$this->load->view('laporan/reportingsiswa',['data'=>$data]);
	}
	
}