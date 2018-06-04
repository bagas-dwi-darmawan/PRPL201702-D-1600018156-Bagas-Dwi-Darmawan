
<html>
<head><title>transaksi pembayaran</title>
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
padding:30px 30px;;
text-decoration:none;
font-family:arial;
font-size:20;
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
	</ul></br>
<center><h1>Transaksi Pembayaran</h1></center>
<hr>
<center>
<table border="5px">
		<foRm method='POST' action="bayar.php">
			<tr>
				<td>
				check_in :
				<input type="date" id="check_in" name="check_in">
				</td>
				<td>
				check_out :
				<input type="date" id="check_out" name="check_out">
				<input type="submit" value="transaksi"></td>
			</tr></form></table></center></br></br>
	<tbody>
		<?php
				echo "<center><table border='8' cellpadding='9' cellspacing='0'></center>";
				echo "<tr bgcolor='#CCCCCC'><td><center>id_pelanggan</center></td><td><center>nama</center></td><td><center>alamat</center></td>
				<td><center>jenis_kelamin</center></td><td><center>no_hp</center></td>
				<td><center>class_kamar_pesanan</center></td><td><center>check_in</center></td><td><center>check_out</center></td></tr>";
                require('koneksi.php');
                $check_in = (isset($_POST['check_in']) ? $_POST['check_in'] : '');
                $check_out = (isset($_POST['check_out']) ? $_POST['check_out'] : '');

                  if(!$check_in == null && !$check_out == null){
                    $result = $koneksi->query("SELECT * FROM reservasi where check_in between '".$_POST['check_in']."' AND  '".$_POST['check_out']."' ORDER by id_pelanggan ASC");
                    while ($mem = mysqli_fetch_assoc($result)):

                    echo '<tr>';
                    echo '<td>'.$mem['id_pelanggan'].'</td>';
                    echo '<td>'.$mem['nama'].'</td>';
                    echo '<td>'.$mem['alamat'].'</td>';
                    echo '<td>'.$mem['jenis_kelamin'].'</td>';
                    echo '<td>'.$mem['no_hp'].'</td>';
                    echo '<td>'.$mem['class_kamar_pesanan'].'</td>';
                    echo '<td>'.$mem['check_in'].'</td>';
					echo '<td>'.$mem['check_out'].'</td>';
                    echo '</tr>';

                  endwhile;
                }else{
                  $result = $koneksi->query("SELECT * FROM reservasi");

                  while ($mem = mysqli_fetch_assoc($result)):

                  echo '<tr>';
                    echo '<td>'.$mem['id_pelanggan'].'</td>';
                    echo '<td>'.$mem['nama'].'</td>';
                    echo '<td>'.$mem['alamat'].'</td>';
                    echo '<td>'.$mem['jenis_kelamin'].'</td>';
                    echo '<td>'.$mem['no_hp'].'</td>';
                    echo '<td>'.$mem['class_kamar_pesanan'].'</td>';
                    echo '<td>'.$mem['check_in'].'</td>';
					echo '<td>'.$mem['check_out'].'</td>';
                   echo '</tr>';

                endwhile;
                }
				echo"</table>";
                /* free result set */
                $result->close();           
?>
</tbody>
</table>
<center>
<P><SCRIPT language="JavaScript">
<!--
//window.onload = function(){}
function jumlah_hari(){
	var bil1 = parseFloat(document.fform.check_in.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.fform.check_out.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil = bil2 - bil1;
	document.write("<center><h1>STRUK TRANSAKSI PENGINAPAN</h1></center>");
	document.write("<hr>");
	document.write("<center><h2>Total lamanya hari penginapan : " + hasil +" hari</h2></center>");
	document.write("<center><h2><a href='interface.html'>kembali ke home</a></h2></center>");
}
function pembayaran(){
	var VIP = parseFloat(document.fform.class_kamar_pesanan.value);
	if (isNaN (VIP))
	VIP=0.0;
	var bil1 = parseFloat(document.fform.check_in.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.fform.check_out.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil = bil2 - bil1;
	var harga = VIP * hasil;
	document.write("<center><h1>STRUK TRANSAKSI PEMBAYARAN</h1></center>");
	document.write("<hr>");
	document.write("<pre>");
	document.write("<center><h2>1. total hari penginapan : " + hasil +" hari</h2></center>");
	document.write("<center><h2>2. nominal harga kamar   :Rp. " + VIP +"</h2></center>");
	document.write("<hr>");
	document.write("<center><h2>   total pembayaran      :Rp. "+ harga +"</h2></center>");
	document.write("</pre>");
	document.write("<center><h2><a href='interface.html'>kembali ke home</a></h2></center>");
}
function fasilitas(){
	var ruangmiting = parseFloat(document.fform.ruang_miting.value);
	if (isNaN (ruangmiting))
	ruangmiting=0.0;
	var kamar = parseFloat(document.fform.harga.value);
	if (isNaN (kamar))
	kamar=0.0;
	var lamasewa = parseFloat(document.fform.hari.value);
	if (isNaN (lamasewa))
	lamasewa=0.0;
	var id_pel = parseFloat(document.fform.id.value);
	if (isNaN (id_pel))
	id_pel=0.0;
	var seluruh = ruangmiting * lamasewa;
	var fasilitas = seluruh + kamar;
	document.write("<center><h1>STRUK TRANSAKSI PENGGUNAAN FASILITAS HOTEL</h1></center>");
	document.write("<hr>");
	document.write("<pre>");
	document.write("<center><h2>1. Identitas Pelanggan                 : "+id_pel +"</h2></center>");
	document.write("<center><h2>2. Harga ruang_miting                           : Rp. "+ ruangmiting +"</h2></center>");
	document.write("<center><h2>3. Lama peminjamanan fasilitas ruang_miting : "+ lamasewa +" hari</h2></center>");
	document.write("<center><h2>4. Harga kamar yang di sewa                     : Rp. "+ kamar +"</h2></center>");
	document.write("<center><h2><hr></h2></center>");
	document.write("<center><h2>                   Total pembayaran keseluruhan :Rp. "+ fasilitas +"</h2></center><br>");
	document.write("</pre>");
	document.write("<center><h2><a href='interface.html'>kembali ke home</a></h2></center>");
}
--></SCRIPT></P></center>
<center><h1>form transaksi</h1></center>
<hr>
<FORM NAME ="fform">
<PRE>
<font color="black">Tanggal_check_in  :<input type="text" size="11" name="check_in"></font></br>
<font color="black">Tanggal_check_out :<input type="text" size="11" name="check_out"></font></br>
<table border ='1'>
	<tr><td><center>harga kamar</center></td></tr>
    <tr><td><pre><center>single room : Rp 1.000.000 per/hari</br>double room : Rp 1.500.000 per/hari</br>suite room  : Rp 2.000.000 per/hari</center></pre></td></tr>
</table>
<font color="black">harga kamar       :<input type="text" size="11" name="class_kamar_pesanan"></font></br>
<INPUT TYPE="button" value="Transaksi_penginapan" onclick="jumlah_hari()"><br>
<INPUT TYPE="button" value="Transaksi_pembayaran" onclick="pembayaran()">
<hr>
<center><h1>Transaksi Penyewaan Fasilitas Hotel</h1></center>
<table border ='1'>
	<tr><td><center>ruang meeting</center></td></tr>
    <tr><td><pre><center>VIP room : Rp 500.000 per/hari</br>VVIP room : Rp 1.500.000 per/hari</center></pre></td></tr>
</table><br>
<font color="black">Identitas customer                        :<input type="text" size="11" name="id" placeholder="sesuai_identitas"></font><br>
<font color="black">harga ruang_miting                        :<input type="text" size="11" name="ruang_miting" placeholder="sesuai_penyewaan"></font><br>
<font color="black">harga kamar yang disewa                   :<input type="text" size="11" name="harga" placeholder="sesuai_penyewaan"></font><br>
<font color="black">lamanya hari peminjaman fasilitas ruang   :<input type="text" size="11" name="hari" placeholder="jumlah_hari"></font><br>
<INPUT TYPE="button" value="Transaksi_peminjaman" onclick="fasilitas()">
</pre>            
</form>
</body>
</html>  