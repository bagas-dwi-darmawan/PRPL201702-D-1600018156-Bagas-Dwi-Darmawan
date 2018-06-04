<?php
	$db =  new mysqli("localhost","root","","sistemhotel");
	$sql = "create table reservasi (id_pelanggan varchar(11) not null primary key,nama varchar(20) not null, alamat varchar(10) not null,jenis_kelamin varchar(10) not null, no_hp varchar(20) not null, class_kamar_pesanan varchar(30) not null,check_in varchar(10)not null,check_out varchar(10)not null)";

	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Tabel berhasil dibuat</h1></center>";
	}else{
		echo "<center><h1>Tabel gagal dibuat</h1></center>".$db->error;
	}
	echo "<center><h3><a href='/prpl/'> goto Menu</a></center>";
?>