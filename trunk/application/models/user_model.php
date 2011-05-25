<?php
class User_model extends CI_Model {
	function __contruct()
	{
		parent:: __contruct();
		
	}
	function getUser($query=FALSE,$id=FALSE) 	//$limit=FALSE,$offset=FALSE
	{
		if($query=='list')
		{
			//$this->db->limit($limit,$offset);
			$qr = $this->db->get('tb_user');
			$result=$qr->result_array();
			return $result;
		}
		elseif ($query=='username')
		{
			//$this->db->limit($limit,$offset)
			$this->db->where('username',$id);
			return $this->db->get('tb_user')->row();
		}
	}
	function addUser($data)
	{
		$this->db->insert('tb_user',$data);
	}
	function editUser($id,$data)
	{
		$this->db->where('username',$id);
		$this->db->update('tb_user',$data);
	}
	function deleteUser($id)
	{
		$this->db->where('username',$id);
		$this->db->delete('tb_user');
	}
	
}	