<?php 
/**
* 
*/
include 'Controller.php';
class Register extends Controller
{
	
	public function setPengguna()
	{
		include 'model/Register.php';
		$mregister = new Register();
		$id_pengguna = $_POST['id_pengguna'];
		$username = $_POST['username'];
		$password = $_POST ['password'];
		$nama_lengkap = $_POST ['nama_lengkap'];
		$email = $_POST['email'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST ['alamat'];	
		$pesan = $mregister->setPengguna($id_pengguna, $username, $password, $nama_lengkap, $email, $tanggal_lahir, $jenis_kelamin, $no_hp, $alamat);
		return $pesan;
	}
	
}
	
 ?>