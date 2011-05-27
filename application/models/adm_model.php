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
		elseif ($query=='by_id_parkir')
		{
			//$this->db->limit($limit,$offset)
			$this->db->where('id_parkir',$id);
			return $this->db->get('tb_parkir')->row();
		}
	}
	function addAdm($data)
	{
		$this->db->insert('tb_parkir',$data);
	}
	function editAdm($id,$data)
	{
		$this->db->where('id_parkir',$id);
		$this->db->update('tb_parkir',$data);
	}
	function deleteAdm($id)
	{
		$this->db->where('id_parkir',$id);
		$this->db->delete('tb_parkir');
	}
	
}	