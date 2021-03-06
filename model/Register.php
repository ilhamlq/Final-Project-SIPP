<?php     
/**
* 
*/

include_once 'Model.php';
class Pengguna extends Model
{
	public $id_pengguna;
	public $username;
	private $password;
	public $nama_lengkap;
	public $email;
	public $tanggal_lahir;
	public $jenis_kelamin;
	public $no_hp;
	public $alamat;
	
	public function inputPengguna($username, $password, $nama_lengkap, $email, $tanggal_lahir, $jenis_kelamin, $no_hp,$alamat){
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO pengguna(username, password, nama_lengkap, email, tanggal_lahir, jenis_kelamin, no_hp,alamat) VALUES(:username, :password, :nama_lengkap, :email, :tanggal_lahir, :jenis_kelamin, :no_hp,:alamat)");

		   $stmt->bindparam(":username",$username);
		   $stmt->bindparam(":password",$password);
		   $stmt->bindparam(":nama_lengkap",$nama_lengkap);
		   $stmt->bindparam(":email",$email);
		   $stmt->bindparam(":tanggal_lahir",$tanggal_lahir);
		   $stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
		   $stmt->bindparam(":no_hp",$no_hp);
		   $stmt->bindparam(":alamat",$alamat);          
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}

}




 ?>