<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("air.jpg");
background-size:cover;
}
h1{
color:white;
font-family:times new roman;
font-size:70;
}
hr{
width:50%;
}
</style>
</head>
<body>
	<center>
	<h1><br><br><br><br>Masukkan Data pegawai</h1>
	<hr>
	<form action="inputan.php" method="post">
  		<table cellpadding="3" cellspacing="0" border="6">
   		<tr>
    		<td>id_pelanggan</td>
    		<td>:</td>
    		<td><input type="number" name="id_pelanggan" required></td>
   		</tr>
   		<tr>
    		<td>nama_pegawai</td>
    		<td>:</td>
    		<td><input type="text" name="nama_pegawai" required></td>
   		</tr>
   		<tr>
    		<td>jabatan</td>
    		<td>:</td>
    		<td><input type="text" name="jabatan" required></td>
   		</tr>
		<tr>
    		<td>jenis_kelamin</td>
    		<td>:</td>
    		<td><input type="text" name="jenis_kelamin" required></td>
   		</tr>
   		<tr>
    		<td>&nbsp;</td>
    		<td></td>
    		<td><input type="submit" name="add" value="Save">	<input type="reset" value="Reset"></td>
   		</tr>
  		</table>
 	</form>
	<p><h2><a href='/prpl/'> goto Menu</a></h2></p>
	</center>
</body>
</html>