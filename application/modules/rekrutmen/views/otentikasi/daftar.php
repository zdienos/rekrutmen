<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Kumala Group | Registrasi</title>
			
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?=base_url('assets/img/favicon.png')?>">
		<link rel="icon" href="<?=base_url('assets/img/favicon.png')?>" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="<?=base_url('assets/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>

		<!--alerts CSS -->
		<link href="<?=base_url('assets/sweetalert/dist/sweetalert.css')?>" rel="stylesheet" type="text/css">
		
		<!-- Custom CSS -->
		<link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
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
					<span class="inline-block pr-10">Sudah punya akun?</span>
					<a class="inline-block btn btn-info btn-rounded btn-outline" href="<?=base_url('login');?>">Log In</a>
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
											<h3 class="text-center txt-dark mb-10">Daftar</h3>
											<h6 class="text-center nonecase-font txt-grey">Silahkan daftar dengan mengisi form berikut</h6>
										</div>	
										<div class="form-wrap">											
											<form method="post" action="<?= base_url('otentikasi/daftar'); ?>" data-toggle="validator" role="form" >
												<div class="form-group">
													<label class="control-label mb-10" for="namalengkap">Nama Lengkap</label>
													<input type="text" class="form-control" id="idNamaLengkap" name="txt_namalengkap" placeholder="Nama Lengkap" required data-error="Nama tidak boleh kosong">
													<div class="help-block with-errors">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="email">Alamat email</label>
													<input type="email" class="form-control" id="idEmail" name="txt_email" placeholder="Masukkan alamat email" required data-error="Penulisan email salah">
													<div class="help-block with-errors">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="password">Password</label>
													<input type="password" class="form-control" id="idPassword" name="txt_password" placeholder="Masukkan password" required data-minlength="6">
													<div class="help-block">Minimal 6 karakter</div>
												</div>												
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="confpassword">Ulangi Password</label>
													<input type="password" class="form-control" required="" id="confPassword" name="txt_password1" placeholder="Ulangi password" data-match="#idPassword" data-match-error="Password harus sama" required>
													<div class="help-block with-errors">
												</div>
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox" required type="checkbox">
														<label for="checkbox"> Saya setuju dengan <span class="txt-primary">semua ketentuan yang ada</span></label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-info btn-rounded">sign Up</button>
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
				
			