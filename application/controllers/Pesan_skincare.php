<?php 
/**
* 
*/
class pesan_skincare extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pesan_skincaremodel');
		$this->load->model('member_model');
		$this->load->model('skincare_model');
	}

	function index()
	{
		$data['pesan_skincare'] = $this->pesan_skincaremodel->ambil_data();
		$this->load->view('admin/pesan_skincare_list',$data);
	}

	function tambah($id_skincare)
	{
		$id_member = $this->session->userdata('id_member');
		$skincare = $this->skincare_model->ambil_data_id($id_skincare);
		$member = $this->member_model->ambil_data($id_member);
		$data = array(
			'aksi' 				=> site_url('pesan_skincare/tambah_aksi'),
			'id_pesanskincare'  => set_value('id_pesanskincare'),
			'id_member' 		=> set_value('id_member',$id_member),
			'id_skincare'	 	=> set_value('id_skincare',$skincare->id_skincare),
			'jumlah' 			=> set_value('jumlah'),
			'button' 			=> 'Insert'
			);
		$this->load->view('pesan_form',$data);
	}
	function tambah_aksi()
	{

		$data = array(
			'id_pesanskincare' 	=> $this->input->post('id_pesanskincare'),
			'id_member' 		=> $this->input->post('id_member'),
			'id_skincare'		=> $this->input->post('id_skincare'),
			'jumlah' 			=> $this->input->post('jumlah')
			);
		$this->pesan_skincaremodel->tambah_data($data);
		 $this->session->set_flashdata("pesan_skincare", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect(site_url('home/product_member'));
	}


	function delete($id)
	{
		$this->pesan_skincaremodel->hapus_data($id);
		$this->session->set_flashdata("pesan_skincare", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('pesan_skincare');
	}

	function update($id)
	{
		$pesan_skincare = $this->pesan_skincaremodel->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('pesan_skincare/update_aksi'),
			'jumlah' 			=> set_value('jumlah',$pesan_skincare->jumlah),
			'id_pesanskincare' 			=> set_value('id_pesanskincare',$pesan_skincare->id_pesanskincare),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/pesan_skincare_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			
			'jumlah'					=> $this->input->post('jumlah')
			);	
		$id_pesanskincare = $this->input->post('id_pesanskincare');
		$this->pesan_skincaremodel->edit_data($id_pesanskincare,$data);
		$this->session->set_flashdata("pesan_skincare", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('pesan_skincare');
	}

}

 ?>