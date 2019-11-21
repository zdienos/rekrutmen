<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login Page - <?php echo $this->config->item('nama_aplikasi');?></title>
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo base_url();?>assets/img/favicon_kmg.png" type="image/gif">
		<!--basic styles-->
		<!--<link href="https://maxcdn.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" />--><!--bootstrap.min.css-->
		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/css/ace2.min.css" rel="stylesheet" />
<!--		<link href="<?php echo base_url();?>assets/css/ace.skin.min.css" rel="stylesheet" />-->
		<!--<link rel="stylesheet" href="https://drive.google.com/uc?export=download&#038;id=149ECtgnglHZw6tw1ynZqPXnU6m92V-SW" />--> <!--ace.min.css-->
		<!--<link rel="stylesheet" href="https://drive.google.com/uc?export=download&#038;id=1rNgNQsETcCRfLY28jhEzVyfvgl1X0edp" />--><!-- ace.skin.min.css-->
<!--		<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />-->
		<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
		<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" />--><!-- fontawesome.min.css-->
		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
		<!--page specific plugin styles-->
		<!--fonts-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-fonts.css" />
		<!--ace styles-->
<!--		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-responsive.min.css" />-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css" />
		<!--<script src="<?php echo base_url();?>/assets/js/security.js"></script>-->
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		<!--inline styles related to this page-->
		<!--<![endif]-->
		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<!--<script src="https://drive.google.com/uc?export=download&#038;id=1QSiZZrl35DMzvPT1rSEpdWGEKUrMi7xw"></script>--><!--bootstrap.min.js-->
<!--		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>-->
        <!--page specific plugin scripts-->
		<!--ace scripts-->
<!--
		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>
-->

		<!--inline scripts related to this page-->

	</head>
	<body>
		<div class="login-layout">
		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
						<div class="login-container">
							<div class="row-fluid">
								<!--<div class="center">
									<h4><span class="red"><?php echo $this->config->item('nama_aplikasi');?></span></h4>
                                    <h5><span class="" style="color:#3C3838;"></span></h5>
								</div>-->
							</div>
							<div class="space-6"></div>
							<div class="row-fluid">
								<div class="position-relative">
									<div id="login-box" class="login-box visible widget-box no-border">
										<div class="widget-body">
											<div class="toolbar clearfix" style="background-color: #2283c5;">
												<center>
														<p style="font: arial bold; padding-top: 5px; color: white;"><?php echo $this->config->item('nama_instansi');?></p>
                                                </center>
											</div>
											<div class="widget-main">
												<h4 class="header blue lighter bigger">
													<i class="icon-laptop green"></i>
													Halaman Login
												</h4>
												<div class="space-6"></div>
												<div class="span3" style="margin-right:10px; width: 60px;" >
													<!--<img src="https://drive.google.com/uc?export=download&#038;id=1S0ao5WkGPqEncFXKWHDtvhgO2_VcHQ_J">-->
													<img src="<?php echo base_url();?>assets/img/logo.png"></script>
												</div>
												<form id="validation-form" method="post" action="<?php echo base_url();?>index.php/login" >
													<fieldset>
													<label>
															<span class="block input-icon input-icon-right">
															<input type="text" class="span12" id="username" name="username" maxlength="20" placeholder="Username" />
																<i class="icon-user"></i>
															</span>
														</label>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" id="password" name="password" class="span12" maxlength="15" placeholder="Password" />
																<i class="icon-lock"></i>
															</span>
														</label>
														<div class="space"></div>
														<div class="clearfix">
															<button type="submit" name="submit" class="width-35 pull-right btn btn-small btn-primary">
																<i class="icon-key"></i>
																Login
															</button>
														</div>
														<div class="space-4"></div>
													</fieldset>
                                                    <?php
													$valid = validation_errors();
                                                    if(!empty($valid)){
													?>
                                                    <div class="alert alert-error">
                                                    <strong>Warning ..!!! </strong>
                                                   	<?php
														echo validation_errors();
													?>
                                                    </div>
                                                    <?php } ?>
                                                    <?php
													$info = $this->session->flashdata('result_login');
													if(!empty($info)){
													?>
                                                    <div class="alert alert-error">
                                                    <strong>Warning ..!!! </strong>
                                                   	<?php
														echo validation_errors();
														echo $this->session->flashdata('result_login');
													?>
                                                    </div>
                                                    <?php } ?>
												</form>
											</div><!--/widget-main-->
											<div class="toolbar clearfix" style="background-color: #2283c5;">
												<center>
													<a href="" class="forgot-password-link">
														<p></p>
													</a>
                                                    </center>
											</div>
										</div><!--/widget-body-->
									</div><!--/login-box-->
								</div><!--/position-relative-->
							</div>
						</div>
					</div><!--/.span-->
				</div><!--/.row-fluid-->
			</div>
		</div><!--/.main-container-->
		<!--basic scripts-->
		<!--[if !IE]>-->





	</div>
	</body>

</html>
