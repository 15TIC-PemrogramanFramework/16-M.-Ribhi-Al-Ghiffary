<?php 
/**
* 
*/
class bisnis extends CI_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('bisnis_model');
	}


function index()
{
$data['data_bisnis']=$this->bisnis_model->ambil_data();
$this->load->view('bisnis/bisnis',$data);
}


public function tambah()
		{
			$data=array(
				'action' 	=> site_url('bisnis/tambah_aksi'),
				'id_bisnis'		=> set_value('id_bisnis'),
				'id_customer'	=> set_value('id_customer'),
				'id_layanan'	=> set_value('id_layanan'),
				'tanggal_transaksi'	=> set_value('tanggal_transaksi'),
				'biaya'	=> set_value('biaya'),
				'keterangan'		=> set_value('keterangan'),
				'button'	=>'Tambah'
				);

			$this->load->view('bisnis/bisnis_form',$data);
		}
			function tambah_aksi()
		{
			$data=array(
			'id_bisnis'		=> $this->input->post('id_bisnis'),
			'id_customer'		=> $this->input->post('id_customer'),
			'id_layanan'		=> $this->input->post('id_layanan'),
			'tanggal_transaksi'		=> $this->input->post('tanggal_transaksi'),
			'biaya'		=> $this->input->post('biaya'),
	
			'keterangan'	=> $this->input->post('keterangan')
			);
			$this->bisnis_model->tambah_data($data);
			redirect(site_url('bisnis'));
		}
			public function delete($id)
		{
			$this->bisnis_model->hapus_data($id);
			redirect(site_url('bisnis'));
		}
		function edit($id)
		{
			$mhs=$this->bisnis_model->ambil_data_id($id);
			$data=array(
			'id_bisnis'		=> set_value('id_bisnis',$mhs->id_bisnis),
			'id_customer'		=> set_value('id_customer',$mhs->id_customer),
			'id_layanan'	=> set_value('id_layanan',$mhs->id_layanan),
			'tanggal_transaksi'	=> set_value('tanggal_transaksi',$mhs->tanggal_transaksi),
			'biaya'	=> set_value('biaya',$mhs->biaya),
			'keterangan'	=> set_value('keterangan',$mhs->keterangan),
			'action' 	=> site_url('bisnis/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('bisnis/bisnis_form',$data);
		}	
		function edit_aksi()
		{
			$data=array(
			'id_customer'		=> $this->input->post('id_customer'),
			'id_layanan'		=> $this->input->post('id_layanan'),
			'tanggal_transaksi'		=> $this->input->post('tanggal_transaksi'),
			'biaya'		=> $this->input->post('biaya'),
				'keterangan'	=> $this->input->post('keterangan')
			);
			$id=$this->input->post('id_bisnis');
			$this->bisnis_model->edit_data($id,$data);
			redirect(site_url('bisnis'));
		}


}




 ?>