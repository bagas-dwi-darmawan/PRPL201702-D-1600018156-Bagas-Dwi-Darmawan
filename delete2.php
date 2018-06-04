<html>
<head><title></title></head>
<style type="text/css">
body{
background-image:url("air.jpg");
background-size:cover;
}
h2 a{
color:white;
font-family:times new roman;
font-size:35;
}
</style>
<body>
<center><br><br><h2><td><a href='output2.php'> tampilkan kembali tabel</a><br></h2></center>;
<center><h2><a href='/prpl/'> goto Menu</a></h2></center>;
</body>
</html>
<?php
	$db =  new mysqli("localhost","root","","sistemhotel");
	$id_pegawai = @$_GET['id_pegawai'];
	$sql = "DELETE from pegawai where id_pegawai='$id_pegawai' ";

	$query = $db->query($sql);
	if($query){
		echo "<br><br><br><center><h1>delete success </h1></center></br></br></br>";
	}else{
		echo "<center><h1>delete failed </h1></center>".$db->error;
	}
	
	//echo "<center><h2><td><a href='output2.php'> tampilkan kembali tabel</a><br></h2></center>";
	//echo "<center><h2><a href='/prpl/'> goto Menu</a></h2></center>";
?>