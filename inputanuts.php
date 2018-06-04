<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("gb4.jpg");
background-size:cover;
}
h1 a{
color:#3E2723;
font-family:times new roman;
font-size:35;
}
h3 a{
color:#3E2723;
font-family:times new roman;
font-size:35;	
}
</style>
</head>
<body>
<br><br><br><br><br><br><br><br><center><h1><a href='utsforminput.php'>Masukkan terlebih dahulu datanya</a></h1></center>";
<center><br><h3><a href='outputanuts.php'>tampilkan tabel sewa kamar </a></h3><br><center>";
</body>
</html>
<?php
	$db =  new mysqli("localhost","root","","sistemhotel");
	
	if(isset($_POST['add'])){
	$id_pelanggan = $_POST['id_pelanggan'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$no_hp = $_POST['no_hp'];
	$class_kamar_pesanan = $_POST['class_kamar_pesanan'];
	$check_in = $_POST['check_in'];
	$check_out = $_POST['check_out'];
	$status_kamar = $_POST['status_kamar'];
	$total_biaya = $_POST['total_biaya'];
	$informasi_sisa_waktu = $_POST['informasi_sisa_waktu'];

	$sql = "INSERT INTO sewakamar VALUES ('$id_pelanggan','$nama','$alamat','$jenis_kelamin','$no_hp','$class_kamar_pesanan','$check_in','$check_out','$status_kamar','$total_biaya','$informasi_sisa_waktu')";
	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Data berhasil di masukkan </h1></center>";
		//echo "<center><br><h3><a href='output.php'>tampilkan tabel data customer </a></h3><br><center>";
	}else{
		echo "<center><h1>Data gagal di masukkan</h1></center>".$db->error;
	}
	}
	//echo "<center><h3><a href='/prpl/'> goto Menu</a> / <a href='forminput.php'>Masukkan terlebih dahulu datanya</a></h3></center>";
?>