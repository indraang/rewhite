<!DOCTYPE html>
<html>
<head>
	<title>Rewhite</title>
	<link href="<?= site_url();?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?= site_url();?>assets/style.css" type="text/css" rel="stylesheet">
	<link href="<?= site_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<script src="<?= site_url();?>assets/js/jquery.min.js"></script>
	<script src="<?= site_url();?>assets/js/bootstrap.js"></script>

</head>
<body>
	<div class="header">
		<div class="container">
			<div class="col-md-3 title">
				<h1>REWHITE</h1>
			</div>
			<div class="col-md-6 header-search">
				<form>
					<div class="search">
					<input type="search" value="Apa yang Anda Cari ?" onfocus="this.value=''" onblur="if(this.value==''){this.value='Apa yang Anda Cari ?';}" required="">
					</div>
					<div class="search-btn">
						<input type="submit" value=" ">
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
			<div class="col-md-3 header-right">
				<ul>
					<li>Daftar</li>
					<li>Login</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- End Header -->
	<!-- Banner Navigation-->
	<div class="bann-nav">
		<div class="container">
			<nav class="navbar navbar-default">
					<!-- Navigation Mobile -->
				<div class="navbar-header nav-mobile">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>				<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#" class="act">Beranda</a></li>
							<!-- Mega Menu -->	
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Komputer & Laptop<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="multi-gd-img">
										<ul class="multi-column-dropdown">
											<h6>Semua Komputer</h6>
											<li><a href="groceries.html">Asus</a></li>
											<li><a href="groceries.html">Lenovo</a></li>
											<li><a href="groceries.html">Sony</a></li>
											<li><a href="groceries.html">Acer</a></li>
											<li><a href="groceries.html">Toshiba</a></li>
											<li><a href="groceries.html">Dell</a></li>
										</ul>
									</div>		
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="main">

	</div>
	<div class="footer">
		<div class="footer-nav">
			<div class="description">
				<p>Rewhite All rights Reserved</p>
			</div>
		</div>
	</div>
</body>
</html>