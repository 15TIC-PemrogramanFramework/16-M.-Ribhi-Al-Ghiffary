<?php 
/**
* 
*/
class pelanggan extends CI_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		if($this->session->userdata('status') != "customer"){
			redirect(base_url("c_login"));
		}
		$this->load->model('pelanggan_model');
	}


function index()
{
$data['data_pelanggan']=$this->pelanggan_model->ambil_data();
$this->load->view('pelanggan/pelanggan',$data);
}}