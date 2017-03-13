<?php 

/**
* class controller kategori buku / klasifikasi buku
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategoribuku extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->model('m_kategoribuku');
		$this->load->library('template');
		

	}
	public function index()
	{
		$data = $this->m_kategoribuku->get_kategori();
		$this->template->view('master/kategori/list',['data'=>$data]);
	}
	public function add()
	{
		$table = "kategori";
		$data = $this->m_kategoribuku->getkode($table);
		$this->form_validation->set_rules('nama_kategori','nama_kategori','required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->template->view('master/kategori/add',['data'=>$data]);	
		}else{
			
			$values = array(	
						'kategori_id'	=> $this->input->post('kategori_id'),
						'nama_kategori' 	=> $this->input->post('nama_kategori') );
			$insert = $this->m_kategoribuku->insert($values);
			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Kategori Buku Berhasil Disimpan. </div>");
			redirect('master/kategoribuku');	
			
		}
	}
	public function delete($where)
	{
			$data = $this->m_kategoribuku->delete($where);
			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Kategori buku Berhasil Dihapus. </div>");
			redirect('master/kategoribuku');	
			

	}
	public function edit($param)
	{		$data = $this->m_kategoribuku->show_edit($param);
			$this->template->view('master/kategori/edit',['data'=>$data]);
	}
	public function prosesedit($param)
	{
			
			$this->form_validation->set_rules('nama_kategori','nama_kategori','required');
			if ($this->form_validation->run()==FALSE) {
				$this->template->view('master/kategori/edit');		
			}else{
				$data  = array('nama_kategori' => $this->input->post('nama_kategori'));
				$insert = $this->m_kategoribuku->edit($param,$data);
				$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data kategori Berhasil Diubah. </div>");
					redirect('master/kategoribuku');			
			}
	}

	
}