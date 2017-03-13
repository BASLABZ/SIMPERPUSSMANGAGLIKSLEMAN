<?php 
/**
* class controller for master penerbit 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class penerbit extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->model('m_penerbit');
		$this->load->library('template');
		

	}
	public function index()
	{
		$data = $this->m_penerbit->get_penerbit();
		$this->template->view('master/penerbit/list',['data'=>$data]);
	}
	
	public function add()
	{
	
		$table = "penerbit";
		$data = $this->m_penerbit->getkode($table);
		$this->form_validation->set_rules('nama_penerbit','nama_penerbit','required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->template->view('master/penerbit/add',['data'=>$data]);	
		}else{
			
			$values = array(	
						'penerbit_id'	=> $this->input->post('penerbit_id'),
						'nama_penerbit' 	=> $this->input->post('nama_penerbit') );
			$insert = $this->m_penerbit->insert($values);
			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Penerbit Buku Berhasil Disimpan. </div>");
			redirect('master/penerbit');	
			
		}
	
	}
	public function delete($where)
	{
			$data = $this->m_penerbit->delete($where);
			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Penerbit buku Berhasil Dihapus. </div>");
			redirect('master/penerbit');	
			

	}
	public function edit($param)
	{
			$data = $this->m_penerbit->show_edit($param);
			$this->template->view('master/penerbit/edit',['data'=>$data]);	
	}
	public function prosesedit($param)
	{
			
			$this->form_validation->set_rules('nama_penerbit','nama_penerbit','required');
			if ($this->form_validation->run()==FALSE) {
				$this->template->view('master/penerbit/edit');		
			}else{
				$data  = array('nama_penerbit' => $this->input->post('nama_penerbit'));
				$insert = $this->m_penerbit->edit($param,$data);
				$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data penerbit Berhasil Diubah. </div>");
					redirect('master/penerbit');			
			}
	}

	
}