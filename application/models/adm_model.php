<?php
class Adm_model extends CI_Model {
	function __contruct()
	{
		parent:: __contruct();
		
	}
	function getAdm($query=FALSE,$id=FALSE)	//$limit=FALSE,$offset=FALSE
	{
		if($query=='list')
		{
			//$this->db->limit($limit,$offset);
			$qr = $this->db->get('tb_parkir');
			$result=$qr->result_array();
			return $result;
		}
		elseif ($query=='nama_pemilik')
		{
			//$this->db->limit($limit,$offset)
			$this->db->where('nama_pemilik',$id);
			return $this->db->get('tb_parkir')->row();
		}
	}
	function addAdm($data)
	{
		$this->db->insert('tb_parkir',$data);
	}
	function editAdm($id,$data)
	{
		$this->db->where('nama_pemilik',$id);
		$this->db->update('tb_parkir',$data);
	}
	function deleteAdm($id)
	{
		$this->db->where('nama_pemilik',$id);
		$this->db->delete('tb_parkir');
	}
	
}	