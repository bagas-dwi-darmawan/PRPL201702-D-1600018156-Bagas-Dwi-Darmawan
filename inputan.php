<html>
<head>
	<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<!---strat-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
		<script type="text/javascript" src="js/JFCore.js"></script>
		<script type="text/javascript" src="js/JFForms.js"></script>
		<!-- Set here the key for your domain in order to hide the watermark on the web server -->
		<script type="text/javascript">
			(function() {
				JC.init({
					domainKey: ''
				});
				})();
		</script>
<!--nav-->
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>
<style type="text/css">
body{
background-image:url("gb4.jpg");
background-size:cover;
}
h1{
color:#3E2723;
font-family:times new roman;
font-size:35;
}
h3{
color:#3E2723;
font-family:times new roman;
font-size:35;	
}
</style>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt="" height="70px" width="300px"></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li class="active"><a href="index.html">hotel</a></li> |
				<li><a href="rooms.html">rooms & suits</a></li> |
				<li><a href="forminput.php">reservation</a></li> |
				<li><a href="activities.html">activities</a></li> |
				<li><a href="contact.html">contact</a></li>
				<div class="clear"></div>
			</ul>
			<!-- start profile_details -->
					<form class="style-1 drp_dwn">
						<div class="row">
							<div class="grid_3 columns">
								<select class="custom-select" id="select-1">
									<option selected="selected">EN</option>
									<option>USA</option>
									<option>AUS</option>
									<option>UK</option>
									<option>IND</option>
								</select>
							</div>		
						</div>		
					</form>
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li class="active"><a href="index.html">hotel</a></li> 
				<li><a href="rooms.html">rooms & suits</a></li> 
				<li><a href="forminput.php">reservation</a></li> 
				<li><a href="activities.html">activities</a></li> 
				<li><a href="contact.html">contact</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	</div>
</div>
</div>

<?php
	$db =  new mysqli("localhost","root","","sistemhotel");
	
	if(isset($_POST['add'])){
	$id_pelanggan = $_POST['id_pelanggan'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$no_hp = $_POST['no_hp'];
	$class_kamar_pesanan = $_POST['class_kamar_pesanan'];
	$check_in = $_POST['check_in'];
	$check_out = $_POST['check_out'];

	$sql = "INSERT INTO reservasi VALUES ('$id_pelanggan','$nama','$alamat','$jenis_kelamin','$no_hp','$class_kamar_pesanan','$check_in','$check_out')";
	$query = $db->query($sql);
	if($query){
		echo "<br><br><br><br><br><br><br><hr>";
		echo "<center><h1>Reservation berhasil di masukkan </h1></center>";
		echo "<center><h1><a href='bayar.php'>lanjut pembayaran </a></h1><br><center>";
		echo "<hr></br></br></br></br></br>";
	}else{
		echo "<center><h1><a href='forminput.php'>Masukkan lagi datanya</a></h1></center>";
		echo "<center><h1>Data gagal di masukkan</h1></center>".$db->error;
	}
	}
	//echo "<center><h3><a href='/prpl/'> goto Menu</a> / <a href='forminput.php'>Masukkan terlebih dahulu datanya</a></h3></center>";
?>

<div class="footer_bg">
<div class="wrap">
<div class="footer">
			<div class="copy">
				<p class="link"><span>Welcome To Paradise-Hotel</span></p>
			</div>
			<div class="f_nav">
				<ul>
					<li><a href="index.html">home</a></li>
					<li><a href="rooms.html">rooms & suits</a></li>
					<li><a href="forminput.php">reservation</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="soc_icons">
				<ul>
					<li><a class="icon1" href="data_penyewaan_kelaskamar.php"></a></li>
					<li><a class="icon2" href="output.php"></a></li>
					<li><a class="icon3" href="#"></a></li>
					<li><a class="icon4" href="#"></a></li>
					<li><a class="icon5" href="#"></a></li>
					<div class="clear"></div>
				</ul>	
			</div>
		<div class="clear"></div>
</div>
</div>
</div>		
</body>
</html>