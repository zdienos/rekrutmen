<script>            
    /*FooTable Init*/
    //$("#optPendidikan").change(function () {
    //alert($("#optPendidikan :selected").attr('value')) } );
    //$('.radKelamin').on('change', function() {
    //alert($('.radKelamin:checked').attr('value')); });
    //$('input[name="radKelamin"]').on('change', function() {
        //var radioValue = $('input[name="radKelamin"]:checked').val();                
        //var radioValue=$('input:radio:checked').val();
        //alert(radioValue); });
       
        //header('Content-Type: application/json');
        //echo json_encode($data);

    	

    $(function () {
        "use strict";

        $('#dateMasuk').datetimepicker({
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
            $('#dateKeluar').datetimepicker({
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
 
                                
        /*Editing FooTable*/                
        var $modal = $('#editor-modal'),
        $editor = $('#editor'),
        $editorTitle = $('#editor-title'),
        ft = FooTable.init('#footablePekerjaan', {
            editing: {
                enabled: true,
                alwaysShow: true, 
                column: {
                        "classes": "footable-editing",
                        "name": "editing",
                        "title": "aksi",                        
                    },
                addRow: function(){
                    $modal.removeData('row');
                    $editor[0].reset();
                    $editorTitle.text('Tambah Data Pendidikan');
                    $modal.modal('show');
                    },                
                editRow: function(row){
                    var values = row.val();                   
                    $editor.find('#txtNo').val(values.txtNo);
                    $editor.find('#txtNamaPerusahaan').val(values.txtNamaPerusahaan);
                    $editor.find('#txtAlamatPerusahaan').val(values.txtAlamatPerusahaan);
                    $editor.find('#txtDivisi').val(values.txtDivisi);
                    $editor.find('#txtAlasanKeluar').val(values.txtAlasanKeluar);
                    $editor.find('#txtTglMasuk').val(values.txtTglMasuk);
                    $editor.find('#txtTglKeluar').val(values.txtTglKeluar);  
                    $editor.find('#txtUraianTugas').val(values.txtUraianTugas);                    

                    $modal.data('row', row);
                    $editorTitle.text('Edit Data Pendidikan #' + values.txtNo);
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
                    txtNamaPerusahaan: $editor.find('#txtNamaPerusahaan').val(),
                    txtAlamatPerusahaan: $editor.find('#txtAlamatPerusahaan').val(),
                    txtDivisi: $editor.find('#txtDivisi').val(),
                    txtAlasanKeluar: $editor.find('#txtAlasanKeluar').val(),
                    txtTglMasuk: $editor.find('#txtTglMasuk').val(),
                    txtTglKeluar: $editor.find('#txtTglKeluar').val(),                    
                    txtUraianTugas: $editor.find('#txtUraianTugas').val()
                    //startedOn: moment($editor.find('#startedOn').val(), 'YYYY-MM-DD'),
                    //dob: moment($editor.find('#dob').val(), 'YYYY-MM-DD')
                };

            if (row instanceof FooTable.Row){                
                row.val(values);
            } else {
                values.txtNo = uid++;
                ft.rows.add(values);
            }
            $modal.modal('hide');
        });
    });
</script>