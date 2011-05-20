<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

	$this->load->library('session');
	}

	function index()
	{
	$data['id_user'] = $this->session->userdata('id_user');
	$data['username'] = $this->session->userdata('username');
	
	if (!empty($data['id_user']))
	{
			
				
				//menampilkan update view
	$data['slide_view'] = "user.php";
	$data['menu'] = "menuAdmin.php";
	}
	else
	{
			//menampilkan halaman login
	$data['slide_view'] = "login.php";
	$data['menu'] = "menu.php";
	}	
	$data['title'] = 'Profile';
	$data['usernama'] = $this->session->userdata('user_display');
	$data['main_view'] = 'indexProfile.php';
	$this->load->view('index.php',$data);
	

	
	}
	

		
}