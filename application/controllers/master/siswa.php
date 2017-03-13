<?php 
	/**
	* controller siswa for manage master siswa 
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Siswa extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('encrypt');
			$this->load->model('m_siswa');
			$this->load->library('template');
			$this->load->helper(array('url'));
		}
		public function index()
		{
			$data = $this->m_siswa->get_siswa();
			$this->template->view('master/siswa/list',['data'=>$data]);
		}
		public function tambah()
		{
			$table = "siswa";
			$data = $this->m_siswa->getkode($table);
			$this->template->view('master/siswa/tambah',['data'=>$data]);
		}
		public function simpansiswa()
		{
			$this->load->library('upload');
			$nmfile = "file_".time();
			$config['upload_path'] 		= './resource/themes/default/upload';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
			$config['max_size'] 		= '2048'; 
	        $config['max_width']  		= '1288'; 
	        $config['max_height']  		= '768'; 
	        $config['file_name'] 		= $nmfile; 
	        $this->upload->initialize($config);
	        $siswa_kode  			= $this->input->post('siswa_id');
            $tahunajar 				= $this->input->post('tahunajar');
            $kelas 					= $this->input->post('kelas');
            $kodeotomatis			= $this->input->post('kodeotomatis');
            $kodeanggota 			= "$kelas-$tahunajar-$kodeotomatis";
            $siswa_nama  			= $this->input->post('siswa_nama');
            $NIS 					= $this->input->post('NIS');
            $siswa_alamat 			= $this->input->post('siswa_alamat');
            $namakelas				= $this->input->post('namakelas');
            $jurusan 				= $this->input->post('jurusan'); 
	         if(!empty($_FILES) && $_FILES['foto']['name'] > 0 && $_FILES['foto']['error'] == 0)
		        {
		            if ($this->upload->do_upload('foto'))
		            {
		                $gbr = $this->upload->data();
		                $data = $gbr['file_name'];
		                $query = "INSERT INTO siswa (
		                								siswa_id,kodeanggota,NIS,siswa_nama,
		                								kelas,siswa_alamat,foto,namakelas,jurusan
		                							)VALUES
		                							('".$siswa_kode."','".$kodeanggota."','".$NIS."',
		                							'".$siswa_nama."','".$kelas."',
		                							'".$siswa_alamat."',
		                							'".$data."','".$namakelas."','".$jurusan."') ";

		                $simpandatasiswa  = $this->db->query($query);
		                $this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Diubah. </div>");
					redirect('master/siswa');	
		            }else{
		                $this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Diubah. </div>");
					redirect('master/siswa/tambah');	
		            }
		        }else{
		        	$querysimpantanpafoto = "INSERT INTO siswa (
		                								siswa_id,kodeanggota,NIS,siswa_nama,
		                								kelas,siswa_alamat,foto,namakelas,jurusan
		                							)VALUES
		                							('".$siswa_kode."','".$kodeanggota."','".$NIS."',
		                							'".$siswa_nama."','".$kelas."',
		                							'".$siswa_alamat."',
		                							'','".$namakelas."','".$jurusan."') ";
		                $simpandatasiswatanpafoto  = $this->db->query($querysimpantanpafoto);
		                if ($simpandatasiswatanpafoto) {
		                	$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Diubah. </div>");
					redirect('master/siswa');	
		                }else{
		                	$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Diubah. </div>");
							redirect('master/siswa/tambah');	
		                }
		        }

		}
		public function ubah($param)
		{
			$data = $this->m_siswa->show_edit($param);
			$this->template->view('master/siswa/ubah',['data'=>$data]);
		}
		public function proses_ubah()
		{
			$this->load->library('upload');
			$nmfile						= "file_".time();
			$config['upload_path'] 		= './resource/themes/default/upload';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
			$config['max_size'] 		= '2048'; 
	        $config['max_width']  		= '1288'; 
	        $config['max_height']  		= '768'; 
	        $config['file_name'] 		= $nmfile; 
	        $this->upload->initialize($config);
	        $siswa_kode  			= $this->input->post('siswa_id');
            $tahunajar 				= $this->input->post('tahunajar');
            $kelas 					= $this->input->post('kelas');
            $kodeotomatis			= $this->input->post('kodeotomatis');
            $kodeanggota 			= "$kelas-$tahunajar-$kodeotomatis";
            $siswa_nama  			= $this->input->post('siswa_nama');
            $NIS 					= $this->input->post('NIS');
            $siswa_alamat 			= $this->input->post('siswa_alamat'); 
            $namakelas 				= $this->input->post('namakelas');
            $jurusan 				= $this->input->post('jurusan');
	         if(!empty($_FILES) && $_FILES['foto']['name'] > 0 && $_FILES['foto']['error'] == 0)
		        { 

		            if ($this->upload->do_upload('foto'))
		            {
		                $gbr 			= $this->upload->data();
		                $data 			= $gbr['file_name'];
		                $query 			= "UPDATE siswa SET 
		                					siswa_id='".$siswa_kode."',
		                					kodeanggota = '".$kodeanggota."',
		                					NIS = '".$NIS."',
		                					siswa_nama='".$siswa_nama."',
		                					kelas='".$kelas."',
		                					siswa_alamat='".$siswa_alamat."',
		                					foto='".$data."',
		                					namakelas = '".$namakelas."',
		                					jurusan = '".$jurusan."'
		                					where siswa_id='".$siswa_kode."' ";
		               $ubah = $this->db->query($query);
		            $this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Diubah. </div>");
					redirect('master/siswa');	

		            }else{
		                $this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Diubah. </div>");
					redirect('master/ubah/'.$siswa_kode);	

		            }
		        }else{
	                $queryubah 	= "UPDATE siswa SET 
		                					siswa_id='".$siswa_kode."',
		                					kodeanggota = '".$kodeanggota."',
		                					NIS = '".$NIS."',
		                					siswa_nama='".$siswa_nama."',
		                					kelas='".$kelas."',
		                					siswa_alamat='".$siswa_alamat."',
		                					namakelas = '".$namakelas."',
		                					jurusan = '".$jurusan."'
		                					where siswa_id='".$siswa_kode."'  ";
					$ubah = $this->db->query($queryubah);
					if ($ubah) {
						$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Diubah. </div>");
					redirect('master/siswa');	
					}else{
						$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data Pengguna Berhasil Diubah. </div>");
					redirect('master/ubah/'.$siswa_kode);	
					}

		        }
		}
		public function delete($where)
		{
			$data = $this->m_siswa->delete($where);
			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data  Siswa Berhasil Dihapus. </div>");
			redirect('master/siswa');	
			
		}
		


	}