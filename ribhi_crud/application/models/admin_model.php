<?php 
/**
* 
*/
class admin_model extends CI_Model
{
	
public $nama_table='admin';
public $id ='username';
public $order ='DESC';


	function __construct()
	{

			parent::__construct();
		}

		//ambil data seluruh mahasiswa

function ambil_data()
{
	$this->db->order_by($this->id,$this->order); 
	return $this->db->get($this->nama_table)->result();
}
function tambah_data($data)
		{
			return $this->db->insert($this->nama_table,$data);
		}
		function ambil_data_id($id)
		{
			$this->db->where($this->id,$id);
			return $this->db->get($this->nama_table)->row();
		}

		//Untuk menambahkan data ke table mahasiswa
	

		//Untuk menghapus data dari table mahasiswa
		function hapus_data($id)
		{
			$this->db->where($this->id,$id);
			$this->db->delete($this->nama_table);
		}

		//Untuk mengedit data table mahasiswa
		function edit_data($id,$data)
		{
			$this->db->where($this->id,$id);
			$this->db->update($this->nama_table,$data);
		}
		
}

?>