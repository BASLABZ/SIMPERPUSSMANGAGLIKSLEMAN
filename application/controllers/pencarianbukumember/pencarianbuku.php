<?php 

/**
* searching book
*/
class Pencarianbuku extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_buku');
	}
	public function index()
	{
		$data = $this->m_buku->get_buku();
		$this->load->view('homeanggota/index',['data'=>$data]);
	}
}