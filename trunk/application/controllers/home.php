<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	$data['main_view'] = "menuAdmin.php";
}
			
	else
	{
			//menampilkan halaman login
	$data['slide_view'] = "login.php";
	$data['menu'] = "menu.php";
	}
		
	$data['title'] = 'Beranda';
	$data['usernama'] = $this->session->userdata('user_display');
	$data['main_view'] = 'beranda.php';
	$this->load->view('index.php',$data);
	

	
	}
	function login_process()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
			$data['title'] = 'Login';
			$this->load->view('index',$data);
			}
		else{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$data['nama']=$this->db->get('tb_user');
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$res = $this->db->get('tb_user')->result();
			
			if (count($res) > 0){
				$this->session->set_userdata('id_user',$res[0]->id_user );
				$this->session->set_userdata('user_display',$res[0]->user_display );
				redirect('home','refresh');
				}
			else{
				$thx='<div id="pesan">Maaf Username atau password anda salah</div>';
				$this->session->set_flashdata('message_type',$thx);
				redirect('index','refresh');
				}
			}
			}
			
		function doLogout(){
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('user_display');
		//$this->session->sess_destroy();
		redirect('index','refresh');
	}
}