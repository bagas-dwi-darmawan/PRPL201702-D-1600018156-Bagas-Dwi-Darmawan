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
hr{
width:100%;
}
ul{
margin:0;
padding:0;
overflow:hidden;
background-color:#5C6BC0;
}
li{
list-style-type:none;
float:left;
}
li a{
padding:10px 10px;
text-decoration:none;
font-family:arial;
font-size:18;
color:aqua;
display:block;
}
li a:hover{
background-color:#1A237E;
}
</style>
<body>
	<ul>
		<li><a href="interface.html">Home</a></li>
		<li><a href="forminput.php">reservasi</a></li>
		<li><a href="output3.php">kamar</a></li></br>
	</ul>
<h1><center> Data sewa kamar</center></h1>";
<hr></br>
</body>
</html>
<?php
	$db =  new mysqli("localhost","root","","sistemhotel");
	$sql = "SELECT * FROM sewakamar";
	$data = $db->query($sql);
	//echo "<h1><center><br><br> Data sewa kamar<br></center></h1>";
	echo "<center><table border='8' cellpadding='9' cellspacing='0'></center>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>id_pelanggan</center></td><td><center>nama</center></td><td><center>alamat</center></td><td><center>jenis_kelamin</center></td><td><center>no_hp</center></td><td><center>class_kamar_pesanan</center></td><td><center>check_in</center></td><td><center>check_out</center></td><td><center>status_kamar</center></td><td><center>total_biaya</center></td><td><center>informasi_sisa_waktu</center></td><td colspan=3><center>Aksi</center></td></tr>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['id_pelanggan']."</td>";
			echo "<td>".$row['nama']."</td>";
			echo "<td>".$row['alamat']."</td>";
			echo "<td>".$row['jenis_kelamin']."</td>";
			echo "<td>".$row['no_hp']."</td>";
			echo "<td>".$row['class_kamar_pesanan']."</td>";
			echo "<td>".$row['check_in']."</td>";
			echo "<td>".$row['check_out']."</td>";
			echo "<td>".$row['status_kamar']."</td>";
			echo "<td>".$row['total_biaya']."</td>";
			echo "<td>".$row['informasi_sisa_waktu']."</td>";
			echo "<td><a href='utsforminput.php?id_pelanggan=".$row['id_pelanggan']."'> Input </a></td>";
			echo "<td><a href='deleteuts.php?id_pelanggan=".$row['id_pelanggan']."'> Delete </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "gak ada datanya";
	}
	echo "</table>";
	//echo "<h2><a href='/prpl/'><br><br> goto Menu</a></h2>";
	$db->close();
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<br><br>
	<table border="5px">
		<foRm method='POST' action="outputanuts.php">
			<tr>
				<td>
				from :
				<input type="date" id="from" name="from">
				</td>
				<td>
				to :
				<input type="date" id="to" name="to">
				<input type="submit" value="filter"></td>
			</tr></form>
	<tbody>
	<?php
                require('konek.php');
                $from = (isset($_POST['from']) ? $_POST['from'] : '');
                $to = (isset($_POST['to']) ? $_POST['to'] : '');

                  if(!$from == null && !$to == null){
                    $result = $konek->query("SELECT * FROM sewakamar where check_in between '".$_POST['from']."' AND  '".$_POST['to']."' ORDER by id_pelanggan ASC");
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
					echo '<td>'.$mem['status_kamar'].'</td>';
                    echo '<td>'.$mem['total_biaya'].'</td>';
					echo '<td>'.$mem['informasi_sisa_waktu'].'</td>';
                    echo '</tr>';

                  endwhile;
                }else{
                  $result = $konek->query("SELECT * FROM sewakamar");

                  while ($mem = mysqli_fetch_assoc($result)):

                  echo '<tr>';
                    echo '<td>'.$mem['id_pelanggan'].'</td>';
                    echo '<td>'.$mem['check_in'].'</td>';
					echo '<td>'.$mem['check_out'].'</td>';
					echo '<td>'.$mem['status_kamar'].'</td>';
                    echo '<td>'.$mem['total_biaya'].'</td>';
					echo '<td>'.$mem['informasi_sisa_waktu'].'</td>';
                   echo '</tr>';

                endwhile;
                }
                /* free result set */
                $result->close();           
?>
</tbody>
</table>
</body>
</html>