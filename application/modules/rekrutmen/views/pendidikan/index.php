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
					<li class="active"><span>Riwayat Pendidikan</span></li>
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
							<h6 class="panel-title txt-dark">Riwayat Pendidikan</h6>
						</div>						
						<!-- <div class="pull-right">
							<button type="button" class="btn btn-primary footable-add"><span class="fooicon fooicon-plus" aria-hidden="true"></span></button>
						</div> -->
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="table-wrap">								
								<table id="footablePendidikan" class="table" data-paging="true" data-filtering="false" data-sorting="true" data-editing="true" >
									<thead>
									<tr>
										<th data-name="txtNo" data-breakpoints="xs" data-type="number">No</th>
										<th data-name="idPendidikan" data-breakpoints="xs" data-visible="false">ID</th>										
										<th data-name="txtPendidikan">Tingkat/Jenjang</th>
										<th data-name="txtNamaSekolah">Nama Sekolah</th>
										<th data-name="txtKota" data-breakpoints="xs">Kota</th>
										<th data-name="txtTahunLulus" data-breakpoints="xs">Tahun Lulus</th>
										<th data-name="txtJurusan" data-breakpoints="xs">Jurusan</th>
										<th data-name="txtNilaiRatarata" data-breakpoints="xs">Nilai Rata-rata</th>
										<!-- <th data-name="startedOn" data-breakpoints="xs sm" data-type="date" data-format-string="MMMM Do YYYY">Started On</th>
										<th data-name="dob" data-breakpoints="xs sm md" data-type="date" data-format-string="MMMM Do YYYY">Date of Birth</th> -->
									</tr>
									</thead>
									<tbody>
									<?php									
									 	$no=1;
                                    	if($d_pelamar){
                                        	foreach($d_pelamar as $d){ ?>
											<tr>
												<td><?=$no;?></td>
												<td><?=$d->id_pendidikan;?></td>
												<td><?='nama pendidikan'?></td>
												<td><?=$d->nama_sekolah;?></td>
												<td><?=$d->kota;?></td>
												<td><?=$d->tahun_lulus;?></td>
												<td><?=$d->jurusan;?></td>
												<td><?=$d->nilai_ratarata;?></td>												
											</tr>
									<?php	
											$no=$no+1; 
									 		}
										 } ?>																			
									</tbody>									
									</tbody>
								</table>


								<!--Editor-->
								<div class="modal fade" id="modal-pendidikan" tabindex="-1" role="dialog" aria-labelledby="editor-title">
								
								<div class="modal-dialog" role="document">									
									<form class="modal-content form-horizontal" id="frmPendidikan" method="post" action="" data-toggle="validator" role="form">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
											<h5 class="modal-title" id="editor-title">Add Rowzzz</h5>
										</div>
										<div class="modal-body">
											<input type="number" id="id" name="id" class="hidden"/>
											<div class="form-group">
												<label class="control-label col-sm-3">Tingkat/Jenjang Pendidikan</label>
												<div class="col-sm-4">
													<select id="optPendidikan" name="optPendidikan" class="form-control" required>
													<?php
														foreach($d_pendidikan->result() as $dt){
														?>
														<option value="<?php echo $dt->id_pendidikan;?>"><?php echo $dt->nama_pendidikan;?></option>
														<?php
														}
													?>
													</select>													
												</div>												
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Nama Sekolah</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtNamaSekolah" name="txtNamaSekolah" placeholder="Nama Sekolah" required data-error="Sekolah tidak boleh kosong">
										 			<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Kota</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtKota" name="txtKota" placeholder="Kota" required data-error="Kota tidak boleh kosong">
										 			<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Tahun Lulus</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtTahunLulus" name="txtTahunLulus" placeholder="Tahun Lulus" required data-error="Tahun lulus tidak boleh kosong">
										 			<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Jurusan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtJurusan" name="txtJurusan" placeholder="Jurusan" required data-error="Jurusan tidak boleh kosong">
										 			<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Nilai Rata-rata</label>
												<div class="col-sm-9">
													<input type="number" step="any" class="form-control" id="txtNilaiRatarata" name="txtNilaiRatarata" placeholder="Nilai Rata-rata" required data-error="Nilai rata-rata tidak boleh kosong">
										 			<div class="help-block with-errors"></div>
												</div>
											</div>											
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-default btn-anim" data-dismiss="modal"><i class="ti-close"></i><span class="btn-text">batal</span></button>
											<button type="submit" id="btnSimpan" class="btn btn-success btn-anim"><i class="ti-save"></i><span class="btn-text">simpan</span></button>
										</div>
									</form>
								</div>
							</div>
							<!--/Editor-->
							<!-- <div class="row">
								<div class="form-group mb-0 mt-30"> 
									<div class="col-sm-10">
										<button type="button" class="btn btn-success btn-anim"><i class="ti-save"></i><span class="btn-text">Simpan</span></button>
										<button type="button" class="btn btn-default btn-anim"><i class="ti-arrow-left"></i><span class="btn-text">Kembali</span></button>
									</div>
								</div>
							</div> -->
							
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<!-- /Row -->
		
	
	</div>
	<!--container-fluid-->
	