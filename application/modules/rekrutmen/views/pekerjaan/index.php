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
					<li class="active"><span>Riwayat Pekerjaan</span></li>
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
							<h6 class="panel-title txt-dark">Riwayat Pekerjaan</h6>
						</div>						
						<!-- <div class="pull-right">
							<button type="button" class="btn btn-primary footable-add"><span class="fooicon fooicon-plus" aria-hidden="true"></span></button>
						</div> -->
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="table-wrap">								
								<table id="footablePekerjaan" class="table" data-paging="true" data-filtering="false" data-sorting="true" data-editing="true" >
									<thead>
									<tr>							
										<th data-name="txtNo"  data-type="number">No</th>
										<th data-name="txtNamaPerusahaan">Nama Perusahaan</th>
										<th data-name="txtAlamatPerusahaan" data-breakpoints="xs">Alamat Perusahaan</th>
										<th data-name="txtDivisi" data-breakpoints="xs">Divisi</th>
										<th data-name="txtAlasanKeluar" data-breakpoints="xs">Alasan Keluar</th>
										<th data-name="txtTglMasuk" data-breakpoints="xs">Tgl Masuk</th>
										<th data-name="txtTglKeluar" data-breakpoints="xs">Tgl Keluar</th>
										<th data-name="txtUraianTugas" data-breakpoints="xs">Uraian Tugas</th>
										<!-- <th data-name="startedOn" data-breakpoints="xs sm" data-type="date" data-format-string="MMMM Do YYYY">Started On</th>
										<th data-name="dob" data-breakpoints="xs sm md" data-type="date" data-format-string="MMMM Do YYYY">Date of Birth</th> -->
									</tr>
									</thead>
									<tbody>
									<tr ><!--data-expanded="true"-->
										<td>1</td>
										<td>PT Manunggal Sejahtera Sendiri</td>
										<td>Jl. Sejahtera No. 44</td>
										<td>IT Support</td>
										<td>Kantor Tutup</td>
										<td>09-09-2009</td>
										<td>10-10-2010</td>
										<td>Mengatur semua kebutuhan konsumen</td>
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
												<label for="nama" class="col-sm-3 control-label">Nama Perusahaan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtNamaPerusahaan" name="txtNamaPerusahaan" placeholder="Nama Perusahaan" required>
												</div>
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Alamat Perusahaan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtAlamatPerusahaan" name="txtAlamatPerusahaan" placeholder="Alamat Perusahaan" required>
												</div>
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Divisi</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtDivisi" name="txtDivisi" placeholder="Divisi" required>
												</div>
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Alasan Keluar</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtAlasanKeluar" name="txtAlasanKeluar" placeholder="Alasan Keluar" required>
												</div>
											</div>										
											<!-- <div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Tgl Masuk</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtTglMasuk" name="txtTglMasuk" placeholder="Tgl Masuk" required>
												</div>
											</div> -->
											<div class="form-group">
												<label class="control-label col-sm-3">Tgl Masuk</label>												 												
												<div class="col-sm-4 col-xs-4">
													<div class='input-group date' id='dateMasuk'>
														<span class="input-group-addon">
															<span class="fa fa-calendar"></span>
														</span>
														<input type='text' class="form-control" />
													</div>
												</div>
											</div>	
											<div class="form-group">
												<label class="control-label col-sm-3">Tgl Keluar</label>												 												
												<div class="col-sm-4 col-xs-4">
													<div class='input-group date' id='dateKeluar'>
														<span class="input-group-addon">
															<span class="fa fa-calendar"></span>
														</span>
														<input type='text' class="form-control" />
													</div>
												</div>
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Tgl Keluar</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtTglKeluar" name="txtTglKeluar" placeholder="Tgl Keluar" required>
												</div>
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Uraian Tugas</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtUraianTugas" name="txtUraianTugas" placeholder="Jurusan" required>
												</div>
											</div>																						
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-success">Simpan</button>
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
	