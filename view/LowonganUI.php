<?php 
require_once 'View.php';
/**
* 
*/
class LowonganUI extends View
{
	
	public function tampilLowongan()
	{
		include_once 'model/Lowongan.php';
		$brt = new Lowongan();
		$isi_lowongan = $brt->ambilLowongan();
		include_once 'pages/lowongan.php';
		$this->end();
	}
	

}
 ?>