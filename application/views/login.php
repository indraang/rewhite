<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="<?= site_url();?>assets/login.css" rel="stylesheet">
	
</head>
<body>
	<div class="header">
		<h1>Form Login</h1>
	</div>
	<div class="container">

		<form action="" method="post">
			<?php
			if($this->session->flashdata("alert")){
				echo '<div class="error error-message">';
				echo $this->session->flashdata('alert');
				echo '</div>';
			}
			;?>
			<label>Username</label>
				<input type="text" name="username" placeholder="example@xxx.com">
			<label>Password</label>
				<input type="password" name="password" placeholder="xxxxxxx">	
			<button type="submit" name="submit" value="Submit" class="btn">LOGIN</button>
			<div class="remember-me">
			<label>
				<input type="checkbox" value="remember-me"><span>Ingat Saya?</span>
			</label>
			</div>
			<a href="<?= site_url();?>beranda/lost">Lupa Kata Sandi?</a>
		</form>	
		<footer>
			<span>Belum punya akun ?</span>
			<a href="<?= site_url();?>beranda/registrasi" class="register">Register</a>
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