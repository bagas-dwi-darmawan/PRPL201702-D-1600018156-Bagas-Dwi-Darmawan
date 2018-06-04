<?php
	$db =  new mysqli("localhost","root","","sistemhotel");
	$sql = "create table pegawai (id_pegawai varchar(11) not null primary key,nama_pegawai varchar(20) not null,jabatan varchar(10) not null, jenis_kelamin varchar(20) not null)";

	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Tabel berhasil dibuat</h1></center>";
	}else{
		echo "<center><h1>Tabel gagal dibuat</h1></center>".$db->error;
	}
	echo "<center><h3><a href='/prpl/'> goto Menu</a></center>";
?>