<?php 
/**
* 
*/
class skincare extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('skincare_model');
		$this->load->helper(array('url'));
	}

	function index()
	{
		//print_r($this->prodi_model->ambil_data());
		$data['skincare'] = $this->skincare_model->ambil_data();
		$this->load->view('admin/skincare_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 					=> site_url('skincare/tambah_aksi'),
			'nama_skincare' 		=> set_value('nama_skincare'),
			'harga_skincare' 		=> set_value('harga_skincare'),
			'deskripsi_skincare' 	=> set_value('deskripsi_skincare'),
			'id_skincare' 			=> set_value('id_skincare'),
			'button' 				=> 'Insert'
			);
		$this->load->view('admin/skincare_form',$data);
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
                'gambar_skincare' 		=>$gbr['file_name'],
                'nama_skincare' 		=> $this->input->post('nama_skincare'),
				'harga_skincare' 		=> $this->input->post('harga_skincare'),
				'deskripsi_skincare' 	=> $this->input->post('deskripsi_skincare')                  
                );
                $this->skincare_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan_skincare", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('skincare'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan_skincare", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('skincare_form'); //jika gagal maka akan ditampilkan form upload
            }
        }

}

	function delete($id)
	{
		$this->skincare_model->hapus_data($id);
		$this->session->set_flashdata("pesan_skincare", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('skincare');
	}

	function update($id)
	{
		$skincare = $this->skincare_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('skincare/update_aksi'),
			'nama_skincare' 				=> set_value('nama_skincare',$skincare->nama_skincare),
			'harga_skincare' 			=> set_value('harga_skincare',$skincare->harga_skincare),
			'deskripsi_skincare' 		=> set_value('deskripsi_skincare',$skincare->deskripsi_skincare),
			'id_skincare' 		=> set_value('id_skincare',$skincare->id_skincare),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/skincare_form',$data);		
	}

	



	function update_aksi()
	{
		$data = array(
			'nama_skincare' 		=> $this->input->post('nama_skincare'),
			'harga_skincare' 		=> $this->input->post('harga_skincare'),
			'deskripsi_skincare' 	=> $this->input->post('deskripsi_skincare')
			);	
		$id_skincare = $this->input->post('id_skincare');
		$this->skincare_model->edit_data($id_skincare,$data);
		$this->session->set_flashdata("pesan_skincare", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
                redirect('skincare');
	}
}

 ?>