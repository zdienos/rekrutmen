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
        

        $('#footableTess').footable({
		"columns": [
            {'name':"id","title":"ID","breakpoints":"xs sm","type":"number","style":{"width":80,"maxWidth":80}},
            {'name':"jjnama","title":"First Name"},
            {'name':"nik","title":"Last Name"},
            {'name':"departemen","title":"Never seen but always around","visible":false,"filterable":false},
            {'name':"lokasi","title":"Job Title","breakpoints":"xs sm","style":{"maxWidth":200,"overflow":"hidden","textOverflow":"ellipsis","wordBreak":"keep-all","whiteSpace":"nowrap"}},
            {'name':"catatan","title":"Status"}
            ],
		"rows": $.get('http://localhost/kumala/karyawan/karyawan_json')
	    });
                
                        
        /*Editing FooTable*/                
        var $modal = $('#editor-modal'),
        $editor = $('#editor'),
        $editorTitle = $('#editor-title'),
        ft = FooTable.init('#footableKeluarga', {
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
                    var kelamin = values.txtKelamin;                     
                    if (kelamin=="Laki-laki") {$('#radio1').prop('checked',true);$('#radio2').prop('checked',false);}
                     else {$('#radio1').prop('checked',false);$('#radio2').prop('checked',true);}                         
                    $editor.find('#txtUsia').val(values.txtUsia);
                    var zz = values.txtPendidikan;  

                    $('#optPendidikan').val(zz);  //bisa


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
                    txtKelamin: $editor.find('input:radio:checked').val(),
                    txtUsia: $editor.find('#txtUsia').val(),
                    txtPendidikan: $editor.find('#optPendidikan').val()
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