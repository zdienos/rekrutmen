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


		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="<?=base_url('assets/jquery/dist/jquery.min.js')?>"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?=base_url('assets/bootstrap/dist/js/bootstrap.min.js')?>"></script>
		<script src="<?=base_url('assets/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')?>"></script>

		<!-- Moment JavaScript -->
		<!-- <script type="text/javascript" src="< ?=base_url('assets/moment/min/moment-with-locales.min.js')?>"></script> -->
        
        
        <!-- Moment JavaScript -->
		<script src="<?=base_url('assets/moment/min/moment.min.js')?>"></script>
		<!-- Data table JavaScript -->
        <script src="<?=base_url('assets/FooTable/compiled/footable.js')?>" type="text/javascript"></script>
		<!-- <script src="< ?=base_url('assets/js/footable-data.js')?>"></script> -->

		<!-- Bootstrap Datetimepicker JavaScript -->
		<script type="text/javascript" src="<?=base_url('assets/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')?>"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?=base_url('assets/js/jquery.slimscroll.js')?>"></script>

		<!-- Sweet-Alert  -->
		<script src="<?=base_url('assets/sweetalert/dist/sweetalert.min.js')?>"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="<?=base_url('assets/js/dropdown-bootstrap-extended.js')?>"></script>
		
		<!-- Owl JavaScript -->
		<script src="<?=base_url('assets/owl.carousel/dist/owl.carousel.min.js')?>"></script>
	
		<!-- Switchery JavaScript -->
		<script src="<?=base_url('assets/switchery/dist/switchery.min.js')?>"></script>

		<!-- Bootstrap Select JavaScript -->
		<script src="<?=base_url('assets/bootstrap-select/dist/js/bootstrap-select.min.js')?>"></script>
	
		<script>
			<?php
				if($this->session->flashdata('psn_sukses'))
				{
					$pesan = $this->session->flashdata('psn_sukses');				
					echo 'swal({   
						title: "Sukses",   
						type: "success", 
						text: "'.$pesan.'",
						confirmButtonColor: "#01c853",   
						timer: 2000,   
             			showConfirmButton: false 
					});';				
				}
				?>
				<?php
				if($this->session->flashdata('psn_error'))
				{
					$pesan = $this->session->flashdata('psn_error');			
					echo 'swal({   
						title: "Error",   
						type: "error", 
						text: "'.$pesan.'",
						confirmButtonColor: "#01c853",   
						timer: 2000,   
            			showConfirmButton: false 
					});';				
				}
			?>
		</script>

		<!-- Init JavaScript -->
		<script src="<?=base_url('assets/js/init.js')?>"></script>




