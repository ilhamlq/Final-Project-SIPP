<?php 
ini_set("memory_limit","2000");
/**
*   
*/
include 'Controller.php';
class Register extends Controller
{
	
	public function setPengguna()
	{
		include_once 'model/Register.php';
		$mregister = new Register();
		
			// if (isset($_POST[''])) {

		$username = $_POST['username'];
		$password = $_POST ['password'];
		$nama_lengkap = $_POST['nama_lengkap'];
		$email = $_POST['email'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST ['alamat'];	
		$pesan = $mregister->setPengguna( $username, $password, $nama_lengkap, $email, $tanggal_lahir, $jenis_kelamin, $no_hp, $alamat);
		return $pesan;
	// }
	}
	
}
	
 ?>