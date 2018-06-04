<html><head><title>Data customer</title>
<style type="text/css">
body{
background-image:url("gb6.jpg");
background-size:cover;
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
		<li><a href="output.php">Data tamu & filter</a></li>
	</ul>
<center>
<table border="5px">
<?php
$conn = @mysql_connect("localhost","root","");
if (!$conn) {
    echo "tidak dapat terhubung dengan database " . mysql_error();
    exit;
}
if (!mysql_select_db("sistemhotel")) {
    echo "database tidak tersedia " . mysql_error();
    exit;
}
$sql = "SELECT id_pelanggan, nama from reservasi where class_kamar_pesanan like '%single room' ";
$result = mysql_query($sql);
if (!$result) {
    echo "tidak berhasil menjalankan query ($sql) dari database " . mysql_error();
    exit;
}
if (mysql_num_rows($result) == 0) {
    echo "tidak ada baris yang di temukan";
    exit;
}
echo"<h1>Laporan data reservasi yang menyewa kamar single room : </h1>";
echo"<hr>";
echo "<tr bgcolor='#CCCCCC'><td><center>No</center></td><td><center>id_pelanggan</center></td><td><center>nama_pelanggan</center></td>";
$no=1;
while ($row = mysql_fetch_assoc($result)) {
	echo"<tr>";
	echo "<td>".$no++."</td>";
	echo "<td>".$row["id_pelanggan"]."</td>";
	echo "<td>".$row["nama"]."</td>";
	echo"</tr>";
}
mysql_free_result($result);
?>
</table>
<br><br>;
<table border="5px">
<?php
$sql = "SELECT id_pelanggan, nama from reservasi where class_kamar_pesanan like '%double room' ";
$sultre = mysql_query($sql);
if (!$sultre) {
    echo "tidak berhasil menjalankan query ($sql) dari database " . mysql_error();
    exit;
}
if (mysql_num_rows($sultre) == 0) {
    echo "tidak ada baris yang di temukan";
    exit;
}
echo"<hr>";
echo"<h1>Laporan data reservasi yang menyewa kamar double room : </h1>";
echo"<hr>";
echo "<tr bgcolor='#CCCCCC'><td><center>No</center></td><td><center>id_pelanggan</center></td><td><center>nama_pelanggan</center></td>";
$no=1;
while ($row = mysql_fetch_assoc($sultre)) {
	echo"<tr>";
	echo "<td>".$no++."</td>";
	echo "<td>".$row["id_pelanggan"]."</td>";
	echo "<td>".$row["nama"]."</td>";
	echo"</tr>";
}
mysql_free_result($sultre);
?>
</table>
<br><br>;
<table border="5px">
<?php
$sql = "SELECT id_pelanggan, nama from reservasi where class_kamar_pesanan like '%suite room' ";
$sultre = mysql_query($sql);
if (!$sultre) {
    echo "tidak berhasil menjalankan query ($sql) dari database " . mysql_error();
    exit;
}
if (mysql_num_rows($sultre) == 0) {
    echo "tidak ada baris yang di temukan";
    exit;
}
echo"<hr>";
echo"<h1>Laporan data reservasi yang menyewa kamar suite room : </h1>";
echo"<hr>";
echo "<tr bgcolor='#CCCCCC'><td><center>No</center></td><td><center>id_pelanggan</center></td><td><center>nama_pelanggan</center></td>";
$no=1;
while ($row = mysql_fetch_assoc($sultre)) {
	echo"<tr>";
	echo "<td>".$no++."</td>";
	echo "<td>".$row["id_pelanggan"]."</td>";
	echo "<td>".$row["nama"]."</td>";
	echo"</tr>";
}
mysql_free_result($sultre);
?>
</table>
</center>
</body>
</html>