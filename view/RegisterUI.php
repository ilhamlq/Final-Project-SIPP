<?php 
require_once 'View.php';
/**
* 
*/
class RegisterUI extends View
{
	
	public function setRegister(){
		include_once 'controller/Register.php';
		include_once 'pages/register.php';
		$bm = new Register();
		$data = $bm->setPengguna();
		
		$this->end();
	}

}
 ?>