
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("gb6.jpg");
background-size:cover;
}
h1{
color:#3E2723;
font-family:times new roman;
font-size:55px;
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
font-size:24;
color:#FFB74D;
display:block;
}
li a:hover{
background-color:#FFF8E1;
}
hr{
width:100%;
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
	</ul></br>
	<center>
	<h1>RESERVASI</h1>
	<hr>
	<form action="inputan.php" method="post">
  		<table cellpadding="3" cellspacing="0" border="6">
   		<tr>
    		<td>id_pelanggan</td>
    		<td>:</td>
    		<td><input type="number" name="id_pelanggan" placeholder="id member" required></td>
   		</tr>
   		<tr>
    		<td>nama</td>
    		<td>:</td>
    		<td><input type="text" name="nama" placeholder="nama lengkap" required></td>
   		</tr>
   		<tr>
    		<td>alamat</td>
    		<td>:</td>
    		<td><input type="text" name="alamat" placeholder="alamat tinggal" required></td>
   		</tr>
		<tr>
    		<td>jenis_kelamin</td>
    		<td>:</td>
    		<td><input type="radio" name="jenis_kelamin" value="laki-laki" checked=\>laki - laki</br>
				<input type="radio" name="jenis_kelamin" value="perempuan" checked=\>perempuan</td>
   		</tr>
		<tr>
    		<td>no_hp</td>
    		<td>:</td>
    		<td><input type="number" name="no_hp" placeholder="+62**" required></td>
   		</tr>
		<tr>
    		<td>class_kamar_pesanan</td>
    		<td>:</td>
    		<td><input type="radio" name="class_kamar_pesanan" value="single room" checked=\>single room</br>
				<input type="radio" name="class_kamar_pesanan" value="double room" checked=\>double room</br>
				<input type="radio" name="class_kamar_pesanan" value="suite room" checked=\>suite room</td>
		</tr>
		<tr>
    		<td>check_in</td>
    		<td>:</td>
    		<td><input type="date" name="check_in" required></td>
   		</tr>
		<tr>
    		<td>check_out</td>
    		<td>:</td>
    		<td><input type="date" name="check_out" required></td>
   		</tr>
   		<tr>
    		<td>&nbsp;</td>
    		<td></td>
    		<td><input type="submit" name="add" value="Booking">	<input type="reset" value="Cancel"></td>
   		</tr>
  		</table>
 	</form>
	</center>
</body>
</html>