<?php
class Register_model extends CI_Model {
	function __contruct()
	{
		parent:: __contruct();
		
	}
	function getRegister($query=FALSE,$id=FALSE)
	{
		if($query=='list')
		{
			$qr = $this->db->get('tb_user');
			$result=$qr->result_array();
			return $result;
		}
		elseif ($query=='by_id_user')
		{
			$this->db->where('id_user',$id);
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