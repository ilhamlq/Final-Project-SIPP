<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/tes.css">
	<title>
		SISTEM INFORMASI PENERIMAAN PEGAWAI
	</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row"> 
			<div class="col-md-12" id="atas">
				<p><a href="ahalamanadmin.html">Beranda</a></p>
				<a href="halamanloginhrd.html"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</a>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" id="navigasi">
				<img src="img/untan.png">
				<h1>SISTEM INFORMASI
				<br>PENERIMAAN PEGAWAI</h1>
			</div>
		</div>
	</div>

	<div class="container-fluid" id="halamanadmin">
		<div class="row">
			<div class="col-md-2" id="side-kiri-admin-halamanadmin">
				<ul class="nav nav-pills nav-stacked" role="tablist">
				    <li class="active"><a href="ahalamanadmin.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User Perusahaan</a></li>
				    <ul class="dropdown-menu" role="menu">                      
      				</ul>
				    <li><a href="adatapelamar.html "><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Data Pelamar</a></li>
				    <li><a href="alowongan.html"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Daftar Lowongan</a></li>
				     <li><a href="apenilaian.html"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Penilaian</a></li>
				</ul>				
			</div>

			<div class="col-md-10" id="side-kiri-kanan">
				<div class="col-md-10" id="userperusahaan">
					<h1>Daftar User</h1>
					<button type="submit" class="btn btn-primary" id="tambah-kanan"><a href="atambahuser.html"><p>Tambah user</p></a></button>
					 <table class="table table-bordered" id="tabeluser">
					    <thead>
					      <tr>
					        <th>No</th>
					        <th>Nama Lengkap</th>
					        <th>Username</th>
					        <th>Password</th>
					        <th>Proses</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>1</td>
					        <td>Budi Redo</td>
					        <td>budi11</td>
					        <td>budiamin</td>
					        <td>
					        	<a href="adetailuserperusahaan.html" class="btn btn-info">View Detail</a>
					        	<a href="aeditadmin.html" class="btn btn-warning">Edit</a>
					        	<a id="hapus" class="btn btn-danger">Delete</a>
					        </td>
					        </td>
					      </tr>
					      <tr>
					        <td>2</td>
					        <td>Agus Koto</td>
					        <td>agus22</td>
					        <td>agusoke</td>
					        <td>
					        	<a href="adetailuserperusahaan.html" class="btn btn-info">View Detail</a>
					        	<a href="aeditadmin.html" class="btn btn-warning">Edit</a>
					        	<a id="hapus" class="btn btn-danger">Delete</a>
					        </td>
					        </td>
					      </tr>
					      <tr>
					        <td>3</td>
					        <td>Ida Sasa</td>
					        <td>ida333</td>
					        <td>idantap</td>
					        <td>
					        	<a href="adetailuserperusahaan.html" class="btn btn-info">View Detail</a>
					        	<a href="aeditadmin.html" class="btn btn-warning">Edit</a>
					        	<a id="hapus" class="btn btn-danger">Delete</a>
					        </td>
					      </tr>
					      
					    </tbody>
					  </table>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid" id="footer"> 
		<div class="col-md-12">
			&copy; Kelompok 13 
			<p>Jln. Prof. Dr. H. Hadari Nawawi | Phone: +6255555555, Fax: (0256781237</p>
		</div>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>

	$(function(){
	$('a#hapus').click(function(){
		if(confirm('Hapus user?')) {
			return true;
		}
		return false;
	});
});
	</script>
</body>
</html>