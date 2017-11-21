<?php 
/**
* 
*/
class layanan extends CI_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('layanan_model');
	}


function index()
{
$data['data_layanan']=$this->layanan_model->ambil_data();
$this->load->view('layanan/layanan',$data);
}
function lihat($id)
	{
		$data['data_layanan']=$this->layanan_model->ambil_data_idd($id);
		$this->load->view('layanan/layanan',$data);
	}
public function tambah()
		{
			$data=array(
				'action' 	=> site_url('layanan/tambah_aksi'),
				'id_layanan'	=> set_value('id_layanan'),
				'kendaraan_layanan'	=> set_value('kendaraan_layanan'),
				'keterangan_layanan'	=> set_value('keterangan_layanan'),
			
				'button'	=>'Tambah'
				);

			$this->load->view('layanan/layanan_form',$data);
		}
			function tambah_aksi()
		{
			$data=array(
			'id_layanan'		=> $this->input->post('id_layanan'),
			'kendaraan_layanan'		=> $this->input->post('kendaraan_layanan'),
			'keterangan_layanan'		=> $this->input->post('keterangan_layanan')
			);
			$this->layanan_model->tambah_data($data);
			redirect(site_url('layanan'));
		}
			public function delete($id)
		{
			$this->layanan_model->hapus_data($id);
			redirect(site_url('layanan'));
		}
		function edit($id)
		{
			$mhs=$this->layanan_model->ambil_data_id($id);
			$data=array(
			'id_layanan'		=> set_value('id_layanan',$mhs->id_layanan),
			'kendaraan_layanan'		=> set_value('kendaraan_layanan',$mhs->kendaraan_layanan),
			'keterangan_layanan'	=> set_value('keterangan_layanan',$mhs->keterangan_layanan),
			
			'action' 	=> site_url('layanan/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('layanan/layanan_form',$data);
		}	
		function edit_aksi()
		{
			$data=array(
			'kendaraan_layanan'		=> $this->input->post('kendaraan_layanan'),
			'keterangan_layanan'		=> $this->input->post('keterangan_layanan')
			);
			$id=$this->input->post('id_layanan');
			$this->layanan_model->edit_data($id,$data);
			redirect(site_url('layanan'));
		}

}




 ?>