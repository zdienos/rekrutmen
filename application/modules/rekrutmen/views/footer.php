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
            
            /*FooTable Init*/
            $(function () {
                "use strict";
                                
                /*Editing FooTable*/                
                var $modal = $('#editor-modal'),
                $editor = $('#editor'),
                $editorTitle = $('#editor-title'),
                ft = FooTable.init('#footable_2', {
                    editing: {
                        enabled: true,
                        alwaysShow: true, 
                        addRow: function(){
                            $modal.removeData('row');
                            $editor[0].reset();
                            $editorTitle.text('Tambah Data Keluarga');
                            $modal.modal('show');
                        },
                        editRow: function(row){
                            var values = row.val();
                            $editor.find('#txtNo').val(values.txtNo);
                            $editor.find('#txtHubungan').val(values.txtHubungan);
                            $editor.find('#txtNama').val(values.txtNama);
                            $editor.find('#txtKelamin').val(values.txtKelamin);
                            $editor.find('#txtUsia').val(values.txtUsia);
                            $editor.find('#txtPendidikan').val(values.txtPendidikan);

                            $modal.data('row', row);
                            $editorTitle.text('Edit Data Keluarga #' + values.txtNo);
                            $modal.modal('show');
                        },
                        deleteRow: function(row){
                            if (confirm('Are you sure you want to delete the row?')){
                                row.delete();
                            }
                        }			
                    }
                }),
                uid = 3;

                $editor.on('submit', function(e){
                    if (this.checkValidity && !this.checkValidity()) return;
                    e.preventDefault();
                    var row = $modal.data('row'),
                        values = {
                            txtNo: $editor.find('#txtNo').val(),
                            txtHubungan: $editor.find('#txtHubungan').val(),
                            txtNama: $editor.find('#txtNama').val(),
                            txtKelamin: $editor.find('#txtKelamin').val(),
                            txtUsia: $editor.find('#txtUsia').val(),
                            txtPendidikan: $editor.find('#txtPendidikan').val()
                            //startedOn: moment($editor.find('#startedOn').val(), 'YYYY-MM-DD'),
                            //dob: moment($editor.find('#dob').val(), 'YYYY-MM-DD')
                        };

                    if (row instanceof FooTable.Row){
                        console.log('this');
                        row.val(values);
                    } else {
                        values.txtNo = uid++;
                        ft.rows.add(values);
                    }
                    $modal.modal('hide');
                });
            });
                    
		</script>
	</body>
</html>