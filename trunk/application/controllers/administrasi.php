<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrasi extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

	$this->load->library('session');
	$this->load->model('Adm_model');
	
	}

function index()
{
	$this->form_validation->set_rules('type', 'Type', 'required');
	$this->form_validation->set_rules('nopol', 'Nomor Polisi', 'required');

	
//int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] );


	if ($this->form_validation->run() == FALSE)
		{

	$data['out'] = $this->session->userdata('jam_masuk');
	$data['username'] = $this->session->userdata('username');
	$data['username'] = $this->session->userdata('username');
	$data['query'] = $this->Adm_model->getAdm('list',FALSE);		//$per_page,$offset
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
	$data['main_view'] = "home.php";
	}
			
	else
	{
			//menampilkan halaman login
	$data['slide_view'] = "login.php";
	$data['menu'] = "menu.php";
	
	//$data['user'] = $this->session->userdata('username');
	}
		
	$data['title'] = 'administrasi';
	$data['usernama'] = $this->session->userdata('user_display');
	$data['main_view'] = 'indexAdm.php';
	$data['menu'] = "menuAdmin.php";
	$data['slide_view'] = "logout.php";
	$data['data'] = 'Vuser.php';
	$this->load->view('index.php',$data);

	}
	else
	{
	
    $timeZone = 'Asia/jakarta';  // +2 hours
    date_default_timezone_set($timeZone);
   
    $dateSrc = 'GMT+7:00';
    $dateTime = new DateTime($dateSrc);
   
    //echo 'date(): '.date('H:i:s', strtotime($dateSrc));
    // correct! date(): 14:50:00
   
    echo ''.$dateTime->format('H:i:s');
    // INCORRECT! DateTime::format(): 12:50:00 
	
	$data=array('nopol'=>$this->input->post('nopol'),
				'jam_masuk'=>$dateTime->format('H:i:s'),
					'type'=>$this->input->post('type')
					);
		$this->Adm_model->addAdm($data);
		redirect('administrasi');
		
	}
}
	function out()
	{
	$data['query'] = $this->Adm_model->getAdm('list',FALSE);
	$hour_one = /*$this->db->where('jam_masuk',$id)*/;
	$hour_two =$TimeOut /*$this->db->where('jam_keluar',$id)*/;
	$h =  strtotime($hour_one);
	$h2 = strtotime($hour_two);

	$minute = date("i", $h2);
	$second = date("s", $h2);
	$hour = date("H", $h2);

	$convert = strtotime("+$minute minutes", $h);
	$convert = strtotime("+$second seconds", $convert);
	$convert = strtotime("+$hour hours", $convert);
	$new_time = date('H:i:s', $convert);

	//echo $new_time;
	$start_date = strtotime($dateSrc);
	$end_date = strtotime("20:00:00");
	$ajavahe = $end_date - $start_date;
	$time_between = gmstrftime('%H: %M: %S:', $ajavahe);
	
	
	$id_parkir = $this->uri->segment(3);
	$timeZone = 'Asia/jakarta';  // +2 hours
    date_default_timezone_set($timeZone);
   
    $dateSrc = 'GMT+7:00';
   	$TimeOut = new DateTime($dateSrc);
   
   //echo 'date(): '.date('H:i:s', strtotime($dateSrc));
    // correct! date(): 14:50:00
   
   echo ''.$TimeOut->format('H:i:s');
   //if(!empty $data('out') and ('cek');
	$data=array('jam_keluar'=>$TimeOut->format('H:i:s'),
				'lama_parkir'=>$new_time);
	$this->Adm_model->editAdm($id_parkir,$data);
		redirect('administrasi');
    // INCORRECT! DateTime::format(): 12:50:00 
	
	}	
}
