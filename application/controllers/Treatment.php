<?php 
/**
* 
*/
class Treatment extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('treatment_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['treatment'] = $this->treatment_model->ambil_data();
		$this->load->view('admin/treatment_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 					=> site_url('Treatment/tambah_aksi'),
			'nama_treatment' 		=> set_value('nama_treatment'),
			'harga_treatment' 		=> set_value('harga_treatment'),
			'deskripsi_treatment' 	=> set_value('deskripsi_treatment'),
			'id_treatment' 			=> set_value('id_treatment'),
			'button' 				=> 'Insert'
			);
		$this->load->view('admin/treatment_form',$data);
	}

	function tambah_aksi()
	{

		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar_treatment' 		=>$gbr['file_name'],
                'nama_treatment' 		=> $this->input->post('nama_treatment'),
				'harga_treatment' 		=> $this->input->post('harga_treatment'),
				'deskripsi_treatment' 	=> $this->input->post('deskripsi_treatment')                  
                );
                $this->treatment_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan_treatment", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('treatment'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan_treatment", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('treatment'); //jika gagal maka akan ditampilkan form upload
            }
        }
	}

	function delete($id)
	{
		$this->treatment_model->hapus_data($id);
		$this->session->set_flashdata("pesan_treatment", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('treatment');
	}

	function update($id)
	{
		$treatment = $this->treatment_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('treatment/update_aksi'),
			'nama_treatment' 				=> set_value('nama_treatment',$treatment->nama_treatment),
			'harga_treatment' 			=> set_value('harga_treatment',$treatment->harga_treatment),
			'deskripsi_treatment' 		=> set_value('deskripsi_treatment',$treatment->deskripsi_treatment),
			'id_treatment' 		=> set_value('id_treatment',$treatment->id_treatment),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/treatment_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama_treatment' 		=> $this->input->post('nama_treatment'),
			'harga_treatment' 		=> $this->input->post('harga_treatment'),
			'deskripsi_treatment' 	=> $this->input->post('deskripsi_treatment')
			);	
		$id_treatment = $this->input->post('id_treatment');
		$this->treatment_model->edit_data($id_treatment,$data);
		$this->session->set_flashdata("pesan_treatment", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
                redirect('treatment');
	}
}

 ?>