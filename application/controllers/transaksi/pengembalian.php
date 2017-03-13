<?php 

/**
* pengembalian buku oleh anggota
*/
class pengembalian extends CI_Controller
{
	
	public function __construct()
		{
			parent::__construct();
			$this->load->library('encrypt');
			$this->load->model('m_peminjaman');
			$this->load->library('template');
		}
		public function index()
		{
			$data = $this->m_peminjaman->get_all_pengembalian();
			$this->template->view('pengembalian/list',['data'=>$data]);
		}
		public function detail($param)
		{
			$data = $this->m_peminjaman->detail_pengembalian($param);
			$this->template->view('pengembalian/detail_pengembalian',$data);
		}
}