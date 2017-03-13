<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('m_auth');
        $this->load->library('template');
        
        
    }

    public function index($error = NULL) {

         $data = array(
            'title' => 'Login Page',
            'action' => site_url('auth/login'),
            'error' => $error
        );

        $this->template->view_auth('auth/index',$data);
    }

    public function login() {
      
        $login = $this->m_auth->login(html_escape($this->input->post('username')),html_escape($this->input->post('password')));
        if ($login > 0 ) {
            $row = $this->m_auth->data_login($this->input->post('username'),$this->input->post('password'));
            $data = array(
                'logged'    => TRUE,
                'username'  => $row->username,
                'password'  => $row->password,
                'user_id'   => $row->user_id,
                'user_nm'   => $row->user_nm,
                'user_alamat' =>$row->user_alamat,
                'user_hp'   =>$row->user_hp
            );
            // var_dump($data);die();

            $this->session->set_userdata($data);
            redirect(site_url('home'));

        } else {
            $error = 'Maaf Login Gagal, Username / Password Salah ';
            $this->index($error);


        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(site_url('auth'));
    }

}


