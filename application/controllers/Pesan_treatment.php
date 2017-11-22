<?php 
/**
* 
*/
class Pesan_treatment extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pesan_treatmentmodel');
		$this->load->model('member_model');
		$this->load->model('treatment_model');

	}

	function index()
	{
		$data['pesan_treatment'] = $this->pesan_treatmentmodel->ambil_data();
		$this->load->view('admin/pesan_treatment_list',$data);
	}


	function tambah($id_treatment)
	{
		$id_member = $this->session->userdata('id_member');
		$treatment = $this->treatment_model->ambil_data_id($id_treatment);
		$member = $this->member_model->ambil_data($id_member);
		$data = array(
			'aksi' 				=> site_url('pesan_treatment/tambah_aksi'),
			'id_pesantreatment'  => set_value('id_pesantreatment'),
			'id_member' 		=> set_value('id_member',$id_member),
			'id_treatment'	 	=> set_value('id_treatment',$id_treatment),
			'jumlah' 			=> set_value('jumlah'),
			'button' 			=> 'Insert'
			);
		$this->load->view('pesan_formtreatment',$data);
	}
	function tambah_aksi()
	{

		$data = array(
			'id_pesantreatment' 	=> $this->input->post('id_pesantreatment'),
			'id_member' 		=> $this->input->post('id_member'),
			'id_treatment'		=> $this->input->post('id_treatment'),
			'jumlah' 			=> $this->input->post('jumlah')
			);
		$this->pesan_treatmentmodel->tambah_data($data);
		 $this->session->set_flashdata("pesan_skincare", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil !!</div></div>");
                redirect(site_url('home/treatment_member'));
	}

	function delete($id)
	{
		$this->pesan_treatmentmodel->hapus_data($id);
		$this->session->set_flashdata("pesan_treatment", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('pesan_treatment');
	}

	function update($id)
	{
		$pesan_treatment = $this->pesan_treatmentmodel->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('pesan_treatment/update_aksi'),
			'jumlah' 			=> set_value('jumlah',$pesan_treatment->jumlah),
			'id_pesantreatment' 		=> set_value('id_pesantreatment',$pesan_treatment->id_pesantreatment),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/pesan_treatment_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'jumlah' 		=> $this->input->post('jumlah')
			);	
		$id_pesantreatment = $this->input->post('id_pesantreatment');
		$this->pesan_treatmentmodel->edit_data($id_pesantreatment,$data);
		$this->session->set_flashdata("pesan_treatment", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('pesan_treatment');
	}

}

 ?>