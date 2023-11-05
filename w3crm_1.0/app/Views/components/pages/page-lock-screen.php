<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
    <meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Codeigniter Admin" />
	<meta property="og:title" content="W3crm:Customer Relationship Management Codeigniter Admin" />
	<meta property="og:description" content="W3crm:Customer Relationship Management Codeigniter Admin" />
	<meta property="og:image" content="https://w3crm.dexignzone.com/codeigniter/social-image.png" />
	<meta name="format-detection" content="telephone=no">
    <title>W3CRM:Customer Relationship Management Codeigniter Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url('public/assets/images/favicon.png'); ?>">
    <link href="<?php echo site_url('public/assets/css/style.css'); ?>" rel="stylesheet">
	
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Account Locked</h3>
							<p>Sign in to your account to start using W3CRM</p>
						</div>
						<form action="<?php echo site_url('/'); ?>">
							
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password" id="dz-password" class="form-control" value="123456">
								<span class="show-pass eye">
									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>
								</span>
								
							</div>
							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
										<label class="form-check-label" for="customCheckBox1">Remember my preference</label>
									</div>
								</div>
								<div class="mb-4">
									<a href="<?php echo site_url('/page_forgot_password'); ?>" class="btn-link text-primary">Forgot Password?</a>
								</div>
							</div>
							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Unlock</button>
							</div>
							<h6 class="login-title"><span>Or continue with</span></h6>
							
							<div class="mb-3">
								<ul class="d-flex align-self-center justify-content-center">
									<li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
									<li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
									<li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
								</ul>
							</div>
							<p class="text-center">Not registered?  
								<a class="btn-link text-primary" href="<?php echo site_url('/page_register'); ?>">Register</a>
							</p>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							<a href="<?php echo site_url('/'); ?>"><img src="<?php echo site_url('public/assets/images/logo-full.png'); ?>" class="mb-3 logo-dark" alt=""></a>
							<a href="<?php echo site_url('/'); ?>"><img src="<?php echo site_url('public/assets/images/logo-white.png'); ?>" class="mb-3 logo-light" alt=""></a>
							
							<p>CRM dashboard uses line charts to visualize customer-related metrics and trends over time.</p>
						</div>
						<div class="login-media text-center">
							<img src="<?php echo site_url('public/assets/images/login.png'); ?>" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="<?php echo site_url('public/assets/vendor/global/global.min.js'); ?>"></script>
<script src="<?php echo site_url('public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js'); ?>"></script>
<script src="<?php echo site_url('public/assets/js/deznav-init.js'); ?>"></script>
</body>
</html>