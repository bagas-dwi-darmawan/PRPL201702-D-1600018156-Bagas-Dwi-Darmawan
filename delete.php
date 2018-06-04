<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("gb6.jpg");
background-size:cover;
}
h2 a{
color:white;
font-family:times new roman;
font-size:35;
}
ul{
margin:0;
padding:0;
overflow:hidden;
background-color:#3E2723;
}
li{
list-style-type:none;
float:left;
}
li a{
padding:30px 30px;
text-decoration:none;
font-family:arial;
font-size:18;
color:#FFB74D;
display:block;
}
li a:hover{
background-color:#FFF8E1;
}
</style>
</head>
<body>
	<ul>
		<li><a href="index.html">hotel</a></li> 
		<li><a href="rooms.html">rooms & suits</a></li> 
		<li><a href="forminput.php">reservation</a></li> 
		<li><a href="activities.html">activities</a></li> 
		<li><a href="contact.html">contact</a></li>
		<li><a href="data_penyewaan_kelaskamar.php">Laporan Kamar</a></li>
		<li><a href="laporan.php">Laporan graf</a></li>
	</ul>
</body>
</html>
<?php
	$db =  new mysqli("localhost","root","","sistemhotel");
	$id_pelanggan = @$_GET['id_pelanggan'];
	$sql = "DELETE from reservasi where id_pelanggan='$id_pelanggan' ";

	$query = $db->query($sql);
	if($query){
		echo "<br><br><br><center><h1>Delete Success </h1></center></br></br></br>";
		echo"<center><h2><td><a href='output.php'> tampilkan kembali tabel</a><br></h2></center>";
		echo"<center><h2><a href='/prpl/'> goto Menu</a></h2></center>";
	}else{
		echo "<center><h1>delete failed </h1></center>".$db->error;
	}
	
	//echo "<center><h2><td><a href='output.php'> tampilkan kembali tabel</a><br></h2></center>";
	//echo "<center><h2><a href='/prpl/'> goto Menu</a></h2></center>";
?>