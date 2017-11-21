<?php 
/**
* 
*/
class customer extends CI_controller
{
	
	function __construct()
	{
	parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('customer_model');
	}


function index()
{
$data['data_customer']=$this->customer_model->ambil_data();
$this->load->view('customer/customer',$data);
}
function lihat($id)
	{
		$data['data_customer']=$this->customer_model->ambil_data_idd($id);
		$this->load->view('customer/customer',$data);
	}

public function tambah()
		{
			$data=array(
				'action' 	=> site_url('customer/tambah_aksi'),
				'id_customer'	=> set_value('id_customer'),
				'nama_customer'	=> set_value('nama_customer'),
				'password'	=> set_value('password'),
				'nohp'	=> set_value('nohp'),
				'button'	=>'Tambah'
				);

			$this->load->view('customer/customer_form',$data);
		}
			function tambah_aksi()
		{
			$data=array(
			'id_customer'		=> $this->input->post('id_customer'),
			'nama_customer'		=> $this->input->post('nama_customer'),
			'password'		=> $this->input->post('password'),
			'nohp'	=> $this->input->post('nohp')
			);
			$this->customer_model->tambah_data($data);
			redirect(site_url('customer'));
		}
			public function delete($id)
		{
			$this->customer_model->hapus_data($id);
			redirect(site_url('customer'));
		}
		function edit($id)
		{
			$mhs=$this->customer_model->ambil_data_id($id);
			$data=array(
			'id_customer'		=> set_value('id_customer',$mhs->id_customer),
			'nama_customer'		=> set_value('nama_customer',$mhs->nama_customer),
			'password'	=> set_value('password',$mhs->password),
			'nohp'	=> set_value('nohp',$mhs->nohp),
			'action' 	=> site_url('customer/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('customer/customer_form',$data);
		}	
		function edit_aksi()
		{
			$data=array(
			'nama_customer'		=> $this->input->post('nama_customer'),
			'password'		=> $this->input->post('password'),
			'nohp'	=> $this->input->post('nohp')
			);
			$id=$this->input->post('id_customer');
			$this->customer_model->edit_data($id,$data);
			redirect(site_url('customer'));
		}

}




 ?>