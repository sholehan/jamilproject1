<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

	$this->load->library('session');
	$this->load->model('User_model');
	
	}

function index()
{
	/*$this->form_validation->set_rules('nama', 'Name', 'required');
	$this->form_validation->set_rules('type', 'Vehicle Type', 'required');
	$this->form_validation->set_rules('merk', 'Brand Vehicles', 'required');
	$this->form_validation->set_rules('nopol', 'Police Numbers', 'required');

		if ($this->form_validation->run() == FALSE)
		{*/


	$data['status'] = $this->session->userdata('status');
	$data['username'] = $this->session->userdata('username');
	$data['query'] = $this->User_model->getUser('list',FALSE);		//$per_page,$offset
	//$data['urutan']$this->uri->segment(3);
	
	//$config['base_url']=$this->config->site_url().'/mahasiswa/index';
	//$config['total_rows']=$this->db->count_all('tb_mahasiswa');
	//	$config['per_page']=2;
	//		$offset=$this->uri->segment(3);
	//$this->pagination->initialize($config)
	//	$this->load->view('index',$data);
	
	if (!empty($data['username']))
	{
			
			//menampilkan update view
	$data['slide_view'] = "logout.php";
	$data['menu'] = "menuAdmin.php";
	$data['main_view'] = "Vuser.php";
	$data['slide_view2'] = "viewRegister.php";
	//$data['slide_view3'] = "viewkomen.php";

	
	}
	elseif (!empty($data['status']))
	{
	$data['slide_view'] = "logout.php";
	$data['menu'] = "menuAdmin.php";
	$data['main_view'] = "Vadmin.php";
	$data['slide_view2'] = "viewRegister.php";
	
	}	
	else
	{
			//menampilkan halaman login
	$data['slide_view'] = "login.php";
	$data['menu'] = "menu.php";
	
	//$data['user'] = $this->session->userdata('username');
	}
		
	$data['title'] = 'user';
	$data['usernama'] = $this->session->userdata('user_display');
	$data['menu'] = "menuAdmin.php";
	$data['slide_view'] = "logout.php";
	$data['user'] = $this->session->userdata('username');
	$this->load->view('index.php',$data);

	}
function edit()
	{
		$this->form_validation->set_rules('nama', 'Name', 'required'); //harus diisi 
		$this->form_validation->set_rules('username', 'Username', 'required'); //harus diisi 
		$this->form_validation->set_rules('user_display', 'User Display', 'required'); //harus diisi
		$this->form_validation->set_rules('password', 'Passsord', 'required'); //harus diisi
		$this->form_validation->set_rules('alamat', 'Alamat', 'required'); //harus diisi
		$this->form_validation->set_rules('email', 'E Mail', 'required'); //harus diisi

		if ($this->form_validation->run() == FALSE)
		{
		$data['menu'] = "menuAdmin.php";
		$data['slide_view'] = "logout.php";
		$data['slide_view2'] = "viewRegister.php";
		$data['usernama'] = $this->session->userdata('user_display');

			$id = $this->uri->segment(3); // ndapetin segmen ke tiga dari url diitung dr base_urlnya/url utama yaitu /parkir/
			$data['title'] = 'Edit User';// title
			$data['main_view'] = 'edit_user.php';//mendefinisikan main view nya
			$data['row'] = $this->User_model->getUser('username',$id);//ambil data dengan pemanggilan model berdasrkan username
			$this->load->view('index',$data);//load view beserta datanya
		}
		else
		{
			// di gawe array datanya
			//$data['main_view'] = "menuAdmin.php";
			$id = $this->uri->segment(3);
			$data = array ('nama' => $this->input->post('nama'),// lets post the field
						   'username' => $this->input->post('username'),	
						   'user_display' => $this->input->post('user_display'),		
						   'password' => md5($this->input->post('password')),		
   						   'email' => $this->input->post('email'),		
						   'alamat' => $this->input->post('alamat')		);
						   
			$this->User_model->editUser($id,$data); // insert data nya menggunakan model User_model
			redirect('user'); // fungsi untuk redirect url
		}
	
	
	}
	
	function delete()
	{
		$id = $this->uri->segment(3);
		$this->User_model->deleteUser($id); // delete data nya menggunakan model Mahasiswa_model sesuai username-nya
		redirect('user'); // fungsi untuk redirect url
		
	}
}
		

