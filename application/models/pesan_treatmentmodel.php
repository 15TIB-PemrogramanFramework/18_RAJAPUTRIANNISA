<?php 
/**
* 
*/
class pesan_treatmentmodel extends CI_Model
{
	public $pesan_treatment		= 'pesan_treatment';
	public $id					= 'id_pesantreatment';
	public $id_member			= 'id_member';
	public $order				= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('pesan_treatment.id_pesantreatment, member.id_member, member.nama_member, treatment.id_treatment, treatment.nama_treatment, pesan_treatment.jumlah');
        $this->db->from('pesan_treatment');
        $this->db->join('member', 'pesan_treatment.id_member = member.id_member');
        $this->db->join('treatment', 'pesan_treatment.id_treatment = treatment.id_treatment');
		$query = $this->db->get();
		return $query->result();
	}

	
	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->pesan_treatment,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->pesan_treatment)->row();//1 data
	}
	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->pesan_treatment);
	}
	function tambah_data($data)//array
	{
		return $this->db->insert($this->pesan_treatment,$data);
	}
	function ambil_data_pesan($id_member){
		$this->db->where($this->id_member,$id_member);
		return $this->db->get($this->pesan_treatment)->result();
	}
	
}
 ?>