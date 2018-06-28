<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link href="<?= site_url();?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?= site_url();?>assets/registrasi.css" rel="stylesheet">
	
</head>
<body>
	<div class="header">
		<h1>Registrasi</h1>

	</div>
	<div class="container">
			
		<form action="" method="post">
			<?php echo validation_errors('<div class="error error-message">','</div>');?>
			<?php if($this->session->flashdata('alert')){
			  	echo '<div class="error error-message">';
			  	echo $this->session->flashdata('alert');
			  	echo '</div>';
			}
			?>
			<label>Masukkan Username</label>
				<input type="text" name="username" placeholder="Example69" value="<?php echo set_value('username');?>">
			<label>Masukkan Password</label>
				<input type="password" name="password" placeholder="Minimal 6 karakter">	
			<label>Konfirmasi Password</label>	
				<input type="password" name="password2" placeholder="Konfirmasi Password">		
			<button type="submit" name="submit" value="Submit" class="btn">REGISTER</button>
			<div class="remember-me">
		</form>	

		<footer>
			<p>Sudah memiliki akun? Silakan <a href="<?= site_url();?>login">Login</a></p>
		</footer>
	</div>
	<script src="<?= site_url();?>assets/js/jquery.min.js"></script>
	<script src="<?= site_url();?>assets/js/style.js"></script>
	<script src="<?= site_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$('.error-message').alert().delay(2000).slideUp('slow');
	</script>
</body>
</html>