<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Komen extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

	$this->load->library('session');
	$this->load->model('Register_model');
	}

	function index()
	{
	$data['slide_view2'] = "viewRegister.php";
	$this->form_validation->set_rules('nama', 'Name', 'required');
	$this->form_validation->set_rules('alamat', 'Address', 'required');
	$this->form_validation->set_rules('email', 'E Mail', 'required');
	$this->form_validation->set_rules('komen', 'Komen', 'required');

		if ($this->form_validation->run() == FALSE){
		
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
		}
			
		$data['title'] = 'komen';
		$data['usernama'] = $this->session->userdata('user_display');
		$data['main_view'] = 'indexKomen.php';
		$data['user'] = $this->session->userdata('username');
		$this->load->view('index.php',$data);
		}
		
		else
		{
		// code buat simpan data
		$data=array('nama'=>$this->input->post('nama'),
					'email'=>$this->input->post('email'),
					'alamat'=>$this->input->post('alamat'),
					'komen'=>$this->input->post('komen')
					);
		$this->Komen_model->addKomen($data);
		redirect('komen');
		}
	}
	
/*	function register_process()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('user_display', 'user_display', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('alamat', 'Address', 'required');
		$this->form_validation->set_rules('email', 'E Mail', 'required');

		if ($this->form_validation->run() == FALSE){
			$data['title'] = 'Register';
			$this->load->view('index',$data);
			}
		else{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password')
			$name = $this->input->post('name')
			$alamat= $this->input->post('alamat')
			$user_dislpay = $this->input->post('user_display')
			$email= $this->input->post('email')
			);
			$data['nama']=$this->db->get('tb_user');
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$this->db->where('name',$name);
			$this->db->where('alamat',$alamat);
			$this->db->where('user_display',$user_display);
			$this->db->where('email',$email);
			$res = $this->db->get('tb_user')->result();
			
			if (count($res) > 0){
				$this->session->set_userdata('no_user',$res[0]->no_user );
				$this->session->set_userdata('user_display',$res[0]->user_display );
				redirect('home','refresh');
				}
			else{
				$thx='<div id="pesan">Maaf Username atau password anda salah</div>';
				$this->session->set_flashdata('message_type',$thx);
				redirect('index','refresh');
				}
			}
			}*/
			
		function doLogout(){
		$this->session->unset_userdata('no_user');
		$this->session->unset_userdata('user_display');
		//$this->session->sess_destroy();
		redirect('index','refresh');
	}
}