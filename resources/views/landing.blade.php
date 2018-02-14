<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Team5">
    <title>Welcome To KostKu</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/stylelanding.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
</head>
<body>
<div id="header" class="row" >
	<div class="container">
	 <nav class="navbar navbar-invers">
  <div class="container-fluid navi">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Kost<ku>Ku<ku></a>
    </div>
    <ul class="nav navbar-nav navbar-right list">
      <li><a href="#">Home</a></li>
      <li><a href="#">List Kost</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
	</nav>
	<div class="brand">
		<judul>Kost<ka>Ku</ka><br></judul>
		<div class="ki">Solusi Mudah Cari Kost</div>
	</div>
	<div class="search">
		<div class="searchbox">
			<input type="text" name="search" placeholder="Masukkan Nama / Alamat / Pemilik Kost yang anda cari"></input>
		</div>
		<div class="button-src">
		<div class="row">
			<div class="col-sm-6 text-right cari">
			<input class="cari" type="submit" name="cari" value="Cari">
			</div>
			<div class="col-sm-6 text-left filter">
			<input class="filter" type="submit" name="filter" value="Filter">
			</div>
		</div>
	</div> 
	</div>
</div>
<div id="content" class="row">
	<div class="container">
		<div class="box text-center">
			<div class="caption text-center">
				Keuntungan Dari Kami
			</div>
			<div class="row card">
			<div class="card1 col-sm-6 text-center">
				<img src="{{ asset('img/home.png') }}">
				<p>Hunian yang nyaman untuk anda berdasarkan testimoni pelanggan secara langsung</p>
			</div>
			<div class="card1 col-sm-6 text-center">
				<img src="{{ asset('img/dollar.png') }}">
				<p>Biaya yang terjangkau dan kejelasan biaya</p>
			</div>
			<div class="card3 col-sm-6 text-center">
				<img src="{{ asset('img/cctv.png') }}">
				<p>Hunian yang terjamin keamanannya</p>
			</div>
			<div class="card3 col-sm-6 text-center">
				<img src="{{ asset('img/fasilitas.png') }}">
				<p>Hunian dengan beragam fasilitas terbaik</p>
			</div>
			</div>
		</div>	
	</div>
</div>
<div id="rekomendasi">
	<div class="container">
		<div class="kost">
  			<img src="{{ asset('img/kost.png') }}" alt="Avatar" style="width:100%">
  			<div class="harga1">
  				<span>Rp</span><h3>300K/<span>Bulan</span></h3>
  			</div>
  			<div class="container2 text-left">
   				 <h4><b>Komar Kost</b></h4>
    			<p style="color: #2ecc71">AC, Kolam Renang</p>
    			<h5>Jl.DI Panjaitan No.13</h5> 
  			</div>
		</div>
		<div class="kost2">
  			<img src="{{ asset('img/kost.png') }}" alt="Avatar" style="width:100%">
  			<div class="harga">
  				<span>Rp</span><h3>300K/<span>Bulan</span></h3>
  			</div>
  			<div class="container2 text-left">
   				 <h4><b>Komar Kost</b></h4>
    			<p style="color: #2ecc71">AC, Kolam Renang</p>
    			<h5>Jl.DI Panjaitan No.13</h5> 
  			</div>
		</div>
		<div class="kost">
  			<img src="{{ asset('img/kost.png') }}" alt="Avatar" style="width:100%">
  			<div class="harga1">
  				<span>Rp</span><h3>300K/<span>Bulan</span></h3>
  			</div>
  			<div class="container2 text-left">
   				 <h4><b>Komar Kost</b></h4>
    			<p style="color: #2ecc71">AC, Kolam Renang</p>
    			<h5>Jl.DI Panjaitan No.13</h5> 
  			</div>
		</div>
	</div>
</div>
<div id="subscribe">
	<div class="container subs">
		<div class="inputsubs text-center">
			<span>Dapatkan berita tentang kost terbaru</span>
			<input class="boxsubs" type="email" name="subscribe" placeholder="Email"></input>
			<button type="submit" name="subscribe">Subscribe</button>
		</div>
	</div>
</div>
<div id="footer">
	<div class="container">
		<div class="row" style=" padding-top: 65px;">
		<div class="col-sm-6">
			 <a class="namekost" href="#">Kost<ku>Ku</ku></a><br>
			 <p style="color: #7c7979;">View more about our team and mission</p>
			 <br>
			<a href="#" class="btnabout">About Us</a>
		</div>
		<div class="col-sm-6 kanan" style="padding-left: 150px;"> 
			 <p>Reach Us</p>
			 <div class="info">
			 	<div class="inf">
			 		<p><img src="{{ asset('img/loc.png') }}" style="padding-right: 10px;">Jl. Kauman Lama Gg.III No.19</p>
			 	</div>
			 	<div class="inf" style="padding-top: 10px">
			 		<p><img src="img/mail.png" style="padding-right: 10px;">team5rpl@gmail.com</p>
			 	</div>
			 	<div class="inf" style="padding-top: 10px">
			 		<p><img src="img/contact.png" style="padding-right: 10px;">+6289653519025</p>
			 	</div>
			 </div>
			 <div class="socmed">
			 	<a href="#"><img src="asset/img/fb.png"></a>
			 	<a href="#"><img src="asset/img/twitter.png"></a>
			 	<a href="#"><img src="asset/img/ig.png"></a>
			 	<a href="#"><img src="asset/img/google+.png"></a>
			 </div>
		</div>
		</div>
	</div>
</div>

 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>