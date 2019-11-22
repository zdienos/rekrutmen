		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="<?=base_url('assets/jquery/dist/jquery.min.js')?>"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?=base_url('assets/bootstrap/dist/js/bootstrap.min.js')?>"></script>
		<script src="<?=base_url('assets/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')?>"></script>

		<!-- Moment JavaScript -->
		<script type="text/javascript" src="<?=base_url('assets/moment/min/moment-with-locales.min.js')?>"></script>

		<!-- Bootstrap Datetimepicker JavaScript -->
		<script type="text/javascript" src="<?=base_url('assets/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')?>"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?=base_url('assets/js/jquery.slimscroll.js')?>"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="<?=base_url('assets/js/dropdown-bootstrap-extended.js')?>"></script>
		
		<!-- Owl JavaScript -->
		<script src="<?=base_url('assets/owl.carousel/dist/owl.carousel.min.js')?>"></script>
	
		<!-- Switchery JavaScript -->
		<script src="<?=base_url('assets/switchery/dist/switchery.min.js')?>"></script>

		<!-- Bootstrap Select JavaScript -->
		<script src="<?=base_url('assets/bootstrap-select/dist/js/bootstrap-select.min.js')?>"></script>
	
		<!-- Init JavaScript -->
		<script src="<?=base_url('assets/js/init.js')?>"></script>

		<script>
			/* Datetimepicker Init*/
			$('#datetimepicker1').datetimepicker({
					useCurrent: false,
					icons: {
							time: "fa fa-clock-o",
							date: "fa fa-calendar",
							up: "fa fa-arrow-up",
							down: "fa fa-arrow-down"
						},
						format: 'DD/MM/YYYY'
				}).on('dp.show', function() {
				if($(this).data("DateTimePicker").date() === null)
					$(this).data("DateTimePicker").date(moment());
			});
		</script>
	</body>
</html>