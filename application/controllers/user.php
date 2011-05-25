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


	$data['username'] = $this->session->userdata('username');
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
/*	else
	{
	$data=array('nama_pemilik'=>$this->input->post('nama'),
					'jenis_kend'=>$this->input->post('type'),
					'merk_kend'=>$this->input->post('merk'),
					'no_polisi'=>$this->input->post('nopol')
					);
		$this->Adm_model->addAdm($data);
		redirect('administrasi');
		
	}*/
}
		

