<?php 
/**
* class untuk controller MASTER PENGGUNA
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->model('m_pengguna');
		$this->load->library('template');
		

	}
	public function index()
	{

		$data = $this->m_pengguna->get_pengguna();
		$this->template->view('master/pengguna/list',['data'=>$data]);
	}	
	public function add()
	{
			$table = "user";
			$data = $this->m_pengguna->getkode($table);
			$this->form_validation->set_rules('user_nm','user_nm','required');
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required');
			$this->form_validation->set_rules('user_alamat','user_alamat','required');
			$this->form_validation->set_rules('user_hp','user_hp','required');
		
		if ( $this->form_validation->run() == FALSE ) {
			$this->template->view('master/pengguna/add',['data'=>$data]);	
		}else{
			
			$values = array(	
						'user_id'	=> $this->input->post('user_id'),
						'user_nm' 	=> $this->input->post('user_nm') ,
						'username'	=> $this->input->post('username'),
						'password'	=> $this->input->post('password'),
						'user_alamat'=>$this->input->post('user_alamat'),
						'user_hp'	=> $this->input->post('user_hp'));
			$insert = $this->m_pengguna->insert($values);
			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Disimpan. </div>");
			redirect('master/pengguna');	
			
		}
		
	}
	public function edit($param)
	{
			$data = $this->m_pengguna->show_edit($param);
			$this->template->view('master/pengguna/edit',['data'=>$data]);	
	}
	public function prosesedit($param)
	{
			$this->form_validation->set_rules('user_nm','user_nm','required');
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required');
			$this->form_validation->set_rules('user_alamat','user_alamat','required');
			$this->form_validation->set_rules('user_hp','user_hp','required');
			if ($this->form_validation->run()==FALSE) {
				$this->template->view('master/pengguna/edit');		
			}else{
				$data  = array(
								'user_nm' => $this->input->post('user_nm'),
								'username' => $this->input->post('username'),
								'password' => $this->input->post('password'),
								'user_alamat' => $this->input->post('user_alamat'),
								'user_hp' => $this->input->post('user_hp'));
				$insert = $this->m_pengguna->edit($param,$data);
				$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Diubah. </div>");
					redirect('master/pengguna');			
			}
	}
	public function delete($where)
	{
		$data = $this->m_pengguna->delete($where);
		$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Dihapus. </div>");
			redirect('master/pengguna');	
			

	}
	public function profil_pengguna($param)
	{
		
		$data = $this->m_pengguna->profil_pengguna($param);
		$this->template->view('master/pengguna/profil_pengguna',['data'=>$data]);


	}
		
}