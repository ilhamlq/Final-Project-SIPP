<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
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

	<div class="container-fluid" id="admin-lowongan">
		<div class="row">
			<div class="col-md-2" id="side-kiri-admin-lowongan">
				<ul class="nav nav-pills nav-stacked" role="tablist">
				     <li class="active"><a href="ahalamanadmin.html"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User Perusahaan</a></li>
				    <ul class="dropdown-menu" role="menu">                      
      				</ul>
				    <li><a href="adatapelamar.html "><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Data Pelamar</a></li>
				    <li><a href="alowongan.html"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Daftar Lowongan</a></li>
				     <li><a href="apenilaian.html"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Penilaian</a></li>
				</ul>				
			</div>
				
				<div class="col-md-8" id="form-lowongan">
					<h1>Lowongan Perusahaan</h1>
					<a href="atambahlowongan.html" id="tambah-lowongan-kanan"  class="btn btn-primary">Tambah lowongan</a><br>
					 <table class="table table-bordered" id="tabel-lowongan">
					    <thead>
					      <tr>
					        <th>No</th>
					        <th>ID lowongan</th>
					        <th>ID HRD</th>
					        <th>Jabatan</th>
					        <th>Status</th>
					        <th>Proses</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>1</td>
					        <td>111</td>
					        <td>8912</td>
					        <td>IT Support</td>
					        <td>Dibuka</td>
					        <td>
								<a href="adetaillowongan.html" class="btn btn-sm btn-info">View Detail</a>
								<a href="aeditlowongan.html" class="btn btn-sm btn-warning">Edit</a>
								<a class="btn btn-sm btn-danger" id="hapus">Delete</a>

					        </td>
					      </tr>
					      <tr>
					        <td>2</td>
					        <td>222</td>
					        <td>8913</td>
					        <td>Sales</td>
					        <td>Dibuka</td>
					        <td>
					        	<a href="adetaillowongan.html" class="btn btn-sm btn-info">View Detail</a>
								<a href="aeditlowongan.html" class="btn btn-sm btn-warning">Edit</a>
								<a class="btn btn-sm btn-danger" id="hapus">Delete</a>

					        </td>
					      </tr>
					     <tr>
					        <td>1</td>
					        <td>333</td>
					        <td>8914</td>
					        <td>Resepsionis</td>
					        <td>Dibuka</td>
					        <td>
					        	<a href="adetaillowongan.html" class="btn btn-sm btn-info">View Detail</a>
								<a href="aeditlowongan.html" class="btn btn-sm btn-warning">Edit</a>
								<a class="btn btn-sm btn-danger" id="hapus">Delete</a>
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
		if(confirm('Hapus Daftar Lowongan?')) {
			return true;
		}
		return false;
	});
});
	</script>
</body>
</html>