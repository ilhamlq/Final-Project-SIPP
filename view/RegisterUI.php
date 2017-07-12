<?php 
require_once 'View.php';
/**
* 
*/
class RegisterUI extends View
{
	
	public function tampilRegister(){
		include_once 'controller/Register.php';
		
		
		//$mregister = new Register();
	//	$data = $bm->setPengguna();
		include_once 'pages/register.php';
		$this->end();
	}

	public function inputRegister()
	{
		include_once 'controller/Register.php';

		$bregister = new Register();
		$pesan = $bregister->setPengguna();
		include_once 'pages/sukses.php';
		
		$this->end();
	}

}
 ?>