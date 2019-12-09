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
										<th data-name="txtIDKeluarga" data-visible="false">ID Keluarga</th>
										<th data-name="txtHubungan">Hubungan Keluarga</th>
										<th data-name="txtNama">Nama</th>
										<th data-name="txtKelamin" data-breakpoints="xs">Jenis Kelamin</th>
										<th data-name="txtUsia" data-breakpoints="xs">Usia</th>
										<th data-name="idPendidikan" data-breakpoints="xs" data-visible="false">ID Pendidikan</th>										
										<th data-name="txtPendidikan" data-breakpoints="xs">Pendidikan Terakhir</th>
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
												<td><?=$d->id_keluarga;?></td>
												<td><?=$d->hubungan;?></td>
												<td><?=$d->nama;?></td>
												<td><?=$d->jenis_kelamin;?></td>
												<td><?=$d->usia;?></td>
												<td><?=$d->id_pendidikan;?></td>
												<td><?=$d->nama_pendidikan;?></td>
											</tr>
									<?php	
											$no=$no+1; 
									 		}
										 } ?>																			
									</tbody>
								</table>


								<!--Editor-->
								<div class="modal fade" id="modal-keluarga" tabindex="-1" role="dialog" aria-labelledby="editor-title">
								
								<div class="modal-dialog" role="document">
									<!-- <form class="modal-content form-horizontal" id="frmKeluarga"> -->
									<form class="modal-content form-horizontal" id="frmKeluarga" method="post" action="#" data-toggle="validator" role="form">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
											<h5 class="modal-title" id="editor-title">Add Rowzzz</h5>
										</div>
										<div class="modal-body">
											<input type="text" id="id" name="id" class="hidden"/>
											<input type="text" id="txtIDKeluarga" name="txt_idkeluarga" class="hidden"/>
											<input type="text" id="txtIDUser" name="txt_iduser" class="hidden" value="<?=$id_user;?>"/>
											
											<!-- <input type="text" id="idPendidikan" name="idPendidikan" class=""/> -->
											<div class="form-group required">
												<label for="hubungan" class="col-sm-3 control-label">Hubungan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtHubungan" name="txt_hubungan" placeholder="Hubungan keluarga" required data-error="Hubungan keluarga tidak boleh kosong">
										 			<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group required">
												<label for="nama" class="col-sm-3 control-label">Nama lengkap</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="txtNama" name="txt_nama" placeholder="Nama lengkap" required data-error="Nama lengkap tidak boleh kosong">
										 			<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label mb-10 col-sm-3 col-xs-12">Jenis Kelamin</label>
												<div class="col-sm-6 col-xs-6">																					
													<div class="radio radio-info">
														<?php 																								 
														$lakilaki='';
														$perempuan='';
														// if (trim($d_pelamar->jenis_kelamin=='l')){
														// 	$lakilaki='checked';$perempuan='';
														// } elseif (trim($d_pelamar->jenis_kelamin=='p')) {
														// 	$lakilaki='';$perempuan='checked';
														// }	
														?>
														<input type="radio" name="opt_jeniskelamin" id="radio1" value="l" <?=$lakilaki;?> required>
														<label for="radio">Laki-laki</label>
														<input  type="radio" name="opt_jeniskelamin" id="radio2" value="p" <?=$perempuan;?> required>
														<label style="margin-left:50px" for="radio2">Perempuan</label>
													</div>
												</div>																						
											</div>
											<div class="form-group">
												<label for="usia" class="col-sm-3 control-label">Usia</label>
												<div class="col-sm-9">
													<input type="number" class="form-control" id="txtUsia" name="txt_usia" placeholder="Usia" required data-error="Usia tidak boleh kosong">
										 			<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-3">Pendidikan</label>
												<div class="col-sm-4">
													<select id="optPendidikan" name="opt_pendidikan" class="form-control" required>
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
										</div>
										<div class="modal-footer">
											<!-- <button type="submit" class="btn btn-success">Simpan</button> -->
											<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
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
	