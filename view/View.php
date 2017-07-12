<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;
	public $register;

	function __construct()
	{
		include_once 'template/register/navigasi.php';
		include_once 'template/register/header.php';
		// include_once 'content.php';
		
	}

	// protected function end()
	// {
	// 	include 'template/footer.php';
	// }
	
}


 ?>