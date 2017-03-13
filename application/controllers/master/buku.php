<?php 
/**
* controller buku for master buku
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class buku extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->model('m_buku');
		$this->load->library('template');
		

	}
	public function index()
	{
		$data = $this->m_buku->get_buku();
		$this->template->view('master/buku/list',['data'=>$data]);
	}
	public function add()
	{

		$table = "buku";
		$data = $this->m_buku->getkode($table);
		$this->form_validation->set_rules('idbuku','idbuku','required');
		$this->form_validation->set_rules('jenisasal','jenisasal','required');
		$this->form_validation->set_rules('SMA','SMA','required');
		$this->form_validation->set_rules('tahunkode','tahunkode','required');
		$this->form_validation->set_rules('kodebarang','kodebarang','required');
		$this->form_validation->set_rules('register','register','required');
		$this->form_validation->set_rules('ISBN','ISBN','required');
		$this->form_validation->set_rules('judul_buku','judul_buku','required');
		$this->form_validation->set_rules('kategori_id','kategori_id','required');
		$this->form_validation->set_rules('penerbit_id','penerbit_id','required');
		$this->form_validation->set_rules('pengarang','pengarang','required');
		$this->form_validation->set_rules('tahun_beli','tahun_beli','required');
		$this->form_validation->set_rules('jumlah','jumlah','required');
		$this->form_validation->set_rules('hargasatuan','hargasatuan','required');
		$this->form_validation->set_rules('totalharga','totalharga','required');
		$this->form_validation->set_rules('kondisi','kondisi','required');
		$this->form_validation->set_rules('ruang','ruang','required');
		$this->form_validation->set_rules('asalusul','asalusul','required');
		$this->form_validation->set_rules('ket','ket','required');
		$optkategori = $this->m_buku->optkategori();
		$optpenerbit = $this->m_buku->optpenerbit();

		if ( $this->form_validation->run() == FALSE ) {

			$this->template->view('master/buku/add_buku',['data'=>$data,'optkategori'=>$optkategori,'optpenerbit'=>$optpenerbit]);	
		}else{
			
			$idbuku  	=  $this->input->post('idbuku');
			$jenisasal 	=	$this->input->post('jenisasal');
			$SMA		=	$this->input->post('SMA');
			$tahunkode 	=	$this->input->post('tahunkode');
			$kodebarang =	$this->input->post('kodebarang');
			$register 	= $this->input->post('register');
			$ISBN 		=	$this->input->post('ISBN');
			$judul_buku = $this->input->post('judul_buku');
			$kategori_id = $this->input->post('kategori_id');
			$penerbit_id = $this->input->post('penerbit_id');
			$pengarang = $this->input->post('pengarang');
			$tahun_beli = $this->input->post('tahun_beli');
			$jumlah = $this->input->post('jumlah');
			$hargasatuan = $this->input->post('hargasatuan');
			$totalharga = $this->input->post('totalharga');
			$kondisi = $this->input->post('kondisi');
			$ruang = $this->input->post('ruang');
			$asalusul = $this->input->post('asalusul');
			$ket = $this->input->post('ket');
			$nonotaris  = "".$idbuku."".$jenisasal."/".$SMA."/".$tahunkode."";

			// simpan data buku inventaris
			$query = "INSERT INTO bukus (
											idbuku, no_inventaris, kodebarang,
											register, ISBN, judul_buku, 
											kategori_id, penerbit_id, pengarang, 
											tahun_beli, jumlah, hargasatuan, 
											totalharga, kondisi, ruang, 
											asalusul, ket, tgl_penerimaan
										) 
								VALUES (
											'".$idbuku."', '".$nonotaris."', '".$kodebarang."',
											 '".$register."', '".$ISBN."', '".$judul_buku."', 
											 '".$kategori_id."', '".$penerbit_id."', '".$pengarang."', 
											 '".$tahun_beli."', '".$jumlah."', '".$hargasatuan."', 
											 '".$totalharga."', '".$kondisi."', '".$ruang."', 
											 '".$asalusul."', '".$ket."', NOW())";
			$simpan = $this->db->query($query);

			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data  Buku Berhasil Disimpan. </div>");
			redirect('master/buku');		
		}
	}
	public function delete($where)
	{
			$data = $this->m_buku->delete($where);
			$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data  buku Berhasil Dihapus. </div>");
			redirect('master/buku');	
			

	}
	public function edit($param)
	{

			$optkategori = $this->m_buku->optkategori();
			$optpenerbit = $this->m_buku->optpenerbit();
			$data = $this->m_buku->show_edit($param);
			// var_dump($data); die();
			$this->template->view('master/buku/edit_buku',['data'=>$data,'optkategori'=>$optkategori,'optpenerbit'=>$optpenerbit]);
		
	}
	public function prosesedit($param)
	{
			$this->form_validation->set_rules('idbuku','idbuku','required');
			$this->form_validation->set_rules('jenisasal','jenisasal','required');
			$this->form_validation->set_rules('SMA','SMA','required');
			$this->form_validation->set_rules('tahunkode','tahunkode','required');
			$this->form_validation->set_rules('kodebarang','kodebarang','required');
			$this->form_validation->set_rules('register','register','required');
			$this->form_validation->set_rules('ISBN','ISBN','required');
			$this->form_validation->set_rules('judul_buku','judul_buku','required');
			$this->form_validation->set_rules('kategori_id','kategori_id','required');
			$this->form_validation->set_rules('penerbit_id','penerbit_id','required');
			$this->form_validation->set_rules('pengarang','pengarang','required');
			$this->form_validation->set_rules('tahun_beli','tahun_beli','required');
			$this->form_validation->set_rules('jumlah','jumlah','required');
			$this->form_validation->set_rules('hargasatuan','hargasatuan','required');
			$this->form_validation->set_rules('totalharga','totalharga','required');
			$this->form_validation->set_rules('kondisi','kondisi','required');
			$this->form_validation->set_rules('ruang','ruang','required');
			$this->form_validation->set_rules('asalusul','asalusul','required');
			$this->form_validation->set_rules('ket','ket','required');
			$optkategori = $this->m_buku->optkategori();
			$optpenerbit = $this->m_buku->optpenerbit();

			if ($this->form_validation->run()==FALSE) {
				$this->template->view('master/buku/edit_buku',['data'=>$data,'optkategori'=>$optkategori,'optpenerbit'=>$optpenerbit]);		
			}else{
				$idbuku  	=  $this->input->post('idbuku');
				$jenisasal 	=	$this->input->post('jenisasal');
				$SMA		=	$this->input->post('SMA');
				$tahunkode 	=	$this->input->post('tahunkode');
				$kodebarang =	$this->input->post('kodebarang');
				$register 	= $this->input->post('register');
				$ISBN 		=	$this->input->post('ISBN');
				$judul_buku = $this->input->post('judul_buku');
				$kategori_id = $this->input->post('kategori_id');
				$penerbit_id = $this->input->post('penerbit_id');
				$pengarang = $this->input->post('pengarang');
				$tahun_beli = $this->input->post('tahun_beli');
				$jumlah = $this->input->post('jumlah');
				$hargasatuan = $this->input->post('hargasatuan');
				$totalharga = $this->input->post('totalharga');
				$kondisi = $this->input->post('kondisi');
				$ruang = $this->input->post('ruang');
				$asalusul = $this->input->post('asalusul');
				$ket = $this->input->post('ket');
				$nonotaris  = "".$idbuku."".$jenisasal."/".$SMA."/".$tahunkode."";

				$query = "UPDATE bukus SET
											no_inventaris = '".$nonotaris."',
											kodebarang = '".$kodebarang."',
											register = '".$register."',
											ISBN = '".$ISBN."',
											judul_buku = '".$judul_buku."', 
											kategori_id = '".$kategori_id."',
											penerbit_id = '".$penerbit_id."',
											pengarang = '".$pengarang."', 
											tahun_beli = '".$tahun_beli."', jumlah = '".$jumlah."', hargasatuan = '".$hargasatuan."', 
											totalharga = '".$totalharga."', kondisi = '".$kondisi."', ruang = '".$ruang."', 
											asalusul = '".$asalusul."', ket = '".$ket."'
						 where idbuku='".$idbuku."'";
				$updateBuku = $this->db->query($query); 

				
				$this->session->set_flashdata('Sukses', "<div class='alert alert-success alert-dismissable'><button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button> Data buku Berhasil Diubah. </div>");
					redirect('master/buku');			
			}
	}

}