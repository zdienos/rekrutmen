<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Login | Rekrutmen Kumala Group</title>
		<!-- <meta name="description" content="login" />
		<meta name="author" content="login"/> -->
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="<?=base_url('assets/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
		
		<!--alerts CSS -->
		<link href="<?=base_url('assets/sweetalert/dist/sweetalert.css')?>" rel="stylesheet" type="text/css">
		
		<!-- Custom CSS -->
		<link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<!-- <div class="preloader-it">
			<div class="la-anim-1"></div>
		</div> -->
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="<?=base_url('assets/img/logo.png')?>" alt="brand"/>
						<span class="brand-text">Kumala Group</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Belum punya akun?</span>
					<a class="inline-block btn btn-info btn-rounded btn-outline" href="<?=base_url('daftar')?>">Daftar</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Rekrutmen</h3>
											<h6 class="text-center nonecase-font txt-grey">Silahkan login menggunakan akun yang sudah terdaftar</h6>
										</div>	
										<div class="form-wrap">
											<form method="post" action="<?= base_url('otentikasi/login'); ?>" data-toggle="validator" role="form" >											
												<div class="form-group">
													<label for="inputEmail" class="control-label mb-10">Email</label>
													<input type="email" class="form-control"  name="txt_email" placeholder="Email" data-error="Format email salah" required value='mail@mail.com'>
													<div class="help-block with-errors">
													
													</div>
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">Lupa password ?</a>
													<div class="clearfix"></div>
													<input type="password" class="form-control"  name="txt_password" placeholder="Masukkan password" data-error="Password tidak boleh kosong" required>													
													<div class="help-block with-errors"></div>
												</div>
																				
												<div class="form-group text-center">
													<button type="submit" class="btn btn-info btn-rounded">Login</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				<!--container-fluid-->
				