<?php 
		/**
		* controller laporan transaksi per kategori
		*/
		class Laporanperkategori extends CI_Controller
		{
			
			public function __construct()
			{
				
				parent::__construct();
				$this->load->library('encrypt');
				$this->load->library('template');
				$this->load->model('m_laporanperkategori');
				$this->load->model('m_kategoribuku');

			}
			public function index()
			{
				$golongan 	= $this->m_kategoribuku->get_kategori();
				$data  		= $this->m_laporanperkategori->getAll();
				$this->template->view('laporan/laporan_per_jumlah_buku',['data'=>$data,'golongan'=>$golongan]);
			}
			public function cetakSemuaGolongan()
			{
				$semuagolongan  = $this->m_laporanperkategori->semuaGolongan();
				$this->load->view('laporan/laporan_semua_golongan',['data'=> $semuagolongan]);

			}
			public function cetakPergolongan()
			{	
				$param  = $this->input->post('golongan');
				$data  = $this->m_laporanperkategori->PerGolongan($param);
				$this->load->view('laporan/laporan_pergolongan',['data'=>$data]);
			}
			public function cetakpertanggal()
			{
				$param = $this->input->post('bulan');
				$data  = $this->m_laporanperkategori->pertanggal($param);
				$this->load->view('laporan/laporan_pertanggal',['data'=>$data]);
			}
		}