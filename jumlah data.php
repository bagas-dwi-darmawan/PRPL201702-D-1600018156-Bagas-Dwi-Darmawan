<?php
@mysql_connect("localhost","root","");
mysql_select_db("sistemhotel");

$sql= mysql_query("select count(*) from reservasi");
$baris = mysql_fetch_row($sql);
echo "<center><h1>jumlah data reservasi : ".$baris[0]. "</h1></center></br>";
?>

