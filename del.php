<html><head><title>Laporan data customer</title></head>
<body>
	<foRm method='POST' action="del.php">
			<tr>
				<td>
				Masukkan nama yang akan di ganti :
				<input type="text" id="nama" name="nama">
				</td>
				<td>
				id_pelanggan :
				<input type="text" id="id" name="id">
				<input type="submit" value="koneksi"></td>
			</tr>
	</form>
<?php
 require('koneksi.php');
 $nm = (isset($_POST['nama']) ? $_POST['nama'] : '');
 $di = (isset($_POST['id']) ? $_POST['id'] : '');
 if(!$nm == null && !$di == null){
	$result= $koneksi->query("UPDATE reservasi SET nama '".$_POST['nama']."' where id_pelanggan ='".$_POST['di']."' ");
	while ($row = mysql_fetch_row($result)) {
		//echo"<tr>";
		//echo "<td>".$no++."</td>";
		echo "<td>".$row["di"]."</td>";
		echo "<td>".$row["nm"]."</td>";
		//echo"</tr>";
	}
	mysql_free_result($result);
 }
//echo"masukkan id_pelanggan yang telah check out : ";
?>
</body>
</html>