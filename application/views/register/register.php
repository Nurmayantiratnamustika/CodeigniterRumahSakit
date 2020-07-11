<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetregister/css/nunito-font.css')?>">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url('assetregister/css/style.css')?>"/>
</head>
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('<?php echo base_url('assetregister/images/form-v9.jpg')?>')">
			<form class="form-detail" action="<?php echo base_url('register/register')?>" method="post">
				<h2>Registration Form</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="nama" id="nama" class="input-text" placeholder="Your Name" required>
						<?= form_error('nama');?>
					
					</div>
					
					<div class="form-row">
						<input type="text" name="email" id="" class="email" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
						<?= form_error('email');?>
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
						<?= form_error('password', '<small class="text=danger pl-3', '</small>' );?>
					</div>
					
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body>
</html>