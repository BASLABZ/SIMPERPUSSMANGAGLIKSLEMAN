<?php 
/**
* laporan controller buku
*/
class Laporanbuku extends CI_Controller
{
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->library('template');
		$this->load->model('m_laporanbuku');
	}

	public function index()
	{
		$data = $this->m_laporanbuku->get_all();
		$this->template->view('laporan/laporanbuku',['data'=>$data]);
		
	}
	public function cetak()
	{
		$data = $this->m_laporanbuku->get_all();
		$this->load->view('laporan/reportingbuku',['data'=>$data]);
	}
	public function cetakall()
	{
		$this->load->view('laporan/all');
	}
	

}