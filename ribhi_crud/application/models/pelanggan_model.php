<?php 
/**
* 
*/
class pelanggan_model extends CI_Model
{
	
public $nama_table='bisnis';
public $id ='id_customer';
public $order ='DESC';


	function __construct()
	{

			parent::__construct();
		}

		//ambil data seluruh mahasiswa

function ambil_data()
{  
  $id_customer= $this->session->userdata('id_customer'); // dapatkan id user yg login
  $this->db->select('*');
  $this->db->where('id_customer', $id_customer);//
  $this->db->from('bisnis');
  $query = $this->db->get();
  return $query->result();
}		
}

?>