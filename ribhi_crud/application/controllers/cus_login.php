<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class cus_login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('logincus');
	}
 
	function aksi_login(){
		$id_customer = $this->input->post('id_customer');
		$password = $this->input->post('password');
		$where = array(
			'id_customer' => $id_customer,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("customer",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'id_customer' => $id_customer,
				'status' => "customer"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("pelanggan"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */