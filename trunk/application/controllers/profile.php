<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

	$this->load->library('session');
	}

	function index()
	{
	$data['no_user'] = $this->session->userdata('no_user');
	$data['username'] = $this->session->userdata('username');
	
	if (!empty($data['no_user']))
	{
			
			//menampilkan update view
	$data['slide_view'] = "user.php";
	$data['menu'] = "menuAdmin.php";
	$data['main_view'] = "menuAdmin.php";
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
	$this->load->view('index',$data);
	

	
	}
	

		
}