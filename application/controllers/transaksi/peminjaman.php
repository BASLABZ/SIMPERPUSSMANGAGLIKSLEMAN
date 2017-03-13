<?php 
class Peminjaman extends CI_Controller
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
			$data = $this->m_peminjaman->get_all();
			$this->template->view('peminjaman/list',['data'=>$data]);
		}
		public function add()
		{
			$table = "temporari_pinjaman";
			$data = $this->m_peminjaman->getkode($table);
			$this->form_validation->set_rules('idtemporari','idtemporari','required');
			$this->form_validation->set_rules('tgl_pinjam','tgl_pinjam','required');
			$this->form_validation->set_rules('tgl_kembali','tgl_kembali','required');
			$this->form_validation->set_rules('siswa_id','siswa_id','required');
			$tgl_pinjam = date('Y-m-d');
			$tgl_kembali = date('Y-m-d',strtotime('+3 days',strtotime($tgl_pinjam)));
			$cek = $this->m_peminjaman->cek_siswa();
			$optsiswa = $this->m_peminjaman->optsiswa();
		if ( $this->form_validation->run() == FALSE ) {
			$this->template->view('peminjaman/add',
							[ 'data'	   => $data,
							  'tgl_pinjam' => $tgl_pinjam,
							  'tgl_kembali'=> $tgl_kembali,
							  'optsiswa'   => $optsiswa,
							  'cek'		   => $cek]);	
		}else{

			$idtemporari = $this->input->post('idtemporari');
			$values = array(	
						'idtemporari'	=> $this->input->post('idtemporari'),
						'siswa_id'	=> $this->input->post('siswa_id'),
						'tgl_pinjam' 	=> $this->input->post('tgl_pinjam') ,
						'tgl_kembali'	=> $this->input->post('tgl_kembali'),
						'status_pinjam' => $this->input->post('status_pinjam'));
			$insert = $this->m_peminjaman->insert($values);
			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Transaksi Peminjaman Buku Berhasil Disimpan. </div>");
			redirect('transaksi/peminjaman/add_buku/'.$idtemporari.'');
		}

		}
		
		public function add_buku($param)
		{

			 $optsiswa = $this->m_peminjaman->optsiswa_param($param);
			 $optbuku = $this->m_peminjaman->optbuku();
			 $data = $this->m_peminjaman->add_buku($param);
			 $all_data = $this->m_peminjaman->get_all_pinjam($param);
			 $this->template->view('peminjaman/add_buku',['data'=>$data,'optbuku'=>$optbuku,'optsiswa'=>$optsiswa,'get_all'=>$all_data]);
			 
		}
		public function proses_pinjam_buku()
		{
			$this->form_validation->set_rules('id_transaksi','id_transaksi','required');
			$this->form_validation->set_rules('id_siswa','id_siswa','required');
			$this->form_validation->set_rules('idbuku','idbuku','required');
			
			if ($this->form_validation->run()==FALSE) {
				 $idtemporari = $this->input->post('id_transaksi');
				 $optbuku = $this->m_peminjaman->optbuku();
				 $data = $this->m_peminjaman->add_buku($idtemporari);
				 $this->template->view('peminjaman/add_buku',['data'=>$data,'optbuku'=>$optbuku]);
			 	print_r('tai');
			}else{

				$idtemporari = $this->input->post('id_transaksi');
				$data  = array(
								'id_transaksi' => $this->input->post('id_transaksi'),
								'id_siswa' => $this->input->post('id_siswa'),
								'idbuku' => $this->input->post('idbuku'));

				$insert = $this->m_peminjaman->proses_pinjam_buku($data);
				
				$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Peminjaman Berhasil Diubah. </div>");
					redirect('transaksi/peminjaman/add_buku/'.$idtemporari.'');			
			}
		}
		public function delete($where)
		{
				$data = $this->m_peminjaman->delete($where);
				$data_detail = $this->m_peminjaman->delete_detail($where);
				$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Peminjaman Berhasil Dihapus. </div>");
				redirect('transaksi/peminjaman');	
				

		}
		public function delete_buku($id_transaksi,$idbuku)
		{
			$data = $this->m_peminjaman->delete_buku($id_transaksi,$idbuku);
			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data  Buku Tidak Jadi Dipinjam. </div>");

			redirect('transaksi/peminjaman/add_buku/'.$id_transaksi.'');	
		}
		// list pengembalian buku 
		public function detail_pengembalian($param)
		{
			 $buku = $this->m_peminjaman->optbuku_param($param);
			 $optsiswa = $this->m_peminjaman->optsiswa_param($param);
			 $transaksi = $this->m_peminjaman->add_buku($param);
			 $this->template->view('pengembalian/detail_pengembalian',['siswa'=>$optsiswa,'buku'=>$buku,'transaksi'=>$transaksi]);

		}
		public function proses_pengembalian_buku($param)
		{
			 $this->m_peminjaman->proses_pengembalian($param);
			 
			 $buku = $this->m_peminjaman->optbuku_param($param);
			 $optsiswa = $this->m_peminjaman->optsiswa_param($param);
			 $transaksi = $this->m_peminjaman->add_buku($param);
			 $this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data  Buku Tidak Jadi Dipinjam. </div>");

			  $this->template->view('pengembalian/detail_pengembalian',['siswa'=>$optsiswa,'buku'=>$buku,'transaksi'=>$transaksi]);
			 

			//redirect('transaksi/peminjaman/add_buku/'.$id_transaksi.'');
		}
		
		

		
}