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
	
	if (!empty($data['username']))
	{
			
			//menampilkan update view
	$data['slide_view'] = "logout.php";
	$data['menu'] = "menuAdmin.php";
	$data['main_view'] = "home.php";
	$data['slide_view2'] = "viewRegister.php";
	$data['slide_view3'] = "viewkomen.php";

	}
			
	else
	{
			//menampilkan halaman login
	$data['slide_view'] = "login.php";
	$data['menu'] = "menu.php";
	$data['slide_view3'] = "viewkomen.php";
	$data['slide_view2'] = "viewRegister.php";

	}
	
	
	$data['title'] = 'profile';
	$data['usernama'] = $this->session->userdata('user_display');
	$data['main_view'] = 'indexProfile.php';
	$data['user'] = $this->session->userdata('username');
	$this->load->view('index',$data);

	
	}
	

		
}