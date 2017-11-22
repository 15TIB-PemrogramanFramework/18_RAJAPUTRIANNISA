<?php 
/**
* 
*/
class pesan_skincaremodel extends CI_Model
{
	public $pesan_skincare		= 'pesan_skincare';
	public $id_pesanskincare	= 'id_pesanskincare';
	public $id_member			= 'id_member';
	public $order				= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('pesan_skincare.id_pesanskincare, member.id_member, member.nama_member, skincare.id_skincare, skincare.nama_skincare, pesan_skincare.jumlah');
        $this->db->from('pesan_skincare');
        $this->db->join('member', 'pesan_skincare.id_member = member.id_member');
        $this->db->join('skincare', 'pesan_skincare.id_skincare = skincare.id_skincare');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->pesan_skincare,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->pesan_skincare)->row();//1 data
	}
	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->pesan_skincare);
	}
	function tambah_data($data)//array
	{
		return $this->db->insert($this->pesan_skincare,$data);
	}
	function ambil_data_pesan($id_member){
		$this->db->where($this->id_member,$id_member);
		return $this->db->get($this->pesan_skincare)->result();
	}
	
}
 ?>