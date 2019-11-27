<form class="user" method="post" action="<?= base_url('otentikasi/login'); ?>">
	<div class="form-group">
		<input type="text" class="form-control form-control-user" id="idemail" name="txtemail" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
		<?= form_error('txtemail', '<small class="text-danger pl-3">', '</small>'); ?>
	</div>
	<div class="form-group">
		<input type="password" class="form-control form-control-user" id="idpassword" name="txtpassword" placeholder="Password">
		<?= form_error('txtpassword', '<small class="text-danger pl-3">', '</small>'); ?>
	</div>
	<button type="submit" class="btn btn-primary btn-user btn-block">
		Login
	</button>
</form>