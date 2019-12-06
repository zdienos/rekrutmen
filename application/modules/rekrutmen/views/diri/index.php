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
				<div class="panel panel-inverse card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Identitas Diri</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="form-wrap col-sm-offset-2 col-sm-8">								
								<form class="form-horizontal" id="frmDiri" method="post" action="#" data-toggle="validator" role="form" >
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2">ID User</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="txtIDUser" name="txt_iduser" value="<?=$id_user;?>" placeholder="Nama Lengkap">										
									</div>
								</div>
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2">Nama Lengkap</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="txtNamaLengkap" name="txt_namalengkap" value="<?=$nama_lengkap?>"placeholder="Nama Lengkap" required data-error="Nama lengkap tidak boleh kosong">	
										<div class="help-block with-errors"></div>
									</div>
								</div>											
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2">Tempat Lahir</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="txtTempatLahir" name="txt_tempatlahir" placeholder="Tempat lahir" required data-error="Tempat lahir tidak boleh kosong">
										<div class="help-block with-errors"></div>
									</div>									
								</div>
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2">Tgl Lahir</label>
									<div class="col-sm-4">
										<div class='input-group date' id='datetimepicker1'>
											<span class="input-group-addon">
												<span class="fa fa-calendar"></span>
											</span>
											<input type='text' class="form-control" id="txtTglLahir" name="txt_tgllahir" placeholder="Tanggal lahir" required data-error="Tanggal lahir tidak boleh kosong">
											
										</div>
										<div class="help-block with-errors"></div>
									</div>
								</div>											
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2 col-xs-12">Jenis Kelamin</label>
									<div class="col-sm-4 col-xs-6">																					
										<div class="radio radio-info">
											<input type="radio" name="opt_jeniskelamin" id="radio1" value="l" checked="">
											<label for="radio">Laki-laki</label>
											<input  type="radio" name="opt_jeniskelamin" id="radio2" value="p" checked="">
											<label style="margin-left:50px" for="radio2">Perempuan</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2">Alamat Lengkap</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="txtAlamatLengkap" name="txt_alamatlengkap" placeholder="Alamat lengkap" required data-error="Alamat lengkap tidak boleh kosong">
										<div class="help-block with-errors"></div>
									</div>
								</div>								
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2">No Handphone</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="txtNoHandphone" name="txt_nohandphone" placeholder="No handphone" data-error="No handphone tidak boleh kosong">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label mb-10 col-sm-2">No KTP</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="txtNoKTP" name="txt_noktp" placeholder="No KTP" required data-error="No KTP tidak boleh kosong">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="form-group mb-10"> 
									<label class="control-label mb-10  col-sm-2">Agama</label>
									<div class="mb-20 col-sm-4">
										<select class="form-control" name="opt_agama" id="optAgama" required>
											<option value="" selected="selected">--Pilih Agama--</option>
											<?php
												foreach($d_agama->result() as $dt){
												?>
												<option value="<?php echo $dt->id_agama;?>"><?php echo $dt->nama_agama;?></option>
												<?php
												}
											?>
										</select>										
									</div>
								</div>
								<div class="form-group mb-10">
									<label class="control-label mb-10 col-sm-2">Status Pernikahan</label>
									<div class="col-sm-4">
										<select class="form-control" name="opt_status" id="optStatus" required>
											<option>Lajang</option>
											<option>Menikah</option>
											<option>Bercerai</option>										
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
											<button type="submit" onclick="simpan_data()" id="btnSimpan" class="btn btn-success btn-anim"><i class="ti-save"></i><span class="btn-text">simpan</span></button>
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
	<!--container-fluid-->