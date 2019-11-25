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
					<li class="active"><span>Keluarga</span></li>
				</ol>
			</div>
			<!-- /Breadcrumb -->
		
		</div>
		<!-- /Title -->
					
		<!-- Row -->
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-inverse card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Data Keluarga (termasuk diri Anda sendiri)</h6>
						</div>						
						<!-- <div class="pull-right">
							<button type="button" class="btn btn-primary footable-add"><span class="fooicon fooicon-plus" aria-hidden="true"></span></button>
						</div> -->
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="table-wrap">								
								<table id="footableKeluarga" class="table" data-paging="true" data-filtering="false" data-sorting="true" data-editing="true" >
									<thead>
									<tr>
										<th data-name="txtNo" data-breakpoints="xs" data-type="number">No</th>
										<th data-name="txtHubungan">Hubungan Keluarga</th>
										<th data-name="txtNama">Nama</th>
										<th data-name="txtKelamin" data-breakpoints="xs">Jenis Kelamin</th>
										<th data-name="txtUsia" data-breakpoints="xs">Usia</th>
										<th data-name="txtPendidikan" data-breakpoints="xs">Pendidikan Terakhir</th>										
										<!-- <th data-name="startedOn" data-breakpoints="xs sm" data-type="date" data-format-string="MMMM Do YYYY">Started On</th>
										<th data-name="dob" data-breakpoints="xs sm md" data-type="date" data-format-string="MMMM Do YYYY">Date of Birth</th> -->
									</tr>
									</thead>
									<tbody>
									<tr ><!--data-expanded="true"-->
										<td>1</td>
										<td>Ayah</td>
										<td>Abdurahman</td>
										<td>Laki-laki</td>
										<td>54</td>
										<td>D3</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Ibu</td>
										<td>Musdalifa</td>
										<td>Perempuan</td>
										<td>50</td>
										<td>SMK</td>
									</tr>										
									</tbody>
								</table>


								<!--Editor-->
								<div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
								
								<div class="modal-dialog" role="document">
									<form class="modal-content form-horizontal" id="editor">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
											<h5 class="modal-title" id="editor-title">Add Rowzzz</h5>
										</div>
										<div class="modal-body">
											<input type="number" id="id" name="id" class="hidden"/>
											<div class="form-group required">
												<label for="hubungan" class="col-sm-3 control-label">Hubungan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtHubungan" name="txtHubungan" placeholder="Hubungan keluarga" required>
												</div>
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Nama lengkap</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtNama" name="txtNama" placeholder="Nama lengkap" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label mb-10 col-sm-3 col-xs-12">Jenis Kelamin</label>
												<div class="col-sm-6 col-xs-6">	
													<div class="radio radio-info">
														<input type="radio" name="radKelamin" id="radio1" value="Laki-laki"  >
														<label for="radio">Laki-laki														</label>
														<input  type="radio" name="radKelamin" id="radio2" value="Perempuan" >
														<label style="margin-left:50px" for="radio2">Perempuan
														</label>
													</div>							
												</div>											
											</div>
											<div class="form-group">
												<label for="usia" class="col-sm-3 control-label">Usia</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtUsia" name="txtUsia" placeholder="Usia">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-3">Pendidikan</label>
												<div class="col-sm-4">
													<select id="optPendidikan" name="optPendidikan" class="form-control" >
														<option value="S2">S2</option>
														<option value="S1">S1</option>
														<option value="D3">D3</option>
														<option value="D1">D1</option>
														<option value="SMA">SMA</option>
														<option value="SMK">SMK</option>
													</select>													
												</div>												
											</div>											
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary">Simpan</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
										</div>
									</form>
								</div>
							</div>
							<!--/Editor-->
							<div class="row">
								<div class="form-group mb-0 mt-30"> 
									<div class="col-sm-10">
										<button type="button" class="btn btn-success btn-anim"><i class="ti-save"></i><span class="btn-text">Simpan</span></button>
										<button type="button" class="btn btn-default btn-anim"><i class="ti-arrow-left"></i><span class="btn-text">Kembali</span></button>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<!-- /Row -->
		
	
	</div>
	<!--container-fluid-->
	