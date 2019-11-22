<!-- Main Content -->
<div class="page-wrapper">
	<div class="container-fluid">
		
		<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h5 class="txt-dark">Data Pelamar</h5>
			</div>
		
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<li><a href="index.html">Data Pelamar</a></li>							
					<li class="active"><span>Identitas Diri</span></li>
				</ol>
			</div>
			<!-- /Breadcrumb -->
		
		</div>
		<!-- /Title -->

			
		
		<div class="row">
		<div class="col-sm-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Identitas Diri</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap">
								<form class="form-horizontal">
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2">Nama Lengkap</label>
									<div class="col-sm-10">
										<input type="text" class="form-control"  placeholder="Nama Lengkap">
									</div>
								</div>											
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2 col-xs-12">Tempat Tgl Lahir</label>
									<div class="col-sm-4 col-xs-6">
										<input type="text" class="form-control"  placeholder="Tempat lahir">
									</div>												
									<div class="col-sm-6 col-xs-6">
										<div class='input-group date' id='datetimepicker1'>
											<span class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</span>
											<input type='text' class="form-control" />
										</div>
									</div>
								</div>											
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2 col-xs-12">Jenis Kelamin</label>
									<div class="col-sm-4 col-xs-6">																					
										<div class="radio radio-info">
											<input type="radio" name="radio" id="radio1" value="option1" checked="">
											<label for="radio">Laki-laki														</label>
											<input  type="radio" name="radio" id="radio2" value="option2" checked="">
											<label style="margin-left:50px" for="radio2">Perempuan
											</label>
										</div>
																								
										<!-- <select class="selectpicker" data-style="form-control btn-default btn-outline">
												<option selected>Jenis Kelamin</option>
												<option>Laki-laki</option>
												<option>Perempuan</option>
										</select> -->
									</div>
								</div>
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2">Alamat</label>
									<div class="col-sm-10">
										<input type="text" class="form-control"  placeholder="">
									</div>
								</div>
								<div class="form-group mt-10 mb-10">
									<label class="control-label mb-10 col-sm-2">Propinsi</label>
									<div class="col-sm-4">
										<select class="form-control" >
											<option>Sulawesi Selatan</option>
											<option>Sulawesi Barat</option>
											<option>Sulawesi Utara</option>
											<option>Sulawesi Tengah</option>
											<option>Sulawesi Tenggara</option>
										</select>
									</div>
								<!-- </div>
								<div class="form-group mt-30 mb-30"> -->
									<label class="control-label mt-10  col-sm-2">Kota</label>
									<div class="col-sm-4">
										<select class="form-control" >
											<option>Makassar</option>
											<option>Kendari</option>
											<option>Palu</option>
											<option>Gorontalo</option>
											<option>Balikpapan</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2">No Handphone</label>
									<div class="col-sm-10">
										<input type="text" class="form-control"  placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2">No KTP</label>
									<div class="col-sm-10">
										<input type="text" class="form-control"  placeholder="">
									</div>
								</div>
								<div class="form-group mt-10 mb-10"> 
									<label class="control-label mb-10  col-sm-2">Agama</label>
									<div class="col-sm-4">
										<select class="form-control" >
											<option>Islam</option>
											<option>Katolik</option>
											<option>Protestan</option>
											<option>Budha</option>
											<option>Hindu</option>
										</select>
									</div>
								</div>
								
									<!-- <div class="form-group">
										<label class="control-label mb-10 col-sm-2" for="email_hr">Email:</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="email_hr" placeholder="Enter email">
										</div>
									</div> -->
									<!-- <div class="form-group">
										<label class="control-label mb-10 col-sm-2" for="pwd_hr">Password:</label>
										<div class="col-sm-10"> 
											<input type="password" class="form-control" id="pwd_hr" placeholder="Enter password">
										</div>
									</div> -->
									<!-- <div class="form-group"> 
										<div class="col-sm-offset-2 col-sm-10">
										<div class="checkbox checkbox-success">
											<input id="checkbox_hr" type="checkbox">
											<label for="checkbox_hr">
												remember me
											</label>
										</div>
										</div>
									</div> -->
									<div class="form-group mb-0 mt-30"> 
										<div class="col-sm-offset-2 col-sm-10">
											<button type="button" class="btn btn-success btn-anim"><i class="ti-save"></i><span class="btn-text">simpan</span></button>
										</div>
									</div>
									</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	
	</div>
	
	<!-- Footer -->
	<footer class="footer container-fluid pl-30 pr-30">
		<div class="row">
			<div class="col-sm-12">
				<p><?=date('Y');?> &copy; KumalaGroup</p>
			</div>
		</div>
	</footer>
	<!-- /Footer -->

</div>
<!-- /Main Content -->

</div>
<!-- /#wrapper -->	