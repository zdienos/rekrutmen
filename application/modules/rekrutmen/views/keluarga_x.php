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
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Data Keluarga</h6>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="table-wrap">
								<table id="footable_2" class="table" data-paging="true" data-filtering="false" data-sorting="true" data-editing="true" >
									<thead>
									<tr>
										<th data-name="N" data-breakpoints="xs" data-type="number">No</th>
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
									<tr data-expanded="true">
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
											<input type="number" id="txtNo" name="txtNo" class="hidden"/>
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
												<label for="jenisKelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtKelamin" name="txtKelamin" placeholder="Jenis kelamin" required>
												</div>
											</div>
											<div class="form-group">
												<label for="usia" class="col-sm-3 control-label">Usia</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtUsia" name="txtUsia" placeholder="Usia" required>
												</div>
											</div>
											<div class="form-group">
												<label for="pendidikanTerakhir" class="col-sm-3 control-label">Pendidikan Terakhir</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtPendidikan" name="txtPendidikan" placeholder="Pendidikan tearkhir" required>
												</div>
											</div>
											<!-- <div class="form-group required">
												<label for="startedOn" class="col-sm-3 control-label">Started On</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="startedOn" name="startedOn" placeholder="Started On" required>
												</div>
											</div>
											<div class="form-group">
												<label for="dob" class="col-sm-3 control-label">Date of Birth</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
												</div>
											</div> -->
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary">Simpan</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
										</div>
									</form>
								</div>
							</div>
							<!--/Editor-->
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<!-- /Row -->
		
	
	</div>
	<!--container-fluid-->
	