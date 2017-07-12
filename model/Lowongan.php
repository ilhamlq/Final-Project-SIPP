<?php 

/**
* 
*/

include_once 'Model.php';
class Lowongan extends Model
{
	public $id_lowongan;
	public $id_hrd;
	public $jenis;
	public $jabatan;
	public $syarat;
	public $kuota;
	public $penempatan;
	public $status_lowongan;
	public $tanggal_penutupan;
	
	public function ambilLowongan()
	{
		$query = $this->db->prepare("SELECT * FROM lowongan");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}
	
	

}



 ?>