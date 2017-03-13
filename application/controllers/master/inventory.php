<?php 
/**
* 
*/
class Inventory extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->model('m_inventori');
		$this->load->library('template');
	}
	public function index()
	{
		$data = $this->m_inventori->get_all();
		$this->template->view('master/inventori/list',['data'=>$data]);
	}
	public function add()
	{
			$table = "inventori";
			$data = $this->m_inventori->getkode($table);
			$this->form_validation->set_rules('nama_barang','nama_barang','required');
			$this->form_validation->set_rules('keterangan','keterangan','required');
			$this->form_validation->set_rules('jumlah','jumlah','required');
			$this->form_validation->set_rules('lokasi','lokasi','required');
			
			
		if ( $this->form_validation->run() == FALSE ) {
			$this->template->view('master/inventori/add',['data'=>$data]);	
		}else{
			
			$values = array(	
						'id_barang'	=> $this->input->post('id_barang'),
						'nama_barang' 	=> $this->input->post('nama_barang') ,
						'keterangan'	=> $this->input->post('keterangan'),
						'jumlah'	=> $this->input->post('jumlah'),
						'lokasi'=>$this->input->post('lokasi'));
			$insert = $this->m_inventori->insert($values);
			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Barang Berhasil Disimpan. </div>");
			redirect('master/inventory');	
			
		}
		
	}
	


	public function delete($where)
	{
		$data = $this->m_inventori->delete($where);
		$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Barang Berhasil Dihapus. </div>");
			redirect('master/inventory');	
			

	}
	public function edit($param)
	{

			$data = $this->m_inventori->show_edit($param);
			$this->template->view('master/inventori/edit',['data'=>$data]);
		
	}


	public function prosesedit($param)
	{
			$this->form_validation->set_rules('nama_barang','nama_barang','required');
			$this->form_validation->set_rules('keterangan','keterangan','required');
			$this->form_validation->set_rules('jumlah','jumlah','required');
			$this->form_validation->set_rules('lokasi','lokasi','required');
			if ($this->form_validation->run()==FALSE) {
				$this->template->view('master/inventory/edit');		
			}else{
				$data  = array(
								'nama_barang' 		=> $this->input->post('nama_barang'),
								'keterangan' 	=> $this->input->post('keterangan'),
								'jumlah' 	=> $this->input->post('jumlah'),
								'lokasi' 			=> $this->input->post('lokasi'));
				
				$insert = $this->m_inventori->edit($param,$data);
				$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data buku Berhasil Diubah. </div>");
					redirect('master/inventory');			
			}
	}




	// public function prosesedit($param)
	// {
	// 		if ($this->form_validation->run()==FALSE) {
	// 		$data = $this->m_inventori->show_edit($param);
	// 		$this->template->view('master/inventori/edit',['data'=>$data]);

	// 		}else{
	// 			$data  = array(
	// 							'nama_barang' => $this->input->post('nama_barang'),
	// 							'keterangan' => $this->input->post('keterangan'),
	// 							'jumlah' => $this->input->post('jumlah'),
	// 							'lokasi' => $this->input->post('lokasi')
	// 						  );
	// 			$insert = $this->m_inventori->edit($param,$data);
	// 			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Inventory Berhasil Diubah. </div>");
	// 				redirect('master/inventory');			
	// 		}
	// }

}
 ?>