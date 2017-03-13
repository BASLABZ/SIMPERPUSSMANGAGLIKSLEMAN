<?php 

/**
* 
*/
class laporaninventori extends CI_Controller
{
	
	public function __construct()
	{
		
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->library('template');
		$this->load->model('m_laporan_inventori');
	}

	public function index()
	{
		$data = $this->m_laporan_inventori->get_all();
		$this->template->view('laporan/laporaninventori',['data'=>$data]);
		
	}
	public function cetak()
	{
		$data = $this->m_laporan_inventori->get_all();
		$this->load->view('laporan/reportinginventori',['data'=>$data]);
	}
}