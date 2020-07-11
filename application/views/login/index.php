
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Pasien</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assetslogin/images/icons/favicon.ico')?> "/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/fonts/iconic/css/material-design-iconic-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assetslogin/css/main.css')?>">
<!--===============================================================================================-->
</head>

<?=
form_open('login/proses_login'); 
?>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url('assetslogin/images/bg.jpg')?>">
			<div class="wrap-login100">
				<form class="login100-form validate-form " >
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<?= $this->session->flashdata('message'); ?>
					

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" id="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" id="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="<?php echo base_url('register')?>">
							Sign Up?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?= 
form_close();
?>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('assetslogin/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('assetslogin/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assetslogin/js/main.js')?>"></script>

</body>
</html>