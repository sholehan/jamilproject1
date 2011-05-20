<?php
class Login_model extends CI_Model {
	function __contruct()
	{
		parent::_contruct();
		
	}
	function getLogin($query=FALSE,$id=FALSE)
	{
		if($query=='list')
		{
			$qr = $this->db->get('tb_user');
			$result=$qr->result_array();
			return $result;
		}
		elseif ($query=='by_id')
		{
			$this->db->where('username',$id);
			$this->db->where('password',$id);
			return $this->db->get('tb_user')->row();
		}
	}
	
	