<!DOCTYPE html>
<html>
<head>
	<title>Lupa Sandi</title>
	<link href="<?= site_url();?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?= site_url();?>assets/lost_pass.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">

</head>
<body>
	<div class="header">
		<h1>Rewhite</h1>
	</div>
	<div class="container">
		<form>
			<label>Reset Password</label>
			<input type="text" name="email" placeholder="Masukkan Email yang terdaftar">
			<button type="submit" name="submit" class="btn">Kirim!</button>
			<p>Kembali ke <a href="<?= site_url();?>login">Login</a> atau <a href="<?= site_url();?>registrasi">Daftar</a></p>
		</form>
	</div>
</body>
</html>