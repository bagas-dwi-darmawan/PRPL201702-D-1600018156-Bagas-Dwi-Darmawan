<html>
<head><title></title></head>
<style type="text/css">
body{
background-image:url("air.jpg");
background-size:cover;
}
h1{
color:white;
font-family:times new roman;
font-size:50;
}
</style>
<body>
<h1><center><br><br> Data Pegawai</center></h1>";
<hr><br>
</body>
</html>
<?php
	$db =  new mysqli("localhost","root","","sistemhotel");
	$sql = "SELECT * FROM pegawai";
	$data = $db->query($sql);
	//echo "<h1><center><br><br> Data pegawai<br></center></h1>";
	echo "<center><table border='6' cellpadding='7' cellspacing='0'></center>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>id_pegawai</center></td><td><center>nama_pegawai</center></td><td><center>jabatan</center></td><td><center>jenis_kelamin</center></td><td colspan=3><center>Aksi</center></td></tr>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['id_pegawai']."</td>";
			echo "<td>".$row['nama_pegawai']."</td>";
			echo "<td>".$row['jabatan']."</td>";
			echo "<td>".$row['jenis_kelamin']."</td>";
			echo "<td><a href='forminputan2.php?id_pegawai=".$row['id_pegawai']."'> Input </a></td>";
			echo "<td><a href='delete2.php?id_pegawai=".$row['id_pegawai']."'> Delete </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "gak ada datanya";
	}
	echo "</table>";
	echo "<h2><a href='/prpl/'><br><br> goto Menu</a></h2>";
	$db->close();
?>