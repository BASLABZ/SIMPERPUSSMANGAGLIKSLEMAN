<?php 
/**
* home / dasboard admin
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged')<>1) 
		{
		redirect(site_url('auth'));
		}
		$this->load->library('template');
		
	}

	public function index()
	{
		$data = 'Sistem Informasi Perpustakaan SMA N Ngaglik';
		$this->template->view('home/index',['data'=>$data]);
	}
}
